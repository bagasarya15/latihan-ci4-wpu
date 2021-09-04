<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penjualan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE,
			],
			'customer'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'nama_produk' 	 => [
				'type'		 => 'VARCHAR',
				'constraint' => '255',
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => TRUE,
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => TRUE,
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('penjualan');
	}

	public function down()
	{
		$this->forge->dropTable('penjualan');
	}
}
