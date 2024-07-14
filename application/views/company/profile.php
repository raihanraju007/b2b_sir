<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="https://b2bitem.com/">Home</a></li>
			<li class="breadcrumb-item"><a href="<?= site_url('companies') ?>">Pages</a></li>
			<li class="breadcrumb-item active" aria-current="page">
				Company Page
			</li>
		</ol>
	</div>
	<!-- End .container -->
</nav>
<!-- End .breadcrumb-nav -->
<div class="container">
	<?php if (!empty($info['banner'])) { ?>
		<div class="page-header page-header-big text-center" style="background-image: url('https://b2bitem.com/upload/company/<?php echo $info['banner']; ?>')">
		<?php } else { ?>
			<div class="page-header page-header-big text-center" style="background-image: url('<?php echo base_url(); ?>assets/images/banners/banner-1.jpg')">
			<?php } ?>

			<h1 class="page-title">
				<?= $info['company_name']; ?><span class="" style="color: #333;"><?= $info['country_name']; ?></span>
			</h1>
			</div>
			<!-- End .page-header -->
		</div>
		<!-- End .container -->

		<div class="page-content pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 mb-3 mb-lg-0">
						<h2 class="title">Member Information</h2>
						<!-- End .title -->
						<div class="card-body bg-white">
							<div class="row">
								<div class="col-md-6">
									<div class="table-responsive">
										<table class="table table-sm table-borderless w-auto mb-0">
											<tbody>
												<tr>
													<td class="text-deep-muted">Business Type</td>
													<td class="px-2">:</td>
													<td>
														<ul class="list-inline mb-0">
															<?php
															$type =  $this->sellermodel->get_biz_type();
															foreach ($type as $key => $v) {
																$selelec_type = explode(',', $info['type']);
																if (in_array($v['id'], $selelec_type)) {
																	$select = 'checked';
																} else {
																	continue;
																}
															?>

																<li class="list-inline-item text-nowrap mb-1 text-deep-muted">
																	<span class="text-12 mr-1 d-md-down-none">
																		<i class="fa fa-check"></i>
																	</span> <?= $v['type']; ?>
																</li>

															<?php } ?>
														</ul>
													</td>
												</tr>
												<tr>
													<td class="text-deep-muted">Founded in</td>
													<td class="px-2 text-deep-muted">:</td>
													<td class="text-deep-muted"><?= $info['year_of_stablishment']; ?></td>
												</tr>
												<tr>
													<td class="text-deep-muted">Employees</td>
													<td class="px-2 text-deep-muted">:</td>
													<td class="text-deep-muted"><?= $info['num_of_employee']; ?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-md-6">
									<div class="table-responsive">
										<table class="table table-sm table-borderless w-auto mb-0">
											<tbody>
												<tr>
													<td class="text-deep-muted">Member Since</td>
													<td class="px-2 text-muted">:</td>
													<td class="text-deep-muted"><?= $info['join_date']; ?></td>
												</tr>
												<tr>
													<td class="text-deep-muted">Membership Status</td>
													<td class="px-2 text-muted">:</td>
													<td class="text-deep-muted">Free Member</td>
												</tr>
												<tr>
													<td class="text-deep-muted">Business Category</td>
													<td class="px-2 text-deep-muted">:</td>
													<td class="text-deep-muted"> Electronics &amp; Electrical </td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<h2 class="title">About <span style="font-weight: bold; color: #825ef7;"><?= $info['company_name']; ?></span></h2>
						<!-- End .title -->
						<p><?= $info['description']; ?></p>
					</div>
					<!-- End .col-lg-6 -->

					<div class="col-lg-6">
						<h2 class="title">Company Overview</h2>
						<!-- End .title -->
						<div class="card-body bg-white">
							<div class="row">
								<div class="col-md-6">
									<div class="table-responsive" style=" overflow-x: hidden; overflow-y: hidden;">
										<table class="table table-sm table-borderless w-auto mb-0">
											<tbody>
												<tr>
													<td class="text-deep-muted">Company Name</td>
													<td class="px-2">:</td>
													<td>
														<ul class="list-inline mb-0">
															<li class="list-inline-item text-nowrap mb-1 text-deep-muted">
																<span class="text-12 mr-1 d-md-down-none">
																</span> <?= $info['company_name']; ?>
															</li>
														</ul>
													</td>
												</tr>
												<tr>
													<td class="text-deep-muted">Business Type</td>
													<td class="px-2 text-deep-muted">:</td>
													<td class="text-deep-muted">
														<ul class="list-inline mb-0">
															<li class="list-inline-item text-nowrap mb-1 text-deep-muted">
																<span class="text-12 mr-1 d-md-down-none">
																	<i class="fa fa-check"></i>
																</span> Manufacturer
															</li>
														</ul>
													</td>
												</tr>
												<tr>
													<td class="text-deep-muted">Contact Number</td>
													<td class="px-2 text-deep-muted">:</td>
													<td class="text-deep-muted"><?= $info['mobile']; ?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-md-6">
									<div class="table-responsive">
										<table class="table table-sm table-borderless w-auto mb-0">
											<tbody>
												<tr>
													<td class="text-deep-muted">Register Address</td>
													<td class="px-2 text-muted">:</td>
													<td class="text-deep-muted"><?= $info['company_address']; ?></td>
												</tr>
												<tr>
													<td class="text-deep-muted">Zip Code</td>
													<td class="px-2 text-muted">:</td>
													<td class="text-deep-muted"><?= $info['post_code']; ?></td>
												</tr>
												<tr>
													<td class="text-deep-muted">Country</td>
													<td class="px-2 text-deep-muted">:</td>
													<td class="text-deep-muted"><?= $info['country_name']; ?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<h6>Main Products</h6>
						<!-- End .title -->
						<p>
							<?= $info['main_product']; ?>
						</p>
					</div>
					<!-- End .col-lg-6 -->
				</div>
				<!-- End .row -->

				<div class="mb-5"></div>
				<!-- End .mb-4 -->
			</div>
			<!-- End .container -->
		</div>
		<!-- End .page-content -->

		<div class="page-content">
			<div class="container">
				<hr class="mb-4" />

				<h2 class="title text-center mb-3">Categories from <span style="font-weight: bold; color: #825ef7;"><?= $info['company_name']; ?></span></h2>
				<!-- End .title mb-2 -->

				<div class="owl-carousel owl-simple" data-toggle="owl" data-owl-options='{
				"nav": false, 
				"dots": true,
				"margin": 20,
				"loop": false,
				"responsive": {
					"0": {
						"items":1
					},
					"480": {
						"items":2
					},
					"768": {
						"items":3
					},
					"992": {
						"items":4
					},
					"1200": {
						"items":4,
						"nav": true,
						"dots": false
					}
				}
			}'>
					<?php foreach ($com_cat as $val) { ?>
						<div class="banner banner-cat">
							<a href="<?= site_url('category/index/' . $val['link_prefix']); ?>">
								<img src="https://b2bitem.com/upload/category/<?= $val['cat_img']; ?>" alt="<?= $val['category_name']; ?>" title="<?= $val['category_name']; ?>" class="product-image" style="height: 200.38px;" decoding="async" loading="lazy" />
							</a>

							<div class="banner-content banner-content-static text-center">
								<h3 class="banner-title">
									<a href="<?= site_url('category/index/' . $val['link_prefix']); ?>" class="category-title"><?= $val['category_name']; ?></a>
								</h3>
								<!-- End .banner-title -->
								<!-- <h4 class="banner-subtitle">18 Products</h4> -->
								<!-- End .banner-subtitle -->
								<!-- <a href="#" class="banner-link">Shop Now</a> -->
							</div>
							<!-- End .banner-content -->
						</div>
						<!-- End .banner -->
					<?php } ?>
				</div>
				<!-- End .banners-carousel owl-carousel owl-simple -->
				<!-- End .banners-carousel owl-carousel owl-simple -->

				<hr class="mb-4" />
			</div>
			<!-- End .container -->
		</div>
		<!-- End .page-content -->

		<div class="container">
			<h2 class="title text-center mb-4">Products from <span style="font-weight: bold; color: #825ef7;"><?= $info['company_name']; ?></span></h2><!-- End .title text-center -->
			<div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
					"nav": false, 
					"dots": true,
					"margin": 20,
					"loop": false,
					"responsive": {
						"0": {
							"items":1
						},
						"480": {
							"items":2
						},
						"768": {
							"items":3
						},
						"992": {
							"items":4
						},
						"1200": {
							"items":4,
							"nav": true,
							"dots": false
						}
					}
				}'>

				<?php

				foreach ($plist as $v) {
				?>
					<div class="product product-7 text-center" style="width: 300.5px; height: 455.38px;">
						<figure class="product-media">
							<a href="<?= site_url(('details/') . $v['pslag']); ?>">

								<?php if (!empty($v['product_image'])) { ?>
									<img src="https://b2bitem.com/upload/product/<?= $v['product_image']; ?>" alt="<?= $v['product_name']; ?>" title="<?= $v['product_name']; ?>" class="product-image" style="height: 193.38px;" decoding="async" loading="lazy">
								<?php } ?>
							</a>

							<div class="product-action-vertical">
								<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
								<a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
							</div><!-- End .product-action-vertical -->

							<div class="product-action">
								<a href="<?= site_url(('details/') . $v['pslag']); ?>#product-inquiry" class="btn-product btn-cart"><span>contact supplier</span></a>
							</div><!-- End .product-action -->
						</figure><!-- End .product-media -->

						<div class="product-body">
							<div class="product-cat">
								<a href="<?= site_url('category/' . $v['link_prefix']); ?>" style="color: red;"><?= $v['category_name']; ?></a>
							</div><!-- End .product-cat -->
							<h3 class="product-title"><a href="<?= site_url(('details/') . $v['pslag']); ?>" title="<?= $v['product_name']; ?>"><?= $v['product_name']; ?></a></h3><!-- End .product-title -->
							<div class="product-title country-info-container justify-content-center mb-1">
							</div>
							<div class="product-price">
								Price: <?= $v['price']; ?> / <?= $v['unit']; ?>
							</div><!-- End .product-price -->
							<div class="ratings-container">
								<span class="ratings-text" style="color: #333;">( MOQ: <?= $v['min_order_qty']; ?> <?= $v['unit']; ?>)</span>
							</div><!-- End .rating-container -->
						</div><!-- End .product-body -->
					</div><!-- End .product -->
				<?php } ?>

			</div><!-- End .owl-carousel -->
		</div><!-- End .container -->