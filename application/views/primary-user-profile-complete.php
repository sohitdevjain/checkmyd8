<?php include('signin-header.php'); ?>

<!-- Website Section -->
    
    <section id="nsi-sec">
        <div class="container-fluid">
            <div class="row align-items-center">
            	<p class="text-right clr-green">Your profile has been updated successfully!</p>
                <div class="col-6 offset-md-3 text-center ">
                    <img src="img/Avatar.png" class="nsi-client-pic">
                    <h2> 
                        Kathryn McKinny
                        <img src="img/icons/verified_profile.svg">
                    </h2>
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
                    <div class="row">
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
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="nsi-profile-icn text-right">
                                <a href="primary-user-profile-creation.php">
                                	<img src="img/icons/edit.svg" style="width: 16% !important;
">
                                </a>
                                <img src="img/icons/share11.svg" class="nsi-dropdown">
                                <div class="nsi-profile-icn-drop">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="img/icons/share_link.svg"> 
                                                Share Profile URL
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="img/icons/twitter_logo.svg" style="width: 12% !important;"> 
                                                Share via Twitter
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="img/icons/facebook_logo_inactive.svg" style="width: 12% !important;"> 
                                                Share via Facebook
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="img/icons/email_light.svg"> 
                                                Share via Email
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section id="nsi-profile-detail">
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
                                    <div class="row">
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
                                                        <input id="primary-married" type="checkbox" name="" class="d-none">
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
                                                        <input id="primary-accomodatn" type="checkbox" name="" class="d-none">
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
                                                        <input id="primary-employment" type="checkbox" name="" class="d-none">
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
                                                        <input id="primary-vehicle" type="checkbox" name="" class="d-none">
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
                                                        <input id="primary-children" type="checkbox" name="" class="d-none">
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
                                                        <input id="primary-beliefs" type="checkbox" name="" class="d-none">
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
                                                        <input id="primary-cheated" type="checkbox" name="" class="d-none">
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
                                                        <input id="primary-health" type="checkbox" name="" class="d-none">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="nsi-known">
                        <h2 class="nsi-known-title"> Known Alerts <img src="img/icons/help_icon.svg"></h2>
                        <div class="row">
                            <div class="col-3 offset-md-1">
                                <div class="nsi-known-im">
                                    <img src="img/icons/catfish.svg">
                                    <span>&nbsp;</span>
                                    <p>0</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="nsi-known-im">
                                    <img src="img/icons/STI.svg">
                                    <span>&nbsp;</span>
                                    <p>0</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="nsi-known-im">
                                    <img src="img/icons/alert.svg">
                                    <span>&nbsp;</span>
                                    <p>0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div> <!-- col-8 -->
            </div>
        </div>
    </section>

<?php include('footer.php'); ?>