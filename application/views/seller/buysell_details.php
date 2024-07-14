<?php 
  require_once(APPPATH."views/common/company_profile.php"); 
?>

<style>
    .buyselltable{
        width: 100%;
        border-collapse: collapse;
    }
    .buyselltable th, td{
        padding:8px 5px;
    }
</style>

<div class="panel-body" style="background:white; padding:10px;">
 <!-- <div class="mb-3">
    <div class="bg-white px-3 py-3 border text-center text-lg-right">
      <a href="<?=site_url('seller/add_product');?>" class="btn btn-md-down-small btn-b2bmap-secondary px-4">
        <i class="icofont-plus mr-1"></i> Add New Product </a>
    </div>
  </div>-->
  <div class="mb-3">
    <div class="mb-2">
      <h3>Buy Sell Details</h3>
    </div>
  </div>
  <div class="mb-4">
    <table class="buyselltable" border="1">
        <tr>
            <th>Title</th>
            <td><?=$list['ad_title'];?></td>
            <th>Category</th>
            <td><?=$list['category_name'];?></td>
        </tr>
       <tr>
            <th>Product Name</th>
            <td><?=$list['product_name'];?></td>
            <th>Unit</th>
            <td><?=$list['unit'];?></td>
        </tr>
         <tr>
            <th>Create Date</th>
            <td><?=$list['date'];?></td>
            <th>Validity Date</th>
            <td><?=$list['validity_date'];?></td>
        </tr>
         <tr>
            <th>Details</th>
            
            <td colspan="3"><?=$list['req_details'];?></td>
        </tr>
         <tr>
            <th>packaging terms</th>
            <td><?=$list['packaging_terms'];?></td>
            <th>shipping terms</th>
            <td><?=$list['shipping_terms'];?></td>
        </tr>
         <tr>
            <th>Status</th>
            <td><?=$list['status'];?></td>
            <th></th>
            <td></td>
        </tr>
     </table>
     <br>
     <br>
     <h4>Quatation List</h4>
     <table class="buyselltable" border="1">
         <tr>
            <th>Company Name</th>
            <th>Business Type</th>
            <th>Location</th>
            <th>Quote Time</th>
            <th>Action</th>
         </tr>
         <?php foreach($quatation as $v){ ?>
        <tr>
            <td><?=$v['company_name'];?></td>
            <td>
                <?php 
                $typelist = '';
                    foreach ($type as $key => $vt) {
						$selelec_type = explode(',', $v['type']);
						if (in_array($vt['id'], $selelec_type)) {
							$typelist .= $vt['type'] . ', ';
						} 
                    }
                    
                    echo rtrim($typelist,", ");;
                
                ?>
            </td>
            <td><?=$v['country_name'];?></td>
            <td><?=$v['date'];?></td>
            <td></td>
        </tr>
        <?php } ?>
     </table>
  </div>
</div>