<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahDetailNilai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_detail_nilai' => [
                'auto_increment' => true,
                'type' => 'INT',
                'unsigned' => true
            ],
            'id_nilai' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'id_mata_pelajaran' => [
                'type' => 'TINYINT',
                'unsigned' => true
            ],
            'nilai' => [
                'type' => 'TINYINT',
                'unsigned' => true
            ],
            'predikat_nilai' => [
                'type' => 'ENUM(\'A\', \'B\', \'C\', \'D\')'
            ],
            'tugas' => [
                'type' => 'TINYINT',
                'unsigned' => true
            ],
            'predikat_tugas' => [
                'type' => 'ENUM(\'A\', \'B\', \'C\', \'D\')'
            ],
            'uts' => [
                'type' => 'TINYINT',
                'unsigned' => true
            ],
            'predikat_uts' => [
                'type' => 'ENUM(\'A\', \'B\', \'C\', \'D\')'
            ],
            'uas' => [
                'type' => 'TINYINT',
                'unsigned' => true
            ],
            'predikat_uas' => [
                'type' => 'ENUM(\'A\', \'B\', \'C\', \'D\')'
            ]
        ]);

        $this->forge->addPrimaryKey('id_detail_nilai');

        $this->forge->addForeignKey('id_nilai', 'nilai', 'id_nilai', '', 'CASCADE');
        $this->forge->addForeignKey('id_mata_pelajaran', 'mata_pelajaran', 'id_mata_pelajaran');

        $this->forge->createTable('detail_nilai', true);
    }

    public function down()
    {
        $this->forge->dropTable('detail_nilai', true);
    }
}
