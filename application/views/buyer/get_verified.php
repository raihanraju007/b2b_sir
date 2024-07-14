<?php 
  require_once(APPPATH."views/common/company_profile_buyer.php"); 
?>

<div class="panel-body">
            <div class="card rounded-0 mb-4">
              <div class="card-header py-2">
                <h3 class="my-0 text-md-down-20">
                  <i class="fa fa-check-circle mr-1 text-business-primary"></i> Get Verified on B2bmap
                </h3>
              </div>
              <div class="card-body">
                <p class="mb-2">Verified b2bmap accounts carry huge credibility and have additional branding and more business opportunity as well (such as Rank High in listing and search result).</p>
                <p class="m-0">You can verify the account on your own - it’s easy and fast.</p>
              </div>
            </div>
            <div class="mt-5 mb-4">
              <h4 class="text-md-down-20 text-center text-strong">Step 1 : Proof of company name</h4>
              <div class="w-100px border-bottom border-1px border-business-primary mx-auto"></div>
            </div>
            <div class="card rounded-0 mb-4">
              <div class="card-header py-2">
                <h5 class="my-0 text-md-down-20 d-flex text-theme">
                  <span class="mr-2">
                    <i class="icofont-ui-v-card"></i>
                  </span> <?=$company_info['company_name'];?>
                </h5>
              </div>
              <div class="card-body pb-0">
                <div class="d-flex flex-wrap">
                  <h5 class="mb-3 mr-3">Please chose a verification option</h5>
                </div>
                <ul class="list-inline target-selector-group">
                  <li class="list-inline-item mr-4">
                    <label class="cute-label">
                      <input type="radio" name="business_file_radio" data-target="#businessLicenceDocs" class="cute-check target-selector">
                      <span class="cute-radio mt-05"></span> Submit Business License </label>
                  </li>
                  <li class="list-inline-item">
                    <label class="cute-label">
                      <input type="radio" name="business_file_radio" data-target="#businessRegCertificateDoc" class="cute-check target-selector">
                      <span class="cute-radio mt-05"></span> Company Registration Certification </label>
                  </li>
                </ul>
                <div class="collapse no-transition" id="businessLicenceDocs">
                  <div class="doc-item flex-wrap mb-4">
                    <div class="mr-4 pr-4 border-md-right my-2">
                      <span class="d-block text-lg-22">Submit Business License</span>
                      <small>Upload scan copy or PDF of your business licence</small>
                    </div>
                    <div class="d-flex flex-grow-1">
                      <ul class="list-inline mb-0 uploaded-item-list mr-auto pr-3 my-2 business-license-file"></ul>
                      <div class="d-flex flex-column justify-content-center flex-grow-1 my-2 position-relative">
                        <div class="flex-nowrap doc-content business-license-form-content">
                          <form method="POST" action="<?=site_url('buyer/save_company_name_file');?>" enctype="multipart/form-data" id="businessLicenseForm">
                            
                            <div class="doc-file d-block text-lg-right">
                              <div class="mb-1">
                                <label class="upload-file-btn clickable-label m-0">
                                  <input type="file" name="business_license" accept="image/*,application/pdf" class="doc-file-input upload-business-license">
                                  <span class="attach-file text-nowrap upload-business-license-btn-text">
                                    <i class="fa fa-upload mr-2"></i> Upload File </span>
                                </label>
                              </div>
                              <span class="doc-file-text text-13"></span>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse no-transition" id="businessRegCertificateDoc">
                  <div class="doc-item flex-wrap mb-4">
                    <div class="mr-4 pr-4 border-md-right my-2">
                      <span class="d-block text-lg-22">Company Registration Certification</span>
                      <small>Upload scan copy or PDF of your company certification</small>
                    </div>
                    <div class="d-flex flex-grow-1">
                      <ul class="list-inline mb-0 uploaded-item-list mr-auto pr-3 my-2 certification-file"></ul>
                      <div class="d-flex flex-column justify-content-center flex-grow-1 my-2 position-relative">
                        <div class="doc-file d-block text-lg-right certification-file-form-content">
                          <form method="POST" action="<?=site_url('buyer/save_company_name_file');?>" enctype="multipart/form-data" id="certificationFileForm">
                            
                            <div class="mb-1">
                              <label class="upload-file-btn clickable-label m-0">
                                <input type="file" name="certification_file" accept="image/*,application/pdf" class="doc-file-input upload-certificate-file">
                                <span class="attach-file text-nowrap upload-certification-file-btn-text">
                                  <i class="fa fa-upload mr-2"></i> Upload File </span>
                              </label>
                            </div>
                            <span class="doc-file-text text-13"></span>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-5 mb-4">
              <h4 class="text-md-down-20 text-center text-strong">Step 2: Proof of company address</h4>
              <div class="w-100px border-bottom border-1px border-business-primary mx-auto"></div>
            </div>
            <div class="card rounded-0 mb-4">
              <div class="card-header py-2">
                <h5 class="my-0 text-md-down-20 d-flex text-theme">
                  <span class="mr-2">
                    <i class="icofont-google-map"></i>
                  </span>
                </h5>
              </div>
              <div class="card-body pb-0">
                <h5 class="mb-3">Please chose a verification option</h5>
                <ul class="list-inline target-selector-group">
                  <li class="list-inline-item mr-4">
                    <label class="cute-label">
                      <input type="radio" name="statement_file_radio" data-target="#utilityBillDocs" class="cute-check target-selector">
                      <span class="cute-radio mt-05"></span> Recent Utility Bill </label>
                  </li>
                  <li class="list-inline-item">
                    <label class="cute-label">
                      <input type="radio" name="statement_file_radio" data-target="#bankStatementDocs" class="cute-check target-selector">
                      <span class="cute-radio mt-05"></span> Bank Statement </label>
                  </li>
                </ul>
                <div class="collapse no-transition" id="utilityBillDocs">
                  <div class="doc-item flex-wrap mb-4">
                    <div class="mr-4 pr-4 border-md-right my-2">
                      <span class="d-block text-lg-22">Recent Utility Bill</span>
                      <small>Upload scan copy of your utility bill</small>
                    </div>
                    <div class="d-flex flex-grow-1">
                      <ul class="list-inline mb-0 uploaded-item-list mr-auto pr-3 my-2 telephone-bill-file"></ul>
                      <div class="d-flex flex-column justify-content-center flex-grow-1 my-2 position-relative">
                        <div class="doc-file d-block text-lg-right telephone-bill-form-content">
                          <form method="POST" action="<?=site_url('buyer/save_company_name_file');?>" enctype="multipart/form-data" id="uploadTelephoneBillForm">
                            
                            <div class="doc-file d-block text-lg-right">
                              <div class="mb-1">
                                <label class="upload-file-btn clickable-label m-0">
                                  <input type="file" name="telephone_bill" accept="image/*,application/pdf" class="doc-file-input upload-telephone-bill">
                                  <span class="attach-file text-nowrap upload-telephone-bill-btn-text">
                                    <i class="fa fa-upload mr-2"></i> Upload File </span>
                                </label>
                              </div>
                              <span class="doc-file-text text-13"></span>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse no-transition" id="bankStatementDocs">
                  <div class="doc-item flex-wrap mb-4">
                    <div class="mr-4 pr-4 border-md-right my-2">
                      <span class="d-block text-lg-22">Bank Statement</span>
                      <small>Upload PDF or scan copy of your bank statement</small>
                    </div>
                    <div class="d-flex flex-grow-1">
                      <ul class="list-inline mb-0 uploaded-item-list mr-auto pr-3 my-2 bank-statement-file"></ul>
                      <div class="d-flex flex-column justify-content-center flex-grow-1 my-2 position-relative">
                        <div class="doc-file d-block text-lg-right bank-statement-form-content">
                          <form method="POST" action="<?=site_url('buyer/save_company_name_file');?>" enctype="multipart/form-data" id="uploadBankStatementForm">
                            <input type="hidden" name="_token" value="Gjr66ZtTGUyMbRgwjNZUitaLLzJid3cIA36Q2Cnh">
                            <div class="mb-1">
                              <label class="upload-file-btn clickable-label m-0">
                                <input type="file" name="bank_statement" accept="image/*,application/pdf" class="doc-file-input upload-bank-statement">
                                <span class="attach-file text-nowrap upload-bank-statement-btn-text">
                                  <i class="fa fa-upload mr-2"></i> Upload File </span>
                              </label>
                            </div>
                            <span class="doc-file-text text-13"></span>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center my-5 verification-success-btn" style="display: none">
              <!-- <a href="https://b2bmap.com/myzone/account-settings/get-verified-success" class="btn btn-b2bmap-secondary px-5">Submit</a> -->
            </div>
            <div class="mt-5">
              <div class="bg-white p-4 common-shadow">
                <div class="d-md-flex align-items-center justify-content-between">
                  <div class="mr-md-4 mb-3 mb-md-0">
                    <h5 class="mb-2 text-24 text-theme text-center text-md-left d-md-down-none">Need help ?</h5>
                    <p class="mb-0 text-center text-md-left text-md-down-20">Need help using B2bmap.com ? <span class="d-md-down-none">Don't worry, you can contact with us for anything</span>
                    </p>
                  </div>
                  <div class="text-center">
                    <a href="#" class="btn text-nowrap btn-dark px-5 px-md-4 rounded-0">Contact Us</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <script>

        // ============ Upload With preview and remove ============
        $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {

                $(".business-licenses").on("change", function (e) {
                    var uploadItemLength = $(this).parents('.uploaded-field').find('.upload-item').length;
                    let thisAfterList = $(this).parents('.uploaded-field').find('.upload-file-list');

                    let files = this.files;
                    for(let i=0; i<files.length; i++) {
                        let dt = new DataTransfer();

                        let f = files[i];
                        console.log(f);
                        dt.items.add(
                            new File(
                                [f.slice(0, f.size, f.type)],
                                f.name
                            ));

                        $(this).parents('.uploaded-field').find('.upload-file-list').append(
                            `
                            <li class="upload-item box-70 mb-3 mr-3 border rounded">
                                <img class="uploaded-img" src="" alt='File'/>
                                <input type="file" name="business_licenses[]" class="d-none attach-file-value" id="attachFile`+i+`">
                                <button type='button' class="box-20 rounded-circle remove-uploaded"><span class='text'>&times</span></button>
                            </li>
                            `
                        );
                        let fileReader = new FileReader();
                        fileReader.onload = (function (j) {
                            let file = j.target;
                            $("#attachFile"+i).after("<img class=\"uploaded-img\" src=\"" + j.target.result + "\" alt='File'/>").removeAttr('id');
                            $("#attachFile"+i).removeAttr('id')
                        });
                        fileReader.readAsDataURL(f);

                        var back = document.getElementById("attachFile"+i);
                        back.files = dt.files;
                    }
                    $(this).val('');
                });

            } else {
                alert("Your browser doesn't support to File API")
            }

            if (window.File && window.FileList && window.FileReader) {
                $(".certification-files").on("change", function (e) {
                    var uploadItemLength = $(this).parents('.uploaded-field').find('.upload-item').length;
                    let thisAfterList = $(this).parents('.uploaded-field').find('.upload-file-list');

                    let files = this.files;
                    for(let i=0; i<files.length; i++) {
                        let dt = new DataTransfer();

                        let f = files[i];
                        console.log(f);
                        dt.items.add(
                            new File(
                                [f.slice(0, f.size, f.type)],
                                f.name
                            ));



                        $(this).parents('.uploaded-field').find('.upload-file-list').append(
                            `
                            <li class="upload-item box-70 mb-3 mr-3 border rounded">
                                <img class="uploaded-img" src="" alt='File'/>
                                <input type="file" name="certification_files[]" class="d-none attach-file-value" id="attachFile`+i+`">
                                <button type='button' class="box-20 rounded-circle remove-uploaded"><span class='text'>&times</span></button>
                            </li>
                            `
                        );

                        let fileReader = new FileReader();
                        fileReader.onload = (function (j) {
                            let file = j.target;
                            $("#attachFile"+i).after("<img class=\"uploaded-img\" src=\"" + j.target.result + "\" alt='File'/>").removeAttr('id');
                            $("#attachFile"+i).removeAttr('id')
                        });
                        fileReader.readAsDataURL(f);

                        var back = document.getElementById("attachFile"+i);
                        back.files = dt.files;
                    }
                    $(this).val('');


                });
            } else {
                alert("Your browser doesn't support to File API")
            }


            if (window.File && window.FileList && window.FileReader) {
                $(".telephone-bill").on("change", function (e) {
                    var uploadItemLength = $(this).parents('.uploaded-field').find('.upload-item').length;
                    let thisAfterList = $(this).parents('.uploaded-field').find('.upload-file-list');

                    let files = this.files;
                    for(let i=0; i<files.length; i++) {
                        let dt = new DataTransfer();

                        let f = files[i];
                        console.log(f);
                        dt.items.add(
                            new File(
                                [f.slice(0, f.size, f.type)],
                                f.name
                            ));



                        $(this).parents('.uploaded-field').find('.upload-file-list').append(
                            `
                            <li class="upload-item box-70 mb-3 mr-3 border rounded">
                                <img class="uploaded-img" src="" alt='File'/>
                                <input type="file" name="telephone_bill[]" class="d-none attach-file-value" id="attachFile`+i+`">
                                <button type='button' class="box-20 rounded-circle remove-uploaded"><span class='text'>&times</span></button>
                            </li>
                            `
                        );

                        let fileReader = new FileReader();
                        fileReader.onload = (function (j) {
                            let file = j.target;
                            $("#attachFile"+i).after("<img class=\"uploaded-img\" src=\"" + j.target.result + "\" alt='File'/>").removeAttr('id');
                            $("#attachFile"+i).removeAttr('id')
                        });
                        fileReader.readAsDataURL(f);

                        var back = document.getElementById("attachFile"+i);
                        back.files = dt.files;
                    }
                    $(this).val('');


                });
            } else {
                alert("Your browser doesn't support to File API")
            }


            if (window.File && window.FileList && window.FileReader) {
                $(".bank-statement").on("change", function (e) {
                    var uploadItemLength = $(this).parents('.uploaded-field').find('.upload-item').length;
                    let thisAfterList = $(this).parents('.uploaded-field').find('.upload-file-list');

                    let files = this.files;
                    for(let i=0; i<files.length; i++) {
                        let dt = new DataTransfer();

                        let f = files[i];
                        console.log(f);
                        dt.items.add(
                            new File(
                                [f.slice(0, f.size, f.type)],
                                f.name
                            ));

                        $(this).parents('.uploaded-field').find('.upload-file-list').append(
                            `
                            <li class="upload-item box-70 mb-3 mr-3 border rounded">
                                <img class="uploaded-img" src="" alt='File'/>
                                <input type="file" name="bank_statement[]" class="d-none attach-file-value" id="attachFile`+i+`">
                                <button type='button' class="box-20 rounded-circle remove-uploaded"><span class='text'>&times</span></button>
                            </li>
                            `
                        );

                        let fileReader = new FileReader();
                        fileReader.onload = (function (j) {
                            let file = j.target;
                            $("#attachFile"+i).after("<img class=\"uploaded-img\" src=\"" + j.target.result + "\" alt='File'/>").removeAttr('id');
                            $("#attachFile"+i).removeAttr('id')
                        });
                        fileReader.readAsDataURL(f);

                        var back = document.getElementById("attachFile"+i);
                        back.files = dt.files;
                    }
                    $(this).val('');


                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });


        $('.dock-radio').on('change', function () {
            $(this).parents('.doc-list').find('.doc-item').removeClass('show');
            $(this).parents('.doc-list').find('.dock-radio:checked').parents('.doc-item').addClass('show');
        });

        $('.dock-radio').each(function () {
            if ($(this).is(':checked'))
            {
                $(this).parents('.doc-item').addClass('show');
            } else {
                $(this).parents('.doc-item').removeClass('show');
            }
        });


        $('.target-selector').on('change', function (){
            let self = $(this);
            let target = $(this).attr('data-target');
            if ($(self).is(':checked'))
            {
                $(target).addClass('show');
                $(self).parents('.target-selector-group').find($('.target-selector')).not($(self)).each(function (){
                    let targetHide = $(this).data('target');
                    // alert(targetHide);
                    $(targetHide).removeClass('show');
                });
            }
        });



$(".upload-business-license").on("change", function(e) {
    $('.upload-business-license-btn-text').html(`<i class="fa fa-upload mr-2"></i> Uploading...`);
    var form = $("#businessLicenseForm");
    const formData = new FormData(form[0]);
    const url = form.attr('action');
     var base_url = "<?=base_url() . 'upload/company';?>"
    $.ajax({
        type: "POST",
        url: url,
        data: formData,
        success: function(info) {
            $(".verification-success-btn").show();
            var file_list = `<li class="list-inline-item mr-2 my-2 removeable-item-` + info['id'] + `">
                      <div class="position-relative">
                    <a href="` + base_url + `/` + info['path'] + `" target="_blank" class="d-block border text-center py-1 px-3 rounded">
                    <span class="text-12"><i class="fa fa-file"></i></span>
                <span class="d-block text-13">File</span>
                </a>
                    <a href="javascript:void(0);" data-id="` + info['id'] + `" class="remove-uploaded box-20 rounded-circle position-absolute text-white"><span class="text">×</span></a>
                  </div>
                  </li>`;
            $('.business-license-file').append(file_list);
            $('.upload-business-license-btn-text').html(`<i class="fa fa-upload mr-2"></i> Upload File`);
            if (info['total_number_file'] > 3) {
                $('.business-license-form-content').html(`<div class="doc-content">
                                                <div class="file-received-success text-success text-nowrap">
                                                    <i class="fa fa-check mr-1"></i>
                                                    File Uploaded
                                                </div>
                                            </div>`);
            }
        },
        cache: false,
        contentType: false,
        processData: false
    });
});
$(".upload-certificate-file").on("change", function(e) {
    $('.upload-certification-file-btn-text').html(`<i class="fa fa-upload mr-2"></i> Uploading...`);
    var form = $("#certificationFileForm");
    const formData = new FormData(form[0]);
    const url = form.attr('action');
    var base_url = "<?=base_url() . 'upload/company';?>"
    $.ajax({
        type: "POST",
        url: url,
        data: formData,
        success: function(info) {
            $(".verification-success-btn").show();
            var file_list = `<li class="list-inline-item mr-2 my-2 removeable-item-` + info['id'] + `">
                      <div class="position-relative">
                    <a href="` + base_url + `/` + info['path'] + `" target="_blank" class="d-block border text-center py-1 px-3 rounded">
                    <span class="text-12"><i class="fa fa-file"></i></span>
                <span class="d-block text-13">File</span>
                </a>
                    <a href="javascript:void(0);" data-id="` + info['id'] + `" class="remove-uploaded box-20 rounded-circle position-absolute text-white"><span class="text">×</span></a>
                  </div>
                  </li>`;
            $('.certification-file').append(file_list);
            $('.upload-certification-file-btn-text').html(`<i class="fa fa-upload mr-2"></i> Upload File`);
            if (info['total_number_file'] > 3) {
                $('.certification-file-form-content').html(`<div class="doc-content">
                                                <div class="file-received-success text-success text-nowrap">
                                                    <i class="fa fa-check mr-1"></i>
                                                    File Uploaded
                                                </div>
                                            </div>`);
            }
        },
        cache: false,
        contentType: false,
        processData: false
    });
});
$(".upload-telephone-bill").on("change", function(e) {
    $('.upload-telephone-bill-btn-text').html(`<i class="fa fa-upload mr-2"></i> Uploading...`);
    var form = $("#uploadTelephoneBillForm");
    const formData = new FormData(form[0]);
    const url = form.attr('action');
     var base_url = "<?=base_url() . 'upload/company';?>"
    $.ajax({
        type: "POST",
        url: url,
        data: formData,
        success: function(info) {
            $(".verification-success-btn").show();
            var file_list = `<li class="list-inline-item mr-2 my-2 removeable-item-` + info['id'] + ` ">
                      <div class="position-relative">
                    <a href="` + base_url + `/` + info['path'] + `" target="_blank" class="d-block border text-center py-1 px-3 rounded">
                    <span class="text-12"><i class="fa fa-file"></i></span>
                <span class="d-block text-13">File</span>
                </a>
                    <a href="javascript:void(0);" data-id="` + info['id'] + `" class="remove-uploaded box-20 rounded-circle position-absolute text-white"><span class="text">×</span></a>
                  </div>
                  </li>`;
            $('.telephone-bill-file').append(file_list);
            $('.upload-telephone-bill-btn-text').html(`<i class="fa fa-upload mr-2"></i> Upload File`);
            if (info['total_number_file'] > 3) {
                $('.telephone-bill-form-content').html(`<div class="doc-content">
                                                <div class="file-received-success text-success text-nowrap">
                                                    <i class="fa fa-check mr-1"></i>
                                                    File Uploaded
                                                </div>
                                            </div>`);
            }
        },
        cache: false,
        contentType: false,
        processData: false
    });
});
$(".upload-bank-statement").on("change", function(e) {
    $('.upload-bank-statement-btn-text').html(`<i class="fa fa-upload mr-2"></i> Uploading...`);
    var form = $("#uploadBankStatementForm");
    const formData = new FormData(form[0]);
    const url = form.attr('action');
     var base_url = "<?=base_url() . 'upload/company';?>"
    $.ajax({
        type: "POST",
        url: url,
        data: formData,
        success: function(info) {
            $(".verification-success-btn").show();
            var file_list = `<li class="list-inline-item mr-2 my-2 removeable-item-` + info['id'] + ` ">
                      <div class="position-relative">
                    <a href="` + base_url + `/` + info['path'] + `" target="_blank" class="d-block border text-center py-1 px-3 rounded">
                    <span class="text-12"><i class="fa fa-file"></i></span>
                <span class="d-block text-13">File</span>
                </a>
                    <a href="javascript:void(0);" data-id="` + info['id'] + `" class="remove-uploaded box-20 rounded-circle position-absolute text-white"><span class="text">×</span></a>
                  </div>
                  </li>`;
            $('.bank-statement-file').append(file_list);
            $('.upload-bank-statement-btn-text').html(`<i class="fa fa-upload mr-2"></i> Upload File`);
            if (info['total_number_file'] > 3) {
                $('.bank-statement-form-content').html(`<div class="doc-content">
                                                <div class="file-received-success text-success text-nowrap">
                                                    <i class="fa fa-check mr-1"></i>
                                                    File Uploaded
                                                </div>
                                            </div>`);
            }
        },
        cache: false,
        contentType: false,
        processData: false
    });
});
$(document).on("click", ".remove-uploaded", function() {
    var data_id = $(this).data("id");
    $.ajax({
        type: 'GET',
        url: base_url + '/myzone/account-settings/remove-verification-file/' + data_id,
        success: function(info) {
            $(".removeable-item-" + data_id).remove();
        }
    });
});


        $(document).ready(function (){
            $('.target-selector').each(function (){
                let self = $(this);
                let target = $(this).attr('data-target');
                if ($(self).is(':checked'))
                {
                    $(target).addClass('show');
                }
            });
        });




    </script>