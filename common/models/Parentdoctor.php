<?php
namespace common\models;

use Yii;

class Parentdoctor extends \yii\db\ActiveRecord
{
    public $files;
    public $path = 'images/parentdoctor/';

    public static function tableName()
    {
        return 'parentdoctor';
    }

    public function rules()
    {
        return [
            [['name', 'contenta', 'contentb'], 'required'],
            [['contenta', 'contentb'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png,jpg'],

        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => 'Название',
            'image' => Yii::t('app', 'Картинка'),
            'contenta' => Yii::t('app', 'Достижения'),
            'contentb' => Yii::t('app', 'Образование'),
        ];
    }


    public function getImage()
    {
        return ($this->image) ? '/uploads/parent/' . $this->image : '/no-image.png';
    }
}
