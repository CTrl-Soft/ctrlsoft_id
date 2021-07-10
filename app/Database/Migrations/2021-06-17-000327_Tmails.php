<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tmails extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'from'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'subject' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'phone' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'message' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			]
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('tmail');
	}

	public function down()
	{
		$this->forge->dropTable('tmail');
	}
}
