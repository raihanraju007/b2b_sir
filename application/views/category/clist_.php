<div class="container custom-container">
        <div class="d-flex justify-content-between">
          <ol class="breadcrumb page-breadcrumb-customize">
            <li class="breadcrumb-item">
              <a href="#">B2bitem</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">Products</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"> <?= $cat_info['category_name'];?> </li>
          </ol>
          <div class="text-muted d-lg-none pl-2">
            <button type="button" data-toggle="aside" data-target="#asideNav" class="text-nowrap text-muted text-14 py-0 px-1 bg-transparent border-0 no-focus">
              <i class="fa fa-list-ul text-14 mr-2" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
      <section class="container custom-container">
        <div class="mb-4 bg-cover bg-white border" style="background-image: url('https://b2bitem.com/public/uploads/category/1561297413-agro-and-agriculture.jpg');">
          <div class="bg-white-transparent-1">
            <div class="py-4 text-center">
              <div class="d-inline-block p-lg-4 bg-white-transparent-8 rounded">
                <div class="mb-3 mb-md-4">
                  <h1 class="text-normal text-evening text-center"> <?= $cat_info['category_name'];?> </h1>
                </div>
                <div class="d-flex flex-wrap justify-content-center">
                  <a href="#" class="btn px-4 btn-b2bitem-primary btn-md-down-small w-sm-down-100 mx-3 my-2">Showcase Your Product - FREE</a>
                  <a href="#" class="btn px-5 btn-b2bitem-secondary-close btn-md-down-small w-sm-down-100 mx-3 my-2">Post Buy Requirement</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="mb-5">
        <div class="container custom-container">
          <div class="row">
            <div class="col-lg-3">
              <aside class="aside-on-responsive" id="asideNav">
                <div class="aside-content">
                  <div class="bg-white border mb-4">
                    <div class="border-bottom">
                      <h3 class="d-flex py-2 px-3 text-20">
                        <span class="mr-2">
                          <i class="fa fa-pagelines" aria-hidden="true"></i>
                        </span> <?= $cat_info['category_name'];?>
                      </h3>
                    </div>
                    <div class="px-3">
                      <ul class="aside-category-list-v1">

                        <?php 
                          $sub_cat = $this->sellermodel->get_sub_cat_list($cat_info['id']);

                          foreach ($sub_cat as $key => $v) {
                        ?>

                        <li class="aside-category-item-v1">
                          <a href="" class="aside-category-link-v1 align-items-center">
                            <span class="mr-2 mt-n1">
                              <i class="fa fa-circle text-5 link-icon"></i>
                            </span> <?=$v['sub_category_name'];?> </a>
                        </li>
                        
                        <?php } ?>

                      </ul>
                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="mb-3">
                      <a href="#" class="btn btn-b2bitem-theme btn-block">All Product Categories</a>
                    </div>
                    <div>
                      <a href="#" class="btn btn-b2bitem-secondary btn-block">Display Your Product</a>
                    </div>
                  </div>
                  <div class="bg-white border mb-4">
                    <div class="border-bottom">
                      <span class="d-flex py-2 px-3 text-20">Browse Products by Name</span>
                    </div>
                    <div class="p-3">
                      <ul class="d-flex flex-wrap list-unstyled m-n1 company-list-letter">
                        <li class="p-1 ">
                          <a href="#" class="box-25 btn btn-char text-14">
                            <span class="text">A</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </aside>
            </div>

             <div class="col-lg-9">
              <div class="mb-4">
                <div class="mb-3">
                  <h2 class="text-md-down-20 text-lg-32 title-with-square-box">Featured Product - <?= $cat_info['category_name'];?> </h2>
                </div>
                <ul class="list-unstyled row mb-4">
                  <li class="col-6 col-md-4 col-lg-3 col-xl-2 mb-3 mb-lg-4">
                    <div class="product-card border h-100">
                      <a href="#" class="d-block text-overflow-ellipsis text-14 mb-1">Vegetable</a>
                      <div class="product-card-content">
                        <div>
                          <a href="#" class="product-img-box product-img-4by3">
                            <img src="https://b2bitem.com/product-image/202307/thumbnails/m1125-cyan-crispy-hybrid-hami-melon-variety-01688389363.jpeg" alt="M1125 Cyan Crispy Hybrid Hami Melon Seeds - High-Quality Variety for Cultivation and Production" title="M1125 Cyan Crispy Hybrid Hami Melon Seeds - High-Quality Variety for Cultivation and Production" class="product-img" decoding="async" loading="lazy">
                          </a>
                        </div>
                        <div>
                          <a href="#" class="text-ellipsis-clamp-2 text-theme-to-link text-14 text-center" title="M1125 Cyan Crispy Hybrid Hami Melon Seeds - High-Quality Variety for Cultivation and Production"> M1125 Cyan Crispy Hybrid Hami Melon Seeds - High-Quality Variety for Cultivation and Production </a>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="biz-box bg-white mb-4">
                <div class="border-bottom py-2 mb-3">
                  <h2 class="text-md-down-20 text-lg-32 title-with-square-box"><?= $cat_info['category_name'];?> Product</h2>
                </div>
                <p class="text-lg-18"><?= $cat_info['short_description'];?></p>
                <div class="row m-n2">

                  <?php foreach ($sub_cat as $key => $va) { ?>

                  <div class="col-md-6 p-2">
                    <div class="biz-card p-3 position-relative h-100">
                      <div class="d-flex align-items-center">
                        <div class="mr-2">
                          <div class="box-60 rounded border">
                            <a href="#">
                              <img src="https://b2bitem.com/public/uploads/subcategory/agri-business-1684400951.jpg" class="img-fit-center rounded">
                            </a>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <a href="#" class="text-strong text-custom-link"> <?=$va['sub_category_name'];?> </a>
                        </div>
                      </div>
                      <p class="m-0 text-dark">
                        <?=$va['short_description'];?>
                      </p>
                    </div>
                  </div>

                <?php } ?>

                </div>
              </div>

              <div class="bg-white biz-box mb-4">
                <div class="biz-box-title mb-0">
                  <div class="d-flex flex-wrap justify-content-between align-items-center m-n1">
                    <h2 class="text-md-down-20 text-lg-32 block-text p-1 m-0"> <?= $cat_info['category_name'];?> Product Suppliers</h2>
                    <div class="p-1">
                     
                    </div>
                  </div>
                </div>
                <div class="biz-box-content">
                  <div class="table-responsive">
                    <table class="table requirement-table">
                      <thead>
                        <tr>
                          <th style="min-width: 160px" scope="col" class="text-strong border-bottom-0">Supplier</th>
                          <th scope="col" class="text-strong border-bottom-0 text-nowrap w-25">Country / Region</th>
                          <th style="min-width: 160px" scope="col" class="text-strong border-bottom-0">Category</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($product_suppliear as $key => $val) { ?>
                        <tr>
                          <td>
                            <a href="#"> <?=$val['company_name'];?> </a>
                          </td>
                          <td>
                            <span class="mr-1 mt-n05">
                              <img src="https://b2bitem.com/public/flags/16x16/cn.png" alt="China">
                            </span>
                            <a href="#"><?=$val['country_name'];?></a>
                          </td>
                          <td class="text-muted">
                            <a href="#"> <?=$val['category_name'];?></a>
                            <i class="fa fa-angle-double-right mx-1"></i>
                            <a href="#"> <?=$val['sub_category_name'];?> </a>
                          </td>
                        </tr>

                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>



            </div>

          </div>
        </div>
      </section>


       <section class="mb-4">
        <div class="container custom-container">
          <div class="theme-block">
            <div class="row">
              <div class="col-lg-6 mb-3 mb-lg-0">
                <div class="py-lg-4">
                  <div class="text-business-secondary text-center">
                    <i class="icofont-penalty-card fa-4x"></i>
                  </div>
                  <h4 class="text-thin text-center mt-4 mb-3">TELL US WHAT YOU NEED</h4>
                  <h4 class="text-md-down-20 text-normal text-theme line-height-150 text-center"> Post your buy requirement & get quotes from top manufacturers & suppliers.</h4>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="py-3">
                  <form method="post" action="#">
                   
                    <div class="form-group">
                      <label class="text-lg-18 d-none text-muted">Product Name <span class="text-danger">*</span>
                      </label>
                      <input type="text" name="title" id="title" value="" class="form-control text-md-down-14 rounded-0" placeholder="Enter product name ...">
                    </div>
                    <div class="form-group">
                      <label class="text-lg-18 d-none text-muted">Product Category <span class="text-danger">*</span>
                      </label>
                      <div>
                        <select name="cat_id" id="cat_id" class="form-control text-md-down-14 rounded-0">
                          <option value="">-- Select Product Category --</option>
                          <?php foreach ($product_cat as $key => $val) { ?>
                          <option value="<?= $val['id'];?>"> <?= $val['category_name'];?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="text-lg-18 d-none text-muted">Describe Your Buying Requirement</label>
                      <textarea rows="4" name="details" id="details" class="form-control text-md-down-14 form-control-md-down-large rounded-0" placeholder="Describe your buying requirement including specifications, sizes etc"></textarea>
                    </div>
                    <div class="text-center mt-3 pt-lg-3">
                      <button type="button" class="btn btn-b2bitem-secondary btn-md-down-small rounded-0 px-4">Post Buy Requirement</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="mb-4">
        <div class="container custom-container">
          <div class="mb-4">
            <div class="bg-white biz-box with-footer-content">
              <div class="biz-box-title">
                <h2 class="text-md-down-20 text-lg-32 text-lg-32">
                  <span class="d-lg-none">Product Categories</span>
                  <span class="d-lg-down-none">Product Directory: Top Categories</span>
                </h2>
              </div>
              <div class="biz-box-content">
                <div class="category-list">
                  <ul class="list-unstyled row mb-0">
                    <?php foreach ($product_cat as $key => $val) { ?>
                    <li class="col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-3">
                      <a href="#" class="d-flex align-items-center">
                        <span class="mr-2">
                          <span class="box-20">
                            <i class="fa fa-pagelines text-18 text-link" aria-hidden="true"></i>
                          </span>
                        </span>
                        <span class="text-15 text-medium text-overflow-ellipsis"><?= $val['category_name'];?></span>
                      </a>
                    </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <div class="theme-block d-md-flex justify-content-between mb-2 py-1 py-xl-1">
              <h3 class="py-2 mb-0 mr-md-2 text-center text-md-left text-md-down-18">B2B <?= $cat_info['category_name'];?> Product List</h3>
              <div class="py-2 text-center">
                <a href="#" class="btn btn-b2bitem-primary text-nowrap px-4">Showcase Your Product - FREE</a>
              </div>
            </div>
            <div class="theme-block"> <?= $cat_info['description'];?> </div>
          </div>
        </div>
      </section>