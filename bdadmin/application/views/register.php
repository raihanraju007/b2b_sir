<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  
  
  <link rel="stylesheet" href="<?php echo base_url('asset/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('asset/bower_components/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('asset/bower_components/Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('asset/dist/css/AdminLTE.min.css') ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/iCheck/square/blue.css') ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  </head>
  <body class="hold-transition register-page">
    <div class="register-box" style="width: 750px;">
      <div class="register-logo">
        <a href="#"><b>Election</b>Manage</a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <form action="<?php echo site_url('login/register') ?>" method="post">
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="flatOwnerID">Division</label><br>
                    <select required class="form-control" id="division_id" name="division_id">
                      <option value="">----Select----</option>
                      <?php foreach ($division as $k => $v): ?>
                        <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="flatOwnerID">District</label><br>
                    <select required class="form-control" id="district" name="district_id">
                      <option value="">----Select----</option>
                    </select>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="flatOwnerID">Thana</label><br>
                    <select required class="form-control" id="thana" name="thana_id">
                      <option value="">----Select----</option>
                     
                    </select>
                  </div>
              </div>
              <div class="col-md-6">
                   <div class="form-group">
                      <label for="flatOwnerID">Union</label><br>
                      <select required class="form-control" id="union" name="union_id">
                        <option value="">----Select----</option>
                      </select>
                    </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="flatOwnerID">Word</label><br>
                    <select required class="form-control" id="word" name="word_id">
                      <option value="">----Select----</option>
                     
                    </select>
                  </div>
              </div>
              <div class="col-md-6">
                   <!--div class="form-group">
                      <label for="flatOwnerID">Union</label><br>
                      <select required class="form-control" id="union" name="union_id">
                        <option value="">----Select----</option>
                      </select>
                    </div-->
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="flatOwnerID">Name</label><br>
                      <input required type="text" class="form-control" id="name" name="name">
                  </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group">
                    <label for="flatOwnerID">NID</label><br>
                      <input required type="number" class="form-control" id="nid" name="nid">
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="flatOwnerID">Father Name</label><br>
                      <input required type="text" class="form-control" id="fname" name="fname">
                  </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group">
                    <label for="flatOwnerID">Mother Name</label><br>
                      <input required type="text" class="form-control" id="mname" name="mname">
                  </div>
              </div>
          </div>

           <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="flatOwnerID">Email</label><br>
                      <input required required type="email" class="form-control" id="email" name="email">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="flatOwnerID">Password</label><br>
                      <input required  type="password" class="form-control" maxlength="8" id="password" name="password">
                  </div>
              </div>
              
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="flatOwnerID">Mobile</label><br>
                      <input required type="number" class="form-control" id="mobile" name="mobile">
                  </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group">
                    <label for="flatOwnerID">DOB</label><br>
                      <input required type="date" class="form-control" id="dob" name="dob">
                  </div>
              </div>
          </div>

           <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="flatOwnerID">Age</label><br>
                      <input required type="number" class="form-control" id="age" name="age">
                  </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group">
                    <label for="flatOwnerID">Address</label><br>
                      <input required type="text" class="form-control" id="address" name="address">
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="flatOwnerID">Gender</label><br>
                      <select required class="form-control" id="gender" name="gender">
                        <option value="">----Select----</option>
                        <option value="MALE">Male</option>
                        <option value="FEMALE">Female</option>
                      </select>
                  </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group">
                    <label for="flatOwnerID">Married</label><br>
                      <select required class="form-control" id="married" name="married">
                        <option value="">----Select----</option>
                        <option value="YES">Yes</option>
                        <option value="NO">No</option>
                      </select>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="flatOwnerID">Profession</label><br>
                      <input required type="text" class="form-control" id="profession" name="profession">
                  </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group">
                    <label for="flatOwnerID">Organization</label><br>
                      <input required type="text" class="form-control" id="organization" name="organization">
                  </div>
              </div>
          </div>
          
          
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input required type="checkbox"> I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div><!-- /.col -->
          </div>
        </form>

       

        <a href="<?=site_url('login');?>" class="text-center">I already have a membership</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->

   <!-- /.login-box -->

<!-- jQuery 3 -->

<script src="<?php echo base_url('asset/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('asset/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('asset/plugins/iCheck/icheck.min.js') ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>


  <script type="text/javascript">
    $(document).ready(function() {
    

    $("#division_id").change(function() {
        var division = $(this).val(); 
        $.ajax({
          type: "POST",
          url: "<?php echo $site_url;?>login/get_district_list",
          data: "division="+division,
          success: function(response){  
            $('#district').html(response);
          }
        });          
    });



    $("#district").change(function() {
        var district = $(this).val(); 
        $.ajax({
          type: "POST",
          url: "<?php echo $site_url;?>login/get_thana_list",
          data: "district="+district,
          success: function(response){  
            $('#thana').html(response);
          }
        });          
    });

    $("#thana").change(function() {
        var thana = $(this).val(); 
        $.ajax({
          type: "POST",
          url: "<?php echo $site_url;?>login/get_union_list",
          data: "thana="+thana,
          success: function(response){  
            $('#union').html(response);
          }
        });          
    });

    $("#union").change(function() {
        var union = $(this).val(); 
        $.ajax({
          type: "POST",
          url: "<?php echo $site_url;?>login/get_word_list",
          data: "union="+union,
          success: function(response){  
            $('#word').html(response);
          }
        });          
    });

    });

   



  </script>

