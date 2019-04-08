<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ifsservice */

$this->title = 'Редактирования: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ifsservices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ifsservice-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
