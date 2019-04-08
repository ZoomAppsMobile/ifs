<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property integer $isAdmin
 * @property string $photo
 *
 * @property Comment[] $comments
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = -1;
    const STATUS_READY   = 0;
    const STATUS_ACTIVE  = 1;

    const ROLE_GUEST     = 1;
    const ROLE_USER      = 2;
    const ROLE_AUTHOR    = 3;
    const ROLE_MANAGER   = 4;
    const ROLE_ADMIN     = 5;
    const ROLE_DEVELOPER = 20;

    const STEP1 = 'step1';

    public $password;
    public $password_repeat;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * @inheritdoc
     */
//    public function rules()
//    {
//        return [
//            [['isAdmin'], 'integer'],
//            [['name', 'email', 'password', 'photo'], 'string', 'max' => 255],
//        ];
//    }
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],

            [['password', 'password_repeat'], 'required'],
            ['password', 'string', 'min' => 6],
            ['password_repeat', 'compare', 'compareAttribute' => 'password', 'message' => 'Пароли не совпадают'],
        ];
    }

    public function scenarios()
    {
        return [
            self::STEP1 => ['password', 'password_repeat'],
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'email' => 'E-mail',
            'password' => 'Пароль',
            'isAdmin' => 'Is Admin',
            'photo' => 'Photo',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($insert) {
                if (empty($this->password_hash)) {
                    $this->setPassword(\Yii::$app->security->generateRandomString());
                }
                if ($this->status == self::STATUS_READY) {
                    $this->generateToken();
                }
                $this->generateAuthKey();
            }

            return true;
        }

        return false;
    }
    /**
     * Generates new password reset token
     */
    public function generateToken()
    {
        $this->access_token = \Yii::$app->security->generateRandomString().'_'.time();
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    public static function findByEmail($email)
    {
        return User::find()->where(['email'=>$email])->one();
    }

    public function create()
    {
        return $this->save(false);
    }

    public function saveFromVk($uid, $name, $photo)
    {
        $user = User::findOne($uid);
        if($user)
        {
            return Yii::$app->user->login($user);
        }

        $this->id = $uid;
        $this->name = $name;
        $this->photo = $photo;
        $this->create();

        return Yii::$app->user->login($this);
    }

    public function getImage()
    {
        return $this->photo;
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    public static function findByToken($token)
    {
//        if (!static::isTokenValid($token)) {
//            return null;
//        }

        return static::findOne(['access_token' => $token]);
    }

    public static function isTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int)substr($token, strrpos($token, '_') + 1);
        $expire    = Settings::paramOf('user.password.reset.token.expire', 3600);

        return $timestamp + $expire >= time();
    }

    public function removeToken()
    {
        $this->access_token = null;
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        if ($insert) {
            if ($this->status == self::STATUS_READY) {
                \Yii::$app->session->setFlash('success', 'Учетная запись зарегистрирована!');
                \Yii::$app->mailer
                    ->compose(['html' => 'signupConfirm-html', 'text' => 'signupConfirm-text'], ['user' => $this])
                    ->setFrom([\Yii::$app->params['adminEmail'] => \Yii::$app->name.' robot'])
                    ->setTo($this->email)
                    ->setSubject('Подтверждение email для '.\Yii::$app->name)
                    ->send();
            }
        }
    }
}
