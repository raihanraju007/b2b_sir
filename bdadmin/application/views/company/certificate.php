<?php 
$baseurl = str_replace('bdadmin', 'upload', base_url()) . 'company/certificate/';
?>
    <section class="content-header">
      <h1>
        Company Certificate 
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

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="usergrouptable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Compnay</th>
                  <th>Title</th>
                  <th>Certificate</th>
                  <th>Status</th>
                  <th>C.Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <?php foreach ($brochurelist as $key => $v) { ?>
                  <tr>
                    <td><?=$key+1;?></td>
                    <td><?=$v['company_name'];?></td>
                    <td><?=$v['certification_title'];?></td>
                    <td>
                      <button type="button" class="btn btn-danger" onclick="showbrochure(<?=$v['id'];?>)" data-toggle="modal" data-target="#brochuremodal">Certificate</button> 
                      <input type="hidden" id="brochure_img_<?=$v['id']?>" value="<?=$v['certificate']?>">
                    </td>
                    <td><?=$v['status'];?></td>
                    <td><?=$v['created_at'];?></td>
                    <td>
                      <?php if( $v['status'] != 'Approve'){ ?>
                      <button type="button" class="btn btn-danger" onclick="editWord(<?=$v['id'];?>)" data-toggle="modal" data-target="#addEditWord"><i class="fa fa-tag"></i></button> 
                      <?php } ?>
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
<div class="modal fade" tabindex="-1" role="dialog" id="brochuremodal">
  <div class="modal-dialog" role="document" style="width: 70%;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="formtitle">Certificate</h4>
      </div>
      <div class="modal-body">
        <div id="brochureimg"></div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- create brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="addEditWord">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="formtitle">Certificate Approve</h4>
      </div>

      <form role="form" action="<?php echo site_url('company/approve_certificate') ?>" method="post" id="createFlatForm" enctype="multipart/form-data" >

        <div class="modal-body">

          <input required type="hidden" name="id" id="id" value="0">

          <div class="form-group">
            <label for="flatOwnerIfdfD">Status</label><br>
            <select required class="form-control" id="status" name="status">
              <option value="">----Select----</option>
                <option value="Approve">Approve</option>
                <option value="Reject">Reject</option>
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

      $("#company").addClass('active');
      
    });

    

     function showbrochure(id){

        var file = "<?=$baseurl;?>" + $("#brochure_img_"+id).val();

        var imgsrc = "<img src='"+file+"' style='width: 100%;height: 100%;' alt='Brochure'>";

        $("#brochureimg img").remove();

        $("#brochureimg").append(imgsrc);
        
     }


    function editWord(id){

      $("#id").val(id);

    }

  </script>
 