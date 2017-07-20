<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('GetTextModel');
		$this->load->helper('url');
		$this->load->helper('cookie');
		$this->load->helper('form');
		
	}
	public function index($page='index')
	{
		if (!file_exists(APPPATH.'views/'.$page.'.php')) {
			show_404();
		}
		else {

			//session判断
			if ($this->session->userdata('is_login')) {

				$data['tit'] = $this->session->userdata('username');
				$data['msg'] = $this->GetTextModel->getText();
				$this->load->view('templates/header_login',$data);
				$this->load->view($page,$data);
				$this->load->view('templates/public_footer');
			}
			else {
				// 加载未登录页
				$data['tit'] = "游客";

				$data['msg'] = $this->GetTextModel->getText();
				$this->load->view('templates/header',$data);
				$this->load->view($page,$data);
				// $this->load->view('templates/public_footer');
			}
		}
		
	}
	public function scan_more(){

		// $num = $this->input->post('')
		$num = $_POST['num'];
		$data['msg'] = $this->GetTextModel->getMoreText($num);
		// $data['msg'] = $this->GetTextModel->getMoreText($num);
		

		echo json_encode($data);
	}
	public function signout(){
		$this->session->sess_destroy();
		redirect('welcome/index');
	}
}
