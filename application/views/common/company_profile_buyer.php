<div class="panel-aside" id="userAside">
    <div class="panel-aside-content">
      <div class="user-aside-profile p-3 bg-white border rounded mb-4">
        <div class="aside-logo-box mx-auto mb-3">
          <div class="logo-box-overlay">
            <div class="aside-logo left-company-logo">
				
				<?php 
					if(!empty($this->session->userdata('com_log'))){
					$logourl = "https://b2bitem.com/upload/company/" . $this->session->userdata('com_log');
				?>
			
					<img src="<?=$logourl;?>">
				<?php } ?>
            </div>
          </div>
        </div>
        <h6 class="name text-strong text-center counter-color-primary"> <?=$this->session->userdata('com_name');?> </h6>
        <div class="text-center my-3">
          <a href="#" class="btn btn-sm btn-b2bitem-primary px-4">Update Company Profile</a>
        </div>
      </div>
      <div class="user-aside-content bg-white rounded py-3">
        <div class="user-aside-menu py-3">
          <ul class="list-unstyled user-aside-menu-list d-flex flex-column">
            <li class="user-aside-menu-item">
              <a href="#" class="user-aside-menu-link">
                <span class="mr-2">
                  <i class="fa fa-dashboard"></i>
                </span> Dashboard </a>
            </li>
           <!--  <li class="user-aside-menu-item">
              <a href="https://b2bitem.com/myzone/communication" class="user-aside-menu-link">
                <span class="mr-2">
                  <i class="icofont-envelope"></i>
                </span> Inbox </a>
            </li> -->
            <li class="user-aside-menu-item">
              <a href="https://b2bitem.com/buyer/p_list" class="user-aside-menu-link">
                <span class="mr-2">
                  <i class="fa fa-cube"></i>
                </span> My Products </a>
            </li>
           <!--  <li class="user-aside-menu-item   ">
              <a href="https://b2bitem.com/myzone/buy-offer" class="user-aside-menu-link">
                <span class="mr-2">
                  <i class="icofont-tack-pin"></i>
                </span> Post Buy Requirement </a>
            </li> -->
            <li class="user-aside-menu-item toggle-item
                 active                         ">
              <a href="#" class="user-aside-menu-link">
                <span class="mr-2">
                  <i class="icofont-architecture-alt"></i>
                </span> Business Profile </a>
              <div class="user-aside-submenu togglable-content
                 show                         ">
                <a href="<?=site_url('buyer/brochure');?>" class="user-aside-submenu-item ">
                  <span class="mr-2">
                    <i class="fa fa-angle-right"></i>
                  </span> Submit Brochure </a>
                <a href="<?=site_url('buyer/certificate');?>" class="user-aside-submenu-item ">
                  <span class="mr-2">
                    <i class="fa fa-angle-right"></i>
                  </span> Submit Certificate </a>
                <a href="<?=site_url('buyer/video');?>" class="user-aside-submenu-item ">
                  <span class="mr-2">
                    <i class="fa fa-angle-right"></i>
                  </span> Company / Product Videos </a>
              </div>
            </li>
           <!--  <li class="user-aside-menu-item  ">
              <a href="https://b2bitem.com/myzone/trade-alert" class="user-aside-menu-link">
                <span class="mr-2">
                  <i class="fa fa-bell"></i>
                </span> Trade Alert </a>
            </li>
            <li class="user-aside-menu-item  ">
              <a href="https://b2bitem.com/myzone/support-center" class="user-aside-menu-link">
                <span class="mr-2">
                  <i class="fa fa-spinner fa-spin"></i>
                </span> Help Center </a>
            </li>
            <li class="user-aside-menu-item  ">
              <a href="https://b2bitem.com/myzone/membership/info" class="user-aside-menu-link">
                <span class="mr-2">
                  <i class="fa fa-trophy"></i>
                </span> Membership </a> -->
            </li>
            <li class="user-aside-menu-item  ">
              <a href="<?=site_url('buyer/account_settings');?>" class="user-aside-menu-link">
                <span class="mr-2">
                  <i class="fa fa-cog"></i>
                </span> Settings </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>