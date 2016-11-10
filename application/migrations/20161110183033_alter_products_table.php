<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Alter_products_table extends CI_Migration {

	public function up() {

		$fields = array(
			'description' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'picture' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
		);

		$this->dbforge->add_column('products', $fields);

		$fields = array(
			'make' => array(
				'name' => 'brand',
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
		);

		$this->dbforge->modify_column('products', $fields);

	}

	public function down() {

		$this->dbforge->drop_column('products', 'description');
		$this->dbforge->drop_column('products', 'picture');

		$fields = array(
			'brand' => array(
				'name' => 'make',
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
		);

		$this->dbforge->modify_column('products', $fields);

	}
}