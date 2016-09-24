<?php

class Migrate extends CI_Controller {

	public function index() {
		$this->load->library('migration');
	}

}