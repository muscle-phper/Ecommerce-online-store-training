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

	public function destroy($id) {

		$this->carousel_model->delete($id);
		redirect('/');
	}

	public function edit($id) {

		$this->carousel_model->get
	}
}