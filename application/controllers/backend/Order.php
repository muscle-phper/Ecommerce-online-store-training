<?php
class Order extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model('order_model');
	}

	public function index() {

		$order_list = $this->order_model->getall();
		$this->load->view('/backend/order/index', [
			'order_list' => $order_list,
		]);

	}

	public function create() {

		$this->load->view('/backend/order/form');
	}

	public function edit($id) {

		$order = $this->order_model->getOrder($id);
		$this->load->view('/backend/order/form', [
			'order' => $order,
		]);
	}

	public function store() {

		$data = $this->input->post(null, true);
		$this->order_model->add($data);
		redirect('/backend/order');
	}

	public function update($id) {

		$data = $this->input->post(null, true);
		$this->order_model->update($data, $id);
		redirect('/backend/order');

	}

	public function destroy($id) {

		$this->order_model->delete($id);
		redirect('/backend/order');
	}

}

?>