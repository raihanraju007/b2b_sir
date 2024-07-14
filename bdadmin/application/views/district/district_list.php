
    <section class="content-header">
      <h1>
        District 
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
            <button class="btn btn-primary" id="wordadd" data-toggle="modal" data-target="#addEditWord">Add Country</button>
          </div>
          <br /> <br />

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="usergrouptable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Country Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <?php foreach ($contrylist as $key => $v) { ?>
                  <tr>
                    <td><?=$key+1;?></td>
                    <td><?=$v['name'];?></td>
                    <td><?=$v['country_name'];?></td>
                    
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
<div class="modal fade" aria-labelledby="myModalLabel" aria-hidden="true" role="dialog" id="addEditWord">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="formtitle">Add Country</h4>
      </div>

      <form role="form" action="<?php echo site_url('district/AddEditFromDistrict') ?>" method="post" id="createFlatForm" enctype="multipart/form-data" >

        <div class="modal-body">

          <input required type="hidden" name="id" id="id" value="0">

          <div class="form-group">
            <label for="name">District Name</label>
            <input required type="text" class="form-control" id="name" name="name"  autocomplete="off">
          </div>

          <div class="form-group">
            <label for="status">Country</label><br>
            <select class="form-control select2" id="country_id" name="country_id">
              <option value="">----Select----</option>
              <?php foreach ($country as $k => $v): ?>
                <option value="<?php echo $v['id'] ?>"><?php echo $v['country_name'] ?></option>
              <?php endforeach ?>
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


<style type="text/css">
  .select2-container--default{
    width: 100% !important;
  }
</style>

  <script type="text/javascript">
    $(document).ready(function() {
      manageTable = $('#usergrouptable').DataTable({
        'pageLength': 50,
        'lengthMenu': [50, 100, 150, 200],
        'order': []
      });

      $("#district").addClass('active');

      $(".select2").select2();
      
    });

    

     $("#wordadd").click(function() {
        $("#submit").text('Submit');
        $("#formtitle").text('Add District');

        $("#id").val('0');
        $("#name").val('');
        $("#country_id").val('');  
        $('#country_id').trigger('change');
         //$('#country_id').val('').trigger('change');  
    });


    function editWord(id){

      $("#submit").text('Update');
      $("#formtitle").text('Edit District');

      $.ajax({
          type: "POST",
          url: "<?php echo $site_url;?>district/get_district_info",
          data: "id="+id,
          dataType: 'json',
          success: function(res){  
            $("#id").val(res.id);
            $("#name").val(res.name);
            $("#country_id").val(res.country_id);
            $('#country_id').trigger('change');
            //$('#country_id').val(res.country_id).trigger('change');
          }
      }); 

    }

  </script>
 