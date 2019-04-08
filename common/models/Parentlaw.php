<?php
namespace common\models;

use Yii;

class Parentlaw extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'parentlaw';
    }

    public function rules()
    {
        return [
            [['contenta', 'contentb'], 'required'],
            [['contenta', 'contentb'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'contenta' => Yii::t('app', 'Содержания слева'),
            'contentb' => Yii::t('app', 'Содержания справа' ),
        ];
    }
}
