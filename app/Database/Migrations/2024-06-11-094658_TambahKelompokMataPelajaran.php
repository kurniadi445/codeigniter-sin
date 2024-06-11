<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahKelompokMataPelajaran extends Migration
{
    public function up()
    {
        $this->forge->addColumn('mata_pelajaran', [
            'kelompok' => [
                'type' => 'ENUM(\'A\', \'B\')',
            ]
        ]);
    }

    public function down()
    {
        //
    }
}
