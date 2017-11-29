<?php
	$category_info = $this->db->get_where('category', array('is_active' => 'true', 'is_deleted' => 'false'))->result_array();
	$single_subcategory_info = $this->db->get_where('subcategory', array('subcategory_id' => $param2))->result_array();
	foreach ($single_subcategory_info as $row) {
?>
<form role="form" action="<?= base_url(); ?>admin/subcategories/update/<?= $row['subcategory_id'] ?>" method="post" enctype="multipart/form-data">
	<div class="form-group form-md-line-input">
		<input type="text" name="name" class="form-control" id="name" value="<?= $row['name'] ?>">
		<label for="name"><?= get_phrase('name'); ?></label>
		<span class="help-block"><?= get_phrase('subcategory_name'); ?></span>
	</div>
	<div class="form-group form-md-line-input">
		<textarea class="form-control" name="description" id="description"><?= $row['description'] ?></textarea>
		<label for="description"><?= get_phrase('description'); ?></label>
		<span class="help-block"><?= get_phrase('subcategory_description'); ?></span>
	</div>
	<div class="form-group form-md-line-input">
		<select class="form-control edited" name="category" id="category">
			<option value=""></option>
			<?php foreach ($category_info as $row_category) { ?>
			<option value="<?= $row_category['category_id']; ?>" <?php if ($row['category_id'] == $row_category['category_id']) echo 'selected'; ?>><?php echo $row_category['name']; ?></option>
			<?php } ?>
		</select>
		<label for="category"><?= get_phrase('category'); ?></label>
	</div>
	<div class="margin-top-20">
    	<input type="submit" class="btn green" value="Submit">
	</div>
</form>
<?php } ?>