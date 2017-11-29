<?php
	$single_author_info = $this->db->get_where('author', array('author_id' => $param2))->result_array();
	foreach ($single_author_info as $row) {
?>
<div class="user-box">
    <div class="img-relative">
		<!-- Loading image -->
		<div class="overlay uploadProcess" style="display: none;">
			<div class="overlay-content"><img src="<?= base_url(); ?>assets-backend/preloader.gif"/></div>
		</div>
		<!-- Hidden upload form -->
		<form method="post" action="<?= base_url(); ?>admin/authors/change_profile_image/<?= $row['author_id'] ?>" enctype="multipart/form-data" id="picUploadForm" target="uploadTarget">
			<input type="file" name="picture" id="fileInput"  style="display:none"/>
		</form>
		<iframe id="uploadTarget" name="uploadTarget" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
		<!-- Image update link -->
		<a class="editLink" href="javascript:void(0);"><img src="<?= base_url(); ?>assets-backend/edit.png"/></a>
		<!-- Profile image -->
		<img src="<?= $this->core_model->get_image_url('author' , $row['author_id']);?>" class="img-circle" id="imagePreview">
    </div>
</div>
<div class="alert alert-success display-hide" id="changesuccess">
    <button class="close" data-close="alert"></button>
    <span><?= get_phrase('success_change_image'); ?></span>
</div>
<div class="alert alert-danger display-hide" id="changefailed">
    <button class="close" data-close="alert"></button>
    <span><?= get_phrase('there_was_an_error_during_file_upload!'); ?></span>
</div>
<div class="alert alert-warning display-hide" id="errorfiletype">
    <button class="close" data-close="alert"></button>
    <span><?= get_phrase('please_upload_only_.jpg/.jpeg/.png/.gif file.'); ?></span>
</div>
<form role="form" action="<?= base_url(); ?>admin/authors/update/<?= $row['author_id'] ?>" method="post" enctype="multipart/form-data">
	<div class="form-group form-md-line-input">
		<input type="text" name="name" class="form-control" id="name" value="<?= $row['name'] ?>">
		<label for="name"><?= get_phrase('name'); ?></label>
		<span class="help-block"><?= get_phrase('author_full_name'); ?></span>
	</div>
	<div class="form-group form-md-line-input">
		<input type="text" name="username" class="form-control" id="username" value="<?= $row['username'] ?>">
		<label for="username"><?= get_phrase('username'); ?></label>
		<span class="help-block"><?= get_phrase('author_username'); ?></span>
	</div>
	<div class="form-group form-md-line-input">
		<input type="email" name="email" class="form-control" id="email" value="<?= $row['email'] ?>">
		<label for="email"><?= get_phrase('email'); ?></label>
		<span class="help-block"><?= get_phrase('author_email_address'); ?></span>
	</div>
	<div class="form-group form-md-line-input">
		<input type="text" name="phone" class="form-control" id="phone" value="<?= $row['phone'] ?>">
		<label for="email"><?= get_phrase('phone'); ?></label>
		<span class="help-block"><?= get_phrase('author_phone_number'); ?></span>
	</div>
	<div class="form-group form-md-line-input form-md-floating-label">
		<input type="password" name="password" class="form-control" id="password">
		<label for="password"><?= get_phrase('password'); ?></label>
		<span class="help-block"><?= get_phrase('change_password'); ?></span>
	</div>
	<div class="margin-top-20">
    	<input type="submit" class="btn green" value="Submit">
	</div>
</form>
<?php } ?>

<script type="text/javascript">
$(document).ready(function () {
    //If image edit link is clicked
    $(".editLink").on('click', function(e){
        e.preventDefault();
        $("#fileInput:hidden").trigger('click');
    });
    $("#imagePreview").on('click', function(e){
        e.preventDefault();
        $("#fileInput:hidden").trigger('click');
    });
	
    //On select file to upload
    $("#fileInput").on('change', function(){
        var image = $('#fileInput').val();
        var img_ex = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
		
		//validate file type
        if(!img_ex.exec(image)){
            $('#errorfiletype').show();
            $('#fileInput').val('');
            return false;
        }else{
            $('.uploadProcess').show();
            $('#uploadForm').hide();
            $( "#picUploadForm" ).submit();
        }
    });
});

//After completion of image upload process
function completeUpload(success, fileName) {
	if(success == 1){
		$('#imagePreview').attr("src", "");
		$('#imagePreview').attr("src", "../" + fileName);
		$('#fileInput').attr("value", "../" + fileName);
		$('.uploadProcess').hide();
		$('#changesuccess').show();
	}else{
		$('.uploadProcess').hide();
		$('#changefailed').show();
	}
	return true;
}
</script>