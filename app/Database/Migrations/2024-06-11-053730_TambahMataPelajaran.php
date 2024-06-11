<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahMataPelajaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_mata_pelajaran' => [
                'auto_increment' => true,
                'type' => 'TINYINT',
                'unsigned' => true
            ],
            'nama_mata_pelajaran' => [
                'constraint' => 30,
                'type' => 'VARCHAR'
            ],
            'deskripsi' => [
                'null' => true,
                'type' => 'TINYTEXT'
            ],
            'kkm' => [
                'type' => 'TINYINT',
                'unsigned' => true
            ]
        ]);

        $this->forge->addPrimaryKey('id_mata_pelajaran');
        $this->forge->addUniqueKey('nama_mata_pelajaran');

        $this->forge->createTable('mata_pelajaran', true);
    }

    public function down()
    {
        $this->forge->dropTable('mata_pelajaran', true);
    }
}
