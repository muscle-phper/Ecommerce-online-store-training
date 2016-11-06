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
				'make' => 'Samsung',
				'price' => '22000',

			],
			[
				'ID' => '2',
				'name' => 'Iphone7',
				'make' => 'Apple',
				'price' => '27000',

			],
			[
				'ID' => '3',
				'name' => 'M7',
				'make' => 'HTC',
				'price' => '25000',

			],
		]);

	}

	public function orders() {
		$this->db->truncate('orders');
		$this->db->insert_batch('orders', [
			[
				'ID' => '1',
				'name' => 'Note7',
				'price' => '22000',
				'amount' => '30',

			],
			[
				'ID' => '2',
				'name' => 'Iphone7',
				'price' => '27000',
				'amount' => '10',

			],
			[
				'ID' => '3',
				'name' => 'M7',
				'price' => '25000',
				'amount' => '20',

			],
		]);

	}

}