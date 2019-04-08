<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = ' Контент';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donationprogramcon-index">

    <h1><?= Html::encode($this->title) ?></h1>
<!--    <p>-->
<!--        --><?//= Html::a('Создать Donationprogramcon', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'content',
                'value' => $model->content,
                'format' => 'raw',
            ],
//            'country_id',
//            'language_id',

                ['class' => 'yii\grid\ActionColumn','template'=>'{update} {view}'],
            ],
    ]); ?>
</div>
