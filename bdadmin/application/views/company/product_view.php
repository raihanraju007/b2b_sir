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
       Product
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
                      <th colspan="4"> <h2 style="text-align: center;"><?=$info['company_name']?></h2> </th>
                    </tr>
                    <tr>
                      <th>Product Name</th>
                      <td><?=$info['product_name']?></td>
                      <th>Product Code</th>
                      <td><?=$info['product_code']?></td>
                    </tr>
                    <tr>
                      <th>Product Model</th>
                      <td><?=$info['model_no']?></td>
                      <th>Product standard</th>
                      <td><?=$info['standard']?></td>
                    </tr>
                    <tr>
                      <th>Product Price</th>
                      <td><?=$info['price']?></td>
                      <th>Product Qty</th>
                      <td><?=$info['min_order_qty']?></td>
                    </tr>
                    
                    <tr>
                      <th>Category</th>
                      <td><?=$info['category_name']?></td>
                      <th>Sub Category</th>
                      <td><?=$info['sub_category_name']?></td>
                    </tr>
                    <tr>
                      <th>Company</th>
                      <td><?=$info['company_name']?></td>
                      <th>Unit</th>
                      <td><?=$info['unit']?></td>
                    </tr>

                     <tr>
                      <th>Product Certificate</th>
                      <td><?=$info['certificate']?></td>
                      <th>Product Country</th>
                      <td><?=$info['country_name']?></td>
                    </tr>

                     <tr>
                      <th>Product Description</th>
                      <td colspan="3"><?=$info['product_description']?></td>
                    </tr>

                    <tr>
                      <th>Product Image</th>
                      <td colspan="3">
							<img style="width:300px; float:left; margin:10px;" src="https://b2bitem.com/upload/product/<?=$info['product_image']?>"> <br>
							
							<?php foreach($image as $val){ ?>
							
							<img style="width:300px;float:left; margin:10px;" src="https://b2bitem.com/upload/product/<?=$val['product_pic']?>"> <br>
							
							<?php } ?>
                        
                      </td>
                    </tr>


                   

                </table>
            </div>
            
            <div class="box-footer">
                
                <a class="btn btn-danger" href="<?php echo site_url('company/view/'.$cid) ?>">Back</a>
              </div>
         
          </div>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
      


    </section>



