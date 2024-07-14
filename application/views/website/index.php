<?php
require_once(APPPATH . "views/common/header_1.php");
?>

<main class="main">
	<div class="mb-lg-2"></div>
	<!-- End .mb-lg-2 -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-9 col-xxl-8 offset-lg-3 offset-xxl-2">
				<div class="intro-slider-container slider-container-ratio mb-2">
					<div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
						"nav": false, 
						"dots": true
					}'>
						<div class="intro-slide">
							<figure class="slide-image">
								<picture>
									<source media="(max-width: 480px)" srcset="
														assets/images/demos/demo-14/slider/slide-1-480w.jpg
													" />
									<img src="assets/images/demos/demo-14/slider/slide-1.jpg" alt="Image Desc" />
								</picture>
							</figure>
							<!-- End .slide-image -->

							<div class="intro-content">
								<h3 class="intro-subtitle">B2B marketplace</h3>
								<!-- End .h3 intro-subtitle -->
								<h1 class="intro-title text-white">
									Importers and Exporters
								</h1>
								<!-- End .intro-title -->

								<div class="intro-text text-white">
									B2bItem provide a digital marketplace </br> where businesses can </br> interact, trade, and collaborate.
								</div>
								<!-- End .intro-text -->

								<a href="https://b2bitem.com/register" class="btn btn-primary">
									<span>Join Free</span>
									<i class="icon-long-arrow-right"></i>
								</a>
							</div>
							<!-- End .intro-content -->
						</div>
						<!-- End .intro-slide -->

						<div class="intro-slide">
							<figure class="slide-image">
								<picture>
									<source media="(max-width: 480px)" srcset="
														assets/images/demos/demo-14/slider/slide-2-480w.jpg
													" />
									<img src="assets/images/demos/demo-14/slider/slide-2.jpg" alt="Image Desc" />
								</picture>
							</figure>
							<!-- End .slide-image -->

							<div class="intro-content">
								<h3 class="intro-subtitle">Hottest Deals</h3>
								<!-- End .h3 intro-subtitle -->
								<h1 class="intro-title">
									<span>Wherever You Go</span> <br />DJI Mavic 2 Pro
								</h1>
								<!-- End .intro-title -->

								<div class="intro-price">
									<sup>from</sup>
									<span> $1,948<sup>.99</sup> </span>
								</div>
								<!-- End .intro-price -->

								<a href="https://b2bitem.com/register" class="btn btn-primary">
									<span>Discover Here</span>
									<i class="icon-long-arrow-right"></i>
								</a>
							</div>
							<!-- End .intro-content -->
						</div>
						<!-- End .intro-slide -->

						<!-- End .intro-slide -->
					</div>
					<!-- End .intro-slider owl-carousel owl-simple -->

					<span class="slider-loader"></span><!-- End .slider-loader -->
				</div>
				<!-- End .intro-slider-container -->
			</div>
			<!-- End .col-xl-9 col-xxl-10 -->

			<div class="col-xl-3 col-xxl-2 d-none d-xxl-block">
				<div class="banner banner-overlay banner-content-stretch">
					<a href="#">
						<img src="assets/images/demos/demo-14/banners/banner-1.png" alt="Banner img desc" />
					</a>
					<div class="banner-content text-right">
						<div class="price text-center">
							<sup class="text-white">from</sup>
							<span class="text-white">
								<strong>$199</strong><sup class="text-white">,99</sup>
							</span>
						</div>
						<a href="https://b2bitem.com/register" class="banner-link">Join Free <i class="icon-long-arrow-right"></i></a>
					</div>
					<!-- End .banner-content -->
				</div>
				<!-- End .banner banner-overlay -->
			</div>
			<!-- End .col-xl-3 col-xxl-2 -->
		</div>
		<!-- End .row -->
	</div>
	<!-- End .container-fluid -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-9 col-xxl-10">
				<div class="row">
					<div class="col-lg-12 col-xxl-4-5col">
						<div class="row">
							<!-- End .col-md-6 -->

							<!-- End .col-md-6 -->
						</div>
						<!-- End .row -->
					</div>
					<!-- End .col-lg-3 col-xxl-4-5col -->

					<!-- End .col-lg-3 col-xxl-2 -->
				</div>
				<!-- End .row -->

				<div class="mb-3"></div>
				<!-- End .mb-3 -->

				<!-- End .owl-carousel -->

				<div class="mb-5"></div>
				<!-- End .mb-5 -->

				<div class="bg-lighter trending-products">
					<div class="heading heading-flex mb-3">
						<div class="heading-left">
							<h2 class="title">Featured Products</h2>
							<!-- End .title -->
						</div>
						<!-- End .heading-left -->
						<div class="heading-right">
							<ul class="nav nav-pills justify-content-center" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="trending-all-link" data-toggle="tab" href="#trending-all-tab" role="tab" aria-controls="trending-all-tab" aria-selected="true">All</a>
								</li>
							</ul>
						</div>
						<!-- End .heading-right -->
					</div>
					<!-- End .heading -->
					<div class="tab-content tab-content-carousel">
						<div class="tab-pane p-0 fade show active" id="trending-all-tab" role="tabpanel" aria-labelledby="trending-all-link">
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
										"items":3,
										"nav": true
									},
									"1600": {
										"items":5,
										"nav": true
									}
								}
							}'>
								<?php

								$fplist = $this->websitemodel->get_cat_prodcut_list_for_heme();
								foreach ($fplist as $key => $v) {

								?>
									<div class="product text-center" style="height: 408.47px;">
										<figure class="product-media">

											<a href="<?= site_url(('details/') . $v['pslag']); ?>">
												<img src="https://b2bitem.com/upload/product/<?= $v['product_image']; ?>" alt="<?= $v['product_image']; ?>" class="product-image" style="height: 193.38px;" />
											</a>

											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
												<a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
											</div>
											<!-- End .product-action-vertical -->

											<div class="product-action">
												<a href="<?= site_url(('details/') . $v['pslag']); ?>#product-inquiry" class="btn-product btn-cart" title="Add to cart"><span>contact supplier</span></a>
											</div>
											<!-- End .product-action -->
										</figure>
										<!-- End .product-media -->

										<div class="product-body">
											<div class="product-cat">
												<a href="<?= site_url('category/' . $v['link_prefix']); ?>"><?= $v['category_name']; ?></a>
											</div>
											<!-- End .product-cat -->
											<h3 class="product-title">
												<a href="<?= site_url(('details/') . $v['pslag']); ?>"><?= $v['product_name']; ?></a>
											</h3>
											<!-- End .product-title -->
											<div class="product-price">
												<span class="new-price">Price: <?= $v['price']; ?> USD / <?= $v['unit']; ?></span>
												<!-- <span class="old-price">Was $290.00</span> -->
											</div>
											<!-- End .product-price -->
											<h3 class="product-title" style="color: #825ef7; font-size: 12px;">
												<a href="<?= site_url('/' . $v['com_slag']); ?>">
													<?= $v['company_name']; ?>
												</a>
											</h3>

											<!-- End .rating-container -->
										</div>
										<!-- End .product-body -->
									</div>
									<!-- End .product -->
								<?php } ?>
							</div>
							<!-- End .owl-carousel -->
						</div>
					</div>
					<!-- End .tab-content -->
				</div>
				<!-- End .bg-lighter -->

				<div class="mb-5"></div>
				<!-- End .mb-5 -->

				<!-- End .row cat-banner-row -->

				<div class="mb-3"></div>
				<!-- End .mb-3 -->

				<!-- End .row cat-banner-row -->

				<div class="mb-3"></div>
				<!-- End .mb-3 -->

				<!-- End .row -->

				<div class="mb-3"></div>
				<!-- End .mb-3 -->

				<!-- End .row cat-banner-row -->

				<div class="mb-3"></div>
				<!-- End .mb-3 -->

				<div class="container">
					<hr class="mb-4" />
					<h2 class="title text-center mb-3">Featured Categories<span style="font-weight: bold; color: #825ef7;"></span></h2>
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
						<?php foreach ($featured_cat_list as $val) { ?>
							<div class="banner banner-cat">
								<a href="<?= site_url('category/index/' . $val['link_prefix']); ?>">
									<img src="https://b2bitem.com/upload/category/<?= $val['cat_img']; ?>" alt="<?= $val['category_name']; ?>" title="<?= $val['category_name']; ?>" class="product-image" style="height: 193.38px;" decoding="async" loading="lazy" />
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

				<div class="mb-3"></div>
				<!-- End .mb-3 -->

				<div class="row max-col-2">
					<div class="col-md-6">
						<article class="entry entry-grid info">
							<div class="entry-body">
								<h2 class="entry-title">
									Manufacturer / Supplier
								</h2>
								<div class="entry-meta">
									<h4 class="entry-title" style="color: #007bff; font-size: 18px;">
										Reach to thousands of verified buyers.
									</h4>
								</div>
								<div class="entry-content">
									<div class="pl-3">
										<ul class="entry-list">
											<li>Attract a large number of buyers looking for specific items or suppliers. Reach a wider audience that you may not have been able to reach through traditional channels.</li>
											<li>Opportunity to connect with a diverse range of potential customers, expanding your customer base and market reach.</li>
											<li>Target your marketing by advanced search and filtering, allowing buyers to search for specific products or suppliers based on their requirements.</li>
											<li>Facilitate direct communication between buyers and suppliers to engage with potential customers, address their inquiries, negotiate deals, and build relationships.</li>
											<li>Gather market intelligence that can inform your product development, pricing, and marketing strategies.</li>
										</ul>
									</div>
									<a href="https://b2bitem.com/register" class="read-more">Start Selling - FREE</a>
								</div>
							</div>
						</article>
					</div>
					<!-- End .col-md-6 -->

					<div class="col-md-6">
						<article class="entry entry-grid info">
							<div class="entry-body">
								<h2 class="entry-title">
									Importers / Buyers
								</h2>
								<div class="entry-meta">
									<h4 class="entry-title" style="color: #007bff; font-size: 18px;">
										Access to a wide range of suppliers.
									</h4>
								</div>
								<div class="entry-content">
									<div class="pl-3">
										<ul class="entry-list">
											<li>Gain access to a diverse pool of potential suppliers, increasing your chances of finding the right partners for your sourcing needs.</li>
											<li>Simplifies the supplier discovery process and saves you time and effort in finding suitable suppliers.</li>
											<li>Invite multiple suppliers to provide quotes and proposals, enabling you to compare prices and negotiate favorable terms.</li>
											<li>Engage with potential suppliers, ask questions, discuss specifications, negotiate terms, and clarify any concerns.</li>
											<li>Provide transparency to make informed decisions based on detailed product information, reviews, ratings, and other relevant data.</li>
											<!-- <li>Provide market insights, trend reports, and data analytics that can help you stay informed about industry trends, pricing fluctuations, and demand patterns.</li> -->
										</ul>
									</div>
									<a href="#" class="read-more">Start Buying - FREE</a>
								</div>
							</div>
						</article>
					</div>
					<!-- End .col-md-6 -->
				</div>

				<div class="mb-3"></div>
				<!-- End .mb-3 -->

				<div class="row">
					<div class="col-lg-4 mb-4 mb-lg-0">
						<div class="bg-white biz-box d-flex flex-column h-100">
							<div class="flex-fill">
								<div class="biz-box-title">
									<h3>New Members (Suppliers)</h3>
								</div>
								<div class="biz-box-content">
									<ul class="list-unstyled">
										<?php
										foreach ($sellercompany as $key => $val) {
										?>
											<li class="mb-2">
												<a href="<?= site_url($val['slag']); ?>" class="d-block">
													<?php if (!empty($val['flag'])) { ?>
														<img src="https://b2bitem.com/upload/country/16_16/<?= $val['flag']; ?>" class="mr-1">
													<?php } ?>
													<?= $val['company_name']; ?> </a>
											</li>
										<?php } ?>
									</ul>
								</div>
							</div>
							<div class="text-center text-lg-right">
								<a href="#" class="btn btn-primary" style="border-radius: 5px;">
									<span>Start Now</span>
									<i class="icon-long-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-8 mb-4 mb-lg-0">
						<div class="bg-white biz-box h-100">
							<div class="biz-box-title d-flex align-items-center justify-content-between mb-0">
								<div>
									<h2 class="block-text">Latest Trade Offers</h2>
								</div>
							</div>
							<div class="biz-box-content">
								<div class="table-responsive">
									<table class="table requirement-table">
										<thead>
											<tr>
												<th style="min-width: 160px" scope="col" class="text-strong border-bottom-0">
													Offer Description
												</th>
												<th scope="col" class="text-strong border-bottom-0 text-nowrap">
													Country / Region
												</th>
												<th scope="col" class="text-strong border-bottom-0 text-nowrap">
													Posted on
												</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$selllist = $this->websitemodel->get_sell_offer_list_top_5();
											//echo '<pre>';print_r($selllist);exit;
											foreach ($selllist as $key => $val) {

											?>
												<tr class="table-unstyled">
													<td>
														<a href="<?= site_url('buysell/' . $val['slag']); ?>" class="text-medium text-business-tertiary">
															<?= $val['ad_title']; ?>
														</a>
													</td>

													<td class="td-unstyled">
														<img src="https://b2bitem.com/upload/country/16_16/<?= $val['flag']; ?>" class="flag mr-1" />
														<?= $val['country_name']; ?>
													</td>
													<td class="text-nowrap"><?= $val['date']; ?></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="mb-5"></div>
				<!-- End .mb-5 -->
			</div>
			<!-- End .col-lg-9 col-xxl-10 -->

			<aside class="col-xl-3 col-xxl-2 order-xl-first">
				<div class="sidebar sidebar-home">
					<div class="row">
						<!-- End .col-sm-6 col-xl-12 -->
						<div class="col-sm-6 col-xl-12 mb-2">
							<div class="mb-10"></div>
							<div class="widget widget-products">
								<h4 class="widget-title"><span>Latest Products</span></h4>
								<!-- End .widget-title -->

								<div class="products">
									<?php
									foreach ($productlist2 as $key => $v) {
									?>
										<div class="product product-sm">
											<figure class="product-media">
												<a href="#">
													<?php if (!empty($v['product_image'])) { ?>
														<img src="https://b2bitem.com/upload/product/<?= $v['product_image']; ?>" alt="<?= $v['product_name']; ?>" title="<?= $v['product_name']; ?>" class="product-image img-fluid" decoding="async" loading="lazy">
													<?php } ?>
												</a>
											</figure>

											<div class="product-body">
												<h5 class="product-title">
													<a href="<?= site_url(('details/') . $v['pslag']); ?>" class="d-block text-roboto-evening text-14"><?= $v['product_name']; ?></a>
													<div class="product-title country-info-container">
														<?php if (!empty($v['flag'])) { ?>
															<span class="mr-1 mt-n05">
																<img src="https://b2bitem.com/upload/country/16_16/<?= $v['flag']; ?>" alt="<?= $v['country_name']; ?>">
															</span>
														<?php } ?>
														<a href="#" class="text-13 text-strong text-muted"><?= $v['country_name']; ?></a>
													</div>
												</h5>
												<!-- End .product-title -->
												<!-- <div class="product-price">$<?= $v['price']; ?></div> -->
												<!-- End .product-price -->
											</div>
											<!-- End .product-body -->
										</div>
										<!-- End .product product-sm -->
									<?php } ?>
								</div>
								<!-- End .products -->
							</div>
							<!-- End .widget widget-products -->

						</div>
						<!-- End .col-sm-6 col-xl-12 -->

						<div class="col-12">

						</div>
						<!-- End .col-sm-6 col-lg-xl -->

						<!-- End .col-sm-6 col-lg-12 -->

						<!-- End .col-sm-6 col-xl-12 -->
					</div>
					<!-- End .row -->
				</div>
				<!-- End .sidebar sidebar-home -->
			</aside>
			<!-- End .col-lg-3 col-xxl-2 -->
		</div>
		<!-- End .row -->
	</div>
	<!-- End .container-fluid -->
	<div class="container">
		<!-- <h2 class="title text-center mb-5">
			Sale Banner <span class="title-separator">/</span> With Background
		</h2> -->
		<!-- End .title -->

		<div class="cta cta-border mb-5">
			<div class="row justify-content-center">
				<div class="col-md-11 col-xl-10">
					<div class="cta-content">
						<div class="cta-heading">
							<h3 class="cta-title text-right">
								Describe your needs
							</h3>
							<!-- End .cta-title -->
						</div>
						<!-- End .cta-heading -->

						<div class="cta-text">
							<p>
								Post your buy requirement & get quotes from potential suppliers.
							</p>
						</div>
						<div class="col-lg-6">
							<!-- <h2 class="title mb-1">Got Any Questions?</h2>
							<p class="mb-2">Use the form below to get in touch with the sales team</p> -->

							<form action="<?= site_url('website/buysell_req_from'); ?>" class="contact-form mb-3" method="post">
								<div class="row">
									<div class="col-sm-12">
										<label for="cname" class="sr-only">Item Name</label>
										<input type="text" name="p_name" class="form-control" id="cname" placeholder="Enter product name ..." required>
									</div><!-- End .col-sm-6 -->
								</div><!-- End .row -->
								<div class="form-group">
									<label class="text-lg-18 d-none text-muted">Item Category <span class="text-danger">*</span>
									</label>
									<div>
										<select name="cat_id" id="cat_id" class="form-control text-md-down-14 rounded-0" style="height: 45px;">
											<option value="">-- Select Category --</option>
											<?php foreach ($product_cat as $key => $cat) { ?>
												<option value="<?= $cat['id']; ?>"> <?= $cat['category_name']; ?> </option>
											<?php } ?>
										</select>
									</div>
								</div>
								<label for="cmessage" class="sr-only">Message</label>
								<textarea name="p_des" class="form-control" cols="30" rows="4" id="cmessage" required placeholder="Describe your buying requirement including specifications, sizes etc"></textarea>

								<button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm" style="color: #333333;">
									<span>Post Buy Leads</span>
									<i class="icon-long-arrow-right"></i>
								</button>
							</form><!-- End .contact-form -->
						</div><!-- End .col-lg-6 -->
					</div>
					<!-- End .cta-content -->
				</div>
				<!-- End .col-xl-7 -->
			</div>
			<!-- End .row -->
		</div>
		<!-- End .cta -->
	</div>

	<div class="icon-boxes-container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<div class="icon-box icon-box-side">
						<span class="icon-box-icon text-dark">
							<i class="icon-rocket"></i>
						</span>
						<div class="icon-box-content">
							<h3 class="icon-box-title">Free Shipping</h3>
							<!-- End .icon-box-title -->
							<p>Orders $50 or more</p>
						</div>
						<!-- End .icon-box-content -->
					</div>
					<!-- End .icon-box -->
				</div>
				<!-- End .col-sm-6 col-lg-3 -->

				<div class="col-sm-6 col-lg-3">
					<div class="icon-box icon-box-side">
						<span class="icon-box-icon text-dark">
							<i class="icon-rotate-left"></i>
						</span>

						<div class="icon-box-content">
							<h3 class="icon-box-title">Free Returns</h3>
							<!-- End .icon-box-title -->
							<p>Within 30 days</p>
						</div>
						<!-- End .icon-box-content -->
					</div>
					<!-- End .icon-box -->
				</div>
				<!-- End .col-sm-6 col-lg-3 -->

				<div class="col-sm-6 col-lg-3">
					<div class="icon-box icon-box-side">
						<span class="icon-box-icon text-dark">
							<i class="icon-info-circle"></i>
						</span>

						<div class="icon-box-content">
							<h3 class="icon-box-title">Get 20% Off 1 Item</h3>
							<!-- End .icon-box-title -->
							<p>When you sign up</p>
						</div>
						<!-- End .icon-box-content -->
					</div>
					<!-- End .icon-box -->
				</div>
				<!-- End .col-sm-6 col-lg-3 -->

				<div class="col-sm-6 col-lg-3">
					<div class="icon-box icon-box-side">
						<span class="icon-box-icon text-dark">
							<i class="icon-life-ring"></i>
						</span>

						<div class="icon-box-content">
							<h3 class="icon-box-title">We Support</h3>
							<!-- End .icon-box-title -->
							<p>24/7 amazing services</p>
						</div>
						<!-- End .icon-box-content -->
					</div>
					<!-- End .icon-box -->
				</div>
				<!-- End .col-sm-6 col-lg-3 -->
			</div>
			<!-- End .row -->
		</div>
		<!-- End .container-fluid -->
	</div>
	<!-- End .icon-boxes-container -->
</main>
<!-- End .main -->

<?php
require_once(APPPATH . "views/common/footer_1.php");
?>