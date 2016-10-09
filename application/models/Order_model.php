<?php
class Order_model extends CI_model {

	public function getall() {

		$query = $this->db->select('*')
			->from('orders')
			->order_by('id', 'ASC')
			->get();

		return $query->reusult();
	}

}

?>