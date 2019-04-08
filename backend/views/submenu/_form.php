<?php

use common\models\Menu;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Submenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="submenu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([0 => 'Скрыто', 1 => 'Доступно'], ['prompt' => '']) ?>

    <?= $form->field($model, 'menu_id')->dropDownList(Menu::getList()) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
