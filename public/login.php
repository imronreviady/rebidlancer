<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    <head>
        <?php
        $system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
        $system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
        ?>
        <meta charset="utf-8" />
        <title><?php echo get_phrase('login'); ?> | <?php echo $system_title; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for " name="description" />
        <meta content="" name="author" />

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />

        <script src="<?= base_url(); ?>assets-backend/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
      
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <script type="text/javascript">
            var baseurl = '<?php echo base_url(); ?>';
        </script>
        <!-- BEGIN : LOGIN PAGE 5-1 -->
        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-6 bs-reset mt-login-5-bsfix">
                    <div class="login-bg" style="background-image:url(<?= base_url(); ?>assets-backend/assets/pages/img/login/bg1.jpg)">
                        <img class="login-logo" src="<?= base_url(); ?>assets-backend/assets/pages/img/login/logo.png" /> </div>
                </div>
                <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
                    <div class="login-content">
                        <h1><?= $system_name; ?></h1>
                        <form action="javascript:;" class="login-form" method="post">
                            <div class="alert alert-warning display-hide">
                                <button class="close" data-close="alert"></button>
                                <span>Oops something was wrong. </span>
                            </div>
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                <span>Opps your email or password maybe wrong. </span>
                            </div>
                            <div class="alert alert-success display-hide">
                                <button class="close" data-close="alert"></button>
                                <span>Yuhuu welcome back bro. </span>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="email" autocomplete="off" placeholder="Email" name="email" id="email" required/> </div>
                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="password" id="password" required/> </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="rem-password">
                                        <label class="rememberme mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" name="remember" value="1" /> Remember me
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-8 text-right">
                                    <div class="forgot-password">
                                        <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                                    </div>
                                    <button class="btn green" id="login" type="button">Sign In</button>
                                </div>
                            </div>
                        </form>
                        <!-- BEGIN FORGOT PASSWORD FORM -->
                        <form class="forget-form" action="javascript:;" method="post">
                            <h3 class="font-green">Forgot Password ?</h3>
                            <p> Enter your e-mail address below to reset your password. </p>
                            <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                            <div class="form-actions">
                                <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                                <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                            </div>
                        </form>
                        <!-- END FORGOT PASSWORD FORM -->
                    </div>
                    <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-xs-5 bs-reset">
                                <ul class="login-social">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-7 bs-reset">
                                <div class="login-copyright text-right">
                                    <p>Copyright &copy; Rebidlancer.com <?= date('Y'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END : LOGIN PAGE 5-1 -->
        <!--[if lt IE 9]>
<script src="<?= base_url(); ?>assets-backend/assets/global/plugins/respond.min.js"></script>
<script src="<?= base_url(); ?>assets-backend/assets/global/plugins/excanvas.min.js"></script> 
<script src="<?= base_url(); ?>assets-backend/assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?= base_url(); ?>assets-backend/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets-backend/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets-backend/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets-backend/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets-backend/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?= base_url(); ?>assets-backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets-backend/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets-backend/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets-backend/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?= base_url(); ?>assets-backend/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script type="text/javascript">
            $(document).ready(function() {
                $("#login").click(function(){   
                    email=$("#email").val();
                    password=$("#password").val();
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
                            $(".alert-warning").show();
                        },
                        success: function(response)
                        {
                            // Login status [success|invalid]
                            var login_status = response.login_status;
                                                         
                            
                            
                            // We will give some time for the animation to finish, then execute the following procedures    
                            setTimeout(function()
                            {
                                // If login is invalid, we store the 
                                if(login_status == 'invalid')
                                {
                                    $(".alert-danger").show();
                                }
                                else
                                if(login_status == 'success')
                                {
                                    $(".alert-success").show();
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
                    return false;
                });
            })
        </script>
        <script type="text/javascript">
            var Login=function(){var r=function(){$(".login-form").validate({errorElement:"span",errorClass:"help-block",focusInvalid:!1,rules:{username:{required:!0},password:{required:!0},remember:{required:!1}},messages:{username:{required:"Username is required."},password:{required:"Password is required."}},invalidHandler:function(r,e){$(".alert-danger",$(".login-form")).show()},highlight:function(r){$(r).closest(".form-group").addClass("has-error")},success:function(r){r.closest(".form-group").removeClass("has-error"),r.remove()},errorPlacement:function(r,e){r.insertAfter(e.closest(".input-icon"))},submitHandler:function(r){r.submit()}}),$(".login-form input").keypress(function(r){if(13==r.which)return $(".login-form").validate().form()&&$(".login-form").submit(),!1}),$(".forget-form input").keypress(function(r){if(13==r.which)return $(".forget-form").validate().form()&&$(".forget-form").submit(),!1}),$("#forget-password").click(function(){$(".login-form").hide(),$(".forget-form").show()}),$("#back-btn").click(function(){$(".login-form").show(),$(".forget-form").hide()})};return{init:function(){r(),$(".login-bg").backstretch(["<?= base_url(); ?>assets-backend/assets/pages/img/login/bg1.jpg","<?= base_url(); ?>assets-backend/assets/pages/img/login/bg2.jpg","<?= base_url(); ?>assets-backend/assets/pages/img/login/bg3.jpg"],{fade:1e3,duration:8e3}),$(".forget-form").hide()}}}();jQuery(document).ready(function(){Login.init()});
        </script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    </body>

</html>