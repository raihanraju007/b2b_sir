
    <section class="content-header">
      <h1>
        Company 
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
                  <th>SL.</th>
                  <th>Name</th>
                  <th>Contact Person</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Join Date</th>
                  <th>Verify</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <?php 
               // echo '<pre>';print_r($categorylist);
                foreach ($categorylist as $key => $v) {
                    $ids = $v['id'];
                ?>
                  <tr>
                    <td>
                        <label><input type="checkbox" style="margin-right:7px;" value="<?=$ids;?>" name="comids[]"><?=$key+1;?></label>        
                    </td>
                    <td>  
                        <?=$v['company_name'];?><br>
                        
                        <button data-toggle="modal" data-target="#addEditWord" type="button" onclick="similar_company('<?=$v['company_name'];?>')" class="btn btn-danger btn-xs"><i class="fa fa-plus"></i></button>


                    </td>
                    <td><?=$v['contact_person'];?></td>
                    <td>
                        <?=$v['email'];?>
                    
                    </td>
                    <td><?=$v['mobile'];?></td>
                    <td><?=$v['join_date'];?></td>
                    <td><?php
                        if($v['verify']== 1){
                            echo 'Yes';
                        }else{
                            echo 'No';
                        }?></td>
                    <td>
                      <a style="padding: 2px 5px;" href="<?php echo site_url('company/view/'. $v['id']) ?>" style="border-radius: 10px;" class="btn btn-success"> <i class="fa fa-eye"></i> </a>
                      &nbsp;&nbsp;
                      <a style="padding: 2px 5px;" onclick="return confirm('Are you sure you want to delete this item?');" href="<?php echo site_url('company/pending_delete/'. $v['id']) ?>" style="border-radius: 10px;" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>
                      
                    </td>
                  </tr>
                <?php } ?>
              
              </table>
              <select class="form-control" style="width: 10%;display: inline-block;" name="comtype" required>
                  <option value="">Select</option>
                  <option value="1">Approve</option>
                  <option value="2">Delete</option>
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




<!-- create brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="addEditWord">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="formtitle">Compnay List</h4>
      </div>

    
        <div class="modal-body">
          <table border="1" id="smitable" style="width: 100%; border-collapse: collapse;">
              <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Status</th>
				<th>Action</th>
              </tr>
              <tbody id="simi_com"></tbody>
          </table>
            
        
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         
        </div>

      


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

     function similar_company(name){

       // alert(name);

        var dataString = 'name='+ name;

          $.ajax({
            type: "POST",
            url: '<?=site_url('company/get_similar_company/');?>',
            data: dataString,
            success: function(response) {
                  
                var obj = jQuery.parseJSON(response);
               
                $("#simi_com").empty();

                $.each(obj, function(index, value){
                    var sl = parseFloat(index+1);
                    var comname = value.company_name;
                    var sta = value.status;
                    var did = value.id;
					var con = "'Are you sure you want to delete this item?'";
					var url = "<?php echo site_url('company/pending_delete/'. $v['id']) ?>";
                    var tr = '<tr><td>'+ sl +'</td><td>'+comname+'</td><td>'+sta+'</td><td> <a style="padding: 2px 5px;" onclick="return confirm('+con+');" href="'+url+'" style="border-radius: 10px;" class="btn btn-danger"> <i class="fa fa-trash"></i> </a></td> </tr>';

                     $('#simi_com').append(tr);
                });

            }
          });

     }



  </script>
 