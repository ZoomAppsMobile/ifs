<?php
namespace common\models;

use Yii;

class Parentstory extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'parentstory';
    }

    public function rules()
    {
        return [
            [['name', 'city', 'contenta', 'contentb'], 'required'],
            [['contenta', 'contentb'], 'string'],
            [['name', 'city'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => 'Название',
            'city' => Yii::t('app', 'Город'),
            'contenta' => Yii::t('app', 'Главный контент'),
            'contentb' => Yii::t('app', 'Внутренний контент'),
        ];
    }
}
