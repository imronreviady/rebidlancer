        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
<?php if ($page_name == 'dashboard') { ?>
        <link href="<?= base_url(); ?>assets-backend/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
<?php } ?>
<?php if ($page_name == 'manage_author' || $page_name == 'manage_deleted_author' || $page_name == 'manage_freelancer' || $page_name == 'manage_deleted_freelancer' || $page_name == 'manage_category' || $page_name == 'manage_subcategory' || $page_name == 'manage_skill' || $page_name == 'manage_job') { ?>
        <link href="<?= base_url(); ?>assets-backend/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            .user-box{width:300px;margin-left:25%;border-radius:0 0 3px 3px;padding:10px;position:relative}.user-box .name{word-break:break-all;padding:10px;background:#EEE;text-align:center;font-size:25px;font-family:fantasy}.user-box form{display:inline}.user-box .name h4{margin:0}.user-box img#imagePreview{width:100%}.editLink{position:absolute;top:28px;right:10px;opacity:0;transition:all .3s ease-in-out 0s;-mox-transition:all .3s ease-in-out 0s;-webkit-transition:all .3s ease-in-out 0s;background:rgba(255,255,255,.2)}.overlay,.overlay-content{position:absolute;left:0;right:0}.img-relative:hover .editLink{opacity:1}.overlay{top:0;bottom:0;z-index:2;background:rgba(255,255,255,.7)}.overlay-content{transform:translateY(-50%);-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);top:50%;text-align:center;color:#555}.uploadProcess img{max-width:207px;border:none;box-shadow:none;-webkit-border-radius:0;display:inline}
        </style>
        <link href="<?= base_url(); ?>assets-backend/assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
<?php } ?>
        <!-- END PAGE LEVEL PLUGINS -->
        <link href="<?=base_url(); ?>assets-backend/assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?= base_url(); ?>assets-backend/assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?= base_url(); ?>assets-backend/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets-backend/assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?= base_url(); ?>assets-backend/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>

        <!-- BEGIN CORE PLUGINS -->
        <script src="<?= base_url(); ?>assets-backend/core.js" type="text/javascript" async></script>
        <!-- END CORE PLUGINS -->