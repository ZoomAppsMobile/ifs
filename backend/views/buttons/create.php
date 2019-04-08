<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Buttons */

$this->title = 'Создания кнопка';
$this->params['breadcrumbs'][] = ['label' => 'Buttons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buttons-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
