<?php include('signin-header.php'); ?>

<!-- Website Section -->
    
    <section id="nsi-sec">
        <div class="container-fluid">
            <div class="row align-items-center">
            	<div class="col-6 offset-md-3 text-center ">
                    <img src="<?php echo site_url('user-uploads/'.$userDetail->image);?>" class="nsi-client-pic">
                    <h2  <?php if($userDetail->approve==0){ ?> class="pending-pro" <?php } ?> > <?php echo $userDetail->fname.' '.$userDetail->lname;?><?php if($userDetail->approve==1){ ?> <img src="img/icons/verified_profile.svg"><?php }else{ ?><span>- Pending Approval</span><?php } ?> </h2>
                    <div class="nsi-age-place">
                        <span>
                            <img src="img/icons/age_light_btn.svg"> <?php echo $userDetail->age;?>
                        </span>
                        <span>
                            <img src="img/icons/location_light_btn.svg"> <?php echo $userDetail->location;?>
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
													<?php if($userDetail->is_married==0){ ?>
                                                    <label for="primary-married">
                                                        <img src="img/icons/switch_light.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-married" type="checkbox"   name="is_married" value="1" class="d-none">
													<?php }else{ ?>
													<label for="primary-married">
                                                        <img src="img/icons/switch_light_active.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-married" type="checkbox"  checked name="is_married" value="1" class="d-none">
													
													<?php
													}
													?>
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
												
													<?php if($userDetail->is_personal_acc==0){ ?>
                                                    <label for="primary-accomodatn">
                                                        <img src="img/icons/switch_light.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-accomodatn"  type="checkbox" name="is_personal_acc" value="1" class="d-none">
													<?php }else{ ?>
													<label for="primary-accomodatn">
                                                        <img src="img/icons/switch_light_active.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-accomodatn" type="checkbox" checked  name="is_personal_acc" value="1" class="d-none">
													
													<?php
													}
													?>
													
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
												<?php if($userDetail->is_active_employment==0){ ?> 
                                                    <label for="primary-employment">
                                                        <img src="img/icons/switch_light.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-employment"   type="checkbox" name="is_active_employment" value="1" class="d-none">
													<?php 
													}else{
													?>
													<label for="primary-employment">
                                                         <img src="img/icons/switch_light_active.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-employment" checked  type="checkbox" name="is_active_employment" value="1" class="d-none">
													<?php } ?>
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
												<?php if($userDetail->personal_vehicle==0){ ?>
                                                    <label for="primary-vehicle">
                                                        <img src="img/icons/switch_light.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-vehicle"   type="checkbox" name="personal_vehicle" value="1" class="d-none">
												<?php }else{ ?>
												<label for="primary-vehicle">
                                                        <img src="img/icons/switch_light_active.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-vehicle"  checked type="checkbox" name="personal_vehicle" value="1" class="d-none">
												<?php } ?>
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
												<?php if($userDetail->has_children==0){ ?>
                                                    <label for="primary-children">
                                                        <img src="img/icons/switch_light.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-children" type="checkbox"   name="has_children" value="1" class="d-none">
													<?php }else{ ?>
													<label for="primary-children">
                                                        <img src="img/icons/switch_light_active.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-children" type="checkbox"  checked  name="has_children" value="1" class="d-none">
													<?php } ?>
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
												<?php if($userDetail->religious_beliefs==0){ ?>
                                                    <label for="primary-beliefs">
                                                        <img src="img/icons/switch_light.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-beliefs"   type="checkbox" name="religious_beliefs" value="1" class="d-none">
												<?php }else{ ?>
												 <label for="primary-beliefs">
                                                       <img src="img/icons/switch_light_active.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-beliefs"   checked type="checkbox" name="religious_beliefs" value="1" class="d-none">
												<?php } ?>
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
												<?php if($userDetail->ever_cheated==0){ ?>
                                                    <label for="primary-cheated">
                                                        <img src="img/icons/switch_light.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-cheated" type="checkbox"    name="ever_cheated" value="1" class="d-none">
												<?php }else{ ?>
												<label for="primary-cheated">
                                                        <img src="img/icons/switch_light_active.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-cheated" type="checkbox"   checked   name="ever_cheated" value="1" class="d-none">
												<?php } ?>
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
												 <?php if($userDetail->health_issue==1){ ?>
                                                    <label for="primary-health">
                                                        <img src="img/icons/switch_light.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-health"  type="checkbox" name="health_issue" value="1" class="d-none">
													<?php }else{ ?>
													 <label for="primary-health">
                                                         <img src="img/icons/switch_light_active.svg" class="primry-changeimg">
                                                    </label>
                                                    <input id="primary-health"  checked type="checkbox" name="health_issue" value="1" class="d-none">
													<?php } ?>
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