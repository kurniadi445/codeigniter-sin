<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahTahunAjaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tahun_ajaran' => [
                'auto_increment' => true,
                'type' => 'TINYINT',
                'unsigned' => true
            ],
            'tahun_mulai' => [
                'type' => 'YEAR'
            ],
            'tahun_akhir' => [
                'type' => 'YEAR'
            ]
        ]);

        $this->forge->addPrimaryKey('id_tahun_ajaran');

        $this->forge->createTable('tahun_ajaran', true);
    }

    public function down()
    {
        $this->forge->dropTable('tahun_ajaran', true);
    }
}
