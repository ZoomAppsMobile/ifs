<?php
namespace common\models;

use Yii;

class Parentbenefit extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'parentbenefit';
    }

    public function rules()
    {
        return [
            [['name', 'content'], 'required'],
            [['content'], 'string'],
            [['isBig'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => 'Название',
            'content' => Yii::t('app', 'Содержание'),
            'isBig' => 'Контент',
        ];
    }
}
