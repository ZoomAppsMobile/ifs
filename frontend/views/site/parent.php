
<section class="parent-bg">
    <div class="container">
        <div class="row">
            <?= $this->render('/partials/buttons',
                ['class'=>'btn inner-btn ths-popup-link'
            ]);?>

            <div class="col-lg-12">
                <div class="inner-title-text">
                    <p><?=$parent['main']->littleTitle?></p>
                </div>
                <div class="inner-title">
                    <h3><?=$parent['main']->bigTitle?></h3>
                </div>
                <div class="inner-title-description">
                    <p><?=$parent['main']->slogan?></p>
                </div>
            </div>

            <div class="offset-lg-4 col-6 col-lg-2">
                <div class="connect-link">
                    <a class="ths-popup-link" href="<?=Yii::$app->view->params['buttons'][5]->url?>"><?=Yii::$app->view->params['buttons'][5]->name?></a>
                </div>
            </div>

            <div class="offset-lg-1 col-6 col-lg-2">
                <div class="connect-link">
                    <a class="ths-popup-link" href="<?=Yii::$app->view->params['buttons'][6]->url?>"><?=Yii::$app->view->params['buttons'][6]->name?></a>
                </div>
            </div>

            <? if($parent['howAllWorks']->status):?>
            <div class="bg-grey" id="parents-how-it-all-works">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3><?=$parent['sub'][0]->name?></h3>
                        </div>
                        <div class="video">
                            <iframe width="100%" height="500px"
                                    src="<?=$parent['howAllWorks']->url;?>">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
            <? endif;?>

            <div class="bg-white" id="parents-programs">
                <div class="desktop-version row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3><?=$parent['sub'][1]->name?></h3>
                        </div>
                    </div>

                </div>
               <div class="program-items">
                   <? foreach ( $parent['programs'] as $v):?>
                   <? if($v->status):?>
                   <div class="item">
                       <div class="item-img">
                           <img src="<?=$v->getImage();?>" alt="">
                       </div>
                       <div class="program-title">
                           <p><?=$v->name?></p>
                       </div>
                       <a href="<?=$v->url?>" class="btn btn-program"><?=$v->buttonName?></a>
                   </div>
                   <? endif;?>
                   <? endforeach;?>
               </div>
            </div>

            <div class="bg-grey" id="parents-benefits">
                <div class="desktop-version row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3><?=$parent['sub'][2]->name?></h3>
                        </div>
                    </div>
                    <? $m=0;?>
                    <? foreach ($parent['benefits'] as $v):?>
                    <? $m++;?>
                    <? if($m%3 == 1):?>
                    <div class="row">
                    <? endif;?>
                        <? if(!$v->isBig):?>
                        <div class="col-lg-4">
                            <div class="benefit-title">
                                <p><?=$v->name?></p>
                            </div>
                            <div class="about-surrogacy-text">
                                <p><?=$v->content?></p>
                            </div>
                        </div>
                        <? endif;?>
                        <? if($v->isBig):?>
                        <div class="col-lg-12">
                            <div class="benefit-title">
                                <p><?=$v->name?></p>
                            </div>
                            <div class="about-surrogacy-text">
                                <p><?=$v->content?></p>
                            </div>
                        </div>
                        <? endif;?>
                    <? if($m%3 == 0):?>
                    </div>
                    <? endif;?>
                    <? endforeach;?>

                    <? if($m%3 != 0):?>
                    </div>
                    <? endif;?>
                </div>
                <div class="mobile-version">
                    <div class="section-title">
                        <h3><?=$parent['sub'][2]->name?></h3>
                    </div>
                    <? $m = 0;?>
                    <div class="mobile-owl owl-carousel owl-theme">
                        <? foreach ($parent['benefits'] as $v):?>
                        <? $m++;?>
                        <? if($m%3 == 1):?>
                        <div class="item">
                        <? endif;?>
                            <div class="col-lg-4">
                                <div class="benefit-title">
                                    <p><?=$v->name?></p>
                                </div>
                                <div class="about-surrogacy-text">
                                    <p><?=$v->content?></p>
                                </div>
                            </div>

                            <? if($m%3 == 0):?>
                                </div>
                            <? endif;?>
                        <? endforeach;?>

                        <? if($m%3 != 0):?>
                            </div>
                        <? endif;?>
                    </div>
                </div>
            </div>

            <div class="bg-white" id='parents-why-kazakhstan'>
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3><?=$parent['sub'][3]->name?></h3>
                    </div>
                </div>
                <div class="desktop-version row">
                    <? foreach ($parent['whyKazakhstan'] as $v):?>
                        <div class="col-lg-3">
                            <div class="why-kz-img">
                                <img src="<?=$v->getImage();?>" alt="">
                            </div>
                            <div class="why-kz-text">
                                <p><?=$v->name?></p>
                            </div>
                        </div>
                    <? endforeach;?>
                </div>
                <div class="mobile-version">
                    <div class="mobile-owl owl-carousel owl-theme">
                        <? $m=0;?>
                        <? foreach ($parent['whyKazakhstan'] as $v):?>
                        <? $m++;?>
                        <? if($m % 2 == 1):?>
                        <div class="item">
                        <?endif;?>
                            <div class="col-lg-3">
                                <div class="why-kz-img">
                                    <img src="<?=$v->getImage();?>" alt="">
                                </div>
                                <div class="why-kz-text">
                                    <p><?=$v->name?></p>
                                </div>
                            </div>
                        <? if($m % 2 == 0):?>
                        </div>
                        <?endif;?>
                        <? endforeach;?>

                        <? if($m % 2 != 0):?>
                        </div>
                        <? endif;?>

                    </div>
                </div>
            </div>

            <div class="bg-grey" id="parents-our-leading-doctors">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h3><?=$parent['sub'][4]->name?></h3>
                    </div>
                    <? foreach ($parent['doctors'] as $v):?>
                    <div class="doctor-item">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="section-title">
                                    <h3><?=$v->name?></h3>
                                </div>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item-left">
                                        <a class="nav-link  active" id="home-tab" data-toggle="tab" href="#home<?=$v->id?>" role="tab" aria-controls="home" aria-selected="true">Achivments</a>
                                    </li>
                                    <li class="nav-item-right">
                                        <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile<?=$v->id?>" role="tab" aria-controls="profile" aria-selected="false">Education</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home<?=$v->id?>" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="tab-text">
                                            <div class="about-surrogacy-text">
                                                <?=$v->contenta?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile<?=$v->id?>" role="tabpanel" aria-labelledby="profile-tab">
                                       <div class="tab-text">
                                           <?=$v->contentb?>
                                       </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="doctor-img">
                                    <img src="<?=$v->getImage();?>" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <? endforeach;?>
                </div>
            </div>

            <div class="bg-grey2">
                <div class="desktop-version row" id="parents-surrogace-laws">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h3><?=$parent['sub'][5]->name?></h3>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-surrogacy-text">
                            <?=$parent['laws']->contenta?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-surrogacy-text">
                            <?=$parent['laws']->contentb?>
                        </div>
                    </div>
                </div>
                <div class="mobile-version row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h3><?=$parent['sub'][5]->name?></h3>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-surrogacy-text">
                            <?=$parent['laws']->contenta?>
                        </div>
                        <button class="btn btn-more" type="button" data-toggle="collapse" data-target="#mobile2" aria-expanded="false" aria-controls="mobile2">
                            Load More
                        </button>
                        <div class="collapse" id="mobile2">
                            <div class="about-surrogacy-text">
                                <?=$parent['laws']->contentb?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="bg-white" id="parents-stories-testimonials">
               <div class="desktop-version row">
                   <div class="col-sm-12">
                       <div class="section-title">
                           <h3><?=$parent['sub'][6]->name?></h3>
                       </div>
                   </div>
                   <? $blockSize = count($parent['storyAndTesti'])/3;?>
                   <? $m=0;?>
                   <? foreach ($parent['storyAndTesti'] as $v):?>
                   <? $m++;?>
                   <? if($m % $blockSize == 1 ):?>
                   <div class="col-lg-4">
                   <? endif;?>
                       <div class="story-item">
                           <div class="section-subtitle">
                               <p><?=$v->name?></p>
                           </div>
                           <div class="compensation-title">
                               <p><?=$v->city?></p>
                           </div>
                           <div class="about-surrogacy-text">
                               <p><?=$v->contenta?></p>
                               <? if($v->contentb != null):?>
                                   <div class="read-more">
                                       <a data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"><p>Read More</p></a>
                                   </div>
                                   <div class="collapse" id="collapseExample1">
                                       <?=$v->contentb?>
                                   </div>
                               <? endif;?>
                           </div>
                       </div>
                   <? if($m % $blockSize == 0):?>
                   </div>
                   <? endif;?>
                   <? endforeach;?>
               </div>
                <div class="mobile-version">
                    <div class="section-title">
                        <h3><?=$parent['sub'][6]->name?></h3>
                    </div>
                    <div class="mobile-owl owl-carousel owl-theme">
                        <? foreach ($parent['storyAndTesti'] as $v):?>
                        <div class="item">
                            <div class="story-item">
                                <div class="section-subtitle">
                                    <p><?=$v->name?></p>
                                </div>
                                <div class="compensation-title">
                                    <p><?=$v->city?></p>
                                </div>
                                <div class="about-surrogacy-text">
                                    <p><?=$v->contenta?></p>
                                    <? if($v->contentb != null):?>
                                        <div class="read-more">
                                            <a data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"><p>Read More</p></a>
                                        </div>
                                        <div class="collapse" id="collapseExample1">
                                            <?=$v->contentb?>
                                        </div>
                                    <? endif;?>
                                </div>
                            </div>
                        </div>
                        <? endforeach;?>
                    </div>
                </div>
            </div>

            <div class="bg-grey2" id="parents-faq">
                <div class="desktop-version row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h3><?=$parent['sub'][7]->name?></h3>
                        </div>
                        <div class="accordion2" id="accordionExample">
                            <? $m=0;?>
                            <? $active = 'show';?>
                            <? foreach ($parent['faq'] as $v):?>
                                <? $m++;?>
                                <? if($m < 9):?>
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <p data-toggle="collapse" data-target="#collapse<?=$v->id?>" aria-expanded="true" aria-controls="collapseOne"><?=$v->name?></p>
                                        </div>

                                        <div id="collapse<?=$v->id?>" class="collapse <?=$active?>" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body foreign-text">
                                                <p><?=$v->content?></p>
                                            </div>
                                        </div>
                                    </div>
                                <? endif;?>
                                <? $active = '';?>
                            <? endforeach;?>
                        </div>
                        <button class="btn btn-more" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Load More
                        </button>
                        <div class="collapse" id="collapseExample">
                            <div class="accordion2" id="accordionExample">
                                <? $m=0;?>
                                <? $active = 'show';?>
                                <? foreach ($parent['faq'] as $v):?>
                                    <? $m++;?>
                                    <? if($m > 8):?>
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <p data-toggle="collapse" data-target="#collapse<?=$v->id?>" aria-expanded="true" aria-controls="collapseOne"><?=$v->name?></p>
                                            </div>

                                            <div id="collapse<?=$v->id?>" class="collapse <?=$active?>" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body foreign-text">
                                                    <p><?=$v->content?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <? endif;?>
                                    <? $active = '';?>
                                <? endforeach;?>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="mobile-version row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h3><?=$parent['sub'][7]->name?></h3>
                        </div>
                        <div class="accordion2" id="accordionExample">
                            <? $active = 'show';?>
                            <?$m =0;?>
                            <? foreach ($parent['faq'] as $v):?>
                                <? $m++;?>
                                <? if($m < 4):?>
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <p data-toggle="collapse" data-target="#collapse<?=$v->id?>" aria-expanded="true" aria-controls="collapseOne"><?=$v->name;?></p>
                                    </div>
                                    <div id="collapse<?=$v->id?>" class="collapse <?=$active?>" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body foreign-text">
                                            <p><?=$v->content;?></p>
                                        </div>
                                    </div>
                                </div>
                                <? endif;?>
                                <? $active = '';?>
                            <? endforeach;?>
                        </div>
                        <button class="btn btn-more" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Load More
                        </button>
                        <div class="collapse" id="collapseExample">
                            <div class="accordion2" id="accordionExample">
                                <?$m =0;?>
                                <? foreach ($parent['faq'] as $v):?>
                                    <? $m++;?>
                                    <? if($m > 3):?>
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <p data-toggle="collapse" data-target="#collapse<?=$v->id?>" aria-expanded="true" aria-controls="collapseOne"><?=$v->name;?></p>
                                            </div>
                                            <div id="collapse<?=$v->id?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body foreign-text">
                                                    <p><?=$v->content;?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <? endif;?>
                                <? endforeach;?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="bg-white" id="parents-how-to-start">
                <div class="desktop-version row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3><?=$parent['sub'][8]->name?></h3>
                        </div>
                        <div class="start-flex">
                            <? $m=0;?>
                            <? foreach ($parent['howStart'] as $v):?>
                            <? $m++;?>
                            <div class="start-item">
                                <div class="round-num">
                                    <span><?=$m?></span>
                                </div>
                                <div class="benefit-text">
                                    <p><?=$v->name?> </p>
                                </div>
                            </div>
                            <? endforeach;?>
                        </div>
                    </div>
                </div>
                <div class="mobile-version">
                    <div class="section-title">
                        <h3><?=$parent['sub'][8]->name?></h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-1 col-3">
                            <div class="circle">
                                <ul>
                                    <? $m=0;?>
                                    <? foreach ($parent['howStart'] as $v):?>
                                        <? $m++;?>
                                        <li><?=$m?></li>
                                    <? endforeach;?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-11 col-9">
                            <div class="circle-text">
                                <ul>
                                    <? foreach ($parent['howStart'] as $v):?>
                                        <li><p><?=$v->name?></p></li>
                                    <? endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

