
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Company 
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
          <form role="form" action="<?=site_url('company/edit/'. $info['id']) ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Company Name</label><br>
                          <input type="text" value="<?=$info['company_name'];?>" name="company_name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Company Email</label><br>
                          <input type="text" value="<?=$info['email'];?>" name="email" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Company Address</label><br>
                          <input type="text" value="<?=$info['company_address'];?>" name="company_address" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Company Established</label><br>
                          <input type="text" value="<?=$info['year_of_stablishment'];?>" name="year_of_stablishment" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Business Identification Number</label><br>
                          <input type="text" value="<?=$info['business_identification_number'];?>" name="business_identification_number" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Web Address</label><br>
                          <input type="text" value="<?=$info['web_link'];?>" name="web_link" class="form-control">
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Contact Person</label><br>
                          <input type="text" value="<?=$info['contact_person'];?>" name="contact_person" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Designation</label><br>
                          <input type="text" value="<?=$info['designation'];?>" name="designation" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Mobile</label><br>
                          <input type="text" value="<?=$info['mobile'];?>" name="mobile" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Fax</label><br>
                          <input type="text" value="<?=$info['fax'];?>" name="fax" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="flatOwnerID">Description</label><br>
                          <textarea name="description" class="form-control"><?=$info['description'];?></textarea> 
                        </div>
                    </div>
                    
                </div>

                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Country</label><br>
                          <select name="country_id" class="form-control" id="country_id">
                                <option value="0">---- Select Country ----</option>
                                <?php 
                                   foreach ($contrylist as $key => $v) {
                                    if( $v['id'] == $info['country_id']){
                                      $select = 'selected="selected"';
                                    }else{
                                      $select = '';
                                    }
                                ?>
                                <option <?=$select;?> value="<?=$v['id'];?>"> <?=$v['country_name'];?> </option>
                              <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">District</label><br>
                         <select name="district_id" class="form-control" id="district_id">
                                <option value="0">---- Select Country ----</option>
                                <?php 
                                   foreach ($district as $key => $v) {
                                    if( $v['id'] == $info['district_id']){
                                      $select = 'selected="selected"';
                                    }else{
                                      $select = '';
                                    }
                                ?>
                                <option <?=$select;?> value="<?=$v['id'];?>"> <?=$v['name'];?> </option>
                              <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Post Code</label><br>
                          <input type="text" value="<?=$info['post_code'];?>" name="post_code" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Join Date</label><br>
                          <input type="text" value="<?=$info['join_date'];?>" name="join_date" class="form-control datepicker">
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Company User Type</label><br>
                         
                          <select name="company_user_type" class="form-control">
                                <option value="0">---- Select ----</option>
                                <?php 
                                  $utype = array('Seller', 'Buyer');
                                   foreach ($utype as $key => $v) {
                                    if( $v == $info['company_user_type']){
                                      $select = 'selected="selected"';
                                    }else{
                                      $select = '';
                                    }
                                ?>
                                <option <?=$select;?> value="<?=$v;?>"> <?=$v;?> </option>
                              <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Status</label><br>
                           <select name="status" class="form-control">
                                <option value="0">---- Select ----</option>
                                <?php 
                                  $utype = array('Pending', 'Approve', 'Reject', 'Review');
                                   foreach ($utype as $key => $v) {
                                    if( $v == $info['status']){
                                      $select = 'selected="selected"';
                                    }else{
                                      $select = '';
                                    }
                                ?>
                                <option <?=$select;?> value="<?=$v;?>"> <?=$v;?> </option>
                              <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Category</label><br>
                           <select name="cat_id" class="form-control" id="category_id">
                                <option value="0">---- Select ----</option>
                                <?php 
                                   foreach ($categorylist as $key => $v) {
                                    if( $v['id'] == $info['cat_id']){
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
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Sub Category</label><br>
                           <select name="sub_cat_id" class="form-control" id="sub_category_id">
                                <option value="0">---- Select ----</option>
                                <?php 
                                   foreach ($subcategorylist as $key => $v) {
                                    if( $v['id'] == $info['sub_cat_id']){
                                      $select = 'selected="selected"';
                                    }else{
                                      $select = '';
                                    }
                                ?>
                                <option <?=$select;?> value="<?=$v['id'];?>"> <?=$v['sub_category_name'];?> </option>
                              <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="flatOwnerID">Business Type</label><br>
                            
                           <?php 

                             $type =  $this->bizadminmodel->get_biz_type();
                             
                             foreach ($type as $key => $v) {
                              $selelec_type = explode(',', $info['type']);
                              if( in_array($v['id'], $selelec_type)){
                                $select = 'checked';
                              }else{
                                $select = '';
                              }

                          ?>

                          <div class="form-check-inline mb-2" style="width: 15%;float: left;">
                            <label class="form-check-label">
                              <input <?=$select;?> type="checkbox" name="type[]" value="<?=$v['id'];?>" class="form-check-input business-type-length"> <?=$v['type'];?> </label>
                          </div>

                          <?php } ?>



                        </div>
                    </div>
                   
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="flatOwnerID">About Company</label><br>
                          <textarea name="about_company" class="form-control"><?=$info['about_company'];?></textarea> 
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="flatOwnerID">Main Products</label><br>
                          <input type="text" value="<?=$info['main_product'];?>" name="main_product" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="flatOwnerID">Do you offer after sell services & supports ?</label><br>
                           <?php 
                                if($info['service_support'] == 1){
                                  $yes = 'checked';
                                  $no = '';
                                   $style = '';
                                }else{
                                  $no = 'checked';
                                  $yes = '';
                                  $style = 'style="display: none"';
                                }
                                
                              ?>
                            <div class="mr-3" style="width:15%;float: left;">
                              <label class="form-check-label" for="service_support_yes">
                                <input type="radio" <?=$yes;?> name="service_support" id="service_support_yes" value="1" class="service-support"> Yes </label>
                            </div>
                            <div class="form-check mr-3">
                              <label class="form-check-label" for="service_support_no">
                                <input type="radio" <?=$no;?> name="service_support" id="service_support_no" value="0" class="service-support"> No </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="flatOwnerID">Have a Quality Control Policy ?</label><br>
                           <?php 
                              if($info['quality_control'] == 1){
                                $yes = 'checked';
                                $no = '';
                                $style = '';
                              }else{
                                $no = 'checked';
                                $yes = '';
                                $style = 'style="display: none"';
                              }
                              
                            ?>
                          <div class="mr-3" style="width:15%;float: left;">
                            <label class="form-check-label" for="quality_control_yes">
                              <input type="radio" <?=$yes;?> class="quality-control" value="1" name="quality_control" id="quality_control_yes"> Yes </label>
                          </div>
                          <div class="form-check mr-3">
                            <label class="form-check-label" for="quality_control_no">
                              <input type="radio" <?=$no;?> class="quality-control" value="0" name="quality_control" id="quality_control_no"> No </label>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Factory Name</label><br>
                          <input type="text" value="<?=$info['factory_name'];?>" name="factory_name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Factory Address</label><br>
                          <input type="text" value="<?=$info['factory_address'];?>" name="factory_address" class="form-control">
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Contact Person</label><br>
                          <input type="text" value="<?=$info['factory_contact_person_name'];?>" name="factory_contact_person_name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Contact Number</label><br>
                          <input type="text" value="<?=$info['factory_contact_person_phone_number'];?>" name="factory_contact_person_phone_number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="flatOwnerID">Factory Details</label><br>
                          <textarea name="factory_details" class="form-control"><?=$info['factory_details'];?></textarea> 
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="flatOwnerID">Company Owner Name</label><br>
                          <input type="text" value="<?=$info['owner_name'];?>" name="owner_name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="flatOwnerID">Email</label><br>
                          <input type="text" value="<?=$info['owner_email'];?>" name="owner_email" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="flatOwnerID">Mobile</label><br>
                          <input type="text" value="<?=$info['owner_mobile'];?>" name="owner_mobile" class="form-control">
                          <input type="hidden" value="<?=$info['id'];?>" id="company_id">
                        </div>
                    </div>
                </div>
				
				<div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Company Log</label><br>
                         <input type="file" name="clogo" class="form-control">
						 <br>
						 <?php if(!empty($info['logo'])){ ?>
						  <img src="https://b2bitem.com/upload/company/<?=$info['logo'];?>" width="50">
						  
						  <?php } ?>
						</div>
					</div>
					<div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Company Banner</label><br>
                         <input type="file" name="cbanner" class="form-control">
						 <br>
						 <?php if(!empty($info['banner'])){ ?>
						 <img src="https://b2bitem.com/upload/company/<?=$info['banner'];?>" width="200">
						 <?php } ?>
						</div>
					</div>
				</div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
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
		
		//alert('hello');

        $('#sub_category_id').empty();
          $.ajax({
            type: "GET",
            url: '<?=site_url('company/get_sub_cat_list/');?>'+ cat_id,
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