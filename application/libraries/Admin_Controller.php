<?php
class Admin_Controller extends MY_Controller
{

	function __construct ()
	{
		parent::__construct();
		$this->data['meta_title'] = 'My awesome CMS';
		$this->load->model('user_m');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->library('form_validation');
		$this->load->library('session');
		
		$ex = array('admin/user/login', 'admin/user/logout');
		if ($this->user_m->loggedin() == FALSE && in_array(uri_string(), $ex) == FALSE) {
			redirect('admin/user/login');
		}
	}
}