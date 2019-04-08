<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ifscontact */

$this->title = 'Update Ifscontact: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ifscontacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ifscontact-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
