<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahNilai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_nilai' => [
                'auto_increment' => true,
                'type' => 'INT',
                'unsigned' => true
            ],
            'id_guru' => [
                'type' => 'SMALLINT',
                'unsigned' => true
            ],
            'id_siswa' => [
                'type' => 'SMALLINT',
                'unsigned' => true
            ],
            'semester' => [
                'type' => 'ENUM(\'Ganjil\', \'Genap\')'
            ],
            'kompetensi' => [
                'type' => 'ENUM(\'A\', \'B\', \'C\', \'D\')',
            ],
            'sikap' => [
                'type' => 'ENUM(\'A\', \'B\', \'C\', \'D\')'
            ],
            'catatan' => [
                'null' => true,
                'type' => 'TINYTEXT'
            ]
        ]);

        $this->forge->addPrimaryKey('id_nilai');

        $this->forge->addForeignKey('id_guru','guru','id_guru', '', 'CASCADE');
        $this->forge->addForeignKey('id_siswa','siswa','id_siswa', '', 'CASCADE');

        $this->forge->createTable('nilai');
    }

    public function down()
    {
        $this->forge->dropTable('nilai', true);
    }
}
