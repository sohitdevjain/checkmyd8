<?php include('signin-header.php'); ?>

        <section class="inner-white-sec cust-padding">
            <div class="container">
                <div class="title-bar-mini" style="margin-top: 45px;">
                    <h2>Create your profile</h2>
                </div>

                <div class="row">
                    <div class="col-8 offset-md-2">
                        <div class="profile-message text-center">
                            <h3>So, tell us about yourself…</h3>
                            <p>We need a few details to create your profile</p>

                            <div class="sec-w-form">
                                <form name="step-2-profile" action="#" class="step-form">

                                    <div class="row">
                                        <div class="col-6 has-input-bl">
                                            <img src="img/icons/user_light_active.svg">
                                            <input type="text" name="f_name" class="line-input" placeholder="First name" required="required">
                                        </div>

                                        <div class="col-6 has-input-bl">
                                            <img src="img/icons/mobile_active.svg">
                                            <input type="text" name="l_name" class="line-input" placeholder="Your phone number" required="required">
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-6 has-input-bl">
                                            <img src="img/icons/user_light_active.svg">
                                            <input type="text" name="ph_number" class="line-input" placeholder="Last Name" required="required">
                                        </div>

                                        <div class="col-3 has-input-bl top-left">
                                            <img src="img/icons/age_light_btn.svg">
                                            <input type="text" name="age" class="line-input" placeholder="Your age" required="required">
                                        </div>

                                        <div class="col-3 has-input-bl mrt13">
                                            <img src="img/icons/gender.svg">
                                            <select class="line-select" name="gender">
                                             <option  selected>Gender</option>
                                              <option>Male</option>
                                               <option>Female</option>
                                             </select>
                                        </div>


                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-12 has-input-bl profile-txt">
                                            <img src="img/icons/location_light_btn.svg" style="width: 4% !important;">
                                            <input type="text" name="location" class="line-input" placeholder="Your location" required="required">
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-12 has-input-bl">
                                            <a href="primary-user-profile.php">
                                            <button type="submit" class="btn-landing-dark">
                                                Social media handles <i class="fas fa-angle-right"></i></button>
                                            </a>
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