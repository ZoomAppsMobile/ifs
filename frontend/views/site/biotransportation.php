
<section class="biotransportation" id="biotransportation">

    <!-- BIOTRANSPORTATION -->

    <div class="biotransportation-main">
        <div class="container">

            <div class="row">
                <?= $this->render('/partials/buttons',
                    ['class'=>'btn inner-btn ths-popup-link'
                ]);?>
            </div>
            <!-- END BIOTRANSPORTATION BUTTON -->


            <!-- BIOTRANSPORTATION TITLE -->
            <div class="ifs-title">
                <div class="row">
                    <div class="col-12">
                        <h3><?=$biotrans['main']->littleTitle?></h3>
                    </div>

                    <div class="col-12">
                        <h1><?=$biotrans['main']->bigTitle?>  </h1>
                    </div>

                    <div class="col-12">
                        <h2><?=$biotrans['main']->slogan?></h2>
                    </div>
                </div>

                <div class="ifs-main-btn">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="ifs-main-btn-item">
                                <a class="ths-popup-link" href="<?=Yii::$app->view->params['buttons'][5]->url?>"><?=Yii::$app->view->params['buttons'][5]->name?></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="ifs-main-btn-item">
                                <a class="ths-popup-link" href="<?=Yii::$app->view->params['buttons'][6]->url?>"><?=Yii::$app->view->params['buttons'][6]->name?></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END BIOTRANSPORTATION TITLE -->

        </div>
    </div>


    <div class="biotransportation-wrap">
        <!-- BITRANSPORTATION FACTS -->
        <div class="biotransportation-facts inner-container" id="biotransportation-material">

            <div class="container">

                <div class="row">

                    <div class="col-12">
                        <div class="biotransportation-facts-title">
                            <h2><?=$biotrans['sub'][0]->name?></h2>
                        </div>
                    </div>

                </div>


                <div class="biotransportation-facts-text">

                    <div class="row">
                        <div class="col-12">
                            <?=$biotrans['con']->content?>
                        </div>
                    </div>

                </div>

                <div class="biotransportation-facts-about">
                    <div class="row">
                        <div class="col-12">
                            <h2><?=$biotrans['con']->title?></h2>
                        </div>
                    </div>
                </div>

                <div class="biotransportation-facts-content">
                    <!-- 1 СТРОКА -->
                    <?php foreach ($biotrans['fact'] as $v):?>
                        <div class="biotransportation-facts-item">
                            <img src="<?=$v->getImage()?>" alt="ellipse">

                            <p><?=$v->content?></p>
                        </div>
                    <?php endforeach;?>
                </div>



                <!-- FACTS CONTENT MOBILE -->
                <div class="biotransportation-facts-content-mobile owl-carousel owl-theme">

                    <!-- 1 -->
                    <?php $m=0;?>
                    <?php foreach ($biotrans['fact'] as $v):?>
                        <?php $m++;?>
                        <?php if($m % 3 == 1):?>
                        <div class="facts-content-mobile-item">
                        <?php endif;?>
                            <div class="biotransportation-facts-item">
                                <img src="<?=$v->getImage();?>" alt="ellipse">

                                <p>Срок подготовки к транспортировке – 2 недели</p>
                            </div>
                        <?php if($m % 3 == 0):?>
                        </div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
                <!-- END FACTS CONTENT MOBILE -->


            </div>

        </div>
        <!-- END BITRANSPORTATION FACTS -->



        <!-- BITRANSPORTATION PROCESS -->
        <div class="biotransportation-process inner-container" id="biotransportation-process">

            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="biotransportation-process-title">
                            <h2><?=$biotrans['sub'][1]->name?></h2>
                        </div>
                    </div>
                </div>
                <?$last = '';?>
                <?$m=0?>
                <?php foreach ( $biotrans['process'] as $v):?>
                    <?$m++;?>
                    <div class="process-wrap">
                        <?php if(count($biotrans['process']) == $m):?>
                            <?$last = 'process-number-last';?>
                        <?php endif;?>
                        <div class="process-number <?=$last?>">
                            <img src="<?=$v->getImagea()?>" alt="process">
                        </div>

                        <div class="process-icon">
                            <img src="<?=$v->getImageb()?>" alt="finger">
                        </div>

                        <div class="process-text">
                            <p><?=$v->name?></p>
                        </div>

                    </div>
                <?php endforeach;?>


                <div class="process-btn">
                    <a href="#"><?=$biotrans['processButton']->name?></a>
                </div>

            </div>

        </div>
        <!-- END BITRANSPORTATION PROCESS -->


        <!-- COSTS -->
        <div class="costs inner-container" id="biotransportation-costs">

            <div class="container">

                <div class="costs-wrap">

                    <div class="row">
                        <div class="col-12">
                            <div class="costs-title">
                                <h2><?=$biotrans['sub'][2]->name?></h2>
                            </div>
                        </div>
                    </div>

                    <div class="costs-content">

                        <div class="row justify-content-center">
                            <? foreach ($biotrans['cost'] as $v):?>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="costs-item costs-item-1">
                                    <h3><?=$v->name?></h3>
                                    <img src="<?=$v->getImage();?>" alt="map">
                                    <h2><?=$v->price?></h2>
                                    <a href="#"><?=$v->buttonName?></a>
                                </div>
                            </div>
                            <? endforeach;?>

                        </div>

                    </div>

                </div>

            </div>



        </div>
        <!-- END COSTS -->

    </div>
    <!-- END BIOTRANSPORTATION -->

</section>