<?php
namespace common\models;

use Yii;

class Parenthowallwork extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'parenthowallwork';
    }

    public function rules()
    {
        return [
            [['url', 'status'], 'required'],
            [['url'], 'string'],
            [['status'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'url' => Yii::t('app', 'Ссылка'),
            'status' => 'Статус',
        ];
    }
}
