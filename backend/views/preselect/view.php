<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = ' Предвыбор страны и языки';
$this->params['breadcrumbs'][] = ['label' => 'Preselects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="preselect-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
<!--        --><?//= Html::a('Удалить', ['delete', 'id' => $model->id], [
//            'class' => 'btn btn-danger',
//            'data' => [
//                'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
//                'method' => 'post',
//            ],
//        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            ['attribute'=>'country_id', 'value'=>function($model){ return $model->countryName;}],

            ['attribute'=>'language_id', 'value'=>function($model){ return $model->langName;}],
        ],
    ]) ?>

</div>
