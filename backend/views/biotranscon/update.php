<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Biotranscon */

$this->title = 'Редактирования';
$this->params['breadcrumbs'][] = ['label' => 'Biotranscons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="biotranscon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
