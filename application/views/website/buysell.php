<?php
require_once(APPPATH . "views/common/header_2.php");

 $company_id = $this->session->userdata('company_id');
?>

<main class="main">

	<div class="page-content">

		<div class="mb-4">
			<div class="container custom-container">
				<div class="row">
					<div class="col-lg-4 col-xl-3">
						<aside class="aside-on-responsive">
							<div class="aside-content">
								<div class="biz-box bg-white p-0 mb-4">
									<div class="biz-box-title px-3 bg-light mb-0">
										<h5 class="block-text text-strong">Post Buy Requirement</h5>
									</div>
									<div class="biz-box-content p-3">
										<p class="mb-3">Get quick response from worldwide suppliers</p>
										<form method="post" action="#">
											<input type="hidden" name="_token" value="oLoUbSPGcL5K2z3hiPVUwEd4Uq4fiqpXTL3CKuA4">
											<div class="form-group">
												<label class="text-medium text-muted sr-only">Product You Need</label>
												<input type="text" name="title" id="title" value class="form-control" placeholder="Product You Need">
											</div>
											<div class="form-group">
												<label class="text-medium text-muted sr-only">Requirements</label>
												<select name="cat_id" id="cat_id" class="form-control">
													<option value>Select Product Category</option>
													<?php foreach ($product_cat as $key => $val) { ?>
														<option value="<?= $val['id']; ?>"><?= $val['category_name']; ?></option>
													<?php } ?>
												</select>
											</div>
											<div class="form-group">
												<label class="text-medium text-muted sr-only">Details</label>
												<textarea class="form-control no-focus" name="details" id="details" placeholder="Describe your buying requirement ..."></textarea>
											</div>
											<div class="px-md-5 mt-4 mb-3">
												<button type="submit" class="btn btn-b2bmap-primary btn-block">Submit</button>
											</div>
										</form>
									</div>
								</div>
								<div class="bg-white border mb-4">
									<div class="border-bottom px-3 py-2">
										<h4 class="text-strong m-0">Buy Leads</h4>
									</div>
									<div>
										<ul class="navbar-nav aside-category-list">
											<?php foreach ($product_cat as $key => $val) {
												$icon = $val['icon'];
											?>

												<li class="nav-item aside-category-item">
													<a href="<?= site_url('cat_wise_buyer/' . $val['link_prefix']); ?>" class="aside-category-link">
														<i class="<?= $icon; ?> mr-2 link-icon"></i> <?= $val['category_name']; ?> </a>
												</li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>
						</aside>
					</div>
					<div class="col-lg-8 col-xl-9">
						<div class="biz-box bg-white mb-4">
							<div class="biz-box-title d-flex flex-wrap flex-xl-nowrap justify-content-between">
								<h3 class="my-2 my-xl-0 mr-2">
									<?php
									if ($info['category'] == 'sell') {
										echo 'Sell';
									} else {
										echo 'Buy';
									}

									?>


									Requirement: <?= $info['ad_title']; ?></h3>
								<div></div>
							</div>
							<div class="biz-box-content">
								<div class="table-responsive">
									<table class="table table-sm table-borderless text-lg-17 w-auto">
										<tbody>
											<tr>
												<td class="text-deep-muted pl-0 pr-3">Buyer From: </td>
												<td><?= $info['country_name']; ?></td>
											</tr>
											<tr>
												<td class="text-deep-muted pl-0 pr-3">Category: </td>
												<td><?= $info['category_name']; ?></td>
											</tr>
											<tr>
												<td class="text-deep-muted pl-0 pr-3">Product Name: </td>
												<td><?= $info['product_name']; ?></td>
											</tr>
											<tr>
												<td class="text-deep-muted pl-0 pr-3">Quantity:</td>
												<td><?= $info['qty'] . ' ' . $info['unit']; ?></td>
											</tr>
											<tr>
												<td class="text-deep-muted pl-0 pr-3">Packing Terms: </td>
												<td><?= $info['packaging_terms']; ?></td>
											</tr>
											<tr>
												<td class="text-deep-muted pl-0 pr-3">Shipping Terms: </td>
												<td><?= $info['shipping_terms']; ?></td>
											</tr>
											<tr>
												<td class="text-deep-muted pl-0 pr-3">Validity Date: </td>
												<td><?= $info['validity_date']; ?></td>
											</tr>
											<tr>
												<td class="text-deep-muted pl-0 pr-3">Post Date: </td>
												<td><?= $info['date']; ?></td>
											</tr>
											
											
										</tbody>
									</table>
								</div>
								
								<?php if(empty(!$company_id)){ 
								
								    $checkdata = $this->websitemodel->quatation_check($info['bs_id'], $company_id);
								    
								    if($checkdata == 0){
								
								?>
								
								    
    								<div class="text-center text-md-right mb-2">
                                        <a href="<?=site_url('website/quatation/'. $info['bs_id']);?>" class="btn btn-b2bmap-primary btn-sm px-5 px-lg-4">Quatation</a>
                                    </div>
                                    
                                    <?php }else{ ?>
                                    
                                    	<div class="text-center text-md-right mb-2">
                                             <a class="btn btn-b2bmap-primary btn-sm px-5 px-lg-4">Quatation Already Apply</a>
                                        </div>
                                    
                                    <?php } ?>
                                
                                <?php }else{ ?>
                                    	<div class="text-center text-md-right mb-2">
                                            <a id="logincheck" class="btn btn-b2bmap-primary btn-sm px-5 px-lg-4">Quatation</a>
                                        </div>
                                <?php } ?>
                                
							</div>
						</div>
						<div class="card rounded-0 bg-white mb-4">
							<div class="card-header bg-white">
								<h5 class="text-strong text-muted m-0">Requirement Details</h5>
							</div>
							<div class="card-body bg-white">
								<p class="text-lg-17">
									<?= $info['req_details']; ?>
								</p>
								<div class="mt-3"></div>
							</div>
						</div>
						<div class="card rounded-0 bg-white mb-4">
							<div class="card-header bg-white">
								<h5 class="text-strong text-muted m-0"> Contact Information </h5>
							</div>
							<div class="card-body bg-white">
								<div class="table-responsive">
									<table class="table table-borderless text-lg-17 w-auto">
										<tbody>
											<tr>
												<td class="text-deep-muted pl-0">Company Name: </td>
												<td> <span class="text-muted"><?= $info['company_name']; ?></span>
												</td>
											</tr>
											<tr>
												<td class="text-deep-muted pl-0">Contact Person: </td>
												<td> <span class="text-muted"><?= $info['contact_person']; ?></span>
												</td>
											</tr>
											<tr>
												<td class="text-deep-muted pl-0">Contact No: </td>
												<td> <span class="text-muted"><?= $info['mobile']; ?></span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div id="buy-requirement-inquiry"></div>
						<div class="card rounded-0 mb-4 specification">
							<div class="card-header bg-white d-flex justify-content-between">
								<h5 class="text-strong text-muted m-0"> Contact Buyer About This Buy Requirement </h5>
							</div>
							<div class="card-body bg-white">
								<div class="biz-form px-lg-5 py-lg-4">
									<div class="text-center">
										<form action="#" method="post" enctype="multipart/form-data">
											<input type="hidden" name="_token" value="oLoUbSPGcL5K2z3hiPVUwEd4Uq4fiqpXTL3CKuA4">
									</div>
									<input type="hidden" name="inquiry_to" value="buyer">
									<input type="hidden" name="item_type" value="buyoffer">
									<input type="hidden" name="item_id" value="18756">
									<div class="biz-form">
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group d-lg-down-none">
													<!--img src="https://b2bmap.com/public/images/mail.png" alt="Coffee Beans" title="Coffee Beans" class="img-fluid mx-auto d-block w-xl-75" decoding="async" loading="lazy"-->
												</div>
											</div>
											<div class="col-lg-8">
												<div class="form-group">
													<div>
														<input type="text" name="subject" value=" Quotation On : Coffee Beans " class="form-control">
													</div>
												</div>
												<div class="form-group">
													<div>
														<textarea rows="6" name="mail_body" class="form-control" placeholder="Enter quotation details"></textarea>
													</div>
												</div>
												<div class="text-center">
													<a href="#" data-toggle="modal" data-target="#popupLoginFormModal" class="btn btn-info px-5 btn-md-down-small">Submit</a>
												</div>
											</div>
										</div>
									</div>
									<div class="text-center">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div><!-- End .page-content -->
</main><!-- End .main -->

<?php
require_once(APPPATH . "views/common/footer_1.php");
?>

<script>
$(document).ready(function(){
  $("#logincheck").click(function(){
    alert("Please login first.");
  });
});
</script>

