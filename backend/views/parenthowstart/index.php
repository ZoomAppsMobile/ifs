<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = ' Как начать';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parenthowstart-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'name',
                'value' => $model->name,
                'format' => 'raw',
            ],

                ['class' => 'yii\grid\ActionColumn','template'=>'{update} {view}'],
            ],
    ]); ?>
</div>
