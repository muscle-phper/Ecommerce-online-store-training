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

	public function update($id, $data) {

		return $this->db->where('id', $id)
			->update('products', $data);

	}

	public function add($data) {

		return $this->db->insert('products', $data);
	}

	public function getHomeProducts() {

		$query = $this->db->from('products')
			->order_by('price', 'desc')
			->get();

		return $query->result();
	}

	public function getCartProducts($productsID) {

		$query = $this->db->from('products')
			->where_in('id', $productsID)
			->order_by('id', 'ASC')
			->get();
	}
}

?>