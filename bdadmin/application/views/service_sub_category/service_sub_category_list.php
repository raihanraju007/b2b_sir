
    <section class="content-header">
      <h1>
       Service Sub Category 
        <small>List</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">

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

          <div class="pull-right">
            <button class="btn btn-primary" id="wordadd" data-toggle="modal" data-target="#addEditWord">Add Service Sub Category</button>
          </div>
          <br /> <br />

          <div class="box">
            <div class="box-header">
              <h2 class="box-title" style="color: green;"> 
                  Mother Service Category Name : <?=$info['s_category_name'];?>
              </h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="usergrouptable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Category Name</th>
                  <th>Link Prefix</th>
                  <th>Status</th>
                  <th>Order</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <?php foreach ($subcategorylist as $key => $v) { ?>
                  <tr>
                    <td><?=$key+1;?></td>
                    <td><?=$v['s_sub_category_name'];?></td>
                    <td><?=$v['s_sub_link_prefix'];?></td>
                    <td><?=$v['status'];?></td>
                    <td><?=$v['s_sub_ordering'];?></td>
                    <td>
                      <button type="button" class="btn btn-danger" onclick="editWord(<?=$v['id'];?>)" data-toggle="modal" data-target="#addEditWord"><i class="fa fa-pencil"></i></button>   
                    </td>
                  </tr>
                <?php } ?>
              
              </table>
            </div>
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
        <h4 class="modal-title" id="formtitle">Add Service Sub Category</h4>
      </div>

      <form role="form" action="<?php echo site_url('service_sub_category/AddEditFromServiceSubCategory') ?>" method="post" id="createFlatForm" enctype="multipart/form-data" >

        <div class="modal-body">

          <input required type="hidden" name="id" id="id" value="0">
          <input required type="hidden" name="service_category_id" id="service_category_id" value="<?=$info['id'];?>">

          <div class="form-group">
            <label for="name">Sub Category Name</label>
            <input required type="text" class="form-control" id="s_sub_category_name" name="s_sub_category_name"  autocomplete="off">
          </div>

          <div class="form-group">
            <label for="name">Sub Link Prefix</label>
            <input required type="text" class="form-control" id="s_sub_link_prefix" name="s_sub_link_prefix" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="name">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
          </div>

          <div class="form-group">
            <label for="name">Order</label>
            <input required type="number" class="form-control" id="s_sub_ordering" name="s_sub_ordering" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="flatOwnerIfdfD">Status</label><br>
            <select required class="form-control" id="status" name="status">
              <option value="">----Select----</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
          </div>
        
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="submit">Save</button>
        </div>

      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




  <script type="text/javascript">
    $(document).ready(function() {
      manageTable = $('#usergrouptable').DataTable({
        'pageLength': 50,
        'lengthMenu': [50, 100, 150, 200],
        'order': []
      });

      $("#service_category").addClass('active');
      
    });

     $("#wordadd").click(function() {
        $("#submit").text('Submit');
        $("#formtitle").text('Add Service Sub Category');

        $("#id").val('0');

        $("#s_sub_category_name").val('');
        $("#s_sub_link_prefix").val('');
        $("#s_sub_ordering").val('');
        $("#description").text('');
        $('#status option').removeAttr("selected");  
    });


    function editWord(id){

      $("#submit").text('Update');
      $("#formtitle").text('Edit Service Sub Category');

      $.ajax({
          type: "POST",
          url: "<?php echo $site_url;?>service_sub_category/get_service_sub_category_info",
          data: "id="+id,
          dataType: 'json',
          success: function(res){  

            $("#id").val(res.id);
            $("#s_sub_category_name").val(res.s_sub_category_name);
            $("#s_sub_link_prefix").val(res.s_sub_link_prefix);
            $("#s_sub_ordering").val(res.s_sub_ordering);
            $("#description").text(res.description);

            $("#status option[value='"+res.status+"']").prop('selected', 'selected');

          }
      }); 

    }

  </script>
 