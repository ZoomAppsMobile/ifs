<?php require_once ('header.php')?>
<div class="modal-blue-bg-lg">
    <div class="container">
        <div class="col-12">
            <div class="register-bg">
                <div class="row">
                    <div class="tab-wrap">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-step1"
                                    role="tab" aria-controls="pills-home" aria-selected="true">Step 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-step2"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">Step 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-step3"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Step 3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-step4"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Step 4</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-step5"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Step 5</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-contact-tab" data-toggle="pill" href="#pills-step6"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Step 6</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">

                    <div class="tab-pane fade " id="pills-step6" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="register-tab-title">
                                    <p>Education and Occupation</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="education_step6">
                                    <div class="col-sm-12 col-md-12 col-lg-4">
                                        <div class="questions_13-18">
                                            <p>13. Educational Level</p>
                                            <select class="col-12 col-sm-12 col-4 edu_level_select">
                                                <option value="school">Currently in school</option>
                                                <option value="graduited">Graduated</option>
                                                <option value="bachelor degree">Bachelor degree</option>
                                                <option value="master degree">Master degree</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                        <div class="questions_13-18">
                                            <p>14. what is your native language</p>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                        <div class="questions_13-18">
                                            <p>15. Occupation</p>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="education_step6">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                        <div class="questions_13-18 mobile_employed">
                                            <p>16. are you currently employed?</p>
                                            <div>
                                                <label class="radio-input">
                                                    <p>Yes</p>
                                                    <input type="radio" checked="checked" name="employed" id="employed">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-input">
                                                    <p>No</p>
                                                    <input type="radio" name="employed" id="employed">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                        <div class="questions_13-18 questions_13-18_nth5">
                                            <div>
                                                <div>
                                                    <p>17. Do you know any language <br> (other than native language)?
                                                    </p>
                                                </div>
                                                <div>
                                                    <label class="radio-input">
                                                        <p>Yes</p>
                                                        <input type="radio" checked="checked" name="language"
                                                            id="language">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="radio-input">
                                                        <p>No</p>
                                                        <input type="radio" name="language" id="language">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                                <p>
                                                    Foreign Language
                                                </p>
                                                <select>
                                                    <option value="school">English</option>
                                                    <option value="graduited">Russian</option>
                                                    <option value="bachelor degree">Spanish</option>
                                                    <option value="master degree">French</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                        <div class="questions_13-18 questions_13-18_last">
                                            <p>18. Occupation</p>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="btn_step6">
                                    <button class="btn-back-step">Back</button>
                                    <button class="btn-next-step">Next Step</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php require_once ('footer.php')?>