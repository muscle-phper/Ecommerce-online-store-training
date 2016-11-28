<?php

class Carousel extends My_controller {

	public function __construct() {

		parent::__construct();
		$this->load->model('carousel_model');

	}

	public function index() {

		$carousel_list = $this->carousel_model->getall();
		$this->load->view('/backend/carousel/index', [
			'carousel_list' => $carousel_list,
		]);

	}

	public function create() {

		$this->load->view('/backend/carousel/form');
	}

	public function destroy($id) {

		$this->carousel_model->delete($id);
		redirect('/backend/carousel');
	}

	public function edit($id) {

		$carousel = $this->carousel_model->getCarousel($id);
		$this->load->view('/backend/carousel/form', [
			'carousel' => $carousel,
		]);
	}

	public function update($id) {

		$data = $this->input->post(null, true);
		$this->carousel_model->update($id, $data);
		redirect('/backend/carousel');
	}

	public function store() {

		$data = $this->input->post(null, true);
		$this->carousel_model->add($data);
		redirect('/backend/carousel');
	}
}