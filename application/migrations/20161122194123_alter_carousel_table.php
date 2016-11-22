<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Alter_carousel_table extends CI_Migration {

	public function up() {

		$fields = array(

			'url' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),

		);

		$this->dbforge->add_column('carousel', $fields);

	}

	public function down() {

		$this->dbforge->drop_column('carousel', 'url');

	}
}