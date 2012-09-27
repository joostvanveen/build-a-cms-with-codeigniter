<?php
class Frontend_Controller extends MY_Controller
{

	function __construct ()
	{
		parent::__construct();
		var_dump('Welcome from Frontend Controller');
	}
}