<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahStatusGuru extends Migration
{
    public function up()
    {
        $this->forge->addColumn('guru', [
            'status' => [
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
