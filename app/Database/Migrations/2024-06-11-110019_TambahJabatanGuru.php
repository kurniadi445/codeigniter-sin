<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahJabatanGuru extends Migration
{
    public function up()
    {
        $this->forge->addColumn('guru', [
            'jabatan' => [
                'after' => 'nama_guru',
                'constraint' => 30,
                'type' => 'VARCHAR'
            ]
        ]);
    }

    public function down()
    {
        //
    }
}
