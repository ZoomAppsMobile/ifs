<section class="ifs" id="ifs">

    <!-- IFS -->
    <div class="ifs-top">
        <div class="container">
            <div class="row">
                <?= $this->render('/partials/buttons',
                    ['class'=>'btn inner-btn ths-popup-link'
                ]);?>
            </div>
            <!-- ifs title -->
            <div class="ifs-title">
                <div class="row">
                    <div class="col-12">
                        <h3><?=$ifs['main']->littleTitle?></h3>
                    </div>

                    <div class="col-12">
                        <h1><?=$ifs['main']->bigTitle?>  </h1>
                    </div>

                    <div class="col-12">
                        <h2><?=$ifs['main']->slogan?></h2>
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
            <!-- end ifs title -->

        </div>
    </div>
    <!-- END IFS -->


    <!-- ABOUT US -->
    <div class="ifs-about inner-container" id="ifs-about-us">

        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6">

                    <div class="about-left">
                        <div class="about-left-title">
                            <h2><?=$ifs['sub'][0]->name?></h2>
                            <h3><?=$ifs['about']->subtitlea?></h3>
                        </div>
                        <?=$ifs['about']->content?>
                    </div>

                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="about-right">
                        <h3><?=$ifs['about']->subtitleb?> </h3>
                        <iframe src="<?=$ifs['about']->url?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>


            </div>

        </div>

    </div>
    <!-- END ABOUT US -->


    <!-- FACTS -->
    <div class="ifs-facts inner-container" id="ifs-ten-facts">

        <div class="container">

            <div class="facts-title">
                <h2><?=$ifs['sub'][1]->name?></h2>
            </div>

            <div class="facts-content">

                <div class="inner-content inner-content-desktop">

                    <?php foreach ($ifs['fact'] as $v):?>
                        <div class="facts-item">
                            <?=$v->contentsvg?>
                            <p><?=$v->content?></p>
                        </div>
                    <?php endforeach;?>


                </div>
                <!-- END 2 СТРОКА -->


                <!-- INNER CONTENT MOBILE -->

                <div class="inner-content inner-content-mobile owl-carousel owl-theme">
                    <!-- 1 СТРОКА -->
                    <?php $m=0;?>
                    <?php foreach ($ifs['fact'] as $v):?>
                        <?php $m++;?>
                        <?php if($m%2==1):?>
                        <div class="inner-content-mobile-slide">
                        <?php endif;?>
                                <div class="facts-item">
                                    <?=$v->contentsvg?>
                                    <p><?=$v->content?></p>
                                </div>
                            <div class="facts-item">
                                <svg width="61" height="59" viewBox="0 0 61 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M36.3028 39.3604H25.6153V38.2822L31.4629 31.6494C32.4317 30.5322 33.1036 29.6104 33.4786 28.8838C33.8536 28.1572 34.0411 27.4502 34.0411 26.7627C34.0411 25.6846 33.7247 24.833 33.0918 24.208C32.459 23.5752 31.5879 23.2588 30.4786 23.2588C29.3301 23.2588 28.4004 23.626 27.6895 24.3604C26.9864 25.0947 26.6348 26.0479 26.6348 27.2197H25.2403C25.2403 26.2588 25.4551 25.3838 25.8848 24.5947C26.3223 23.8057 26.9395 23.1885 27.7364 22.7432C28.5411 22.29 29.4551 22.0635 30.4786 22.0635C32.0411 22.0635 33.2598 22.4736 34.1348 23.2939C35.0176 24.1143 35.459 25.2314 35.459 26.6455C35.459 27.4424 35.209 28.3135 34.709 29.2588C34.2168 30.2041 33.3457 31.3838 32.0957 32.7979L27.3379 38.1768H36.3028V39.3604Z" fill="#FF5C28"/>
                                    <path d="M59.8627 29.6634C59.8627 45.5468 46.798 58.4351 30.6667 58.4351C14.5354 58.4351 1.4707 45.5468 1.4707 29.6634C1.4707 13.7799 14.5354 0.891602 30.6667 0.891602C46.798 0.891602 59.8627 13.7799 59.8627 29.6634Z" stroke="#FF5C28"/>
                                </svg>


                                <p>Первая международная компания в Казахстане по суррогатному материнству и донорству яйцеклеток</p>
                            </div>
                        <?php if($m%2==0):?>
                        </div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>

            </div>
            <!-- END 2 СТРОКА -->

            <!-- END INNER CONTENT MOBILE -->

        </div>

    </div>

    </div>
    <!-- END FACTS -->


    <!-- SERVICES -->
    <div class="ifs-services ifs-desktop-services inner-container" id="ifs-our-services">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-12">
                    <div class="services-title">
                        <h2><?=$ifs['sub'][2]->name?></h2>
                    </div>
                </div>

                <?php foreach ($ifs['service'] as $v):?>
                    <div class="col-lg-3 col-md-3">
                        <div class="services-item">
                            <img src="<?=$v->getImage();?>" alt="consult services">
                            <h3><?=$v->name?></h3>
                            <ul>
                                <?=$v->content?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach;?>


            </div>

        </div>

    </div>
    <!-- END SERVICES -->


    <!-- MOBILE SERVICES -->
    <div class="ifs-services inner-container ifs-mobile-services" id = 'ifs-our-services'>

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-12">
                    <div class="services-title">
                        <h2><?=$ifs['sub'][2]->name?></h2>
                    </div>
                </div>

            </div>

            <div class="services-mobile-wrap owl-carousel owl-theme">
                <!-- 1 СТРОКА -->
                <?php foreach ($ifs['service'] as $v):?>
                    <div class="services-item">
                        <img src="<?=$v->getImage();?>" alt="consult services">
                        <h3><?=$v->name?></h3>
                        <ul>
                            <?=$v->content?>
                        </ul>
                    </div>
                <?php endforeach;?>
            </div>

        </div>

    </div>
    <!-- END MOBILE SERVICES -->



    <!-- DIFFERENCES -->
    <div class="differences inner-container" id="ifs-our-difference">

        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="differences-title">
                        <h2><?=$ifs['sub'][3]->name?> </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="differences-content">

                        <div class="differences-table">

                            <div class="differences-top">
                                <?php $m=0;?>
                                <?php foreach ($ifs['diff'] as $v):?>
                                    <?php $m++?>
                                    <div class="differences-top-item"><a href="#difference-tab-<?=$m?>"><?=$m?></a></div>
                                <?php endforeach;?>
                            </div>

                            <div class="differences-bottom">
                                <?php $m=0;?>
                                <?php foreach ($ifs['diff'] as $v):?>
                                    <?php $m++?>
                                    <div class="differences-bottom-item" id="difference-tab-<?=$m?>">
                                        <p><?=$v->content?></p>
                                    </div>
                                <?php endforeach;?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- END DIFFERENCES -->


    <!-- MEDICAL TEAM -->
    <div class="ifs-medical-team inner-container" id="ifs-our-medical-team">

        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="ifs-medical-team-title">
                        <h2><?=$ifs['sub'][4]->name?></h2>
                    </div>
                </div>
            </div>

            <div class="medical-team-content">

                <div class="medical-arrows">
                    <div class="medical-arrow-left medical-arrow">
                        <a href="#">
                            <svg width="33" height="55" viewBox="0 0 33 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.0081 1.33887L0.853516 29.4956M0.908312 28.8126L32.0632 53.721" stroke="#4D4D4D"/>
                            </svg>
                        </a>
                    </div>

                    <div class="medical-arrow-right medical-arrow">
                        <a href="#">
                            <svg width="33" height="55" viewBox="0 0 33 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.814793 1.33887L31.9694 29.4956M31.9146 28.8126L0.759766 53.721" stroke="#616161"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="medical-team-slide-wrap">
                    <div class="medical-team-slide owl-carousel">
                        <?php foreach ($ifs['medteam'] as $v):?>
                            <div class="medical-team-item">
                                <img src="<?=$v->getImage();?>" alt="medical-team">
                                <h2><?=$v->name;?></h2>
                                <h3><?=$v->position;?></h3>
                                <p><?=$v->experience;?></p>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- END MEDICAL TEAM -->


    <!-- TEAM -->
    <div class="ifs-team inner-container" id="ifs-our-team">

        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="ifs-team-title">
                        <h2><?=$ifs['sub'][5]->name?></h2>
                    </div>
                </div>
            </div>

            <div class="team-content">

                <div class="team-arrows">
                    <div class="team-arrow-left team-arrow">
                        <a href="#">
                            <svg width="33" height="54" viewBox="0 0 33 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.0081 0.98584L0.853516 29.1425M0.908312 28.4596L32.0632 53.368" stroke="white"/>
                            </svg>
                        </a>
                    </div>

                    <div class="team-arrow-right team-arrow">
                        <a href="#">
                            <svg width="33" height="54" viewBox="0 0 33 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.814793 0.98584L31.9694 29.1425M31.9146 28.4596L0.759766 53.368" stroke="white"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="team-slide-wrap">

                    <div class="team-slide owl-carousel">
                        <?php foreach ($ifs['team'] as $v):?>
                            <div class="team-item">
                                <img src="<?=$v->getImage();?>" alt="medical-team">
                                <h2><?=$v->name;?></h2>
                                <h3><?=$v->position;?></h3>
                                <p><?=$v->experience;?></p>
                            </div>
                        <?php endforeach;?>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- END TEAM -->


    <div class="ifs-contacts inner-container" id="ifs-contacts">

        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="ifs-contacts-title">
                        <h2><?=$ifs['sub'][6]->name?></h2>
                    </div>
                </div>
            </div>

            <div class="row ifs-contacts-flex">
                <div class="col-lg-6 col-md-6">
                    <div class="contacts-left">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2907.053775054125!2d76.94947831512016!3d43.22933217913812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836f1cbeb1ee49%3A0x55876caddbdae040!2z0KHQsNC80LDQuyDRhdC-0YHRgtC10Lsg0LIg0JDQu9C80LDRgtGL!5e0!3m2!1sru!2skz!4v1550660354588" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="contacts-right">
                        <div class="adress-title">
                            <img src="/images/location.svg" alt="location"><h2><?=$ifs['contact']->name?></h2>
                        </div>

                        <div class="contacts-items">
                            <span><?= Yii::$app->view->params['contact']->address?></span>
                            <span><?= Yii::$app->view->params['contact']->email?></span>
                            <span><?= Yii::$app->view->params['contact']->telegramTel?></span>
                            <span><?= Yii::$app->view->params['contact']->skype?></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>