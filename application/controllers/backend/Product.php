<?php
class Product extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model('product_model');

	}

	public function index() {

		$product_list = $this->product_model->getall();
		$this->load->view('/backend/product/index', array(
			'product_list' => $product_list));

	}

	public function edit($id) {

		$product = $this->product_model->getProduct($id);
		$this->load->view('/backend/product/form', [
			'product' => $product,
		]);

	}

	public function destroy($id) {

		$this->product_model->delete($id);
		redirect('/backend/product');

	}

	public function store() {

		$data = $this->input->post(null, true);
		$this->product_model->add($data);
		redirect('/backend/product');

	}

	public function create() {

		$this->load->view('/backend/product/form');
	}

	public function update($id) {

		$data = $this->input->post(null, true);
		$this->product_model->update($id, $data);
		redirect('/backend/product');

	}

}
