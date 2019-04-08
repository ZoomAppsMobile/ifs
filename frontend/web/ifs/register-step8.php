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
                                    <p class="step8_title">Family Health History</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="education_step8">
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="questions_13-18_step8">
                                            <p>13. How many biologicaly siblings do/did you have?</p>
                                            <select class="col-12 col-sm-12 col-4 family_health_select">
                                                <option value="school">0</option>
                                                <option value="graduited">1</option>
                                                <option value="bachelor degree">2</option>
                                                <option value="master degree">3+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="questions_13-18_step8" id="step8_input">
                                            <p>14. Are there any known genetic conditions or birth defects in your
                                                family?
                                            </p>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row grey_border_step8">
                            <div class="col-12">
                                <div class="education_step8">
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="questions_13-18_step8 ">
                                            <p>13. Are you adopted?</p>
                                            <div class="mobile_input_step8">
                                                <label class="radio-input">
                                                    <p>Yes</p>
                                                    <input type="radio" checked="checked" name="adopted" id="adopted">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-input">
                                                    <p>No</p>
                                                    <input type="radio" name="adopted" id="adopted">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="questions_13-18_step8" id="step8_input">
                                            <p>15. Do you have any siblings or ½ siblings with any health issues at all?
                                            </p>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="register-tab-title">
                                    <p class="step8_title">Family member's Information</p>
                                </div>
                            </div>
                        </div>
                        <div class="row desktop_step8">
                            <div class="education_step8_2">
                                <div class="questions_13-18_step8">
                                    <p>Relation</p>
                                    <select class="col-md-12 col-sm-12 col-4 family_health_select">
                                        <option value="school">Father</option>
                                        <option value="graduited">Mother</option>
                                        <option value="bachelor degree">Brother</option>
                                        <option value="master degree">Sister</option>
                                    </select>
                                </div>

                                <div class="questions_13-18_step8_2">
                                    <p>Date of Birth</p>
                                    <select class="col-12 col-sm-12 col-2 family_health_select">
                                        <option value="school">22.12.2018</option>
                                        <option value="graduited">21.12.2018</option>
                                        <option value="bachelor degree">20.12.2018</option>
                                        <option value="master degree">19.12.2018</option>
                                    </select>
                                </div>


                                <div class="questions_13-18_step8_2">
                                    <p>Living</p>
                                    <select class="col-12 col-sm-12 col-md-12 family_health_select">
                                        <option value="school">Yes</option>
                                        <option value="graduited">No</option>
                                    </select>
                                </div>


                                <div class="questions_13-18_step8_2">
                                    <p>21. Body Type
                                    </p>
                                    <input type="text">
                                </div>


                                <div class="questions_13-18_step8_2">
                                    <p>15. Other Details
                                    </p>
                                    <input type="text">
                                </div>

                                <div class="health-details-right">
                                    <div class="save-edit-wrap">
                                        <span>Save/edit</span>
                                        <div class="save-edit-btn">
                                            <a href="#">
                                                <img src="images/save_edit.jpg" alt="save-edit">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="remove-wrap">
                                        <span>Remove</span>
                                        <div class="remove-btn">
                                            <a href="#">
                                                <img src="images/remove.jpg" alt="delete-close">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="#" class="mobile_add_relation">+Add relation</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row" id="mobile_step8">
                            <div class="col-6">
                                <div class="education_step8_2">
                                    <div class="questions_13-18_step8_2" id="step8_mobile_select">
                                        <p>Relation</p>
                                        <select class="col-md-12   family_health_select" >
                                            <option value="school">Father</option>
                                            <option value="graduited">Mother</option>
                                            <option value="bachelor degree">Brother</option>
                                            <option value="master degree">Sister</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="questions_13-18_step8_2" id="step8_mobile_select">
                                    <p>Date of Birth</p>
                                    <select class="col-12 col-sm-12 col-2 family_health_select" >
                                        <option value="school">22.12.2018</option>
                                        <option value="graduited">21.12.2018</option>
                                        <option value="bachelor degree">20.12.2018</option>
                                        <option value="master degree">19.12.2018</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="questions_13-18_step8_2"  id="step8_mobile_select">
                                    <p>Living</p>
                                    <select class="col-12 col-sm-12 col-md-12 family_health_select">
                                        <option value="school">Yes</option>
                                        <option value="graduited">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="questions_13-18_step8_2" id="step8_mobile_body_type">
                                    <p>21. Body Type
                                    </p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="questions_13-18_step8_2" id="step8_mobile_other_details">
                                    <p>15. Other Details
                                    </p>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                            <div class="row" id="mobile_step8">
                                <div class="col-12">
                                    <div class="health-details-right">
                                        <div class="save-edit-wrap">
                                            <span>Save/edit</span>
                                            <div class="save-edit-btn">
                                                <a href="#">
                                                    <img src="images/save_edit.jpg" alt="save-edit">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="remove-wrap">
                                            <span>Remove</span>
                                            <div class="remove-btn">
                                                <a href="#">
                                                    <img src="images/remove.jpg" alt="delete-close">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="#" class="mobile_add_relation">+Add relation</a>
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
</div>
</div>
<?php require_once ('footer.php')?>