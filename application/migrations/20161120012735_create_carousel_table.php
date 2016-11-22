<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_carousel_table extends CI_Migration {

	public function up() {
		$this->dbforge->add_field(array(
			'description' => array(
				'type' => 'VARCHAR',
				'constraint' => '12',
			),
			'picture' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
		));
		$this->dbforge->add_key('title', TRUE);
		$this->dbforge->create_table('carousel');
	}

	public function down() {

		$this->dbforge->drop_table('carousel');
	}
}