<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahTempatLahirSiswa extends Migration
{
    public function up()
    {
        $this->forge->addColumn('siswa', [
            'id_tempat_lahir' => [
                'after' => 'id_kelas',
                'type' => 'SMALLINT',
                'unsigned' => true
            ]
        ]);

        $this->forge->addForeignKey('id_tempat_lahir', 'tempat_lahir', 'id_tempat_lahir');
    }

    public function down()
    {
        //
    }
}
