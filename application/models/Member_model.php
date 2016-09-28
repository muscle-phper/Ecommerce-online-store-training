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
			->row(); //傳單筆資料

		return $member;
	}

	public function update($id) {

		$name = "";
		$username = "";
		$address = "";
		$birthday = "";
		$password = "";

		if (isset($_POST['send'])) {
			$name = $_POST['name'];
			$username = $_POST['username'];
			$address = $_POST['address'];
			$birthday = $_POST['birthday'];
			$password = $_POST['password'];
		}

		$data = array(
			'name' => $name,
			'username' => $username,
			'address' => $address,
			'birthday' => $birthday,
			'password' => $password,
		);

		$bool = $this->db->where('id', $id)
			->update('members', $data);

	}

	public function delete($id) {

		return $this->db->where('id', $id)
			->delete('members');
	}

}

?>