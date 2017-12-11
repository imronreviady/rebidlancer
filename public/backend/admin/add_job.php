<form role="form" action="<?= base_url(); ?>admin/jobs/create/" method="post" enctype="multipart/form-data">
	<div class="form-group form-md-line-input form-md-floating-label">
		<input type="text" name="title" class="form-control" id="title">
		<label for="name"><?= get_phrase('title'); ?></label>
		<span class="help-block"><?= get_phrase('job_title'); ?></span>
	</div>

	<div class="form-group form-md-line-input">
		<input type="text" name="slug" class="form-control" id="slug">
		<label for="slug"><?= get_phrase('slug'); ?></label>
		<span class="help-block"><?= get_phrase('post_slug'); ?></span>
	</div>

	<div class="form-group form-md-line-input">
		<textarea name="description" class="form-control" id="description" rows="3"></textarea>
		<label for="description"><?= get_phrase('description'); ?></label>
		<span class="help-block"><?= get_phrase('jobs_description'); ?></span>
	</div>

	<div class="margin-top-20">
    	<input type="submit" class="btn green" value="Submit">
    	<input type="reset" class="btn green" value="Cancel">
	</div>
</form>

<script src="<?= base_url(); ?>assets-backend/assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>

<script type="text/javascript">
	$('document').ready(function() {
		$('#description').summernote({height: 300});
	});
	$("#title").keyup(function() {
		var Text = $(this).val();
		Text = Text.toLowerCase();
		Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
		$("#slug").val(Text);
	});
</script>