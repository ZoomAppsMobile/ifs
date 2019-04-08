<?php
namespace common\models;

use Yii;

class Country extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'country';
    }

    public function rules()
    {
        return [
            [['name', 'status', 'sort'], 'required'],
            [['status', 'sort'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => 'Название',
            'status' => 'Статус',
            'sort' => 'Сортировка',
        ];
    }

    public function beforeSave($insert){
        if($this->isNewRecord) {
            $model = Country::find()->orderBy('sort DESC')->one();
            if (!$model || $this->id != $model->id) {
                $this->sort = $model->sort + 1;
            }
        }
        return parent::beforeSave($insert);
    }

    public static function getList(){
        return \yii\helpers\ArrayHelper::map(Country::find()->all(),'id','name');
    }
}
