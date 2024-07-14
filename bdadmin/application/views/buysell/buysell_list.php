
    <section class="content-header">
      <h1>
        Buy Sell  
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
            <a class="btn btn-primary" href="<?=site_url('buysell/add');?>">Buysell Add</a>
          </div>
          <br /> <br /> 

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="usergrouptable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Company</th>
                  <th>Type</th>
                  <th>Title</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <?php foreach ($buysell as $key => $v) { ?>
                  <tr>
                    <td><?=$key+1;?></td>
                    <td><?=$v['company_name'];?></td>
                    <td><?=$v['category'];?></td>
                    <td><?=$v['ad_title'];?></td>
                    <td><?=$v['date'];?></td>
                    <td><?=$v['status'];?></td>
                    <td>
                      <!--a href="<?php echo site_url('buysell/view/'. $v['id']) ?>" style="border-radius: 10px;" class="btn btn-success"> <i class="fa fa-eye"></i> </a-->
                      &nbsp;&nbsp;
                      <a href="<?php echo site_url('buysell/edit/'. $v['id']) ?>" style="border-radius: 10px;" class="btn btn-warning"> <i class="fa fa-edit"></i> </a>
                      &nbsp;&nbsp;
                      <!--a onclick="return confirm('Are you sure you want to delete this item?');" href="<?php echo site_url('company/delete/'. $v['id']) ?>" style="border-radius: 10px;" class="btn btn-danger"> <i class="fa fa-trash"></i> </a-->
                      
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
  


  <script type="text/javascript">
    $(document).ready(function() {
      manageTable = $('#usergrouptable').DataTable({
        'pageLength': 50,
        'lengthMenu': [50, 100, 150, 200],
        'order': []
      });

      $("#buysell").addClass('active');
      
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
 