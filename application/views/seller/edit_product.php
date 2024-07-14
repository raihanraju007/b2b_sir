<?php 
  require_once(APPPATH."views/common/company_profile.php"); 
?>
<div class="panel-body">
                  <div class="biz-card theme-space-box">
                     <div class="border-bottom mb-3 mb-lg-4">
                        <h3 class="text-business-secondary">Add New Product</h3>
                        <p class="text-muted">Please provide details information about your product. It helps you to reach potential buyer's easily.</p>
                     </div>
                     <form method="post" action="<?=site_url('seller/product_save');?>" enctype="multipart/form-data" id="productForm">
                       
                        <div class="product-form">
                           <div class="mb-4 mb-lg-5">
                              <div class="form-group row mb-3 mb-lg-4">
                                 <label class="col-lg-3 text-lg-right d-lg-down-none" for="name">Product Name <span class="text-danger">*</span></label>
                                 <div class="col-lg-9">
                                    <input type="text" name="product_name" id="product_name" value="<?=$info['product_name'];?>" placeholder="Enter Product Name" class="form-control char-count check-product-url">
                                    <span class="slug-info px-1"></span>
                                 </div>
                              </div>
                              <div class="form-group row mb-3 mb-lg-4">
                                 <label class="col-lg-3 text-lg-right d-lg-down-none" for="cat_id">Product Category <span class="text-danger">*</span></label>
                                 <div class="col-lg-9">
                                    <select name="category_id" id="cat_id" class="form-control">
                                       <option value=""> -- Select Product Category -- </option>
                                         <?php 
                                           $cat_list =  $this->sellermodel->get_cat_list();
                                           foreach ($cat_list as $key => $v) {

                                            if( $v['id'] == $info['category_id']){
                                              $selected = 'selected="selected"';
                                            }else{
                                              $selected = '';
                                            }
                                           
                                        ?>
                                        <option <?=$selected;?> value="<?=$v['id'];?>"> <?=$v['category_name'];?> </option>
                                        <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group row mb-3 mb-lg-4">
                                 <label class="col-lg-3 text-lg-right d-lg-down-none" for="sub_cat_id">Product Sub Category <span class="text-danger">*</span></label>
                                 <div class="col-lg-9">
                                    <select name="sub_category_id" id="subcategory_id" class="form-control">
                                       <option value="">-- Select Sub-category --</option>
                                       <?php 

                                      if(!empty($info['sub_category_id']) and $info['sub_category_id'] > 0){

                                       $sub_cat_list =  $this->sellermodel->get_sub_cat_list($info['category_id']);
                                       foreach ($sub_cat_list as $key => $v) {
                                           if( $v['id'] == $info['sub_category_id']){
                                              $selected = 'selected="selected"';
                                            }else{
                                              $selected = '';
                                            }

                                  ?>
                                  <option <?=$selected;?> value="<?=$v['id'];?>"> <?=$v['sub_category_name'];?> </option>
                                  <?php }} ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group row mb-3 mb-lg-4">
                                 <label class="col-lg-3 text-lg-right d-lg-down-none" for="details">Product Details <span class="text-danger">*</span></label>
                                 <div class="col-lg-9 text-countable summernote-group">
                                    <textarea name="product_description" id="details" rows="5" placeholder="Product Details" class="form-control summernote"><?=$info['product_description'];?></textarea>
                                    <div class="d-flex flex-wrap justify-content-between">
                                       <span class="text-counter text-13 pl-1 ml-lg-auto"></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row mb-3 mb-lg-4">
                                 <label class="col-lg-3 text-lg-right d-lg-down-none" for="product_usage">Product Usage <span class="text-danger">*</span></label>
                                 <div class="col-lg-9">
                                    <textarea rows="2" name="product_usage" id="product_usage" placeholder="Enter Product Usage / Application " class="form-control form-control-sm"><?=$info['product_usage'];?></textarea>
                                 </div>
                              </div>
                              <div class="form-group row mb-3 mb-lg-4">
                                 <label class="col-lg-3 text-lg-right d-lg-down-none" for="product_keywords">Product Keywords <span class="text-danger">*</span></label>
                                 <div class="col-lg-9">
                                    <textarea rows="2" name="product_keywords" id="product_keywords" placeholder="Enter Product Search Keywords" class="form-control form-control-sm"><?=$info['product_keywords'];?></textarea>
                                 </div>
                              </div>
                              <div class="form-group row mb-3 mb-lg-4">
                                 <label class="col-lg-3 text-lg-right d-lg-down-none" for="product_code">Product Code / Hs Code </label>
                                 <div class="col-lg-9">
                                    <input type="text" name="product_code" id="product_code" value="<?=$info['product_code'];?>" placeholder="Enter Product Code / Hs Code" class="form-control char-count">
                                 </div>
                              </div>
                           </div>
                           <div class="mb-4 mb-lg-5">
                              <div class="mb-4">
                                 <h2 class="text-business-secondary">Product Information</h2>
                              </div>
                              <div class="form-group row mb-3 mb-lg-4">
                                 <label class="col-lg-3 text-lg-right d-lg-down-none" for="country_of_origin">Country of Origin <span class="text-danger">*</span></label>
                                 <div class="col-lg-9">
                                    <select name="country_id" id="country_of_origin" class="form-control">
                                       <option value=""> -- Country of Origin -- </option>
                                        <?php 
                                           $county =  $this->sellermodel->get_country_list();
                                           foreach ($county as $key => $v) {

                                           if( $v['id'] == $info['country_id']){
                                              $selected = 'selected="selected"';
                                            }else{
                                              $selected = '';
                                            }
                                           
                                        ?>
                                        <option <?=$selected;?> value="<?=$v['id'];?>"> <?=$v['country_name'];?> </option>
                                        <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group row mb-3 mb-lg-4">
                                 <label class="col-lg-3 text-lg-right d-lg-down-none" for="certificate">Product Certification</label>
                                 <div class="col-lg-9">
                                    <input type="text" name="certificate" id="certificate" value="<?=$info['certificate'];?>" placeholder="Product Certification Info" class="form-control">
                                 </div>
                              </div>
                              <div class="form-group row mb-3 mb-lg-4">
                                 <label class="col-lg-3 text-lg-right d-lg-down-none" for="min_order_qty">Minimum Order Quantity <span class="text-danger">*</span></label>
                                 <div class="col-lg-9">
                                    <div class="row small-gutters">
                                       <div class="col-6 col-lg-5">
                                          <input type="text" name="min_order_qty" value="<?=$info['min_order_qty'];?>" id="min_order_qty" min="1" placeholder="Order Quantity" class="form-control numeric-validation" aria-errormessage="Quantity">
                                       </div>
                                       <div class="col-6 col-lg-7">
                                          <select name="unit_id" id="min_order_quantity_unit" class="form-control minimum-order-qty-unit">
                                             <option value="">-- Select Unit --</option>
                                             <?php 
                                               $unit =  $this->sellermodel->get_product_unit_list();
                                               foreach ($unit as $key => $v) {

                                                 if( $v['id'] == $info['unit_id']){
                                                    $selected = 'selected="selected"';
                                                  }else{
                                                    $selected = '';
                                                  }
                                                
                                              ?>
                                              <option <?=$selected;?> value="<?=$v['id'];?>"><?=$v['name'];?></option>
                                              <?php } ?>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row mb-3 mb-lg-4">
                                 <label class="col-lg-3 text-lg-right d-lg-down-none" for="price_info">Product Price (USD) <span class="text-danger">*</span></label>
                                 <div class="col-lg-9">
                                    <div class="row small-gutters align-items-center">
                                       <div class="col-6 col-lg-5">
                                          <div>
                                             <input type="text" name="price" id="price_info" value="<?=$info['price'];?>" min="1" placeholder="Price" class="form-control numeric-validation" data-allow-float="true" aria-errormessage="Price">
                                          </div>
                                       </div>
                                       <div class="col-6 col-lg-7">
                                          <input type="hidden" name="price_currency" id="unit_price" class="price-unit" value="">
                                          <div class="price-info-unit text-theme text-thin">
                                             <span class="price-info-text">Price in USD</span>
                                             <span class="price-unit-text"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row mb-3 mb-lg-4">
                                 <label class="col-lg-3 text-lg-right d-lg-down-none" for="payment_terms">Payment Terms</label>
                                 <div class="col-lg-9">
                                    <input type="text" name="payment_terms" id="payment_terms" value="<?=$info['payment_terms'];?>" placeholder="Enter Payment Terms" class="form-control">
                                 </div>
                              </div>
                              <div class="form-group row mb-3">
                                 <label class="col-lg-3 text-lg-right" for="sample_status">Sample Availability </label>

                                  <?php 
                                  $one = '';
                                    if($info['sample_status'] == 'No'){
                                      $one = 'checked';
                                    }
                                    $two = '';
                                    if($info['sample_status'] == 'Yes'){
                                      $two = 'checked';
                                    }
                                    $style = 'style="display: none"';
                                    $tree = '';
                                    if($info['sample_status'] == 'Yes ( On Condition )'){
                                      $tree = 'checked';
                                      $style = '';
                                    }



                                  ?>

                                 <div class="col-lg-9">
                                    <div class="row">
                                       <div class="col-xl-12">
                                          <div class="form-check form-check-inline">
                                             <label class="form-check-label">
                                             <input type="radio"  <?=$one?>  name="sample_status" value="No" class="form-check-input sample_condition_info">No
                                             </label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <label class="form-check-label">
                                             <input type="radio" <?=$two?> name="sample_status" value="Yes" class="form-check-input sample_condition_info">Yes
                                             </label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <label class="form-check-label">
                                             <input type="radio" <?=$tree?> name="sample_status" value="Yes ( On Condition )" class="form-check-input sample_condition_info">Yes <span class="text-13 text-muted">(On Condition)</span>
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row sampleConditionInfo mt-2" <?=$style;?>>
                                       <div class="col-xl-12 mb-2">
                                          <textarea name="sample_condition_info" id="sample_condition_info" class="form-control" placeholder="Sample Condition Information"><?=$info['sample_condition_info'];?></textarea>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row mb-3 mb-lg-4">
                                 <label class="col-lg-3 text-lg-right d-lg-down-none" for="video">Product Video</label>
                                 <div class="col-lg-9">
                                    <input type="text" name="video" id="video" value="<?=$info['video'];?>" placeholder="Product Video (Youtube URL)" class="form-control">
                                 </div>
                              </div>
                              <div class="form-group row product-img mb-4">
                                 <label class="col-lg-3 text-lg-right">Product Images <span class="text-danger">*</span></label>
                                 <div class="col-lg-9">
                                    <div class="ekadhik-field">
                                       <label for="productImages" class="trigger-ekadhik"></label>
                                       <input type="file" name="images[]" accept="image/.jpg, .jpg, .jpeg, .png, .gif, .webp, .svg" max="8" class="ekadhik-input" id="productImages" multiple />
                                       <ul class="selected-file-list">
                                          <li class="order-last flex-grow-1 pb-2">
                                             <span class="ekadhik-lebel-text"><i class="fa fa-picture-o text-24 text-muted" aria-hidden="true"></i> <br /> Upload images</span>
                                          </li>
                                       </ul>
                                    </div>
                                    <span class="text-error" data-error-for="images[]"></span>
                                 </div>
                              </div>
                           </div>
                           <div class="text-center offset-lg-3 px-0 mb-2">
                              <input type="hidden" value="<?=$info['id'];?>" name="id">
                              <button type="submit" class="btn btn-b2bmap-secondary btn-md-down-small px-5">Update</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>

               <script type="text/javascript">
                 
                 $(".sample_condition_info").change(function () {
                    var sample_condition_info = $(this).val();

                    if (sample_condition_info == 'Yes ( On Condition )') {
                        $(".sampleConditionInfo").show();
                        $("#sample_condition_info").focus();
                    } else {
                        $(".sampleConditionInfo").hide();
                    }
                });
               </script>