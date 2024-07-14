<?php 
  require_once(APPPATH."views/common/company_profile_buyer.php"); 
?>

<div class="panel-body">
  <div id="brochure_list">
    <div class="biz-card p-4 mb-4">
      <div class="border-bottom mb-4">
        <h3 class="text-business-secondary m-0">Manage Product Brochures</h3>
        <p class="text-muted text-14">Manage your brochures at B2bmap.com</p>
      </div>
      <div class="text-center">
        <a href="#" id="addbrochure" class="btn btn-b2bmap-secondary btn-md-down-small px-4">
          <i class="icofont-plus mr-2"></i> Add New Brochure </a>
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
				$burl = base_url().'upload/company/brochure/'.$val['brochure'];
        ?>
        <li class="bg-white p-3 border-lg-down mb-4 mb-md-0">
          <div class="row align-items-center">
            <div class="col-md-5 mb-2 mb-md-0">
              <span class="mr-1 text-strong d-md-none">Title: </span> <?=$val['title'];?>
              <input type="hidden" id="title_<?=$val['id'];?>" value="<?=$val['title'];?>">
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

                <a href="#" onclick="brochureedit(<?=$val['id'];?>)" class="btn btn-sm py-0 btn-b2bmap-secondary text-nowrap">
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
  <div class="theme-space-box theme-block" id="brochure_add" style="display: none;">
    <div class="border-bottom mb-3 mb-lg-4">
      <h3 class="text-business-secondary m-0" id="brochuretitle">Add Brochure</h3>
      <p class="text-muted text-14"> Provide complete information about your product or services, since it helps you to increase your rankings in our search results. </p>
    </div>
    <form method="post" action="<?=site_url('buyer/brochure_save');?>" enctype="multipart/form-data">
      <input type="hidden" name="id" id="id" value="0">
      <div class="form-group row mb-3 mb-lg-4">
        <label class="col-lg-4 col-xl-3 text-muted">Brochure Title <span class="text-red">*</span>
        </label>
        <div class="col-lg-8 col-xl-9">
          <input type="text" name="title" id="title" value="" placeholder="Enter Brochure Title" class="form-control">
        </div>
      </div>
      <div class="form-group row mb-3 mb-lg-4">
        <label class="col-lg-4 col-xl-3 text-muted">Select Brochure <span class="text-red">*</span>
        </label>
        <div class="col-lg-8 col-xl-9">
          <div class="custom-file">
            <input type="file" name="brochure" id="brochure" accept="image/*,.pdf" class="custom-file-input custom-file-input-sm">
            <label class="custom-file-label custom-file-label-sm">Choose file</label>
          </div>
        </div>
      </div>
      <div class="text-center mt-4 mb-2">
        <button type="submit" class="btn btn-b2bmap-secondary px-5 btn-md-down-small">Submit Brochure </button>
        <button type="button" id="brochure_back" class="btn btn-b2bmap-primary px-5 btn-md-down-small">Back </button>
      </div>
    </form>
  </div>

</div>
<br>
