<form role="form" action="<?= base_url(); ?>admin/categories/create/" method="post" enctype="multipart/form-data">
	<div class="form-group form-md-line-input form-md-floating-label">
		<input type="text" name="name" class="form-control" id="name">
		<label for="name"><?= get_phrase('name'); ?></label>
		<span class="help-block"><?= get_phrase('category_name'); ?></span>
	</div>
	<div class="form-group form-md-line-input form-md-floating-label">
		<textarea class="form-control" name="description" id="description"></textarea>
		<label for="description"><?= get_phrase('description'); ?></label>
		<span class="help-block"><?= get_phrase('category_description'); ?></span>
	</div>

	<div class="margin-top-20">
    	<input type="submit" class="btn green" value="Submit">
    	<input type="reset" class="btn green" value="Cancel">
	</div>
</form>