<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myprofile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->library('session');
	}

	public function index()
	{
		$username = $this->uri->segment(1);

		if (empty($username)) {
            $this->displayPageNotFound();
        }

		if ($this->core_model->is_username($username, 'user') == 'available') {
			$data['profile'] = $this->core_model->select_profile_by_username($username, 'user');
			$this->load->view('myprofile', $data);
		} else {
			$this->displayPageNotFound();
		}
	}

	protected function displayPageNotFound() {
        show_404();
    }

}

/* End of file Myprofile.php */
/* Location: .//F/xampp-php7/htdocs/rebidlancer/app/controllers/Myprofile.php */