<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_order_products_table extends CI_Migration {

	public function up() {
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			),
			'order_id' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'null' => FALSE,
			),

			'product_id' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'null' => FALSE,
			),
			'product_name' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'price' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'null' => FALSE,
			),
			'amount' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'null' => FALSE,
			),

		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('order_products');
	}

	public function down() {

		$this->dbforge->drop_table('order_products');
	}
}