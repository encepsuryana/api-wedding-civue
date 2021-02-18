<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Login extends Migration
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
			 'full_name' => [
				  'type'           => 'VARCHAR',
				  'constraint'     => '255',
			  ],
			  'username'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			  ],
			  'password'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			  ],
			  'avatar'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			  ],
		  ]);
		  $this->forge->addKey('id', TRUE);
		  $this->forge->createTable('login');
	}

	public function down()
	{
		//
	}
}
