<?php
namespace common\models;

use Yii;

class Profiles extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'profiles';
    }

    public function rules()
    {
        return [
            [['user_id', 'first_name', 'last_name', 'email', 'vatzup', 'skype', 'telegram', 'mobile', 'fio'], 'required'],
            [['user_id'], 'integer'],
            [['created_at'], 'safe'],
            [['first_name', 'last_name', 'email', 'vatzup', 'skype', 'telegram'], 'string', 'max' => 100],
            [['mobile'], 'string', 'max' => 30],
            [['user_id'], 'unique'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('app', 'User ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'email' => Yii::t('app', 'Email'),
            'vatzup' => Yii::t('app', 'Vatzup'),
            'skype' => Yii::t('app', 'Skype'),
            'telegram' => Yii::t('app', 'Telegram'),
            'mobile' => Yii::t('app', 'Mobile'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }
}
