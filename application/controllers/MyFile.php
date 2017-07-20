<?php
	/**
	* 控制图文数据上传
	*/
	class MyFile extends CI_Controller
	{
		public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('GetTextModel');
		$this->load->helper('url');
		$this->load->helper('cookie');
		$this->load->model('Upload');
		
	}
	public function createArticle()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('title','title','required');

		if ($this->form_validation->run() === FALSE) {
			
				$data['tit'] = $this->session->userdata('username');
				$this->load->view('templates/header_login',$data);
				$this->load->view('article');
				$this->load->view('templates/public_footer');
		}
		else 
		{
			// echo $showtime=date();
			$this->Upload->uploadArticle();
			redirect('welcome/index/showArticle');
		}
	}
	public function uploada()
	{
		
	}
		
	}
?>