
 <?php if( $fform == 1){ ?> 
<style>
   #msbox{
       display:none;
   } 
</style>
   <?php }else{ ?>
 <style>
    #frombox{
       display:none;
   }
</style>
<?php } ?>


<div class="container custom-container">
               <div class="theme-block p-4 p-md-5 col-lg-7 mx-auto">
                  <div id="msbox">
                     <h3 class="auth-title text-normal pb-3">Check Your Mail</h3>
                     <p class="mb-0">Please check your email. A new password has been sent to your email.</p>
                     <p>You can change the password from your business panel.</p>
                     <p class="text-14 m-0">* In case you have not received the message, please check in the Spam folder.</p>
                  </div>
                  <div id="frombox">
                     <div class="row">
                        <div class="col-md-9">
                           <div class="mb-4">
                              <h3 class="auth-title text-normal pb-3">Forgot Account & Password?</h3>
                              <p class="mb-0">Please enter your registered email in B2bmap.com below</p>
                              <p>Your ID and a New Password will be sent to the email.</p>
                              <?php if($check == 0){ ?>
                              <p style="color:red;">Your email does not match. </p>
                              <?php } ?>
                           </div>
                           <div>
                              <form method="POST" action="#">
                                  
                                 <div class="mb-3">
                                    <input type="email" required name="email" class="form-control" value="<?=$email;?>" title="E-mail address must be entered. Please enter the e-mail address you registered when you signed up." placeholder="Enter email address">
                                 </div>
                                 <div class="d-flex flex-wrap">
                                    <div class="mr-3">
                                       <button type="submit" class="btn btn-sm btn-b2bmap-primary px-4">Submit</button>
                                    </div>
                                    <div>
                                       <a href="#" target="_blank" class="btn btn-sm btn-outline-b2bmap-secondary">Need More Help?</a>
                                    </div>
                                 </div>
                              </form>
                              <div class="mt-4 border-top pt-3">
                                 <p class="text-muted text-14 m-0">*If you do not remember the e-mail address you have registered with B2bmap, please <a href="#" target="_blank" class="text-business-tertiary">contact us</a>.</p>
                              </div>
                              <div class="my-3 text-center">
                                 <a href="https://b2bitem.com/login" class="btn btn-sm border text-muted px-4">Return To Login</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>