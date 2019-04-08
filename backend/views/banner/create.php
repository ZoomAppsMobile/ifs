<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Biotransmain */

$this->title = 'Create Biotransmain';
$this->params['breadcrumbs'][] = ['label' => 'Biotransmains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biotransmain-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
