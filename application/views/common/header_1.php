<header class="header header-14">
	<div class="header-top">
		<div class="container">
			<!-- <div class="header-left">
				<a href="tel:#"><i class="icon-phone"></i>Call: +880XXXXXXXXXX</a>
			</div> -->
			<!-- End .header-left -->

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
												<span class="ml-2" style="color: #333333; font-weight: bolder;">Sign In</span>
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
														<a href="https://b2bitem.com/logout" class="dropdown-item px-0 d-flex text-17">
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
			<div class="row">
				<div class="col-auto col-lg-3 col-xl-3 col-xxl-2">
					<button class="mobile-menu-toggler">
						<span class="sr-only">Toggle mobile menu</span>
						<i class="icon-bars"></i>
					</button>
					<a href="https://b2bitem.com/" class="logo">
						<img src="<?= base_url(); ?>assets/images/logo/B2B-2nd.png" alt="b2b Logo" width="150" height="75" />
					</a>
				</div>
				<!-- End .col-xl-3 col-xxl-2 -->

				<div class="col col-lg-9 col-xl-9 col-xxl-10 header-middle-right">
					<div class="row">
						<div class="col-lg-8 col-xxl-4-5col d-none d-lg-block">
							<div class="header-search header-search-extended header-search-visible header-search-no-radius">
								<a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
								<form action="#" method="get">
									<div class="header-search-wrapper search-wrapper-wide">
										<div class="select-custom">
											<select id="cat" name="cat">
												<option value="">All Departments</option>
												<option value="1">Fashion</option>
												<option value="2">- Women</option>
												<option value="3">- Men</option>
												<option value="4">- Jewellery</option>
												<option value="5">- Kids Fashion</option>
												<option value="6">Electronics</option>
												<option value="7">- Smart TVs</option>
												<option value="8">- Cameras</option>
												<option value="9">- Games</option>
												<option value="10">Home &amp; Garden</option>
												<option value="11">Motors</option>
												<option value="12">- Cars and Trucks</option>
												<option value="15">- Boats</option>
												<option value="16">
													- Auto Tools &amp; Supplies
												</option>
											</select>
										</div>
										<!-- End .select-custom -->
										<label for="q" class="sr-only">Search</label>
										<input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required />

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
								<a href="#" class="wishlist-link">
									<i class="icon-heart-o"></i>
									<span class="wishlist-count">3</span>
									<span class="wishlist-txt">Wishlist</span>
								</a>
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

	<div class="header-bottom sticky-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-auto col-lg-3 col-xl-3 col-xxl-2 header-left">
					<div class="dropdown category-dropdown show is-on" data-visible="true">
						<a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
							Product Categories
						</a>

						<div class="dropdown-menu show">
							<nav class="side-nav">
								<ul class="menu-vertical sf-arrows">

									<?php foreach ($product_cat as $key => $val) {
										$catname = $val['category_name'];
										$slag = $val['link_prefix'];
									?>

										<li class="megamenu-container">
											<a class="sf-with-ul" href="<?= site_url('category/' . $slag); ?>"><?= $catname; ?></a>

											<div class="megamenu">
												<div class="row no-gutters">
													<div class="col-md-12">
														<div class="menu-col">
															<div class="row">
																<?php
																$sub_cat = $this->sellermodel->get_sub_cat_list($val['id']);
																foreach ($sub_cat as $key => $v) {
																	$subcat = $v['sub_category_name'];
																	$subslag = $v['sub_link_prefix'];
																?>
																	<div class="col-md-6">
																		<!-- <div class="menu-title"><?= $v['sub_category_name']; ?></div> -->
																		<!-- End .menu-title -->
																		<ul>
																			<li>
																				<a href="<?= site_url('subcategory/' . $subslag); ?>"><?= $subcat; ?></a>
																			</li>
																		</ul>
																	</div>
																<?php } ?>
															</div>
															<!-- End .row -->
														</div>
														<!-- End .menu-col -->
													</div>
													<!-- End .col-md-12 -->
												</div>
												<!-- End .row -->
											</div>
											<!-- End .megamenu -->
										</li>
									<?php } ?>

								</ul>
								<!-- End .menu-vertical -->
							</nav>
							<!-- End .side-nav -->
						</div>

						<!-- End .dropdown-menu -->
					</div>
					<!-- End .category-dropdown -->
				</div>
				<!-- End .col-xl-3 col-xxl-2 -->

				<div class="col col-lg-6 col-xl-6 col-xxl-8 header-center">
					<nav class="main-nav">
						<ul class="menu sf-arrows">
							<li>
								<a href="https://b2bitem.com/" class="sf-ul">Home</a>
							</li>
							<li>
								<a href="<?= site_url('/product') ?>" class="sf-ul">Products</a>
							</li>
							<li>
								<a href="<?= site_url('b2bleads') ?>" class="sf-ul">B2B Leads</a>
							</li>
							<li>
								<a href="<?= site_url('companies') ?>" class="sf-ul">Companies</a>
							</li>
						</ul>
						<!-- End .menu -->
					</nav>
					<!-- End .main-nav -->
				</div>
				<!-- End .col-xl-9 col-xxl-10 -->
			</div>
			<!-- End .row -->
		</div>
		<!-- End .container-fluid -->
	</div>
	<!-- End .header-bottom -->
</header>
<!-- End .header -->