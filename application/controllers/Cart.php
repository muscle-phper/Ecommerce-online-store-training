<?php

class Cart extends CI_Controller {

	public function add($productId) {
		$this->cart->add($productId);
		redirect();
	}
}