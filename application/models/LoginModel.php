<?php
	
	/**
	* 一个继承至CI_Model的model
	*/
	class LoginModel extends CI_Model
	{
		
		public function __construct()
		{
			$this->load->database();
		}
		public function login_msg()
		{

			$data = array('name' => $this->input->post('username'),'pw' => $this->input->post('password'));
			$query = $this->db->get_where('young',$data);
			return $query;
			
		}
	}
?>