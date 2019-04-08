<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Biotransfact */

$this->title = 'Create Biotransfact';
$this->params['breadcrumbs'][] = ['label' => 'Biotransfacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biotransfact-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
