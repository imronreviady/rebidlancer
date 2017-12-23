<?php
$system_name    = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$system_title   = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
$text_align     = $this->db->get_where('settings', array('type' => 'text_align'))->row()->description;
$account_type   = $this->session->userdata('login_type');
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?=$system_title?></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<?php include 'includes_top.php'; ?>
	    <style type="text/css">
	    	@keyframes animatedBackground {
				from { background-position: 0 0; }
				to { background-position: 100% 0; }
			}
	    </style>
	</head>
	<body <?php if ($page_name == 'profile_edit') echo 'data-spy="scroll" data-target="blog-detail-2.htmlscrollspy"' ?>>

	<!-- THE LOADER -->

	<?php include 'loader.php'; ?>
	
	<!-- THE HEADER -->
	
	<?php include 'header.php'; ?>
		
	<!-- MAIN CONTENT -->

	<?php include $page_name . '.php'; ?>

	<!-- THE FOOTER -->
	
	<?php include 'footer.php'; ?>

	<?php include 'theme-config.php'; ?>
	
	<!-- SCRIPTS	 -->
    <?php include 'includes_bottom.php'; ?>

	</body>
</html>