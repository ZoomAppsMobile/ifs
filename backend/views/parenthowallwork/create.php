<?php

use yii\helpers\Html;

$this->title = 'Создание Parenthowallwork';
$this->params['breadcrumbs'][] = ['label' => 'Parenthowallworks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parenthowallwork-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
