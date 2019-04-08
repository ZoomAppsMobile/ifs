<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14.02.2019
 * Time: 11:00
 */

namespace backend\controllers;

use Yii;

class LangController extends BackendController
{

    public function actionSetCountry($country){

        Yii::$app->session->set('country',$country);

        $this->redirect($_SERVER['HTTP_REFERER']);
    }


    public function actionSetLang($lang){

        Yii::$app->session->set('lang',$lang);



        $this->redirect($_SERVER['HTTP_REFERER']);
    }
}