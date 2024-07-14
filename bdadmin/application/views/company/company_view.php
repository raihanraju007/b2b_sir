<style type="text/css">
  #minfo{
    width: 100%;
    border-collapse: collapse;
    border:1px solid #eee;
  }
  #minfo tr th,td{
    padding: 10px;
    border:1px solid #eee;
  }
  .cat_list{
    margin-bottom: 10px;
  }
</style>
<?php $cid = $info['id']; ?>

    <section class="content-header">
      <h1>
       Company
        <small>Details</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">

          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
                <form method="post" action="<?=site_url('company/approve_compnay');?>">
                <table id="minfo" border="1">
                    <tr>
                      <th colspan="4"> <h2 style="text-align: center;"><?=$info['company_name']?></h2> </th>
                    </tr>
                    <tr>
                      <th>Owner Name</th>
                      <td><?=$info['owner_name']?></td>
                      <th>O.Email</th>
                      <td><?=$info['owner_email']?></td>
                    </tr>
                    <tr>
                      <th>O.Mobile</th>
                      <td><?=$info['owner_mobile']?></td>
                      <th>Company Address</th>
                      <td><?=$info['company_address']?></td>
                    </tr>
                    <tr>
                      <th>B.I.Number</th>
                      <td><?=$info['business_identification_number']?></td>
                      <th>Website</th>
                      <td><?=$info['web_link']?></td>
                    </tr>
                    
                    <tr>
                      <th>Contact Person</th>
                      <td><?=$info['contact_person']?></td>
                      <th>designation</th>
                      <td><?=$info['designation']?></td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td><?=$info['email']?></td>
                      <th>Mobile</th>
                      <td><?=$info['mobile']?></td>
                    </tr>

                    <tr>
                      <th>Description</th>
                      <td colspan="3"><?=$info['description']?></td>
                    </tr>

                    <tr>
                      <th>Country</th>
                      <td> 
                          <?php 
                            echo $this->bizadminmodel->get_country_name($info['country_id']);
                          ?>
                      </td>
                      <th>District</th>
                      <td>
                         <?php 
                            echo $this->bizadminmodel->get_district_name($info['district_id']);
                          ?>
                      </td>
                    </tr>

                    <tr>
                      <th>Post Code</th>
                      <td><?=$info['post_code']?></td>
                      <th>Fax</th>
                      <td><?=$info['fax']?></td>
                    </tr>

                    <tr>
                      <th>Reg.Date</th>
                      <td><?=$info['join_date']?></td>
                      <th>Stablishment</th>
                      <td><?=$info['year_of_stablishment']?></td>
                    </tr>

                    <tr>
                      <th>Total Employee</th>
                      <td><?=$info['num_of_employee']?></td>
                      <th>Company Type</th>
                      <td><?=$info['company_user_type']?></td>
                    </tr>

                    <tr>
                      <th>Business Type</th>
                      <td>
                        <?php 
                          $type = $this->bizadminmodel->get_business_type_name($info['type']);
                          
                          foreach ($type as $key => $v) {
                            echo $v['type'] . ', ';
                          }
                        ?>
                      </td>
                      <th>About Comaony</th>
                      <td><?=$info['about_company']?></td>
                    </tr>

                    <tr>
                      <th>Business Category</th>
                      <td> 
                          <?php 
                            echo $this->bizadminmodel->get_category_name($info['cat_id']);
                          ?>
                      </td>
                      <th>Sub Category</th>
                      <td>
                         <?php 
                            echo $this->bizadminmodel->get_sub_category_name($info['sub_cat_id']);
                          ?>
                      </td>
                    </tr>

                     <tr>
                      <th>Service Support</th>
                      <td><?=$info['service_support']?></td>
                      <th>After Sales Service</th>
                      <td><?=$info['after_sales_service']?></td>
                    </tr>

                     <tr>
                      <th>Quality Control</th>
                      <td><?=$info['quality_control']?></td>
                      <th>Quality Control Policy</th>
                      <td><?=$info['quality_control_policy']?></td>
                    </tr>

                     <tr>
                      <th>Factory Name</th>
                      <td colspan="3"><?=$info['factory_name']?></td>
                    </tr>
                     <tr>
                      <th>F.C. Person Name</th>
                      <td><?=$info['factory_contact_person_name']?></td>
                      <th>Factory Address</th>
                      <td><?=$info['factory_address']?></td>
                    </tr>
                     <tr>
                      <th>F.C.P Mobile</th>
                      <td><?=$info['factory_contact_person_phone_number']?></td>
                      <th>Factory Details</th>
                      <td><?=$info['factory_details']?></td>
                    </tr>

                     <tr>
                      <th>Certification File</th>
                      <td>
                        <?php 
                        if(!empty($info['certification_file'])){
                        $baseurl = str_replace('bdadmin', 'upload', base_url()) . 'company/'.$info['certification_file'];
                        ?>
                        <a class="btn btn-danger" target="_blank" href="<?=$baseurl;?>">View</a>
                        <?php } ?>
                      </td>
                      <th>Business License</th>
                      <td>
                         <?php 
                         if(!empty($info['business_license'])){
                        $baseurl = str_replace('bdadmin', 'upload', base_url()) . 'company/'.$info['business_license'];
                        ?>
                        <a class="btn btn-danger" target="_blank" href="<?=$baseurl;?>">View</a>
                      <?php } ?>
                    </tr>

                    <tr>
                      <th>Telephone Bill</th>
                      <td>
                        <?php 
                        if(!empty($info['telephone_bill'])){
                        $baseurl = str_replace('bdadmin', 'upload', base_url()) . 'company/'.$info['telephone_bill'];
                        ?>
                        <a class="btn btn-danger" target="_blank" href="<?=$baseurl;?>">View</a>
                        <?php } ?>
                      </td>
                      <th>Bank Statement</th>
                      <td>
                         <?php 
                         if(!empty($info['bank_statement'])){
                        $baseurl = str_replace('bdadmin', 'upload', base_url()) . 'company/'.$info['bank_statement'];
                        ?>
                        <a class="btn btn-danger" target="_blank" href="<?=$baseurl;?>">View</a>
                      <?php } ?>
                    </tr>

                    <tr>
                      <th>Status</th>
                      <td><?=$info['status']?></td>
                      <th>Verify</th>
                      <td><?=$info['verify']?></td>
                    </tr>
                    
                      <tr>
                        <th>Country</th>
                      
                      <td colspan="3">
                          <select name="country_id" class="form-control" id="country_id" style="width: 30%;float: left;margin-right: 10px;">
                                <option value="0">---- Select Country ----</option>
                                <?php 
                                   $country =  $this->bizadminmodel->get_country_list_active();
                                   foreach ($country as $key => $v) {
                                    if( $v['id'] == $info['country_id']){
                                      $select = 'selected="selected"';
                                    }else{
                                      $select = '';
                                    }
                                ?>
                                <option <?=$select;?> value="<?=$v['id'];?>"> <?=$v['country_name'];?> </option>
                              <?php } ?>
                            </select>
                      </td>
                    </tr>
                     <tr>
                        <th>Service Category</th>
                      
                      <td colspan="3">
                          <select name="service_cat_id" id="service_cat_id" required="required" class="form-control category_id" style="width: 30%;float: left;margin-right: 10px;">
                                <option value="0">---- Select Service Category ----</option>
                                <?php 
                                   $service_cat_list =  $this->bizadminmodel->get_service_cat_list();
                                   foreach ($service_cat_list as $key => $v) {
                                    if( $v['id'] == $serviceassigncompany['service_category_id']){
                                      $select = 'selected="selected"';
                                    }else{
                                      $select = '';
                                    }
                                ?>
                                <option <?=$select;?> value="<?=$v['id'];?>"> <?=$v['s_category_name'];?> </option>
                              <?php } ?>
                            </select>
                            
                            <select name="sub_service_cat_id" id="sub_service_cat_id" required="required" class="form-control sub_cat_id" style="width: 30%;float: left;margin-right: 10px;">
                               <option value="0"> -- Select Sub Service Category --</option>
                                <?php 

                                if(!empty($serviceassigncompany['sub_service_category_id']) and $serviceassigncompany['sub_service_category_id'] > 0){

                                 $sub_service_cat_list =  $this->bizadminmodel->get_sub_service_cat_list($serviceassigncompany['service_category_id']);
                                 foreach ($sub_service_cat_list as $key => $v) {
                                    if( $v['id'] == $serviceassigncompany['sub_service_category_id']){
                                      $select = 'selected="selected"';
                                    }else{
                                      $select = '';
                                    }

                                ?>
                                <option <?=$select;?> value="<?=$v['id'];?>"> <?=$v['s_sub_category_name'];?> </option>

                              <?php }} ?>
                            </select>
                      </td>
                    </tr>
                      <tr>
                        <th> Product Category</th>
                      
                      <td colspan="3">
                        <div id="cat_row">

                        <?php 
                            if(!empty($assigncompany)){
                              $j=1;
                              foreach ($assigncompany as $key => $com) {
                               

                        ?>  

                        <div class="cat_list" id="section_<?=$j;?>">
                          <select name="cat_id[]" required="required" class="form-control category_id" style="width: 30%;float: left;margin-right: 10px;">
                                <option value="0">---- Select Category ----</option>
                                <?php 
                                   $cat_list =  $this->bizadminmodel->get_cat_list();
                                   foreach ($cat_list as $key => $v) {
                                    if( $v['id'] == $com['category_id']){
                                      $select = 'selected="selected"';
                                    }else{
                                      $select = '';
                                    }
                                ?>
                                <option <?=$select;?> value="<?=$v['id'];?>"> <?=$v['category_name'];?> </option>
                              <?php } ?>
                            </select>
                            
                            <select name="sub_cat_id[]" required="required" class="form-control sub_cat_id" style="width: 30%;float: left;margin-right: 10px;">
                               <option value="0"> -- Select Subcategory --</option>
                                <?php 

                                if(!empty($com['sub_category_id']) and $com['sub_category_id'] > 0){

                                 $sub_cat_list =  $this->bizadminmodel->get_sub_cat_list($com['category_id']);
                                 foreach ($sub_cat_list as $key => $v) {
                                    if( $v['id'] == $com['sub_category_id']){
                                      $select = 'selected="selected"';
                                    }else{
                                      $select = '';
                                    }

                                ?>
                                <option <?=$select;?> value="<?=$v['id'];?>"> <?=$v['sub_category_name'];?> </option>

                              <?php }} ?>
                            </select>
                            

                            <select name="bus_cat_id[]" required="required" class="form-control bus_cat_id" style="width: 20%;float: left;margin-right: 10px;">
                                <option value="0">Business Category</option>
                                <?php 
                                   $bus_cat_list =  $this->bizadminmodel->get_business_category();
                                   foreach ($bus_cat_list as $key => $v) {
                                    if( $v['id'] == $com['bus_category_id']){
                                      $select = 'selected="selected"';
                                    }else{
                                      $select = '';
                                    }
                                   
                                ?>
                                <option <?=$select;?> value="<?=$v['id'];?>"> <?=$v['type'];?> </option>
                              <?php } ?>
                            </select>
                            <?php if($j==1){?>
                            <button type="button" class="btn btn-warning" id="add_more">Add More</button>
                            <?php }else{ ?>
                              <button type="button" class="btn btn-danger remove">Remove</button>
                            <?php } ?>
                          </div>

                      <?php $j++; }}else{ ?>

                        <div class="cat_list" id="section_1">
                          <select name="cat_id[]" required="required" class="form-control category_id" style="width: 30%;float: left;margin-right: 10px;">
                                <option value="0">---- Select Category ----</option>
                                <?php 
                                   $cat_list =  $this->bizadminmodel->get_cat_list();
                                   foreach ($cat_list as $key => $v) {
                                    if( $v['id'] == $info['cat_id']){
                                      $select = 'selected="selected"';
                                    }else{
                                      $select = '';
                                    }
                                ?>
                                <option <?=$select;?> value="<?=$v['id'];?>"> <?=$v['category_name'];?> </option>
                              <?php } ?>
                            </select>
                            
                            <select name="sub_cat_id[]" required="required" class="form-control sub_cat_id" style="width: 30%;float: left;margin-right: 10px;">
                               <option value="0"> -- Select Subcategory --</option>
                                <?php 

                                if(!empty($info['cat_id']) and $info['cat_id'] > 0){

                                 $sub_cat_list =  $this->bizadminmodel->get_sub_cat_list($info['cat_id']);
                                 foreach ($sub_cat_list as $key => $v) {
                                    if( $v['id'] == $info['sub_cat_id']){
                                      $select = 'selected="selected"';
                                    }else{
                                      $select = '';
                                    }

                                ?>
                                <option <?=$select;?> value="<?=$v['id'];?>"> <?=$v['sub_category_name'];?> </option>

                              <?php }} ?>
                            </select>
                            

                            <select name="bus_cat_id[]" required="required" class="form-control bus_cat_id" style="width: 20%;float: left;margin-right: 10px;">
                                <option value="0">Business Category</option>
                                <?php 
                                   $bus_cat_list =  $this->bizadminmodel->get_business_category();
                                   foreach ($bus_cat_list as $key => $v) {
                                    if( $v['id'] == $info['cat_id']){
                                     // $select = 'selected="selected"';
                                    }else{
                                      $select = '';
                                    }
                                    $select = '';
                                ?>
                                <option <?=$select;?> value="<?=$v['id'];?>"> <?=$v['type'];?> </option>
                              <?php } ?>
                            </select>
                            <button type="button" class="btn btn-warning" id="add_more">Add More</button>
                          </div>

                          <?php } ?>

                        </div>

                      </td>
                    </tr>
                    
                    <tr>
                      <th>Approve</th>
                      <td colspan="3">
                          
                            <?php $statusarra = array(
                              'Approve', 'Review', 'Pending', 'Reject'
                            ); ?>



                            <input type="hidden" name="id" value="<?=$info['id']?>">
                            <select name="status" class="form-control" id="status" style="width: 10%;float: left;margin-right: 10px;">
                                <option>---- Select ----</option>
                                <?php foreach ($statusarra as $v) { 
                                  if($v == $info['status']){
                                    $selected = 'selected="selected"';
                                  }else{
                                    $selected ='';
                                  }
                                ?>
                                <option <?=$selected;?> value="<?=$v;?>"><?=$v;?></option>
                              <?php } ?>
                            </select>

                            <button type="submit" class="btn btn-primary" id="submit">Save</button>
                         
                      </td>
                    </tr>
                     

                </table>
                </form>
                <br>
                <h4>Product List</h4>
                <table id="usergrouptable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Company</th>
                  <th>Status</th>
                  <th>Price</th>
                  <th>Model</th>
                  <th>C.Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <?php foreach ($list as $key => $v) { ?>
                  <tr>
                    <td><?=$key+1;?></td>
                    <td><?=$v['product_name'];?></td>
                    <td><?=$v['category_name'];?></td>
                    <td><?=$v['company_name'];?></td>
                    <td><?=$v['status'];?></td>
                    <td><?=$v['price'];?></td>
                    <td><?=$v['model_no'];?></td>
                     <td><?=date('Y-m-d', strtotime($v['created_at']));?></td>
                    <td>
                      <a href="<?php echo site_url('company/c_product_view/'. $v['id'] . '/'. $cid) ?>" style="border-radius: 10px;" class="btn btn-success btn-xs"> <i class="fa fa-eye"></i> </a>
                      &nbsp;&nbsp;
                      <a target="_blank" href="<?php echo site_url('product/edit/'. $v['id']) ?>" style="border-radius: 10px;" class="btn btn-warning btn-xs"> <i class="fa fa-pencil"></i> </a>
                      &nbsp;&nbsp;
                      <!--a onclick="return confirm('Are you sure you want to delete this item?');" href="<?php echo site_url('company/c_product_delete/'. $v['id'] . '/'. $cid) ?>" style="border-radius: 10px;" class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> </a-->
                      
                    </td>
                  </tr>
                <?php } ?>
              
              </table>
            </div>
            <!-- /.box-body -->
             <div class="box-footer">
                
                <a class="btn btn-danger" href="<?php echo site_url('company/index?mt=' . mt_rand(0,99999999)) ?>">Back</a>
              </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
      


    </section>





    <!-- /.content -->
  <script type="text/javascript">

  $(document).ready(function() {
    
    manageTable = $('#usergrouptable').DataTable({
        'pageLength': 50,
        'lengthMenu': [50, 100, 150, 200],
        'order': []
      });
    
    
    
    $("#company").addClass('active');
    $("#com_list").addClass('active');

    //$(".category_id").on("change", function() {

    $("body").on("change", "#service_cat_id", function() {

      var cat_id = $(this).val();

      $('#sub_service_cat_id').empty();
        $.ajax({
          type: "GET",
          url: '<?=site_url('company/get_sub_service_cat_list/');?>'+ cat_id,
          success: function(GetData) {
            $('#sub_service_cat_id').append(' <option value = ""> --Select Sub Service Category-- </option>');
              $.each($.parseJSON(GetData), function(i, obj) {
                  $('#sub_service_cat_id').append($(' <option> ', {
                    value: obj.id, text: obj.name
                  }));
              });
          }
        });
    });



    

    $("body").on("change", ".category_id", function() {

      var cat_id = $(this).val();

      console.log(cat_id);

      var sectionid = $(this).parent().attr('id');

       console.log(sectionid);

      $('#'+sectionid+ ' .sub_cat_id').empty();
        $.ajax({
          type: "GET",
          url: '<?=site_url('company/get_sub_cat_list/');?>'+ cat_id,
          success: function(GetData) {
            $('#'+sectionid+ ' .sub_cat_id').append(' <option value = ""> --Select Subcategory-- </option>');
              $.each($.parseJSON(GetData), function(i, obj) {
                  $('#'+sectionid+ ' .sub_cat_id').append($(' <option> ', {
                    value: obj.id, text: obj.name
                  }));
              });
          }
        });
    });

    $("body").on("click", "#add_more", function() {

    var sl = $('#cat_row .cat_list').length + 1;

      var select_option_list = $('#cat_row .category_id').html();
      var select_bus_list = $('#cat_row .bus_cat_id').html();

      var current_row = '<div class="cat_list" id="section_'+sl+'"><select required="required"  style="width: 30%;float:left;margin-right: 10px;" class="form-control category_id" name="cat_id[]">'+ select_option_list +'</select>&nbsp;&nbsp;<select  style="width: 30%;float:left;margin-right: 10px;"  required="required" class="form-control sub_cat_id" name="sub_cat_id[]"><option>----Select Sub Category----</option></select>&nbsp;&nbsp;<select  style="width: 20%;float:left;"  required="required" class="form-control bus_cat_id" name="bus_cat_id[]">'+ select_bus_list +'</select><button type="button" class="btn btn-danger remove">Remove</button></div>';
      

      //var product_box = $(this).parent().parent().parent();

      $("#cat_row").append(current_row);

      $('#cat_row #section_' +sl+ ' .category_id').val(0);
    


    });


    $('body').on('click', '.remove', function() {

      var product_box = $(this).parent();

      product_box.remove();

    });

  });

</script>