<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ifsabout */

$this->title = 'Create Ifsabout';
$this->params['breadcrumbs'][] = ['label' => 'Ifsabouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ifsabout-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
