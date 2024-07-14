<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <!--link rel="preload" href="https://b2bitem.com/public/frontend/css/bootstrap.min.css" as="style" /-->
   
    <!--title>B2B Marketplace for Importers, Exporters and Manufacturers - Largest B2B Business Platform</title-->
    
     <link rel="canonical" href="https://b2bitem.com" /> 
   
     <link rel="icon" type="image/x-icon" href="https://b2bitem.com/upload/fav.png" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/public/frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://b2bmap.com/public/font/fonts.css">
	
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>public/frontend/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"-->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>public/frontend/css/icofont/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>public/frontend/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>public/frontend/css/googlefonts.css">
  
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121345574-1" type="d257963e33dac07492b9d6fd-text/javascript"></script>
    <script type="d257963e33dac07492b9d6fd-text/javascript">
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-121345574-1');
    </script>
    <script type="d257963e33dac07492b9d6fd-text/javascript">
      window._mfq = window._mfq || [];
      (function() {
        var mf = document.createElement("script");
        mf.type = "text/javascript";
        mf.defer = true;
        mf.src = "//cdn.mouseflow.com/projects/a1f1aadc-00f2-4c6b-904d-cbc3668b3d15.js";
        document.getElementsByTagName("head")[0].appendChild(mf);
      })();
    </script>
    <script type="text/javascript" src="<?=base_url();?>public/frontend/js/jquery-3.4.1.min.js"></script>
  </head>
  <body>
    <div class="desktop-view-nav mb-3">
      <nav class="navbar navbar-expand-lg biz-header">
        <div class="container custom-container">
          <div class="scroll-show-item">
            <div class="d-flex align-items-center">
              <div class="header-single-menu-drop dropdown mr-2">
                <a href="#" class="btn btn-sm" data-toggle="dropdown">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                  </svg>
                </a>
                <div class="dropdown-menu rounded-0">
                  <a href="#" class="dropdown-item d-flex">
                    <span class="mr-2">
                      <i class="fa fa-home link-icon"></i>
                    </span> Home </a>
                  <a href="<?=site_url('product');?>" class="dropdown-item d-flex">
                    <span class="mr-2">
                      <i class="fa fa-cube link-icon"></i>
                    </span> Products </a>
                  <a href="<?=site_url('website/business_directory');?>" class="dropdown-item d-flex">
                    <span class="mr-2">
                      <i class="fa fa-list-ul link-icon"></i>
                    </span> Business Directory </a>
                  <a href="#" class="dropdown-item d-flex">
                    <span class="mr-2">
                      <i class="fa fa-eraser link-icon"></i>
                    </span> B2B Leads </a>
                  <a href="#" class="dropdown-item d-flex">
                    <span class="mr-2">
                      <i class="fa fa-industry link-icon"></i>
                    </span> Companies </a>
                </div>
              </div>
              <a class="navbar-brand small-brand" href="#">
                <img src="https://b2bitem.com/upload/b2bitem.png" class="img-fluid">
                
              </a>
            </div>
          </div>
          <a class="navbar-brand" href="#">
            
             <img src="https://b2bitem.com/upload/b2bitem.png" class="img-fluid">
          </a>
          <!-- <ul class="nav navbar-nav flex-row flex-nowrap align-items-center order-lg-10 ml-auto">
            <li class="nav-item mr-2">
              <a href="<?=site_url('website/user_login');?>" class="nav-link text-them">
                <span class="ml-2">Sign In</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=site_url('website/join_fee');?>" class="d-block text-nowrap text-14 text-medium text-white py-0 px-2 rounded btn-join-free">Join Free</a>
            </li>
          </ul> -->
          <button class="navbar-toggler border" type="button" data-toggle="collapse" data-target="#header">
            <i class="fa fa-bars"></i>
          </button>
          <!-- <div class="collapse navbar-collapse" id="header">
            <div class="d-flex justify-content-between w-100">
              <div class="d-flex flex-wrap mx-auto">
                <div class="biz-header-search mr-3">
                  <form method="get" action="#">
                    <div class="biz-header-search-group">
                      <input type="text" name="keyword" value="" title="Start search here" id="searchKeyword" placeholder="Search..." required aria-label="keyword">
                      <button type="submit" class="btn text-nowrap search-btn">Search</button>
                    </div>
                  </form>
                </div>
                <div class="nav-item dropdown">
                  <a href="#" title="'Post Buy Requirement" class="btn btn-dark bg-theme">Post Buy Requirement</a>
                </div>
              </div>
              <div>
                <ul class="nav navbar-nav flex-row flex-nowrap nav-on-responsive">
                  <li class="nav-item dropdown mr-2">
                    <a href="#" class="nav-link text-nowrap text-theme">Sell More</a>
                  </li>
                </ul>
              </div>
            </div>
          </div> -->
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg biz-menubar">
        <div class="container custom-container">
          <div class="collapse navbar-collapse show" id="bizMenubar">
            <ul class="navbar-nav biz-menu">
              <li class="nav-item invisible d-lg-down-none">
                <span class="px-5">B2bItem</span>
              </li>
              <li class="nav-item">
                <a href="http://b2bitem.com/" class="d-block">Home</a>
              </li>
              <li class="nav-item ">
                <a href="<?=site_url('product');?>" class="d-block">Products</a>
              </li>
              <li class="nav-item ">
                <a href="<?=site_url('website/companies');?>" class="d-block">Suppliers</a>
              </li>
             
			  <li class="nav-item ">
                <a href="<?=site_url('website/b2bleads');?>" class="d-block">Buy Leads</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="mobile-view-nav mb-3">
      <nav class="navbar navbar-expand-lg biz-header py-2">
        <div class="container custom-container px-sm-3">
          <div class="d-flex align-items-center w-100">
            <div class="d-flex align-items-center">
              <a class="navbar-brand small-brand" href="#">
                <!-- <img src="https://b2bitem.com/public/logo/b2bitem-logo.jpg" class="img-fluid"> -->
                B2BITEM
              </a>
              <a class="navbar-brand mw-navbar-brand" href="#">
                <!-- <img src="https://b2bitem.com/public/logo/b2bitem-logo.jpg" class="img-fluid"> -->
                B2BITEM
              </a>
            </div>
            <div class="d-flex align-items-center ml-auto">
              <div class="mr-2">
                <a href="<?=site_url('website/join');?>" class="nav-link px-0">
                  <span class="btn text-nowrap btn-join-free py-0">Join Free</span>
                </a>
              </div>
            </div>
            <div class="header-single-menu-drop dropdown">
              <a href="javascript:void(0)" class="btn btn-sm no-focus pl-2" data-toggle="dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu text-theme">
                  <line x1="3" y1="12" x2="21" y2="12"></line>
                  <line x1="3" y1="6" x2="21" y2="6"></line>
                  <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
              </a>
              <div class="dropdown-menu dropdown-menu-right mw-dropdown-menu-with-search shadow-sm rounded-0 px-3 pt-3 pb-4">
                <ul class="list-group list-group-flush mb-0">
                  <li class="list-group-item px-0 py-1 border-bottom-0">
                    <form method="get" action="#">
                      <div class="input-group">
                        <input type="text" name="keyword" value="" title="Start search here" class="form-control form-control-sm no-focus" id="dropSearchKeyword" required placeholder="Search...">
                        <div class="input-group-append">
                          <button type="submit" class="input-group-text">
                            <i class="fa fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </li>
                  <li class="list-group-item px-0 py-2">
                    <a href="#" class="dropdown-item px-0 d-flex text-17">
                      <span class="mr-2">
                        <i class="fa fa-home link-icon"></i>
                      </span> Home </a>
                  </li>
                  <li class="list-group-item px-0 py-2">
                    <a href="#" class="dropdown-item px-0 d-flex text-17">
                      <span class="mr-2">
                        <i class="fa fa-cube link-icon"></i>
                      </span> Products </a>
                  </li>
                 <!-- <li class="list-group-item px-0 py-2">
                    <a href="<?=site_url('website/business_directory');?>" class="dropdown-item px-0 d-flex text-17">
                      <span class="mr-2">
                        <i class="fa fa-list-ul link-icon"></i>
                      </span> Company Directory </a>
                  </li> -->
                  <li class="list-group-item px-0 py-2">
                    <a href="#" class="dropdown-item px-0 d-flex text-17">
                      <span class="mr-2">
                        <i class="fa fa-eraser link-icon"></i>
                      </span> B2B Offers </a>
                  </li>
                  <li class="list-group-item px-0 py-2">
                    <a href="<?=site_url('website/companies');?>" class="dropdown-item px-0 d-flex text-17">
                      <span class="mr-2">
                        <i class="fa fa-industry link-icon"></i>
                      </span> Companies </a>
                  </li>
                </ul>
                <div class="mt-4">
                  <a href="#" class="btn text-nowrap btn-b2bmap-secondary btn-block text-17">Join Free Now</a>
                  <div class="py-2"></div>
                  <a href="#" class="btn btn-outline-dark btn-block text-17">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
	
    <main class="main-body">
		<?php echo $content_for_layout; ?>
    </main>
	
     <footer class="footer">
      <div class="container custom-container">
        <div>
          <div class="row">
            <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
              <div class="toggle-item">
                <a class="navbar-brand px-0 mb-3 mb-md-2 pt-0" href="#">
                  <!-- <img src="https://b2bitem.com/public/logo/b2bitem-logo-white.png" class="img-fluid"> -->B2BITEM
                </a>
                <div class="d-md-none">
                  <a href="#" class="btn no-focus btn-sm footer-toogle-btn btn-block text-left content-toggler">
                    <i class="fa fa-angle-down mr-2 toggler-icon"></i> Menu </a>
                </div>
                <div class="footer-mw-dropdown-content toggleable-content">
                  <div class="pt-3 pt-md-0">
                    <ul class="footer-nav-list">
                      <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Membership Plans</a>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
              <div class="toggle-item">
                <div class="d-md-none">
                  <a href="#" class="btn no-focus btn-sm footer-toogle-btn btn-block text-left content-toggler">
                    <i class="fa fa-angle-down mr-2 toggler-icon"></i> B2bitem for Seller </a>
                </div>
                <div class="footer-mw-dropdown-content toggleable-content">
                  <div class="pt-3">
                    <div class="d-md-down-none">
                      <h5 class="footer-heading">B2bitem for Seller</h5>
                    </div>
                    <ul class="footer-nav-list mb-4">
                      <li class="footer-nav-item">
                       
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
              <div class="toggle-item">
                <div class="d-md-none">
                  <a href="#" class="btn no-focus btn-sm footer-toogle-btn btn-block text-left content-toggler">
                    <i class="fa fa-angle-down mr-2 toggler-icon"></i> B2bitem for Buyer </a>
                </div>
                <div class="footer-mw-dropdown-content toggleable-content">
                  <div class="pt-3">
                    <div class="d-md-down-none">
                      <h5 class="footer-heading">B2bitem for Buyer</h5>
                    </div>
                    <ul class="footer-nav-list">
                      <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Post Your Buy Requirement</a>
                      </li>
                      
                    </ul>
                    <ul class="footer-nav-list mb-4">
                      <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Global Business Directory</a>
                      </li>
                      <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">List of Companies</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
              <div class="toggle-item">
                <div class="d-md-none">
                  <a href="#" class="btn no-focus btn-sm footer-toogle-btn btn-block text-left content-toggler">
                    <i class="fa fa-angle-down mr-2 toggler-icon"></i> Contact B2Bitem </a>
                </div>
                <div class="footer-mw-dropdown-content toggleable-content">
                  <div class="pt-3">
                    <div class="d-md-down-none">
                      <h5 class="footer-heading">Contact </h5>
                    </div>
                    <ul class="footer-nav-list mb-md-4 mb-lg-5">
                      <li class="footer-nav-item">
                        <a href="#" target="_blank" class="footer-nav-link d-flex">
                          <span class="w-25px mt-05 mr-2">
                            <i class="fa fa-lightbulb-o text-18"></i>
                          </span>
                          <span>Registered Member Support</span>
                        </a>
                      </li>
                      <li class="footer-nav-item">
                        <a href="#" target="_blank" class="footer-nav-link d-flex">
                          <span class="w-25px mt-05 mr-2">
                            <i class="fa fa fa-commenting text-18"></i>
                          </span>
                          <span>Ask an Agent or Messege Us</span>
                        </a>
                      </li>
                      <li class="footer-nav-item">
                        <div class="footer-nav-link d-flex">
                          <span class="w-25px mt-05 mr-2">
                            <i class="fa fa-phone text-18"></i>
                          </span>
                          <span>+1(302) 703-0373</span>
                        </div>
                      </li>
                    </ul>
                    <div class="d-md-down-none">
                      <div class="col-xl-9 px-0 mb-3">
                        <a href="#" class="btn btn-sm btn-block btn-b2bmap-secondary-close">Join Free Now</a>
                      </div>
                      <div class="col-xl-9 px-0 ">
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-md-none">
            <div class="col-lg-9 px-0 mb-3">
              <a href="#" class="btn btn-sm btn-block btn-b2bmap-secondary-close">Join Free Now</a>
            </div>
            <div class="col-lg-9 px-0 ">
              
            </div>
          </div>
        </div>
        <div class="d-md-flex justify-content-center border-top border-light-dark pt-3">
          <div class="mr-md-3 mb-3">
            <span class="text-light text-nowrap text-15 m-0">Global Directories:</span>
          </div>
          <div class="d-lg-flex">
            <div>
              <ul class="list-inline list-after after-white text-lg-center mb-0">
                <li class="list-inline-item mr-3 pr-3 mb-2 pb-1">
                  <a href="#" class="d-flex btn btn-sm text-light py-0 px-0">
                    <span class="mr-2">
                      <!--img src="https://b2bitem.com/public/flags/16x16/cn.png" class="flag"-->
                    </span>
                    <span>China</span>
                  </a>
                </li>
                
                <li class="list-inline-item">
                  <a href="#" class="btn btn-sm btn-outline-light py-0 px-4">More</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer> 
    
    
    <script src="<?=base_url();?>public/frontend/js/popper.min.js"></script>
    <script src="<?=base_url();?>public/frontend/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>public/frontend/js/main.js"></script>
    
    <script src="<?=base_url();?>public/frontend/js/rocket-loader.min.js"></script>
    
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"79becfb2dd43bc21","token":"3cb77567f68e4cf2a0083bf4bf67f7e3","version":"2023.2.0","si":100}' crossorigin="anonymous"></script>
  </body>
</html>