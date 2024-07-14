<?php
require_once(APPPATH . "views/common/header_2.php");
?>

<main class="main">
	<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
		<div class="container-fluid d-flex align-items-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="https://b2bitem.com">B2bitem</a></li> >
				<li class="breadcrumb-item"><a href="#">b2b-Leads</a></li>
			</ol>

		</div><!-- End .container-fluid -->
	</nav><!-- End .breadcrumb-nav -->

	<div class="page-content">
		<section class="mb-4">
			<div class="container custom-container">
				<div class="theme-block mx-auto mb-4">
					<form method="post" action="#">
						<input type="hidden" name="_token" value="oLoUbSPGcL5K2z3hiPVUwEd4Uq4fiqpXTL3CKuA4">
						<div class="row my-n2">
							<div class="col-lg-9 mx-auto py-2">
								<div class="d-lg-flex align-items-center">
									<div class="d-flex align-items-center mb-3 mb-lg-0 mr-md-3 mr-lg-4">
										<div class="text-business-secondary text-center mr-3">
											<i class="icofont-penalty-card fa-3x"></i>
										</div>
										<h5 class="mb-0">Post Your Buy Requirement</h5>
									</div>
									<div class="flex-grow-1">
										<div class="d-md-flex" style="height: 38px;">
											<div class="flex-grow-1 mr-md-3 mb-2 mb-md-0">
												<input type="text" name="title" id="title" value class="form-control no-focus" placeholder="Enter product name">
											</div>
											<div>
												<button type="submit" class="btn btn-b2bmap-primary btn-block btn-md-down-small px-4">Submit</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="mb-4">
					<div class="row">
						<div class="col-lg-3">
							<aside class="aside-on-responsive">
								<div class="aside-content">
									<div class="bg-white border mb-4">
										<div class="border-bottom px-3 py-2">
											<h4 class="text-strong m-0">Buy Leads</h4>
										</div>
										<div>
											<ul class="navbar-nav aside-category-list">
												<?php foreach ($product_cat as $val) { ?>
													<li class="nav-item aside-category-item">
														<a href="<?= site_url('cat_wise_buyer/' . $val['link_prefix']); ?>" class="aside-category-link"><?= $val['category_name']; ?> </a>
													</li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</div>
							</aside>
						</div>
						<div class="col-lg-9">
							<div class="mb-4 mb-lg-5">
								<div class="mb-3">
									<h2 class="title-with-square-box">Latest B2B Leads & Buy Requirements</h2>
								</div>
								<ul class="list-unstyled mb-0">

									<?php foreach ($list as $val) { ?>

										<li class="mb-4">
											<div class="theme-block">
												<div class="row">
													<div class="col-md-6 col-xl-9 border-md-right mb-sm-4 mb-lg-0">
														<div class="pr-md-2">
															<h3>
																<a href="<?= site_url('website/buysell/' . $val['offer_url']); ?>" class="buy-offer-list-view-title">Buy Requirement: <?= $val['ad_title']; ?></a>
															</h3>
															<table class="table table-sm table-borderless w-auto mb-0">
																<tbody>
																	<tr>
																		<td class="pl-0">Buy Quantity:</td>
																		<td><?= $val['qty']; ?> <?= $val['unit']; ?></td>
																	</tr>
																</tbody>
															</table>
															<div class="mb-3 mb-md-0 details-short-text">
																<?= substr($val['req_details'], 0, 75); ?>....
															</div>
														</div>
													</div>
													<div class="col-md-6 col-xl-3 align-self-center">
														<div class="pl-md-2 text-center">
															<a href="<?= site_url('buysell/' . $val['offer_url']); ?>" class="btn btn-b2bmap-primary btn-sm w-md-down-100 px-4">Contact Buyer</a>
														</div>
													</div>
												</div>
											</div>
										</li>
									<?php } ?>
								</ul>
							</div>

							<div class="mb-4">
								<div class="card common-shadow-box">
									<div class="card-header-2">
										<h3 class="text-center text-md-down-20 m-0">Save Time! Get Quick Response</h3>
									</div>
									<div class="card-body p-0">
										<div class="row no-gutters">
											<div class="col-lg-4 d-lg-down-none">
												<div class="h-100 bg-business-secondary rounded-left-bottom p-3">
													<h3 class="mb-3 text-white text-md-down-18 text-md-center">Get Quotation Quickly</h3>
													<div class="border-bottom border-white w-100px mb-lg-4 mx-md-auto"></div>
													<ul class="list-unstyled">
														<li class="position-relative pb-4">
															<div class="d-flex align-items-center  pb-3">
																<div class="before-vertical-dashed mr-3">
																	<span class="step-vertical-icon box-40 rounded-circle bg-white">
																		<i class="fa fa-file-text-o text-muted"></i>
																	</span>
																</div>
																<span class="text-18 text-white">Submit RFQ</span>
															</div>
														</li>
														<li class="d-flex align-items-center position-relative pb-4">
															<div class="d-flex align-items-center pb-3">
																<div class="before-vertical-dashed mr-3">
																	<span class="step-vertical-icon box-40 rounded-circle bg-white">
																		<i class="fa fa-exchange text-muted" aria-hidden="true"></i>
																	</span>
																</div>
																<span class="text-18 text-white">Compare Quotes</span>
															</div>
														</li>
														<li class="d-flex align-items-center position-relative pb-4">
															<div class="mr-3">
																<span class="step-vertical-icon box-40 rounded-circle bg-white">
																	<i class="fa fa-handshake-o text-muted" aria-hidden="true"></i>
																</span>
															</div>
															<span class="text-18 text-white">Contact Supplier</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="p-3 p-lg-4">
													<form method="post" action="#">
														<input type="hidden" name="_token" value="oLoUbSPGcL5K2z3hiPVUwEd4Uq4fiqpXTL3CKuA4">
														<div class="form-group">
															<label class="text-lg-20 d-none">Product Name <span class="text-danger">*</span>
															</label>
															<input type="text" name="title" id="title" value class="form-control rounded-0" placeholder="Enter product name...">
														</div>
														<div class="form-group">
															<label class="text-lg-20 d-none">Product Category <span class="text-danger">*</span>
															</label>
															<div>
																<select name="cat_id" id="cat_id" class="form-control rounded-0">
																	<option value>Select Product Category</option>
																	<?php foreach ($product_cat as $val) { ?>
																		<option value="<?= $val['id']; ?>"><?= $val['category_name']; ?></option>
																	<?php } ?>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label class="text-lg-20 d-none">Describe Your Buying Requirement</label>
															<textarea rows="4" name="details" id="details" class="form-control rounded-0" placeholder="Describe your buying requirement including specifications, sizes etc"></textarea>
														</div>
														<div class="text-center mt-4 mb-2 mb-lg-0">
															<button type="submit" class="btn btn-b2bmap-secondary btn-md-down-small rounded-0 px-4">Post Buy Requirement</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="mb-4">
								<div class="theme-block d-md-flex justify-content-between mb-2 py-2 py-xl-1">
									<h3 class="py-2 mb-0 mr-md-2 text-center text-md-left text-md-down-18">Find Quality B2B Leads &amp; Connect Directly with Buyers on B2BMAP</h3>
								</div>
								<div class="theme-block text-justify"> B2BMAP provides an excellent opportunity for suppliers to find high-quality B2B trade leads and buy requirements from potential buyers. By directly connecting with buyers and submitting quotes based on your capabilities and pricing, you can establish long-term business relationships and build trust with potential buyers. <br />
									<br /> B2BMAP is a platform that offers a wide range of B2B trade leads and buy requirements to help you connect with buyers in your industry. With our easy-to-use platform, you can expand your buyer base and increase revenue by exploring new opportunities and markets. <br />
									<br /> Whether you are looking for wholesale B2B leads from importers or want to find quality B2B trade leads and buy requirements in your industry, B2BMAP can help you grow your business network. So start your search today and take your business to the next level by connecting with potential buyers and expanding your business network.
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