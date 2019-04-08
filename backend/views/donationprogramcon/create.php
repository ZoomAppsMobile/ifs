<?php

use yii\helpers\Html;

$this->title = 'Создание Donationprogramcon';
$this->params['breadcrumbs'][] = ['label' => 'Donationprogramcons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donationprogramcon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
