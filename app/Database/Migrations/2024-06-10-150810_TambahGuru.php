<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahGuru extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_guru' => [
                'auto_increment' => true,
                'type' => 'SMALLINT',
                'unsigned' => true
            ],
            'id_kelas' => [
                'null' => true,
                'type' => 'TINYINT',
                'unsigned' => true
            ],
            'nip' => [
                'constraint' => 18,
                'type' => 'CHAR'
            ],
            'nama_guru' => [
                'constraint' => 60,
                'type' => 'VARCHAR'
            ],
            'jenis_kelamin' => [
                'type' => 'ENUM(\'Laki-laki\', \'Perempuan\')'
            ],
            'alamat' => [
                'constraint' => 100,
                'type' => 'VARCHAR'
            ],
            'no_telepon' => [
                'constraint' => 13,
                'type' => 'VARCHAR'
            ]
        ]);

        $this->forge->addPrimaryKey('id_guru');
        $this->forge->addUniqueKey('nip');
        $this->forge->addUniqueKey('no_telepon');

        $this->forge->addForeignKey('id_kelas', 'kelas', 'id_kelas', '', 'SET NULL');

        $this->forge->createTable('guru', true);
    }

    public function down()
    {
        $this->forge->dropTable('guru', true);
    }
}
