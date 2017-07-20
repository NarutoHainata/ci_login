<?php
class LoginCon extends CI_Controller{
	// 构造函数
			public function __construct()
		{
			parent::__construct();
			// 加载登陆模型
			$this->load->model('LoginModel');
			// 加载url辅助函数
			$this->load->helper('url');
			// 加载session类库
			$this->load->library('session');
			// 加载cookie辅助函数
			$this->load->helper('cookie');
			// 加载表单辅助函数
			$this->load->helper('form');
			// 加载表单验证类库
			$this->load->library('form_validation');
		}
	public function index(){

		$data['main_page'] = 'login_page';
		$this->load->view('templates/show_pages',$data);
		// $this->load->view('login_page');
		}
		// 登陆验证
	public function login_check()
		{
			// 设置username以及password必填项
			$this->form_validation->set_rules('username','username','required');
			$this->form_validation->set_rules('password','password','required');

			if ($this->form_validation->run() === FALSE) {
				// 验证失败
				$this->load->view('login_page');

			}
			else {
				// 验证成功
				// 加载登陆模型
				$this->load->model('LoginModel');
				// 返回信息
				$query = $this->LoginModel->login_msg();
				if ($query->num_rows() == 1) {
					$is_login = true;
				}
				// 登陆
				if ($is_login) {
					
					$username = $this->input->post('username');
					$data = $query->result_array();
					$uid = $data[0]['id'];
					
					$data = array('uid' => $uid, 'username' =>$username ,'is_login' =>$is_login);
					$this->session->set_userdata($data);
					redirect('welcome/index/index');
				}
				else{
					$this->index();
					}
					}
			}
		public function siginin(){

			$this->load->view('signin_page');
		}
}
?>