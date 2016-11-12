<?php

class Cart extends CI_Controller {

	public function add($productId) {

		$this->cart->add($productId);
		redirect();
	}

	public function index() {

		$this->load->model('product_model');
		$products = $this->cart->getAll();
		$productIds = $this->getProductIds($products);
		$cartProducts = $this->product_model->getCartProducts($productIds);
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

}