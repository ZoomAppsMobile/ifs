<?php
namespace common\models;

use Yii;

class RegistrationStep1 extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'registration_step1';
    }

    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['user_id'], 'unique'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('app', 'User ID'),
        ];
    }
}
