<?php
class User extends Admin_Controller
{

	public function __construct ()
	{
		parent::__construct();
		
	}

	public function login ()
	{
		$this->user_m->loggedin() == FALSE || redirect('admin/dashboard');
		
		$rules = $this->user_m->rules;
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == TRUE) {
			if ($this->user_m->login() == TRUE) {
				redirect('admin/dashboard');
			}
			else {
				redirect(uri_string(), 'refresh');
			}
		}
		$this->data['subview'] = 'admin/user/index';
		$this->load->view('admin/_layout_modal', $this->data);
	}

	public function logout ()
	{
		$this->user_m->logout();
		redirect('admin/user/login');
	}
}