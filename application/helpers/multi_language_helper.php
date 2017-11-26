<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('get_phrase')) {
	function get_phrase($phrase = '') {
		$CI	=&	get_instance();
		$CI->load->database();
		$current_language	=	$CI->db->get_where('settings' , array('type' => 'language'))->row()->description;

		if ($current_language == '') {
			$current_language = 'english';
			$CI->session->set_userdata('current_language', $current_language);
		}

		$query	=	$CI->db->get_where('language' , array('phrase' => $phrase));
		$row = $query->row();

		if (isset($row->$current_language) && $row->$current_language != "") {
			return $row->$current_language;
		} else {
			return ucwords(str_replace('_',' ',$phrase));
		}
	}
}

/* End of file multi_language_helper.php */
/* Location: ./application/helpers/multi_language_helper.php */