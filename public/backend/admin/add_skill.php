<form role="form" action="<?= base_url(); ?>admin/skills/create/" method="post" enctype="multipart/form-data">
	<div class="form-group form-md-line-input form-md-floating-label">
		<input type="text" name="name" class="form-control" id="name">
		<label for="name"><?= get_phrase('name'); ?></label>
		<span class="help-block"><?= get_phrase('skill_name'); ?></span>
	</div>

	<div class="margin-top-20">
    	<input type="submit" class="btn green" value="Submit">
    	<input type="reset" class="btn green" value="Cancel">
	</div>
</form>