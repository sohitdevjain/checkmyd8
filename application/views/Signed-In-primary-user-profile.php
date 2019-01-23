<?php include('signin-header.php'); ?>
<br>
<br>
        <section class="inner-white-sec cust-padding">
            <div class="container">
                <div class="title-bar-mini" style="margin-top: 45px;">
                    <h2>Create your profile</h2>
                </div>

                <div class="row">
                    <div class="col-8 offset-md-2">
                        <div class="profile-message text-center">
                            <h3 class="profile-h">Do you know any of Nicholas' social media handles?</h3>
                            <p>URLs can also be used here</p>

                            <div class="sec-w-form">
                                <form name="step-2-profile" action="#" class="step-form">

                                    <div class="row">
                                        <div class="col-6 has-input-bl social-im">
                                            <img src="img/icons/facebook_logo.svg">
                                            <input type="email" name="f_name" class="line-input" placeholder="facebook.com/profileid" required="required">
                                        </div>

                                        <div class="col-6 has-input-bl social-im">
                                            <img src="img/icons/twitter_logo_active.svg">
                                            <input type="email" name="t_name" class="line-input" placeholder="@twitterhandle" required="required">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6 has-input-bl social-im">
                                            <img src="img/icons/instagram_logo_active.svg">
                                            <input type="email" name="ins_name" class="line-input" placeholder="@instagramhandle" required="required">
                                        </div>

                                        <div class="col-6 has-input-bl social-im">
                                            <img src="img/icons/tinder_logo_active.svg">
                                            <input type="email" name="tin_name" class="line-input" placeholder="tinder.com/webprofile" required="required">
                                        </div>
                                    </div>

                                    <div class="row align-items-center social-im">
                                        <div class="col-12 has-input-bl profile-txt">
                                            <img src="img/icons/attachment.svg" style="width: 5% !important;">
                                            <input type="file" name="file" class="line-input" placeholder="Your location" required="required">
                                            <span> < &nbsp; Upload a picture of yourself </span>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-12 has-input-bl">
                                            <button type="submit" class="btn-landing-dark">About Nicholas <i class="fas fa-angle-right"></i></button>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

<?php include('footer.php'); ?>