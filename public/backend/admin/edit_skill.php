<?php
	$single_skill_info = $this->db->get_where('skill', array('skill_id' => $param2))->result_array();
	foreach ($single_skill_info as $row) {
?>
<form role="form" action="<?= base_url(); ?>admin/skills/update/<?= $row['skill_id'] ?>" method="post" enctype="multipart/form-data">
	<div class="form-group form-md-line-input">
		<input type="text" name="name" class="form-control" id="name" value="<?= $row['name'] ?>">
		<label for="name"><?= get_phrase('name'); ?></label>
		<span class="help-block"><?= get_phrase('skill_name'); ?></span>
	</div>
	<div class="margin-top-20">
    	<input type="submit" class="btn green" value="Submit">
	</div>
</form>
<?php } ?>