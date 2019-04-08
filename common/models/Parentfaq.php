<?php
namespace common\models;

use Yii;

class Parentfaq extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'parentfaq';
    }

    public function rules()
    {
        return [
            [['name', 'content'], 'required'],
            [['content'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => 'Вопрос',
            'content' => Yii::t('app', 'Содержание'),
        ];
    }
}
