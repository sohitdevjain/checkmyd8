<?php include('signin-header.php'); ?>

	<section class="add-review-sectn">
		<div class="container-fluid">
			<div class="row ">
				<div class="col-8 offset-md-2">
					<div class="write-review addreview text-center">
						<div class="text-center title">
							<p> Add a review </p>
							<h2> Write your review </h2>
							<h4> Your rating </h4>
						</div>

							<div class="row align-items-center mrt25">
								<div class="col-1 offset-md-3">
									<div class="write-rat">
										<a href="#">
											<p>Bad <br> date</p>
										</a>
									</div>
								</div>
								<div class="col-4 pd0">
									<div class="profile-rating">
	                                    <img src="img/icons/rating_icon_active.svg">
	                                    <img src="img/icons/rating_icon_inactive.svg">
	                                    <img src="img/icons/rating_icon_inactive.svg">
	                                    <img src="img/icons/rating_icon_inactive.svg">
	                                    <img src="img/icons/rating_icon_inactive.svg">
	                                    <img src="img/icons/rating_icon_inactive.svg">
	                                    <img src="img/icons/rating_icon_inactive.svg">
	                                    <img src="img/icons/rating_icon_inactive.svg">
	                                    <img src="img/icons/rating_icon_inactive.svg">
	                                    <img src="img/icons/rating_icon_inactive.svg">
	                                    <img src="img/icons/rating_icon_inactive.svg">
	                                </div>
								</div>
								<div class="col-1">
									<div class="write-rat">
										<a href="#">
											<p>Good <br> date</p>
										</a>
									</div>
								</div>
							</div>

						<div class="text-center title rat-input">
							<h4>Your headline</h4>
							<input type="text" name="write-review" placeholder="e.g. He disappeared when the bill came!">
							<br>
							<br>
							<h4>Now, what happened?</h4>
							<br>
							<textarea placeholder="Write your story here.Don't mention any contact details here,please!"></textarea>
							<br>
							<br>
							<p>I want to share this review anonymously. </p>
						</div>

						<button type="submit" class="btn-landing-dark" style="margin-top: 25px !important;" data-toggle="modal" data-target="#review-modal">
                            Share your review
                            <i class="fas fa-angle-right"></i> 
                        </button>
					</div>
				</div>
			</div>
		</div>
	</section>



    <!-- Review Modal -->
    <div class="modal fade" id="review-modal">
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

<?php include('footer.php'); ?> 