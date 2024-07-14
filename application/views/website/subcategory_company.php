<?php
require_once(APPPATH . "views/common/header_2.php");
?>

<main class="main">

	<div class="page-content">
		<div class="mb-5"></div>
		<!-- End .mb-5 -->
		<section class="mb-4">
			<div class="container custom-container">
				<div class="mb-4">
					<div class="row">
						<div class="col-lg-3">
							<aside class="aside-on-responsive" id="asideNav">
								<div class="aside-content">
									<div class="bg-white border mb-4">
										<div class="border-bottom">
											<h3 class="d-flex py-2 px-3 text-20">
												<span class="mr-2">
                                                <i class="<?= $cat_info['icon']; ?>" aria-hidden="true"></i>
												</span>  <?= $cat_info['category_name']; ?>
											</h3>
										</div>
										
										
												<div class="px-3">
											<ul class="aside-category-list-v1">

												<?php
												$sub_cat = $this->sellermodel->get_sub_cat_list($sub_cat_info['category_id']);

												foreach ($sub_cat as $key => $v) {

													$subslag = $v['sub_link_prefix'];
												?>

													<li class="aside-category-item-v1">
														<a href="<?= site_url('subcategory_company/' . $subslag); ?>" class="aside-category-link-v1 align-items-center">
															<span class="mr-2 mt-n1">
																<i class="fa fa-circle text-5 link-icon"></i>
															</span> <?= $v['sub_category_name']; ?> </a>
													</li>

												<?php } ?>

											</ul>
										</div>
										
										
									</div>
								</div>
							</aside>
						</div>

						<div class="col-lg-9">
							<div class="mb-3">
								<h1 class="title-with-square-box text-normal text-evening text-md-down-20 text-lg-32">
									Companies List of : <?= $sub_cat_info['sub_category_name']; ?>
								</h1>
							</div>

				<div class="mb-4">
    <ul class="list-unstyled company-list">
        <?php if (!empty($company_list)) : ?>
            <?php foreach ($company_list as $company) : ?>
                <li class="member-item bg-white border mb-4">
                    <div class="pb-4 pt-3">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="d-flex px-4">
                                    <div>
                                        <a href="<?= site_url('/' . $company['slag']); ?>" class="directory-link text-custom-link mb-2" target="_blank">
                                            <span class="align-self-center" style="font-size: x-large;"><?= htmlspecialchars($company['company_name']); ?></span>
                                        </a>
                                        <div class="mb-1 d-flex">
                                            <span class="text-muted text-nowrap mr-2">Business Type:</span>
                                            <span>
                                                <a href="#"><?= htmlspecialchars($sub_cat_info['sub_category_name']); ?></a>
                                            </span>
                                        </div>
                                        <?php
                                            $category_names = [
                                                1 => 'Import',
                                                2 => 'Export',
                                                3 => 'Overseas',
                                                4 => 'Service Provider'
                                            ];

                                            $company_types = explode(',', $company['type']);
                                            $display_types = [];

                                            foreach ($company_types as $type) {
                                                $type = intval($type); // Ensure the type is treated as an integer
                                                if (isset($category_names[$type])) {
                                                    $display_types[] = $category_names[$type];
                                                } else {
                                                    $display_types[] = '';
                                                }
                                            }

                                            $formatted_types = implode(', ', $display_types);
                                        ?>
                                        <div class="mb-1 d-flex">
                                            <span class="text-muted text-nowrap mr-2">Business Category:</span>
                                            <span>
                                                <span class="text-muted"><?= htmlspecialchars($formatted_types); ?></span>
                                            </span>
                                        </div>

                                        <div class="mb-1 d-flex">
                                            <span class="text-muted text-nowrap mr-2">Main Products:</span>
                                            <span>
                                                <a href="#"><?= htmlspecialchars($company['main_product']); ?></a>
                                            </span>
                                        </div>
                                        <div class="mb-1 d-md-down-none">
                                            <span class="text-muted text-nowrap mr-2">Contact Person:</span>
                                            <span class="text-muted"><?= htmlspecialchars($company['contact_person']); ?></span>
                                        </div>
                                        <p class="m-0 text-15 details-short-text text-muted text-ellipsis-clamp-2">
                                            <?= htmlspecialchars($company['description']); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3 mt-md-0 border-md-left">
                                <div class="px-4">
                                    <div class="row">
                                        <?php if (!empty($company['product_list'])) : ?>
                                            <?php $count = 0; // Initialize a counter ?>
                                            <?php foreach ($company['product_list'] as $product) : ?>
                                                <?php if ($count % 3 == 0 && $count != 0) : ?>
                                    </div>
                                    <div class="row">
                                                <?php endif; ?>
                                                <?php $count++; // Increment the counter ?>
                                            <?php endforeach; ?>
                                    </div> <!-- Ensure this row div is closed -->
                                        <?php endif; ?>
                                </div> <!-- Ensure this px-4 div is closed -->
                            </div>
                        </div>
                    </div>
                    <div class="px-3 py-2 border-top">
                        <div class="row align-items-center">
                            <?php if (!empty($company['product_list'])) : ?>
                                <div class="col-md-4 border-md-right d-md-down-none">
                                    <span class="text-muted country-info-container">
                                        <img src="https://b2bitem.com/upload/country/16_16/<?= $product['flag']; ?>" alt="<?= $product['country_name']; ?>" class="img-fluid mr-1" />
                                        <?= htmlspecialchars($product['country_name']); ?>
                                    </span>
                                </div>
                            <?php endif; ?>
                            <?php $com_slag = $this->session->userdata('com_slag'); ?>
                            <div class="col-6 col-md-4 pl-md-4">
                                <a href="<?= site_url('company/product/' . $company['slag']); ?>"><i class="fa fa-cube text-custom-link mr-1"></i> Products</a>
                            </div>
                            <div class="col-6 col-md-4 pl-md-4 text-right">
                                <!--<a href="<?= site_url('company/contact'); ?>" class="btn btn-sm btn-b2bmap-secondary bg-business-secondary-close border-business-secondary-close"><i class="fa fa-envelope-o mr-1"></i> Contact Now</a>-->
                                 <a href="<?= site_url('company/contact/' . $company['slag']); ?>" class="btn btn-sm btn-b2bmap-secondary bg-business-secondary-close border-business-secondary-close"><i class="fa fa-envelope-o mr-1"></i> Contact Now</a>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        <?php else : ?>
            <p>No companies found.</p>
        <?php endif; ?>
    </ul>
</div>


                        	<div class="biz-box bg-white py-3">
									<div class="border-bottom pb-2 mb-3">
										<h3 class="m-0">Suppliers Info - <?= $sub_cat_info['category_name']; ?> </h3>
									</div>
									<ul class="list-unstyled row my-n1">

										<?php foreach ($sub_cat as $key => $val) { ?>

											<li class="col-sm col-lg-4 py-1">
												<a href="<?= site_url('subcategory/' . $val['sub_link_prefix']); ?>" class="text-custom-link"> <?= $val['sub_category_name'] ?></a>
											</li>

										<?php } ?>

									</ul>
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