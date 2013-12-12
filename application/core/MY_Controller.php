<?php
class MY_Controller extends CI_Controller {
 
	protected $data;
	protected $view;
	protected $layout;    
	protected $models = array();
	protected $libraries = array();
	
	protected $controller_model;
	protected $controller_class;
	protected $controller_library;
	protected $index_view;
	
	protected $partials 		=	array();
	protected $parse		=	false;
	protected $before_filter	=	array();
	protected $after_filter	=	array();		
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->helper('inflector');
		
		$this->controller_class		=	$this->router->class;
		$this->controller_model		=	plural($this->router->class);
		$this->controller_library	=	'validation';
		$this->index_view			=	$this->router->class . '/index';

		if(count($this->models)>0){
			foreach ($this->models as $model)
			{
				if (file_exists(APPPATH . 'models/' . $model . '.php'))
				{
					$this->load->model($model);
				}		
			}	
		}else{
			$this->load->helper('inflector');
			
			if (file_exists(APPPATH . 'models/' . $this->controller_model . '.php'))
			{
				$this->load->model($this->controller_model);
			}			
		}
	}
	
	public function _remap($method, $parameters)
	{
		if (method_exists($this, $method))
		{
			$this->run_filter('before', $parameters);
			$return	=	call_user_func_array(array($this, $method),$parameters);
			$this->run_filter('after', $parameters);				
		}else{
			show_404();
		}

		$view = (is_string($this->view) && !empty($this->view))	? $this->view  :  $this->router->class . '/' . $this->router->method ;
		
		$redirect_uri = site_url($this->controller_class . '/index');
		
		if($this->input->is_ajax_request())
		{
			$this->view		=	TRUE;	
			$this->layout	=	FALSE;	
		}		
		
		if ($this->view !== FALSE	&&	$this->layout === TRUE)
		{
			$this->data['yield'] = $this->load->view($view,	$this->data, TRUE);

			if (is_string($this->layout) &&	!empty($this->layout))
			{
				$layout = $this->layout;
			}else if(file_exists(APPPATH . 'views/layouts/' .	strtolower(get_class($this)) . '.php')){
				$layout = 'layouts/' .	strtolower(get_class($this));
			}else{
				$layout = 'layouts/default';
			}

			if ($this->layout)
			{
				$this->load->view($layout, $this->data);
			}else{
				echo $this->data['yield'];
			}
		}else if($this->view !== FALSE	&&	$this->layout === FALSE){
			$this->load->view($view, $this->data);
		}else{
			redirect($redirect_uri);
		}
	}
	
	public function query()
	{
		echo $this->db->last_query();
	}
	
	public function go($data = '')
	{
		if(isset($data)){
			echo '<pre>';
			print_r($data);		
		}else{
			echo '<pre>';
			print_r($this->data);
		}
	}	
	
	/*	Filters to be run before and after actions*/
	private function run_filter($who, $params=array()) 
	{
		$filter	=	$this->{"{$who}_filter"};

		if (is_string($filter)) {
			$filter	=	array($filter);
		}

		if (method_exists($this, "{$who}_filter")) {
			$filter[]	=	"{$who}_filter";
		}

		foreach ($filter as $method) {
			call_user_func_array(array($this, $method), $params);
		}
	}	
	
	/*	Call back for model work here */
	public function external_callbacks( $postdata, $param )
	{
		$param_values	=	explode( '.', $param ); 
		$method			=	$param_values[0];
		$argument		=	$param_values[1];

		if( method_exists( $this->{$this->controller_model} , $method ) )
		{
			$callback_result = $this->{$this->controller_model}->$method( $postdata, $argument );
		}else{
			$callback_result = $this->$method( $postdata );
		}
		return $callback_result;
	}
	
	/*	Common Controller Functions	*/
	public function index()
	{
		$data[$this->controller_model]	=	$this->{$this->controller_model}->get_all();

		$this->data	=	$data;

		$this->view	=	TRUE;	
		
		if($this->input->is_ajax_request() || $this->session->flashdata('ajax')){
			$this->layout	=	FALSE;	    
		}else{
			$this->layout	=	TRUE;	
		}
	}	
	
	public function form()
	{
		$id	=	$this->uri->segment(3,0);
		$this->data[$this->controller_class]	=	$this->{$this->controller_model}->get($id);
	}
	
	public function save()
	{
		$id	=	$this->uri->segment(3,0);
		
		if($id != 0){
			$result	=	$this->{$this->controller_model}->update();
		}else{
			$result	=	$this->{$this->controller_model}->insert();
		}

		$this->view	=	FALSE;	
		$this->layout	=	FALSE;	
		
		$this->session->set_flashdata('ajax', true);
	}	
	
	public function delete()
	{
		$id	=	$this->uri->segment(3,0);
		
		if($id != 0){
			$this->{$this->controller_model}->delete($id);
		}
		
		$this->view	=	FALSE;	
		$this->layout	=	FALSE;	
	}	
	

}
