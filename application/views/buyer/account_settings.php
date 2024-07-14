<?php 
  require_once(APPPATH."views/common/company_profile_buyer.php"); 
?>

<style type="text/css">
  /*======== Loader ==============*/
        .preloader {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 300;
            background-color: #FFFFFF;
            display: none;
        }


        .loader {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            border: 5px solid #f3f3f3;
            border-top: 5px solid var(--business-primary);
            width: 70px;
            height: 70px;
            -webkit-animation: spin 2s linear infinite; /* Safari */
            animation: spin 2s linear infinite;
        }
        .error {
            color: #ff0000;
        }
</style>
<div class="panel-body">
            <div class="border bg-white rounded mb-4">
              <div class="d-flex py-2 px-3 border-bottom">
                <h3 class="my-1 text-md-down-20">Account Settings</h3>
              </div>
              <div class="p-3 p-lg-4">
                <div class="mb-4">
                  <div class="preloader">
                    <div class="loader"></div>
                  </div>
                  <ul class="list-unstyled setting-list mb-0 error-list">
                    <li>
                      <div class="border-bottom pb-3 pb-lg-2">
                        <div class="row">
                          <div class="col-6 col-lg-3">
                            <span>Company Name</span>
                          </div>
                          <div class="col-6 col-lg-3 text-right order-lg-last">
                            <a href="<?=site_url('buyer/get_verified');?>" class="btn btn-sm btn-b2bmap-secondary py-0">Get Verified</a>
                          </div>
                          <div class="col-lg-6 mt-2 mt-lg-0">
                            <p class="text-muted mb-0"><?=$company_info['company_name'];?> - <span class="text-danger">Not verified</span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="border-bottom pb-3 pb-lg-2">
                        <div class="row">
                          <div class="col-lg-3">
                            <span>B2bmap URL</span>
                          </div>
                          <div class="col-8 col-lg-7">
                            <span class="text-info"><?=$company_info['status'];?></span>
                          </div>
                          <div class="col-4 col-lg-2 text-right"></div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="border-bottom pb-3 pb-lg-2">
                        <div class="row">
                          <div class="col-6 col-lg-3">
                            <span>Member Type</span>
                          </div>
                         <!--  <div class="col-6 col-lg-3 text-right order-lg-last">
                            <a href="https://b2bmap.com/myzone/membership/info" class="btn btn-sm btn-b2bmap-secondary py-0"> Upgrade <span class="d-lg-down-none">Membership</span>
                              <span class="d-lg-none">Now</span>
                            </a>
                          </div> -->
                          <div class="col-lg-6">
                            <span class="text-muted"> free </span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="border-bottom pb-3 pb-lg-2">
                        <div class="row">
                          <div class="col-lg-3">
                            <span>Company Website</span>
                          </div>
                          <div class="col-9 col-lg-7">
                            <span><?=$company_info['web_link'];?></span>
                          </div>
                          <div class="col-3 col-lg-2 text-right"></div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="border-bottom pb-3 pb-lg-2">
                        <div class="row">
                          <div class="col-lg-3">
                            <span>Contact Person</span>
                          </div>
                          <div class="col-9 col-lg-7">
                            <span class="text-muted">
                              <span class="contact-person"><?=$company_info['contact_person'];?></span> () </span>
                          </div>
                          <div class="col-3 col-lg-2 text-right">
                            <a href="#" data-toggle="collapse" data-target="#contactPersonCollapsable" class="text-muted-to-primary text-13 clear-error-message">
                              <i class="fa fa-edit"></i> Edit </a>
                          </div>
                        </div>
                      </div>
                      <div class="collapse" id="contactPersonCollapsable">
                        <div class="pt-3 pb-4">
                          <form action="<?=site_url('buyer/save_contact_person_name');?>" method="POST" id="saveContactPersonName">
                            
                            <div class="row">
                              <div class="col-lg-9 offset-lg-3">
                                <div class="success-message"></div>
                                <div class="setting-form">
                                  <div class="form-group">
                                    <label>Name</label>
                                    <div class="row ">
                                      <!-- <div class="col-md-2">
                                        <span class="error title"></span>
                                      </div> -->
                                      <div class="col-md-12">
                                        <input type="text" name="name" class="form-control val-name" placeholder="Full Name">
                                        <span class="error name"></span>
                                      </div>
                                    </div>
                                  </div>
                                  <button type="submit" class="btn btn-sm btn-b2bmap-secondary px-5">Save</button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="border-bottom pb-3 pb-lg-2">
                        <div class="row">
                          <div class="col-lg-3">
                            <span>Email</span>
                          </div>
                          <div class="col-9 col-lg-7">
                            <span class="text-muted new-email-address">
                              <a href="/cdn-cgi/l/email-protection"><?=$company_info['email'];?></a>
                            </span>
                          </div>
                          <div class="col-3 col-lg-2 text-right">
                           <!--  <a href="#" data-toggle="collapse" data-target="#emailAddressCollapsable" class="text-muted-to-primary text-13 clear-error-message ">
                              <i class="fa fa-edit"></i> Edit </a> -->
                          </div>
                        </div>
                      </div>
                      <div class="collapse" id="emailAddressCollapsable">
                        <form method="POST" action="https://b2bmap.com/myzone/account-settings/send-email-verification-code" id="sendEmailVerificationCode">
                          
                          <div class="pt-3 pb-4">
                            <div class="row">
                              <div class="col-lg-9 offset-lg-3">
                                <div class="notification-message"></div>
                                <div class="form-group">
                                  <label>New Email Address</label>
                                  <input type="email" name="email" placeholder="New email address" class="form-control val-email">
                                  <span class="error email"></span>
                                </div>
                                <button type="submit" class="btn btn-sm btn-b2bmap-secondary px-5">Submit</button>
                              </div>
                            </div>
                          </div>
                        </form>
                        <form method="POST" action="https://b2bmap.com/myzone/account-settings/save-new-email" id="saveNewEmail" style="display: none">
                          
                          <div class="pt-3 pb-4">
                            <div class="row">
                              <div class="col-lg-9 offset-lg-3">
                                <div class="notification-message"></div>
                                <div class="form-group">
                                  <label>Enter The Verification Code You Received at: <span class="success-message"></span>
                                  </label>
                                  <input type="text" name="ag_code" placeholder="Verification Code" class="form-control val-ag-code">
                                  <span class="error ag_code"></span>
                                </div>
                                <button type="submit" class="btn btn-sm btn-b2bmap-secondary px-5">Verify</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </li>
                    <li>
                      <div class="border-bottom pb-3 pb-lg-2">
                        <div class="row">
                          <div class="col-lg-3">
                            <span>Phone Number</span>
                          </div>
                          <div class="col-7 col-lg-7">
                            <span class="text-muted phone-number"><?=$company_info['mobile'];?></span>
                          </div>
                          <div class="col-5 col-lg-2 text-right phone-verification-text">
                           <!--  <a href="#" data-toggle="modal" data-target="#phoneCollapsable" class="btn btn-sm py-0 btn-b2bmap-secondary clear-error-message">
                              <i class="fa fa-edit"></i> Verify Phone </a> -->
                          </div>
                        </div>
                      </div>
                      <div class="modal fade" id="phoneCollapsable" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content border-0 common-shadow-box-lg">
                            <div class="modal-header py-2">
                              <h6 class="modal-title text-strong text-muted m-0">Verify Phone Number</h6>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="p-3 p-lg-4">
                                <form method="POST" action="https://b2bmap.com/myzone/account-settings/save-new-phone-number" id="verifyPhoneNumberForm">
                                  
                                  <div class="preloader">
                                    <div class="loader"></div>
                                  </div>
                                  <div class="success-message"></div>
                                  <input type="hidden" name="is_phone_number_change" value="no" id="is_phone_number_change">
                                  <div>
                                    <p class="text-muted mb-4">B2bmap will send a SMS with verification code to verify your phone number: <span class="text-18 text-strong text-business-secondary">+8801674291242</span>
                                      <span class="px-1">-</span>
                                      <a href="#" data-toggle="collapse" data-target="#phoneVerifyNumberChange" class="text-14 text-business-tertiary change-phone-number">Change Now</a>
                                    </p>
                                    <div class="collapse no-transition" id="phoneVerifyNumberChange">
                                      <div class="mb-4">
                                        <div class="d-flex align-items-start">
                                          <div class="btn btn-sm border mr-2"> +880 </div>
                                          <div class="flex-grow-1">
                                            <input type="text" name="new_phone_number" class="form-control form-control-sm val-new-phone-number" placeholder="Enter new phone number">
                                            <small class="error new_phone_number"></small>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="text-center mb-3">
                                      <button type="submit" class="btn btn-b2bmap-secondary px-4">Send SMS with Code</button>
                                    </div>
                                  </div>
                                </form>
                                <div style="display: none" id="phoneNumberVerificationStep2">
                                  <div class="px-lg-5">
                                    <form method="post" action="https://b2bmap.com/myzone/account-settings/check-phone-number-verification-code" id="checkPhoneNumberVerificationCode">
                                      
                                      <div class="preloader">
                                        <div class="loader"></div>
                                      </div>
                                      <h5 class="text-center mb-4">Enter The Verification Code You Received at: <span class="encrypted-phone-number"></span>
                                      </h5>
                                      <div class="form-group mb-4 ">
                                        <div class="success-message"></div>
                                        <div class="px-2">
                                          <div class="row small-gutters">
                                            <div class="col">
                                              <input type="text" name="code_1" minlength="1" maxlength="1" class="form-control px-0 text-center no-focus single-input-val code_1 " required aria-label="input">
                                            </div>
                                            <div class="col">
                                              <input type="text" name="code_2" minlength="1" maxlength="1" class="form-control px-0 text-center no-focus single-input-val code_2 " required aria-label="input">
                                            </div>
                                            <div class="col">
                                              <input type="text" name="code_3" minlength="1" maxlength="1" class="form-control px-0 text-center no-focus single-input-val code_3 " required aria-label="input">
                                            </div>
                                            <div class="col">
                                              <input type="text" name="code_4" minlength="1" maxlength="1" class="form-control px-0 text-center no-focus single-input-val code_4 " required aria-label="input">
                                            </div>
                                            <div class="col">
                                              <input type="text" name="code_5" minlength="1" maxlength="1" class="form-control px-0 text-center no-focus single-input-val code_5 " required aria-label="input">
                                            </div>
                                            <div class="col">
                                              <input type="text" name="code_6" minlength="1" maxlength="1" class="form-control px-0 text-center no-focus single-input-val code_6 " required aria-label="input">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group text-center mb-0">
                                        <button type="submit" class="btn btn-b2bmap-secondary px-5">Submit</button>
                                      </div>
                                    </form>
                                  </div>
                                  <p class="text-muted text-14 mt-4">By clicking "submit", you agree to receive SMS messages from B2bmap.com to provide updates on your account. Massage and data rates may apply.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="border-bottom pb-2">
                        <div class="row">
                          <div class="col-lg-3">
                            <span>Password</span>
                          </div>
                          <div class="col-9 col-lg-7">
                            <span class="text-muted">***************</span>
                          </div>
                          <div class="col-3 col-lg-2 text-right">
                            <a href="#" data-toggle="collapse" data-target="#passwordCollapsable" class="text-muted-to-primary text-13 clear-error-message">
                              <i class="fa fa-edit"></i> Change Password </a>
                          </div>
                        </div>
                      </div>
                      <div class="collapse" id="passwordCollapsable">
                        <div class="py-4">
                          <div class="row">
                            <div class="col-lg-9 offset-lg-3">
                              <form action="<?=site_url('buyer/save_password');?>" method="post" id="changePassword" class="setting-form">
                                
                                <div class="notification-message"></div>
                                <div class="success-message"></div>
                                <div class="password-input-group">
                                  <!-- <div class="form-group">
                                    <input type="password" name="current_password" id="current_password" placeholder="Enter current password" class="form-control" aria-label="input">
                                    <span class="error current_password"></span>
                                  </div> -->
                                  <div class="form-group">
                                    <input type="password" name="password" id="password" placeholder="Enter new password" class="form-control" aria-label="input">
                                    <span class="error password"></span>
                                  </div>
                                  <!-- <div class="form-group">
                                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm new password" class="form-control" aria-label="input">
                                    <span class="error confirm_password"></span>
                                  </div> -->
                                  <button type="submit" class="btn btn-sm btn-b2bmap-secondary px-4">Change Password</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="border bg-white rounded mb-4">
              <div class="d-flex py-2 px-3 border-bottom">
                <h4 class="my-1 text-md-down-20">My Payment</h4>
              </div>
              <div class="p-3 p-lg-4">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="row mb-3">
                      <div class="col-lg-4 mb-2 mb-lg-0">
                        <span>Membership Status</span>
                      </div>
                      <div class="col-lg-8">
                        <span class="text-business-secondary">Free Member</span>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-7 col-lg-4 mb-2 mb-lg-0">
                        <span>Amount Paid</span>
                      </div>
                      <div class="col-lg-8">
                        <span class="text-muted mr-2">$0.00</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="text-center border-lg-left d-flex flex-column justify-content-center h-100 pl-lg-4 mb-3">
                      <!-- <div>
                        <a href="https://b2bmap.com/myzone/membership/info" class="btn btn-sm btn-b2bmap-secondary px-5">Upgrade Now</a>
                      </div>
                      <a href="https://b2bmap.com/myzone/membership/info" class="text-13 text-muted">View Plan & Pricing</a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="text-right">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#deactivateAccountModal" class="text-muted opacity-7">Deactivate My Account</a>
              </div>
              <div class="modal fade" id="deactivateAccountModal">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content border-0">
                    <div class="modal-header">
                      <h4 class="modal-title">Deactivate My Account</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body p-4">
                      <div class="preloader">
                        <div class="loader"></div>
                      </div>
                      <form method="POST" action="https://b2bmap.com/myzone/submit-deactivate-request" class="setting-form" id="submitDeactivateRequest">
                        
                        <div class="success-message"></div>
                        <div class="form-group">
                          <label>Reason For Deactivate</label>
                          <textarea name="reason" placeholder="Reason for deactivate account..." class="form-control val-reason"></textarea>
                          <span class="error reason"></span>
                        </div>
                        <button type="submit" class="btn btn-sm btn-b2bmap-secondary px-4">Send Request</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



