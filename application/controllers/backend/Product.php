<?php
class Product extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model('product_model');

	}

	public function index() {

		$product_list = $this->product_model->getall();
		$this->load->view('/backend/product/index', array(
			'product_list' => $product_list));

	}

	public function edit($id) {

		$product = $this->product_model->getProduct($id);
		$this->load->view('/backend/product/form', [
			'product' => $product,
		]);

	}

	public function destroy($id) {

		$this->product_model->delete($id);
		redirect('/backend/product/');

	}

	public function store() {

		$data = $this->input->post(null, true);

		$config['upload_path'] = 'D:/wamp64/www/e-store/public/upload/products';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['file_name'] = date('YmdHis') . '_' . uniqid();

		$this->load->library('upload', $config);
		$this->upload->do_upload('picture');

		$fileData = $this->upload->data();
		$data['picture'] = '/public/upload/products/' . $fileData['file_name'];
		$this->product_model->add($data);
		redirect('/backend/product');

	}

	public function create() {

		$this->load->view('/backend/product/form');
	}

	public function update($id) {

		$data = $this->input->post(null, true);
		$this->product_model->update($id, $data);
		redirect('/backend/product');

	}

	public function upload() {

		//上傳目錄需手動新增
		$config['upload_path'] = 'D:/wamp64/www/e-store/public/upload/products';
		$config['allowed_types'] = 'jpg|png|PPT';
		//修改檔案名稱
		//uniqid();   Generate a unique ID
		$config['file_name'] = uniqid();
		//裝載文件上傳類別
		$this->load->library('upload', $config);
		$this->upload->do_upload('picture');
		var_dump($this->upload->data());

		$data = $this->upload->data();
		echo $data['file_name'];

	}

}
