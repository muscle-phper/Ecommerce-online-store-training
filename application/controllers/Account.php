<?php
Class Account extends MY_controller {

	public function __construct() {

		parent::__construct();
		$this->load->model('member_model');
		$this->load->model('product_model');
	}

	public function login() {

		$this->load->view('/frontend/account/login');
	}

	public function verify() {

		$data = $this->input->post(null, true);
		$member = $this->member_model->chkLogin($data);

		if (!$member) {
			redirect('/account/login');
		}

		$this->session->set_userdata([
			'name' => $member->name,
			'id' => $member->id,
			'logged' => true,
		]);

		$this->load->view('/frontend/home/index', [
			'member' => $member,
		]);

		$homeProducts = $this->product_model->getHomeProducts();
		$this->load->view('/frontend/home/index', compact(
			'homeProducts'
		));

	}

	public function logout() {

		$this->session->sess_destroy();
		redirect('/');

	}
}