<?php
require_once(APPPATH . "views/common/header_2.php");
?>

<main class="main">
	<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
		<div class="container-fluid d-flex align-items-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="https://b2bitem.com">B2bitem</a></li> >
				<li class="breadcrumb-item"><a href="#">Companies</a></li>
			</ol>

		</div><!-- End .container-fluid -->
	</nav><!-- End .breadcrumb-nav -->

	<div class="page-content">

		<section class="mb-4">
			<div class="container custom-container">
				<div class="p-3 px-lg-5 bg-white" style="border: 1px solid #0000001f; border-radius: 5px;">
					<div class="row align-items-center">
						<div class="col-lg-8 col-xl-9">
							<div class="border-lg-right">
								<h1 class="mb-2 text-muted text-strong pr-lg-5 text-lg-down-20"> List Your Company To Gain More Buyer <br /> Exposure - Sell More ! </h1>
								<h3 class="text-18 text-lg-20 text-theme line-height-150 mb-lg-0">List Your Company Details With Our Easy To Use Company Listing Tools. <span class="d-none d-lg-block">Build Strong Online Presence and Get New Buyers.</span>
								</h3>
							</div>
						</div>
						<div class="col-lg-4 col-xl-3">
							<div class="text-center my-1">
								<a href="#" class="btn px-4 btn-b2bmap-primary btn-md-down-small w-sm-down-100">List Your Business - FREE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="mb-4">
			<div class="container custom-container">
				<div class="row">
					<div class="col-lg-3">
						<aside class="aside-on-responsive" id="asideNav">
							<div class="aside-content">
								<div class="directory-tab-box bg-white border mb-4">
									<div class="biz-box-title px-3 bg-light mb-0">
										<h4 class="block-text text-20 text-strong">Suppliers By Category</h4>
									</div>
									<ul class="list-unstyled mb-0 aside-category-list">

										<?php

										foreach ($product_cat as $key => $val) {

											$catname = $val['category_name'];

											$icon = $val['icon'];

											$slag = $val['link_prefix'];

											$sub_cat = $this->sellermodel->get_sub_cat_list($val['id']);
                                        
                                       
                                        
										?>

											<li class="nav-item aside-category-item dropdown">
												<a href="<?=site_url('business/m/'. $slag);?>" class="bg-white px-3 d-flex aside-category-link">
													<span class="mr-2">
														<i class="<?= $icon; ?> link-icon"></i>
													</span> <?= $catname; ?> <span class="ml-auto pl-2 d-lg-down-none">
														<i class="fa fa-angle-right"></i>
													</span>
												</a>
												<div class="dropdown-menu category-menu-dropdown-submenu mt-n2">
													<div class="text-20 text-strong mb-3">
														<a href="<?=site_url('business/m/'. $slag);?>"><?= $catname; ?></a>
													</div>
													<ul class="list-unstyled row mb-0">
														<?php
														
														foreach ($sub_cat as $key => $v) {
														    
														    $subslag =$v['sub_link_prefix'];

															$subcat = $v['sub_category_name'];
														?>
															<li class="col-sm-6 col-lg-4 mb-2">
																<a href="<?=site_url('business/'. $slag.'/'.$subslag);?>" class="d-flex d-md-block text-nowrap text-14 text-theme text-overflow-ellipsis">
																	<span class="mt-n05 mr-2 d-md-none">
																		<i class="fa fa-circle text-6"></i>
																	</span> <?= $subcat; ?> </a>
															</li>
														<?php } ?>
													</ul>
												</div>
											</li>
										<?php } ?>
									</ul>
								</div>

								<div class="d-lg-down-none">
									<div class="biz-box bg-white p-0 mb-4">
										<div class="biz-box-title px-3 bg-light mb-0">
											<h5 class="block-text text-strong">Post Buy Requirement</h5>
										</div>
										<div class="biz-box-content p-3">
											<p class="mb-3">Get quick response from worldwide suppliers</p>
											<form method="post" action="#">
												<input type="hidden" name="_token" value="MVX6BTCWf4FLb058MmeaKdEEOTIlkfT2UxWQq2zO">
												<div class="form-group">
													<label class="text-medium text-muted sr-only">Product You Need</label>
													<input type="text" name="title" id="title" value="" class="form-control" placeholder="Product You Need">
												</div>
												<div class="form-group">
													<label class="text-medium text-muted sr-only">Requirements</label>
													<select name="cat_id" id="cat_id" class="form-control">
														<option value="">Select Product Category</option>
														<?php

														foreach ($product_cat as $key => $val) {

															$catname = $val['category_name'];

															$sub_cat = $this->sellermodel->get_sub_cat_list($val['id']);

														?>
															<option value="<?= $val['id']; ?>"> <?= $catname; ?> </option>
														<?php } ?>
													</select>
												</div>
												<div class="form-group">
													<label class="text-medium text-muted sr-only">Details</label>
													<textarea class="form-control no-focus" name="details" id="details" placeholder="Describe your buying requirement ..."></textarea>
												</div>
												<div class="px-md-5 mt-4 mb-3">
													<button type="button" class="btn btn-b2bmap-primary btn-block">Submit</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</aside>
					</div>



					<div class="col-lg-9">
						<div class="theme-block position-relative mb-4">
							<div class="border-bottom mb-1">
								<h2>List of Suppliers</h2>
							</div>
							<div class="preloader">
								<div class="preloader-backdrop">
									<div class="loader"></div>
								</div>
							</div>
							<div class="table-responsive position-relative">
								<table class="table table-borderless company-list-table">
									<tbody id="directoryContent">
										<?php foreach ($suppliers as $key => $v) { ?>
											<tr>
												<td>
													<a href="<?= site_url('/' . $v['slag']); ?>"> <?= $v['company_name']; ?> </a>
												</td>
												<td class="country-info-container" style="min-width: 200px">
													<?php if (!empty($v['flag'])) { ?>
														<span class="mr-1 mt-n05">
															<img src="https://b2bitem.com/upload/country/16_16/<?= $v['flag']; ?>" alt="<?= $v['country_name']; ?>">
														</span>
													<?php } ?>
													<a href="#"><?= $v['country_name']; ?></a>
												</td>
												<td>
													<a href="<?=site_url('business/m/'. $slag);?>"><?= $v['category_name']; ?></a>
													<i class="fa fa-angle-double-right"></i>
													<a href="<?=site_url('business/'. $slag.'/'.$subslag);?>" class="text-nowrap"> <?= $v['sub_category_name']; ?> </a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
							<div class="text-center">
								<a href="#" class="btn btn-b2bmap-secondary">List Your Business - Free</a>
							</div>
						</div>

						<div class="biz-box bg-white py-3 mb-4 d-lg-down-none">
							<div class="biz-box-title d-flex justify-content-between mb-3">
								<h4 class="block-text">New Products From Suppliers</h4>
							</div>
							<div class="table-responsive">
								<table class="table table-borderless table-striped table-first-no-border v-align-middle mb-0">
									<tbody>

										<?php foreach ($product as $key => $v) { ?>

											<tr>
												<td>
													<?php if (!empty($v['product_image'])) { ?>
														<a href="#" class="box-60 rounded border">
															<img src="https://b2bitem.com/upload/product/<?= $v['product_image']; ?>" decoding="async" loading="lazy" class="img-fit-center rounded">
														</a>
													<?php } ?>
												</td>
												<td style="max-width: 280px">
													<a href="<?= site_url(('details/') . $v['pslag']); ?>" class="d-block"> <?= $v['product_name']; ?></a>
												</td>
												<td class="country-info-container" style="min-width: 200px">
													<?php if (!empty($v['flag'])) { ?>
														<span class="mr-1 mt-n05">
															<img src="https://b2bitem.com/upload/country/16_16/<?= $v['flag']; ?>" alt="<?= $v['country_name']; ?>">
														</span>
													<?php } ?>
													<a href="#"><?= $v['country_name']; ?></a>
												</td>
												<td>
													<a href="https://b2bitem.com/product-list/home-appliances"><?= $v['category_name']; ?></a>
													<i class="fa fa-angle-double-right mx-1"></i>
													<a href="https://b2bitem.com/product-list/kitchen-appliances"> <?= $v['sub_category_name']; ?> </a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>

						<div class="mb-4">
							<div class="bg-white biz-box with-footer-content">
								<div class="biz-box-title">
									<h3 class="text-lg-32">
										<span class="d-lg-none">Product Categories</span>
										<span class="d-lg-down-none">Product Directory: Top Categories</span>
									</h3>
								</div>
								<div class="biz-box-content">
									<div class="category-list">
										<ul class="list-unstyled row mb-0">
											<?php foreach ($product_cat as $key => $v) {
												$icon = $v['icon'];
											?>
												<li class="col-sm-6 col-md-4 col-lg-3 mb-3">
													<a href="#" class="d-flex align-items-center">
														<span class="mr-2">
															<span class="box-20">
																<i class="<?= $icon; ?> text-18 text-link" aria-hidden="true"></i>
															</span>
														</span>
														<span class="text-15 text-medium text-overflow-ellipsis">
															<?= $v['category_name']; ?>
														</span>
													</a>
												</li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="collapse show" id="topCountries">
							<div class="biz-box bg-white mb-4">
								<div class="biz-box-title d-flex justify-content-between mb-3">
									<h4 class="block-text text-md-down-15">Suppliers By Region</h4>
								</div>
								<div class="biz-box-content">
									<ul class="list-unstyled mb-0 row grid-xl-5">
										<?php foreach ($country as $key => $v) { ?>
											<li class="col-6 col-md-4 col-xl-3 mb-2 country-info-container">
												<span class="mr-1 mt-n05">
													<img src="https://b2bitem.com/upload/country/16_16/<?= $v['flag']; ?>" alt="China">
												</span>
												<a href="#" class="text-strong text-14"><?= $v['country_name']; ?></a>
											</li>
										<?php } ?>
									</ul>
								</div>
							</div>

							<div class="theme-block border-0 common-shadow-box py-4" style="background-color: #259aa7">
								<h4 class="text-center text-white mb-3">
									Get quotes from top Suppliers and Exporters for Free!
								</h4>
								<div class="text-center mb-2">
									<a href="#" class="btn btn-lg btn-outline-light border-2px border-white px-4 px-md-5 text-uppercase text-15">Tell Us What You Need</a>
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