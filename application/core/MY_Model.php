<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model
{
   
	public $table;
	public $primary_key;
	public $return_type	= FALSE;	// Default is object if true then array

	public $before_create = array();
	public $after_create = array();
	public $before_update = array();
	public $after_update = array();
	public $before_get = array();
	public $after_get = array();
	public $before_delete = array();
	public $after_delete = array();	

	public $validate = array();
	public $skip_validation = FALSE;	

	public 		$insert	=	array();
	public 		$update	=	array();	
	
	public function __construct()
	{
		parent::__construct();
		//$this->load->helper('inflector');
		
		if(!isset($this->table)){
			$this->fetchtable();
		}
		
		$this->primary_key	=	$this->table.'_id';
	}
	
	/*
	*	This functions has been tested working fine 
	*/	
	
	public function where($where = '')
	{
		if(is_array($where)){
		
			if(is_array($this->before_get) AND !empty($this->before_get))
			{
				$where	=	$this->run_before_callbacks('get', $where);
			}
		
			$this->db->where($where);
		}else if($where == ''){
		
		}else{
			$this->db->where($this->primary_key,$where);
		}
		return $this;
	}
	
	public function get()
	{
		$fields	=	$this->_gettable_fields();
		
		$row	=	$this->db->get($this->table)->row_array();		
		
		if(is_array($this->after_get) AND !empty($this->after_get))
		{
			$row	=	$this->run_after_callbacks('get', $row); 
		}		

		$result	=	array_merge($fields , $row);	
		
		if($this->return_type	==	FALSE){
			$result	=	(object)$result;
		}
		
		return	$result;
	}
	/*
	*	This functions has been tested working fine 
	*/
	public function get_all()
	{
		$result	=	$this->db->get($this->table)->result_array();		
		
		$data	=	array();
		
		foreach($result as $row)
		{
			$temp	=	$this->run_after_callbacks('get', $row); 

			if($this->return_type	==	FALSE){
				$data[]	=	(object)$temp;
			}else{
				$data[]	=	$temp;
			}		
		}
		return	$data;
	}	
	
    public function where_in($values)
    {
        $this->db->where_in($this->primary_key, $values);

        return $this;
    }	
	
    public function limit($limit, $offset = 0)
    {
        $this->db->limit($limit, $offset);
        return $this;
    }	
	
    /**
     * A wrapper to $this->db->order_by()
     */
    public function order_by($criteria, $order = 'ASC')
    {
        if ( is_array($criteria) )
        {
            foreach ($criteria as $key => $value)
            {
                $this->db->order_by($key, $value);
            }
        }
        else
        {
            $this->db->order_by($criteria, $order);
        }
        return $this;
    }

    /**
     * Fetch a count of rows based on an arbitrary WHERE call.
     */
    public function count_by()
    {
        return $this->db->count_all_results($this->_table);
    }

    /**
     * Fetch a total count of rows, disregarding any previous conditions
     */
    public function count_all()
    {
        return $this->db->count_all($this->_table);
    }

    /**
     * Return the next auto increment of the table. Only tested on MySQL.
     */
    public function get_next_id()
    {
        return (int) $this->db->select('AUTO_INCREMENT')
            ->from('information_schema.TABLES')
            ->where('TABLE_NAME', $this->_table)
            ->where('TABLE_SCHEMA', $this->db->database)->get()->row()->AUTO_INCREMENT;
    }	
	
	public function join($array,$join_type	='')
	{
		if(is_array($array) && !empty($array)){
			for($i=1;$i<count($array);$i++)
			{
				$this->db->join($array[$i], $this->table .'.'. $this->primary_key . '=' . $array[$i] .'.'. $this->primary_key,$join_type);
			}
		}

		return $this->get_all();
	}

	public function select($select = '*')
	{
		if(is_array($select) AND !empty($select)){
			$this->db->select($select);
		}else{
			$this->db->select('*');
		}
		return $this;
	}	
	/* 
	*	This functions gets and array of table names
	*	This is a stand alone function
	*/	
	public function get_drop_downs($arr)
	{
		$data	=	array();
		foreach($arr as $key=>$value)
		{
			$query	=	$this->db->get($value);
			$data[$value]	=	$query->result();
		}
		return $data;
	}	
	/* 
	*	This functions has been tested working fine 
	*/
	public function delete($where = '')
	{
		if(!empty($where)){
		
			if(is_array($where)){
				$this->db->where($where);
			}else{
				$this->db->where($this->primary_key,$where);
			}		
			return $this->db->delete($this->table);	
		}else{
			return FALSE;
		}		
	}	
	
	/* 
	*	This functions has been tested working fine 
	*/	
	public function insert()	
	{
		$_POST['created_at'] = $_POST['updated_at'] = date('Y-m-d H:i:s');

		/*	$this->observe('before_create', $data);	*/
		$success = $this->db->insert($this->table, $this->input->post());

		if ($success){
			/*	$this->observe('after_create', $data);	*/
			return $this->db->insert_id();
		}else{
			return FALSE;
		}		
	}
	
	/* 
	*	This functions has been tested working fine 
	*/	
	public function get_prev_next($id)
	{
		$data	=	array(
					$this->table . "_id  AS  ID",
					"(select     " . $this->primary_key . "   from " . $this->table . "   where ". $this->primary_key ." > ID   limit 1) AS NextID",
					"(select     " . $this->primary_key . "   from " . $this->table . "   where ". $this->primary_key ." < ID   ORDER BY ". $this->table ."_id DESC limit 1) AS PreviousID"
					);
		
		$this->db->select($data);
		$this->db->where($this->primary_key, $id);
		return $this->db->get($this->table)->row();
	}

	/* This functions has been tested working fine */
	public function update($where)
	{
		$_POST['updated_at'] = date('Y-m-d H:i:s');

		if(!empty($where)){
			if(is_array($where)){
				$this->db->where($where);
			}else{
				$this->db->where($this->primary_key,$where);
			}		
			return $this->db->update($this->table, $this->input->post());	
		}else{
			return FALSE;
		}	
	}
	
	public function _gettable_fields()
	{
		$sql = "SHOW COLUMNS FROM " . $this->table;
	
		$res  = $this->db->query($sql);
		$rows = $res->result();
		
		foreach($rows as $row)
		{
			$field[] = $row->Field;
		}
	
		$index_array = array();
		foreach($field as $key)
		{
			$index_array[$key]	=	'';
		}
		
		return $index_array;
	}
	
    private function fetchtable()
    {
        if ($this->table == NULL)
        {
            $this->table = plural($this->router->class);
        }
    }	
	

	/*	Before and After Callback function	*/
	
    private function run_before_callbacks($type, $params = array())
    {
        $events = 'before_' . $type;
		
		if(is_array($this->$events) AND !empty($this->$events))
		{
			foreach ($this->$events as $method)
			{
				$data	+=	call_user_func_array(array($this,$method), array($data));
			}
		}

        return $data;
    }	
	public function run_after_callbacks($type,$data = array())
	{
		$events = 'after_' . $type;

		if(is_array($this->$events) AND !empty($this->$events))
		{
			foreach ($this->$events as $method)
			{
				$data	=	call_user_func_array(array($this,$method), array($data));
			}
		}

		return	$data;
	}	
	
}

/* End of file Users Model.php */
/* Location: ./application/controllers/welcome.php */