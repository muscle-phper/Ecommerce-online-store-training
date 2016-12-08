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

		redirect('/');

	}

	public function logout() {

		$this->session->sess_destroy();
		redirect('/');

	}

	public function myaccount() {

		$member = $this->member_model->getMyAccount($this->session->id);

		$this->load->view('/frontend/account/myaccount', [
			'member' => $member,
		]);
	}
}