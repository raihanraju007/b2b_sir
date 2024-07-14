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
	<meta name="description" content="BEST B2B Marketplace" />
	<meta name="author" content="FINSOFT" />
	<!-- Favicon -->
	<!-- <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="assets/images/icons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="assets/images/icons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/images/icons/favicon-16x16.png"
    />
    <link rel="manifest" href="assets/images/icons/site.html" />
    <link
      rel="mask-icon"
      href="assets/images/icons/safari-pinned-tab.svg"
      color="#666666"
    />
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
	<link rel="stylesheet" href="<?= base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<!-- <link rel="stylesheet" href="assets/css/main.css" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/frontend/css/b2b.css"> -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/frontend/css/icofont/icofont.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/frontend/css/googlefonts.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/frontend/css/font-awesome-4.7.0/css/font-awesome.min.css">

</head>

<body>
	<div class="page-wrapper">
		<?php
		require_once(APPPATH . "views/common/header_3.php");
		?>

		<main class="main">
			<?php echo $content_for_layout; ?>
		</main>
		<!-- End .main -->

		<?php
		require_once(APPPATH . "views/common/footer_1.php");
		?>
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
								<a href="index.html">Home</a>

								<ul>
									<li><a href="index-1.html">01 - furniture store</a></li>
									<li><a href="index-2.html">02 - furniture store</a></li>
									<li><a href="index-3.html">03 - electronic store</a></li>
									<li><a href="index-4.html">04 - electronic store</a></li>
									<li><a href="index-5.html">05 - fashion store</a></li>
									<li><a href="index-6.html">06 - fashion store</a></li>
									<li><a href="index-7.html">07 - fashion store</a></li>
									<li><a href="index-8.html">08 - fashion store</a></li>
									<li><a href="index-9.html">09 - fashion store</a></li>
									<li><a href="index-10.html">10 - shoes store</a></li>
									<li>
										<a href="index-11.html">11 - furniture simple store</a>
									</li>
									<li>
										<a href="index-12.html">12 - fashion simple store</a>
									</li>
									<li><a href="index-13.html">13 - market</a></li>
									<li><a href="index-14.html">14 - market fullwidth</a></li>
									<li><a href="index-15.html">15 - lookbook 1</a></li>
									<li><a href="index-16.html">16 - lookbook 2</a></li>
									<li><a href="index-17.html">17 - fashion store</a></li>
									<li>
										<a href="index-18.html">18 - fashion store (with sidebar)</a>
									</li>
									<li><a href="index-19.html">19 - games store</a></li>
									<li><a href="index-20.html">20 - book store</a></li>
									<li><a href="index-21.html">21 - sport store</a></li>
									<li><a href="index-22.html">22 - tools store</a></li>
									<li>
										<a href="index-23.html">23 - fashion left navigation store</a>
									</li>
									<li>
										<a href="index-24.html">24 - extreme sport store</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Shop</a>
								<ul>
									<li><a href="category-list.html">Shop List</a></li>
									<li>
										<a href="category-2cols.html">Shop Grid 2 Columns</a>
									</li>
									<li><a href="#">Shop Grid 3 Columns</a></li>
									<li>
										<a href="category-4cols.html">Shop Grid 4 Columns</a>
									</li>
									<li>
										<a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a>
									</li>
									<li>
										<a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a>
									</li>
									<li>
										<a href="product-category-boxed.html">Product Category Boxed</a>
									</li>
									<li>
										<a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a>
									</li>
									<li><a href="cart.html">Cart</a></li>
									<li><a href="checkout.html">Checkout</a></li>
									<li><a href="wishlist.html">Wishlist</a></li>
									<li><a href="#">Lookbook</a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="sf-with-ul">Product</a>
								<ul>
									<li><a href="#">Default</a></li>
									<li><a href="product-centered.html">Centered</a></li>
									<li>
										<a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a>
									</li>
									<li><a href="product-gallery.html">Gallery</a></li>
									<li><a href="product-sticky.html">Sticky Info</a></li>
									<li>
										<a href="product-sidebar.html">Boxed With Sidebar</a>
									</li>
									<li><a href="product-fullwidth.html">Full Width</a></li>
									<li>
										<a href="product-masonry.html">Masonry Sticky Info</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Pages</a>
								<ul>
									<li>
										<a href="about.html">About</a>

										<ul>
											<li><a href="about.html">About 01</a></li>
											<li><a href="about-2.html">About 02</a></li>
										</ul>
									</li>
									<li>
										<a href="contact.html">Contact</a>

										<ul>
											<li><a href="contact.html">Contact 01</a></li>
											<li><a href="contact-2.html">Contact 02</a></li>
										</ul>
									</li>
									<li><a href="login.html">Login</a></li>
									<li><a href="faq.html">FAQs</a></li>
									<li><a href="404.html">Error 404</a></li>
									<li><a href="coming-soon.html">Coming Soon</a></li>
								</ul>
							</li>
							<li>
								<a href="blog.html">Blog</a>

								<ul>
									<li><a href="blog.html">Classic</a></li>
									<li><a href="blog-listing.html">Listing</a></li>
									<li>
										<a href="#">Grid</a>
										<ul>
											<li>
												<a href="blog-grid-2cols.html">Grid 2 columns</a>
											</li>
											<li>
												<a href="blog-grid-3cols.html">Grid 3 columns</a>
											</li>
											<li>
												<a href="blog-grid-4cols.html">Grid 4 columns</a>
											</li>
											<li>
												<a href="blog-grid-sidebar.html">Grid sidebar</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">Masonry</a>
										<ul>
											<li>
												<a href="blog-masonry-2cols.html">Masonry 2 columns</a>
											</li>
											<li>
												<a href="blog-masonry-3cols.html">Masonry 3 columns</a>
											</li>
											<li>
												<a href="blog-masonry-4cols.html">Masonry 4 columns</a>
											</li>
											<li>
												<a href="blog-masonry-sidebar.html">Masonry sidebar</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">Mask</a>
										<ul>
											<li>
												<a href="blog-mask-grid.html">Blog mask grid</a>
											</li>
											<li>
												<a href="blog-mask-masonry.html">Blog mask masonry</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">Single Post</a>
										<ul>
											<li><a href="single.html">Default with sidebar</a></li>
											<li>
												<a href="single-fullwidth.html">Fullwidth no sidebar</a>
											</li>
											<li>
												<a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="elements-list.html">Elements</a>
								<ul>
									<li><a href="elements-products.html">Products</a></li>
									<li><a href="elements-typography.html">Typography</a></li>
									<li><a href="elements-titles.html">Titles</a></li>
									<li><a href="elements-banners.html">Banners</a></li>
									<li>
										<a href="elements-product-#">Product Category</a>
									</li>
									<li>
										<a href="elements-video-banners.html">Video Banners</a>
									</li>
									<li><a href="elements-buttons.html">Buttons</a></li>
									<li><a href="elements-accordions.html">Accordions</a></li>
									<li><a href="elements-tabs.html">Tabs</a></li>
									<li>
										<a href="elements-testimonials.html">Testimonials</a>
									</li>
									<li><a href="elements-blog-posts.html">Blog Posts</a></li>
									<li><a href="elements-portfolio.html">Portfolio</a></li>
									<li><a href="elements-cta.html">Call to Action</a></li>
									<li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<!-- End .mobile-nav -->
				</div>
				<!-- .End .tab-pane -->
				<div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
					<nav class="mobile-cats-nav">
						<ul class="mobile-cats-menu">
							<li><a class="mobile-cats-lead" href="#">Daily offers</a></li>
							<li><a class="mobile-cats-lead" href="#">Gift Ideas</a></li>
							<li><a href="#">Beds</a></li>
							<li><a href="#">Lighting</a></li>
							<li><a href="#">Sofas & Sleeper sofas</a></li>
							<li><a href="#">Storage</a></li>
							<li><a href="#">Armchairs & Chaises</a></li>
							<li><a href="#">Decoration </a></li>
							<li><a href="#">Kitchen Cabinets</a></li>
							<li><a href="#">Coffee & Tables</a></li>
							<li><a href="#">Outdoor Furniture </a></li>
						</ul>
						<!-- End .mobile-cats-menu -->
					</nav>
					<!-- End .mobile-cats-nav -->
				</div>
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
	<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
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
</body>

</html>