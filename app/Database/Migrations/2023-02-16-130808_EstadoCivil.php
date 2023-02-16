<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EstadoCivil extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                 'type' => 'INT',
                 'constraint' => 3,
                 'unsigned' => true,
                 'auto_increment' => true,
            ],
            'denominacion' => [
                 'type' => 'VARCHAR',
                 'constraint' => '150',
            ]
         ]);
         $this->forge->addKey('id', true);
         $this->forge->createTable('EstadoCivil');
    }

    public function down()
    {
        $this->forge->dropTable('EstadoCivil');
    }
}
