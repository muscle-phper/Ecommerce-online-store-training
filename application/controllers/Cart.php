<?php

class Cart extends MY_Controller {

	public function add($productId) {

		$this->cart->add($productId);
		redirect();
	}

	public function index() {

		$this->load->helper('form');
		$this->load->model('product_model');
		$products = $this->cart->getAll();
		$productIds = $this->getProductIds($products);
		if ($products != null) {
			$cartProducts = $this->product_model->getCartProducts($productIds);
		} else { $cartProducts = [];}
		$this->load->view('/frontend/cart/index', [
			'cartProducts' => $cartProducts,
		]);
	}

	private function getProductIds($products) {
		$ids = [];
		foreach ($products as $p) {
			$ids[] = $p->id;
		}
		return $ids;
	}

	public function destroy($id) {

		$this->cart->delete($id);
		redirect('/cart');

	}

	public function checkout() {

		$total_price = $this->input->post('total_price');
		$productIds = $this->input->post('product_id');
		$this->load->model('product_model');
		$products = $this->product_model->getproducts($productIds);

		$data = [
			'total_price' => $total_price,
			'created_at' => date('Y-m-d H:i:s'),
			'member_id' => $this->session->id,
		];
		$this->load->model('order_model');
		$this->order_model->add($data);
		redirect();

	}

}