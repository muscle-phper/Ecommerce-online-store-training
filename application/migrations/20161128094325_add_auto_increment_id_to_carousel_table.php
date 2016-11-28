<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_auto_increment_id_to_carousel_table extends CI_Migration {

	public function up() {

		$fields = array(
			'id' => array(
				'name' => 'id',
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			),
		);

		$this->dbforge->modify_column('carousel', $fields);

	}

	public function down() {

		$fields = array(
			'id' => array(
				'name' => 'id',
				'type' => 'INT',
				'unsigned' => TRUE,
			),
		);

		$this->dbforge->modify_column('carousel', $fields);

	}
}