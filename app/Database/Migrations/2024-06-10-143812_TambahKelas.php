<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahKelas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kelas' => [
                'auto_increment' => true,
                'type' => 'TINYINT',
                'unsigned' => true
            ],
            'nama_kelas' => [
                'constraint' => 30,
                'type' => 'VARCHAR'
            ]
        ]);

        $this->forge->addPrimaryKey('id_kelas');
        $this->forge->addUniqueKey('nama_kelas');

        $this->forge->createTable('kelas', true);
    }

    public function down()
    {
        $this->forge->dropTable('kelas', true);
    }
}
