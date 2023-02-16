<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Postulantes extends Migration
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
            'apellido' => [
                 'type' => 'VARCHAR',
                 'constraint' => '200',
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'dni' => [
                'type' => 'VARCHAR',
                'constraint' => '11',
            ],
            'denominacion' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'fecha_matricula' => array('type' => 'timestamp'),
            'domicilio' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'urlfoto' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'estado_civil' => [
                'type'       => 'ENUM',
                'constraint' => ['soltero-a', 'casado-a', 'viudo-a', 'divorciado-a'],
                'default'    => 'soltero-a',
            ],
            'cargo_ocupa' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'created_at' => array('type' => 'timestamp'),





         ]);
         $this->forge->addKey('id', true);
         $this->forge->createTable('EstadoCivil');




    }

    public function down()
    {
        //
    }
}
