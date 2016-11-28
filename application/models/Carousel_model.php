
<?php

class Carousel_model extends CI_model {

	public function getall() {

		return $this->db->from('carousel')
			->order_by('title')
			->get()
			->result();
	}

	public function delete($id) {

		return $this->db->where('id', $id)
			->delete('carousel');
	}

	public function getCarousel($id) {

		return $this->db->from('carousel')
			->where('id', $id)
			->get()
			->row();
	}

	public function update($id, $data) {

		return $this->db->where('id', $id)
			->update('carousel', $data);
	}

	public function add($data) {

		return $this->db->insert('carousel', $data);
	}
}