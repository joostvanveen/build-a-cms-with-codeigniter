<?php
class user_m extends MY_Model
{
	
	protected $_table_name = 'users';
	protected $_order_by = 'name';
	public $rules = array(
		'email' => array(
			'field' => 'email', 
			'label' => 'email', 
			'rules' => 'trim|required|valid_email|xss_clean'
		), 
		'password' => array(
			'field' => 'password', 
			'label' => 'password', 
			'rules' => 'trim|required'
		)
	);

	function __construct ()
	{
		parent::__construct();
	}

	public function login ()
	{
		$user = $this->get_by(array(
			'email' => $this->input->post('email'), 
			'password' => $this->hash($this->input->post('password'))
		), TRUE);
		
		if (count($user)) {
			$data = array(
				'user_name' => $user->name,
				'user_email' => $user->email,
				'is_loggedin' => TRUE,
				'is_admin' => $user->is_admin,
			);
			$this->session->set_userdata($data);
			return TRUE;
		}
		return FALSE;
	}

	public function logout ()
	{
		$this->session->sess_destroy();
	}

	public function loggedin ()
	{
		return $this->session->userdata('is_loggedin') && $this->session->userdata('is_admin');
	}

	public function hash ($string)
	{
		return hash('sha512', $string . config_item('encryption_key'));
	}
}