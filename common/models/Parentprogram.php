<?php
namespace common\models;

use Yii;

class Parentprogram extends \yii\db\ActiveRecord
{


    public static function tableName()
    {
        return 'parentprogram';
    }

    public function rules()
    {
        return [
            [['name', 'url', 'status','buttonName'], 'required'],
            [['status'], 'integer'],
            [['name', 'url','buttonName'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png,jpg'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => 'Название',
            'image' => Yii::t('app', 'Картинка'),
            'url' => Yii::t('app', 'Ссылка'),
            'buttonName' => 'Название кнопка',
            'status' => 'Статус',
        ];
    }


    public function getImage()
    {
        return ($this->image) ? '/uploads/parent/' . $this->image : '/no-image.png';
    }
}
