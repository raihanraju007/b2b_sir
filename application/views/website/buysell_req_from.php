<?php

 $company_id = $this->session->userdata('company_id');



require_once(APPPATH . "views/common/header_2.php");
?>

<main class="main">
	<div class="page-content">
		<section class="pb-5">
			<div class="container custom-container">
				<div class="w-lg-90 mx-auto">
					<div class="row my-n2">
						<div class="col-lg-8 order-lg-1 py-2">
							<div class="border-top border-3px border-info rounded overflow-hidden">
								<div class="theme-block px-lg-5 py-4" id="postBuyRequirementForm">
									<div class="border-bottom mb-3 mb-lg-4">
										<h1 class="text-24 text-lg-34">Request for Quotation</h1>
										<p class="text-muted text-capitalize">Post your buy requirements and receive quotes from top suppliers.</p>
									</div>
									<form method="post" action="<?= site_url('website/savebuyselldata'); ?>" enctype="multipart/form-data">
                                        
                                        <?php if ($this->session->flashdata('error')) : ?>
										<div class="alert alert-error alert-dismissible" role="alert" style="padding: 0px;margin:0px;">
											<button type="button" class="close" data-dismiss="alert"></button>
											<?php echo $this->session->flashdata('error'); ?>
										</div>
										<br>
									<?php endif; ?>
                                        
                                        
										<div class="product-form deep-placeholder">
											<div class="mb-4">

												<div class="form-group mb-lg-4">
													<div>
														<input type="text" required name="ad_title" id="ad_title" class="form-control char-count" placeholder="Title">
													</div>
												</div>

												<div class="form-group mb-lg-4">
													<div>
														<input type="text" required name="product_name" id="product_name" value="<?= $req_data['p_name']; ?>" class="form-control char-count" placeholder="Enter Product name">
													</div>
												</div>



												<div class="form-group mb-lg-4">
													<div>
														<select required name="cat_id" id="cat_id" class="form-control">
															<option value> -- Select Product Category --</option>
															<?php
															foreach ($product_cat as $v) {
																$selected = '';
																if ($v['id'] == $req_data['cat_id']) {
																	$selected = 'selected="selected"';
																}

															?>
																<option <?= $selected; ?> value="<?= $v['id']; ?>"><?= $v['category_name']; ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<div class="form-group mb-lg-4">
													<div>
														<textarea required rows="3" name="details" id="details" class="form-control" placeholder="Describe your buying requirement including specifications, sizes etc"><?= $req_data['p_des']; ?></textarea>
													</div>
												</div>
											</div>
											<div>
												<div class="form-group mb-lg-4">
													<div class="d-flex w-100">
														<div class="w-50 mr-2">
															<input type="text" required name="quantity" id="quantity" value placeholder="Buy Quantity" class="form-control numeric-validation" aria-errormessage="Product Quantity">
														</div>
														<div class="w-50">
															<select required name="quantity_unit" class="form-control">
																<option value>-- Select Unit --</option>
																<?php
																foreach ($product_unit as $v) {
																?>
																	<option value="<?= $v['id']; ?>"><?= $v['name']; ?></option>
																<?php } ?>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group mb-lg-4">
													<select required name="offer_valid_for" id="offer_valid_for" class="form-control">
														<option value>-- Buy Within --</option>
														<option value="15"> 15 days </option>
														<option value="30"> 30 days </option>
														<option value="60"> 2 month </option>
														<option value="90"> 3 month </option>
														<option value="180"> 6 month </option>
													</select>
												</div>
												<div class="form-group">
													<input required type="text" name="packing_terms" id="packing_terms" value placeholder="Product Packaging Terms" class="form-control">
												</div>
												<div class="form-group">
													<input required type="text" name="shipping_terms" id="shipping_terms" value placeholder="Shipping Terms" class="form-control">
												</div>

												<div class="form-group">

													<input required type="date" class="form-control datepicker" placeholder="Validity Date" id="election_date" name="validity_date" autocomplete="off">
												</div>

												<div class="form-group product-img mb-0">
													<label>Have Product Images?</label>
													<div>
														<label class="mr-2">
															<input type="radio" name="image_type" value="1" data-has-img="true" class="image-type check-img"> Yes </label>
														<label class="mr-2">
															<input type="radio" checked name="image_type" value="0" data-has-img="false" class="image-type check-img"> No </label>
													</div>
													<div class="product-has-img">
														<div class="form-group product-img">
															<div class="ekadhik-field">
																<label for="buyRequirementImage" class="trigger-ekadhik"></label>
																<input type="file" name="productImg" accept="image/.jpg, .jpg, .jpeg, .png, .gif, .webp, .svg" max="8" class="ekadhik-input" id="buyRequirementImage" multiple />
																<ul class="selected-file-list">
																	<li class="order-last flex-grow-1 pb-2">
																		<span class="ekadhik-lebel-text">
																			<i class="fa fa-picture-o text-24 text-muted" aria-hidden="true"></i>
																			<br /> Upload images </span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											
											<?php if( empty($company_id)){ ?>
											
											<div class="member-zone">
												<div class="py-2 border-y my-3">
													<div class="custom-control custom-radio custom-control-inline">
														<input type="radio" class="custom-control-input user-existence-checker" id="existingUserToggler" name="member_type" value="existing">
														<label class="custom-control-label text-strong text-muted" for="existingUserToggler">Existing Member</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline">
														<input type="radio" class="custom-control-input user-existence-checker" id="newUserToggler" name="member_type" value="new">
														<label class="custom-control-label text-strong text-muted" for="newUserToggler">New Member</label>
													</div>
													<div></div>
												</div>
												<div class="user-existence-togglable" id="existingUser">
													<div class="user-form mb-4">
														<div class="form-group">
															<div>
																<input type="email" name="email" id="email" value class="form-control" placeholder="Enter email address">
															</div>
														</div>
														<div class="form-group">
															<div>
																<input type="password" name="password" id="password" class="form-control" placeholder="Enter password" autocomplete="new-password">
															</div>
														</div>
													</div>
												</div>
												<div class="user-existence-togglable" id="newUser">
													<div class="mt-4"></div>
													<div style="display: none">
														<input type="radio" name="business_type" value="1" checked class="form-check-input">
													</div>
													<div class="form-group">
														<div>
															<input type="text" name="company_name" id="company" value class="form-control" placeholder="Enter Company Name">
														</div>
													</div>
													<div class="form-group">
														<div>
															<select name="country_id" id="country" class="form-control">
																<option value>-- Select Country --</option>
																<?php foreach ($countylist as $val) { ?>
																	<option value="<?= $val['id']; ?>"><?= $val['country_name']; ?></option>
																<?php } ?>
															</select>
														</div>
													</div>
													<div class="form-group">
														<div>

															<input type="text" name="contact_person" value class="form-control" placeholder="Enter your Name">

														</div>
													</div>
													<div class="form-group">
														<div>
															<input type="email" name="registration_email" value class="form-control" placeholder="Enter email address">
														</div>
													</div>
													<div class="form-group">
														<div>


															<div class="w-100">
																<input type="text" name="mobile" id="phone" value class="form-control prevent-first-zero numeric-validation" aria-errormessage="Phone Number" placeholder="Enter Phone Number">
																<span class="phone-error"></span>
															</div>

														</div>
													</div>
													<div class="form-group">
														<div>
															<input type="password" name="registration_password" id="registration_password" value class="form-control" placeholder="Password" autocomplete="new-password">
														</div>
													</div>
												</div>
											</div>
											
											<?php }else{ ?>
												<div class="form-group">
											    <input type="radio" style="display:none;" checked  name="member_type" value="existing">
											    </div>
											<?php } ?>
											
											<div class="form-group">
												<div class="">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" data-toggle="submit" class="custom-control-input" id="agreeBusinessListingTerms" name="agreeBusinessListingTerms" checked required>
														<label class="custom-control-label text-muted text-15" for="agreeBusinessListingTerms"> By clicking Submit, you agree to our <a href="https://b2bitem.com/terms" target="_blank" class="text-business-tertiary">service terms & general agreement</a>
														</label>
													</div>
												</div>
											</div>
											<div class="text-center mb-3">
												<button type="submit" class="btn px-5 px-lg-4 btn-b2bmap-primary text-17">Submit Your Requirement </button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-4 py-2">
							<div class="bg-white overflow-hidden rounded">
								<div class="px-4 py-2 py-lg-3 border rounded-top" style="background-color: #eef6f6">
									<h2 class="text-strong text-center text-22 text-lg-25 m-0">Sourcing in 3 Easy Steps</h2>
								</div>
								<div class="bg-white border border-top-0 rounded-bottom p-4">
									<div class="mb-3">
										<p class="text-18">b2bitem's Request for Quotation is the perfect solution for b2b sourcing needs.</p>
										<div class="border-bottom border-4px border-info w-100px"></div>
									</div>
									<div class="d-flex step-item align-items-center py-3">
										<div class="mr-3 mr-lg-4">
											<div class="box-40 box-lg-50 rounded-circle bg-info common-shadow-box">
												<span class="text text-extra-bold text-white text-24 text-lg-30 line-height-100">1</span>
											</div>
										</div>
										<div>
											<span class="m-0 text-17 line-height-120 text-capitalize">Post buy requirements to Get Quotations from top suppliers</span>
										</div>
									</div>
									<div class="d-flex step-item align-items-center py-3">
										<div class="mr-3 mr-lg-4">
											<div class="box-40 box-lg-50 rounded-circle bg-info common-shadow-box">
												<span class="text text-extra-bold text-white text-24 text-lg-30 line-height-100">2</span>
											</div>
										</div>
										<div>
											<span class="m-0 text-17 line-height-120 text-capitalize">Compare quotes received from top suppliers</span>
										</div>
									</div>
									<div class="d-flex step-item align-items-center py-3">
										<div class="mr-3 mr-lg-4">
											<div class="box-40 box-lg-50 rounded-circle bg-info common-shadow-box">
												<span class="text text-extra-bold text-white text-24 text-lg-30 line-height-100">3</span>
											</div>
										</div>
										<div>
											<span class="m-0 text-17 line-height-120 text-capitalize">Seal the deal with best supplier</span>
										</div>
									</div>
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