<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TW6VD33XQH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TW6VD33XQH');
</script>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>
		B2B Marketplace for Importers, Exporters and Manufacturers - Largest B2B
		Business Platform
	</title>
	<link rel="canonical" href="https://b2bitem.com" />

	<link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/logo/B2B.png" />
	<meta name="keywords" content="	B2B Marketplace for Importers, Exporters and Manufacturers" />
	<meta name="description" content="Best B2B Marketplace" />
	<meta name="author" content="FINSOFT" />
	<!-- Favicon -->
	<!-- <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png" />
	<link rel="manifest" href="assets/images/icons/site.html" />
	<link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666" />
	<link rel="shortcut icon" href="assets/images/icons/favicon.ico" />
 -->
	<meta name="application-name" content="B2BItem" />
	<meta name="msapplication-TileColor" content="#cc9966" />
	<meta name="msapplication-config" content="<?= base_url(); ?>assets/images/icons/browserconfig.xml" />
	<meta name="theme-color" content="#ffffff" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css" />
	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/plugins/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/plugins/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/plugins/jquery.countdown.css" />
	<!-- Main CSS File -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/b2b.css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/skins/skin-demo-14.css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/demos/demo-14.css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/plugins/nouislider/nouislider.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<!-- <link rel="stylesheet" href="assets/css/main.css" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/frontend/css/b2b.css"> -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/frontend/css/icofont/icofont.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/frontend/css/googlefonts.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/frontend/css/font-awesome-4.7.0/css/font-awesome.min.css">

	<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
</head>

