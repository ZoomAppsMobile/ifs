<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "submenu".
 *
 * @property int $id
 * @property string $name
 * @property int $status
 * @property int $menu_id
 */
class Submenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'submenu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'status', 'menu_id'], 'required'],
            [['status', 'menu_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'status' => 'Статус',
            'menu_id' => 'Меню',
        ];
    }

    public function getMenu()
    {
        return $this->hasOne(Menu::className(), ['id' => 'menu_id']);
    }

    public function getMenuName(){
        return (isset($this->menu))? $this->menu->text:'Не задан';
    }


    public static function getList(){
        return \yii\helpers\ArrayHelper::map(Submenu::find()->all(),'id','name');
    }


}
