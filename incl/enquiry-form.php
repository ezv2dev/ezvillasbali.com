
			<div class="py-4">
				<h3 class="text-green">Enquiry Form</h3>
				<form class="contact__form" method="post" action="../mailer/enquiry.php">
						<div class="row">
							<div class="col-md-6 form-group">
								<input name="name" type="text" class="form-control" placeholder="Name" required>
							</div>
							<div class="col-md-6 form-group">
								<input name="email" type="email" class="form-control" placeholder="Email" required>
							</div>
							<div class="col-md-6 form-group">
								<input name="phone" type="text" class="form-control" placeholder="Phone" required>
							</div>
							<div class="col-md-6 form-group">
								<input name="subject" type="text" class="form-control" placeholder="Subject" required>
							</div>
							<div class="col-12 form-group">
								<textarea name="message" class="form-control" rows="3" placeholder="Message" required></textarea>
							 </div>
							<div class="col-12 form-group">
							 	<div class="g-recaptcha" data-sitekey="6LeRHBQgAAAAAC6UiIUHfOHkzwHzsYmzDVbsBJ_V" data-callback="enableBtn"></div>
							</div>
							 <div class="col-12">
								<input id="submit" name="submit" type="submit" class="btn btn-outline-dark" value="Send Message" disabled>
							</div>
						</div>
						<!-- end form element -->
					</form>
			</div>