<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Biotransprocessbutton */

$this->title = 'Create Biotransprocessbutton';
$this->params['breadcrumbs'][] = ['label' => 'Biotransprocessbuttons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biotransprocessbutton-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
