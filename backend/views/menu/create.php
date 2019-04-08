<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mainslide */

$this->title = 'Cоздания страница';
$this->params['breadcrumbs'][] = ['label' => 'Menu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
