<?php

use yii\helpers\Html;

$this->title = 'Создания пункта';
$this->params['breadcrumbs'][] = ['label' => 'Parenthowstarts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parenthowstart-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
