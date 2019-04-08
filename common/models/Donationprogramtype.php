<?php
namespace common\models;

use Yii;

class Donationprogramtype extends \yii\db\ActiveRecord
{
    public $files;
    public $path = 'images/donationprogramtype/';

    public static function tableName()
    {
        return 'donationprogramtype';
    }

    public function rules()
    {
        return [
            [['name', 'content', 'country_id', 'language_id'], 'required'],
            [['content'], 'string'],
            [['country_id', 'language_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png,jpg,jpeg'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => 'Название',
            'image' => Yii::t('app', 'Картинка'),
            'content' => Yii::t('app', 'Содержание'),
            'country_id' => Yii::t('app', 'Country ID'),
            'language_id' => Yii::t('app', 'Language ID'),
        ];
    }

    public function getImage()
    {
        return ($this->image) ? '/uploads/eggdonation/' . $this->image : '/no-image.png';
    }
}
