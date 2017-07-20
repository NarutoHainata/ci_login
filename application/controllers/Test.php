<?php
// echo "hi";
// header('Location:http://www.baidu.com');
class Test extends CI_Controller
{
	function index()
	{
		$this->load->library('pagination');
		$this->load->library('table');
		$this->load->database();
		$this->load->helper('url');
		
		//$this->table->set_heading('Id', 'The Title', 'The Content');
		
		$config['base_url'] = 'http://localhost/cipro/index.php/test/index';
		$config['total_rows'] = $this->db->get('article')->num_rows();
		$config['per_page'] = 2;
		$config['num_links'] = 2;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		$this->pagination->initialize($config);
		
		$data['records'] = $this->db->get('article', $config['per_page'], $this->uri->segment(3));
		
		$this->load->view('test', $data);
		
	}

}
?>