<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Guestbook extends Migration
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
			 'nama_lengkap' => [
				  'type'           => 'VARCHAR',
				  'constraint'     => '255',
			  ],
			  'ucapan'     => [
				'type'           => 'TEXT',
			  ],
		  ]);
		  $this->forge->addKey('id', TRUE);
		  $this->forge->createTable('guestbook');
	}

	public function down()
	{
		//
	}
}
