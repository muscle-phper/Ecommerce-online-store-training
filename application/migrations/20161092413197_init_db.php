<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Init_db extends CI_Migration {

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
			'username' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
			),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'address' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
			),
			'birthday' => array(
				'type' => 'DATE',
			),
			'created_at' => array(
				'type' => 'DATETIME',
			),
			'updated_at' => array(
				'type' => 'DATETIME',
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('members');
	}

	public function down() {
		$this->dbforge->drop_table('members');
	}
}