<?php
class Member extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model('member_model');
	}

	public function index() {

		$member_list = $this->member_model->getall();
		$this->load->view('/member/index', array(
			'member_list' => $member_list));

	}

	public function edit($id) {

		$this->load->view('member/replace');
		$this->member_model->update($id);

	}

	public function destroy($id) {

		$this->member_model->delete($id);
		redirect('member');

	}

	public function insert() {

		$this->load->view('/member/add');

	}

}
