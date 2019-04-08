<?php

use yii\helpers\Html;

$this->title = 'Создания языка';
$this->params['breadcrumbs'][] = ['label' => 'Countrylangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="countrylang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
