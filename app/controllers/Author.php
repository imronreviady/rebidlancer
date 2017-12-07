<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->library('session');
		$this->load->model('author_model');
	}

	public function index()
	{
		if ($this->session->userdata('author_login') != 1) {
			redirect(base_url() . 'login', 'refresh');
		}
		if ($this->session->userdata('author_login') == 1) {
			redirect(base_url() . 'author/dashboard', 'refresh');
		}
	}

	public function dashboard()
	{
		if ($this->session->userdata('author_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        $data['page_name'] = 'dashboard';
        $data['page_title'] = get_phrase('author_dashboard');
        $this->load->view('backend/index', $data);
	}

}

/* End of file Author.php */
/* Location: .//F/xampp/htdocs/rebidlancer/app/controllers/Author.php */