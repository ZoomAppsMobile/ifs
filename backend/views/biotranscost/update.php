<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Biotranscost */

$this->title = 'Редактирования: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Biotranscosts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="biotranscost-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
