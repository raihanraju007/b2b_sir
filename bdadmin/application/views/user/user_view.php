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
</style>
    <section class="content-header">
      <h1>
       User
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
                <table id="minfo" border="1">
                    <tr>
                      <th width="20%">Name</th>
                      <td><?=$pinfo['name']?></td>
                    </tr>
                   
                    <tr>
                      <th width="20%">Email</th>
                      <td><?=$pinfo['email']?></td>
                    </tr>
                     <tr>
                      <th width="20%">Mobile</th>
                      <td><?=$pinfo['mobile']?></td>
                    </tr>
                    <tr>
                      <th width="20%">Status</th>
                      <td><?=$pinfo['status']?></td>
                    </tr>
                    <tr>
                      <th width="20%">Company</th>
                      <td><?=$pinfo['company_name']?></td>
                    </tr>
                     <tr>
                      <th width="20%">User Group</th>
                      <td><?=$pinfo['ug_name']?></td>
                    </tr>
                    <tr height="150">
                      <th width="20%">User Photo</th>
                      <td>
                            <?php 
                                if(!empty($pinfo['photo'])){
                                    $img_url = base_url() . 'upload/user/' .  $pinfo['photo'];
                                    echo '<img style="height:150px; width:150px;" src="'.$img_url.'" alt="User Photo">';
                                }
                                
                            ?>
                      </td>
                    </tr>
                </table>
            </div>
            <!-- /.box-body -->
             <div class="box-footer">
                
                <a class="btn btn-danger" href="<?php echo site_url('user/index?mt=' . mt_rand(0,99999999)) ?>">Back</a>
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

    $("#setting").addClass('active');
    $("#user_list").addClass('active');

     
    
  });

</script>