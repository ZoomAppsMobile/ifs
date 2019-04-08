<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mainslide */

$this->title = 'Cоздания баннера';
$this->params['breadcrumbs'][] = ['label' => 'Mainslides', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mainslide-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
