<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-form" style="padding-bottom: 50px;">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-12 pl-0 pr-0">
        <div class="form-group" style="float: right;margin-top:7px;">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        </div>
        <ul id="myTab" role="tablist" class="nav nav-tabs">
            <li class="nav-item active">
                <a id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" class="nav-link active">Основное</a>
            </li>
            <li class="nav-item">
                <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" class="nav-link">Социальный сети</a>
            </li>
        </ul>
        <div id="myTabContent" class="tab-content bg-white box-shadow p-4 mb-4">
            <div id="profile" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade">


                <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'vk')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'google')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'youtube')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'ok')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'telegram')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'skype')->textInput(['maxlength' => true]) ?>

            </div>
            <div id="home" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade show active in">


                <?= $form->field($model, 'mobileTel')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'telegramTel')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'urlMap')->textInput(['maxlength' => true]) ?>



            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
