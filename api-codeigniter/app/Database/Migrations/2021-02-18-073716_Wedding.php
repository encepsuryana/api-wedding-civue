<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Wedding extends Migration
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
			'nama_lengkap_pria' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'nama_panggilan_pria' => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'asal_pria' => [
				'type'           => 'VARCHAR',
				'constraint'     => '150',
			],
			'orangtua_pria' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'nama_lengkap_wanita' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'nama_panggilan_wanita' => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'asal_wanita' => [
				'type'           => 'VARCHAR',
				'constraint'     => '150',
			],
			'orangtua_wanita' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'ket_akad'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'waktu_akad'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'ket_resepsi'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'waktu_resepsi'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'hari_pernikahan'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '25',
			],
			'tgl_pernikahan'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'ket_tempat'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'alamat_lengkap'     => [
				'type'           => 'TEXT',
			],
			'google_maps'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'google_maps_direction'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'google_calendar'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'google_maps'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'judul_undangan'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'kalimat_udangan'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'text_undangan'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'doa_pernikahan'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'video_pernikahan'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('weddings');
	}

	public function down()
	{
		//
	}
}
