<?php 
  require_once(APPPATH."views/common/company_profile_buyer.php"); 
?>

<div class="panel-body">
  <div class="mb-3">
    <div class="bg-white px-3 py-3 border text-center text-lg-right">
      <a href="<?=site_url('buyer/add_product');?>" class="btn btn-md-down-small btn-b2bmap-secondary px-4">
        <i class="icofont-plus mr-1"></i> Add New Product </a>
    </div>
  </div>
  <div class="mb-3">
    <div class="mb-2">
      <h3>Manage Products</h3>
    </div>
  </div>
  <div class="mb-4">
    <ul class="list-unstyled m-0">
      <?php 
        foreach ($plist as $key => $v) {

          $img = $this->sellermodel->getProductImg($v['id']);
          
          if(!empty($img['product_pic'])){
            $url = base_url().'upload/product/'.$img['product_pic'];
          }else{
            $url = base_url().'upload/product/default.png';
          }
          
      ?>
      <li class="mb-4">
        <div class="card rounded-0">
          <div class="card-body p-3">
            <div class="row align-items-center">
              <div class="col-lg-2 mb-3 mb-lg-0">
                <div class="product-img-box box-ratio-4by3">
                  <img src="<?=$url;?>" class="product-img">
                </div>
              </div>
              <div class="col-lg-7 mb-3 mb-lg-0">
                <div class="px-lg-4 border-lg-x h-100">
                  <div class="d-block text-strong text-lg-18 mb-2"> <?=$v['product_name']?> </div>
                  <p class="mb-1 text-muted">Price: USD <?=$v['price']?> / Pieces</p>
                  <div class="d-flex">
                    <div class="mr-2 text-muted">Product Keywords: <?=$v['product_keywords']?> </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div>
                  <time class="d-block text-muted mb-2">
                    <i class="fa fa-clock-o opacity-5 mr-1"></i> Posted On: <?=$v['created_at']?> </time>
                  <div class="text-muted m-0">
                    <i class="fa fa-info-circle opacity-5 mr-1"></i> Status: <span class="text-business-secondary"><?=$v['status']?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer bg-white px-3 py-1 d-flex flex-wrap justify-content-between align-items-center">
            <div class="d-flex align-items-center my-2 mb-md-0 mr-md-2"></div>
            <div class="my-2">
              <ul class="list-inline text-md-right mb-0">
                <li class="list-inline-item mb-2">
                  <a href="<?=site_url('buyer/edit_product/'. $v['id']);?>" data-toggle="tooltip" title="Edit This Product" class="btn btn-sm btn-b2bmap-secondary py-0 px-3">
                    <i class="fa fa-edit"></i> Edit </a>
                </li>
                <li class="list-inline-item mb-2">
                  <a href="javascript:deleteItem('#')" data-toggle="tooltip" title="Delete This Product" class="btn btn-sm btn-danger py-0 px-3">
                    <i class="fa fa-trash-o"></i> Delete </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </li>

      <?php } ?>

    </ul>
  </div>
</div>