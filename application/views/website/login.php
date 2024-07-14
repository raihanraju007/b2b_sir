<?php
require_once(APPPATH . "views/common/header_2.php");
?>

<main class="main">

	<div class="page-content">
		<section>
			<div class="container custom-container">
				<div class="bg-lg-white border-lg p-lg-5">
					<div class="row">
						<div class="col-lg-6 mb-4 mb-lg-0">
							<div class="bg-white p-3 p-lg-0 pr-lg-5 border-lg-right border-lg-down">
								<div class="auth-info mb-3">
									<h2 class="auth-title text-muted mb-4">Member Login</h2>
									<form method="POST" action="<?= site_url('dologin'); ?>">
										<?php if ($this->session->flashdata('error')) : ?>
											<div class="alert alert-error alert-dismissible" role="alert">
												<button type="button" class="close" data-dismiss="alert"></button>
												<?php echo $this->session->flashdata('error'); ?>
											</div>
										<?php endif; ?>
										<div class="auth-input-group mb-4">
											<span class="auth-input-icon">
												<i class="icofont-ui-user"></i>
											</span>
											<input type="email" name="email" value="" id="email" placeholder="Enter email address" required class="form-control" aria-label="input">
										</div>
										<div class="auth-input-group mb-4">
											<span class="auth-input-icon">
												<i class="icofont-ui-lock"></i>
											</span>
											<input type="password" name="password" id="password" placeholder="Enter password" required class="form-control" aria-label="input">
										</div>
										<div class="d-flex flex-wrap justify-content-between">
											<div class="mr-3">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="rememberCheck" name="example1">
													<label class="custom-control-label text-muted text-15" for="rememberCheck">Remember Me</label>
												</div>
											</div>
											<div>
												<a href="<?= site_url('website/forgot_password'); ?>" class="text-business-tertiary text-14">Forgot Password?</a>
											</div>
										</div>
										<div class="text-center mt-4">
											<button type="submit" class="btn btn-b2bmap-secondary px-5 w-lg-down-100">Sign In</button>
										</div>
									</form>
								</div>
								<p class="text-center text-muted">New User ? <a href="<?= site_url('register'); ?>" class="text-business-secondary">Join Free Now</a>
								</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="bg-white p-3 p-lg-0 pl-lg-4 border-lg-down">
								<h2 class="mb-4 text-muted">Not a Member Yet? Join Free to...</h2>
								<ul class="list-unstyled px-2">
									<li class="d-flex mb-2">
										<span class="mr-2">
											<i class="icofont-check text-business-primary text-20"></i>
										</span> Connect With Millions of Buyers and Sellers
									</li>
									<li class="d-flex mb-2">
										<span class="mr-2">
											<i class="icofont-check text-business-primary text-20"></i>
										</span> Promote Business Profile with Product Showcase
									</li>
									<li class="d-flex mb-2">
										<span class="mr-2">
											<i class="icofont-check text-business-primary text-20"></i>
										</span> Expand Your Business Network – Smartly!
									</li>
									<li class="d-flex mb-2">
										<span class="mr-2">
											<i class="icofont-check text-business-primary text-20"></i>
										</span> Boost Your Search Engine Rankings
									</li>
									<li class="d-flex mb-2">
										<span class="mr-2">
											<i class="icofont-check text-business-primary text-20"></i>
										</span> Direct Buyer - Seller Communication
									</li>
									<li class="d-flex mb-2">
										<span class="mr-2">
											<i class="icofont-check text-business-primary text-20"></i>
										</span> Conduct New Business Opportunities
									</li>
								</ul>
								<div class="mt-4 pt-lg-2 offset-sm-1 text-center text-lg-left mb-2">
									<a href="<?= site_url('register'); ?>" class="btn btn-outline-b2bmap-primary text-black-to-white w-sm-down-100 px-4">Join Free Now</a>
								</div>
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