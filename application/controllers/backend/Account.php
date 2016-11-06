<?php
class Account extends MY_Controller {

	public function login() {

		$this->load->view('/backend/account/login');
	}

	public function verify() {

		$name = $this->input->post('name');
		$password = $this->input->post('password');

		$this->load->model('member_model');
		$member = $this->member_model->chkLogin([
			'name' => $name,
			'password' => $password,
		]);

		if (!$member) {
			redirect('/backend/account/login');
		}

		$this->session->set_userdata([
			'id' => $member->id,
			'name' => $member->name,
			'logged' => TRUE,
		]);

		redirect('/backend/dashboard/index');
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('/backend/account/login');
	}
}
