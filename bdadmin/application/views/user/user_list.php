<?php 
  
  $active = '';
  if($post_status == 'Active'){
    $active = 'selected="selected"';
  }
  $inactive = '';
  if($post_status == 'Inactive'){
    $inactive = 'selected="selected"';
  }

?>
    <section class="content-header">
      <h1>
        User 
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
            <button class="btn btn-primary" id="wordadd" data-toggle="modal" data-target="#addEditWord">Add User</button>
          </div>
          <br /> <br />

          <div class="box">
           <div class="box-header">
              <h3 class="box-title" style="width: 100%;"> 
                Total Data : <?=$count_data['total'];?>, &nbsp;&nbsp; Active : <b style="color: green;"><?=$count_data['active'];?></b>, &nbsp;&nbsp; Inactive : <b style="color: red;"><?=$count_data['inactive'];?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                <form action="#" style="margin:0px; padding: 0px;width: 36%;float: right;" method="post">
                  
                  <select id="statusfilter" style="float: right; width: 45%;" name="status" class="form-control">
                     
                      <option <?=$active;?> value="Active">Active</option>
                      <option <?=$inactive;?> value="Inactive">Inactive</option>
                  </select>
                  
                </form>

              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="usergrouptable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Company</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>User Type</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <!--
                <?php foreach ($list as $key => $v) { ?>
                  <tr>
                    <td><?=$key+1;?></td>
                    <td><?=$v['company_name'];?></td>
                    <td><?=$v['name'];?></td>
                    <td><?=$v['email'];?></td>
                    <td><?=$v['mobile'];?></td>
                    <td><?=$v['ug_name'];?></td>
                    <td><?=$v['status'];?></td>
                    
                    <td>
                      <a class="btn btn-warning" href="<?php echo site_url('user/user_view/' . $v['id']);?>" ><i class="fa fa-eye"></i></a> &nbsp;
                      <button type="button" class="btn btn-danger" onclick="editWord(<?=$v['id'];?>)" data-toggle="modal" data-target="#addEditWord"><i class="fa fa-pencil"></i></button>   
                    </td>
                  </tr>
                <?php } ?>
                -->
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
        <h4 class="modal-title" id="formtitle">Add User</h4>
      </div>

      <form role="form" action="<?php echo site_url('user/addeditformuser') ?>" method="post" id="createFlatForm" enctype="multipart/form-data" >

        <div class="modal-body">

          <input required type="hidden" name="id" id="id" value="0">
            
        <?php if($admin_group_id == 1){ ?>    
          <div class="form-group">
            <label for="flatOwnerID">Company</label><br>
            <select required class="form-control" id="company_id" name="company_id">
              <option value="">----Select----</option>
                <?php foreach ($company as $key => $v) { ?>
                  <option value="<?=$v['id']?>"><?=$v['name']?></option>
                <?php } ?>
            </select>
          </div>
          <?php }else{ ?>
            <input type="hidden" id="company_id" name="company_id" value="<?=$company_id;?>">
          <?php } ?>

          <div class="form-group">
            <label for="name">Name</label>
            <input required type="text" class="form-control" id="name" name="name"  autocomplete="off">
          </div>

          <div class="form-group">
            <label for="name">Mobile</label>
            <input required type="number" class="form-control" id="mobile" name="mobile" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="name">Email</label>
            <input required type="email" class="form-control" id="email" name="email" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="name">Password</label>
            <input required type="password" class="form-control" id="password" name="password" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="flatOwnerIfdfD">Status</label><br>
            <select required class="form-control" id="status" name="status">
              <option value="">----Select----</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
          </div>

          <div class="form-group">
            <label for="flatOwnerID">User Group</label><br>
            <select required class="form-control" id="user_group_id" name="user_group_id">
              <option value="">----Select----</option>
                <?php foreach ($usergroup as $key => $v) { ?>
                  <option value="<?=$v['id']?>"><?=$v['name']?></option>
                <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" class="form-control" id="photo" name="photo" />
            <br>
            <div id="uphoto"></div>
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
        //'ajax': 'fetch_user_data',
        'pageLength': 50,
        'lengthMenu': [50, 100, 150, 200],
        'order': []
      });

      $("#setting").addClass('active');
      $("#user_list").addClass('active');
      
       var status = 'Active';
      manageTable.ajax.url("<?php echo site_url();?>/user/get_user_status_wise_data?filter="+status).load();
      
     $("#statusfilter").on("change", function(){
        manageTable.ajax.url("<?php echo site_url();?>/user/get_user_status_wise_data?filter="+$(this).val()).load();
    });

    });

     $("#wordadd").click(function() {

      $("#submit").text('Submit');
      $("#formtitle").text('Add User');

      $("#id").val('0');
      $("#name").val('');
      $("#mobile").val('');
      $("#email").val('');
      $("#password").val('');

      $('#user_group_id option').removeAttr("selected");
      $('#company_id option').removeAttr("selected");
      $('#status option').removeAttr("selected");
       $("#uphoto").empty();
           
    });


    function editWord(id){

      $("#submit").text('Update');
      $("#formtitle").text('Edit User');

      $.ajax({
          type: "POST",
          url: "<?php echo $site_url;?>user/get_user_info",
          data: "id="+id,
          dataType: 'json',
          success: function(res){  
            $("#id").val(res.id);
            $("#name").val(res.name);
            $("#mobile").val(res.mobile);
            $("#email").val(res.email);
            $("#password").val(res.password);
            
            if(res.photo != ''){
                 var src = '<img style="width: 150px;height: 150px;" src="<?=base_url();?>/upload/user/'+res.photo+' " alt="User Photo">';
                 $("#uphoto").append(src);
            }
           
            
            $("#user_group_id option[value='"+res.user_group_id+"']").prop('selected', 'selected');
            $("#company_id option[value='"+res.company_id+"']").prop('selected', 'selected');

            $("#status option[value='"+res.status+"']").prop('selected', 'selected');
          }
      }); 

    }

  </script>
 