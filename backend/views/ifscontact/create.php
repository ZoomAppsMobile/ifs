<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ifscontact */

$this->title = 'Create Ifscontact';
$this->params['breadcrumbs'][] = ['label' => 'Ifscontacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ifscontact-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
