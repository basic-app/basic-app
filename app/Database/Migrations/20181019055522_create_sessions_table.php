<?php

namespace App\Database\Migrations;

class Migration_create_sessions_table extends \BasicApp\Core\Migration
{

	public $tableName = 'sessions';

	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => false
			],
			'ip_address' => [
				'type' => 'VARCHAR',
				'constraint' => 45,
				'null' => false
			],
			'timestamp' => [
				'type' => 'INT',
				'constraint' => 10,
				'unsigned' => true,
				'null' => false,
				'default' => 0
			],
			'data' => [
				'type' => 'TEXT',
				'null' => false,
				'default' => ''
			],
		]);

		$this->forge->addKey('id', true);

		$this->forge->addKey('timestamp');

		$this->createTable($this->tableName);
	}

	public function down()
	{
		$this->dropTable($this->tableName);
	}

}