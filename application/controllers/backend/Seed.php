<?php

class Seed extends CI_Controller {

	public function members() {
		$this->db->truncate('members');
		$this->db->insert_batch('members', [
			[
				'name' => 'Eric',
				'address' => '',
				'birthday' => '1990-01-01',
				'username' => 'eric',
				'password' => md5('111111'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'name' => 'Tony',
				'address' => '',
				'birthday' => '1990-01-02',
				'username' => 'tonyciou',
				'password' => md5('111111'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'name' => 'Andy',
				'address' => '',
				'birthday' => '1990-01-03',
				'username' => 'andy',
				'password' => md5('111111'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
		]);
	}

	public function products() {
		$this->db->truncate('products');
		$this->db->insert_batch('products', [
			[
				'ID' => '1',
				'name' => 'Note7',
				'brand' => 'Samsung',
				'price' => '22000',
				'description' => '韓國狗狗Note7',

			],
			[
				'ID' => '2',
				'name' => 'Iphone7',
				'brand' => 'Apple',
				'price' => '27000',
				'description' => '軟體順暢I7',

			],
			[
				'ID' => '3',
				'name' => 'M7',
				'brand' => 'HTC',
				'price' => '25000',
				'description' => '酷炫外型M7',

			],
		]);

	}

	public function orders() {
		$this->db->truncate('orders');
		$this->db->insert_batch('orders', [
			[
				'ID' => '1',
				'member_id' => '1',
				'total_price' => '22000',
				'created_at' => date('Y-m-d H:i:s'),

			],
			[
				'ID' => '2',
				'member_id' => '2',
				'total_price' => '21000',
				'created_at' => date('Y-m-d H:i:s'),

			],
			[
				'ID' => '3',
				'member_id' => '3',
				'total_price' => '122000',
				'created_at' => date('Y-m-d H:i:s'),

			],
		]);

	}

	public function order_products() {

		$this->db->truncate('order_products');
		$this->db->insert_batch('order_products', [

			[
				'ID' => '1',
				'order_id' => '1',
				'product_id' => '1',
				'product_name' => 'M7',
				'price' => '25000',
				'amount' => '5',

			],
			[
				'ID' => '2',
				'order_id' => '2',
				'product_id' => '2',
				'product_name' => 'Iphone7',
				'price' => '27000',
				'amount' => '5',

			],

		]);

	}

}