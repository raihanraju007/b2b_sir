<?php 
  require_once(APPPATH."views/common/company_profile.php"); 
?>

<style>
    #buyselltable{
        width: 100%;
        border-collapse: collapse;
    }
    #buyselltable th, td{
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
      <h3>Buy Sell List</h3>
    </div>
  </div>
  <div class="mb-4">
    <table id="buyselltable" border="1">
        <tr>
            <th>Title</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Qty</th>
            <th>Unit</th>
            <th>Validity Date</th>
            <th>Action</th>
        </tr>
      <?php 
        foreach ($list as $key => $v) {

      ?>
        <tr>
            <td><?=$v['ad_title'];;?></td>
            <td><?=$v['product_name'];;?></td>
            <td><?=$v['category_name'];;?></td>
            <td><?=$v['qty'];;?></td>
            <td><?=$v['unit'];;?></td>
            <td><?=$v['validity_date'];;?></td>
            <td>
                <a href="<?=site_url('seller/view_buysell_info/'. $v['bs_id']);?>" class="btn btn-sm btn-b2bmap-secondary py-0 px-3"><i class="fa fa-eye"></i></a>
            </td>
        </tr>

      <?php } ?>
     </table>
  </div>
</div>