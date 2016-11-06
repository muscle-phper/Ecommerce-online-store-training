<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Alter_orders_table extends CI_Migration {

	public function up() {

		$fields = array(
			'member_id' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'null' => FALSE,
			),
			'created_at' => array(
				'type' => 'DATETIME',
				'null' => FALSE,
			),
		);

		$this->dbforge->add_column('orders', $fields);

		$fields = array(
			'price' => array(
				'name' => 'total_price',
				'type' => 'INT',
				'unsigned' => TRUE,
				'null' => FALSE,
			),
		);

		$this->dbforge->modify_column('orders', $fields);
		$this->dbforge->drop_column('orders', 'amount');
		$this->dbforge->drop_column('orders', 'name');

	}

	public function down() {

		$this->dbforge->drop_column('orders', 'member_id');
		$this->dbforge->drop_column('orders', 'created_at');

		$fields = array(
			'total_price' => array(
				'name' => 'price',
				'type' => 'INT',
				'unsigned' => TRUE,
			),
		);

		$this->dbforge->modify_column('orders', $fields);

		$fields = array(
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '12',
			),
			'amount' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
			),
		);

		$this->dbforge->add_column('orders', $fields);

	}
}