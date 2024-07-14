 <div class="container custom-container">
        <div class="d-flex justify-content-between">
          <ol class="breadcrumb page-breadcrumb-customize">
            <li class="breadcrumb-item">
              <a href="#">B2bitem</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Business Directory</li>
          </ol>
          <div class="text-muted d-lg-none pl-2">
            <button type="button" data-toggle="aside" data-target="#asideNav" class="text-nowrap text-muted text-14 py-0 px-1 bg-transparent border-0 no-focus">
              <i class="fa fa-list-ul text-14 mr-2" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>


       <section class="mb-4">
        <div class="container custom-container">
          <div class="theme-block p-4 py-md-5">
            <h2 class="text-md-down-24 mb-3 d-md-none">
              <span class="divider-content"> Global Business Directory </span>
            </h2>
            <div class="row align-items-center">
              <div class="col-md-3 col-lg-4 d-md-down-none">
                <div class="business-directory-map-img pr-lg-5">
                  <img src="https://b2bitem.com/upload/global-business-directory.jpg" class="img-fluid mx-auto d-block">
                </div>
              </div>
              <div class="col-md-9 col-lg-8 col-xl-5 mb-4 mb-md-0">
                <ul class="list-unstyled mb-0">
                  <li class="mb-2 d-flex text-muted">
                    <i class="fa fa-check text-business-primary text-13 pr-3 mt-2"></i> Connect With Millions of Buyers and Sellers.
                  </li>
                  <li class="mb-2 d-flex text-muted">
                    <i class="fa fa-check text-business-primary text-13 pr-3 mt-2"></i> Free Business Profile with Product Showcase.
                  </li>
                  <li class="mb-2 d-flex text-muted">
                    <i class="fa fa-check text-business-primary text-13 pr-3 mt-2"></i> Expand Your B2B Business Network – Smartly.
                  </li>
                  <li class="mb-2 d-flex text-muted">
                    <i class="fa fa-check text-business-primary text-13 pr-3 mt-2"></i> Easy and Direct Buyer - Seller Communication.
                  </li>
                  <li class="mb-2 d-flex text-muted">
                    <i class="fa fa-check text-business-primary text-13 pr-3 mt-2"></i> Brand Your Business with Google Search Ranking.
                  </li>
                </ul>
              </div>
              <div class="offset-md-3 offset-lg-4 offset-xl-0 col-xl-3">
                <div>
                  <div class="d-block text-center mt-2">
                    <a href="#" class="btn btn-b2bmap-primary btn-sm-down-small px-5 px-lg-4"> List Your Business - Free</a>
                    <a href="#" class="d-block text-center text-muted mt-1">View Membership Plans</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="mb-4">
        <div class="container custom-container">
          <div class="row">
            <div class="col-lg-3">
              <aside class="aside-on-responsive" id="asideNav">
                <div class="aside-content">
                  <div class="bg-white border mb-4">
                    <div class="border-bottom px-3 py-2">
                      <h3 class="d-flex align-items-center text-strong text-24 m-0">Business Categories</h3>
                    </div>
                    <div>
                      <ul class="list-unstyled aside-category-list">

                         <?php 
                      
                      foreach ($product_cat as $key => $val) {

                        $catname = $val['category_name'];

                        $icon = $val['icon'];

                        $sub_cat = $this->sellermodel->get_sub_cat_list($val['id']);

                    ?>  

                        <li class="nav-item dropdown aside-category-item aside-category-item-with-dropdown">
                          <a href="#" class="bg-white px-3 d-flex aside-category-link">
                            <span class="mr-2">
                              <i class="<?=$icon;?> link-icon"></i>
                            </span> <?=$catname;?> <span class="ml-auto pl-2 d-lg-down-none">
                              <i class="fa fa-angle-right"></i>
                            </span>
                          </a>
                          <div class="dropdown-menu category-menu-dropdown-submenu mt-n2">
                            <div class="text-20 text-strong mb-3">
                              <a href="#"><?=$catname;?></a>
                            </div>
                            <ul class="list-unstyled row mb-0">
                              <?php 
                              foreach ($sub_cat as $key => $v) {

                              $subcat = $v['sub_category_name'];
                            ?>
                              <li class="col-sm-6 col-lg-4 mb-2">
                                <a href="#" class="d-flex d-md-block text-nowrap text-14 text-theme text-overflow-ellipsis">
                                  <span class="mt-n05 mr-2 d-md-none">
                                    <i class="fa fa-circle text-6"></i>
                                  </span> <?=$subcat;?> </a>
                              </li>
                              <?php } ?>
                            </ul>
                          </div>
                        </li>

                      <?php } ?>

                      </ul>
                    </div>
                  </div>
                </div>
              </aside>
            </div>
            <div class="col-lg-9">
              <div class="theme-block">
                <div class="d-md-down-none mb-3">
                  <h2 class="section-divider text-md-down-24 mb-1">
                    <span class="divider-content"> Global Business Directory</span>
                  </h2>
                  <p class="text-muted text-center d-lg-down-none">Welcome to B2bitem.com worldwide business directory. Find companies or businesses across the globe by location and category. Take the opportunity, join the country wise b2b business directory. Add your company & contact info and showcase your product. Let others find your business with detail company profile - Easily!</p>
                </div>
                <div class="row mb-4">
                  <?php foreach ($country as $key => $v) { ?>
                  <div class="col-6 col-md-4 col-lg-3 col-xl-2 mb-3">
                    <div class="box-ratio box-ratio-1by1 rounded-circle">
                      <a href="#" class="directory-flag-box">
						<?php if(!empty($v['flag'])){ ?>
                        <img src="https://b2bitem.com/upload/country/128_128/<?=$v['flag'];?>" alt="<?=$v['country_name'];?> Business Directory" title="<?=$v['country_name'];?> Business Directory">
						<?php } ?>
                      </a>
                    </div>
                    <div class="mb-1">
                      <a href="#" title="China Business Directory" class="d-block text-strong text-center text-muted"><?=$v['country_name'];?></a>
                    </div>
                    <a href="#" class="d-block text-13 text-center">Suppliers List</a>
                    <a href="#" class="d-block text-13 text-center">List of Products</a>
                  </div>
                  <?php } ?>
                </div>

              </div>

              <div class="theme-block mt-4">
                <div class="d-md-flex m-n1">
                  <div class="py-1 px-2 text-nowrap text-18">Browse by:</div>
                  <div class="py-1 px-2 mt-05">
                    <ul class="d-flex flex-wrap list-unstyled m-n05 company-list-letter">
                      <li class="p-05">
                        <a href="#" class="box-25 btn btn-char text-14">
                          <span class="text">A</span>
                        </a>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </section>

      <section style="background-color: var(--business-secondary-hover)" class="mt-5">
        <div class="container custom-container">
          <div class="py-4 py-lg-5">
            <h2 class="text-center text-white mb-4">Online Business Directory</h2>
            <div class="mb-4 text-center w-lg-90 mx-auto text-white text-lg-20 d-lg-down-none"> List your business in the top online business directory to connect and drive more b2b businesses. Use our business listing directory site with great b2b tools to create company profile & promote your products. Search business list and database of companies. Find global businesses with detail company profile. </br>
              </br> Our free business directory site contain list of local and global businesses including small businesses. Enjoy free business directory listing and business advertising opportunities through B2bitem.com - Join Free Now! </div>
            <div class="d-md-flex px-5 px-md-0 flex-wrap mx-n2 justify-content-center">
              <div class="px-3 my-3">
                <a href="#" class="btn btn-lg btn-block text-lg-down-16 btn-light btn-sm-down-small px-4">See Plans and Pricing</a>
              </div>
              <div class="px-3 my-3">
                <a href="#" class="btn btn-lg btn-block text-lg-down-16 btn-light btn-sm-down-small px-5">Sign Up for Free!</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script>
$(document).ready(function(){
  
    $("#bizMenubar .biz-menu .nav-item").removeClass("active");

    $("#bizMenubar .biz-menu .nav-item:nth-child(4)").addClass("active");
 
});
</script>

<script>
$(document).ready(function(){
 
 //alert('hello');
 $(".biz-menu li").removeClass("active");
  $(".biz-menu li:nth-child(4)").addClass("active");
});
</script>