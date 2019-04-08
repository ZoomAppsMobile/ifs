<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ifsmain */

$this->title = 'Редактирования баннера';
$this->params['breadcrumbs'][] = ['label' => 'Ifsmains', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ifsmain-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