<script type="text/javascript">
$(document).ready(function(){

    $("#saveContactPersonName").submit(function(e) {
      e.preventDefault();
      $('.preloader').show(1);
      var form = $(this);
      var url = form.attr('action');
      $("#saveContactPersonName .error").html("");
      $.ajax({
        type: "POST",
        url: url,
        dataType: 'json',
        data: form.serialize(),
        success: function(data) {
          if (data.status === 200) {
            $(".contact-person").text(data.contact_person);
            $("#saveContactPersonName .val-name").val("");
            $("#saveContactPersonName .success-message").html('<div class="alert alert-success text-18 text-center hide mb-4"> ' + data.message + ' </div>').delay(1500).fadeOut(300);
            $('.preloader').fadeOut(300);
          }
        },
        error: function(xhr) {
          var err_response = JSON.parse(xhr.responseText);
          console.log(err_response);
          $.each(err_response.errors, function(key, value) {
            $("#saveContactPersonName ." + key).html("<i class='fa fa-warning'></i> " + value);
          });
          $('.preloader').fadeOut(300);
        }
      });
    });


$("#changePassword").submit(function(e) {
  e.preventDefault();
  $('.preloader').show(1);
  var form = $(this);
  var url = form.attr('action');
  $("#changePassword .error").html("");
  $.ajax({
    type: "POST",
    url: url,
     dataType: 'json',
    data: form.serialize(),
    success: function(data) {
      if (data.status === 'invalid') {
        $("#changePassword .notification-message").html('<div class="alert alert-danger text-18 text-center mb-4"> ' + data.message + ' </div>').delay(3000).fadeOut(300);
        $('.preloader').fadeOut(300);
      }
      if (data.status === 200) {
        $("#changePassword #current_password").val("");
        $("#changePassword #password").val("");
        $("#changePassword #confirm_password").val("");
        $('#changePassword .password-input-group').hide(1);
        $("#changePassword .success-message").html('' +
          '<div class="alert bg-light-white text-18 text-center mb-4">\n' +
          '<i class="icofont-check-alt fa-2x text-business-secondary"></i>\n' +
          '<p class="mb-1">Your password has been changed successfully.</p>\n' +
          '<p class="mb-0">Use your new password to log in.</p>\n' +
          '</div>' +
          '').delay(3000).fadeOut(300);
        $('.preloader').fadeOut(300);
        $('#passwordCollapsable').delay(3000).queue(function() {
          $(this).removeClass('show');
          $('#changePassword .password-input-group').delay(1000).show();
        });
      }
    },
    error: function(xhr) {
      var err_response = JSON.parse(xhr.responseText);
      console.log(err_response);
      $.each(err_response.errors, function(key, value) {
        $("#changePassword ." + key).html("<i class='fa fa-warning'></i> " + value);
      });
      $('.preloader').fadeOut(300);
    }
  });
});




});
    
  </script>