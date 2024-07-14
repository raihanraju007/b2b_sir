<?php
require_once(APPPATH . "views/common/header_2.php");
?>

<main class="main">

	<div class="page-content">
		<section class="mb-4">
			<div class="container px-0">
				<div class="col-xl-7 p-0 mx-auto">
					<div class="auth-box p-4 pt-lg-5 px-lg-5 mb-5">
						<div class="px-lg-4">
							<h1 class="auth-title pb-3 text-theme text-strong text-16 text-lg-28 mb-3 mb-lg-4 border-bottom">Join Free</h1>
							<div class="auth-info registration-form dark-placeholder mb-3">

								<form method="post" action="<?= site_url('website/virify_email'); ?>">
									<?php if ($this->session->flashdata('error')) : ?>
										<div class="alert alert-error alert-dismissible" role="alert" style="padding: 0px;margin:0px;">
											<button type="button" class="close" data-dismiss="alert"></button>
											<?php echo $this->session->flashdata('error'); ?>
										</div>
									<?php endif; ?>
									<div class="form-group d-flex">
										<label for="company" class="mr-3">I am:</label>
										<div>
											<div class="auth-input-group">
												<div class="form-check-inline">
													<label class="form-check-label">
														<input type="radio" <?php if ($sesdata['company_user_type'] == 'Seller') {
																				echo 'checked';
																			} ?> required="required" name="company_user_type" value="Seller" class="form-check-input "> Seller </label>
												</div>
												<div class="form-check-inline">
													<label class="form-check-label">
														<input type="radio" required="required" name="company_user_type" <?php if ($sesdata['company_user_type'] == 'Buyer') {
																																echo 'checked';
																															} ?> value="Buyer" data-target="#businessTypeForBuyer" class="form-check-input"> Buyer </label>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Company Name</label>
										<div class="auth-input-group">
											<input type="text" name="company_name" required="required" id="company_name" value="<?= $sesdata['company_name_ses']; ?>" placeholder="Please enter your company name" class="form-control rounded-0">
										</div>
									</div>
									<div class="form-group">
										<label>Country</label>
										<div class="auth-input-group">
											<select name="country_id" required="required" id="country_id" class="select2 form-control rounded-0">
												<option value=""> -- Select Country -- </option>
												<?php foreach ($country as $key => $v) {
													if ($v['id'] == $sesdata['country_id']) {
														$selec = 'selected="selected"';
													} else {
														$selec = '';
													}

												?>
													<option <?= $selec; ?> value="<?= $v['id']; ?>"> <?= $v['country_name']; ?> </option>
												<?php } ?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label>Name</label>
										<div class="auth-input-group">
											<input required="required" type="text" name="contact_person" id="contact_person" value="<?= $sesdata['contact_person_ses']; ?>" placeholder="Enter your name" class="form-control force-alphabet rounded-0">
										</div>

									</div>
									<div class="form-group">
										<label>Email</label>
										<div class="auth-input-group">
											<input type="email" required="required" name="email" id="email" value="<?= $sesdata['email']; ?>" placeholder="Enter your email address" autocomplete="off" class="form-control rounded-0">
										</div>
									</div>
									<div class="form-group">
										<label>Mobile</label>
										<div class="auth-input-group">
											<input type="text" name="mobile" required="required" id="mobile" value="<?= $sesdata['mobile']; ?>" placeholder="Enter phone number" class="form-control rounded-0 prevent-first-zero numeric-validation" aria-errormessage="Phone Number">
											<span class="phone-error"></span>
										</div>
									</div>
									<div class="form-group">
										<label>Password</label>
										<div class="auth-input-group">
											<input type="password" required="required" name="password" id="password" placeholder="Enter password" autocomplete="off" class="form-control rounded-0">
										</div>
									</div>

									<div class="form-group">
										<label>Captcha</label>
										<div class="auth-input-group">
											<input type="text" required="required" style="width:67%; float: left; margin-right:10px;" name="captcha" value="<?= $sesdata['captcha']; ?>" placeholder="Enter captcha type here...." autocomplete="off" class="form-control rounded-0">
											<span id="captImg"><?php echo $captchaImg; ?></span>
										</div>
										<p>Can't read the image? click <a href="javascript:void(0);" class="refreshCaptcha">here</a> to refresh.</p>
									</div>


									<div class="form-group text-md-center">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" data-toggle="submit" class="custom-control-input" id="agreeBusinessListingTerms" name="agreeBusinessListingTerms" required>
											<label class="custom-control-label text-muted text-15" for="agreeBusinessListingTerms">I Agree to <a href="#" data-toggle="smoth-anchor" data-target="#termAgreement" class="text-muted text-hover-underline">Business & Product Listing Terms </a>
											</label>
										</div>
									</div>
									<div class="text-center mt-4 mb-5">
										<div class="form-group">
											<button type="submit" class="btn btn-b2bmap-secondary px-5 w-lg-down-100 rounded-0">Join Free Now</button>
										</div>
										<div class="form-group pt-2"> Already a Member ? <a href="#" class="text-business-secondary"> Click Here to Login</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div><!-- End .page-content -->
</main><!-- End .main -->

<?php
require_once(APPPATH . "views/common/footer_1.php");
?>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<style type="text/css">
	.select2-container .select2-selection--single {
		height: calc(1.5em + 0.75rem + 2px) !important;
	}
</style>

<script>
	$(function() {
		$(".select2").select2();
	});
</script>

<script>
	$(document).ready(function() {
		$('.refreshCaptcha').on('click', function() {
			$.get('<?php echo site_url() . 'website/refresh'; ?>', function(data) {
				$('#captImg').html(data);
			});
		});
	});
</script>