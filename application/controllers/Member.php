<?php
class Member extends MY_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model('member_model');

	}

	public function index() {

		$member_list = $this->member_model->getall();
		$this->load->view('/member/index', [
			'member_list' => $member_list,
		]);

	}

	public function edit($id) {

		$member = $this->member_model->getMember($id);
		$this->load->view('/member/form', [
			'member' => $member,
		]);
	}

	public function update($id) {

		$data = $this->input->post(null, true);
		$this->member_model->update($id, $data);
		redirect('/member');
	}

	public function destroy($id) {

		$this->member_model->delete($id);
		redirect('member');

	}

	public function create() {

		$this->load->view('/member/form');
	}

	public function store() {

		$data = $this->input->post(null, true); // returns all POST items with XSS filter
		$this->member_model->add($data);
		redirect('/member');
	}
}
