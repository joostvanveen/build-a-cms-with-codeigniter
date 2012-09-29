<?php
class User extends Admin_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function login(){
    	$rules = $this->user_m->rules;
    	$this->form_validation->set_rules($rules);
    	if ($this->form_validation->run() == TRUE) {
    		// We can login and redirect
    	}
        $this->data['subview'] = 'admin/user/login';
        $this->load->view('admin/_layout_modal', $this->data);
    }

}