<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Cart {

	const EXPIRED_TIME = 604800;
	protected $CI;

	public function __construct() {
		$this->CI = &get_instance();
	}

	protected function isDuplicate($itemId) {
		$cookies = $this->getAll();
		foreach ($cookies as $c) {
			if ($c->id == $itemId) {
				return true;
			}
		}
		return false;
	}

	public function add($itemId) {
		$products = $this->getAll();
		if ($this->isDuplicate($itemId)) {
			return;
		}
		array_push($products, (object) ['id' => $itemId]);
		set_cookie('products', json_encode($products), static::EXPIRED_TIME);
	}

	public function delete($id) {
		$products = $this->getAll();
		$cnt = count($products);

		for ($i = 0; $i < $cnt; $i++) {
			if ($p->id == $id) {
				unset($products[$i]);
				break;
			}
		}

		set_cookie('products', json_encode($products), static::EXPIRED_TIME);
		return true;
	}

	public function getAll() {
		$cookies = get_cookie('products');
		$cookies = $cookies ? $cookies : '[]';
		return json_decode($cookies);
	}
}