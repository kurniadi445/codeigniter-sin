<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahTempatLahir extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tempat_lahir' => [
                'auto_increment' => true,
                'type' => 'SMALLINT',
                'unsigned' => true
            ],
            'nama_tempat_lahir' => [
                'constraint' => 50,
                'type' => 'VARCHAR'
            ]
        ]);

        $this->forge->addPrimaryKey('id_tempat_lahir');
        $this->forge->addUniqueKey('nama_tempat_lahir');

        $this->forge->createTable('tempat_lahir', true);
    }

    public function down()
    {
        $this->forge->dropTable('tempat_lahir', true);
    }
}
