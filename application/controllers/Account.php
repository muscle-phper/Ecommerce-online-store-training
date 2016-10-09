<?php
class Account extends MY_Controller {

	public function login() {

		$this->load->view('/account/login');
	}

	public function verify() {

		$user_name = "";
		$user_password = "";
		if (isset($_POST["user_name"])) {
			$user_name = $_POST["user_name"];
		}

		if (isset($_POST["user_password"])) {
			$user_password = $_POST["user_password"];
		}

		$this->load->model('member_model');
		$member = $this->member_model->chkLogin([
			'user_name' => $user_name,
			'user_password' => $user_password,
		]);

		if (!$member) {
			redirect('account/login');
		}

		$this->session->set_userdata([
			'id' => $member->id,
			'name' => $member->name,
			'logged' => TRUE,
		]);

		redirect('dashboard/index');
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('/account/login');
	}
}
