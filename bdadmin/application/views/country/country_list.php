
    <section class="content-header">
      <h1>
        Country 
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
                  <th>Country Name</th>
                  <th>Country Code</th>
                  <th>Flag</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <?php foreach ($contrylist as $key => $v) { ?>
                  <tr>
                    <td><?=$key+1;?></td>
                    <td><?=$v['country_name'];?></td>
                    <td><?=$v['phone_code'];?></td>
                    <td>
						<img width="50" src="http://b2bitem.com/upload/country/128_128/<?=$v['flag'];?>">
					</td>
                    
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
        <h4 class="modal-title" id="formtitle">Add Country</h4>
      </div>

      <form role="form" action="<?php echo site_url('country/AddEditFromCountry') ?>" method="post" id="createFlatForm" enctype="multipart/form-data" >

        <div class="modal-body">

          <input required type="hidden" name="id" id="id" value="0">

          <div class="form-group">
            <label for="name">Country Name</label>
            <input required type="text" class="form-control" id="country_name" name="country_name"  autocomplete="off">
          </div>

          <div class="form-group">
            <label for="name">Phone Code</label>
            <input required type="text" class="form-control" id="phone_code" name="phone_code" autocomplete="off">
          </div>
		  
		  <div class="form-group">
            <label for="name">Flag</label>
           <input name="new_image" id="new_image" size="30" type="file" class="form-control" />
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

      $("#country").addClass('active');
      
    });

     $("#wordadd").click(function() {
        $("#submit").text('Submit');
        $("#formtitle").text('Add Country');

        $("#id").val('0');
        $("#country_name").val('');
        $("#phone_code").val('');    
        $("#flag").val('');    
    });


    function editWord(id){

      $("#submit").text('Update');
      $("#formtitle").text('Edit Country');

      $.ajax({
          type: "POST",
          url: "<?php echo $site_url;?>country/get_country_info",
          data: "id="+id,
          dataType: 'json',
          success: function(res){  
            $("#id").val(res.id);
            $("#phone_code").val(res.phone_code);
            $("#country_name").val(res.country_name);
            $("#flag").val(res.flag);
          }
      }); 

    }

  </script>
 