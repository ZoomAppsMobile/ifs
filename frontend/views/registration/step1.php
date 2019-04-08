<div class="modal-blue-bg-lg">
    <div class="container">
        <div class="register-main-title">
            <h2>Registration</h2>
        </div>
        <div class="register-bg">
            <div class="row">
                <div class="col-sm-12">
                    <div class="desktop-version">
                        <div class="tab-wrap ">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" href="#">Step 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" href="/registration/step2">Step 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" href="/registration/step3">Step 3</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-version">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-step1" role="tab" aria-controls="pills-home" aria-selected="true">1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-step2" role="tab" aria-controls="pills-profile" aria-selected="false">2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-step3" role="tab" aria-controls="pills-contact" aria-selected="false">3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-step2" role="tab" aria-controls="pills-profile" aria-selected="false">4</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-step3" role="tab" aria-controls="pills-contact" aria-selected="false">5</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-step1" role="tab" aria-controls="pills-home" aria-selected="true">6</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-step2" role="tab" aria-controls="pills-profile" aria-selected="false">7</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-step3" role="tab" aria-controls="pills-contact" aria-selected="false">8</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-step2" role="tab" aria-controls="pills-profile" aria-selected="false">9</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-step3" role="tab" aria-controls="pills-contact" aria-selected="false">10</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-step1" role="tabpanel" aria-labelledby="pills-home-tab">
                            <form action="" method="post">
                                <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
                                <input type="hidden" name="RegistrationStep1[user_id]" value="<?=Yii::$app->session['reg_user']?>">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="register-tab-title">
                                            <p>Инструкция по загрузке фото</p>
                                        </div>
                                        <div class="register-text">
                                            <p>Доноры яйцеклетки должны предоставить как минимум 7 четких и ясных фотографий, снятых в течение последнего года (селфи не подходит).  На одной фотографии должно быть отображено ваше лицо крупным планом. Другая фотография должна быть сделана в полный рост. Остальные фотографии могут быть из прошлых лет, в том числе детские фотографии. Приветствуются фотографии, которые лучше всего описывают вашу личность и / или интересы. Вы также можете предоставить фотографии с вашей семьей, друзьями, близкими и т. д.
                                                <br> Ниже несколько рекомендаций и советов по съемке фотографий для вашего профиля.</p>

                                        </div>
                                        <div class="star-list">
                                            <ul>
                                                <li><p>Фотографии должны быть яркими, не размытыми и сфокусированными на вашей персоне. Старайтесь избегать фотографий, где очень яркий свет расположен позади вас, затемняя ваше лицо</p></li>
                                                <li><p>Приветствуются фотографии совместно с другими людьми, при этом должно быть, как минимум две фотографии, в которых отображены только вы. Если на ваших фотографиях присутствуют какие-либо другие люди кроме вас, то, пожалуйста, укажите кто они (например “я и мой брат").</p></li>
                                                <li><p>Попробуйте фотографии с различными выражениями лица: с улыбкой, с наклоном головы, с взглядом прямо в камеру, с поворотом туловища.</p></li>
                                                <li><p>Фотографии, отображающие ваши интересы и раскрывающие вашу индивидуальность приветствуются. Фотографии, где вы увлечены вашим любимым занятием могут помочь потенциальным родителям узнать вас гораздо лучше. Например, фотографии ваших прогулок, езды на велосипеде, рисования или приготовления пищи.</p></li>
                                                <li><p>Убедитесь, что у ваших фотографий высокое разрешение. Если вы используете в качестве фотоаппарата ваш телефон, убедитесь, что опция высокого разрешения включена.</p></li>
                                                <li><p>Фон ваших фотографий не должен отвлекать внимания. Вы должны быть основным объектом съемки. Избегайте фотографий сделанных в автомобиле.</p></li>
                                            </ul>
                                            <button class="btn-next">Next step</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>