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

	public function edit($id) {

		$order = $this->order_model->getOrder($id);
	}

}

?>