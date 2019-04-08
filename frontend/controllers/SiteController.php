<?php

namespace frontend\controllers;


use common\models\Banner;
use common\models\Biotranscon;
use common\models\Biotranscost;
use common\models\Biotransfact;
use common\models\Biotransprocess;
use common\models\Biotransprocessbutton;
use common\models\Biotranssub;
use common\models\Donationhowstart;
use common\models\Donationprogramcon;
use common\models\Donationprogramtype;
use common\models\Ifsabout;
use common\models\Ifscontact;
use common\models\Ifsdiff;
use common\models\Ifsfacts;
use common\models\Ifsmedteam;
use common\models\Ifsservice;
use common\models\Ifssub;
use common\models\Ifsteam;
use common\models\LoginForm;
use common\models\Parentbenefit;
use common\models\Parentdoctor;
use common\models\Parentfaq;
use common\models\Parenthowallwork;
use common\models\Parenthowstart;
use common\models\Parentlaw;
use common\models\Parentprogram;
use common\models\Parentstory;
use common\models\Parentsub;
use common\models\Parentwhykazak;
use common\models\Profiles;
use common\models\Submenu;
use common\models\User;
use common\models\UserAgree;
use frontend\models\SignupForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use common\models\Buttons;
use common\models\Contact;
use common\models\Mainprogress;
use common\models\Mainslide;
use common\models\Menu;


class SiteController extends FrontendController
{



    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
//        Yii::$app->session['success_registration'] = 0;
        $model = Menu::find()->where('url = "/" AND country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->one();
        $this->setMeta($model->metaName, $model->metaKey, $model->metaDesc);
        $mainSlides = Mainslide::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $mainProgress = Mainprogress::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();

        return $this->render('index',compact('mainProgress','mainSlides'));
    }

    public function actionIfs()
    {
        $model = Menu::find()->where('url = "/site/ifs" AND country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->one();
        $this->setMeta($model->metaName, $model->metaKey, $model->metaDesc);
        $banner = Banner::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $ifs['main'] = $banner[0];
        $ifs['sub'] = Submenu::find()->where('menu_id = 2 AND country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $ifs['about'] = Ifsabout::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->one();
        $ifs['fact'] = Ifsfacts::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $ifs['service'] = Ifsservice::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $ifs['diff'] = Ifsdiff::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $ifs['medteam'] = Ifsmedteam::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $ifs['team'] = Ifsteam::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $ifs['contact'] = Ifscontact::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->one();

        return $this->render('ifs',compact('ifs'));
    }

    public function actionParent(){
        $model = Menu::find()->where('url = "/site/parent" AND country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->one();
        $this->setMeta($model->metaName, $model->metaKey, $model->metaDesc);
        $banner = Banner::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $parent['main'] = $banner[1];
        $parent['sub'] = Submenu::find()->where('menu_id = 3 AND country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $parent['howAllWorks'] = Parenthowallwork::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->one();
        $parent['programs'] = Parentprogram::find()->where('status =1 AND country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $parent['benefits'] = Parentbenefit::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $parent['whyKazakhstan'] = Parentwhykazak::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $parent['doctors'] = Parentdoctor::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $parent['laws'] = Parentlaw::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->one();
        $parent['storyAndTesti'] = Parentstory::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $parent['faq'] = Parentfaq::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $parent['howStart'] = Parenthowstart::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        return $this->render('parent',compact('parent'));
    }

    public function actionSurrogacy(){
        return $this->render('surrogacy');
    }

    public function actionEggDonation(){
        $model = Menu::find()->where('url = "/site/egg-donation" AND country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->one();
        $this->setMeta($model->metaName, $model->metaKey, $model->metaDesc);
        $banner = Banner::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $eggdonation['main'] = $banner[3];
        $eggdonation['sub'] = Submenu::find()->where('menu_id = 5 AND country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $eggdonation['programcon'] = Donationprogramcon::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->one();
        $eggdonation['programtype'] = Donationprogramtype::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $eggdonation['howStart'] = Donationhowstart::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
//        $eggdonation['diff'] = Ifsdiff::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();

        return $this->render('egg-donation',compact('eggdonation'));
    }

    public function actionBiotransportation()
    {
        $model = Menu::find()->where('url = "/site/biotransportation" AND country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->one();
        $this->setMeta($model->metaName, $model->metaKey, $model->metaDesc);
        $banner = Banner::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $biotrans['main']  = $banner[4];
        $biotrans['sub'] = Submenu::find()->where('menu_id = 6 AND country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $biotrans['con'] = Biotranscon::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->one();
        $biotrans['fact'] = Biotransfact::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $biotrans['process'] = Biotransprocess::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();
        $biotrans['processButton'] = Biotransprocessbutton::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->one();
        $biotrans['cost'] = Biotranscost::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"])->all();

        return $this->render('biotransportation',compact('biotrans'));
    }


    public function actionSurrogate(){
        return $this->render('surrogate');
    }

    public function actionEggDonor(){
        return $this->render('egg-donor');
    }
}
