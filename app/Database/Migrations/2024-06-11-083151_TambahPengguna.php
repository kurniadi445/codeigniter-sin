<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahPengguna extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pengguna' => [
                'auto_increment' => true,
                'type' => 'SMALLINT',
                'unsigned' => true
            ],
            'nama_pengguna' => [
                'constraint' => 32,
                'type' => 'VARCHAR'
            ],
            'kata_sandi' => [
                'constraint' => 60,
                'type' => 'CHAR'
            ],
            'level' => [
                'type' => 'ENUM(\'Admin\', \'Guru\', \'Murid\')',
            ]
        ]);

        $this->forge->addPrimaryKey('id_pengguna');
        $this->forge->addUniqueKey('nama_pengguna');

        $this->forge->createTable('pengguna', true);
    }

    public function down()
    {
        $this->forge->dropTable('pengguna', true);
    }
}
