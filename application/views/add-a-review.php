<?php include('signin-header.php'); ?>
<section class="add-review-sectn">
	<div class="container-fluid">
		<div class="row">
			<div class="col-8 offset-md-2">
				<div id="tab-review" class="addreview text-center">
					<div class="text-center title">
						<p> Add a review </p>
						<h2> Dating Details </h2>
					</div>
					<div class="review-toggle text-center">
						<a href="#" id="add-areview">
							Review
							<img src="img/icons/switch_light.svg" class="reviewswitch-img">
						</a>
						<a href="#" id="add-alert">
							Alert
						</a>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="addreview-inner text-center">
								<h2>Is your review based on anything specific?</h2>
								<p>Select all the icons that apply.<br>You do not have to select any if you do not need to.</p>
								<div class="row">
									<div class="col-4">
										<div class="optn-click">
											<img src="img/icons/married.svg">
											<h4> In Relationship </h4>
										</div>
									</div>
									<div class="col-4">
										<div class="optn-click">
											<img src="img/icons/employed.svg">
											<h4> Employment </h4>
										</div>
									</div>
									<div class="col-4">
										<div class="optn-click">
											<img src="img/icons/own_place.svg">
											<h4> Own Place </h4>
										</div>
									</div>
									<div class="col-4">
										<div class="optn-click">
											<img src="img/icons/car.svg">
											<h4> Own Car </h4>
										</div>
									</div>
									<div class="col-4">
										<div class="optn-click">
											<img src="img/icons/kids.svg">
											<h4> Has Children </h4>
										</div>
									</div>
									<div class="col-4">
										<div class="optn-click">
											<img src="img/icons/heartbreak.svg">
											<h4> Has Cheated </h4>
										</div>
									</div>
									<div class="col-4">
										<div class="optn-click">
											<img src="img/icons/religion.svg">
											<h4> Religious Views </h4>
										</div>
									</div>
									<div class="col-4">
										<div class="optn-click">
											<img src="img/icons/health.svg">
											<h4> Health issues </h4>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="addreview-inner text-center" style="padding-top: 8px !important;">
								<h2>How many dates did you guys have?</h2>
								<p style="margin-bottom: 35px;">Write a number here</p>
								<input type="text" placeholder="#"  name="review-number"
								class="review-number">
							</div>
						</div>
						<div class="col-6">
							<div class="addreview-inner text-center">
								<h2>When was your last date with Jay?</h2>
								<p>Select on the calendar date</p>
							</div>
							<!-- CALENDAR -->
							<div class="calendar"></div>
							<div class="addreview-inner text-center" style="padding-top: 20px !important;">
								<h2>Do you remember where your date took place?</h2>
								<p style="margin-bottom: 15px;">This is for our eyes only - nobody else</p>
								<div class="place-inp">
									<input type="text" placeholder="e.g. Nando’s, London Bridge"  name="review-place" class="review-place">
								</div>
							</div>
						</div>
					</div>
					<a href="http://impulsewebsystems.com/checkmyd8/write-review.php">
						<button type="submit" class="btn-landing-dark" style="margin-top: 55px !important;">
						Write your review
						<i class="fas fa-angle-right"></i>
						</button>
					</a>
				</div>
				<div id="tab-alert" class="addreview text-center">
					<div class="text-center title">
						<p> Add an alert </p>
						<h2> Alert Details </h2>
					</div>
					<div class="review-toggle text-center">
						<a href="#" id="add-areview2">
							Review
							<img src="img/icons/switch_light_active.svg" class="reviewswitch-img">
						</a>
						<a href="#" id="add-alert" class="add-alclr">
							Alert
						</a>
					</div>
					<div class="row mrt80">
						<div class="col-2 offset-md-3">
							<img src="img/icons/catfish.svg" class="imgw85">
						</div>
						<div class="col-2">
							<img src="img/icons/STI.svg" class="imgw85">
						</div>
						<div class="col-2">
							<img src="img/icons/alert.svg" class="imgw85">
						</div>
					</div>
					<div class="row">
						<div class="col-6 offset-md-4 profile-txt mrt30">
							<img src="img/icons/attachment.svg">
							<input type="file" name="file" class="line-input" placeholder="Your location" required="required">
							<span> &lt; &nbsp; Upload evidence for us to review </span>
						</div>
					</div>
					<button type="submit" class="btn-landing-dark" data-toggle="modal" data-target="#post-review" style="margin-top: 30px !important;">
					Post your alert
					<i class="fas fa-angle-right"></i>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- Thank you Modal -->
    <div class="modal fade" id="post-review">
        <a href="#" class="close" data-dismiss="modal">
            <img src="img/icons/close_dark_btn.svg">
        </a>
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                
                <!-- Modal body -->
                <div class="modal-body text-center post-revmod">
                	<img src="img/icons/verified_profile.svg">
                    <h2>Your review has been<br> submited for moderation</h2>
                    <p>Give us 24 hours at the most and we'll <br> let you know when your alert is live.</p>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>