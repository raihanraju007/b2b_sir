
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Buy Sell 
      <small>Add</small>
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
          <form role="form" action="<?=site_url('buysell/add') ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Company</label><br>
                          <select class="form-control select_group" id="company_id" name="company_id">
                            <option value="0">----Select----</option>
                            <?php foreach ($company as $k => $v){ ?>
                              <option value="<?php echo $v['id'] ?>"><?php echo $v['company_name']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                    </div>
                   <div class="col-md-6">
                         <div class="form-group">
                          <label for="flatOwnerID">Title</label><br>
                          <input type="text" name="ad_title" class="form-control">
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Product Name</label><br>
                          <input type="text" name="product_name" class="form-control">
                        </div>
                    </div>
                   <div class="col-md-6">
                         <div class="form-group">
                          <label for="flatOwnerID">Category</label><br>
                          <select  class="form-control" id="category_id" name="category_id">
                            <option value="">----Select----</option>
                          </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="flatOwnerID">Requirement Details</label><br>
                         <textarea name="req_details" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Product Qty</label><br>
                          <input type="text" name="qty" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Product Unit</label><br>
                          <select  class="form-control" id="unit_id" name="unit_id">
                            <option value="0">----Select----</option>
                             <?php foreach ($unit as $k => $v){ 
                              
                              ?>
                              <option  value="<?php echo $v['id'] ?>"><?php echo $v['name']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Packaging Terms</label><br>
                          <input type="text" name="packaging_terms" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Shipping Terms</label><br>
                          <input type="text" name="shipping_terms" class="form-control">
                        </div>
                    </div>
                   
                </div>
                

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="flatOwnerID">Product Image</label><br>
                         <input type="file" name="productImg" class="form-control">
                          <br>
						 
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">

                          <label for="flatOwnerID">Status</label><br>
                          <select required class="form-control" id="status" name="status">
                          <option value="">----Select----</option>
                            <option  value="Pending">Pending</option>
                            <option value="Approve">Approve</option>
                        </select>
                          
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                          <label for="flatOwnerID">Type</label><br>
                          <select required class="form-control" id="category" name="category">
                          
                            <option value="sell">Sell</option>
                            <option  value="buy">Buy</option>
                        </select>
                          
                        </div>
                    </div>
                   
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <label for="name">Date</label>
                        <input required type="text" class="form-control datepicker" id="election_date"  name="date" autocomplete="off">
                    </div>
                   <div class="col-md-6">
                        <label for="name">Validity Date</label>
                        <input required type="text" class="form-control datepicker" id="election_date" name="validity_date"  autocomplete="off">
                    </div>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              
                <button type="submit" class="btn btn-primary">Save</button>
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
    

      $("#buysell").addClass('active');

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