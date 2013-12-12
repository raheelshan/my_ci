<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MY_Model{

	public 	$table 	=	'users';
	/*
	public 		$insert	=	array('check_duplicate');
	public 		$update	=	array('hash_password');
	
	public $validate = array(
							array( 'field' => 'username'	, 'label' => 'Username'		,'rules' => 'required|max_length[255]|callback_external_callbacks[check_duplicate.username]' ),
							array( 'field' => 'first_name'	, 'label' => 'first_name'	,'rules' => 'required|max_length[255]|callback_external_callbacks[is_valid_username.first_name]' ),
							array( 'field' => 'last_name'	, 'label' => 'last_name'	,'rules' => 'required|max_length[255]' ),
							array( 'field' => 'password'	, 'label' => 'Password'		,'rules' => 'required|max_length[255]|integer' ),
							array( 'field' => 'email'		, 'label' => 'Email'		,'rules' => 'required|valid_email|max_length[255]|callback_external_callbacks[check_duplicate.email]' )
						);
*/
	public function __construct()
	{
		parent::__construct();	
	}
/*
	public function validate()
	{
		if (!empty($this->validate))
		{
			$this->form_validation->set_rules($this->validate);
			$this->form_validation->set_error_delimiters('', '');
			return $this->form_validation->run();
		}else{
			return TRUE;
		}
	}
	


	public function check_duplicate($str,$field)
	{
		$where[$field]	=	$str;
		$result	=	$this->get($where,TRUE);
		
		if($result == TRUE)
		{
			$this->form_validation->set_message('external_callbacks', '%s already exists.');
			return FALSE;
		}else{
			return TRUE;		
		}
	}
	
	public function hash_password()
	{
		$_POST['password']	=	sha1($this->input->post('password'));
		if(isset($_POST['password'])){
			return	TRUE;
		}else{
			return	FALSE;
		}
		
	}*/
}

/* End of file Users Model.php */
/* Location: ./application/controllers/welcome.php */