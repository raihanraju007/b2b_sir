<?php 
  require_once(APPPATH."views/common/company_profile.php"); 
?>
<div class="panel-body">
  <div id="video_list">
            <div class="mb-3">
              <div class="bg-white px-3 py-3 border mb-3 text-center text-lg-right">
                <a href="#" id="addnewvideo" class="btn btn-b2bmap-secondary btn-md-down-small px-4">
              <i class="icofont-plus mr-2"></i> Add New Video </a>
              </div>
              <div>
                <h3>Manage Company Video</h3>
              </div>
            </div>
            <div class="bg-lg-white border-lg mb-4">
              <div class="bg-white p-3 d-xl-down-none border-bottom">
                <ul class="list-unstyled row mb-0">
                  <li class="col-xl-3 text-muted text-normal">Video</li>
                  <li class="col-xl-5 text-muted text-normal">Title</li>
                  <li class="col-xl-2 text-muted text-normal">Status</li>
                  <li class="col-xl-2 text-muted text-normal text-center">Action</li>
                </ul>
              </div>
              <ul class="list-unstyled list-with-border-bottom mb-0">
                <?php 
                  foreach ($brochurelist as $key => $val) {
                 ?>
                <li class="bg-white p-3 border-lg-down mb-4 mb-md-0">
                  <div class="row align-items-center">
                    <div class="col-md-3 mb-2 mb-md-0">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?=$val['link'];?>" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="col-md-5 mb-2 mb-md-0">
                      <p class="d-block text-medium text-18 mb-2"><?=$val['title'];?></p>
                      <time class="d-block text-muted mb-1">
                        <i class="fa fa-clock-o opacity-5 mr-1"></i> Posted On: 27 May 2023 </time>
                        <input type="hidden" id="title_<?=$val['id'];?>" value="<?=$val['title'];?>">
                        <input type="hidden" id="link_<?=$val['id'];?>" value="<?=$val['link'];?>">
                    </div>
                    <div class="col-md-2 mb-2 mb-md-0">
                      <span class="text-business-secondary"> <?=$val['status'];?> </span>
                    </div>
                    <div class="col-md-2 pt-3 pt-md-0 border-md-down-top">
                      <div class="d-flex flex-wrap mx-n1 justify-content-md-center">
                        <div class="px-1 my-1">
                         <a href="#" onclick="videoEdit(<?=$val['id'];?>)" class="btn btn-sm py-0 btn-b2bmap-secondary text-nowrap">
                           <i class="fa fa-edit"></i> Edit </a>
                        </div>
                        <div class="px-1 my-1">
                          <a href="#" class="btn btn-sm py-0 btn-danger text-nowrap">
                            <i class="fa fa-remove"></i> Delete </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>
			
			<div class="biz-card p-3 p-lg-4" id="video_add" style="display: none;">
              <div class="border-bottom mb-3 mb-lg-4">
                <h3 class="text-business-secondary m-0 certificate">Add New Video</h3>
                <p class="text-muted text-14"> Provide complete information about your product or services, since it helps you to increase your rankings in our search results. </p>
              </div>
              <form action="<?=site_url('seller/video_save');?>" method="POST">
                <input type="hidden" name="id" id="id" value="0">
                <div class="form-group row mb-3 mb-lg-4">
                  <label class="col-lg-4 col-xl-3 text-muted" for="title">Video Title <span class="text-red">*</span>
                  </label>
                  <div class="col-lg-8 col-xl-9">
                    <input type="text" name="title" id="title" placeholder="Enter Company Video Title" class="form-control">
                  </div>
                </div>
                <div class="form-group row mb-3 mb-lg-4">
                  <label class="col-lg-4 col-xl-3 text-muted" for="link">Youtube URL <span class="text-red">*</span>
                  </label>
                  <div class="col-lg-8 col-xl-9">
                    <input type="text" name="link" value="" id="link" placeholder="Enter Youtube Video URL" class="form-control url-validation">
                  </div>
                </div>
                <div class="text-center mt-4 mb-2">
                  <button type="submit" class="btn btn-b2bmap-secondary btn-md-down-small px-5">Submit Video </button>
                  <button type="button" id="video_back" class="btn btn-b2bmap-primary px-5 btn-md-down-small">Back </button>
                </div>
              </form>
            </div>
			
			
          </div>


  <script type="text/javascript">
$(document).ready(function(){

    $("#addnewvideo").click(function(){
           $(".certificate").text('Add Video');
            $("#video_list").attr("style","display:none;");
            $("#video_add").removeAttr('style');
            $("#id").val(0);   
            $("#certification_title").val('');
            $("#certificate_type_id").val('');
        });

        $("#video_back").click(function(){
          $("#id").val(0);
            $(".certificate").text('Add Video');
            $("#video_list").removeAttr("style");
            $("#video_add").attr("style","display:none;");  
            $("#certification_title").val('');
            $("#certificate_type_id").val('');
        });

  });
    
    function videoEdit(id){
      $("#id").val(id);
      $("#title").val($("#title_"+id).val());
      $("#link").val($("#link_"+id).val());
      $(".certificate").text('Edit Video');
      $("#video_list").attr("style","display:none;");
      $("#video_add").removeAttr('style');

    }
  </script>