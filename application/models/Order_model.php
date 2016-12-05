<?php
class Order_model extends CI_model {

	public function getall() {

		$query = $this->db->select('*')
			->from('orders')
			->order_by('id', 'ASC')
			->get();

		return $query->result();
	}

	public function getOrder($id) {

		return $this->db->from('orders')
			->where('id', $id)
			->get()
			->row();

	}

	public function add($data) {

		return $this->db->insert('orders', $data);
	}

	public function update($data, $id) {

		return $this->db->where('id', $id)
			->update('orders', $data);
	}

	public function delete($id) {

		return $this->db->where('id', $id)
			->delete('orders');
	}

}

?>