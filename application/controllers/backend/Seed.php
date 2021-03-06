<?php

class Seed extends CI_Controller {

	public function index() {

		$this->members();
		$this->products();
		$this->orders();
		$this->order_products();
	}

	public function members() {
		$faker = Faker\Factory::create();
		$this->db->truncate('members');
		$this->db->insert_batch('members', [
			[
				'name' => $faker->name,
				'address' => $faker->address,
				'birthday' => $faker->date,
				'username' => 'eric',
				'password' => md5('111111'),
				'created_at' => $faker->date('Y-m-d H:i:s'),
				'updated_at' => $faker->date('Y-m-d H:i:s'),
			],
			[
				'name' => $faker->name,
				'address' => $faker->address,
				'birthday' => $faker->date,
				'username' => 'tonyciou',
				'password' => md5('111111'),
				'created_at' => $faker->date('Y-m-d H:i:s'),
				'updated_at' => $faker->date('Y-m-d H:i:s'),
			],
			[
				'name' => $faker->name,
				'address' => $faker->address,
				'birthday' => $faker->date,
				'username' => 'andy',
				'password' => md5('111111'),
				'created_at' => $faker->date('Y-m-d H:i:s'),
				'updated_at' => $faker->date('Y-m-d H:i:s'),
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
				'picture' => '/public/upload/products/Note7.jpg',

			],
			[
				'ID' => '2',
				'name' => 'Iphone7',
				'brand' => 'Apple',
				'price' => '27000',
				'description' => '軟體順暢I7',
				'picture' => '/public/upload/products/Iphone7.jpg',

			],
			[
				'ID' => '3',
				'name' => 'M7',
				'brand' => 'HTC',
				'price' => '25000',
				'description' => '酷炫外型M7',
				'picture' => '/public/upload/products/M7.jpg',

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

	public function carousel() {

		$this->db->truncate('carousel');
		$this->db->insert_batch('carousel', [

			[
				'ID' => '1',
				'title' => 'HTC新機專欄',
				'description' => '趁著秋冬換隻酷炫的手機吧',
				'picture' => '/public/upload/carousel/HTC.jpg',
				'url' => base_url('/Url/HTC'),

			],
			[
				'ID' => '2',
				'title' => 'Iphone新機專欄',
				'description' => '哀鳳鳳下殺五折',
				'picture' => '/public/upload/carousel/Iphone.jpg',
				'url' => base_url('/Url/Iphone'),
			],
			[
				'ID' => '3',
				'title' => 'Samsung新機專欄',
				'description' => '三爽手機，含狗狗專用',
				'picture' => '/public/upload/carousel/Samsung.jpg',
				'url' => base_url('/Url/Samsung'),
			],

		]);

	}

}