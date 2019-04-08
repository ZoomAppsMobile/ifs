<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ifsmain */

$this->title = 'Create Ifsmain';
$this->params['breadcrumbs'][] = ['label' => 'Ifsmains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ifsmain-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
