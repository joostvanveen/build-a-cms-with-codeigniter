<?php
class Page_m extends MY_Model
{
	protected $_table_name = 'pages';
	protected $_order_by = 'order';
	public $rules = array(
		'title' => array(
			'field' => 'title', 
			'label' => 'Title', 
			'rules' => 'trim|required|max_length[100]|xss_clean'
		),
		'slug' => array(
			'field' => 'slug', 
			'label' => 'Slug', 
			'rules' => 'trim|required|max_length[100]|url_title|callback__unique_slug|xss_clean'
		),
		'body' => array(
			'field' => 'body', 
			'label' => 'Body', 
			'rules' => 'trim|required'
		),
	);

	public function get_new ()
	{
		$page = new stdClass();
		$page->title = '';
		$page->slug = '';
		$page->body = '';
		return $page;
	}
}