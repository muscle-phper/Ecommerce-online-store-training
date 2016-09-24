<?php

class Member_model extends CI_model {

	public function getall() {

		$query = $this->db->select('*')
			->from('members')
			->order_by('id', 'ASC')
			->get();
		return $query->result();

	}

	public function chkLogin($data) {

		$member = $this->db
			->from('members')
			->where('username', $data['user_name'])
			->where('password', md5($data['user_password']))
			->get()
			->row();

		return $member;
	}
}

?>