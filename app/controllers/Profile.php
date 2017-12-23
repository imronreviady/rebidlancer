<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->library('session');
	}

	public function index($task = '', $user_id = '')
	{
		$username = $this->uri->segment(1);

		if (empty($username)) {
            $this->displayPageNotFound();
        }

		if ($this->core_model->is_username($username, 'user') == 'available') {
			if ($task == 'edit') {
				$data['profile'] = $this->core_model->select_profile_by_username($username, 'user');
				$this->load->view('edit_profile', $data);
			} else {
				$data['profile'] = $this->core_model->select_profile_by_username($username, 'user');
				$this->load->view('profile', $data);
			}
		} else {
			$this->displayPageNotFound();
		}
	}

	protected function displayPageNotFound() {
        show_404();
    }

}

/* End of file Profile.php */
/* Location: .//F/xampp-php7/htdocs/rebidlancer/app/controllers/Profile.php */