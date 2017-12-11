<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->library('session');
		$this->load->model('admin_model');
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

    public function profile()
    {
        if ($this->session->userdata('admin_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        $data['page_name'] = 'profile';
        $data['page_title'] = get_phrase('profile');
        $this->load->view('backend/index', $data);
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

        if ($task == 'add') {
            $data['page_name'] = 'add_author';
            $data['page_title'] = get_phrase('add_new_authors');
            $this->load->view('backend/index', $data);
        } else {
            $data['author_info'] = $this->admin_model->select_author_info();
            $data['page_name'] = 'manage_author';
            $data['page_title'] = get_phrase('authors');
            $this->load->view('backend/index', $data);
        }
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

    public function subcategories($task = '', $subcategory_id = '')
    {
        if ($this->session->userdata('admin_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        if ($task == 'create') {
            $this->admin_model->save_subcategory_info();
            $this->session->set_flashdata('message', get_phrase('subcategory_info_saved_successfuly'));
            redirect(base_url() . 'admin/subcategories');
        }

        if ($task == 'update') {
            $this->admin_model->update_subcategory_info($subcategory_id);
            $this->session->set_flashdata('message', get_phrase('subcategory_info_updated_successfuly'));
            redirect(base_url() . 'admin/subcategories');
        }

        if ($task == 'delete') {
            $this->admin_model->delete_subcategory_info($subcategory_id);
            redirect(base_url() . 'admin/subcategories');
        }

        if ($task == 'change_status') {
            $this->admin_model->change_status_subcategory_info($subcategory_id);
            $this->session->set_flashdata('message', get_phrase('subcategory_status_changed_successfuly'));
            redirect(base_url() . 'admin/subcategories');
        }

        $data['subcategory_info'] = $this->admin_model->select_subcategory_info();
        $data['page_name'] = 'manage_subcategory';
        $data['page_title'] = get_phrase('subcategories');
        $this->load->view('backend/index', $data);
    }

    public function skills($task = '', $skill_id = '')
    {
        if ($this->session->userdata('admin_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        if ($task == 'create') {
            $this->admin_model->save_skill_info();
            $this->session->set_flashdata('message', get_phrase('skill_info_saved_successfuly'));
            redirect(base_url() . 'admin/skills');
        }

        if ($task == 'update') {
            $this->admin_model->update_skill_info($skill_id);
            $this->session->set_flashdata('message', get_phrase('skill_info_updated_successfuly'));
            redirect(base_url() . 'admin/skills');
        }

        if ($task == 'delete') {
            $this->admin_model->delete_skill_info($skill_id);
            redirect(base_url() . 'admin/skills');
        }

        if ($task == 'change_status') {
            $this->admin_model->change_status_skill_info($skill_id);
            $this->session->set_flashdata('message', get_phrase('skill_status_changed_successfuly'));
            redirect(base_url() . 'admin/skills');
        }

        $data['skill_info'] = $this->admin_model->select_skill_info();
        $data['page_name'] = 'manage_skill';
        $data['page_title'] = get_phrase('skills');
        $this->load->view('backend/index', $data);
    }

    public function jobs($task = '', $job_id = '')
    {
        if ($this->session->userdata('admin_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        if ($task == 'create') {
            $this->admin_model->save_job_info();
            $this->session->set_flashdata('message', get_phrase('job_info_saved_successfuly'));
            redirect(base_url() . 'admin/jobs');
        }

        if ($task == 'update') {
            $this->admin_model->update_job_info($job_id);
            $this->session->set_flashdata('message', get_phrase('job_info_updated_successfuly'));
            redirect(base_url() . 'admin/jobs');
        }

        if ($task == 'delete') {
            $this->admin_model->delete_job_info($job_id);
            redirect(base_url() . 'admin/jobs');
        }

        if ($task == 'change_status') {
            $this->admin_model->change_status_job_info($job_id);
            $this->session->set_flashdata('message', get_phrase('job_status_changed_successfuly'));
            redirect(base_url() . 'admin/jobs');
        }

        $data['job_info'] = $this->admin_model->select_job_info();
        $data['page_name'] = 'manage_job';
        $data['page_title'] = get_phrase('jobs');
        $this->load->view('backend/index', $data);
    }

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */