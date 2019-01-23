<?php include('signin-header.php'); ?>


    <section class="account-deactivation">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Temporary Account Deactivation</h1>
                    <p class="p1">No worries. We respect your space. You can re-activate your account by signing back into your account using your original details. </p>
                    <p class="p2">Remember, whilst you’re away, people can still create an unofficial profile about you.</p>
                </div>
            </div>
            <div class="sec-w-form">
                <form name="step-2-profile" action="#" class="step-form">
                    <div class="row">
                       <div class="col-4 offset-md-4">
                          <img src="img/icons/password_active.svg" class="img">
                          <input type="password" name="pwd" class="line-input" placeholder="Enter your password" required="required">
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-12 has-input-bl">
                          <a href="primary-user-profile.php">
                          <button type="submit" class="btn-landing1-dark" data-toggle="modal" data-target="#deactivate-account"> Deactivate my account <i class="fas fa-angle-right"></i></button> 
                          </a>
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-12 has-input-bl">
                          <a href="primary-user-profile.php">
                          <button type="submit" class="btn-landing-dark">
                          Cancel <i class="fas fa-angle-right"></i></button>
                          </a>
                       </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

<!-- Account Deactivate Modal -->
    <div class="modal fade" id="deactivate-account">
        <a href="#" class="close" data-dismiss="modal">
            <img src="img/icons/close_dark_btn.svg">
        </a>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
          
                <!-- Modal body -->
                <div class="modal-body text-center">
                    <img src="img/icons/verified_profile.svg" style="width: 10%; margin-bottom: 11px;">
                    <h2>Your review has been submitted for moderation</h2>
                    <p>We have emailed you a receipt and <br> have removed this review.</p>
                    
                </div>
            </div>
        </div>
    </div>