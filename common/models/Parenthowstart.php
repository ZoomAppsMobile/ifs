<?php
namespace common\models;

use Yii;

class Parenthowstart extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'parenthowstart';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => 'Название',
        ];
    }
}
