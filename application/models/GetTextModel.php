<?php
	
	class GetTextModel extends CI_Model {

		public function __construct()
		{
			$this->load->database();
		}
		// 首页推荐获取获取6条数据，加载更多再获取6条
		public function getText() {
			// 选择几条数据，从第几个开始
			$this->db->limit(3,0);
			$query = $this->db->get('article');
			return $query->result_array();
		}
		public function getMoreText($num) {
			$this->db->limit(3,3*$num);
			$query = $this->db->get('article');
			return $query->result_array();
		}
	}
?>