<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ifsdiff */

$this->title = 'Создания наши отличия';
$this->params['breadcrumbs'][] = ['label' => 'Ifsdiffs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ifsdiff-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
