<?php
class Article extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('article_m');
    }

    public function index($id, $slug){
    	// Fetch the article
		$this->db->where('pubdate <=', date('Y-m-d'));
		$this->data['article'] = $this->article_m->get($id);
    	
    	// Return 404 if not found
    	count($this->data['article']) || show_404(uri_string());
		
    	// Redirect if slug was incorrect
    	$requested_slug = $this->uri->segment(3);
    	$set_slug = $this->data['article']->slug;
    	if ($requested_slug != $set_slug) {
    		redirect('article/' . $this->data['article']->id . '/' . $this->data['article']->slug, 'location', '301');
    	}
    	
    	// Load view
    	$this->data['subview'] = 'article';
    	$this->load->view('_main_layout', $this->data);
    }
}