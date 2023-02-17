<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Telefonos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                 'type' => 'INT',
                 'constraint' => 5,
                 'unsigned' => true,
                 'auto_increment' => true,
            ],
            'numero' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
           ],
           'id_postulante' => [
               'type' => 'INT',
               'constraint' => 5,
               'unsigned' => true,
           ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_postulante', 'Postulantes', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Telefonos');      
    }
    
    public function down()
    {
        $this->forge->dropTable('Telefonos');
    }
}
