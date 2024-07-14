

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Company Profile</title>
    <meta name="csrf-token"> -->
    
  
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/public/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>public/frontend/css/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?=base_url();?>public/frontend/css/icofont/icofont.min.css">

    <link rel="icon" type="image/x-icon" href="https://b2bmap.com/public/images/fav.png" />

    <link rel="stylesheet" href="https://b2bmap.com/public/css/toastr.min.css">

    <link rel="stylesheet" type="text/css" href="https://b2bmap.com/public/css/summernote-bs4.css">

    <link rel="stylesheet" type="text/css" href="https://b2bmap.com/public/plugin/multiple-file/multiple-file.css">
    
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>public/member/css/main.css">

    <style>
      .error {
        color: #ff0000;
      }
    </style>
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>public/frontend/css/googlefonts.css">
   
  </head>
  <body>
    <nav class="navbar navbar-expand-lg biz-header mb-4">
      <div class="container custom-container px-sm-3">
        <div class="d-flex align-items-center">
          <button class="user-aside-toggler navbar-toggler border mr-2 px-2 pb-1 pt-0 hide" type="button" data-toggle="aside" data-target="#userAside">
            <i class="fa fa-bars text-15"></i>
          </button>
          <a class="navbar-brand small-brand d-block" href="https://b2bitem.com" target="_blank">
            <img src="https://b2bitem.com/upload/b2bitem.png" class="img-fluid">
          </a>
        </div>
        <div class="d-flex align-items-center order-lg-1">
          <a href="https://b2bmap.com/myzone/communication" class="nav-link mt-1">
            <span class="position-relative">
              <i class="fa fa-envelope-o text-20 text-muted"></i>
              <span class="count">0</span>
            </span>
          </a>
          <div class="nav-link px-3 dropdown header-user">
            <div data-toggle="dropdown" class="box-20 cursor">
              <i class="icofont-ui-user text-20 text-muted opacity-7"></i>
            </div>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="d-flex justify-content-between align-self-center mx-n2 py-2">
                <div class="px-2 border-right">
                  <a href="https://b2bmap.com/myzone/dashboard" class="dropdown-item py-0">
                    <i class="fa fa-dashboard mr-2"></i> Dashboard </a>
                </div>
                <div class="px-2">
                  <a href="https://b2bmap.com/logout" class="dropdown-item py-0">
                    <i class="fa fa-sign-out text-14 mr-2"></i> Logout </a>
                </div>
              </div>
              <a href="https://b2bmap.com/myzone/communication" class="dropdown-item">
                <i class="fa fa-envelope-o text-14 mr-2"></i> Inbox </a>
              <a href="https://b2bmap.com/myzone/update-profile" class="dropdown-item">
                <i class="icofont-architecture-alt text-14 mr-2"></i> Update Profile </a>
              <a href="https://b2bmap.com/myzone/product" class="dropdown-item">
                <i class="fa fa-cube text-14 mr-2"></i> My Products </a>
              <div class="dropdown-divider"></div>
              <div>
                <a href="https://b2bmap.com/myzone/buy-offer/create" class="dropdown-item text-wrap">
                  <span class="d-block">Submit Buy Requirement</span>
                  <small class="d-block">Submit your buying needs to get quotes from top suppliers.</small>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="bizMenubar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown mr-3">
              <a href="https://b2bmap.com" data-toggle="dropdown" class="nav-link">
                <span class="mr-1">
                  <i class="fa fa-home text-link"></i>
                </span> B2bmap </a>
              <div class="dropdown-menu rounded-0">
                <a href="https://b2bmap.com" target="_blank" class="dropdown-item d-flex px-3">
                  <span class="mr-2">
                    <i class="fa fa-home link-icon"></i>
                  </span> Home </a>
                <a href="https://b2bmap.com/products" target="_blank" class="dropdown-item d-flex px-3">
                  <span class="mr-2">
                    <i class="fa fa-cube link-icon"></i>
                  </span> Products </a>
                <a href="https://b2bmap.com/business-directory" target="_blank" class="dropdown-item d-flex px-3">
                  <span class="mr-2">
                    <i class="fa fa-list-ul link-icon"></i>
                  </span> Business Directory </a>
                <a href="https://b2bmap.com/b2b-leads" target="_blank" class="dropdown-item d-flex px-3">
                  <span class="mr-2">
                    <i class="fa fa-eraser link-icon"></i>
                  </span> B2B Trade </a>
                <a href="https://b2bmap.com/companies" target="_blank" class="dropdown-item d-flex px-3">
                  <span class="mr-2">
                    <i class="fa fa-industry link-icon"></i>
                  </span> Companies </a>
              </div>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" href="https://b2bmap.com/myzone/support-center">
                <span class="mr-1">
                  <i class="fa fa-spinner fa-spin text-link"></i>
                </span> Help Center </a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" href="https://b2bmap.com/myzone/membership/info">
                <span class="mr-1">
                  <i class="fa fa-trophy text-link"></i>
                </span> Membership </a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" href="https://b2bmap.com/myzone/account-settings">
                <span class="mr-1">
                  <i class="fa fa-cog text-link"></i>
                </span> Settings </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="main-body">
      <?php echo $content_for_layout; ?>
    </main>
    <footer class="footer border-top bg-white py-3 mt-5">
      <div class="container custom-container">
        <p class="text-13 text-lg-down-11 text-center m-0">B2bmap.com Connecting B2B Buyers and Suppliers Around The World!</p>
        <ul class="list-inline text-center mb-0">
          <li class="list-inline-item">
            <a href="https://b2bmap.com/myzone/dashboard" target="_blank" class="text-13 text-lg-down-11 text-muted">Dashboard</a>
          </li>
          <li class="list-inline-item">
            <a href="https://b2bmap.com/terms" target="_blank" class="text-13 text-lg-down-11 text-muted">Terms of Use</a>
          </li>
          <li class="list-inline-item">
            <a href="https://b2bmap.com/privacy-policy" target="_blank" class="text-13 text-lg-down-11 text-muted">Privacy Policy</a>
          </li>
        </ul>
        <p class="m-0 text-center text-13 text-lg-down-11">Copyright ©2023 B2bmap.com - All rights reserved.</p>
      </div>
    </footer>
    <div class="modal fade" id="rankTopBusinessAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content border-0 shadow">
          <div class="modal-body p-3 p-xl-5">
            <h4 class="text-center text-theme mt-2">
              <span class="mr-1">
                <i class="fa fa-trophy text-muted text-18"></i>
              </span> Become Premium Member
            </h4>
            <div class="w-100px mx-auto border-bottom border-business-secondary mt-3 mt-lg-4 mb-2 mb-lg-4"></div>
            <p class="text-center mb-2 text-lg-20 pt-2 pt-lg-3">Top Rank Your Listing to Gain More Business - Grow Fast.</p>
            <h5 class="text-center">
              <a href="javascript:void(0)" data-html="true" data-content="">
              </a>
            </h5>
          </div>
          <div class="modal-footer d-block p-3 py-lg-4 px-xl-5">
            <div class="d-flex mx-n2 mx-lg-n3">
              <div class="col px-2 px-lg-3">
                <a href="https://b2bmap.com/myzone/membership/info" class="btn text-nowrap btn-outline-secondary btn-block py-lg-2 px-3 rounded-0"> Plans & Pricing </a>
              </div>
              <div class="col px-2 px-lg-3">
                <a href="https://b2bmap.com/myzone/membership/info" class="btn text-nowrap text-black-to-white btn-outline-b2bmap-secondary py-lg-2 btn-block rounded-0"> Upgrade Now </a>
              </div>
            </div>
            <div class="text-right mt-4">
              <a href="javascript:void(0);" class="text-13 text-muted" data-dismiss="modal">No Thanks</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="rankTopProductAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content border-0 shadow">
          <div class="modal-body p-3 p-xl-5">
            <h4 class="text-center text-theme mt-3">
              <span class="mr-1">
                <i class="fa fa-warning text-muted text-18"></i>
              </span> Become Premium Member
            </h4>
            <div class="w-100px mx-auto border-bottom border-business-secondary mt-3 mt-lg-4 mb-2 mb-lg-4"></div>
            <p class="text-center mb-2 text-lg-20 pt-2 pt-lg-3">Top rank your product to rise above the competition.</p>
          </div>
          <div class="modal-footer d-block p-3 py-lg-4 px-xl-5">
            <div class="d-flex mx-n2 mx-lg-n3">
              <div class="col px-2 px-lg-3">
                <a href="https://b2bmap.com/myzone/membership/info" class="btn text-nowrap btn-outline-secondary btn-block py-lg-2 px-3 rounded-0"> Plans & Pricing </a>
              </div>
              <div class="col px-2 px-lg-3">
                <a href="https://b2bmap.com/myzone/membership/info" class="btn text-nowrap text-black-to-white btn-outline-b2bmap-secondary py-lg-2 btn-block rounded-0"> Upgrade Now </a>
              </div>
            </div>
            <div class="text-right mt-4">
              <a href="javascript:void(0);" class="text-13 text-muted" data-dismiss="modal">No Thanks</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="makeProductFeaturedAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content border-0 shadow">
          <div class="modal-body p-3 p-xl-5">
            <h4 class="text-center text-theme mt-3">
              <span class="mr-1">
                <i class="fa fa-warning text-muted text-18"></i>
              </span> Become Premium Member
            </h4>
            <div class="w-100px mx-auto border-bottom border-business-secondary mt-3 mt-lg-4 mb-2 mb-lg-4"></div>
            <p class="text-center mb-2 text-lg-20 pt-2 pt-lg-3">Feature your best product to get quick attention from buyers.</p>
          </div>
          <div class="modal-footer d-block p-3 py-lg-4 px-xl-5">
            <div class="d-flex mx-n2 mx-lg-n3">
              <div class="col px-2 px-lg-3">
                <a href="https://b2bmap.com/myzone/membership/info" class="btn text-nowrap btn-outline-secondary btn-block py-lg-2 px-3 rounded-0"> Plans & Pricing </a>
              </div>
              <div class="col px-2 px-lg-3">
                <a href="https://b2bmap.com/myzone/membership/info" class="btn text-nowrap text-black-to-white btn-outline-b2bmap-secondary py-lg-2 btn-block rounded-0"> Upgrade Now </a>
              </div>
            </div>
            <div class="text-right mt-4">
              <a href="javascript:void(0);" class="text-13 text-muted" data-dismiss="modal">No Thanks</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="productPostingAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content border-0 shadow">
          <div class="modal-body p-3 p-xl-5">
            <h4 class="text-center text-theme mt-3">
              <span class="mr-1">
                <i class="fa fa-warning text-muted text-18"></i>
              </span> You've Reached Your Product Listing Limit
            </h4>
            <div class="w-100px mx-auto border-bottom border-business-secondary mt-3 mt-lg-4 mb-2 mb-lg-4"></div>
            <p class="text-center mb-2 text-lg-20 pt-2 pt-lg-3">Free members can showcase upto 20 products.</p>
            <p class="text-center mb-3 text-1g-20">Please upgrade your account to take full benefits of B2bmap.com </p>
          </div>
          <div class="modal-footer d-block p-3 py-lg-4 px-xl-5">
            <div class="d-flex mx-n2 mx-lg-n3">
              <div class="col px-2 px-lg-3">
                <a href="https://b2bmap.com/myzone/membership/info" class="btn text-nowrap btn-outline-secondary btn-block py-lg-2 px-3 rounded-0"> Plans & Pricing </a>
              </div>
              <div class="col px-2 px-lg-3">
                <a href="https://b2bmap.com/myzone/membership/info" class="btn text-nowrap text-black-to-white btn-outline-b2bmap-secondary py-lg-2 btn-block rounded-0"> Upgrade Now </a>
              </div>
            </div>
            <div class="text-right mt-4">
              <a href="javascript:void(0);" class="text-13 text-muted" data-dismiss="modal">No Thanks</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="sellOfferPostingAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content border-0 shadow">
          <div class="modal-body p-3 p-xl-5">
            <h4 class="text-center text-theme mt-3">
              <span class="mr-1">
                <i class="fa fa-warning text-muted text-18"></i>
              </span> You've Reached Your Sell Offers Listing Limit
            </h4>
            <div class="w-100px mx-auto border-bottom border-business-secondary mt-3 mt-lg-4 mb-2 mb-lg-4"></div>
            <p class="text-center mb-2 text-lg-20 pt-2 pt-lg-3">Free member can list upto 5 sell offers.</p>
            <p class="text-center mb-2 text-lg-18 pt-2 pt-lg-3">Please upgrade your account to send more quotations on buyers RFQ's - instantly.</p>
          </div>
          <div class="modal-footer d-block p-3 py-lg-4 px-xl-5">
            <div class="d-flex mx-n2 mx-lg-n3">
              <div class="col px-2 px-lg-3">
                <a href="https://b2bmap.com/myzone/membership/info" class="btn text-nowrap btn-outline-secondary btn-block py-lg-2 px-3 rounded-0"> Plans & Pricing </a>
              </div>
              <div class="col px-2 px-lg-3">
                <a href="https://b2bmap.com/myzone/membership/info" class="btn text-nowrap text-black-to-white btn-outline-b2bmap-secondary py-lg-2 btn-block rounded-0"> Upgrade Now </a>
              </div>
            </div>
            <div class="text-right mt-4">
              <a href="javascript:void(0);" class="text-13 text-muted" data-dismiss="modal">No Thanks</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="sellOfferReRankAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content border-0 shadow">
          <div class="modal-body p-3 p-xl-5">
            <h4 class="text-center text-theme mt-3">
              <span class="mr-1">
                <i class="fa fa-warning text-muted text-18"></i>
              </span> Become Premium Member
            </h4>
            <div class="w-100px mx-auto border-bottom border-business-secondary mt-3 mt-lg-4 mb-2 mb-lg-4"></div>
            <p class="text-center mb-2 text-lg-20 pt-2 pt-lg-3">Top rank your best sell offer to get quick attention from buyers.</p>
          </div>
          <div class="modal-footer d-block p-3 py-lg-4 px-xl-5">
            <div class="d-flex mx-n2 mx-lg-n3">
              <div class="col px-2 px-lg-3">
                <a href="https://b2bmap.com/myzone/membership/info" class="btn text-nowrap btn-outline-secondary btn-block py-lg-2 px-3 rounded-0"> Plans & Pricing </a>
              </div>
              <div class="col px-2 px-lg-3">
                <a href="https://b2bmap.com/myzone/membership/info" class="btn text-nowrap text-black-to-white btn-outline-b2bmap-secondary py-lg-2 btn-block rounded-0"> Upgrade Now </a>
              </div>
            </div>
            <div class="text-right mt-4">
              <a href="javascript:void(0);" class="text-13 text-muted" data-dismiss="modal">No Thanks</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="memberInquiryAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content border-0 shadow">
          <div class="modal-body p-3 p-xl-5">
            <h4 class="text-center text-theme mt-3 mt-lg-0">
              <span class="mr-1">
                <i class="fa fa-warning text-muted text-18"></i>
              </span> You've Reached Your Daily Limit
            </h4>
            <p class="text-center mb-2 text-lg-18">Free members can send upto 10 messages/day.</p>
            <div class="w-100px mx-auto border-bottom border-business-secondary mt-3 mt-lg-4 mb-2 mb-lg-4"></div>
            <p class="mb-3 text-1g-18 text-muted">Please upgrade your account to keep using b2bmap or you can come back in 24 hours when your daily limit resets.</p>
            <ul class="list-unstyled mb-0">
              <li class="mb-2">
                <a href="#" class="d-block text-business-tertiary">Want to Buy? Post Your Buy Requirement - Directly!</a>
              </li>
              <li>
                <a href="#" class="d-block text-business-tertiary">Want to Sell? Upgrade Your Account to unlock your true business potential.</a>
              </li>
            </ul>
          </div>
          <div class="modal-footer d-block p-3 py-lg-4 px-xl-5">
            <div class="d-flex mx-n2 mx-lg-n3">
              <div class="col px-2 px-lg-3">
                <a href="https://b2bmap.com/myzone/membership/info" class="btn text-nowrap text-black-to-white btn-outline-b2bmap-secondary py-lg-2 btn-block rounded-0"> Upgrade Now </a>
              </div>
              <div class="col px-2 px-lg-3">
                <a href="https://b2bmap.com/post-buy-requirement" class="btn text-nowrap btn-outline-secondary btn-block py-lg-2 rounded-0">Post Buy Requirement</a>
              </div>
            </div>
            <p class="mt-3 mb-0 text-center">
              <a href="#" data-dismiss="modal" class="text-muted text-13">No thanks</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <script data-cfasync="false" src="https://b2bmap.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

    <script src="https://b2bmap.com/public/member/js/jquery-3.4.1.min.js"></script>
    <script  src="https://b2bmap.com/public/member/js/popper.min.js"></script>
    <script  src="https://b2bmap.com/public/member/js/bootstrap.min.js"></script>
    <script  src="https://b2bmap.com/public/member/js/progress.min.js"></script>
    <script src="https://b2bmap.com/public/js/toastr.min.js"></script>
    
    <script  src="https://b2bmap.com/public/member/js/main.js"></script>
    <div class="modal fade" id="noticeForMembership" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header py-2">
            <h4 class="modal-title">Membership</h4>
          </div>
          <div class="modal-body py-3 py-lg-4">
            <p class="mb-4">This Feature is Available for Premium Members Only. <br /> Would you like to enjoy Premium Membership benefits? </p>
            <div class="text-center">
              <a href="https://b2bmap.com/myzone/membership/info" class="btn btn-b2bmap-primary btn-sm px-4"> View Membership Plans </a>
            </div>
          </div>
          <div class="modal-footer py-2">
            <a href="javascript:void(0);" class="btn border btn-light btn-sm px-4" data-dismiss="modal">Cancel</a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="deleteModal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title modal-title manual_modal_delete_title"></h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body" style="min-height: 45px"> Are you sure you want to delete this <span id='manual_delete_item_name' class="text-lowercase"></span>? </div>
          <div class="modal-footer">
            <a class="btn btn-b2bmap-primary btn-sm delete-item-btn">Delete</a>
            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <script type="8a01b4de6437bc36fbd682ae-text/javascript">
      function deleteItem(url, title) {
        $('.manual_modal_delete_title').html('Delete ' + title);
        $('#manual_delete_item_name').html(title);
        $(".delete-item-btn").attr("href", url);
        $('#deleteModal').modal('show');
      }
    </script>
    <script src="https://b2bmap.com/public/js/summernote-bs4.min.js" type="8a01b4de6437bc36fbd682ae-text/javascript"></script>
    <script src="https://b2bmap.com/public/plugin/multiple-file/multiple-file.js" type="8a01b4de6437bc36fbd682ae-text/javascript"></script>
    <script type="8a01b4de6437bc36fbd682ae-text/javascript">
      $(document).on('change, click', '.business-type-length', function() {
            let business_type_count = $('input[name="business_type[]"]:checked').length;
            if (business_type_count > 2) {
              $(".max-selected-business-type").html(' < span class = "error" > < i class = "fa fa-warning" > < /i> Select maximum 2 business type  < /span>');
              }
              else {
                $(".max-selected-business-type").html('');
              }
            });
          var fieldOriginalText = []; $('[data-validity]').each(function() {
            let fieldName = $(this);
            fieldOriginalText[fieldName.attr('name')] = fieldName.val();
          });

          function fieldValidityCheck(selector = null, formEvent = null) {
            let fieldName = selector;
            selector == null ? fieldName = $(this) : '';
            if (fieldName.val() == fieldOriginalText[fieldName.attr('name')]) {
              if (formEvent != null) {
                formEvent.preventDefault();
              }
              fieldName.addClass('field-invalid');
              fieldName.siblings('.field-check-error').remove();
              fieldName.after(``)
            } else {
              fieldName.removeClass('field-invalid');
              fieldName.siblings('.field-check-error').remove();
            }
          }
          $(document).on('submit', 'form', function(formEvent) {
            let form = $(this);
            if (form.find('[data-validity="invalid"]').length > 0) {
              form.find('[data-validity="invalid"]').each(function() {
                let fieldName = $(this);
                fieldValidityCheck(fieldName, formEvent);
                $('html,body').animate({
                  scrollTop: $(this).offset().top - 100
                }, 100);
              });
            }
          }); $('[data-validity="invalid"]').on('change keyup focusout', function() {
            fieldValidityCheck($(this));
          });
          var allowImageExtension = [".jpg", ".jpeg", ".bmp", ".gif", ".png", ".webp", ".svg"];

          function previewFile(input) {
            var preview = input.nextElementSibling;
            var file = input.files[0];
            if (file.size > 2000000) {
              alert("Maximum file size is 2MB!");
              input.value = '';
            } else {
              let getExtension = '.' + file.name.split('.').pop();
              let setExtension = getExtension.toLowerCase();
              if (allowImageExtension.indexOf(setExtension) > -1) {
                var reader = new FileReader();
                reader.onloadend = function() {
                  preview.src = reader.result;
                }
                if (file) {
                  reader.readAsDataURL(file);
                } else {
                  preview.src = "";
                }
              } else {
                alert(setExtension + ' ' + 'Extension not allow');
              }
            }
          }
          // ========== End Preview Logo Image ===============
          // ============ upload-telephone-bill ============
          // $(".upload-company-logo").on("change", function (e) {
          //     var form = $("#uploadCompanyLogo");
          //     const formData = new FormData(form[0]);
          //     const url = form.attr('action');
          //     $.ajax({
          //         type: "POST",
          //         url: url,
          //         data: formData,
          //         success: function (info) {
          //             if (info['result'] === 'review_pending') {
          //                 alert('Logo waiting for review');
          //             } else if (info['result'] === 'new_logo_updated') {
          //                 alert('Please wait for review');
          //             } else {
          //                 $(".left-company-logo").html('
          < img src = "' + base_url + '/' + info['logo_path'] + '" > ');
          //             }
          //         },
          //         cache: false,
          //         contentType: false,
          //         processData: false
          //     });
          // });
          $(".upload-company-logo").on("change", function(e) {
              var form = $("#uploadCompanyLogo");
              const formData = new FormData(form[0]);
              const url = form.attr('action');
              $.ajax({
                  type: "POST",
                  url: url,
                  data: formData,
                  success: function(info) {
                    // console.log(info);
                    if (info !== 'fail') {
                      if (info['pending_review'] == 'no') {
                        $(".left-company-logo").html(' < img src = "'+base_url+'/'+info['logo_path']+'" > ');
                        }
                      }
                    },
                    cache: false,
                      contentType: false,
                      processData: false
                  });
              });
            // ============ end-upload-telephone-bill ============
            $(".add-trade-info").on("click", function() {
              $.ajax({
                type: "GET",
                url: base_url + "/myzone/set-trade-info-setting",
                success: function(info) {
                  $("#set_trade_info").val('yes');
                }
              });
            }); $(".factory-info").on("click", function() {
              var action_type = $(this).data("id");
              $.ajax({
                type: "GET",
                url: base_url + "/myzone/set-factory-info/" + action_type,
                success: function(info) {
                  // console.log(info);
                  $("#set_factory_info").val(info);
                }
              });
            }); $(".get-city").on("change", function() {
                var state_id = $(this).val();
                $('#city').empty();
                $.ajax({
                    type: "GET",
                    url: base_url + "/myzone/get-city/" + state_id,
                    success: function(GetData) {
                      $.each($.parseJSON(GetData), function(i, obj) {
                          $('#city').append($(' < option > ', {
                            value: obj.id, text: obj.name
                          }));
                      });
                  }
                });
            }); $(".member-type").on("change", function() {
            var member_type = $(this).val();
            if (member_type == 1) {
              $("#businessTypeForBuyer").show();
              $("#businessTypeForSeller").hide();
              $("#businessTypeForSeller input[type='checkbox']").prop("checked", false);
              $("#businessTypeForBoth").hide();
              $("#businessTypeForBoth input[type='checkbox']").prop("checked", false);
            } else if (member_type == 2) {
              $("#businessTypeForBuyer").hide();
              $("#businessTypeForBuyer input[type='checkbox']").prop("checked", false);
              $("#businessTypeForSeller").show();
              $("#businessTypeForBoth").hide();
              $("#businessTypeForBoth input[type='checkbox']").prop("checked", false);
            } else {
              $("#businessTypeForBuyer").hide();
              $("#businessTypeForBuyer input[type='checkbox']").prop("checked", false);
              $("#businessTypeForSeller").hide();
              $("#businessTypeForSeller input[type='checkbox']").prop("checked", false);
              $("#businessTypeForBoth").show();
            }
          }); $(".get-subcategory").on("change", function() {
            var cat_id = $(this).val();
            $('#subcategory_id').empty();
            $.ajax({
              type: "GET",
              url: base_url + "/myzone/get-subcategory/" + cat_id,
              success: function(GetData) {
                $('#subcategory_id').append(' < option value = "" > --Select Subcategory-- < /option>');
                  $.each($.parseJSON(GetData), function(i, obj) {
                      $('#subcategory_id').append($(' < option > ', {
                        value: obj.id, text: obj.name
                      }));
                  });
              }
            });
          }); $(document).ready(function() {
              $('.summernote').summernote({
                    disableDragAndDrop: true,
                    placeholder: 'Please provide details about your company',
                    tabsize: 2,
                    minHeight: 140,
                    toolbar: false,
                    callbacks: {
                      // callback for pasting text only (no formatting)
                      onPaste: function(e) {
                        var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                        e.preventDefault();
                        $('body').append(' < div class = "summer-text-clean" > '+bufferText+' < /div>');
                          bufferText = $('.summer-text-clean').text(); bufferText = bufferText.replace(/\r?\n/g, ' < br > ');
                            document.execCommand('insertHtml', false, bufferText); $('.summer-text-clean').remove();
                          }, onKeyup: function(e) {
                            var caracteres = $(".note-editable").text();
                            var totalCaracteres = caracteres.length;
                            if (totalCaracteres < 200) {
                              $(this).parents('.text-countable').find(".text-counter").text(totalCaracteres + ' ' + "Char / Min 200 Char");
                            } else {
                              $(this).parents('.text-countable').find(".text-counter").text(totalCaracteres + ' ' + "Char");
                            }
                          }, onFocus: function() {
                            $(this).parents('.text-countable').find(".text-counter").parent().find('.text-error').remove();
                          }, onBlur: function() {
                            var caracteres = $(".note-editable").text();
                            var totalCaracteres = caracteres.length;
                            let errorMsg = $(this).parents('.text-countable').find(".text-counter").parent().find('.text-error');
                            if (totalCaracteres < 200) {
                              if (errorMsg.length < 1) {
                                $(this).parents('.text-countable').find(".text-counter").parent().prepend(' < span class = "text-error" > Company Details - Minimum 200 Character < /span>');
                                }
                              }
                            }
                          }
                        });
                      $('.summernote-group').delay(1000).queue(function() {
                          let self = $(this);
                          self.find('a[href]').each(function() {
                              let getHtml = $(this).html();
                              $(this).after(' < span > '+getHtml+' < /span>');
                                $(this).remove();
                              }); self.dequeue();
                          });
                      });
                    // =========== Trade Info Script =================
                    $(document).on('change', '.service-support', function() {
                      if ($("input[name='service_support']:checked").val() == 1) {
                        $("#serviceSupportOption").show();
                      } else {
                        $("#serviceSupportOption").hide();
                      }
                    });
                    $(document).on('change', '.quality-control', function() {
                      if ($("input[name='quality_control']:checked").val() == 1) {
                        $("#qualityControlOption").show();
                      } else {
                        $("#qualityControlOption").hide();
                      }
                    });
                    $(window).on('load', function() {
                      $('.load-group').each(function() {
                        $(this).find(".pre-load").fadeOut(2000);
                        $(this).find('.post-load').delay(1000).css({
                          opacity: 0.0,
                          visibility: "visible"
                        }).animate({
                          opacity: 1.0
                        });
                      });
                    });
    </script>
    <script>
      //let base_url = "https://b2bmap.com";
    </script>
     <script src="https://b2bmap.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="d257963e33dac07492b9d6fd-|49" defer=""></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"79c4f63869c078c1","token":"3cb77567f68e4cf2a0083bf4bf67f7e3","version":"2023.2.0","si":100}' crossorigin="anonymous"></script>
  </body>
</html>