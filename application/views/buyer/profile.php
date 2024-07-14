
<?php 
  require_once(APPPATH."views/common/company_profile_buyer.php"); 
?>

  <div class="panel-body">
    <div>
      <div class="biz-card p-3 p-lg-4 d-flex flex-wrap justify-content-between align-items-center mb-4">
        <div>
          <p class="text-18 text-lg-22 text-muted mb-1">Welcome <?=$company_info['contact_person'];?> !</p>
          <div class="load-group">
            <div class="pre-load">
              <div class="spinner-border spinner-border-sm preload-spinner"></div>
              <div class="spinner-grow spinner-grow-sm bg-danger border-danger"></div>
            </div>
            <div class="post-load">
                
                <?php if(empty($loginfo)){ ?>
              <p class="text-24 text-lg-28 text-black text-business-secondary line-height-130 mb-0">Please Update Your Business Profile</p>
              <?php }else{ ?>
               <p class="text-24 text-lg-28 text-black text-business-secondary line-height-130 mb-0" style="color:red !important;;">Last updated data is review. After review admin approve.</p>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-4">
        <div class="bg-white border-x border-top border-bottom-0 px-3 pt-3 px-lg-4 rounded-top">
          <div class="border-bottom pb-2 mb-3">
            <h2>Company Information</h2>
          </div>
          <div class="row">
            <div class="col-lg-7">
              <div class="form-group row">
                <label class="col-5 mb-0">Company <span class="d-md-down-none"> Name</span>
                </label>
                <div class="col-7">
                  <span> <?=$company_info['company_name'];?> </span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-5 mb-0">Country</label>
                <div class="col-7">
                  <span> <?php 
                    echo $this->sellermodel->get_country_name($company_info['country_id']);
                  ?> </span>
                </div>
              </div>
              <div class="form-group row align-items-center">
                <label class="col-5 mb-0">Email</label>
                <div class="col-7">
                  <span class="text-break">
                    <?=$company_info['email'];?>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="form-group row align-items-center">
                <label class="col-5 mb-lg-0">Company Logo <span class="text-danger">*</span>
                </label>
                <div class="col-7">
                  <form method="POST" action="<?=site_url('buyer/update_company_logo');?>" enctype="multipart/form-data" id="uploadCompanyLogo">
                    
                    <div class="box-ratio box-ratio-4by3 w-150px mx-auto">
                      <div class="attach-file-with-preview">
                        <input type="file" name="logo" accept="image/.jpg, .jpg, .jpeg, .png, .gif, .webp, .svg" id="changeProfileLogo" class="img-uploader-input upload-company-logo" data-cf-modified-8a01b4de6437bc36fbd682ae-="">
                        <img src="<?=base_url('upload/company/'. $company_info['logo']);?>">
                        <label for="changeProfileLogo"></label>
                        <span class="preview-overlay-text custom-file  show ">Upload Logo</span>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <form method="post" action="<?=site_url('buyer/update_profile');?>" enctype="multipart/form-data" class="biz-form">
          
          <div class="bg-white px-3 pb-3 px-lg-4 border-x border-bottom mb-4 rounded-bottom">
            <div class="form-group row">
              <label class="col-lg-3" for="year_of_stablishment">Company Established <span class="text-danger">*</span>
              </label>
              <div class="col-lg-3">
                
                <select name="year_of_stablishment" id="year_of_stablishment" class="form-control text-14">
                  <option value=""> -- Select Year --</option>
                  <?php 
                    $year = $this->sellermodel->get_year();
                    foreach ($year as $key => $v) {
                      if($v == $company_info['year_of_stablishment']){
                        $selected = 'selected="selected"';
                      }else{
                        $selected = '';
                      }
                  ?>
                  <option  <?=$selected;?>  value="<?=$v;?>"> <?=$v;?> </option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3" for="num_of_employee">Number of Employees <span class="text-danger">*</span>
              </label>
              <div class="col-lg-3">
                <input type="number" value="<?=$company_info['num_of_employee'];?>" class="form-control text-14" name="num_of_employee" id="num_of_employee">
              </div>
            </div>
            <div class="form-group row align-items-center">
              <label class="col-lg-3 mb-lg-0">Web Address (URL) <span class="text-danger">*</span>
              </label>
              <div class="col-lg-6">
                <input type="text" value="<?=$company_info['web_link'];?>" name="web_link"  class="form-control" placeholder="e.g: http://www.yourcompany.com">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 mb-lg-0">Business Identification Number</label>
              <div class="col-lg-6">
                <input type="text" value="<?=$company_info['business_identification_number'];?>" name="business_identification_number" placeholder="Enter business identification number" class="form-control">
              </div>
            </div>
          </div>
           <div class="biz-card p-3 p-lg-4 mb-4">
            <div class="border-bottom pb-2 mb-3">
              <h2>About Your Business</h2>
            </div>
            <!-- <div class="form-group row align-items-center" style="display: none">
              <label class="col-3 mb-0">I am <span class="text-danger">*</span>
              </label>
              <div class="col-9">
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" name="member_type" value="1" data-target="#businessTypeForBuyer" class="form-check-input member-type-input member-type">Buyer </label>
                </div>
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" name="member_type" value="2" data-target="#businessTypeForSeller" class="form-check-input member-type-input member-type" checked>Seller </label>
                </div>
                <div></div>
              </div>
            </div> -->
            <div class="form-group row align-items-center  show  ">
              <label class="col-lg-3 mb-lg-0">Business Type <span class="text-danger">*</span>
              </label>
              <div class="col-lg-9">
                <!-- <div class="business-type" id="businessTypeForBuyer">
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="checkbox" name="business_type[]" value="7" class="form-check-input"> Importer </label>
                  </div>
                  <div></div>
                </div> -->
                <div class="business-type" id="businessTypeForSeller" style="display: block">
                  
                  <?php 

                     $type =  $this->sellermodel->get_biz_type();
                     
                     foreach ($type as $key => $v) {
                      $selelec_type = explode(',', $company_info['type']);
                      if( in_array($v['id'], $selelec_type)){
                        $select = 'checked';
                      }else{
                        $select = '';
                      }

                  ?>

                  <div class="form-check-inline mb-2">
                    <label class="form-check-label">
                      <input <?=$select;?> type="checkbox" name="type[]" value="<?=$v['id'];?>" class="form-check-input business-type-length"> <?=$v['type'];?> </label>
                  </div>

                  <?php } ?>



                  <div>
                    <div class="max-selected-business-type"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group row align-items-center">
                  <label class="col-lg-6 mb-lg-0">Business Category <span class="text-danger">*</span>
                  </label>
                  <div class="col-lg-6">
                    <select name="cat_id" id="cat_id" class="form-control text-14 get-subcategory valid" aria-invalid="false">
                      <option value=""> -- Select Category --</option>
                       <?php 
                         $cat_list =  $this->sellermodel->get_cat_list();
                         foreach ($cat_list as $key => $v) {
                          if( $v['id'] == $company_info['cat_id']){
                            $select = 'selected="selected"';
                          }else{
                            $select = '';
                          }
                      ?>
                      <option <?=$select;?> value="<?=$v['id'];?>"> <?=$v['category_name'];?> </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group row align-items-center">
                  <label class="col-lg-4 mb-lg-0">Subcategory <span class="text-danger">*</span>
                  </label>
                  <div class="col-lg-8">
                    <select name="sub_cat_id" id="subcategory_id" class="form-control text-14">
                      <option value=""> -- Select Subcategory --</option>
                      <?php 

                          if(!empty($company_info['cat_id']) and $company_info['cat_id'] > 0){

                           $sub_cat_list =  $this->sellermodel->get_sub_cat_list($company_info['cat_id']);
                           foreach ($sub_cat_list as $key => $v) {
                              if( $v['id'] == $company_info['sub_cat_id']){
                                $select = 'selected="selected"';
                              }else{
                                $select = '';
                              }

                      ?>
                      <option <?=$select;?> value="<?=$v['id'];?>"> <?=$v['sub_category_name'];?> </option>
                      <?php }} ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 mb-lg-0">About Company <span class="text-danger">*</span>
              </label>
              <div class="col-lg-9 text-countable summernote-group">
                <textarea type="text" name="about_company" class="form-control summernote" id="about_company" placeholder="Please provide details about your company ..."><?=$company_info['about_company'];?></textarea>
                <div class="d-flex flex-wrap justify-content-between">
                  <div class="about-company-error"></div>
                  <span class="text-counter text-13 pl-1 ml-lg-auto"></span>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3" for="main_product">Main Products <span class="text-danger">*</span>
              </label>
              <div class="col-lg-9">
                <input name="main_product" value="<?=$company_info['main_product'];?>"  id="main_product" class="form-control" placeholder="Main Products">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3"> Do you offer after sell services & supports ?</label>
              <div class="col-lg-9">
                <div class="service-support-box">
                  <div class="d-flex mb-2">
                     <?php 
                        if($company_info['service_support'] == 1){
                          $yes = 'checked';
                          $no = '';
                           $style = '';
                        }else{
                          $no = 'checked';
                          $yes = '';
                          $style = 'style="display: none"';
                        }
                        
                      ?>
                    <div class="mr-3">
                      <label class="form-check-label" for="service_support_yes">
                        <input type="radio" <?=$yes;?> name="service_support" id="service_support_yes" value="1" class="service-support"> Yes </label>
                    </div>
                    <div class="form-check mr-3">
                      <label class="form-check-label" for="service_support_no">
                        <input type="radio" <?=$no;?> name="service_support" id="service_support_no" value="0" class="service-support"> No </label>
                    </div>
                  </div>
                  <div class="mt-2" id="serviceSupportOption" <?=$style;?>>
                    <textarea class="form-control" name="after_sales_service" rows="3" placeholder="About After Sell Service"><?=$company_info['after_sales_service'];?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3"> Have a Quality Control Policy ?</label>
              <div class="col-md-9">
                <div class="service-support-box">
                  <div class="d-flex mb-2">
                     <?php 
                        if($company_info['quality_control'] == 1){
                          $yes = 'checked';
                          $no = '';
                          $style = '';
                        }else{
                          $no = 'checked';
                          $yes = '';
                          $style = 'style="display: none"';
                        }
                        
                      ?>
                    <div class="mr-3">
                      <label class="form-check-label" for="quality_control_yes">
                        <input type="radio" <?=$yes;?> class="quality-control" value="1" name="quality_control" id="quality_control_yes"> Yes </label>
                    </div>
                    <div class="form-check mr-3">
                      <label class="form-check-label" for="quality_control_no">
                        <input type="radio" <?=$no;?> class="quality-control" value="0" name="quality_control" id="quality_control_no"> No </label>
                    </div>
                  </div>
                  <div class="mt-2" id="qualityControlOption" <?=$style;?>>
                    <textarea class="form-control" rows="3" name="quality_control_policy" placeholder="Quality Control Policy"><?=$company_info['quality_control_policy'];?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="form-group row">
              <div class="col-lg-3">Company Image:</div>
              <div class="col-lg-9">
                <div class="ekadhik-field-group">
                  <button type="button" class="btn border bg-theme-light ekadhik-group-trigger ">
                    <i class="fa fa-picture-o text-20 text-business-secondary mr-2" aria-hidden="true"></i> Upload Company Images </button>
                  <div class="ekadhik-field  hide ">
                    <label for="companyImages" class="trigger-ekadhik"></label>
                    <input type="file" name="company_images[]" max="4" accept="image/*" class="ekadhik-input" id="companyImages" multiple />
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
            </div> -->
          </div>
          <div class="biz-card p-3 p-lg-4 mb-4">
            <div class="collapse transition-none  " id="factoryInfoToggler">
              <div class="form-group row align-items-center mb-0">
                <label class="col-lg-3 mb-lg-0">Factory Info</label>
                <div class="col-lg-9">
                  <a href="javascript:void(0);" data-id="yes" data-toggle="collapse" data-target="#factoryInfo, #factoryInfoToggler" class="btn px-4 border border-business-secondary rounded-0 factory-info btn-md-down-small w-sm-down-100">
                    <i class="icofont-plus text-13 mr-1"></i> Add Factory Info </a>
                </div>
              </div>
            </div>
            <div class="collapse transition-none show" id="factoryInfo">
              <h5 class="border-bottom mb-3 mb-lg-4 pb-2">Factory Info</h5>
              <div class="form-group row">
                <label class="col-lg-3 d-lg-down-none">Factory Name <span class="text-danger">*</span>
                </label>
                <div class="col-lg-9">
                  
                  <input type="text" name="factory_name" value="<?=$company_info['factory_name'];?>" class="form-control" placeholder="Factory Name" aria-label="input">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 d-lg-down-none">Factory Address <span class="text-danger">*</span>
                </label>
                <div class="col-lg-9">
                  <input type="text" name="factory_address" value="<?=$company_info['factory_address'];?>" class="form-control" placeholder="Factory Address" aria-label="input">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 d-lg-down-none">Contact Person</label>
                <div class="col-lg-9">
                  <input type="text" name="factory_contact_person_name" value="<?=$company_info['factory_contact_person_name'];?>" class="form-control force-alphabet" data-allow-dot="true" aria-errormessage="Name" placeholder="Contact Person" aria-label="input">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 d-lg-down-none">Contact Number</label>
                <div class="col-lg-9">
                  <input type="text" name="factory_contact_person_phone_number" value="<?=$company_info['factory_contact_person_phone_number'];?>" class="form-control numeric-validation" data-allow-phone="true" aria-errormessage="Phone Number" placeholder="Phone Number" aria-label="input">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 d-lg-down-none">Factory Details</label>
                <div class="col-lg-9">
                  <textarea rows="3" name="factory_details" class="form-control" placeholder="Enter factory details with production capacity & facilities"><?=$company_info['factory_details'];?></textarea>
                </div>
              </div>
              <!-- <div class="form-group row mb-3 mb-lg-4">
                <label class="col-lg-3">Factory Images</label>
                <div class="col-lg-9">
                  <div class="ekadhik-field">
                    <label for="factoryImages" class="trigger-ekadhik"></label>
                    <input type="file" name="factory_images[]" max="4" accept="image/*" class="ekadhik-input" id="factoryImages" multiple />
                    <ul class="selected-file-list">
                      <li class="order-last flex-grow-1 pb-2">
                        <span class="ekadhik-lebel-text">
                          <i class="fa fa-picture-o text-24 text-muted" aria-hidden="true"></i>
                          <br /> Upload images </span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div> -->
              <div class="text-right">
                <a href="javascript:void(0);" data-id="no" data-toggle="collapse" data-target="#factoryInfo, #factoryInfoToggler" class="btn btn-sm text-business-secondary factory-info">Skip Factory Info</a>
              </div>
            </div>
          </div>
          <div class="biz-card p-3 p-lg-4 mb-1" id="companyAddress">
            <div class="border-bottom pb-2 mb-3 mb-lg-4">
              <h2 class="text-24">
                <span class="mr-1 mt-n05 d-inline-block">
                  <img src="https://b2bmap.com/public/flags/32x32/bd.png" class="img-fluid">
                </span>
                <span><?=$company_info['company_name'];?></span>
              </h2>
            </div>
            <div class="mb-2">
              <div class="form-group row align-items-center">
                <label class="col-lg-3 mb-lg-0">Company Address <span class="text-danger">*</span>
                </label>
                <div class="col-lg-9">
                  <input type="text" value="<?=$company_info['company_address'];?>" name="company_address" value="" class="form-control" placeholder="Enter Company Address">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group row align-items-center">
                  <label class="col-lg-6 mb-lg-0">Zip / Postal Code <span class="text-danger">*</span>
                  </label>
                  <div class="col-lg-6">
                    <input type="text" name="post_code" value="<?=$company_info['post_code'];?>" class="form-control numeric-validation" aria-errormessage="Post Code" placeholder="Zip/Postal Code" aria-label="zip code">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group row align-items-center">
                  <label class="col-lg-4 mb-lg-0">District</label>
                  <div class="col-lg-8">
                    <select name="district_id" id="district_id" class="form-control">
                      <option value="">---- Select ----</option>
                      <?php 

                        $district = $this->sellermodel->get_distric_list($company_info['country_id']);

                        foreach ($district as $key => $v) {
                          if($v['id'] == $company_info['district_id']){
                            $select = 'selected="selected"';
                          }else{
                            $select = '';
                          }
                        
                      ?>
                      <option  <?=$select;?>  value="<?=$v['id'];?>"> <?=$v['name'];?> </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="biz-card p-3 p-lg-4 mb-4 mb-lg-4">
            <div class="row">
              <div class="col-xl-6 border-xl-right mb-4 mb-xl-0">
                <div class="pr-xl-4 border-xl-down-bottom pb-3 pb-xl-0">
                  <h5 class="mb-3 text-md-down-18">Contact Person</h5>
                  <div class="form-group row align-items-center">
                    <label class="col-md-4 mb-md-0">Name <span class="text-danger">*</span>
                    </label>
                    <div class="col-md-8">
                        <div>
                          <input type="text" required name="contact_person" value="<?=$company_info['contact_person'];?>" class="form-control force-alphabet " data-allow-dot="true" placeholder="Full Name" aria-errormessage="Name">
                        </div>
                    </div>
                  </div>
                  <div class="form-group row align-items-center">
                    <label class="col-md-4 mb-md-0" for="designation">Job Title <span class="text-danger">*</span>
                    </label>
                    <div class="col-md-8">
                      <div>
                        <input type="text" required name="designation" value="<?=$company_info['designation'];?>" id="designation" class="form-control force-alphabet" placeholder="Enter Job Title / Designation">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row align-items-center">
                    <label class="col-md-4 mb-md-0" for="mobile">Mobile <span class="text-danger">*</span>
                    </label>
                    <div class="col-md-8">
                      <div>
                        <input type="number" required  name="mobile" value="<?=$company_info['mobile'];?>" id="mobile" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="pl-xl-4">
                  <h5 class="mb-3 text-md-down-18">Company Owner Info</h5>
                  <div class="form-group row align-items-center">
                    <label class="col-md-4 mb-md-0 ">Name <span class="text-danger">*</span>
                    </label>
                    <div class="col-md-8">
                     
                       <div>
                        <input type="text" name="owner_name" value="<?=$company_info['owner_name'];?>" class="form-control force-alphabet" data-allow-dot="true" placeholder="Full Name" aria-errormessage="Name">
                      </div>
                     
                    </div>
                  </div>
                  <div class="form-group row align-items-center">
                    <label class="col-md-4 d-lg-down-none mb-md-0 ">Email <span class="text-danger">*</span>
                    </label>
                    <div class="col-md-8">
                      <div>
                        <input type="email" name="owner_email" value="<?=$company_info['owner_email'];?>" placeholder="Enter Email Address" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row align-items-center">
                    <label class="col-md-4 d-lg-down-none mb-md-0 ">Mobile <span class="text-danger">*</span>
                    </label>
                    <div class="col-md-8">
                      
                        <div class="w-100">
                          <input type="number" name="owner_mobile" id="owner_mobile" value="<?=$company_info['owner_mobile'];?>" class="form-control" aria-errormessage="Phone Number" data-country-code="1" placeholder="Enter Phone Number">
                          <span class="phone-error"></span>
                        </div> <!-- prevent-first-zero numeric-validation-->
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-b2bmap-secondary btn-md-down-small px-5">Save & Update </button>
          </div>
        </form>
      </div>
    </div>
  </div>
