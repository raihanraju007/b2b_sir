<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li id="dashboardMainMenu">
          <a href="<?php echo base_url('dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        
            <li class="treeview" id="mainFlatNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Flat Management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              
              <li id="flatsNav"><a href="<?php echo base_url('flats/?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i> Flat List</a></li>

              
              <li id="flatOwnerNav"><a href="<?php echo base_url('flatowners/?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i> Flat Owner List</a></li>

              <li id="flatsAdvancePayment"><a href="<?php echo base_url('flats/advance_payment/?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i> Flat Advance List</a></li>

              <li id="stuffNav"><a href="<?php echo base_url('stuff/?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i> Stuff List</a></li>
           
            </ul>
          </li>

        <li class="treeview" id="mainAccountNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Flat Account</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">

              <li id="headNav"><a href="<?php echo base_url('accounts/head_list/?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i> Head List</a></li>

              <li id="cmsNav"><a href="<?php echo base_url('accounts/create_monthly_service/?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i> Create Monthly Service</a></li>

              <li id="bankNav">
                <a href="<?php echo base_url('accounts/?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i> Bank Details</a>
              </li>

              <li id="hcashNav">
                <a href="<?php echo base_url('accounts/hand_cash/?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i> Hand Cash</a>
              </li>

              <li id="cashtobankNav">
                <a href="<?php echo base_url('accounts/cashtobank/?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i> Cash To Bank </a>
              </li>

              <li id="bankwithdrawNav">
                <a href="<?php echo base_url('accounts/bankwithdraw/?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i> Bank Withdraw </a>
              </li>

            </ul>
          </li>


        <li class="treeview" id="mainPaymentNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Flat Payment</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">

              <li id="communidetyNav"><a href="<?php echo base_url('community/?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i> Community Payment </a></li>

              <li id="servicePyamentNav"><a href="<?php echo base_url('payments/service_payment/?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i> Service Payment </a></li>

              <li id="othrePaymentNav"><a href="<?php echo base_url('incomes/?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i>Other Payment </a></li>

              <li id="expensePaymentNav"><a href="<?php echo base_url('expense/?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i> Expense </a></li>

            </ul>
          </li>

          <li id="transactionNav"><a href="<?php echo base_url('transactionhistory/?mt=' . mt_rand(0,99999999)) ?>"><i class="glyphicon glyphicon-tags"></i> Transaction History</a></li>

          <li class="treeview" id="mainReportNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Flat Report</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">

              <li id="servicePaymentReporNav"><a href="<?php echo base_url('reports/servicepayment_report/?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i> Service Payment </a></li>

              <li id="incomeEspenseReporNav"><a href="<?php echo base_url('reports/income_expense_report/?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i>Head Wise Income & Expense </a></li>

              <li id="otherIEReportNav"><a href="<?php echo base_url('reports/other_income_expense_report/?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i>Other Income & Expense </a></li>


            </ul>
          </li>
