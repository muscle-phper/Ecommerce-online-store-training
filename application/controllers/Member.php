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

		$this->load->view('/member/replace');
		$this->member_model->update($id);
	}

	public function destroy($id) {

		$this->member_model->delete($id);
		redirect('member');

	}

	public function insert() {

		$this->load->view('/member/add');

		$name = "";
		$username = "";
		$address = "";
		$birthday = "";
		$password = "";

		if (isset($_POST['name'])) {
			$name = $_POST['name'];
			$username = $_POST['username'];
			$address = $_POST['address'];
			$birthday = $_POST['birthday'];
			$password = $_POST['password'];

			$data = array(
				'name' => $name,
				'username' => $username,
				'address' => $address,
				'birthday' => $birthday,
				'password' => $password,
			);

			$bool = $this->db->insert('members', $data);
			if ($bool) {
				echo '新增' . $name . '資料成功';
			}
		}

	}

}
