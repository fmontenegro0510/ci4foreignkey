<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;


class Emails extends Migration
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
            'correo' => [
                 'type' => 'VARCHAR',
                 'constraint' => '200',
            ],
            'id_postulante' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
         ]);
         $this->forge->addKey('id', true);
         $this->forge->addForeignKey('id_postulante', 'Postulantes', 'id', 'CASCADE', 'CASCADE');
         $this->forge->createTable('Emails');        
    }
    public function down()
    {
        $this->forge->dropTable('Emails');
    }
}
