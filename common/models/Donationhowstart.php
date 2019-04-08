<?php
namespace common\models;

use Yii;

class Donationhowstart extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'donationhowstart';
    }

    public function rules()
    {
        return [
            [['name', 'country_id', 'language_id'], 'required'],
            [['name'], 'string'],
            [['country_id', 'language_id'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => 'Содержание',
            'country_id' => Yii::t('app', 'Country ID'),
            'language_id' => Yii::t('app', 'Language ID'),
        ];
    }
}
