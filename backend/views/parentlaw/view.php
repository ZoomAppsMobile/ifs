<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = ' Законы о суррогатном материнстве';
$this->params['breadcrumbs'][] = ['label' => 'Parentlaws', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentlaw-view">

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
            [
                'attribute' => 'contenta',
                'value' => $model->contenta,
                'format' => 'raw',
            ],
            [
                'attribute' => 'contentb',
                'value' => $model->contentb,
                'format' => 'raw',
            ],
        ],
    ]) ?>

</div>
