<?php
class Product extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model('product_model');

	}

	public function index() {

		$product_list = $this->product_model->getall();
		$this->load->view('/product/index', array(
			'product_list' => $product_list));

	}

	public function edit($id) {

		$product = $this->product_model->getProduct($id);
		print_r($product);exit;
		$this->load->view('/products/form', [
			'product' => $product,
		]);

	}

	public function destroy($id) {

		$this->product_model->delete($id);
		redirect('product');

	}

	public function insert() {

		$this->load->view('/product/add');

		$name = "";
		$make = "";
		$price = "";

		if (isset($_POST['name'])) {
			$name = $_POST['name'];
			$make = $_POST['make'];
			$price = $_POST['price'];

			$data = array(
				'name' => $name,
				'make' => $make,
				'price' => $price,
			);

			$bool = $this->db->insert('products', $data);
			if ($bool) {
				echo '新增' . $name . '資料成功';
			}
		}

	}

}
