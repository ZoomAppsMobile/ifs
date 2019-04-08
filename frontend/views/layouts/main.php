<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?= Html::csrfMetaTags() ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->head() ?>
</head>
<body>   
<?php $this->beginBody() ?>

<!-- preloader -->
<script type="text/javascript">
    $(function () {
        $("#transition-loader").fadeOut("slow");
    });
</script>

<div id="cube-loader">
    <div class="caption">
        <div class="cube-loader">
            <div class="cube loader-1"></div>
            <div class="cube loader-2"></div>
            <div class="cube loader-4"></div>
            <div class="cube loader-3"></div>
        </div>
    </div>
</div>
<!-- end preloader -->

<?=$this->render('_header');?>

<?=$content?>

<?=$this->render('_footer');?>
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage() ?>

