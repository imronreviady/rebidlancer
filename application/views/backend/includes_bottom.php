<!--[if lt IE 9]>
<script src="<?= base_url(); ?>assets-backend/assets/global/plugins/respond.min.js"></script>
<script src="<?= base_url(); ?>assets-backend/assets/global/plugins/excanvas.min.js"></script> 
<script src="<?= base_url(); ?>assets-backend/assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <script src="<?= base_url(); ?>assets-backend/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?= base_url(); ?>assets-backend/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <?php if ($page_name == 'dashboard') { ?>
        <script src="<?= base_url(); ?>assets-backend/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
    <?php } ?>
    <?php if ($page_name == 'manage_author' || $page_name == 'manage_deleted_author' || $page_name == 'manage_freelancer' || $page_name == 'manage_deleted_freelancer' || $page_name == 'manage_category') { ?>
        <script src="<?= base_url(); ?>assets-backend/assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets-backend/assets/pages/scripts/ui-modals.min.js" type="text/javascript"></script>
        <script>
            $('a.deletebtn').click(function() {
                var id = $(this).attr("data-id");
                var data_type = $(this).attr("data-type");
                deleteData(id, data_type);
            });

            $('a.restorebtn').click(function() {
                var id = $(this).attr("data-id");
                var data_type = $(this).attr("data-type");
                restoreData(id, data_type);
            });

            function deleteData(id, data_type) {
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
    <?php } ?>
        <!-- END PAGE LEVEL SCRIPTS -->
        <script src="<?= base_url(); ?>assets-backend/assets/toastr.js"></script>
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?= base_url(); ?>assets-backend/assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets-backend/assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets-backend/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets-backend/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
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
    <?php if ($this->session->flashdata('message') != ""){ ?>
        <script>
                toastr.info('<?php echo $this->session->flashdata('message');?>');
        </script>>
    <?php } ?>