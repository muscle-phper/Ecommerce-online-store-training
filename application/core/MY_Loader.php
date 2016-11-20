<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

	public function view($view, $vars = array(), $return = FALSE) {

		switch ($view) {
		case '/frontend/common/top':
			$cartProductAmount = count($this->cart->getAll());
			$vars = compact('cartProductAmount', $vars);
			break;
		}

		return $this->_ci_load(array('_ci_view' => $view, '_ci_vars' => $this->_ci_object_to_array($vars), '_ci_return' => $return));
	}
}