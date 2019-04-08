<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14.03.2019
* Time: 10:54
*/

?>

<main>
    <div class="main-slide-wrap owl-carousel owl-theme">

        <?php foreach ($mainSlides as $v):?>
        <? if($v->cssNumber == null){$v->cssNumber = 1;}?>
        <div class="main-slide main-slide-<?=$v->cssNumber?>" style="background-image: url(<?=$v->getImage();?>)">
            <div class="container">
                <?= $this->render('/partials/buttons');?>
                <div class="main-slide-content">

                    <div class="row">
                        <div class="col-lg-6">
                            <h4><?=$v->littleTitle;?></h4>
                            <h1><?=$v->bigTitle;?></h1>
                            <h5><?=$v->slogan;?></h5>

                            <div class="content-text">
                                <?=$v->content;?>
                                <div class="more-details">
                                    <a href="<?=Yii::$app->view->params['buttons'][4]->url?>"><?=Yii::$app->view->params['buttons'][4]->name?></a>
                                </div>
                                <div class="content-btn-wrap">
                                    <div class="content-btn">
                                        <a class="ths-popup-link" href="<?=Yii::$app->view->params['buttons'][5]->url?>"><?=Yii::$app->view->params['buttons'][5]->name?></a>
                                    </div>
                                    <div class="content-btn mb-5">
                                        <a class="ths-popup-link" href="<?=Yii::$app->view->params['buttons'][6]->url?>"><?=Yii::$app->view->params['buttons'][6]->name?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="offset-lg-6"></div>
                    </div>
                </div>
            </div>


            <div class="main-numbers-wrap">
                <div class="container">
                    <div class="main-numbers-content">
                        <?php foreach ($mainProgress as $progress):?>
                        <!-- 1 -->
                        <div class="main-numbers-item">
                            <?=$progress->content;?>
                        </div>
                        <!-- END 1 -->
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>

        <?php endforeach;?>

    </div>

    <div class="main-arrows">
        <div class="arrow-prev">
            <a href="#"><img src="/images/arrow-left.png" alt="left"></a>
        </div>
        <div class="arrow-next">
            <a href="#"><img src="/images/arrow-right.png" alt="right"></a>
        </div>
    </div>

</main>
