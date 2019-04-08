<?php
/**
 * Created by PhpStorm.
 * User: Yuriy
 * Date: 22.07.2018
 * Time: 2:02
 */

namespace frontend\controllers;

use common\models\Buttons;
use common\models\Contact;
use common\models\Country;
use common\models\Language;
use common\models\Menu;
use common\models\Preselect;
use Yii;
use yii\web\Controller;

class FrontendController extends Controller
{

    public function init()
    {

        $preselect = Preselect::find()->one();
        if(!isset(Yii::$app->session["country"])){
            Yii::$app->session->set('country',$preselect->country_id);
        }

        if(!isset(Yii::$app->session["lang"])){
            Yii::$app->session->set('lang',$preselect->language_id);
        }


        $menu = Menu::find()->with('menuItems')->where('country_id='.Yii::$app->session['country'].' AND language_id='.Yii::$app->session['lang'].' AND status=1')->orderBy('sort ASC')->all();
        $contact = Contact::find()->where('country_id='.Yii::$app->session['country'].' AND language_id='.Yii::$app->session['lang'])->one();
        $buttons = Buttons::find()->where('country_id='.Yii::$app->session['country'].' AND language_id='.Yii::$app->session['lang'])->all();
        $county = Country::find()->where('status=1')->orderBy('sort ASC')->all();

        Yii::$app->view->params['country'] = $county;
        Yii::$app->view->params['menu'] = $menu;
        Yii::$app->view->params['contact'] = $contact;
        Yii::$app->view->params['buttons'] = $buttons;
        Yii::$app->view->params['activeLanguage'] =  Language::getActiveLanguage();



    }

    protected function setMeta($title = null, $keywords = null, $description = null){
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
    }

    protected function sendEmail($name, $email, $message) {
        $emailSend = Yii::$app->mailer->compose()
            ->setFrom('sdulife.kz@gmail.com')
            ->setTo('nurzat.kaz@gmail.com')
            ->setSubject('Клиент хочет связаться с вами')

            ->setHtmlBody("<p>Имя: $name</p>
                                 <p>Email: $email</p>
                                 <p>Сообщения: $message</p>");
        return $emailSend->send();

    }
}