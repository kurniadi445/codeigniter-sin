<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahEmailGuru extends Migration
{
    public function up()
    {
        $this->forge->addColumn('guru', [
            'email' => [
                'constraint' => 254,
                'type' => 'VARCHAR'
            ]
        ]);

        $this->forge->addUniqueKey('email');
    }

    public function down()
    {
        //
    }
}
