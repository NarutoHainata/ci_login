<!-- LoginCon.php -->
<?php
	
	/**
	* 一个继承至CI_Controller控制器的控制器
	*/
	class LoginCon extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('LoginModel');
			$this->load->helper('url_helper');
		}
		public function login_check()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','username','required');
			$this->form_validation->set_rules('password','password','required');

			if ($this->form_validation->run() === FALSE) {
				
				$this->load->view('login_page');
			}
			else {

				$data['msg'] = $this->LoginModel->login_msg();

				if (is_null($data['msg'])) {
					
					echo "账号或密码错误";
					$this->load->view('login_page');
					 
				}
				else{

					$data['name'] = $data['msg']['name'];
					$this->load->view('success.php',$data);
				}
			}
		}
	}
?>