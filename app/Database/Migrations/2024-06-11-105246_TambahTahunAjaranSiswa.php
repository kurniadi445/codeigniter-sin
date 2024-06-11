<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahTahunAjaranSiswa extends Migration
{
    public function up()
    {
        $this->forge->addColumn('siswa', [
            'tahun_ajaran' => [
                'type' => 'YEAR'
            ]
        ]);
    }

    public function down()
    {
        //
    }
}
