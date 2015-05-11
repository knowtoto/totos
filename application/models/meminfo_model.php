<?php
class Meminfo_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	function member_insert($data) {
		$this->load->helper('date');
		$time = time();
		$datestring = "%Y-%m-%d %h:%i:%a";
		$now = mdate($datestring, $time);

		$query_data = array (
							'user_id' = $data['user_id'],
							'user_pwd' = $data['user_pwd'],
							'date' = $now
							);

		$this->db->insert('mem_info', $query_data);

		$insert_cnt = $this->db->affected_rows();

		return $insert_cnt;
	}
	function get_password($user_id) {
		$this->db->select('user_pwd');
		$query = $this->db->get('mem_info');

		return $query->result();
	}
}
