
<?php
class Home extends CI_Controller {

	public function index() {

		$this->load->model('product_model');
		$homeProducts = $this->product_model->getHomeProducts();
		$this->load->view('/frontend/home/index', compact(
			'homeProducts'
		));
	}

}
