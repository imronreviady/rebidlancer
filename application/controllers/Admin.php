<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->library('session');
		$this->load->model('admin_model');

		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
	}

	public function index()
	{
		if ($this->session->userdata('admin_login') != 1) {
			redirect(base_url() . 'login', 'refresh');
		}
		if ($this->session->userdata('admin_login') == 1) {
			redirect(base_url() . 'admin/dashboard', 'refresh');
		}
	}

	public function dashboard()
	{
		if ($this->session->userdata('admin_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        $data['page_name'] = 'dashboard';
        $data['page_title'] = get_phrase('admin_dashboard');
        $this->load->view('backend/index', $data);
	}

	public function authors($task = '', $author_id = '')
	{
		if ($this->session->userdata('admin_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        if ($task == 'create') {
        	$this->admin_model->save_author_info();
        	$this->session->set_flashdata('message', get_phrase('author_info_saved_successfuly'));
        	redirect(base_url() . 'admin/authors');
        }

        if ($task == 'update') {
        	$this->admin_model->update_author_info($author_id);
        	$this->session->set_flashdata('message', get_phrase('author_info_updated_successfuly'));
        	redirect(base_url() . 'admin/authors');
        }

        if ($task == 'delete') {
        	$this->admin_model->delete_author_info($author_id);
        	redirect(base_url() . 'admin/authors');
        }

        if ($task == 'change_status') {
        	$this->admin_model->change_status_author_info($author_id);
        	$this->session->set_flashdata('message', get_phrase('author_status_changed_successfuly'));
        	redirect(base_url() . 'admin/authors');
        }

        if ($task == 'change_profile_image') {
        	$this->admin_model->change_profile_image_author_info($author_id);
        }

        $data['author_info'] = $this->admin_model->select_author_info();
        $data['page_name'] = 'manage_author';
        $data['page_title'] = get_phrase('authors');
        $this->load->view('backend/index', $data);
	}

	public function deleted_authors($task = '', $author_id = '')
	{
		if ($this->session->userdata('admin_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        if ($task == 'restore') {
        	$this->admin_model->restore_author_info($author_id);
        	$this->session->set_flashdata('message', get_phrase('author_status_changed_successfuly'));
        	redirect(base_url() . 'admin/deleted_authors');
        }

        if ($task == 'delete') {
        	$this->admin_model->delete_permanent_author_info($author_id);
        	redirect(base_url() . 'admin/deleted_authors');
        }

		$data['deleted_author_info'] = $this->admin_model->select_deleted_author_info();
        $data['page_name'] = 'manage_deleted_author';
        $data['page_title'] = get_phrase('deleted_authors');
        $this->load->view('backend/index', $data);
	}

	public function freelancers($task = '', $freelancer_id = '')
	{
		if ($this->session->userdata('admin_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        if ($task == 'create') {
        	$this->admin_model->save_freelancer_info();
        	$this->session->set_flashdata('message', get_phrase('freelancer_info_saved_successfuly'));
        	redirect(base_url() . 'admin/freelancers');
        }

        if ($task == 'update') {
        	$this->admin_model->update_freelancer_info($freelancer_id);
        	$this->session->set_flashdata('message', get_phrase('freelancer_info_updated_successfuly'));
        	redirect(base_url() . 'admin/freelancers');
        }

        if ($task == 'delete') {
        	$this->admin_model->delete_freelancer_info($freelancer_id);
        	redirect(base_url() . 'admin/freelancers');
        }

        if ($task == 'change_status') {
        	$this->admin_model->change_status_freelancer_info($freelancer_id);
        	$this->session->set_flashdata('message', get_phrase('freelancer_status_changed_successfuly'));
        	redirect(base_url() . 'admin/freelancers');
        }

        if ($task == 'change_profile_image') {
        	$this->admin_model->change_profile_image_freelancer_info($freelancer_id);
        }

        $data['freelancer_info'] = $this->admin_model->select_freelancer_info();
        $data['page_name'] = 'manage_freelancer';
        $data['page_title'] = get_phrase('freelancers');
        $this->load->view('backend/index', $data);
	}

	public function deleted_freelancers($task = '', $freelancer_id = '')
	{
		if ($this->session->userdata('admin_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        if ($task == 'restore') {
        	$this->admin_model->restore_freelancer_info($freelancer_id);
        	$this->session->set_flashdata('message', get_phrase('freelancer_status_changed_successfuly'));
        	redirect(base_url() . 'admin/deleted_freelancers');
        }

        if ($task == 'delete') {
        	$this->admin_model->delete_permanent_freelancer_info($freelancer_id);
        	redirect(base_url() . 'admin/deleted_freelancers');
        }

		$data['deleted_freelancer_info'] = $this->admin_model->select_deleted_freelancer_info();
        $data['page_name'] = 'manage_deleted_freelancer';
        $data['page_title'] = get_phrase('deleted_freelancers');
        $this->load->view('backend/index', $data);
	}

	public function categories($task = '', $category_id = '')
	{
		if ($this->session->userdata('admin_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        if ($task == 'create') {
        	$this->admin_model->save_category_info();
        	$this->session->set_flashdata('message', get_phrase('category_info_saved_successfuly'));
        	redirect(base_url() . 'admin/categories');
        }

        if ($task == 'update') {
        	$this->admin_model->update_category_info($category_id);
        	$this->session->set_flashdata('message', get_phrase('category_info_updated_successfuly'));
        	redirect(base_url() . 'admin/categories');
        }

        if ($task == 'delete') {
        	$this->admin_model->delete_category_info($category_id);
        	redirect(base_url() . 'admin/categories');
        }

        if ($task == 'change_status') {
        	$this->admin_model->change_status_category_info($category_id);
        	$this->session->set_flashdata('message', get_phrase('category_status_changed_successfuly'));
        	redirect(base_url() . 'admin/categories');
        }

        $data['category_info'] = $this->admin_model->select_category_info();
        $data['page_name'] = 'manage_category';
        $data['page_title'] = get_phrase('categories');
        $this->load->view('backend/index', $data);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */