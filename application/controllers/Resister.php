
<?php
class Resister extends CI_Controller {

	function special_char_check($str)
	{
		$this->form_validation->set_message('special_char_check','Special characters in the password field is required');
		$match_cnt = preg_match_all('/[`~!@#$%^&*()-_=+\|\[\]{};:\'\",.<>\/?]/', $str, $match);
		if($match_cnt >= 2)
			return TRUE;
		else
			return FALSE;
	}

	function get_rule_item()
	{
		$this->form_validation->set_message('rule', 'Error Message');
		$rule_item = array(
				array(
					'field'   => 'join_id', 
					'label'   => 'ID', 
					'rules'   => 'trim|required|valid_email|min_length[4]|max_length[64]'
					),
				array(
					'field'   => 'join_password', 
					'label'   => 'Password', 
					'rules'   => 'trim|required|callback_special_char_check|matches[passconf]|min_length[4]|max_length[64]|md5'
					),
				array(
					'field'   => 'passconf', 
					'label'   => 'Password Confirmation', 
					'rules'   => 'trim|required|md5'
					)   
					);
		return $rule_item;
	}

	public function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules($this->get_rule_item());

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('form_resister');
		}
		else
		{
			$param['join_id'] = $this->input->post('join_id');
			$param['join_password'] = $this->input->post('join_password');
			//이곳에 DB insert func 호출하고 출력할 view 호출
			$this->load->model('meminfo_model');
			$this->meminfo_model->member_insert($param);
		}
	}
}
?>
