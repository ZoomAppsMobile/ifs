<?php
namespace common\models;

use Yii;

class Language extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'language';
    }

    public function rules()
    {
        return [
            [['name', 'status'], 'required'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => 'Название',
            'status' => 'Статус',
        ];
    }



    public static function getList(){
        return \yii\helpers\ArrayHelper::map(Language::find()->all(),'id','name');
    }

    Public static function getActiveLanguage(){
        $activeLanguage = Language::find()->where('status=1')->all();
        if($activeLanguage != null){
            $arr = '(';
            foreach ($activeLanguage as $v){
                $arr.=$v->id.',';
            }
            $arr = substr($arr,0,strlen($arr)-1);
            $arr.= ')';
        }
        return $arr;
    }
}
