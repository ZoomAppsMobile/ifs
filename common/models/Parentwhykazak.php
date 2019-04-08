<?php
namespace common\models;

use Yii;

class Parentwhykazak extends \yii\db\ActiveRecord
{
    public $files;
    public $path = 'images/parentwhykazak/';

    public static function tableName()
    {
        return 'parentwhykazak';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
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
        ];
    }

    public function getImage()
    {
        return ($this->image) ? '/uploads/parent/' . $this->image : '/no-image.png';
    }


}
