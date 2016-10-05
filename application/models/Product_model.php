<?php

class Product_model extends CI_model {

	public function getall() {

		$query = $this->db->select('*')
			->from('products')
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
		$make = "";
		$price = "";

		if (isset($_POST['name'])) {
			$name = $_POST['name'];
			$make = $_POST['make'];
			$price = $_POST['price'];
		}

		$data = array(
			'name' => $name,
			'make' => $make,
			'price' => $price,
		);

		return $this->db->where('id', $id)
			->update('products', $data);

	}

	public function delete($id) {

		return $this->db->where('id', $id)
			->delete('products');
	}

}

?>