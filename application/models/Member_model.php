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
			->select('id, name')
			->from('members')
			->where('username', $data['user_name'])
			->where('password', md5($data['user_password']))
			->get()
			->row(); //傳單筆資料

		return $member;
	}

	public function update($id, $data) {

		$data['updated_at'] = date('Y-m-d H:i:s');
		return $this->db->where('id', $id)
			->update('members', $data);
	}

	public function getMember($id) {
		return $this->db->from('members')
			->where('id', $id)
			->get()
			->row();
	}

	public function delete($id) {

		return $this->db->where('id', $id)
			->delete('members');
	}

	public function add($data) {
		$now = date('Y-m-d H:i:s');
		$data['created_at'] = $now;
		$data['updated_at'] = $now;
		return $this->db->insert('members', $data);
	}

}

?>