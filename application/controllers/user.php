<?php	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class User extends MY_Controller {

	public $data;
	public $models = array('users'); 
	public $layout = TRUE;
	public $view;		
	
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
	}	
}
