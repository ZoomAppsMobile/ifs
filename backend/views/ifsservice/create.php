<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ifsservice */

$this->title = 'Cоздания сервиса';
$this->params['breadcrumbs'][] = ['label' => 'Ifsservices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ifsservice-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