<!-- 
        <?php if($user_permission): ?>
          <?php if(in_array('createUser', $user_permission) || in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
            <li class="treeview" id="mainUserNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Users</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <?php if(in_array('createUser', $user_permission)): ?>
              <li id="createUserNav"><a href="<?php echo base_url('users/create') ?>"><i class="fa fa-circle-o"></i> Add User</a></li>
              <?php endif; ?>

              <?php if(in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
              <li id="manageUserNav"><a href="<?php echo base_url('users') ?>"><i class="fa fa-circle-o"></i> Manage Users</a></li>
            <?php endif; ?>
            </ul>
          </li>
          <?php endif; ?>

          <?php if(in_array('createGroup', $user_permission) || in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
            <li class="treeview" id="mainGroupNav">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Groups</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createGroup', $user_permission)): ?>
                  <li id="addGroupNav"><a href="<?php echo base_url('groups/create') ?>"><i class="fa fa-circle-o"></i> Add Group</a></li>
                <?php endif; ?>
                <?php if(in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
                <li id="manageGroupNav"><a href="<?php echo base_url('groups') ?>"><i class="fa fa-circle-o"></i> Manage Groups</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?> -->

          <!-- 
          <?php if(in_array('createBrand', $user_permission) || in_array('updateBrand', $user_permission) || in_array('viewBrand', $user_permission) || in_array('deleteBrand', $user_permission)): ?>
            <li id="brandNav">
              <a href="<?php echo base_url('brands/') ?>">
                <i class="glyphicon glyphicon-tags"></i> <span>Brands</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(in_array('createCategory', $user_permission) || in_array('updateCategory', $user_permission) || in_array('viewCategory', $user_permission) || in_array('deleteCategory', $user_permission)): ?>
            <li id="categoryNav">
              <a href="<?php echo base_url('category/') ?>">
                <i class="fa fa-files-o"></i> <span>Category</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(in_array('createStore', $user_permission) || in_array('updateStore', $user_permission) || in_array('viewStore', $user_permission) || in_array('deleteStore', $user_permission)): ?>
            <li id="storeNav">
              <a href="<?php echo base_url('stores/') ?>">
                <i class="fa fa-files-o"></i> <span>Stores</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(in_array('createAttribute', $user_permission) || in_array('updateAttribute', $user_permission) || in_array('viewAttribute', $user_permission) || in_array('deleteAttribute', $user_permission)): ?>
          <li id="attributeNav">
            <a href="<?php echo base_url('attributes/') ?>">
              <i class="fa fa-files-o"></i> <span>Attributes</span>
            </a>
          </li>
          <?php endif; ?>

          <?php if(in_array('createProduct', $user_permission) || in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
            <li class="treeview" id="mainProductNav">
              <a href="#">
                <i class="fa fa-cube"></i>
                <span>Products</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createProduct', $user_permission)): ?>
                  <li id="addProductNav"><a href="<?php echo base_url('products/create') ?>"><i class="fa fa-circle-o"></i> Add Product</a></li>
                <?php endif; ?>
                <?php if(in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
                <li id="manageProductNav"><a href="<?php echo base_url('products') ?>"><i class="fa fa-circle-o"></i> Manage Products</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>


          <?php if(in_array('createOrder', $user_permission) || in_array('updateOrder', $user_permission) || in_array('viewOrder', $user_permission) || in_array('deleteOrder', $user_permission)): ?>
            <li class="treeview" id="mainOrdersNav">
              <a href="#">
                <i class="fa fa-dollar"></i>
                <span>Orders</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createOrder', $user_permission)): ?>
                  <li id="addOrderNav"><a href="<?php echo base_url('orders/create') ?>"><i class="fa fa-circle-o"></i> Add Order</a></li>
                <?php endif; ?>
                <?php if(in_array('updateOrder', $user_permission) || in_array('viewOrder', $user_permission) || in_array('deleteOrder', $user_permission)): ?>
                <li id="manageOrdersNav"><a href="<?php echo base_url('orders') ?>"><i class="fa fa-circle-o"></i> Manage Orders</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>

          <?php if(in_array('viewReports', $user_permission)): ?>
            <li id="reportNav">
              <a href="<?php echo base_url('reports/') ?>">
                <i class="glyphicon glyphicon-stats"></i> <span>Reports</span>
              </a>
            </li>
          <?php endif; ?>


          <?php if(in_array('updateCompany', $user_permission)): ?>
            <li id="companyNav"><a href="<?php echo base_url('company/') ?>"><i class="fa fa-files-o"></i> <span>Company</span></a></li>
          <?php endif; ?>
 -->
         

        <!-- <li class="header">Settings</li> -->

        <?php if(in_array('viewProfile', $user_permission)): ?>
          <li><a href="<?php echo base_url('users/profile/') ?>"><i class="fa fa-user-o"></i> <span>Profile</span></a></li>
        <?php endif; ?>
        <?php if(in_array('updateSetting', $user_permission)): ?>
          <li><a href="<?php echo base_url('users/setting/') ?>"><i class="fa fa-wrench"></i> <span>Setting</span></a></li>
        <?php endif; ?>

        <?php endif; ?>
        <!-- user permission info -->
        <li><a href="<?php echo base_url('auth/logout') ?>"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>