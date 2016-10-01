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

				'birthday' => '1990-01-02',
				'username' => 'tonyciou',
				'password' => md5('111111'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'name' => 'Andy',

				'birthday' => '1990-01-03',
				'username' => 'andy',
				'password' => md5('111111'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
		]);

	}

}