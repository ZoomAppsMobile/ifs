<div class="capro-contacts">
    <div class="container">
        <div class="title">
            <h3>Вход</h3>
            <?=$message?>
        </div>

        <?php $form = \yii\widgets\ActiveForm::begin(['id' => 'login-form']); ?>
            <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
            <div class="input-wrapper">
                <p>Логин<span>*</span></p>
                <input type="text" name="LoginForm[username]" value="<?=$model->username?>">
            </div>

            <div class="input-wrapper">
                <p>Пароль<span>*</span></p>
                <input type="password" name="LoginForm[password]" value="">
            </div>

            <div class="input-wrapper">
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </div>
		
            <div class="input-wrapper">
                <a href="/registration/step1">Зарегистрироваться</a>
            </div>
		
            <button class="btn-send">
                Отправить
            </button>
        <?php \yii\widgets\ActiveForm::end(); ?>
    </div>
</div>










