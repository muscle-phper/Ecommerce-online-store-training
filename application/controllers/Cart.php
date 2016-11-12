<?php

class Cart extends CI_Controller {

	public function add($productId) {

		$this->cart->add($productId);
		redirect();
	}

	public function index() {

		$this->load->view('/frontend/cart/index');
	}
}