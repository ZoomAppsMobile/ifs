<?php

namespace frontend\controllers;

use common\models\Biotranssub;
use common\models\Ifssub;
use common\models\LoginForm;
use common\models\Parentsub;
use common\models\Profiles;
use common\models\User;
use common\models\UserAgree;
use frontend\models\SignupForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;


class RegistrationModalController extends FrontendController
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

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                return 1;
            }else{
                $error = "";
                $errors = $model->getErrors();
                foreach($errors as $v){
                    $error .= $v[0].'<br />';
                }

                return $error;
            }
        }
    }

    public function actionSignup2()
    {
        $user = User::findOne(Yii::$app->session['success_registration']);
        $user->scenario = User::STEP1;

        $profile = Profiles::findOne(Yii::$app->session['success_registration']);
        if(!$profile)
            $profile = new Profiles();

        if ($profile->load(Yii::$app->request->post()) && $user->load(Yii::$app->request->post())) {
            $profile->fio     = $profile->first_name.' '.$profile->last_name;
            $profile->user_id = $user->id;
            if($profile->save()){
                $user->setPassword($user->password);
                if($user->save()){
                    Yii::$app->session['success_registration'] = 0;
                    Yii::$app->session['success_registration_step2'] = $user->id;
                    return 1;
                }else{
                    $error = "";
                    $errors = $user->getErrors();
                    foreach($errors as $v){
                        $error .= $v[0].'<br />';
                    }

                    return $error;
                }
            }else{
                $error = "";
                $errors = $profile->getErrors();
                foreach($errors as $v){
                    $error .= $v[0].'<br />';
                }

                return $error;
            }
        }
    }

    public function actionSignup3()
    {
        Yii::$app->session['success_registration_step3'] = Yii::$app->session['success_registration_step2'];
        Yii::$app->session['success_registration_step2'] = 0;

        $profile = Profiles::findOne(Yii::$app->session['success_registration_step3']);

        $array = [];
        $array['fio'] = $profile->fio;
        $array['email'] = $profile->email;
        $array['created_at'] = $profile->created_at;

        return json_encode($array);
    }

    public function actionSignup4()
    {
        $model = UserAgree::findOne(Yii::$app->session['success_registration_step3']);
        if(!$model)
            $model = new UserAgree();

        $profile = Profiles::findOne(Yii::$app->session['success_registration_step3']);

        $model->agree1 = '';
        $model->agree2 = '';
        $model->agree3 = '';
        $model->agree4 = '';
        $model->agree5 = '';
        $model->agree6 = '';
        $model->agree7 = '';
        $model->agree8 = '';
        $model->agree9 = '';
        $model->agree10 = '';

        if ($model->load(Yii::$app->request->post())){
            $model->user_id = Yii::$app->session['success_registration_step3'];
            if($profile->load(Yii::$app->request->post())) {
                if ($model->save()) {
                    if($profile->save()){
                        Yii::$app->session['reg_user'] = Yii::$app->session['success_registration_step3'];
                        Yii::$app->session['success_registration_step3'] = 0;
                        return 1;
                    } else {
                        $error = "";
                        $errors = $profile->getErrors();
                        foreach ($errors as $v) {
                            $error .= $v[0] . '<br />';
                        }

                        return $error;
                    }
                } else {
                    $error = "Для дальнейшей регистрации, нужно согласится со всеми условиями!";
                    return $error;
                }
            }
        }else{
            $error = "Для дальнейшей регистрации, нужно согласится со всеми условиями!";
            return $error;
        }
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionNewPassword()
    {
        $user = User::findOne(Yii::$app->user->id);

        $error = "";
        if ($_POST['password']) {
            if($_POST['password'] == $_POST['repear_password'] && iconv_strlen($_POST['password']) >= 6) {
                $user->setPassword($_POST['password']);
                $user->save();
            }
            if($_POST['password'] != $_POST['repear_password']){
                $error .= "Пароли не совпадают.<br />";
            }
            if(iconv_strlen($_POST['password']) < 6){
                $error .= "Пароль должен содержать минимум 6 символов.";
            }
        }
        return Yii::$app->response->redirect(['cabinet','error' => $error]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionConfirm($token)
    {
        if (empty($token) || !is_string($token) || null === $user = User::findByToken($token)) {
//            \Yii::$app->session->addFlash('danger', \Yii::t('main-message', 'Ссылка неверна либо устарела. Запросите данные повторно.'));

            echo 'Ошибка.';
        } else {
            $user->status = User::STATUS_ACTIVE;
            $user->role   = 1;
            $user->removeToken();
            $user->save(false);

            Yii::$app->session['success_registration'] = $user->id;

            return $this->redirect('/?success=true');
//            \Yii::$app->session->addFlash('success', \Yii::t('main-message', 'Email успешно подтвержден. Вы можете войти на сайт.'));
        }
    }
}
