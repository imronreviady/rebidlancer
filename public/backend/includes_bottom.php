    <!--begin::Base Scripts -->

    <!--end::Base Scripts -->
    <!--begin::Page Snippets -->
    
    <!--end::Page Snippets -->
    <?php if ($this->session->flashdata('message') != ""){ ?>
        <script>
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.info('<?php echo $this->session->flashdata('message');?>');
        </script>
    <?php } ?>
    <script type="text/javascript">
        $.sessionTimeout({
            title: '<?=get_phrase("session_timeout")?>',
            message: '<?=get_phrase("your_session_is_about_to_expire")?>',
            keepAliveUrl: 'http://keenthemes.com/metronic/preview/inc/api/session-timeout/keepalive.php',
            redirUrl: '<?=base_url()?>login/logout',
            logoutUrl: '<?=base_url()?>login/logout',
            warnAfter: 900000,
            redirAfter: 1200000,
            ignoreUserActivity: true,
            countdownMessage: '<?=get_phrase("redirecting_in")?> {timer} <?=get_phrase("seconds")?>',
            countdownBar: true
        });
    </script>