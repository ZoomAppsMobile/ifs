<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = ' Почему казахстан';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentwhykazak-index">

    <h1><?= Html::encode($this->title) ?></h1>
        <p>
            <?= Html::a('Создать ', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            [
                'format' => 'html',
                'attribute' => 'image',
                'filter' => '',
                'value' => function($data){
                    return Html::img($data->getImage(), ['width'=>50]);
                }

            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
