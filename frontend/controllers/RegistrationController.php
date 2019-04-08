<?php

namespace frontend\controllers;

use common\models\Biotranssub;
use common\models\Ifssub;
use common\models\LoginForm;
use common\models\Parentsub;
use common\models\Profiles;
use common\models\RegistrationStep1;
use common\models\User;
use common\models\UserAgree;
use frontend\models\SignupForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;


class RegistrationController extends FrontendController
{
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

    public function actionStep1()
    {
        if(!Yii::$app->session['reg_user'])
            $this->redirect('/');

        $model = RegistrationStep1::findOne(Yii::$app->session['reg_user']);
        if(!$model)
            $model = new RegistrationStep1;

        if($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('step2');
        }

        return $this->render('step1', compact('model'));
    }

    public function actionStep2()
    {
        return $this->render('step2');
    }

    public function actionStep3()
    {
        return $this->render('step3');
    }
}
