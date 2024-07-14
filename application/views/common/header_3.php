<header class="header header-14">
	<div class="header-top">
		<div class="container">
			<div class="header-right">
				<ul class="top-menu">
					<li>
						<a href="#">Links</a>
						<ul class="menus">
							<li class="login">
								<?php if (empty($this->session->userdata('company_id'))) { ?>

									<ul class="nav navbar-nav flex-row flex-nowrap align-items-center order-lg-10 ml-auto" style="display: flex;">
										<li class="nav-item mr-2">
											<a href="<?= site_url('login'); ?>" class="nav-link text-them">
												<span class="ml-2">Sign In</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="<?= site_url('register'); ?>" class="d-block text-nowrap text-14 text-medium text-white py-0 px-2 rounded btn-join-free">Join Free</a>
										</li>
									</ul>
								<?php } else { ?>
									<div class="d-flex align-items-center ml-auto">
										<div class="nav-link pr-0 dropdown header-user">
											<div data-toggle="dropdown" class="px-2 cursor">
												<span class="box-30 cursor rounded-circle bg-login-icon" style="background-color: #021b79;color: #fff;">
													<i class="icofont-ui-user text-14"></i>
												</span>
											</div>
											<div class="dropdown-menu dropdown-menu-right shadow-sm mr-n2 p-3">
												<ul class="list-group list-group-flush mb-0">
													<li class="list-group-item px-0 py-2">
														<a href="#" class="dropdown-item px-0 d-flex text-17">
															<span class="mr-2">
																<i class="fa fa-dashboard  link-icon"></i>
															</span> Dashboard </a>
													</li>
													<li class="list-group-item px-0 py-2">
														<a href="#" class="dropdown-item px-0 d-flex text-17">
															<span class="mr-2">
																<i class="fa fa-envelope-o link-icon"></i>
															</span> Message Center </a>
													</li>
													<li class="list-group-item px-0 py-2">
														<a href="#" class="dropdown-item px-0 d-flex text-17">
															<span class="mr-2">
																<i class="icofont-architecture-alt link-icon"></i>
															</span> Update Profile </a>
													</li>
													<li class="list-group-item px-0 py-2">
														<a href="#" class="dropdown-item px-0 d-flex text-17">
															<span class="mr-2">
																<i class="fa fa-cube link-icon"></i>
															</span> My Products </a>
													</li>
													<li class="list-group-item px-0 py-2">
														<div>
															<a href="#" class="dropdown-item px-0 text-17 text-wrap">
																<span class="d-block">Submit Buy Requirement</span>
																<small class="d-block">Submit your buying needs to get quotes from top suppliers.</small>
															</a>
														</div>
													</li>
													<li class="list-group-item px-0 py-2">
														<a href="#" class="dropdown-item px-0 d-flex text-17">
															<span class="mr-2">
																<i class="fa fa-sign-out text-14 link-icon"></i>
															</span> Logout </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								<?php } ?>
							</li>
						</ul>
					</li>
				</ul>
				<!-- End .top-menu -->
			</div>
			<!-- End .header-right -->
		</div>
		<!-- End .container -->
	</div>
	<!-- End .header-top -->

	<div class="header-middle">
		<div class="container-fluid">
			<div class="header-left">
				<button class="mobile-menu-toggler">
					<span class="sr-only">Toggle mobile menu</span>
					<i class="icon-bars"></i>
				</button>

				<a href="https://b2bitem.com/" class="logo">
					<img src="<?= base_url(); ?>assets/images/logo/B2B-2nd.png" alt="b2b Logo" width="150" height="75" />
				</a>

				<nav class="main-nav">
					<ul class="menu sf-arrows">
						<li>
							<a href="https://b2bitem.com/" class="sf-ul">Home</a>
						</li>
						<li>
							<a href="<?= site_url('product') ?>" class="sf-ul">Products</a>
						</li>
						<li>
							<a href="<?= site_url('b2bleads') ?>" class="sf-ul">B2B Leads</a>
						</li>
						<li>
							<a href="<?= site_url('companies') ?>" class="sf-ul">Companies</a>
						</li>
					</ul><!-- End .menu -->
				</nav><!-- End .main-nav -->
			</div><!-- End .header-left -->

			<div class="header-right">

			</div><!-- End .header-right -->
		</div><!-- End .container-fluid -->
	</div><!-- End .header-middle -->

	<div class="header-top">
		<div class="container">
			<div class="header-right">
				<!-- End .top-menu -->
			</div>
			<!-- End .header-right -->
		</div>
		<!-- End .container -->
	</div>
	<!-- End .header-top -->


	<div class="header-middle sticky-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-auto col-lg-3 col-xl-3 col-xxl-2">
					<a href="#" class="logo">
						<?php if (!empty($info['logo'])) { ?>
							<img src="https://b2bitem.com/upload/company/<?= $info['logo']; ?>" alt="b2b company Logo" width="50" height="75" />
						<?php } ?>
					</a>
					<div class="supplier-name" style="margin-top: 10px; font-size: 14px; font-weight: normal; color: #333; padding: 10px; margin-left: 10px;">
						<h7><?= $info['company_name']; ?></h7>
					</div>
				</div>
				<!-- End .col-xl-3 col-xxl-2 -->

				<div class="col col-lg-9 col-xl-9 col-xxl-10 header-middle-right">
					<div class="row">
						<div class="col-lg-8 col-xxl-4-5col d-none d-lg-block">
							<div class="header-search header-search-extended header-search-visible header-search-no-radius">
								<a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
								<form action="#" method="get">
									<div class="header-search-wrapper search-wrapper-wide">

										<!-- End .select-custom -->
										<label for="q" class="sr-only">Search</label>
										<input type="search" class="form-control" name="q" id="q" placeholder="Search products ..." required />

										<button class="btn btn-primary" type="submit">
											<i class="icon-search"></i>
										</button>
									</div>
									<!-- End .header-search-wrapper -->
								</form>
							</div>
							<!-- End .header-search -->
						</div>
						<!-- End .col-xxl-4-5col -->

						<div class="col-lg-4 col-xxl-5col d-flex justify-content-end align-items-center">
							<div class="header-dropdown-link">
							</div>
						</div>
						<!-- End .col-xxl-5col -->
					</div>
					<!-- End .row -->
				</div>
				<!-- End .col-xl-9 col-xxl-10 -->
			</div>
			<!-- End .row -->
		</div>
		<!-- End .container-fluid -->
	</div>
	<!-- End .header-middle -->

	<div class="header-bottom sticky-header-2">
		<div class="container-fluid">
			<div class="row">

				<!-- End .col-xl-3 col-xxl-2 -->
				<?php $com_slag = $this->session->userdata('com_slag'); ?>
				<div class="col col-lg-6 col-xl-6 col-xxl-8 header-center">
					<nav class="main-nav">
						<ul class="menu sf-arrows">
							<li class="megamenu-container active">
								<a href="<?= site_url('/' . $com_slag); ?>" class="sf-with-ul">Home</a>

							</li>
							<li>
								<a href="<?= site_url('company/product/' . $com_slag); ?>" class="sf-with-ul">Products</a>
							</li>
							<!-- <li>
										<a href="#" class="sf-with-ul">Company Profile</a>
									</li> -->
							<li>
								<a href="<?= site_url('company/contact/' . $com_slag); ?>" class="sf-with-ul">Contact Us</a>
							</li>

						</ul>
						<!-- End .menu -->
					</nav>
					<!-- End .main-nav -->
				</div>
				<!-- End .col-xl-9 col-xxl-10 -->

				<div class="col col-lg-3 col-xl-3 col-xxl-2 header-right">
					<i class="la la-lightbulb-o"></i>
					<p><span>Chat</span></p>
				</div>
			</div>
			<!-- End .row -->
		</div>
		<!-- End .container-fluid -->
	</div>
	<!-- End .header-bottom -->
</header>
<!-- End .header -->