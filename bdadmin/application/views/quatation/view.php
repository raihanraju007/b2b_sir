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
<?php $cid = $info['id']; ?>

    <section class="content-header">
      <h1>
       Company
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
                <form method="post" action="<?=site_url('quatation/update_quatation_status');?>">
                <table id="minfo" border="1">
                    <tr>
                      <th colspan="4"> <h2 style="text-align: center;">Buy Sell Information</h2> </th>
                    </tr>
                    <tr>
                      <th>Title</th>
                      <td><?=$bsinfo['ad_title']?></td>
                      <th>Product Name</th>
                      <td><?=$bsinfo['product_name']?></td>
                    </tr>
                    <tr>
                      <th>Category Type</th>
                      <td><?=$bsinfo['category']?></td>
                      <th>validity date</th>
                      <td><?=$bsinfo['validity_date']?></td>
                    </tr>
                     <tr>
                      <th>qty</th>
                      <td><?=$bsinfo['qty']?></td>
                      <th>unit</th>
                      <td><?=$bsinfo['unit']?></td>
                    </tr>
                     <tr>
                      <th>category name</th>
                      <td><?=$bsinfo['category_name']?></td>
                      <th>packaging terms</th>
                      <td><?=$bsinfo['packaging_terms']?></td>
                    </tr>
                    <tr>
                      <th>shipping terms</th>
                      <td><?=$bsinfo['shipping_terms']?></td>
                      <th>Status</th>
                      <td><?=$bsinfo['q_status']?></td>
                    </tr>
                    <tr>
                      <th>Details</th>
                      <td colspan="3"><?=$bsinfo['req_details']?></td>
                    </tr>
                    <tr>
                      <th>Compnay</th>
                      <td><?=$bsinfo['company_name']?></td>
                      <th>County</th>
                      <td><?=$bsinfo['country_name']?></td>
                    </tr>
                </table>
                <br>
                <table id="minfo" border="1">
                    <tr>
                      <th colspan="4"> <h2 style="text-align: center;">Quatation Information</h2> </th>
                    </tr>
                    
                     <tr>
                      <th>qty</th>
                      <td><?=$quatation['qty']?></td>
                      <th>unit</th>
                      <td><?=$quatation['unit']?></td>
                    </tr>
                     <tr>
                      <th>validity date</th>
                      <td><?=$quatation['validity_date']?></td>
                      <th>packaging terms</th>
                      <td><?=$quatation['packaging_terms']?></td>
                    </tr>
                    <tr>
                      <th>shipping terms</th>
                      <td><?=$quatation['shipping_terms']?></td>
                      <th>Status</th>
                      <td><?=$quatation['q_status']?></td>
                    </tr>
                    <tr>
                      <th>Details</th>
                      <td colspan="3"><?=$quatation['req_details']?></td>
                    </tr>
                    <tr>
                      <th>Compnay</th>
                      <td><?=$quatation['company_name']?></td>
                      <th>County</th>
                      <td><?=$quatation['country_name']?></td>
                    </tr>
                </table>
                <br>
                 <div class="col-md-3">
                        <div class="form-group">

                          <?php 

                             if($quatation['q_status'] == 'Pending'){
                                $selected = 'selected="selected"';
                             }else{
                              $selected = '';
                             }

                             if($quatation['q_status'] == 'Approve'){
                                $inselected = 'selected="selected"';
                             }else{
                              $inselected = '';
                             }

                          ?>

                          <label for="flatOwnerID">Status</label><br>
                          <select required class="form-control" id="status" name="status">
                          <option value="">----Select----</option>
                            <option <?=$selected ;?> value="Pending">Pending</option>
                            <option <?=$inselected ;?> value="Approve">Approve</option>
                        </select>
                          
                        </div>
                    </div>
                <br>
                 <div class="box-footer">
                    <input type="hidden" name="id" value="<?=$quatation['qid'];?>">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                
                </form>
                <br>
                
            </div>
            <!-- /.box-body -->
             <div class="box-footer">
                
                <a class="btn btn-danger" href="<?php echo site_url('quatation/index?mt=' . mt_rand(0,99999999)) ?>">Back</a>
              </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
      


    </section>



