<div class="capro-contacts">
    <div class="container">
        <div class="title">
            <h3>Регистрация</h3>
            <?=$message?>
        </div>

        <?php $form = \yii\widgets\ActiveForm::begin(['id' => 'login-form']); ?>
        <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
        <div class="input-wrapper">
            <p>Логин<span>*</span></p>
            <input type="text" name="SignupForm[username]" value="<?=$model->username?>">
            <div style="color:red;"><?=$model->getErrors()['username'][0]?></div>
        </div>

        <div class="input-wrapper">
            <p>E-mail<span>*</span></p>
            <input type="text" name="SignupForm[email]" value="<?=$model->email?>">
            <div style="color:red;"><?=$model->getErrors()['email'][0]?></div>
        </div>

        <div class="input-wrapper">
            <p>Пароль<span>*</span></p>
            <input type="password" name="SignupForm[password]" value="">
            <div style="color:red;"><?=$model->getErrors()['password'][0]?></div>
        </div>

        <button class="btn-send">
            Отправить
        </button>
        <?php \yii\widgets\ActiveForm::end(); ?>
    </div>
</div>