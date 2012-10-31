<?php
class Frontend_Controller extends MY_Controller
{

	function __construct ()
	{
		parent::__construct();
		
		// Load stuff
		$this->load->model('page_m');
		
		// Fetch navigation
		$this->data['menu'] = $this->page_m->get_nested();
		$this->data['news_archive_link'] = $this->page_m->get_archive_link();
	}
}