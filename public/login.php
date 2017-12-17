
<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<?php
        $system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
        $system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
        ?>
		<meta charset="utf-8" />
		<title>
			<?php echo get_phrase('login'); ?> | <?php echo $system_title; ?>
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
		<!--begin::Base Styles -->
		<link href="<?= base_url(); ?>assets/backend/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?= base_url(); ?>assets/backend/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link href="<?=base_url()?>assets/backend/vendors/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="<?= base_url(); ?>assets/backend/demo/default/media/img/logo/favicon.ico" />

		<script src="<?= base_url(); ?>assets/backend/vendors/base/vendors.bundle.js" type="text/javascript"></script>
	</head>
	<!-- end::Head -->
	<!-- end::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<script type="text/javascript">
            var baseurl = '<?php echo base_url(); ?>';
        </script>
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-login m-login--singin  m-login--5" id="m_login" style="background-image: url(<?= base_url(); ?>assets/backend/app/media/img//bg/bg-3.jpg);">
				<div class="m-login__wrapper-1 m-portlet-full-height">
					<div class="m-login__wrapper-1-1">
						<div class="m-login__contanier">
							<div class="m-login__content">
								<div class="m-login__logo">
									<a href="#">
										<img src="<?= base_url(); ?>assets/backend/app/media/img//logos/logo-2.png">
									</a>
								</div>
								<div class="m-login__title">
									<h3>
										JOIN OUR GREAT METRO COMMUNITY GET FREE ACCOUNT
									</h3>
								</div>
								<div class="m-login__desc">
									Amazing Stuff is Lorem Here.Grownng Team
								</div>
								<div class="m-login__form-action">
									<button type="button" id="m_login_signup" class="btn btn-outline-focus m-btn--pill">
										<?=get_phrase('get_an_account')?>
									</button>
								</div>
							</div>
						</div>
						<div class="m-login__border">
							<div></div>
						</div>
					</div>
				</div>
				<div class="m-login__wrapper-2 m-portlet-full-height">
					<div class="m-login__contanier">
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">
									<?=get_phrase('login_to_your_account')?>
								</h3>
							</div>
							<form class="m-login__form m-form login-form" action="javascript:;">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="email" placeholder="Email" name="email" id="email" autocomplete="off" required>
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" id="password" required>
								</div>
								<div class="row m-login__form-sub">
									<div class="col m--align-left">
										<label class="m-checkbox m-checkbox--focus">
											<input type="checkbox" name="remember" id="remember">
											<?=get_phrase('remember_me')?>
											<span></span>
										</label>
									</div>
									<div class="col m--align-right">
										<a href="javascript:;" id="m_login_forget_password" class="m-link">
											<?=get_phrase('forget_password_?')?>
										</a>
									</div>
								</div>
								<div class="m-login__form-action">
									<button id="login" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
										<?=get_phrase('sign_in')?>
									</button>
								</div>
							</form>
						</div>
						<div class="m-login__signup">
							<div class="m-login__head">
								<h3 class="m-login__title">
									<?=get_phrase('sign_up')?>
								</h3>
								<div class="m-login__desc">
									Enter your details to create your account:
								</div>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Fullname" name="fullname">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="password" placeholder="Password" name="password">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="rpassword">
								</div>
								<div class="m-login__form-sub">
									<label class="m-checkbox m-checkbox--focus">
										<input type="checkbox" name="agree">
										I Agree the
										<a href="#" class="m-link m-link--focus">
											terms and conditions
										</a>
										.
										<span></span>
									</label>
									<span class="m-form__help"></span>
								</div>
								<div class="m-login__form-action">
									<button id="m_login_signup_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
										Sign Up
									</button>
									<button id="m_login_signup_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">
										Cancel
									</button>
								</div>
							</form>
						</div>
						<div class="m-login__forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Forgotten Password ?
								</h3>
								<div class="m-login__desc">
									Enter your email to reset your password:
								</div>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
								</div>
								<div class="m-login__form-action">
									<button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
										Request
									</button>
									<button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom ">
										Cancel
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
		<!--begin::Base Scripts -->
		<script src="<?= base_url(); ?>assets/backend/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->
		<!--begin::Page Snippets -->
		<script src="<?= base_url(); ?>assets/backend/snippets/pages/user/login.js" type="text/javascript"></script>
		<script src="<?=base_url()?>assets/backend/vendors/bootstrap-sweetalert/sweetalert.min.js" type="text/javascript"></script>
		<script type="text/javascript">
            $(document).ready(function() {
                $("#login").click(function(){
                	var btn = $(this);
                	btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);
                    email=$("#email").val();
                    password=$("#password").val();
                    if (email === '' || password === '') {
                    	btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
                    	swal({
                            title: "<?= get_phrase('warning') ?>",
                            text: "<?= get_phrase('email_and_password_is_required.') ?>",
                            type: "warning",
                            timer: 3000,
                            confirmButtonClass: "btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill"
                        })
                    } else {
                    	$.ajax({
                        	url: baseurl + 'login/ajax_login',
                        	method: 'POST',
                        	dataType: 'json',
                        	data: {
                            	email: $("input#email").val(),
                            	password: $("input#password").val(),
                        	},
                        	error: function()
                        	{
                            	swal({
                                	title: "<?= get_phrase('oopss_!') ?>",
                                    text: "<?= get_phrase('something_was_wrong,_please_try_again') ?>",
                                    type: "error",
                                    confirmButtonClass: "btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill"
                                })
                        	},
                        	success: function(response)
                        	{
                            	// Login status [success|invalid]
                            	var login_status = response.login_status;
                                                         
                            	// We will give some time for the animation to finish, then execute the following procedures
                            	setTimeout(function()
                            	{
                            		btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
                                	// If login is invalid, we store the 
                                	if(login_status == 'invalid')
                                	{
                                    	swal({
                                        	title: "<?= get_phrase('failed') ?>",
                                        	text: "<?= get_phrase('incorrect_email_or_password._please_try_again.') ?>",
                                        	type: "error",
                                        	confirmButtonClass: "btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill"
                                    	})
                                	}
                                	else
                                	if (login_status == 'bannad') {
                                		swal({
                                        	title: "<?= get_phrase('bannad') ?>",
                                        	text: "<?= get_phrase('your_account_has_bannad,_please_contact_our_support') ?>",
                                        	type: "warning",
                                        	confirmButtonClass: "btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill"
                                    	})
                                	}
                                	else
                                	if (login_status == 'suspend') {
                                		swal({
                                        	title: "<?= get_phrase('suspend') ?>",
                                        	text: "<?= get_phrase('your_account_has_suspended,_please_contact_our_support') ?>",
                                        	type: "warning",
                                        	confirmButtonClass: "btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill"
                                    	})
                                	}
                                	else
                                	if (login_status == 'inactive') {
                                		swal({
                                        	title: "<?= get_phrase('inactive') ?>",
                                        	text: "<?= get_phrase('your_account_has_inactive,_please_contact_our_support') ?>",
                                        	type: "warning",
                                        	confirmButtonClass: "btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill"
                                    	})
                                	}
                                	else
                                	if(login_status == 'success')
                                	{
                                    	swal({
                                			title: "<?= get_phrase('logged_in') ?>",
                                    		text: "<?= get_phrase('welcome_back') ?>",
                                    		type: "success",
                                    		showConfirmButton: false
                                		});
                                    	// Redirect to login page
                                    	setTimeout(function()
                                    	{
                                        	var redirect_url = baseurl;
                                        
                                        	if(response.redirect_url && response.redirect_url.length)
                                        	{
                                            	redirect_url = response.redirect_url;
                                        	}
                                        
                                        	window.location.href = redirect_url;
                                    	}, 400);
                                	}
                                
                            	}, 1000);
                        	}
                    	});
                    }
                    return false;
                });
            })
        </script>
		<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>
