<?php
require_once(APPPATH . "views/common/header_2.php");
?>

<main class="main">
	<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
		<div class="container-fluid d-flex align-items-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="https://b2bitem.com">B2bitem</a></li> >
				<li class="breadcrumb-item"><a href="https://b2bitem.com/product">Products</a></li> >
				<li class="breadcrumb-item"><a href="<?= site_url('category/' . $pinfo['link_prefix']); ?>"><?= $pinfo['category_name']; ?></a></li> >
				<li class="breadcrumb-item"><a href="<?= site_url('subcategory/' . $pinfo['sub_link_prefix']); ?>"><?= $pinfo['sub_category_name']; ?></a></li> >
				<li class="breadcrumb-item active" aria-current="page"><?= $pinfo['product_name']; ?></li>
			</ol>

		</div><!-- End .container-fluid -->
	</nav><!-- End .breadcrumb-nav -->

	<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10">
					<div class="product-details-top">
						<div class="row">
							<div class="col-md-6 col-lg-7">
								<div class="product-gallery">
									<figure class="product-main-image">
										<span class="product-label label-top">Top</span>
										<!-- <img id="product-zoom" src="assets/images/products/single/sidebar-gallery/1.jpg" data-zoom-image="assets/images/products/single/sidebar-gallery/1-big.jpg" alt="product image" /> -->
										<?php if (!empty($pinfo['product_image'])) { ?>
											<img id="product-zoom" src="https://b2bitem.com/upload/product/<?= $pinfo['product_image']; ?>" data-zoom-image="https://b2bitem.com/upload/product/<?= $pinfo['product_image']; ?>" alt="<?= $pinfo['product_name']; ?>" title="<?= $pinfo['product_name']; ?>">
										<?php } ?>

										<a href="#" id="btn-product-gallery" class="btn-product-gallery">
											<i class="icon-arrows"></i>
										</a>
									</figure>
									<!-- End .product-main-image -->

									<div id="product-zoom-gallery" class="product-image-gallery">
										<!-- <a class="product-gallery-item active" href="#" data-image="assets/images/products/single/sidebar-gallery/1.jpg" data-zoom-image="assets/images/products/single/sidebar-gallery/1-big.jpg">
											<img src="assets/images/products/single/sidebar-gallery/1-small.jpg" alt="product side" />
										</a> -->
										<?php if (!empty($pinfo['product_image'])) { ?>
											<a class="product-gallery-item active" href="#" data-image="https://b2bitem.com/upload/product/<?= $pinfo['product_image']; ?>" data-zoom-image="https://b2bitem.com/upload/product/<?= $pinfo['product_image']; ?>">
												<img src="https://b2bitem.com/upload/product/<?= $pinfo['product_image']; ?>" alt="<?= $pinfo['product_name']; ?>" title="<?= $pinfo['product_name']; ?>" />
											</a>
										<?php } ?>
										<?php foreach ($pgalary as $key => $v) { ?>
											<a class="product-gallery-item active" href="#" data-image="https://b2bitem.com/upload/product/<?= $pinfo['product_image']; ?>" data-zoom-image="https://b2bitem.com/upload/product/<?= $v['product_pic']; ?>">
												<img src="https://b2bitem.com/upload/product/<?= $v['product_pic']; ?>" alt="<?= $pinfo['product_name']; ?>" title="<?= $pinfo['product_name']; ?>" />
											</a>
										<?php  } ?>
									</div>
									<!-- End .product-image-gallery -->
								</div>
								<!-- End .product-gallery -->
							</div><!-- End .col-lg-7 -->

							<div class="col-md-6 col-lg-5">
								<div class="product-details">
									<h1 class="product-title"><?= $pinfo['product_name']; ?></h1><!-- End .product-title -->



									<div class="product-price">
										<span class="new-price">$<?= $pinfo['price']; ?></span>
										<!-- <span class="old-price">$110.00</span> -->
									</div><!-- End .product-price -->

									<!-- <div class="product-content">
										<p><?= $pinfo['product_description']; ?></p>
									</div> -->


									<div class="details-filter-row details-row-size">
										<label for="size">QTY:</label>
										<div class="model">
											<?= $pinfo['min_order_qty']; ?> <?= $pinfo['unit']; ?>
										</div>
										<!-- End .select-custom -->
									</div><!-- End .details-filter-row -->

									<div class="details-filter-row details-row-size">
										<label for="size">Model:</label>
										<div class="model">
											<?= $pinfo['model_no']; ?>
										</div>
										<!-- End .select-custom -->
									</div><!-- End .details-filter-row -->

									<!-- <div class="product-details-action">
										<a href="#" class="btn-product "><span>contact supplier</span></a>
									</div> -->
									<!-- End .product-details-action -->

									<div class="product-details-footer">
										<div class="product-cat">
											<span>Standard:</span>
											<a href="#"><?= $pinfo['standard']; ?></a>
										</div><!-- End .product-cat -->

										<div class="product-cat">
											<span>Category:</span>
											<a href="#"><?= $pinfo['category_name']; ?></a> >
											<a href="#"><?= $pinfo['sub_category_name']; ?> Care</a>
										</div><!-- End .product-cat -->

										<div class="social-icons social-icons-sm">
											<span class="social-label">Share:</span>
											<a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
											<a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
											<a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
											<a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
										</div>
									</div><!-- End .product-details-footer -->

									<div class="accordion accordion-plus product-details-accordion" id="product-accordion">
										<div class="card card-box card-sm">
											<div class="card-header" id="product-usages">
												<h2 class="card-title">
													<a role="button" data-toggle="collapse" href="#product-accordion-info" aria-expanded="false" aria-controls="product-accordion-info">
														Product Usages
													</a>
												</h2>
											</div><!-- End .card-header -->
											<div id="product-accordion-info" class="collapse show" aria-labelledby="product-usages" data-parent="#product-accordion">
												<div class="card-body">
													<div class="product-desc-content">
														<!-- <h3>Product Usages - Details</h3> -->
														<p><?= $pinfo['product_usage']; ?> </p>
													</div><!-- End .product-desc-content -->
												</div><!-- End .card-body -->
											</div><!-- End .collapse -->
										</div><!-- End .card -->

										<div class="card card-box card-sm">
											<div class="card-header" id="product-keywords">
												<h2 class="card-title">
													<a class="collapsed" role="button" data-toggle="collapse" href="#product-accordion-shipping" aria-expanded="false" aria-controls="product-accordion-shipping">
														Product Keywords
													</a>
												</h2>
											</div><!-- End .card-header -->
											<div id="product-accordion-shipping" class="collapse" aria-labelledby="product-keywords" data-parent="#product-accordion">
												<div class="card-body">
													<div class="product-desc-content">
														<!-- <h3>Product Keywords - Details</h3> -->
														<p><?= $pinfo['product_keywords']; ?> </p>
													</div><!-- End .product-desc-content -->
												</div><!-- End .card-body -->
											</div><!-- End .collapse -->
										</div><!-- End .card -->

										<div class="card card-box card-sm">
											<div class="card-header" id="product-desc-heading">
												<h2 class="card-title">
													<a class="collapsed" role="button" data-toggle="collapse" href="#product-contact-desc" aria-expanded="false" aria-controls="product-contact-desc">
														Product Description
													</a>
												</h2>
											</div><!-- End .card-header -->
											<div id="product-contact-desc" class="collapse" aria-labelledby="product-desc-heading" data-parent="#product-accordion">
												<div class="card-body">
													<div class="product-desc-content">
														<div class="col-lg-12">
															<p><?= $pinfo['product_description']; ?></p>
														</div><!-- End .col-lg-12 -->
													</div><!-- End .product-desc-content -->
												</div><!-- End .card-body -->
											</div><!-- End .collapse -->
										</div><!-- End .card -->

										<div class="card card-box card-sm">
											<div class="card-header" id="product-review-heading">
												<h2 class="card-title">
													<a class="collapsed" role="button" data-toggle="collapse" href="#product-accordion-review" aria-expanded="false" aria-controls="product-accordion-review">
														Reviews (0)
													</a>
												</h2>
											</div><!-- End .card-header -->
											<div id="product-accordion-review" class="collapse" aria-labelledby="product-review-heading" data-parent="#product-accordion">
												<div class="card-body">
													<div class="reviews">
														
													</div><!-- End .reviews -->
												</div><!-- End .card-body -->
											</div><!-- End .collapse -->
										</div><!-- End .card -->
									</div><!-- End .accordion -->

								</div><!-- End .product-details -->
							</div><!-- End .col-lg-5 -->
						</div><!-- End .row -->
					</div><!-- End .product-details-top -->
				</div><!-- End .col-xl-10 -->

				<aside class="col-xl-2 d-md-none d-xl-block">
					<div class="sidebar sidebar-product">
						<div class="sr-layout-block">
							<div class="custom-layout-block">
								<div class="custom-theme-">
									<div>
										<h4 class="custom-heading mb-3">Supplier Info :</h4>
										<h4 class="custom-text-large custom-text-xl">
											<a href="<?= site_url('/' . $pinfo['slag']); ?>" class="custom-text-strong">
												<span><?= $pinfo['company_name']; ?></span>
											</a>
										</h4>
										<div class="custom-supplier-info mb-2">
											<div class="custom-flag-container">
												<?php if (!empty($pinfo['flag'])) { ?>
													<img src="https://b2bitem.com/upload/country/16_16/<?= $pinfo['flag']; ?>" alt="France" class="mr-1">
												<?php } ?>
											</div>
											<div class="custom-country-name">
												<span><?= $pinfo['country_name']; ?></span>
											</div>
										</div>
										<p class="custom-paragraph mb-2"><span>Year Established:</span> <?= $pinfo['year_of_stablishment']; ?></p>
										<div class="custom-business-type mb-2">
											<p class="custom-text-strong mb-1">Business Type:</p>
											<ul class="custom-business-type-list">
												<li class="custom-text-muted">Manufacturer</li>
												<li class="custom-text-muted">Wholesaler</li>
											</ul>
										</div>
										<div class="custom-contact-info">
											<span class="custom-contact-icon mr-2">
												<i class="fas fa-phone-alt"></i>
											</span>
											<span class="custom-text-muted">
												<span class="custom-contact-number"><?= $pinfo['mobile']; ?></span>
											</span>
										</div>
										<a href="#" class="custom-link">
											<span class="custom-box-icon mr-2">
												<i class="fas fa-crop"></i>
											</span>
											<span class="custom-text-muted">View all products</span>
										</a>
										<a href="#" class="custom-link">
											<span class="custom-box-icon mr-2">
												<i class="fas fa-barcode"></i>
											</span>
											<span class="custom-text-muted">View Company Profile</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</aside><!-- End .col-xl-2 -->
			</div><!-- End .row -->

		</div><!-- End .container-fluid -->

		<div class="container" id="product-inquiry">
			<h2 class="title text-center mb-4">Send Your Message to:
				<a href="<?= site_url('/' . $pinfo['slag']); ?>" title="View Company Details" class="text-info">
					<span class="text-strong"><?= $pinfo['company_name']; ?></span>
				</a>
			</h2>
			<div class="row" style="float: left;width: 100%;">
				<div class="col-md-12">
					<div class="card rounded-0 mb-4 specification">
						<div class="card-body bg-white">
							<div class="biz-form px-lg-5 py-lg-4">
								<!--<form id="inquiry-form" action="#" method="post" enctype="multipart/form-data">-->
								<?= form_open('company/contact/' . $pinfo['slag'], ['id' => 'inquiry-form']); ?>
									<input type="hidden" name="_token" value="6IAc9fKColymscQ52UydixIdL4QWaJcefDOvbl0X">
									<input type="hidden" name="inquiry_to" value="seller">
									<input type="hidden" name="item_id" value="34279">
									<input type="hidden" name="item_type" value="product">
									<div class="biz-form">
										<div class="row mx-lg-n4 justify-content-lg-center">
											<div class="col-lg-3 px-lg-4">
												<div class="form-group">
													<?php if (!empty($pinfo['product_image'])) { ?>
														<img src="https://b2bitem.com/upload/product/<?= $pinfo['product_image']; ?>" alt="<?= $pinfo['product_name']; ?>" title="<?= $pinfo['product_name']; ?>" class="img-thumbnail mx-auto d-block" decoding="async" loading="lazy">
													<?php } ?>
												</div>
											</div>
											<div class="col-lg-7 px-xl-5">
												<div class="form-group">
													<div>
													    <input type="hidden" name="company_id" value="<?= $pinfo['id']; ?>">
                                                        <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id'); ?>">
                                                         <input type="text" name="subject" id="subject" value="<?= set_value('subject'); ?>" class="form-control" placeholder="Enter Message Title">
                                                         <?= form_error('subject', '<div class="text-danger">', '</div>'); ?>
														<!--<input type="text" name="subject" value placeholder="<?= $pinfo['product_name']; ?>" class="form-control deep-placeholder numeric-validation" data-check-subject="true">-->
													</div>
												</div>
												<div class="form-group">
													<div>
														<!--<textarea rows="5" name="mail_body" class="form-control deep-placeholder" placeholder="Enter your inquiry details such as product name, color, size, quantity, pricing etc"></textarea>-->
														 <textarea rows="5" name="message" id="message" class="form-control" placeholder="Enter Your Message on product requirement or other inquiries"><?= set_value('message'); ?></textarea>
                                                            <?= form_error('message', '<div class="text-danger">', '</div>'); ?>
													</div>
												</div>
												<div class="mb-3">
													<div class="py-2 mb-2">
														<div class="custom-control custom-radio custom-control-inline my-1">
															<input type="radio" class="custom-control-input user-existence-checker" id="existingUserToggler" name="member_type" value="existing">
															<label class="custom-control-label text-strong text-muted" for="existingUserToggler">Existing Member</label>
														</div>
														<div class="custom-control custom-radio custom-control-inline my-1 mr-0">
															<input type="radio" class="custom-control-input user-existence-checker" id="newUserToggler" name="member_type" value="new">
															<label class="custom-control-label text-strong text-muted" for="newUserToggler">New Member</label>
														</div>
													</div>
													<div class="user-existence-togglable" id="existingUser">
														<div class="user-form mb-4">
															<div class="form-group row">
																<label class="col-lg-3">Email Address <span class="text-danger">*</span>
																</label>
																<div class="col-lg-9">
																	<input type="email" name="email" value class="form-control" placeholder="Email Address">
																</div>
															</div>
															<div class="form-group row">
																<label class="col-lg-3">Password <span class="text-danger">*</span>
																</label>
																<div class="col-lg-9">
																	<input type="password" name="password" class="form-control" placeholder="Password" autocomplete="new-password">
																</div>
															</div>
														</div>
													</div>
													<div class="user-existence-togglable" id="newUser">
														<div class="mb-4">
															<h6> Account Information </h6>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 d-lg-down-none">I am <span class="text-danger">*</span>
															</label>
															<div class="col-lg-9">
																<div class="auth-input-group">
																	<div class="form-check-inline">
																		<label class="form-check-label">
																			<input type="radio" name="business_type" value="2" class="form-check-input "> Seller </label>
																	</div>
																	<div class="form-check-inline">
																		<label class="form-check-label">
																			<input type="radio" name="business_type" value="1" class="form-check-input"> Buyer </label>
																	</div>
																</div>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 d-lg-down-none" for="company">Company Name <span class="text-danger">*</span>
															</label>
															<div class="col-lg-9">
																<input type="text" name="company" id="company" value class="form-control" placeholder="Company Name">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 d-lg-down-none" for="country">Country <span class="text-danger">*</span>
															</label>
															<div class="col-lg-9">
																<select name="country_id" id="country" class="form-control">
																	<option value>-- Select Country --</option>
																	<?php foreach ($countylist as $val) { ?>
																		<option value="<?= $val['id']; ?>"><?= $val['country_name']; ?></option>
																	<?php } ?>
																</select>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 d-lg-down-none">Contact Person <span class="text-danger">*</span>
															</label>
															<div class="col-lg-9">
																<div class="d-flex">
																	<div class="mr-3">
																		<select name="contact_person_name_title" id="contact_person_name_title" class="form-control mw-100px">
																			<option value="Mr." selected> Mr. </option>
																			<option value="Ms."> Ms. </option>
																		</select>
																	</div>
																	<div class="w-100">
																		<input type="text" name="name" value class="form-control" placeholder="Your Name">
																	</div>
																</div>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 d-lg-down-none">Email <span class="text-danger">*</span>
															</label>
															<div class="col-lg-9">
																<input type="email" name="registration_email" value class="form-control" placeholder="Email Address">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 d-lg-down-none">Phone <span class="text-danger">*</span>
															</label>
															<div class="col-lg-9">
																<div class="d-flex">
																	<div class="mr-3">
																		<input type="text" name="phone_code" value id="phone_code" class="form-control mw-50px" readonly>
																	</div>
																	<div class="w-100">
																		<input type="text" name="phone" id="phone" value class="form-control prevent-first-zero numeric-validation" aria-errormessage="Phone Number" placeholder="Phone Number">
																		<span class="phone-error"></span>
																	</div>
																</div>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 d-lg-down-none" for="registration_password">Password <span class="text-danger">*</span>
															</label>
															<div class="col-lg-9">
																<input type="password" name="registration_password" id="registration_password" value class="form-control" placeholder="Password" autocomplete="new-password">
															</div>
														</div>
														<div class="form-group row">
															<div class="col-lg-9 offset-lg-3">
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" data-toggle="submit" class="custom-control-input" id="agreeBusinessListingTerms" name="agreeBusinessListingTerms" checked required>
																	<label class="custom-control-label text-muted text-15" for="agreeBusinessListingTerms"> I Agree to Business Listing
																		<a href="#" target="_blank" class="text-business-tertiary">Terms & General Agreement</a>
																	</label>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="text-center">
													<button type="submit" class="btn btn-info px-5 btn-md-down-small">
														<i class="fa fa-envelope-o mr-2"></i> Send Message
													</button>
												</div>
											</div>
										</div>
									</div>
							<?= form_close(); ?>
								<script>
									document.getElementById('inquiry-form').addEventListener('submit', function(event) {
										event.preventDefault();
										<?php if (empty($this->session->userdata('company_id'))) : ?>
											window.location.href = '<?= site_url('login'); ?>';
										<?php else : ?>
											this.submit();
										<?php endif; ?>
									});
								</script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="container">
			<h2 class="title text-center mb-4">Related Products</h2><!-- End .title text-center -->
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
				//	echo '<pre>';print_r($relatedproduct);exit;
				foreach ($relatedproduct as $key => $val) { ?>
					<div class="product product-7 text-center" style="width: 300.5px; height: 455.38px;">
						<figure class="product-media">
							<a href="<?= site_url(('details/') . $val['pslag']); ?>">

								<?php if (!empty($val['product_image'])) { ?>
									<img src="https://b2bitem.com/upload/product/<?= $val['product_image']; ?>" alt="<?= $val['product_name']; ?>" title="<?= $val['product_name']; ?>" class="product-image" style="height: 220.38px;" decoding="async" loading="lazy">
								<?php } ?>
							</a>

							<div class="product-action-vertical">
								<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
								<a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
							</div><!-- End .product-action-vertical -->

							<div class="product-action">
								<a href="#" class="btn-product btn-cart"><span>contact supplier</span></a>
							</div><!-- End .product-action -->
						</figure><!-- End .product-media -->

						<div class="product-body">
							<div class="product-cat" style="color: red;">
								<a href="<?= site_url('category/index/' . $val['link_prefix']); ?>"><?= $val['category_name']; ?></a> /
								<a href="#"><?= $val['sub_category_name']; ?></a>
							</div><!-- End .product-cat -->
							<h3 class="product-title"><a href="<?= site_url(('details/') . $val['pslag']); ?>" title="<?= $val['product_name']; ?>"><?= $val['product_name']; ?></a></h3><!-- End .product-title -->
							<div class="product-title country-info-container justify-content-center mb-1">
								<?php if (!empty($val['flag'])) { ?>
									<span class="mr-1 mt-n05">
										<img src="https://b2bitem.com/upload/country/16_16/<?= $val['flag']; ?>" alt="<?= $val['country_name']; ?>">
									</span>
								<?php } ?>
								<a href="<?= site_url('company/index/' . $val['com_slag']); ?>" class="text-13 text-strong text-muted"><?= $val['country_name']; ?></a>
							</div>
							<div class="product-price">
								<?= $val['price']; ?> / <?= $val['unit']; ?>
							</div><!-- End .product-price -->
							<div class="ratings-container">
								<span class="ratings-text" style="color: #333;">( MOQ: <?= $val['min_order_qty']; ?> <?= $val['unit']; ?>)</span>
							</div><!-- End .rating-container -->
						</div><!-- End .product-body -->
					</div><!-- End .product -->
				<?php } ?>

			</div><!-- End .owl-carousel -->
		</div><!-- End .container -->
	</div><!-- End .page-content -->
