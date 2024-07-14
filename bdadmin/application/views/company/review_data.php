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
  .cat_list{
    margin-bottom: 10px;
  }
</style>
    <section class="content-header">
      <h1>
       Company
        <small>Details</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <form method="post" action="<?=site_url('company/review_data_updated');?>">

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">

          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
                <table id="minfo" border="1">
                    <tr>
                      <th colspan="2"> <h2 style="text-align: center;"><?=$info['company_name']?></h2> </th>
                    </tr>
                    
                    <?php 
                        $id = $compnay_log['id'];
                        $company_id = $info['id'];
                        
                        unset($compnay_log['company_id']);
                        unset($compnay_log['approve_status']);
                        unset($compnay_log['id']);
                        unset($info['id']);
                        foreach( $compnay_log as $key =>$val ){ 
                        
                        if( $val != $info[$key] ){
                        
                    ?>
                    <tr>
                        <th with="30%;"><?=$key;?></th>
                        <td><?=$val;?></td>
                    </tr>
                   <?php }} ?>
                    <tr>
                        <th>
                            <input type="hidden" name="id" value="<?=$id;?>">
                            <input type="hidden" name="company_id" value="<?=$company_id;?>">
                            <button type="submit" class="btn btn-primary" id="submit">Approve</button>
                        </th>
                    </tr>

                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
      
</form>

    </section>
