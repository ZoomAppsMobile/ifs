<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 02.04.2019
 * Time: 12:43
 */

namespace backend\controllers;


use common\models\Country;
use common\models\Language;
use common\models\Preselect;
use Yii;
use yii\web\Controller;

class BackendController extends Controller
{

    public function init()
    {

        $preselect = Preselect::find()->one();
        $county = Country::find()->orderBy('sort ASC')->all();

        Yii::$app->view->params['country'] = $county;




        if(!isset(Yii::$app->session["country"])){
            Yii::$app->session->set('country',$preselect->country_id);
        }

        if(!isset(Yii::$app->session["lang"])){
            Yii::$app->session->set('lang',$preselect->language_id);
        }



    }

}