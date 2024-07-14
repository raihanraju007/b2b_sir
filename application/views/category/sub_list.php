<?php
require_once(APPPATH . "views/common/header_2.php");
?>

<main class="main">
	<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
		<div class="container-fluid d-flex align-items-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="https://b2bitem.com">B2bitem</a></li> >
				<li class="breadcrumb-item"><a href="https://b2bitem.com/product">Products</a></li> >
				<li class="breadcrumb-item">
					<a href="<?= site_url('category/' . $sub_cat_info['link_prefix']); ?>"> <?= $sub_cat_info['category_name']; ?> </a> >
				</li>
				<li class="breadcrumb-item active" aria-current="page"> <?= $sub_cat_info['sub_category_name']; ?> </li>
			</ol>

		</div><!-- End .container-fluid -->
	</nav><!-- End .breadcrumb-nav -->

	<div class="page-content">

		<section class="container custom-container mb-4">
			<div class="bg-lg-white border-lg border-lg-left-8 p-lg-4 px-xl-5">
				<div class="row">
					<div class="col-lg-6 mb-4  mb-lg-0">
						<div class="bg-white p-3 p-lg-0 border-lg-down mw-border-left-5 border-lg-right pr-xl-5 h-100 d-flex flex-column">
							<h1 class="text-theme mb-lg-5 text-strong">List of <?= $sub_cat_info['sub_category_name']; ?> Products</h1>
						</div>
					</div>
					<div class="col-lg-6 text-lg-right">
						<div class="bg-white p-3 p-lg-0 border-lg-down">
							<h3 class="mb-2 text-strong">List Your Products:</h3>
							<div class="row">
								<div class="col-lg-12">
									<ul class="list-unstyled">
										<li class="text-lg-18">
											<span class="mr-2">
												<i class="icofont-check text-business-secondary"></i>
											</span> Expand your reach <span class="d-md-down-none">- both locally and globally</span>.
										</li>
										<li class="text-lg-18">
											<span class="mr-2">
												<i class="icofont-check text-business-secondary"></i>
											</span> Increase visibility for your products <span class="d-md-down-none">- attract more buyers</span>
										</li>
										<li class="text-lg-18">
											<span class="mr-2">
												<i class="icofont-check text-business-secondary"></i>
											</span> Be discovered by new buyers <span class="d-md-down-none">- generate more sales</span>
										</li>
									</ul>
									<div>
										<a href="#" class="btn btn-dark bg-theme">List Your Products - Free</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="mb-4">
			<div class="container custom-container">
				<div class="mb-5">
					<div class="row">
						<div class="col-lg-3">
							<aside class="aside-on-responsive" id="asideNav">
								<div class="aside-content">
									<div class="bg-white border mb-4">
										<div class="border-bottom">
											<span class="d-flex py-2 px-3 text-20">
												<span class="mr-2">
													<i class="fa fa-pagelines" aria-hidden="true"></i>
												</span> <?= $sub_cat_info['category_name']; ?> </span>
										</div>
										<div class="px-3">
											<ul class="aside-category-list-v1">
												<?php
												$sub_cat = $this->sellermodel->get_sub_cat_list($sub_cat_info['cat_id']);

												foreach ($sub_cat as $key => $v) {
													$subslag = $v['sub_link_prefix'];
												?>
													<li class="aside-category-item-v1 ">
														<a href="<?= site_url('subcategory/' . $subslag); ?>" class="aside-category-link-v1 align-items-center ">
															<span class="mr-2 mt-n1">
																<i class="fa fa-circle text-5 link-icon"></i>
															</span> <?= $v['sub_category_name']; ?> </a>
													</li>
												<?php } ?>
											</ul>
										</div>
									</div>

									<div class="mb-4">
										<div class="mb-3">
											<a href="#" class="btn btn-b2bitem-theme btn-block">All Product Categories</a>
										</div>
										<div>
											<a href="#" class="btn btn-b2bitem-secondary btn-block">Display Product</a>
										</div>
									</div>
									<div class="bg-white border mb-4">
										<div class="border-bottom">
											<span class="d-flex py-2 px-3 text-20">Products by Name</span>
										</div>
										<div class="p-3">
											<ul class="d-flex flex-wrap list-unstyled m-n1 company-list-letter">
												<li class="p-1 ">
													<a href="#" class="box-25 btn btn-char text-14">
														<span class="text">A</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</aside>
						</div>

						<div class="col-lg-9">
							<div>
								<div class="mb-3">
									<h2 class="title-with-square-box"><?= $sub_cat_info['sub_category_name']; ?> - List</h2>
								</div>
								<ul class="list-unstyled row mb-4">

									<?php foreach ($sub_product_list as $key => $val) { ?>

										<li class="col-sm-6 col-lg-4 col-xl-3 mb-3 mb-lg-4">
											<div class="product-card-th">
												<div class="mb-1">
													<a href="<?= site_url(('details/') . $val['pslag']); ?>" class="text-ellipsis-clamp-2" title="Weiwei9zp-3.8t Agricultural Grass Straw Crusher Output 3t/h"> <?= $val['product_name']; ?> </a>
												</div>
												<div class="product-card-th-grid">
													<div class="product-card-th-grid-gallery position-relative">
														<a href="<?= site_url(('details/') . $val['pslag']); ?>" class="product-img-box">
															<img src="https://b2bitem.com/upload/product/<?= $val['product_image']; ?>" alt="<?= $v['product_image']; ?>" title="<?= $val['product_name']; ?>" class="product-img" decoding="async" loading="lazy">
														</a>
													</div>
													<div class="product-card-th-grid-content">
														<div class="text-14 my-2">Price: USD <?= $val['price']; ?> / <?= $val['unit']; ?></div>
														<div class="text-14 mb-2 d-sm-none">MOQ: 1 Pieces</div>
														<div class="mb-2">
															<div class="d-flex align-items-center">
																<?php if (!empty($val['flag'])) { ?>
																	<span class="mr-1 mt-n05">
																		<img src="https://b2bitem.com/upload/country/16_16/<?= $val['flag']; ?>" alt="<?= $v['country_name']; ?>">
																	</span>
																<?php } ?>
																<a href="<?= site_url($val['slag']); ?>" class="text-overflow-ellipsis text-14"> <?= $val['company_name']; ?></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>

									<?php } ?>

								</ul>

								<div class="p-3 bg-white border border-left-5px border-left-business-secondary my-4">
									<p class="m-0 text-16 text-lg-20">
										<a href="#" class="text-black">Looking for Agriculture Products Processing suppliers? Start by <span class="text-custom-link text-strong">Clicking Here!</span>
										</a>
									</p>
								</div>
								<div class="p-3 bg-white border border-left-5px border-left-business-secondary my-4">
									<p class="mb-1 text-16 text-lg-20">
										<a href="#" class="text-black">Can’t find what you are looking for? <span class="text-custom-link text-strong">Post your Buy Requirements - Free</span>
										</a>
									</p>
									<p class="mb-0 text-16 text-lg-20">
										<a href="#" class="text-black">Do you have Agriculture Products Processing or other products of your own? <span class="text-custom-link text-strong">List Your Product - Free</span>
										</a>
									</p>
								</div>

								<div class="biz-box bg-white py-3">
									<div class="border-bottom pb-2 mb-3">
										<h3 class="m-0">Suppliers Info - <?= $sub_cat_info['category_name']; ?> </h3>
									</div>
									<ul class="list-unstyled row my-n1">
										<?php foreach ($product_cat as $key => $val) {
														$slag = $val['link_prefix']; 
													?>
											<?php foreach ($sub_cat as $subkey => $val) {
												$subslag = $val['sub_link_prefix'];

												$subcat = $val['sub_category_name'];
											if ($key == 1){
												    break;
												}
											?>

												<li class="col-sm col-lg-4 py-1">
													<!-- <a href="<?= site_url('subcategory/' . $val['sub_link_prefix']); ?>" class="text-custom-link"> <?= $val['sub_category_name'] ?></a> -->
													<!--<a href="<?= site_url('business/' . $slag . '/' . $subslag); ?>" class="text-custom-link"> <?= $val['sub_category_name'] ?></a>-->
														<a href="<?= site_url('subcategory/' . $val['sub_link_prefix']); ?>" class="text-custom-link"> <?= $val['sub_category_name'] ?></a>
												</li>

											<?php } ?>
										<?php 
								
											if ($key == 1){
												    break;
												}
										} ?>

									</ul>
								</div>

							</div>
						</div>

					</div>


				</div>
				<div class="theme-block mb-4">
					<div class="row">
						<div class="col-lg-6 mb-3 mb-lg-0">
							<div class="py-lg-4">
								<div class="text-business-secondary text-center">
									<i class="icofont-penalty-card fa-4x"></i>
								</div>
								<h4 class="text-thin text-center mt-4 mb-3">TELL US WHAT YOU NEED</h4>
								<h4 class="text-md-down-20 text-normal text-theme line-height-150 text-center"> Post your buy requirement & get quotes from top manufacturers & suppliers.</h4>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="py-3">
								<form method="post" action="#">
									<input type="hidden" name="_token" value="MVX6BTCWf4FLb058MmeaKdEEOTIlkfT2UxWQq2zO">
									<div class="form-group">
										<label class="text-lg-18 d-none text-muted">Product Name <span class="text-danger">*</span>
										</label>
										<input type="text" name="title" id="title" value="" class="form-control text-md-down-14 rounded-0" placeholder="Enter product name ...">
									</div>
									<div class="form-group">
										<label class="text-lg-18 d-none text-muted">Product Category <span class="text-danger">*</span>
										</label>
										<div>
											<select name="cat_id" id="cat_id" class="form-control text-md-down-14 rounded-0">
												<option value="">-- Select Product Category --</option>
												<?php foreach ($product_cat as $key => $val) {
													$slag = $val['link_prefix']; 
												?>
													<option value="<?= $val['id']; ?>"> <?= $val['category_name']; ?> </option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="text-lg-18 d-none text-muted">Describe Your Buying Requirement</label>
										<textarea rows="4" name="details" id="details" class="form-control text-md-down-14 form-control-md-down-large rounded-0" placeholder="Describe your buying requirement including specifications, sizes etc"></textarea>
									</div>
									<div class="text-center mt-3 pt-lg-3">
										<button type="button" class="btn btn-b2bitem-secondary btn-md-down-small rounded-0 px-4">Post Buy Requirement</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="mb-4">
					<div class="bg-white biz-box with-footer-content">
						<div class="biz-box-title">
							<h3 class="text-lg-32">Category Wise Product List</h3>
						</div>
						<div class="biz-box-content">
							<div class="category-list">
								<ul class="list-unstyled row mb-0">
									<?php foreach ($product_cat as $key => $val) { ?>
										<li class="col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-3">
											<a href="<?= site_url('category/' . $val['link_prefix']); ?>" class="d-flex align-items-center">
												<span class="mr-2">
													<span class="box-20">
														<i class="fa fa-pagelines text-18 text-link" aria-hidden="true"></i>
													</span>
												</span>
												<span class="text-15 text-medium text-overflow-ellipsis"> <?= $val['category_name']; ?> </span>
											</a>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="mb-4">
					<div class="bg-white d-md-flex justify-content-between px-3 py-3 py-md-0 mb-2">
						<h3 class="text-center text-md-left text-20 text-lg-24 mt-2 mb-3 mb-md-2">List of <?= $sub_cat_info['sub_category_name']; ?> at Wholesale B2B Prices</h3>
						<div class="my-2 text-center">
							<a href="#" class="btn btn-b2bitem-primary btn-sm px-4">List Your Product - FREE</a>
						</div>
					</div>
					<div class="theme-block"> <?= $sub_cat_info['description']; ?>
					</div>
				</div>




			</div>
		</section>

	</div><!-- End .page-content -->
</main><!-- End .main -->

<?php
require_once(APPPATH . "views/common/footer_1.php");
?>