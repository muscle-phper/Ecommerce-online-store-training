<?php

class Product_model extends CI_model {

	public function getall() {

		$query = $this->db->select('*')
			->from('products')
			->order_by('id', 'ASC')
			->get();

		return $query->result();

	}

	public function getProduct($id) {

		return $this->db->from('products')
			->where('id', $id)
			->get()
			->row();

	}

	public function delete($id) {

		return $this->db->where('id', $id)
			->delete('products');
	}

}

?>