<?php 
require('top.php');
if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']=='yes'){
	?>
	<script>
	window.location.href='my_order.php';
	</script>
	<?php
}
?>
<!-- Start Bradcaump area -->
			<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Forget Password</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
        <!-- End Bradcaump area -->
        <br>
		<!-- Start Contact Area -->
        <section class="htc__contact__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h6 class="title__line--6">Forgot Password</h6>
								</div>
							</div>
							<div class="col-xs-12">
								<form id="login-form" method="post">
									<div class="single-contact-form">
										<div class="contact-box name">
											<input class="form-control" type="text" name="email" id="email" placeholder="Your Email*" style="width:100%">
										</div>
										<span class="field_error" id="email_error"></span>
									</div>
									
									<div class="contact-btn">
										<button type="button" class="btn" onclick="forgot_password()" id="btn_submit">Submit</button>
										
									</div>
								</form>
								<br>
								<div class="form-output login_msg">
									<p class="form-messege field_error"></p>
								</div>
							</div>
						</div> 
                
				</div>
				

					
            </div>
        </section>
		<script>
		function forgot_password(){
			jQuery('#email_error').html('');
			var email=jQuery('#email').val();
			if(email==''){
				jQuery('#email_error').html('Please enter email id');
			}else{
				jQuery('#btn_submit').html('Please wait...');
				jQuery('#btn_submit').attr('disabled',true);
				jQuery.ajax({
					url:'forgot_password_submit.php',
					type:'post',
					data:'email='+email,
					success:function(result){
						jQuery('#email').val('');
						jQuery('#email_error').html(result);
						jQuery('#btn_submit').html('Submit');
						jQuery('#btn_submit').attr('disabled',false);
					}
				})
			}
		}
		</script>
<?php require('footer.php')?>        