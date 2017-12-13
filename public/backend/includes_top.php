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
<?php if ($page_name == 'manage_author' || $page_name == 'manage_freelancer' || $page_name == 'manage_category') { ?>
    <link href="<?=base_url()?>assets/backend/vendors/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
<?php } ?>
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/backend/demo/default/media/img/logo/favicon.ico" />

    <script src="<?= base_url(); ?>assets/backend/vendors/base/vendors.bundle.js" type="text/javascript"></script>
    <script type="text/javascript">
        var baseurl = '<?=base_url()?>';
    </script>