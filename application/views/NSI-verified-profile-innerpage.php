<?php include('header.php'); ?>

<!-- Website Section -->
    
    <section id="nsi-sec">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6 offset-md-3 text-center ">
                    <img src="img/Avatar.png" class="nsi-client-pic">
                    <h2> Jordan Powell <img src="img/icons/verified_profile.svg"></h2>
                    <div class="nsi-age-place">
                        <span>
                            <img src="img/icons/age_light_btn.svg"> 22
                        </span>
                        <span>
                            <img src="img/icons/location_light_btn.png"> London, UK
                        </span>
                    </div>
                </div>
                <div class="col-10 offset-md-1">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <div class="rating-section">
                                <div class="nsi-profile-rating">
                                    <img src="img/icons/rating_icon_active.svg">
                                    <img src="img/icons/rating_icon_inactive.svg">
                                    <img src="img/icons/rating_icon_inactive.svg">
                                    <img src="img/icons/rating_icon_inactive.svg">
                                    <img src="img/icons/rating_icon_inactive.svg">
                                    <img src="img/icons/rating_icon_inactive.svg">
                                    <img src="img/icons/rating_icon_inactive.svg">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="nsi-profile-icn text-right">
                                <img src="img/icons/watchlist.svg">
                                <img src="img/icons/share11.svg" class="nsi-dropdown" style="width: 5%;">
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
                                <img src="img/icons/report.png" style="width: 13%;">
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
                                <a data-toggle="tab" href="#nsi-about">Reviews (3)</a>
                            </li>
                        </ul>

                        <div class="tab-content nsi-profile-tab">
                            <div id="nsi-about" class="tab-pane fade">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-10 offset-md-1">
                                            <div class="nsi-about-sec">
                                                <div class="nsi-about-rating">
                                                    <img src="img/icons/rating_icon_active.svg">
                                                    <img src="img/icons/rating_icon_inactive.svg">
                                                    <img src="img/icons/rating_icon_inactive.svg">
                                                    <img src="img/icons/rating_icon_inactive.svg">
                                                    <img src="img/icons/rating_icon_inactive.svg">
                                                    <img src="img/icons/rating_icon_inactive.svg">
                                                    <img src="img/icons/rating_icon_inactive.svg">
                                                </div>
                                                <h2 class="nsi-about-title"> “This guy literally vanished after the $500 restaurant bill arrived!” </h2>
                                                <p> Posted on <strong>15 Nov 2018</strong> at <strong> 04:45 AM </strong></p>
                                                <div class="nsi-abt-twoim">
                                                    <img src="img/Avatar.png" class="border-none">
                                                    <p> by <span class="clr-red"> Lucinda Guzman </span> <img class="im-nothing" src="img/icons/verified_profile.svg"></p>
                                                </div>
                                                <div class="nsi-verified-inner">
                                                    <div class="nsi-inner-para">
                                                        <p> Had <strong> 1 date </strong></p>
                                                    </div>
                                                    <div class="nsi-abt-twoim">
                                                        <img src="img/icons/employed.svg">
                                                        <img src="img/icons/car.svg">
                                                    </div>
                                                </div>
                                                <div class="nsi-inner-parag">
                                                    <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                </div>
                                                <div class="nsi-inner-lastimg">
                                                    <div class="nsi-lastle">
                                                        <img src="img/icons/true_inactive@2x.png">
                                                    </div>
                                                    <div class="nsi-lastrig">
                                                        <!-- Remove review -->
                                                        <a href="#" data-toggle="modal" data-target="#remove-review">
                                                            <img src="img/icons/removal.svg">
                                                        </a>

                                                        <img src="img/icons/share.svg">

                                                        <!-- Report Review -->
                                                        <a href="#" data-toggle="modal" data-target="#report-review">
                                                            <img src="img/icons/report.svg">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- Col-12 -->
                                    </div> 
                                </div>
                            </div>

                            <div id="nsi-review" class="tab-pane active ">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="collaps" id="nsi-reviews">
                                                <div class="nsi-review-tab padd-nsi-inner">
                                                    <span>
                                                        <img src="img/icons/report.png">
                                                    </span>
                                                    <div class="nsi-title">
                                                        <h3> Married/In Relationship </h3>
                                                        <img src="img/icons/pocket.png">
                                                    </div>
                                                    <p>
                                                        NO
                                                    </p>
                                                </div>
                                                <div class="nsi-inner">
                                                    <div class="nsi-review-tab nsi-review-tab-inner">
                                                        <span>
                                                            <img src="img/icons/true_inactive.png">
                                                        </span>
                                                        <div class="nsi-title">
                                                            <p>Is this the truth or a lie?</p>
                                                                <div class="progress">
                                                                    <div class="progress-bar" style="width:40%;"></div>
                                                                </div>
                                                            <p class="nsi-title-para">Most people <strong> do not </strong> believe this</p>
                                                        </div>
                                                        <span>
                                                            <img src="img/icons/false_inactive.png">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="collaps" id="nsi-reviews">
                                                <div class="nsi-review-tab padd-nsi-inner">
                                                    <span>
                                                        <img src="img/icons/report.png">
                                                    </span>
                                                    <div class="nsi-title">
                                                        <h3> Married/In Relationship </h3>
                                                        <img src="img/icons/pocket.png">
                                                    </div>
                                                    <p>
                                                        NO
                                                    </p>
                                                </div>
                                                <div class="nsi-inner">
                                                    <div class="nsi-review-tab nsi-review-tab-inner">
                                                        <span>
                                                            <img src="img/icons/true_inactive.png">
                                                        </span>
                                                        <div class="nsi-title">
                                                            <p>Is this the truth or a lie?</p>
                                                                <div class="progress">
                                                                    <div class="progress-bar" style="width:40%;"></div>
                                                                </div>
                                                            <p class="nsi-title-para">Most people <strong> do not </strong> believe this</p>
                                                        </div>
                                                        <span>
                                                            <img src="img/icons/false_inactive.png">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="collaps" id="nsi-reviews">
                                                <div class="nsi-review-tab padd-nsi-inner">
                                                   <span>
                                                       <img src="img/icons/report.png">
                                                   </span>
                                                   <div class="nsi-title">
                                                       <h3> Married/In Relationship </h3>
                                                       <img src="img/icons/pocket.png">
                                                   </div>
                                                   <p>
                                                       NO
                                                   </p>
                                                </div>
                                                <div class="nsi-inner">
                                                   <div class="nsi-review-tab nsi-review-tab-inner">
                                                       <span>
                                                           <img src="img/icons/true_inactive.png">
                                                       </span>
                                                       <div class="nsi-title">
                                                           <p>Is this the truth or a lie?</p>
                                                               <div class="progress">
                                                                   <div class="progress-bar" style="width:40%;"></div>
                                                               </div>
                                                           <p class="nsi-title-para">Most people <strong> do not </strong> believe this</p>
                                                       </div>
                                                       <span>
                                                           <img src="img/icons/false_inactive.png">
                                                       </span>
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="collaps" id="nsi-reviews">
                                                <div class="nsi-review-tab padd-nsi-inner">
                                                   <span>
                                                       <img src="img/icons/report.png">
                                                   </span>
                                                   <div class="nsi-title">
                                                       <h3> Married/In Relationship </h3>
                                                       <img src="img/icons/pocket.png">
                                                   </div>
                                                   <p>
                                                       NO
                                                   </p>
                                                </div>
                                                <div class="nsi-inner">
                                                   <div class="nsi-review-tab nsi-review-tab-inner">
                                                       <span>
                                                           <img src="img/icons/true_inactive.png">
                                                       </span>
                                                       <div class="nsi-title">
                                                           <p>Is this the truth or a lie?</p>
                                                               <div class="progress">
                                                                   <div class="progress-bar" style="width:40%;"></div>
                                                               </div>
                                                           <p class="nsi-title-para">Most people <strong> do not </strong> believe this</p>
                                                       </div>
                                                       <span>
                                                           <img src="img/icons/false_inactive.png">
                                                       </span>
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
    </section>

    <!-- Remove Review -->
    <div class="modal fade" id="remove-review">
        <a href="#" class="close" data-dismiss="modal">
            <img src="img/icons/close_dark_btn.svg">
        </a>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
          
                <!-- Modal body -->
                <div class="modal-body">
                    <p style="margin-top: 0 !important;">
                        <img src="img/icons/removal.svg">
                        Remove for FREE (takes 30 days)
                    </p>
                    <p>
                        <img src="img/icons/removal.svg">
                        Remove INSTANTLY - <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#paymentfor-removal"> &#163;30</a>
                    </p>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Payment-for-removal -->
    <div class="modal fade" id="paymentfor-removal">
        <a href="#" class="close" data-dismiss="modal">
            <img src="img/icons/close_dark_btn.svg">
        </a>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
        
                <!-- Modal body -->
                <div class="modal-body text-center">
                    <div style="margin-top: 0 !important;">
                        <h2>Instant Review Removal</h2>
                        <p class="pay-rupee">&#163;30.00</p>
                        <p>You are paying to remove a review from a profile</p>
                        <div class="payment-box">
                            <div class="row">
                                <div class="col-10 offset-md-1">
                                    <input type="email" name="payment_email" placeholder="Your email address">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10 offset-md-1">
                                    <input type="text" name="payment_name" placeholder="Name on card"> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10 offset-md-1">
                                    <input type="text" name="payment_card_number" placeholder="Card Number"> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="offset-md-1 col-5 ">
                                    <input type="date" name="payment_date" placeholder="Expiry Date MM/YY" class="mrb0 place-jq"> 
                                </div>
                                <div class="col-5">
                                    <input type="text" name="payment_cvv" placeholder="CVV" class="mrb0">
                                </div>
                            </div>
                            <button type="submit" class="btn-landing-dark" data-toggle="modal" data-target="#paymentfor-thankyou" data-dismiss="modal">
                                Pay &#163;30.00 and remove review <i class="fas fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Payment-for-removal-Thankyou-Modal -->
    <div class="modal fade" id="paymentfor-thankyou">
        <a href="#" class="close" data-dismiss="modal">
            <img src="img/icons/close_dark_btn.svg">
        </a>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
          
                <!-- Modal body -->
                <div class="modal-body text-center">
                    <img src="img/icons/verified_profile.svg" style="width: 10%; margin-bottom: 11px;">
                    <h2>Payment Successful</h2>
                    <p>We have emailed you a receipt and <br> have removed this review.</p>
                    <br>
                    <img src="img/icons/CheckMyD8Premium.svg" style="width: 45%; margin-bottom: 15px;">
                    <p>Instant Alerts. Instant Removals.<br> <span class="clr-orange"> £99 per year </span>. Take control now.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Report Review Modal -->
    <div class="modal fade" id="report-review">
        <a href="#" class="close" data-dismiss="modal">
            <img src="img/icons/close_dark_btn.svg">
        </a>
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
          
                <!-- Modal body -->
                <div class="modal-body">
                    <a href="#" data-toggle="modal" data-target="#report-thankyou" data-dismiss="modal">
                        <img src="img/icons/removal.svg">
                        This profile is spam
                    </a>
                    <p>
                        <img src="img/icons/removal.svg">
                        This profile is inappropriate
                    </p>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Thank you Modal -->
    <div class="modal fade" id="report-thankyou">
        <a href="#" class="close" data-dismiss="modal">
            <img src="img/icons/close_dark_btn.svg">
        </a>
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                
                <!-- Modal body -->
                <div class="modal-body text-center">
                    <h2>Thank you</h2>
                    <p>Your report has been received and we're dealing with it immediately.</p>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>