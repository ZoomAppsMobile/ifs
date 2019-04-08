
<section class="egg-donation">
    <div class="container">
        <div class="row">

            <?= $this->render('/partials/buttons',
                ['class'=>'btn inner-btn ths-popup-link inner-btn-brown'
            ]);?>

            <div class="col-lg-12">
                <div class="inner-title-text-brown">
                    <p><?=$eggdonation['main']->littleTitle?></p>
                </div>
                <div class="inner-title-brown">
                    <h3><?=$eggdonation['main']->bigTitle?></h3>
                </div>
                <div class="inner-title-description-brown">
                    <p><?=$eggdonation['main']->slogan?></p>
                </div>
            </div>

            <div class="offset-lg-4 col-6 col-lg-2">
                <div class="connect-link-brown dash-bot-brown">
                    <a href="<?=Yii::$app->view->params['buttons'][5]->url?>"><?=Yii::$app->view->params['buttons'][5]->name?></a>
                </div>
            </div>

            <div class="offset-lg-1 col-6 col-lg-2">
                <div class="connect-link-brown dash-bot-brown">
                    <a  href="<?=Yii::$app->view->params['buttons'][6]->url?>"><?=Yii::$app->view->params['buttons'][6]->name?></a>
                </div>
            </div>


            <div class="bg-white" id="egg-donation-programs">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3><?=$eggdonation['sub'][0]->name?></h3>
                        </div>
                        <div class="about-surrogacy-text">
                            <?=$eggdonation['programcon']->content?>
                        </div>
                    </div>

                    <? foreach ($eggdonation['programtype'] as $v):?>
                    <div class="col-lg-4">
                        <div class="egg-program-item">
                            <div class="egg-donation-img">
                                <img src="<?=$v->getImage();?>" alt="">
                            </div>
                            <a href="">
                                <p>
                                    <?=$v->name;?>
                                </p>
                            </a>
                            <div class="about-surrogacy-text">
                                <p><?=$v->content;?></p>
                            </div>
                        </div>
                    </div>
                    <? endforeach;?>
                </div>
            </div>

            <div class="bg-grey" id="egg-donation-how-to-start">
                <div class="desktop-version row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3><?=$eggdonation['sub'][1]->name?></h3>
                        </div>
                        <div class="row">
                            <? $m=0;?>
                            <? foreach ($eggdonation['howStart'] as $v):?>
                            <? $m++;?>
                            <div class="col-lg-3">
                                <div class="round-num">
                                    <span><?=$m?></span>
                                </div>
                                <div class="benefit-text">
                                    <p><?=$v->name?></p>
                                </div>
                            </div>
                            <? endforeach;?>
                        </div>
                    </div>
                </div>
                <div class="mobile-version">
                    <div class="section-title">
                        <h3><?=$eggdonation['sub'][1]->name?></h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-1 col-3">
                            <div class="circle">
                                <ul>
                                    <? $m=0;?>
                                    <? foreach ( $eggdonation['howStart'] as $v):?>
                                    <? $m++;?>
                                        <li><?=$m?></li>
                                    <? endforeach;?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-11 col-9">
                            <div class="circle-text">
                                <ul>
                                    <? foreach ( $eggdonation['howStart'] as $v):?>
                                    <li>
                                        <p><?=$v->name?></p>
                                    </li>
                                    <? endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="bg-white" id="egg-donation-costs">
                <div class="row desktop-version">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h3><?=$eggdonation['sub'][2]->name?></h3>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cost-item">
                            <div class="cost-title">
                                <p>Only Egg Donation</p>
                            </div>
                            <div class="collapse-text">
                                <a data-toggle="collapse" href="#collapseExample">
                                    <p>Подготовка и организация программы:</p>
                                    <div class="collapse-arrow">
                                        <img src="/images/collapse-arrow.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="collapsed-text">
                                    <p>• работа с медицинской документацией</p>
                                </div>
                            </div>
                            <div class="collapse-text">
                                <p>Расходы на донора яйцеклетки: </p>
                            </div>
                            <div class="collapse-text">
                                <a data-toggle="collapse" href="#collapseExample2">
                                    <p>Административные и агентские услуги</p>
                                    <div class="collapse-arrow">
                                        <img src="/images/collapse-arrow.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="collapse" id="collapseExample2">
                                <div class="collapsed-text">
                                    <p>• работа с медицинской документацией</p>
                                </div>
                            </div>
                            <div class="collapse-text">
                                <a data-toggle="collapse" href="#collapseExample3">
                                    <p>Юридические услуги </p>
                                    <div class="collapse-arrow">
                                        <img src="/images/collapse-arrow.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="collapse" id="collapseExample3">
                                <div class="collapsed-text">
                                    <p>• работа с медицинской документацией</p>
                                </div>
                            </div>
                            <div class="collapse-text">
                                <a data-toggle="collapse" href="#collapseExample4">
                                    <p> Получение свидетельства о рождении ребенка </p>
                                    <div class="collapse-arrow">
                                        <img src="/images/collapse-arrow.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="collapse" id="collapseExample4">
                                <div class="collapsed-text">
                                    <p>• работа с медицинской документацией</p>
                                </div>
                            </div>
                            <div class="cost-title-left">
                                <p>График платежей:</p>
                                <div class="collapse-text">
                                    <p>1-й этап после подписания контракта - 2 000 € </p>
                                    <p> 2-й этап в день пункции - 2 000 €</p>
                                </div>
                            </div>
                            <div class="price">
                                <p>4000 €</p>
                            </div>
                            <a href="" class="btn btn-start-program">Start the Program</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cost-item">
                            <div class="cost-title">
                                <p>Egg Donation & Transportation</p>
                            </div>
                            <div class="collapse-text">
                                <a data-toggle="collapse" href="#collapseExample2-1">
                                    <p>Подготовка и организация программы:</p>
                                    <div class="collapse-arrow">
                                        <img src="/images/collapse-arrow.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="collapse" id="collapseExample2-1">
                                <div class="collapsed-text">
                                    <p>• работа с медицинской документацией</p>
                                </div>
                            </div>
                            <div class="collapse-text">
                                <p>Расходы на донора яйцеклетки: </p>
                            </div>
                            <div class="collapse-text">
                                <a data-toggle="collapse" href="#collapseExample2-2">
                                    <p>Административные и агентские услуги</p>
                                    <div class="collapse-arrow">
                                        <img src="/images/collapse-arrow.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="collapse" id="collapseExample2-2">
                                <div class="collapsed-text">
                                    <p>• работа с медицинской документацией</p>
                                </div>
                            </div>
                            <div class="collapse-text">
                                <a data-toggle="collapse" href="#collapseExample2-3">
                                    <p>Юридические услуги </p>
                                    <div class="collapse-arrow">
                                        <img src="/images/collapse-arrow.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="collapse" id="collapseExample2-3">
                                <div class="collapsed-text">
                                    <p>• работа с медицинской документацией</p>
                                </div>
                            </div>
                            <div class="collapse-text">
                                <a data-toggle="collapse" href="#collapseExample2-4">
                                    <p> Получение свидетельства о рождении ребенка </p>
                                    <div class="collapse-arrow">
                                        <img src="/images/collapse-arrow.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="collapse" id="collapseExample2-4">
                                <div class="collapsed-text">
                                    <p>• работа с медицинской документацией</p>
                                </div>
                            </div>

                            <a href="" class="btn btn-start-program">Start the Program</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cost-item">
                            <div class="cost-title">
                                <p>Egg Donation & IVF”</p>
                            </div>
                            <div class="collapse-text">
                                <a data-toggle="collapse" href="#collapseExample3-1">
                                    <p>Подготовка и организация программы:</p>
                                    <div class="collapse-arrow">
                                        <img src="/images/collapse-arrow.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="collapse" id="collapseExample3-1">
                                <div class="collapsed-text">
                                    <p>• работа с медицинской документацией</p>
                                </div>
                            </div>
                            <div class="collapse-text">
                                <p>Расходы на донора яйцеклетки: </p>
                            </div>
                            <div class="collapse-text">
                                <a data-toggle="collapse" href="#collapseExample3-2">
                                    <p>Административные и агентские услуги</p>
                                    <div class="collapse-arrow">
                                        <img src="/images/collapse-arrow.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="collapse" id="collapseExample3-2">
                                <div class="collapsed-text">
                                    <p>• работа с медицинской документацией</p>
                                </div>
                            </div>
                            <div class="collapse-text">
                                <a data-toggle="collapse" href="#collapseExample3-3">
                                    <p>Юридические услуги </p>
                                    <div class="collapse-arrow">
                                        <img src="/images/collapse-arrow.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="collapse" id="collapseExample3-3">
                                <div class="collapsed-text">
                                    <p>• работа с медицинской документацией</p>
                                </div>
                            </div>
                            <div class="collapse-text">
                                <a data-toggle="collapse" href="#collapseExample3-4">
                                    <p> Получение свидетельства о рождении ребенка </p>
                                    <div class="collapse-arrow">
                                        <img src="/images/collapse-arrow.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="collapse" id="collapseExample3-4">
                                <div class="collapsed-text">
                                    <p>• работа с медицинской документацией</p>
                                </div>
                            </div>
                            <div class="cost-title-left">
                                <p>График платежей:</p>
                                <div class="collapse-text">
                                    <p>1-й этап после подписания контракта - 3 000 € </p>
                                    <p> 2-й этап в день пункции - 1 950 €</p>
                                </div>
                            </div>
                            <div class="price">
                                <p>4950 €</p>
                            </div>
                            <a href="" class="btn btn-start-program">Start the Program</a>
                        </div>
                    </div>
                </div>
                <div class="row mobile-version">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h3>Costs</h3>
                        </div>
                        <div class="about-surrogacy-text">
                            <p>Стоимость программ Эконом и Стандарт может меняться в зависимости от индивидуальных
                                потребностей потенциальных родителей. Стоимость программы VIP фиксированная.</p>
                        </div>
                    </div>
                    <div class="mobile-owl owl-carousel owl-theme">
                        <div class="item">
                            <div class="col-lg-4">
                                <div class="cost-item">
                                    <div class="cost-title">
                                        <p>Only Egg Donation</p>
                                    </div>
                                    <div class="collapse-text">
                                        <a data-toggle="collapse" href="#collapseExample">
                                            <p>Подготовка и организация программы:</p>
                                            <div class="collapse-arrow">
                                                <img src="/images/collapse-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse" id="collapseExample">
                                        <div class="collapsed-text">
                                            <p>• работа с медицинской документацией</p>
                                        </div>
                                    </div>
                                    <div class="collapse-text">
                                        <p>Расходы на донора яйцеклетки: </p>
                                    </div>
                                    <div class="collapse-text">
                                        <a data-toggle="collapse" href="#collapseExample2">
                                            <p>Административные и агентские услуги</p>
                                            <div class="collapse-arrow">
                                                <img src="/images/collapse-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse" id="collapseExample2">
                                        <div class="collapsed-text">
                                            <p>• работа с медицинской документацией</p>
                                        </div>
                                    </div>
                                    <div class="collapse-text">
                                        <a data-toggle="collapse" href="#collapseExample3">
                                            <p>Юридические услуги </p>
                                            <div class="collapse-arrow">
                                                <img src="/images/collapse-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse" id="collapseExample3">
                                        <div class="collapsed-text">
                                            <p>• работа с медицинской документацией</p>
                                        </div>
                                    </div>
                                    <div class="collapse-text">
                                        <a data-toggle="collapse" href="#collapseExample4">
                                            <p> Получение свидетельства о рождении ребенка </p>
                                            <div class="collapse-arrow">
                                                <img src="/images/collapse-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse" id="collapseExample4">
                                        <div class="collapsed-text">
                                            <p>• работа с медицинской документацией</p>
                                        </div>
                                    </div>
                                    <div class="cost-title-left">
                                        <p>График платежей:</p>
                                        <div class="collapse-text">
                                            <p>1-й этап после подписания контракта - 2 000 € </p>
                                            <p> 2-й этап в день пункции - 2 000 €</p>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <p>4000 €</p>
                                    </div>
                                    <a href="" class="btn btn-start-program">Start the Program</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-4">
                                <div class="cost-item">
                                    <div class="cost-title">
                                        <p>Egg Donation & Transportation</p>
                                    </div>
                                    <div class="collapse-text">
                                        <a data-toggle="collapse" href="#collapseExample2-1">
                                            <p>Подготовка и организация программы:</p>
                                            <div class="collapse-arrow">
                                                <img src="/images/collapse-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse" id="collapseExample2-1">
                                        <div class="collapsed-text">
                                            <p>• работа с медицинской документацией</p>
                                        </div>
                                    </div>
                                    <div class="collapse-text">
                                        <p>Расходы на донора яйцеклетки: </p>
                                    </div>
                                    <div class="collapse-text">
                                        <a data-toggle="collapse" href="#collapseExample2-2">
                                            <p>Административные и агентские услуги</p>
                                            <div class="collapse-arrow">
                                                <img src="/images/collapse-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse" id="collapseExample2-2">
                                        <div class="collapsed-text">
                                            <p>• работа с медицинской документацией</p>
                                        </div>
                                    </div>
                                    <div class="collapse-text">
                                        <a data-toggle="collapse" href="#collapseExample2-3">
                                            <p>Юридические услуги </p>
                                            <div class="collapse-arrow">
                                                <img src="/images/collapse-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse" id="collapseExample2-3">
                                        <div class="collapsed-text">
                                            <p>• работа с медицинской документацией</p>
                                        </div>
                                    </div>
                                    <div class="collapse-text">
                                        <a data-toggle="collapse" href="#collapseExample2-4">
                                            <p> Получение свидетельства о рождении ребенка </p>
                                            <div class="collapse-arrow">
                                                <img src="/images/collapse-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse" id="collapseExample2-4">
                                        <div class="collapsed-text">
                                            <p>• работа с медицинской документацией</p>
                                        </div>
                                    </div>

                                    <a href="" class="btn btn-start-program">Start the Program</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-4">
                                <div class="cost-item">
                                    <div class="cost-title">
                                        <p>Egg Donation & IVF”</p>
                                    </div>
                                    <div class="collapse-text">
                                        <a data-toggle="collapse" href="#collapseExample3-1">
                                            <p>Подготовка и организация программы:</p>
                                            <div class="collapse-arrow">
                                                <img src="/images/collapse-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse" id="collapseExample3-1">
                                        <div class="collapsed-text">
                                            <p>• работа с медицинской документацией</p>
                                        </div>
                                    </div>
                                    <div class="collapse-text">
                                        <p>Расходы на донора яйцеклетки: </p>
                                    </div>
                                    <div class="collapse-text">
                                        <a data-toggle="collapse" href="#collapseExample3-2">
                                            <p>Административные и агентские услуги</p>
                                            <div class="collapse-arrow">
                                                <img src="/images/collapse-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse" id="collapseExample3-2">
                                        <div class="collapsed-text">
                                            <p>• работа с медицинской документацией</p>
                                        </div>
                                    </div>
                                    <div class="collapse-text">
                                        <a data-toggle="collapse" href="#collapseExample3-3">
                                            <p>Юридические услуги </p>
                                            <div class="collapse-arrow">
                                                <img src="/images/collapse-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse" id="collapseExample3-3">
                                        <div class="collapsed-text">
                                            <p>• работа с медицинской документацией</p>
                                        </div>
                                    </div>
                                    <div class="collapse-text">
                                        <a data-toggle="collapse" href="#collapseExample3-4">
                                            <p> Получение свидетельства о рождении ребенка </p>
                                            <div class="collapse-arrow">
                                                <img src="/images/collapse-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="collapse" id="collapseExample3-4">
                                        <div class="collapsed-text">
                                            <p>• работа с медицинской документацией</p>
                                        </div>
                                    </div>
                                    <div class="cost-title-left">
                                        <p>График платежей:</p>
                                        <div class="collapse-text">
                                            <p>1-й этап после подписания контракта - 3 000 € </p>
                                            <p> 2-й этап в день пункции - 1 950 €</p>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <p>4950 €</p>
                                    </div>
                                    <a href="" class="btn btn-start-program">Start the Program</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="mobile-version bg-grey">
                <div class="mobile-bg-block">
                    <div class="egg-donation-text">
                        <p>В IFS большое количество женщин, готовых принять участрие в донорстве яйцеклеткок </p>
                    </div>
                    <a href="" class="btn btn-find-sur">Find Your Surrogate</a>
                </div>
            </div>
            <div class="bg-egg-donation-section">
                <div class="row desktop-version">
                    <div class="offset-lg-7 col-sm-5">
                        <div class="egg-donation-text">
                            <p>В IFS большое количество женщин, готовых принять участрие в донорстве яйцеклеткок </p>
                        </div>
                        <a href="" class="btn btn-find-sur">Find Your Surrogate</a>
                    </div>
                </div>
            </div>







        </div>





    </div>
</section>
