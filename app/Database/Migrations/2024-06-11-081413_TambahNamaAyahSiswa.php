<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahNamaAyahSiswa extends Migration
{
    public function up()
    {
        $this->forge->addColumn('siswa', [
            'nama_ayah' => [
                'constraint' => 60,
                'type' => 'VARCHAR'
            ]
        ]);
    }

    public function down()
    {
        //
    }
}
