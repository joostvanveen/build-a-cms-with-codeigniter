<?php
class Migration extends Admin_Controller
{

	public function __construct ()
	{
		parent::__construct();
	}

	public function index ()
	{
		$this->load->library('migration');
		$this->migration->current();
	
		$this->data['subview'] = 'admin/migration/index';
		$this->load->view('admin/_layout_main', $this->data);
	}

}