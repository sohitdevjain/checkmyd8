<?php include('header.php'); ?>
<!-- Website Section -->

<section id="nsi-sec">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-6 offset-md-3 text-center ">
                <img src="img/Avatar.png" class="nsi-client-pic">
                <h2> Kathryn McKinny <img src="img/icons/verified_profile.svg"> </h2>
                <div class="nsi-age-place">
                    <span>
                        <img src="img/icons/age_light_btn.svg"> 22
                    </span>
                    <span>
                        <img src="img/icons/location_light_btn.svg"> NYC,USA
                    </span>
                </div>
            </div>
            <div class="col-10 offset-md-1">
                <div class="row align-items-center">
                    <div class="col-7">
                        <div class="rating-section mrt8">
                            <div class="nsi-profile-rating">
                                <img src="img/icons/rating_icon_active.svg">
                                <img src="img/icons/rating_icon_active.svg">
                                <img src="img/icons/rating_icon_active.svg">
                                <img src="img/icons/rating_icon_active.svg">
                                <img src="img/icons/rating_icon_active.svg">
                                <img src="img/icons/rating_icon_active.svg">
                                <img src="img/icons/rating_icon_active.svg">
                                <img src="img/icons/rating_icon_active.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="nsi-profile-detail" class="pink">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-md-2 text-center ">
                <div class="mrt50">
                    <ul class="nav nav-tabs" id="mytab">
                        <li>
                            <a class="active" data-toggle="tab" href="#nsi-review">About You</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#nsi-about">Reviews (0)</a>
                        </li>
                    </ul>
                    <div class="tab-content nsi-profile-tab">
                        <div id="nsi-about" class="tab-pane fade ">
                            <p style="margin-top: 55px;"> <strong> You have no reviews </strong></p>
                        </div>
                        <div id="nsi-review" class="tab-pane active">
                            <div class="container-fluid">
							<?php echo alert();?>
								<form action="<?php echo site_url('save-user-profile-creation');?>" method="post" enctype="multipart/form-data" >
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="primary-procrea">Let others know about your current status</h2>
                                        <p class="primary-procrea-para">Toggle on the statuses you know are true.</p>
                                    </div>
                                    <div class="col-6">
                                        <div class="collaps nsi-mainbox" id="nsi-reviews">
                                            <div class="nsi-review-tab primry-creatn-clickim nsi-border">
                                                <span>
                                                    <img src="img/icons/married.svg">
                                                </span>
                                                <div class="nsi-title">
                                                    <h3> Married/In Relationship </h3>
                                                </div>
                                                <span>
                                                    <label for="primary-married">
                                                        <img src="img/icons/switch_light.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-married" type="checkbox" name="is_married" value="1" class="d-none">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="collaps nsi-mainbox" id="nsi-reviews">
                                            <div class="nsi-review-tab primry-creatn-clickim  nsi-border">
                                                <span>
                                                    <img src="img/icons/own_place.svg">
                                                </span>
                                                <div class="nsi-title">
                                                    <h3> Personal Accommodation</h3>
                                                </div>
                                                <span>
                                                    <label for="primary-accomodatn">
                                                        <img src="img/icons/switch_light.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-accomodatn" type="checkbox" name="is_personal_acc" value="1" class="d-none">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="collaps nsi-mainbox" id="nsi-reviews">
                                            <div class="nsi-review-tab primry-creatn-clickim  nsi-border">
                                                <span>
                                                    <img src="img/icons/employed.svg">
                                                </span>
                                                <div class="nsi-title">
                                                    <h3>  In Active Employment</h3>
                                                </div>
                                                <span>
                                                    <label for="primary-employment">
                                                        <img src="img/icons/switch_light.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-employment" type="checkbox" name="is_active_employment" value="1" class="d-none">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="collaps nsi-mainbox" id="nsi-reviews">
                                            <div class="nsi-review-tab primry-creatn-clickim  nsi-border">
                                                <span>
                                                    <img src="img/icons/car.svg">
                                                </span>
                                                <div class="nsi-title">
                                                    <h3> Personal Vehicle  </h3>
                                                </div>
                                                <span>
                                                    <label for="primary-vehicle">
                                                        <img src="img/icons/switch_light.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-vehicle" type="checkbox" name="personal_vehicle" value="1" class="d-none">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="collaps nsi-mainbox mrt0" id="nsi-reviews">
                                            <div class="nsi-review-tab primry-creatn-clickim  nsi-border">
                                                <span>
                                                    <img src="img/icons/kids.svg">
                                                </span>
                                                <div class="nsi-title">
                                                    <h3>  Has Children </h3>
                                                </div>
                                                <span>
                                                    <label for="primary-children">
                                                        <img src="img/icons/switch_light.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-children" type="checkbox" name="has_children" value="1" class="d-none">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="collaps nsi-mainbox" id="nsi-reviews">
                                            <div class="nsi-review-tab primry-creatn-clickim  nsi-border">
                                                <span>
                                                    <img src="img/icons/religion.svg">
                                                </span>
                                                <div class="nsi-title">
                                                    <h3> Religious Beliefs </h3>
                                                </div>
                                                <span>
                                                    <label for="primary-beliefs">
                                                        <img src="img/icons/switch_light.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-beliefs" type="checkbox" name="religious_beliefs" value="1" class="d-none">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="collaps nsi-mainbox mrt0" id="nsi-reviews">
                                            <div class="nsi-review-tab primry-creatn-clickim  nsi-border">
                                                <span>
                                                    <img src="img/icons/heartbreak.svg">
                                                </span>
                                                <div class="nsi-title">
                                                    <h3>  Ever Cheated? </h3>
                                                </div>
                                                <span>
                                                    <label for="primary-cheated">
                                                        <img src="img/icons/switch_light.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-cheated" type="checkbox" name="ever_cheated" value="1" class="d-none">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="collaps nsi-mainbox" id="nsi-reviews">
                                            <div class="nsi-review-tab primry-creatn-clickim  nsi-border">
                                                <span>
                                                    <img src="img/icons/health.svg">
                                                </span>
                                                <div class="nsi-title">
                                                    <h3> Underlying Health Issues </h3>
                                                </div>
                                                <span>
                                                    <label for="primary-health">
                                                        <img src="img/icons/switch_light.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-health" type="checkbox" name="health_issue" value="1" class="d-none">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8 offset-md-2">
                                        <div class="identify-uprocreatn">
                                            <h2>We need to identify you</h2>
                                            <p>To prevent fake accounts, we need you to take a picture of yourself holding your official photo identification to help us match your face with your photo ID.</p>
                                            <br>
                                            <p>Accepted ID include (but not limited to)</p>
                                            <p><strong> Passport </strong></p>
                                            <p><strong> Driver's License </strong> </p>
                                            <p><strong> Government ID Card </strong></p>
                                            <div class="col-12 has-input-bl profile-txt">
                                                <img src="img/icons/attachment.svg">
                                                <input type="file" name="file" class="line-input" placeholder="Your location" required="required">
                                                <span> &lt; &nbsp; Upload a picture </span>
                                            </div>
                                            <p>Your profile is going to be live for the public to see and your information is going to be available as anonymous data to 3rd parties.</p>
                                        </div>
                                    </div>
                                    <div class="col-10 offset-md-2">
                                        <div class="ok-this">
                                            <p>
                                                <strong> Are you ok with this? </strong>
                                                <label for="confirm-profile">
                                                    <img src="img/icons/switch_light.svg" class="profile-confm">
                                                </label>
                                                <input id="confirm-profile" type="checkbox" required name="" class="d-none">
                                            </p>
                                           
                                                <button type="submit" class="btn-landing-dark">
                                                And your done. Submit
                                                <i class="fas fa-angle-right"></i>
                                                </button>
                                            
                                        </div>
                                    </div>
                                </div>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
                </div> <!-- col-8 -->
            </div>
        </div>
    </section>
    <?php include('footer.php'); ?>