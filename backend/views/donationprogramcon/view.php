<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'Контент';
$this->params['breadcrumbs'][] = ['label' => 'Donationprogramcons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donationprogramcon-view">

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
            'id',
            [
                'attribute' => 'content',
                'value' => $model->content,
                'format' => 'raw',
            ],
//            'country_id',
//            'language_id',
        ],
    ]) ?>

</div>
