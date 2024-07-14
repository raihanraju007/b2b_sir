
    <section class="content-header">
      <h1>
       Not Verify Company 
        <small>List</small>
      </h1>
    </section>
    <style type="text/css">
      #smitable tr th, td{
        padding: 5px 7px;
      }
    </style>

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

          <!-- <div class="pull-right">
            <button class="btn btn-primary" id="wordadd" data-toggle="modal" data-target="#addEditWord">Add Category</button>
          </div>
          <br /> <br /> -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <form action="<?=site_url('company/delete_approve_company');?>" method="post">
              <table id="usergrouptable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>
                     <label> <input type="checkbox" id="checkall">
                      SL.</label></th>
                  <th>Name</th>
                  <th>Contact Person</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Join Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
               // echo '<pre>';print_r($categorylist);
                foreach ($categorylist as $key => $v) {
                    $ids = $v['id'];
                ?>
                  <tr>
                    <td>
                        <label><input type="checkbox" class="item_selection" style="margin-right:7px;" value="<?=$ids;?>" name="comids[]"><?=$key+1;?></label>   
                    </td>
                    <td>  
                        <?=$v['company_name'];?>
                    </td>
                    <td><?=$v['contact_person'];?></td>
                    <td>
                        <?=$v['email'];?>
                    
                    </td>
                    <td><?=$v['mobile'];?></td>
                    <td><?=$v['join_date'];?></td>
                    
                    <td>
                      <a target="_blank" style="padding: 2px 5px;" href="<?php echo site_url('company/view/'. $v['id']) ?>" style="border-radius: 10px;" class="btn btn-success"> <i class="fa fa-eye"></i> </a>
                      &nbsp;&nbsp;
                      <a style="padding: 2px 5px;" onclick="return confirm('Are you sure you want to delete this item?');" href="<?php echo site_url('company/pending_delete/'. $v['id']) ?>" style="border-radius: 10px;" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>
                      
                    </td>
                  </tr>
                <?php } ?>
                
                </tbody>
              
              </table>
              <select class="form-control" style="width: 10%;display: inline-block;" name="comtype" required>
                  <option value="">Select</option>
                  <option value="3">Delete</option>
              </select>
              <input type="submit" style="margin-top: -3px;" class="btn btn-primary" value="Submit">
              </form>
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





  <script type="text/javascript">
    $(document).ready(function() {
        
      manageTable = $('#usergrouptable').DataTable({
        'pageLength': 50,
        'lengthMenu': [50, 100, 150, 200],
        'order': [],
        "columnDefs": [
             { "orderable": false, "targets": 0 }
        ]
      });

      $("#company").addClass('active');
      
       $('#checkall').click(function() {
            var checked = $(this).prop('checked');
            $('.item_selection').prop('checked', checked);
            
        });
      
    });
    

     $("#wordadd").click(function() {
        $("#submit").text('Submit');
        $("#formtitle").text('Add Category');

        $("#id").val('0');

        $("#category_order").val('');
        $("#link_prefix").val('');
        $("#category_name").val('');
        $("#description").text('');
        $('#status option').removeAttr("selected");  
    });
    
  </script>
 