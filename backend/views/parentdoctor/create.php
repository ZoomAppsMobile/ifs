<?php

use yii\helpers\Html;

$this->title = 'Создания врача';
$this->params['breadcrumbs'][] = ['label' => 'Parentdoctors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentdoctor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
