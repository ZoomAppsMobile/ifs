<?php
namespace common\models;

use Yii;

class Preselect extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'preselect';
    }

    public function rules()
    {
        return [
            [['country_id', 'language_id'], 'required'],
            [['country_id', 'language_id'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'country_id' => Yii::t('app', 'Country ID'),
            'language_id' => Yii::t('app', 'Language ID'),
        ];
    }

    public function getLang()
    {
        return $this->hasOne(Language::className(), ['id' => 'language_id']);
    }

    public function getLangName(){
        return (isset($this->lang))? $this->lang->name:'Не задан';
    }


    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }

    public function getCountryName(){
        return (isset($this->country))? $this->country->name:'Не задан';
    }
}
