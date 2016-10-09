<?php
class MY_Controller extends CI_Controller {

	const WHITE_LIST = [
		'account/login',
		'account/logout',
	];

	public function __construct() {
		parent::__construct();
		if ($this->session->logged) {
			if ($this->uri->segment(1) === 'account' && $this->uri->segment(2) === 'logout') {

			} elseif ($this->uri->segment(1) === 'account' && $this->uri->segment(2) === 'login') {
				redirect('/dashboard');
			} else {

			}
		} else {
			if ($this->uri->segment(1) === 'account' && $this->uri->segment(2) === 'login') {

			} elseif ($this->uri->segment(1) === 'account' && $this->uri->segment(2) === 'verify') {

			} else {
				redirect('/account/login');
			}
		}
	}

	public function chkAccessiable() {

	}
}
