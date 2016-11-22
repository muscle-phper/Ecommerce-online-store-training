<?php

class Carousel_model extends CI_model {

	public function getall() {

		return $this->db->from('carousel')
			->order_by('title')
			->get()
			->result();
	}

	public function destroy($id) {

		return $this->db->where('$id', $id)
			->delete('carousel');
	}
}