<?php
namespace common\models;

use backend\models\search\MainslideSearch;
use Yii;

class Countrylang extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'countrylang';
    }

    public function rules()
    {
        return [
            [['country_id', 'language_id', 'status', 'sort'], 'required'],
            [['country_id', 'language_id', 'status', 'sort'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'country_id' => Yii::t('app', 'Страна'),
            'language_id' => Yii::t('app', 'Язык'),
            'status' => 'Статус',
            'sort' => 'Сортировка',
        ];
    }

    public function beforeSave($insert){
        if($this->isNewRecord) {
            $model = Countrylang::find()->orderBy('sort DESC')->one();
            if (!$model || $this->id != $model->id) {
                $this->sort = $model->sort + 1;
            }
        }
        return parent::beforeSave($insert);
    }

    public function getLang()
    {
        return $this->hasOne(Language::className(), ['id' => 'language_id']);
    }

    public function getLangName(){
        return (isset($this->lang))? $this->lang->name:'Не задан';
    }


    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }

    public function getCountryName(){
        return (isset($this->country))? $this->country->name:'Не задан';
    }

    public static function createLanguageContent($country_id, $language_id){

        $menu = Menu::find()->where('country_id=1 AND language_id=1')->all();
        foreach ($menu as $v){
            $newMenu = new Menu();
            $newMenu->text = $v->text;
            $newMenu->status = $v->status;
            $newMenu->metaName = $v->metaName;
            $newMenu->metaDesc = $v->metaDesc;
            $newMenu->metaKey = $v->metaKey;
            $newMenu->url = $v->url;
            $newMenu->sort = $v->sort;
            $newMenu->country_id = $country_id;
            $newMenu->language_id = $language_id;
            $newMenu->save(false);
        }

        $submenu = Submenu::find()->where('country_id=1 AND language_id=1')->all();
        foreach ($submenu as $v){
            $newSubmenu = new Submenu();
            $newSubmenu->name = $v->name;
            $newSubmenu->status = $v->status;
            $newSubmenu->menu_id = $v->menu_id;
            $newSubmenu->url = $v->url;
            $newSubmenu->sort = $v->sort;
            $newSubmenu->country_id = $country_id;
            $newSubmenu->language_id = $language_id;
            $newSubmenu->save(false);
        }



        $contact = Contact::find()->where('country_id=1 AND language_id=1')->all();
        foreach ($contact as $v){
            $contact = new Contact();
            $contact->mobileTel = $v->mobileTel;
            $contact->telegramTel = $v->telegramTel;
            $contact->email = $v->email;
            $contact->address = $v->address;
            $contact->facebook = $v->facebook;
            $contact->vk = $v->vk;
            $contact->instagram = $v->instagram;
            $contact->twitter = $v->twitter;
            $contact->google = $v->google;
            $contact->ok = $v->ok;
            $contact->telegram = $v->telegram;
            $contact->skype = $v->skype;
            $contact->urlMap = $v->urlMap;
            $contact->country_id = $country_id;
            $contact->language_id = $language_id;
            $contact->save(false);
        }


        $bannerButtons = Buttons::find()->where('country_id=1 AND language_id=1')->all();
        foreach ($bannerButtons as $v){
            $bannerButtons = new Buttons();
            $bannerButtons->name = $v->name;
            $bannerButtons->url = $v->url;
            $bannerButtons->country_id = $country_id;
            $bannerButtons->language_id = $language_id;
            $bannerButtons->save(false);
        }


        $mainSlide = Mainslide::find()->where('country_id=1 AND language_id=1')->all();
        foreach ($mainSlide as $v){
            $newSlide = new Mainslide();
            $newSlide->littleTitle = $v->littleTitle;
            $newSlide->bigTitle = $v->bigTitle;
            $newSlide->slogan = $v->slogan;
            $newSlide->image = $v->image;
            $newSlide->content = $v->content;
            $newSlide->cssNumber = $v->cssNumber;
            $newSlide->country_id = $country_id;
            $newSlide->language_id = $language_id;
            $newSlide->save(false);
        }

        $mainProgress = Mainprogress::find()->where('country_id=1 AND language_id=1')->all();
        foreach ($mainProgress as $v){
            $newProgress = new Mainprogress();
            $newProgress->content = $v->content;
            $newProgress->country_id = $country_id;
            $newProgress->language_id = $language_id;
            $newProgress->save(false);
        }
    }






    public static function deleteLanguageContent($country_id, $language_id){

        Menu::deleteAll('country_id='.$country_id.' AND language_id='.$language_id);
        Submenu::deleteAll('country_id='.$country_id.' AND language_id='.$language_id);
        Contact::deleteAll('country_id='.$country_id.' AND language_id='.$language_id);
        Buttons::deleteAll('country_id='.$country_id.' AND language_id='.$language_id);
        Mainslide::deleteAll('country_id='.$country_id.' AND language_id='.$language_id);
        Mainprogress::deleteAll('country_id='.$country_id.' AND language_id='.$language_id);
        Contact::deleteAll('country_id='.$country_id.' AND language_id='.$language_id);
    }


    public static function deleteCountryContent($country_id){

        Menu::deleteAll('country_id='.$country_id);
        Submenu::deleteAll('country_id='.$country_id);
        Contact::deleteAll('country_id='.$country_id);
        Buttons::deleteAll('country_id='.$country_id);
        Mainslide::deleteAll('country_id='.$country_id);
        Mainprogress::deleteAll('country_id='.$country_id);
        Contact::deleteAll('country_id='.$country_id);
    }


}
