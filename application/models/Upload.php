<?php
	/**
	* 上传文件
	*/
	class Upload extends CI_Model
	{
		
		function __construct()
		{
			$this->load->database();
			$this->load->helper('date');
			date_default_timezone_set('PRC');
		}
		public function uploadArticle()
		{
			$data = array('uid' => $this->session->userdata('uid') ,'title' =>$this->input->post('title') ,'author' =>$this->session->userdata('username') ,'public_time' => date('Y-m-d H:i:s') ,'text' =>$this->input->post('content') ,'label' =>$this->session->userdata('username') );
			return $this->db->insert('article',$data);
		}
	}
?>