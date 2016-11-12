<?php

class Cart extends CI_Controller {

	public function add($productId) {

		$this->cart->add($productId);
		redirect();
	}

	public function index() {

		$this->load->model('product_model');
		$productsID = $this->cart->getAll();
		$cartProducts = $this->product_model->getCartProducts($productsID);
		$this->load->view('/frontend/cart/index', [

			'cartProducts' => $cartProducts,

		]);

	}
}