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
	/*
	function user()
	{
		
		$data[]	=	'users';
		$data[]	=	'accounts';
		
		$result	=	$this->user->get(1);
		
		$data['result']	=	$result;
		$this->data	=	$data;

		$this->view = TRUE;
		$this->layout = TRUE;
	}
	
	function updateUser()
	{
		$data_array	=	array(
				'username'	=>	'raheelshan',
				'first_name'	=>	'raheel',
				'last_name'	=>	'shan',
				'password'	=>	'123456',
				'email'		=>	'frommusafirshan@yahoo.com'
		);
		
		if($this->validation->validateUpdate($data_array)	==	TRUE)
		{
			$this->users->update(1);
			$data['success'] = TRUE;
		}else{
			
			$data['errors'] = $this->form_validation->error_array();
			$data['success'] = FALSE;
		}		
		echo json_encode($data);	

	}
	
	function insertUser()
	{
		if($this->users->validate() === FALSE)
		{
			$this->view		=	TRUE;
			$this->layout	=	FALSE;
		}else{
			// $this->users->insert();
		}
		
	}
	
	function getUsers()
	{
		$where['email']		=	'test@gmail.com';
		$where['users_id']	=	4;
		
		$result	=	$this->users->delete($where);
		$this->go($result);
	}
	
	function go($data)
	{
		echo '<pre>';
		print_r($data);
		echo '</pre>';
	}	
	
	function query()
	{
		echo $this->db->last_query();
	}
	
	function path_test(){
		$result	=	$this->uri->get_path('users','models');
		echo $result;
		
		$this->view=	FALSE;
		$this->layout=	FALSE;
		exit();
	}
	*/
}
