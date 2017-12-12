    <!--begin::Base Scripts -->

    <!--end::Base Scripts -->
    <!--begin::Page Snippets -->
    
    <!--end::Page Snippets -->
        <script>
            $('a.restorebtn').click(function() {
                var id = $(this).attr("data-id");
                var data_type = $(this).attr("data-type");
                restoreData(id, data_type);
            });
            function deleteData(id) {
                var data_type = $('a.deletebtn').attr("data-type");
                swal({
                    title: "<?= get_phrase('are_you_sure_?') ?>", 
                    text: "<?= get_phrase('are_you_sure_that_you_want_to_delete_this_data_?') ?>", 
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    closeOnConfirm: false,
                    confirmButtonText: "<?= get_phrase('yes,_delete_it_!') ?>"
                }, function() {
                    $.ajax({
                        url: baseurl + "admin/" + data_type + "s/delete/" + id,
                        type: "DELETE"
                    })
                    .done(function(data) {
                        swal({
                            title: "<?= get_phrase('deleted') ?>",
                            text: "<?= get_phrase('data_has_been_successfully_deleted') ?>", 
                            type: "success"
                        },function() {
                            location.reload();
                        });
                    })
                    .error(function(data) {
                        swal("<?= get_phrase('oops,') ?>", "<?= get_phrase('we_couldn\'t_connect_to_the_server!') ?>", "error");
                    });
                });
            }
            function restoreData(id, data_type) {
                swal({
                    title: "<?= get_phrase('are_you_sure_?') ?>", 
                    text: "<?= get_phrase('are_you_sure_that_you_want_to_restore_this_data_?') ?>", 
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-info",
                    closeOnConfirm: false,
                    confirmButtonText: "<?= get_phrase('yes,_restore_it_!') ?>"
                }, function() {
                    $.ajax({
                        url: baseurl + "admin/" + data_type + "s/restore/" + id,
                        type: "RESTORE"
                    })
                    .done(function(data) {
                        swal({
                            title: "<?= get_phrase('restored') ?>",
                            text: "<?= get_phrase('data_has_been_successfully_restored') ?>", 
                            type: "success"
                        },function() {
                            location.reload();
                        });
                    })
                    .error(function(data) {
                        swal("<?= get_phrase('oops,') ?>", "<?= get_phrase('we_couldn\'t_connect_to_the_server!') ?>", "error");
                    });
                });
            }
        </script>
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