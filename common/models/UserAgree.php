<?php
namespace common\models;

use Yii;

class UserAgree extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'user_agree';
    }

    public function rules()
    {
        return [
            [['user_id', 'agree1', 'agree2', 'agree3', 'agree4', 'agree5', 'agree6', 'agree7', 'agree8', 'agree9', 'agree10'], 'required'],
            [['user_id', 'agree1', 'agree2', 'agree3', 'agree4', 'agree5', 'agree6', 'agree7', 'agree8', 'agree9', 'agree10'], 'integer'],
            [['created_at'], 'safe'],
            [['user_id'], 'unique'],

//            ['agree1', 'compare', 'compareAttribute' => 'Agree', 'message' => 'Нужно подтвердить 11'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('app', 'User ID'),
            'agree1' => Yii::t('app', 'Agree1'),
            'agree2' => Yii::t('app', 'Agree2'),
            'agree3' => Yii::t('app', 'Agree3'),
            'agree4' => Yii::t('app', 'Agree4'),
            'agree5' => Yii::t('app', 'Agree5'),
            'agree6' => Yii::t('app', 'Agree6'),
            'agree7' => Yii::t('app', 'Agree7'),
            'agree8' => Yii::t('app', 'Agree8'),
            'agree9' => Yii::t('app', 'Agree9'),
            'agree10' => Yii::t('app', 'Agree10'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }
//
//    public function getAgree()
//    {
//        return $this->agree1;
//    }
}
