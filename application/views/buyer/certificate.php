<?php 
  require_once(APPPATH."views/common/company_profile_buyer.php"); 
?>
<div class="panel-body">
    <div id="certificate_list">
       <div class="biz-card p-3 p-lg-4 mb-4">
        <div class="border-bottom mb-3 mb-lg-4">
          <h3 class="text-business-secondary m-0">Manage Certificate</h3>
          <p class="text-muted text-14 mb-2">Manage your certificate in B2bmap.com</p>
        </div>
        <div class="text-center">
          <a href="#" id="certificateadd" class="btn btn-b2bmap-secondary btn-md-down-small px-4">
              <i class="icofont-plus mr-2"></i> Add New Certificate </a>
        </div>
      </div>
      <div class="bg-lg-white border-lg mb-4">
        <div class="bg-white p-3 d-xl-down-none border-bottom">
          <ul class="list-unstyled row mb-0">
            <li class="col-xl-5 text-muted text-normal">Title</li>
            <li class="col-xl-3 text-muted text-normal text-md-center">View</li>
            <li class="col-xl-2 text-muted text-normal text-md-center">Status</li>
            <li class="col-xl-2 text-muted text-normal text-md-center">Action</li>
          </ul>
        </div>
        <ul class="list-unstyled list-with-border-bottom mb-0">
          <?php 
                foreach ($brochurelist as $key => $val) {
					$burl = base_url().'upload/company/certificate/'.$val['certificate'];
            ?>
            <li class="bg-white p-3 border-lg-down mb-4 mb-md-0">
              <div class="row align-items-center">
                <div class="col-md-5 mb-2 mb-md-0">
                  <span class="mr-1 text-strong d-md-none">Title: </span> <?=$val['certification_title'];?>
                  <input type="hidden" id="title_<?=$val['id'];?>" value="<?=$val['certification_title'];?>">
                  <input type="hidden" id="certificate_type_id_<?=$val['id'];?>" value="<?=$val['certificate_type_id'];?>">
                </div>
                <div class="col-md-3 mb-2 mb-md-0 text-md-center">
                  <a href="<?=$burl;?>" target="_blank" class="text-nowrap text-14">
                    <i class="fa fa-search"></i> View Brochure </a>
                </div>
                <div class="col-md-2 mb-2 mb-md-0 text-md-center">
                  <span class="mr-1 text-strong d-md-none">Status: </span>
                  <span class="text-business-secondary"> <?=$val['status'];?> </span>
                </div>
                <div class="col-md-2 pt-3 pt-md-0 border-md-down-top">
                  <div class="text-md-center">

                    <a href="#" onclick="certificateedit(<?=$val['id'];?>)" class="btn btn-sm py-0 btn-b2bmap-secondary text-nowrap">
                      <i class="fa fa-edit"></i> Edit </a>

                    <a href="#" class="btn btn-sm py-0 btn-danger text-nowrap">
                    <!-- <a href="javascript:deleteItem('https://b2bmap.com/myzone/brochure/delete/2773', 'Brochure')" class="btn btn-sm py-0 btn-danger text-nowrap"> -->
                      <i class="fa fa-remove"></i> Delete </a>
                  </div>
                </div>
              </div>
            </li>
            <?php } ?>
        </ul>
      </div>
    </div>
    <div class="theme-space-box theme-block" id="certificate_add" style="display: none;">
      <div class="border-bottom mb-3 mb-lg-4">
        <h3 class="text-business-secondary m-0 certificate">Add Certificate</h3>
        <p class="text-muted text-lg-down-14 mb-2 mb-lg-3">Please provide information about your certificates. It helps you to gain potential buyer's trust.</p>
      </div>
      <form method="post" action="<?=site_url('buyer/certificate_save');?>" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id" value="0">
        <div class="form-group row">
          <label for="certificate_type_id" class="col-md-4 control-label d-md-down-none">Type of Certification <span class="text-danger">*</span>
          </label>
          <div class="col-md-8">
            <select name="certificate_type_id" id="certificate_type_id" class="form-control">
              <option value="">-- Select Certification Type --</option>
              <?php foreach ($certificateType as $key => $v) { ?>
              <option value="<?=$v['id'];?>"><?=$v['name'];?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="certification_title" class="col-md-4 control-label d-md-down-none">Name <span class="text-danger">*</span>
          </label>
          <div class="col-md-8">
            <input type="text" name="certification_title" id="certification_title" class="form-control" placeholder="Enter Certification Name">
          </div>
        </div>
        <div class="form-group row">
          <label for="certification_image" class="col-md-4 control-label d-md-down-none">Upload Certificate <span class="text-danger">*</span>
          </label>
          <div class="col-md-8">
            <div class="custom-file">
              <input type="file" name="certification_image" id="certification_image" accept="image/*,.pdf" class="custom-file-input custom-file-input-sm">
              <label class="custom-file-label custom-file-label-sm">Choose file</label>
            </div>
          </div>
        </div>
        <div class="text-center mt-4 pt-lg-2 mb-2">
          <button type="submit" class="btn btn-b2bmap-secondary btn-md-down-small px-5 "> Submit Certificate </button>
          <button type="button" id="certificate_back" class="btn btn-b2bmap-primary px-5 btn-md-down-small">Back </button>
        </div>
      </form>
    </div>

  </div>

  <script type="text/javascript">
$(document).ready(function(){

    $("#certificateadd").click(function(){
           $(".certificate").text('Add Certificate');
            $("#certificate_list").attr("style","display:none;");
            $("#certificate_add").removeAttr('style');
            $("#id").val(0);   
            $("#certification_title").val('');
            $("#certificate_type_id").val('');
        });

        $("#certificate_back").click(function(){
          $("#id").val(0);
            $(".certificate").text('Add Certificate');
            $("#certificate_list").removeAttr("style");
            $("#certificate_add").attr("style","display:none;");  
            $("#certification_title").val('');
            $("#certificate_type_id").val('');
        });

  });
    
    function certificateedit(id){
      $("#id").val(id);
      $("#certification_title").val($("#title_"+id).val());
      $("#certificate_type_id").val($("#certificate_type_id_"+id).val());
      $(".certificate").text('Edit Certificate');
      $("#certificate_list").attr("style","display:none;");
      $("#certificate_add").removeAttr('style');

    }
  </script>