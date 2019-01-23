<?php include('header.php'); ?>


   <section class="inner-white-sec cust-padding">
      <div class="container">
         <div class="title-bar-mini">
            <h2>Create your profile</h2>
         </div>
         <div class="row">
            <div class="col-10 offset-md-1">
               <div class="profile-message text-center">
                  <h3>Hey <span class="pr-name"><?php echo $username; ?></span>, let’s complete your profile before we do anything else… </h3>
                  <p>We’ve made sure this is a very quick process! Also, just so you know, your phone number will not appear on your public profile. Only people who actually have your number will be able to find you by using it as a search term and to leave a review.</p>
                  <a href="<?php echo site_url('add-profile');?>" class="btn-landing-dark">Continue creating profile <i class="fas fa-angle-right"></i></a>
               </div>
            </div>
         </div>
      </div>
   </section>

<?php include('footer.php'); ?>