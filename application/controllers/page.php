<?php

class Page extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('page_m');
    }

    public function index() {
    	
    	// Fetch the page data
    	$this->data['page'] = $this->page_m->get_by(array('slug' => (string) $this->uri->segment(1)), TRUE);
    	count($this->data['page']) || show_404(current_url());
    	
    	$this->load->view('_main_layout', $this->data);
    }
}