<body>
	<div class="page-wrapper">
		<?php echo $content_for_layout; ?>
	</div>
	<!-- End .page-wrapper -->
	<button id="scroll-top" title="Back to Top">
		<i class="icon-arrow-up"></i>
	</button>

	<!-- Mobile Menu -->
	<div class="mobile-menu-overlay"></div>
	<!-- End .mobil-menu-overlay -->

	<div class="mobile-menu-container">
		<div class="mobile-menu-wrapper">
			<span class="mobile-menu-close"><i class="icon-close"></i></span>

			<form action="#" method="get" class="mobile-search">
				<label for="mobile-search" class="sr-only">Search</label>
				<input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required />
				<button class="btn btn-primary" type="submit">
					<i class="icon-search"></i>
				</button>
			</form>

			<ul class="nav nav-pills-mobile" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
				</li>
			</ul>

			<div class="tab-content">
				<div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
					<nav class="mobile-nav">
						<ul class="mobile-menu">
							<li class="active">
								<a href="#" class="sf-ul">Home</a>
							</li>
							<li>
								<a href="<?= site_url('product') ?>" class="sf-ul">Products</a>
							</li>
							<li>
								<a href="<?= site_url('b2bleads') ?>" class="sf-ul">B2B Leads</a>
							</li>
							<li>
								<a href="<?= site_url('/') ?>" class="sf-ul">Companies</a>
							</li>
						</ul>
					</nav>
					<!-- End .mobile-nav -->
				</div>
				<!-- .End .tab-pane -->
				<!-- <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
					<nav class="mobile-cats-nav">
						<ul class="mobile-cats-menu">
							<?php foreach ($product_cat as $key => $val) {
								$catname = $val['category_name'];
								$slag = $val['link_prefix'];
							?>
								<li><a href="<?= site_url('category/' . $slag); ?>"><?= $catname; ?></a></li>
							<?php } ?>
						</ul>

					</nav>

				</div> -->
				<!-- .End .tab-pane -->
			</div>
			<!-- End .tab-content -->

			<div class="social-icons">
				<a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
				<a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
				<a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
				<a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
			</div>
			<!-- End .social-icons -->
		</div>
		<!-- End .mobile-menu-wrapper -->
	</div>
	<!-- End .mobile-menu-container -->

	<!-- Sign in / Register Modal -->
	<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"><i class="icon-close"></i></span>
					</button>

					<div class="form-box">
						<div class="form-tab">
							<ul class="nav nav-pills nav-fill" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
								</li>
							</ul>
							<div class="tab-content" id="tab-content-5">
								<div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
									<form action="#">
										<div class="form-group">
											<label for="singin-email">Username or email address *</label>
											<input type="text" class="form-control" id="singin-email" name="singin-email" required />
										</div>
										<!-- End .form-group -->

										<div class="form-group">
											<label for="singin-password">Password *</label>
											<input type="password" class="form-control" id="singin-password" name="singin-password" required />
										</div>
										<!-- End .form-group -->

										<div class="form-footer">
											<button type="submit" class="btn btn-outline-primary-2">
												<span>LOG IN</span>
												<i class="icon-long-arrow-right"></i>
											</button>

											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="signin-remember" />
												<label class="custom-control-label" for="signin-remember">Remember Me</label>
											</div>
											<!-- End .custom-checkbox -->

											<a href="#" class="forgot-link">Forgot Your Password?</a>
										</div>
										<!-- End .form-footer -->
									</form>
									<div class="form-choice">
										<p class="text-center">or sign in with</p>
										<div class="row">
											<div class="col-sm-6">
												<a href="#" class="btn btn-login btn-g">
													<i class="icon-google"></i>
													Login With Google
												</a>
											</div>
											<!-- End .col-6 -->
											<div class="col-sm-6">
												<a href="#" class="btn btn-login btn-f">
													<i class="icon-facebook-f"></i>
													Login With Facebook
												</a>
											</div>
											<!-- End .col-6 -->
										</div>
										<!-- End .row -->
									</div>
									<!-- End .form-choice -->
								</div>
								<!-- .End .tab-pane -->
								<div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
									<form action="#">
										<div class="form-group">
											<label for="register-email">Your email address *</label>
											<input type="email" class="form-control" id="register-email" name="register-email" required />
										</div>
										<!-- End .form-group -->

										<div class="form-group">
											<label for="register-password">Password *</label>
											<input type="password" class="form-control" id="register-password" name="register-password" required />
										</div>
										<!-- End .form-group -->

										<div class="form-footer">
											<button type="submit" class="btn btn-outline-primary-2">
												<span>SIGN UP</span>
												<i class="icon-long-arrow-right"></i>
											</button>

											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="register-policy" required />
												<label class="custom-control-label" for="register-policy">I agree to the
													<a href="#">privacy policy</a> *</label>
											</div>
											<!-- End .custom-checkbox -->
										</div>
										<!-- End .form-footer -->
									</form>
									<div class="form-choice">
										<p class="text-center">or sign in with</p>
										<div class="row">
											<div class="col-sm-6">
												<a href="#" class="btn btn-login btn-g">
													<i class="icon-google"></i>
													Login With Google
												</a>
											</div>
											<!-- End .col-6 -->
											<div class="col-sm-6">
												<a href="#" class="btn btn-login btn-f">
													<i class="icon-facebook-f"></i>
													Login With Facebook
												</a>
											</div>
											<!-- End .col-6 -->
										</div>
										<!-- End .row -->
									</div>
									<!-- End .form-choice -->
								</div>
								<!-- .End .tab-pane -->
							</div>
							<!-- End .tab-content -->
						</div>
						<!-- End .form-tab -->
					</div>
					<!-- End .form-box -->
				</div>
				<!-- End .modal-body -->
			</div>
			<!-- End .modal-content -->
		</div>
		<!-- End .modal-dialog -->
	</div>
	<!-- End .modal -->

	<!-- Pop-UP Start -->
	<!-- Pop-UP End -->
	<!-- Plugins JS File -->

	<script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.hoverIntent.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/superfish.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap-input-spinner.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.plugin.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.countdown.min.js"></script>
	<!-- Main JS File -->
	<script src="<?= base_url(); ?>assets/js/main.js"></script>
	<script src="<?= base_url(); ?>assets/js/demos/demo-14.js"></script>

	<script src="<?= base_url(); ?>assets/js/jquery.elevateZoom.min.js"></script>

	<link rel="stylesheet" href="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/themes/df-messenger-default.css">
	<script src="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/df-messenger.js"></script>
	<df-messenger project-id="sclchatbot" agent-id="73204d21-4ef9-48a1-96a5-67c9a63aacb6" language-code="en" max-query-length="-1">
		<df-messenger-chat-bubble chat-title="Ask anything you want !">
		</df-messenger-chat-bubble>
	</df-messenger>
	<style>
		df-messenger {
			z-index: 999;
			position: fixed;
			--df-messenger-font-color: #000;
			--df-messenger-font-family: Google Sans;
			--df-messenger-chat-background: #f3f6fc;
			--df-messenger-message-user-background: #d3e3fd;
			--df-messenger-message-bot-background: #fff;
			bottom: 16px;
			right: 16px;
		}
	</style>
</body>

</html>