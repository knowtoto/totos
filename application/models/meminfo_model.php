<?php
class Meminfo_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	function member_insert($data) {
		$this->db->insert('mem_info', $data)
	}
}