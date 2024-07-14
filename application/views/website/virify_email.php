
<section>
<div class="container custom-container">
  <div class="bg-white p-3 p-lg-5 w-xl-75 mx-auto mb-4 border">
	<div class="box-70 mx-auto text-business-secondary mb-2">
	  <i class="fa fa-envelope-o fa-3x"></i>
	</div>
	<div class="border-bottom pb-3 mb-4">
	  <h3 class="text-center text-strong">Verify Your Email Address</h3>
	  <h5 class="text-center text-muted text-strong">A verification mail has been sent your email address " <span class="text-muted new-email"><?=$info['email'];?>
		</span> " </h5>
	</div>
	<div>
	  <div id="resendBox">
		<div class="action-messages"></div>
		<div class="spinner mt-2 mt-2">
		  <div class="rect1"></div>
		  <div class="rect2"></div>
		  <div class="rect3"></div>
		  <div class="rect4"></div>
		  <div class="rect5"></div>
		</div>
	  </div>
	  <h5>Did not received our confirmation email? <!--a href="<?=$verify_url;?>" target="_blank">Verify</a--> </h5>
	  <ul class="pl-3">
		<li class="mb-2">Check your spam email</li>
		<li class="mb-2">Resend confirmation email to <strong class="new-email">
			<?=$info['email'];?>
		  </strong> - <a href="javascript:void(0)" data-id="44802" class="text-strong text-business-tertiary resend-code">Resend Now</a>
		</li>
		<li>Need To Change Email Address - <a href="#newEmail" data-toggle="collapse" class="text-strong text-business-tertiary">Change Now</a>
		</li>
	  </ul>
	  <div class="collapse email" id="newEmail">
		<div class="action-message"></div>
		<div class="spinner mt-2 mt-2">
		  <div class="rect1"></div>
		  <div class="rect2"></div>
		  <div class="rect3"></div>
		  <div class="rect4"></div>
		  <div class="rect5"></div>
		</div>
		<form>
		  <div class="form-group row align-items-center">
			<label class="col-md-3 my-1 text-strong text-muted">New Email Address:</label>
			<div class="col-md-6 my-1">
			  <input type="eamil" id="new_email" class="form-control" placeholder="New Email Address">
			  <div class="email-error"></div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="col-md-3 my-1">
			  <a href="javascript:void(0);" class="btn px-4 btn-b2bitem-primary update-email">Update Email</a>
			</div>
		  </div>
		</form>
	  </div>
	</div>
  </div>
</div>
</section>

<script data-cfasync="false" src="https://b2bitem.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$(".update-email").on("click", function() {
		var new_email = $("#new_email").val();
		if (new_email == "") {
		  $("#new_email").focus();
		  return false;
		}
		if (IsEmail(new_email) == false) {
		  $(".email-error").html(' <i class = "fa fa-warning"></i> Enter Valid Email Address');
			return false;
		}

		$(".email .action-message").html('').show();
	  	$(".email .spinner").show();
	  	var dataString = 'new_email='+ new_email;
	  	$.ajax({
			//type: 'GET',
			 type: "POST",
            data: dataString,
			url: "<?=site_url('website/update_user_email_address');?>",
			success: function(info) {
			  if (info == 1) {
				$(".new-email").html(new_email);
				$(".email .action-message").html(' <div class = "alert alert-success  alert-dismissible" > A verification link has been sent to your new email address <b> '+new_email+' </b> <button type = "button"\
				  class = "close"\
				  data-dismiss="alert"> &times; </button> </div>');
				}
				else {
				  $(".email .action-message").html(' <div class = "alert alert-danger  alert-dismissible"> Email already exist <button type = "button"\
					class = "close"\
					data-dismiss="alert"> &times; </button> </div>');
				  }
				  $(".email .spinner").hide();
				},
				error: function(info) {
				  console.log(info);
				  $(".email .action-message").html(' <div class = "alert alert-danger" > <i class = "fa fa-check" > </i> OPPS! Something is going wrong </div>')
					setTimeout(function() {
					  $('.email .action-message').fadeOut();
					}, 3000); $(".email .spinner").hide();
				  }
		});

	});

	$(".resend-code").on("click", function() {
			 
			  $(".action-messages").html('').show();
			  $(".spinner").show();
			  var dataString = 'new_email='+ 12;
			  $.ajax({
					type: "POST",
            		data: dataString,
					url: "<?=site_url('website/resent_verification_code');?>",
					success: function(info) {
					  if (info == 1) {
						$(".action-messages").html(' <div class = "alert alert-success  alert-dismissible" > New verification link has been sent to your email account. <button type="button"\
						  class = "close"\
						  data-dismiss="alert"> &times; </button> </div>');
						}
						else {
						  $(".action-messages").html(' <div class = "alert alert-danger  alert-dismissible"> OPPS!Something is going wrong <button type = "button"\
							class = "close"\
							data-dismiss= "alert" > &times; </button> </div>');
						  }
						  $(".spinner").hide();
						},
						error: function(info) {
						  $(".action-messages").html(' <div class = "alert alert-danger" > <i class = "fa fa-check"> </i> OPPS! Something is going wrong </div>')
							setTimeout(function() {
							  $('.action-messages').fadeOut();
							}, 3000); $(".spinner").hide();
						  }
						});
					});



});

function IsEmail(email) {
	var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!regex.test(email)) {
	  return false;
	} else {
	  return true;
	}
}

</script>