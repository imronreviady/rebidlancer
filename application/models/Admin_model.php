<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	/* Authors Backend Function */

	public function select_author_info()
	{
		return $this->db->get_where('author', array('is_deleted' => 'false'))->result_array();
	}

	public function save_author_info()
	{
		$data['name'] = $this->input->post('name');
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		$data['password'] = sha1($this->input->post('password'));
		$data['created_by'] = $this->session->userdata('username');

		$this->db->insert('author', $data);

		$author_id = $this->db->insert_id();
		move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/author_image/" . $author_id . '.jpg');
	}

	public function update_author_info($author_id)
	{
		$data['name'] = $this->input->post('name');
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		if (!empty($this->input->post('password'))) {
			$data['password'] = sha1($this->input->post('password'));
		}

		$this->db->where('author_id', $author_id);
		$this->db->update('author', $data);
	}

	public function delete_author_info($author_id)
	{
		$data['is_deleted'] = 'true';
		$data['deleted_at'] = date("Y-m-d H:i:s");

		$this->db->where('author_id', $author_id);
		$this->db->update('author', $data);
	}

	public function change_status_author_info($author_id)
	{
		if ($this->core_model->is_active('author', $author_id) == 'true') 
			$data['is_active'] = 'false';
		elseif ($this->core_model->is_active('author', $author_id) == 'false') 
			$data['is_active'] = 'true';

		$this->db->where('author_id', $author_id);
		$this->db->update('author', $data);
	}

	public function change_profile_image_author_info($author_id)
	{
		$result = 0;
    	$targetPath = "uploads/author_image/" . $author_id . '.jpg';
    
    	//Upload file to server
    	if(@move_uploaded_file($_FILES['picture']['tmp_name'], $targetPath)){
        	$result = 1;
    	}
    	echo '<script type="text/javascript">window.top.window.completeUpload(' . $result . ',\'' . $targetPath . '\');</script>  ';
	}

	public function select_deleted_author_info()
	{
		return $this->db->get_where('author', array('is_deleted' => 'true'))->result_array();
	}

	public function restore_author_info($author_id)
	{
		$data['is_deleted'] = 'false';
		$data['restored_at'] = date("Y-m-d H:i:s");

		$this->db->where('author_id', $author_id);
		$this->db->update('author', $data);
	}

	public function delete_permanent_author_info($author_id)
	{
		$this->db->where('author_id', $author_id);
        $this->db->delete('author');
	}

	/* END Authors Backend Function */

	/* Freelancers Backend Function */

	public function select_freelancer_info()
	{
		return $this->db->get_where('freelancer', array('is_deleted' => 'false'))->result_array();
	}

	public function save_freelancer_info()
	{
		$data['name'] = $this->input->post('name');
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		$data['password'] = sha1($this->input->post('password'));
		$data['created_by'] = $this->session->userdata('username');

		$this->db->insert('freelancer', $data);

		$freelancer_id = $this->db->insert_id();
		move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/freelancer_image/" . $freelancer_id . '.jpg');
	}

	public function update_freelancer_info($freelancer_id)
	{
		$data['name'] = $this->input->post('name');
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		if (!empty($this->input->post('password'))) {
			$data['password'] = sha1($this->input->post('password'));
		}

		$this->db->where('freelancer_id', $freelancer_id);
		$this->db->update('freelancer', $data);
	}

	public function delete_freelancer_info($freelancer_id)
	{
		$data['is_deleted'] = 'true';
		$data['deleted_at'] = date("Y-m-d H:i:s");

		$this->db->where('freelancer_id', $freelancer_id);
		$this->db->update('freelancer', $data);
	}

	public function change_status_freelancer_info($freelancer_id)
	{
		if ($this->core_model->is_active('freelancer', $freelancer_id) == 'true') 
			$data['is_active'] = 'false';
		elseif ($this->core_model->is_active('freelancer', $freelancer_id) == 'false') 
			$data['is_active'] = 'true';

		$this->db->where('freelancer_id', $freelancer_id);
		$this->db->update('freelancer', $data);
	}

	public function change_profile_image_freelancer_info($freelancer_id)
	{
		$result = 0;
    	$targetPath = "uploads/freelancer_image/" . $freelancer_id . '.jpg';
    
    	//Upload file to server
    	if(@move_uploaded_file($_FILES['picture']['tmp_name'], $targetPath)){
        	$result = 1;
    	}
    	echo '<script type="text/javascript">window.top.window.completeUpload(' . $result . ',\'' . $targetPath . '\');</script>  ';
	}

	public function select_deleted_freelancer_info()
	{
		return $this->db->get_where('freelancer', array('is_deleted' => 'true'))->result_array();
	}

	public function restore_freelancer_info($freelancer_id)
	{
		$data['is_deleted'] = 'false';
		$data['restored_at'] = date("Y-m-d H:i:s");

		$this->db->where('freelancer_id', $freelancer_id);
		$this->db->update('freelancer', $data);
	}

	public function delete_permanent_freelancer_info($freelancer_id)
	{
		$this->db->where('freelancer_id', $freelancer_id);
        $this->db->delete('freelancer');
	}

	/* END Freelancers Backend Function */

	/* Categories Backend Function */

	public function select_category_info()
	{
		return $this->db->get_where('category', array('is_deleted' => 'false'))->result_array();
	}

	public function save_category_info()
	{
		$data['name'] = $this->input->post('name');
		$data['description'] = $this->input->post('description');
		$data['created_by'] = $this->session->userdata('username');

		$this->db->insert('category', $data);
	}

	public function update_category_info($category_id)
	{
		$data['name'] = $this->input->post('name');
		$data['description'] = $this->input->post('description');

		$this->db->where('category_id', $category_id);
		$this->db->update('category', $data);
	}

	public function delete_category_info($category_id)
	{
		$data['is_deleted'] = 'true';
		$data['deleted_at'] = date("Y-m-d H:i:s");

		$this->db->where('category_id', $category_id);
		$this->db->update('category', $data);
	}

	public function change_status_category_info($category_id)
	{
		if ($this->core_model->is_active('category', $category_id) == 'true') 
			$data['is_active'] = 'false';
		elseif ($this->core_model->is_active('category', $category_id) == 'false') 
			$data['is_active'] = 'true';

		$this->db->where('category_id', $category_id);
		$this->db->update('category', $data);
	}

	/* END Categories Backend Function */
}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */