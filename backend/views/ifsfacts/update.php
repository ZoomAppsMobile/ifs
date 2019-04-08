<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ifsfacts */

$this->title = ' Редактирования';
$this->params['breadcrumbs'][] = ['label' => 'Ifsfacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ifsfacts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
