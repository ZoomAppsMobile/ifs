<?php

use yii\helpers\Html;

$this->title = 'Создание Donationprogramtype';
$this->params['breadcrumbs'][] = ['label' => 'Donationprogramtypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donationprogramtype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
