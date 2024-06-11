<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahNamaIbuSiswa extends Migration
{
    public function up()
    {
        $this->forge->addColumn('siswa', [
            'nama_ibu' => [
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
