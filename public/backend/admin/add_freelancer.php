<form role="form" action="<?= base_url(); ?>admin/freelancers/create/" method="post" enctype="multipart/form-data">
	<div class="form-group form-md-line-input form-md-floating-label">
		<input type="text" name="name" class="form-control" id="name">
		<label for="name"><?= get_phrase('name'); ?></label>
		<span class="help-block"><?= get_phrase('freelancer_full_name'); ?></span>
	</div>
	<div class="form-group form-md-line-input form-md-floating-label">
		<input type="text" name="username" class="form-control" id="username">
		<label for="username"><?= get_phrase('username'); ?></label>
		<span class="help-block"><?= get_phrase('freelancer_username'); ?></span>
	</div>
	<div class="form-group form-md-line-input form-md-floating-label">
		<input type="email" name="email" class="form-control" id="email">
		<label for="email"><?= get_phrase('email'); ?></label>
		<span class="help-block"><?= get_phrase('freelancer_email_address'); ?></span>
	</div>
	<div class="form-group form-md-line-input form-md-floating-label">
		<input type="text" name="phone" class="form-control" id="phone">
		<label for="email"><?= get_phrase('phone'); ?></label>
		<span class="help-block"><?= get_phrase('freelancer_phone_number'); ?></span>
	</div>
	<div class="form-group form-md-line-input form-md-floating-label">
		<input type="password" name="password" class="form-control" id="password">
		<label for="password"><?= get_phrase('password'); ?></label>
		<span class="help-block"><?= get_phrase('freelancer_password'); ?></span>
	</div>
	<div class="form-group">
		<div class="fileinput fileinput-new" data-provides="fileinput">
			<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
				<img src="<?= base_url(); ?>uploads/avatar.jpg" alt="" />
			</div>
			<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
        	<div>
				<span class="btn default btn-file">
					<span class="fileinput-new"> <?= get_phrase('select_image'); ?> </span>
                	<span class="fileinput-exists"> <?= get_phrase('change'); ?> </span>
                	<input type="file" name="image" accept="image/*">
            	</span>
            	<a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> <?= get_phrase('remove'); ?> </a>
        	</div>
    	</div>
	</div>

	<div class="margin-top-20">
    	<input type="submit" class="btn green" value="Submit">
    	<input type="reset" class="btn green" value="Cancel">
	</div>
</form>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?= base_url(); ?>assets-backend/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets-backend/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->