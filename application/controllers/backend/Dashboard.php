<?php
class Dashboard extends MY_Controller {

	public function index() {

		$this->load->view('/backend/dashboard/index');
	}
}
