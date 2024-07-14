<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>B2B Item Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo $css_url; ?>/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo $css_url; ?>/plugins/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="<?php echo $css_url; ?>/plugins/datepicker/datepicker3.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo $css_url; ?>/plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?php echo $css_url; ?>/plugins/colorpicker/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="<?php echo $css_url; ?>/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo $css_url; ?>/plugins/datatables/dataTables.bootstrap.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo $css_url; ?>/plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $css_url; ?>/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo $css_url; ?>/dist/css/skins/_all-skins.min.css">

     <link rel="stylesheet" href="<?php echo $css_url; ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

   <!-- jQuery 2.1.4 -->
    <script src="<?php echo $css_url; ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo $css_url; ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $css_url; ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo $css_url; ?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo $css_url; ?>/plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="<?php echo $css_url; ?>/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?php echo $css_url; ?>/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?php echo $css_url; ?>/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo $css_url; ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="<?php echo $css_url; ?>/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="<?php echo $css_url; ?>/plugins/timepicker/bootstrap-timepicker.min.js"></script>

     <script src="<?php echo $css_url; ?>/plugins/datepicker/bootstrap-datepicker.js"></script>
    
    <!-- iCheck 1.0.1 -->
    <script src="<?php echo $css_url; ?>/plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo $css_url; ?>/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $css_url; ?>/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo $css_url; ?>/dist/js/demo.js"></script>
    

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>B2B</b>ITEM</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>B2BITEM</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
        </nav>
      </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
       <?php 
        //$agid = $this->session->userdata('admin_group_id');
       // if($agid == 0){
      ?>

        <li id="dashboard">
          <a href="<?php echo site_url('dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="treeview" id="company">
          <a href="#">
            <i class="fa fa-users"></i>
            <span> Company </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="user_list"><a href="<?php echo site_url('company') ?>"><i class="fa fa-circle-o"></i> Company List</a></li>
            <li id="user_list2"><a href="<?php echo site_url('company/pending_com_list') ?>"><i class="fa fa-circle-o"></i> Pending Company List</a></li>
            <li id="non_verify_company"><a href="<?php echo site_url('company/not_verify_com_list') ?>"><i class="fa fa-circle-o"></i> Not Verify Company</a></li>
            <li id="company_review_data"><a href="<?php echo site_url('company/company_review_data') ?>"><i class="fa fa-circle-o"></i> Company Data Verify List</a></li>
            <li id="usergroup"><a href="<?php echo site_url('company/p_brochure?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i> Brochure</a></li>
            <li id="brand_type"><a href="<?php echo site_url('company/certificate?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i> Certificate</a></li>
            <li id="brand"><a href="<?php echo site_url('company/video?mt=' . mt_rand(0,99999999)) ?>"><i class="fa fa-circle-o"></i> Video</a></li>
          </ul>
        </li>
		
		
		<li class="treeview" id="product">
          <a href="#">
            <i class="fa fa-users"></i>
            <span> Product </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="plist"><a href="<?php echo site_url('product') ?>"><i class="fa fa-circle-o"></i> Product List</a></li>
            <li id="pplist"><a href="<?php echo site_url('product/pending_product_list') ?>"><i class="fa fa-circle-o"></i> Pending Product List</a></li>
          </ul>
        </li>
        
     
        <li class="treeview" id="buysell">
          <a href="#">
            <i class="fa fa-users"></i>
            <span> Buy Sell </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="buyselllist"><a href="<?php echo site_url('buysell') ?>"><i class="fa fa-circle-o"></i> Buy Sell List</a></li>
            <li id="quatation"><a href="<?php echo site_url('quatation') ?>"><i class="fa fa-circle-o"></i> Quatation List</a></li>
          </ul>
        </li>

        <li id="category">
          <a href="<?php echo site_url('category') ?>">
            <i class="fa fa-dashboard"></i> <span>Category</span>
          </a>
        </li>

         <li id="service_category">
          <a href="<?php echo site_url('service_category') ?>">
            <i class="fa fa-dashboard"></i> <span>Service Category</span>
          </a>
        </li>

        <li id="country">
          <a href="<?php echo site_url('country') ?>">
            <i class="fa fa-dashboard"></i> <span>Country</span>
          </a>
        </li>
        <li id="district">
          <a href="<?php echo site_url('district') ?>">
            <i class="fa fa-dashboard"></i> <span>District</span>
          </a>
        </li>

         <!-- user permission info -->
        <li><a href="<?php echo site_url('login/logout') ?>"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>

         <?php //} ?>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
      <?php echo $content_for_layout; ?>
  </div>


  <footer class="main-footer">
    <div class="pull-right hidden-xs">
     
    </div>
    <strong>Copyright &copy;  2021-<?php echo date('Y') ?>.</strong> All rights reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



<script type="text/javascript">
  $(document).ready(function() {

    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
    });
    
  });

</script>
</body>
</html>
