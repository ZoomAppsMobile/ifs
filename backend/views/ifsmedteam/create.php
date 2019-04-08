<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ifsmedteam */

$this->title = 'Cоздания сотрудника';
$this->params['breadcrumbs'][] = ['label' => 'Ifsmedteams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ifsmedteam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
