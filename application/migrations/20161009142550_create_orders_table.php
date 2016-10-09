<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_orders_table extends CI_Migration {

	public function up() {
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '12',
			),
			'price' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
			),
			'amount' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
			),
			'status' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
			),

		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('orders');
	}

	public function down() {
		$this->dbforge->drop_table('orders');
	}
}