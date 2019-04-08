<?php
namespace common\models;

use Yii;

class Donationprogramcon extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'donationprogramcon';
    }

    public function rules()
    {
        return [
            [['content', 'country_id', 'language_id'], 'required'],
            [['content'], 'string'],
            [['country_id', 'language_id'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'content' => Yii::t('app', 'Содержание'),
            'country_id' => Yii::t('app', 'Country ID'),
            'language_id' => Yii::t('app', 'Language ID'),
        ];
    }
}
