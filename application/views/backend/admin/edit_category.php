<?php
	$single_category_info = $this->db->get_where('category', array('category_id' => $param2))->result_array();
	foreach ($single_category_info as $row) {
?>
<form role="form" action="<?= base_url(); ?>admin/categories/update/<?= $row['category_id'] ?>" method="post" enctype="multipart/form-data">
	<div class="form-group form-md-line-input">
		<input type="text" name="name" class="form-control" id="name" value="<?= $row['name'] ?>">
		<label for="name"><?= get_phrase('name'); ?></label>
		<span class="help-block"><?= get_phrase('category_name'); ?></span>
	</div>
	<div class="form-group form-md-line-input">
		<textarea class="form-control" name="description" id="description"><?= $row['description'] ?></textarea>
		<label for="description"><?= get_phrase('description'); ?></label>
		<span class="help-block"><?= get_phrase('category_description'); ?></span>
	</div>
	<div class="margin-top-20">
    	<input type="submit" class="btn green" value="Submit">
	</div>
</form>
<?php } ?>