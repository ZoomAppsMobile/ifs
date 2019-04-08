<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $text
 * @property int $status
 * @property string $metaName
 * @property string $metaDesc
 * @property string $metaKey
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'status', 'metaName', 'metaDesc', 'metaKey'], 'required'],
            [['status','country_id','language_id'], 'integer'],
            [['metaDesc', 'metaKey'], 'string'],
            [['text', 'metaName'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => '	Заголовок',
            'status' => 'Статус',
            'metaName' => 'Мета Названия',
            'metaDesc' => 'Мета Описание',
            'metaKey' => 'Ключевые слова',
        ];
    }


    public static function getList(){
        return \yii\helpers\ArrayHelper::map(Menu::find()->all(),'id','text');
    }

    public function getMenuItems(){
        return $this->hasMany(Submenu::className(), ['menu_id' => 'id'])->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"].' AND status=1');
    }
}
