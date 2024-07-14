
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Product 
      <small>Edit</small>
    </h1>
  
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <div id="messages"></div>

        <?php if($this->session->flashdata('success')): ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php elseif($this->session->flashdata('error')): ?>
          <div class="alert alert-error alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php endif; ?>


        <div class="box">
          <!-- /.box-header -->
          <form role="form" action="<?=site_url('product/edit/'. $pinfo['id']) ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Company  <a class="btn btn-primary btn-xs" href="<?=site_url('company/edit/'. $pinfo['company_id']) ?>">Update Company Profile</a></label><br>
                          <select class="form-control" id="company_id" name="company_id">
                            <option value="<?=$pinfo['company_id'];?>"><?=$pinfo['company_name'];?></option>
                            <!--
                            <?php foreach ($company as $k => $v){ 
                               if($v['id'] == $pinfo['company_id']){
                                  $selected = 'selected="selected"';
                               }else{
                                $selected = '';
                               }
                              ?>
                              <option <?= $selected;?> value="<?php echo $v['id'] ?>"><?php echo $v['company_name']; ?></option>
                            <?php } ?>
                            -->
                          </select>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID" style="width: 100%;">Category 
                            <?php if( $pinfo['company_id'] > 0){ ?>
                            <button data-toggle="modal" data-target="#addEditWord" class="btn btn-danger btn-xs" style="float: right;margin-top: -10px;" type="button">Assign Category</button>
                            <?php } ?>
                          </label><br>
                          <select class="form-control" id="category_id" name="category_id">
                            <option value="0">----Select----</option>
                             <?php foreach ($com_cat as $k => $v){ 
                               if($v['id'] == $pinfo['category_id']){
                                  $selected = 'selected="selected"';
                               }else{
                                $selected = '';
                               }
                              ?>
                              <option <?= $selected;?>  value="<?php echo $v['id'] ?>"><?php echo $v['category_name']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                    </div>
                </div>

               
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Product Name</label><br>
                          <input type="text" value="<?=$pinfo['product_name'];?>" name="product_name" class="form-control">
                        </div>
                    </div>
                   <div class="col-md-6">
                         <div class="form-group">
                          <label for="flatOwnerID">Sub Category</label><br>
                          <select  class="form-control" id="sub_category_id" name="sub_category_id">
                            <option value="">----Select----</option>
                            <?php 
							
							$sub_cat_list = $this->bizadminmodel->get_com_sub_cat_list($pinfo['category_id'], $pinfo['company_id']);
							foreach ($sub_cat_list as $k => $v){ 
                               if($v['id'] == $pinfo['sub_category_id']){
                                  $selected = 'selected="selected"';
                               }else{
                                $selected = '';
                               }
                              ?>
                              <option <?= $selected;?>  value="<?php echo $v['id'] ?>"><?php echo $v['sub_category_name']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Product Model</label><br>
                          <input type="text" value="<?=$pinfo['model_no'];?>" name="model_no" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Product standard</label><br>
                          <input type="text" value="<?=$pinfo['standard'];?>" name="standard" class="form-control">
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Product Price</label><br>
                          <input type="text" value="<?=$pinfo['price'];?>" name="price" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Product Qty</label><br>
                          <input type="text" value="<?=$pinfo['min_order_qty'];?>" name="min_order_qty" class="form-control">
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Product Code</label><br>
                          <input type="text" value="<?=$pinfo['product_code'];?>" name="product_code" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Product Unit</label><br>
                          <select  class="form-control" id="unit_id" name="unit_id">
                            <option value="0">----Select----</option>
                             <?php foreach ($unit as $k => $v){ 
                               if($v['id'] == $pinfo['unit_id']){
                                  $selected = 'selected="selected"';
                               }else{
                                $selected = '';
                               }
                              ?>
                              <option <?= $selected;?>  value="<?php echo $v['id'] ?>"><?php echo $v['name']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Product Certificate</label><br>
                          <input type="text" value="<?=$pinfo['certificate'];?>" name="certificate" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Product Country</label><br>
                          <select  class="form-control select_group" id="country_id" name="country_id">
                            <option value="0">----Select----</option>
                             <?php foreach ($country as $k => $v){ 
                               
                               if($v['id'] == $pinfo['country_id']){
                                  $selected = 'selected="selected"';
                               }else{
                                $selected = '';
                               }

                              ?>
                              <option <?= $selected;?> value="<?php echo $v['id'] ?>"><?php echo $v['country_name']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                    </div>
                </div>
				
				<div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Product Usage</label><br>
                          <textarea name="product_usage" class="form-control"><?=$pinfo['product_usage'];?></textarea>
                        </div>
                    </div>
					<div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Product Keywords</label><br>
                          <textarea name="product_keywords" class="form-control"><?=$pinfo['product_keywords'];?></textarea>
                        </div>
                    </div>
                </div>
				
				<div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="flatOwnerID">Short Description</label><br>
                          <input type="text" value="<?=$pinfo['short_description'];?>" name="short_description" class="form-control">
                        </div>
                    </div>
                </div>
				
                 <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="flatOwnerID">Product Description</label><br>
                          <textarea name="product_description" class="form-control"><?=$pinfo['product_description'];?></textarea>
                          
                        </div>
                    </div>
                   
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="flatOwnerID">Product Video Url</label><br>
                         <input type="text" value="<?=$pinfo['video'];?>" name="video" class="form-control">
                          
                        </div>
                    </div>
                   
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Product Image</label><br>
                         <input type="file" name="productImg" class="form-control">
                          <br>
						  <?php if(!empty($pinfo['product_image'])){ ?>
							<img style="width:150px;" src="https://b2bitem.com/upload/product/<?=$pinfo['product_image'];?>">
						  <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">

                          <?php 

                             if($pinfo['status'] == 'Active'){
                                $selected = 'selected="selected"';
                             }else{
                              $selected = '';
                             }

                             if($pinfo['status'] == 'Inactive'){
                                $inselected = 'selected="selected"';
                             }else{
                              $inselected = '';
                             }

                          ?>

                          <label for="flatOwnerID">Status</label><br>
                          <select required class="form-control" id="status" name="status">
                          <option value="">----Select----</option>
                            <option <?=$selected ;?> value="Active">Active</option>
                            <option <?=$inselected ;?> value="Inactive">Inactive</option>
                        </select>
                          
                        </div>
                    </div>
                   
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <div id="gallery" style="width: 40%; margin: 0 auto;">
                            <label for="flatOwnerID">Product Gallery</label><br>
                            <input style="width: 60%;float: left;margin-right: 10px;" type="file" name="pg[]" class="form-control">
                            <button type="button" class="btn btn-warning" id="add_more">Add More</button>

                            <div id="gprodut"></div>



                          </div>
                        </div>
						<h4>Product Gallery</h4>
						<?php foreach($image as $val){ ?>
							
							<img style="width:300px;float:left; margin:10px;" src="https://b2bitem.com/upload/product/<?=$val['product_pic']?>"> 
							
						<?php } ?>
                    </div>
                   
                </div>

               
              

                

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <?php 
                 // echo '<pre>';print_r($pinfo);exit;
                    if($pinfo['is_feture_product'] == 1){
                      $select = 'checked';
                      $value_product_type = 1;
                    }else{
                      $select = '';
                      //$value_product_type = 0;
                    }

                ?>

                <label style="font-size: 16px;">Is Feture Product 
                  <input <?=$select;?> style="margin-left: 10px;" type="checkbox" name="is_feture_product" value="1" class="form-check-input business-type-length"></label><br>
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- col-md-12 -->
    </div>
    <!-- /.row -->
    

  </section>
  <!-- /.content -->



<!-- create brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="addEditWord">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="formtitle">Assign Category</h4>
      </div>

    
        <div class="modal-body">

          
          <div class="form-group">
            <label for="name">Category Name</label>
            <!--input required type="text" class="form-control" id="category_name" name="category_name"  autocomplete="off"-->
            <select id="assing_cat_id" required="required" class="form-control">
                  <option value="0">---- Select Category ----</option>
                  <?php 
                     $cat_list =  $this->bizadminmodel->get_cat_list();
                     foreach ($cat_list as $key => $v) {
                  ?>
                  <option value="<?=$v['id'];?>"> <?=$v['category_name'];?> </option>
                <?php } ?>
              </select>
          </div>

          <div class="form-group">
            <label for="name">Sub Category Name</label>
            <select id="assing_sub_cat_id" class="form-control">
                  <option value="0">----Select Sub Category ----</option>
              </select>
          </div>

          <div class="form-group">
            <label for="name">Business Category</label>
             <select  id="bus_cat_id" class="form-control">
                  <option value="0">----Business Category----</option>
                  <?php 
                     $bus_cat_list =  $this->bizadminmodel->get_business_category();
                     foreach ($bus_cat_list as $key => $v) {
                  ?>
                  <option value="<?=$v['id'];?>"> <?=$v['type'];?> </option>
                <?php } ?>
              </select>
          </div>

          
        
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" id="assing_cat" class="btn btn-primary" id="submit">Save</button>
        </div>

      


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<script type="text/javascript">
  $(document).ready(function() {

    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
    });

    $(".select_group").select2();

    $("#cmsNav").addClass('active');
    $("#mainAccountNav").addClass('active');

    $(".select2.select2-container.select2-container--default.select2-container--below.select2-container--focus").removeAttr("style");

    var style ="width: 522.5px;";
    $(".select2.select2-container.select2-container--default.select2-container--below.select2-container--focus").attr("style", style);

  });
</script>

<style type="text/css">
  .select2-container .select2-selection--single {
    height: 34px;
  }
</style>


  <script type="text/javascript">
    $(document).ready(function() {
    

      $("#paymentreport").addClass('active');

      $("body").on("change", "#company_id", function() {

        var com_id = $(this).val();

        $('#category_id').empty();

          $.ajax({
            type: "GET",
            url: '<?=site_url('product/get_com_cat_list/');?>'+ com_id,
            success: function(GetData) {
              $('#category_id').append(' <option value = ""> --Select Category-- </option>');
                $.each($.parseJSON(GetData), function(i, obj) {
                    $('#category_id').append($(' <option> ', {
                      value: obj.id, text: obj.name
                    }));
                });
            }
          });
      });


        $("body").on("change", "#category_id", function() {

        var cat_id = $(this).val();
        var company_id = $("#company_id").val();

        $('#sub_category_id').empty();
          $.ajax({
            type: "GET",
            url: '<?=site_url('product/get_com_sub_cat_list/');?>'+ cat_id +'/' + company_id,
            success: function(GetData) {
              $('#sub_category_id').append(' <option value = ""> --Select Sub Category-- </option>');
                $.each($.parseJSON(GetData), function(i, obj) {
                    $('#sub_category_id').append($(' <option> ', {
                      value: obj.id, text: obj.name
                    }));
                });
            }
          });
      });

      

    $("body").on("change", "#assing_cat_id", function() {

      var cat_id = $(this).val();

      $('#assing_sub_cat_id').empty();
        $.ajax({
          type: "GET",
          url: '<?=site_url('company/get_sub_cat_list/');?>'+ cat_id,
          success: function(GetData) {
            $('#assing_sub_cat_id').append(' <option value = ""> --Select Sub Category-- </option>');
              $.each($.parseJSON(GetData), function(i, obj) {
                  $('#assing_sub_cat_id').append($(' <option> ', {
                    value: obj.id, text: obj.name
                  }));
              });
          }
        });
    });


    $("#assing_cat").click(function(){

          var company_id = $("#company_id").val();
          var assing_cat_id = $("#assing_cat_id").val();
          var assing_sub_cat_id = $("#assing_sub_cat_id").val();
          var bus_cat_id = $("#bus_cat_id").val();


          if(assing_cat_id == 0){
            alert('Please select category.');
            return false;
          }

          if(assing_sub_cat_id == 0){
            alert('Please select category.');
            return false;
          }

          if(bus_cat_id == 0){
            alert('Please Business category.');
            return false;
          }

           if(company_id == 0){
            alert('Please company category.');
            return false;
          }

          var dataString = 'company_id='+ company_id + '&assing_cat_id=' + assing_cat_id + '&assing_sub_cat_id='+assing_sub_cat_id + '&bus_cat_id=' + bus_cat_id;

          $.ajax({
            type: "POST",
            url: '<?=site_url('product/assing_compnay_category/');?>',
            data: dataString,
            success: function(response) {
                  
               if( response > 0){

                  $('#addEditWord').modal('hide');
                  get_compnay_category(company_id);
               }else{
                  alert('Can not assing. please try again.');

               }

            }
          });


    });





        $("body").on("click", "#add_more", function() {


          var current_row = '<div style="margin:10px 0px;" class="pgaralyAdd">\
            <input type="file" style="width: 60%;float: left;margin-right: 10px;" class="form-control" name="pg[]">\
            <button type="button" class="btn btn-danger remove">Remove</button></div>';
          

          //var product_box = $(this).parent().parent().parent();

          $("#gprodut").append(current_row);

        });


      $('body').on('click', '.remove', function() {

        var product_box = $(this).parent();

        product_box.remove();

      });
      
   

    });


    function get_compnay_category(company_id){

         var com_id = company_id;

        $('#category_id').empty();

          $.ajax({
            type: "GET",
            url: '<?=site_url('product/get_com_cat_list/');?>'+ com_id,
            success: function(GetData) {
              $('#category_id').append(' <option value = ""> --Select Category-- </option>');
                $.each($.parseJSON(GetData), function(i, obj) {
                    $('#category_id').append($(' <option> ', {
                      value: obj.id, text: obj.name
                    }));
                });
            }
          });

    }

   
  </script>