</main><!-- End .main -->

<?php
require_once(APPPATH . "views/common/footer_1.php");
?>

<script src="<?= base_url(); ?>assets/js/fileinput.min.js"></script>
<script src="<?= base_url(); ?>assets/js/multiple-file.js"></script>

<script>
	if ($('input[data-has-img="true"]').is(':checked')) {
		$('.product-has-img').show();
	} else {
		$('.product-has-img').hide();
	}
	$('input[type="radio"]').on('change', function() {
		let checkHasImg = $(this).attr('data-has-img');
		if ($('input[data-has-img="true"]').is(':checked')) {
			$('.product-has-img').show();
		} else {
			$('.product-has-img').hide();
		}
	});
	$("#fileUpload").fileinput({
		theme: "fa",
		uploadUrl: "/file-upload-batch/2",
		deleteUrl: "/images/file-delete",
		hideThumbnailContent: false,
		maxFileSize: 1000,
		maxFileCount: 5,
		browseClass: "btn file-input-btn",
		showCaption: false,
		showRemove: false,
		showUpload: false,
		overwriteInitial: false,
		initialPreview: [],
	});
	$(document).on('click', '.file-preview-thumbnails', function() {
		$('#fileUpload').trigger('click');
	});
	$('.file-drop-zone-title').html('Upload File');
	$(document).on('click', '.file-drop-zone-title', function() {
		$('#fileUpload').trigger('click');
	});
	$(document).on('click', '.file-preview-frame', function() {
		$(this).stopPropagation();
	});
	$('.add-more-specification').on('click', function(e) {
		e.preventDefault();
		let target = $('#moreSpecification');
		$(target).append(`
            <div class="specification-item form-item-removable removable-item mb-4">
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="attribute[]" class="form-control" placeholder="Attribute E.G: Color">
                    </div>
                    <div class="col-6">
                        <input type="text" name="value[]" class="form-control" placeholder="Attribute E.G: Red">
                    </div>
                </div>
                <a href="#" class="form-item-remover remove-item"><span class="text">&times</span></a>
            </div>
            `)
	});
	if ($('#newUserToggler').is(':checked')) {
		$('#existingUser').removeClass('show');
		$('#newUser').addClass('show');
	} else if ($('#existingUserToggler').is(':checked')) {
		$('#newUser').removeClass('show');
		$('#existingUser').addClass('show');
	}
	$('input[type="radio"].user-existence-checker').on('click', function() {
		if ($('#newUserToggler').is(':checked')) {
			$('#existingUser').removeClass('show');
			$('#newUser').addClass('show');
		} else if ($('#existingUserToggler').is(':checked')) {
			$('#newUser').removeClass('show');
			$('#existingUser').addClass('show');
		}
	});
	var allowImageExtension = [".jpg", ".jpeg", ".bmp", ".gif", ".png", ".webp", ".svg"];
	let duplicateCheckArray = [];
	$(document).ready(function() {
		if (window.File && window.FileList && window.FileReader) {
			$(".multiple-file-upload").on("change", function(e) {
				var uploadItemLength = $(this).parents('.uploaded-field').find('.upload-item').length;
				let thisAfterList = $(this).parents('.uploaded-field').find('.upload-file-list');
				let files = this.files;
				for (let i = 0; i < files.length; i++) {
					let getExtension = '.' + files[i].name.split('.').pop();
					let setExtension = getExtension.toLowerCase();
					if (allowImageExtension.indexOf(setExtension) > -1) {
						if (duplicateCheckArray.indexOf(files[i].name) > -1) {
							alert(files[i].name + ' already selected.');
						} else {
							if (files[i].size <= 2000000) {
								let dt = new DataTransfer();
								let f = files[i];
								console.log(f);
								dt.items.add(new File([f.slice(0, f.size, f.type)], f.name));
								$(this).parents('.uploaded-field').find('.upload-file-list').append(`
                                    <li class="upload-item box-70 mb-3 mr-3 border rounded">
                                        <img class="uploaded-img" src="" alt='File'/>
                                        <input type="file" name="images[]" class="d-none attach-file-value" id="attachFile` + i + `">
                                        <button type='button' class="box-20 rounded-circle remove-uploaded"><span class='text'>&times</span></button>
                                    </li>
                                `);
								let fileReader = new FileReader();
								fileReader.onload = (function(j) {
									let file = j.target;
									$("#attachFile" + i).after("<img class=\"uploaded-img\" src=\"" + j.target.result + "\" alt='File'/>").removeAttr('id');
									$("#attachFile" + i).removeAttr('id')
								});
								fileReader.readAsDataURL(f);
								var back = document.getElementById("attachFile" + i);
								back.files = dt.files;
							} else {
								alert('Warning! Large file not acceptable and will automatically remove.\n\nEvery file size maximum 2MB!');
							}
						}
						duplicateCheckArray.push(files[i].name);
					} else {
						alert(setExtension + ' ' + ' File type not allow');
					}
				}
				$(this).val('');
			});
		} else {
			alert("Your browser doesn't support to File API")
		}
	});
	$(document).on('click', '.remove-uploaded', function() {
		$(this).parent(".upload-item").remove();
	});
</script>