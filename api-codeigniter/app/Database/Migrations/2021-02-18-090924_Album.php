<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Album extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				 'type'           => 'INT',
				 'constraint'     => 11,
				 'unsigned'       => TRUE,
				 'auto_increment' => TRUE
			  ],
			 'id_wedding' => [
				'type'           => 'INT',
				'constraint'     => 11,
			  ],
			  'image'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			  ],
		  ]);
		  $this->forge->addKey('id', TRUE);
		  $this->forge->createTable('albums');
	}

	public function down()
	{
		//
	}
}
