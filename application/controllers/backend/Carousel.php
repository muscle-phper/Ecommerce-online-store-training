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

		$config['upload_path'] = 'D:/wamp64/www/e-store/public/upload/carousel';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['file_name'] = date('YmdHis') . '_' . uniqid();

		$this->load->library('upload', $config);
		$this->upload->do_upload('picture');

		$fileData = $this->upload->data();
		if ($fileData['is_image'] === true) {
			$data['picture'] = '/public/upload/carousel/' . $fileData['file_name'];
		}
		$this->carousel_model->update($id, $data);

		redirect('/backend/carousel');
	}

	public function store() {

		$data = $this->input->post(null, true);

		$config['upload_path'] = 'D:/wamp64/www/e-store/public/upload/carousel';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['file_name'] = date('YmdHis') . '_' . uniqid();

		$this->load->library('upload', $config);
		$this->upload->do_upload('picture');

		$fileData = $this->upload->data();

		$data['picture'] = '/public/upload/carousel/' . $fileData['file_name'];
		$this->carousel_model->add($data);
		redirect('/backend/carousel');
	}
}