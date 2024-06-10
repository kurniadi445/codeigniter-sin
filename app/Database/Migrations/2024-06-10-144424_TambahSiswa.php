<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahSiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_siswa' => [
                'auto_increment' => true,
                'type' => 'SMALLINT',
                'unsigned' => true
            ],
            'id_kelas' => [
                'null' => true,
                'type' => 'TINYINT',
                'unsigned' => true
            ],
            'nisn' => [
                'constraint' => 10,
                'type' => 'CHAR'
            ],
            'no_kk' => [
                'constraint' => 16,
                'type' => 'CHAR'
            ],
            'nama_siswa' => [
                'constraint' => 60,
                'type' => 'VARCHAR'
            ],
            'tanggal_lahir' => [
                'type' => 'DATE'
            ],
            'jenis_kelamin' => [
                'type' => 'ENUM(\'Laki-laki\', \'Perempuan\')'
            ],
            'alamat' => [
                'constraint' => 100,
                'type' => 'VARCHAR'
            ],
            'agama' => [
                'type' => 'ENUM(\'Buddha\', \'Hindu\', \'Islam\', \'Katolik\', \'Khonghucu\', \'Protestan\')'
            ],
            'no_telepon' => [
                'constraint' => 13,
                'type' => 'VARCHAR'
            ]
        ]);

        $this->forge->addPrimaryKey('id_siswa');
        $this->forge->addUniqueKey('nisn');
        $this->forge->addUniqueKey('no_kk');
        $this->forge->addUniqueKey('no_telepon');

        $this->forge->addForeignKey('id_kelas', 'kelas', 'id_kelas', '', 'SET NULL');

        $this->forge->createTable('siswa', true);
    }

    public function down()
    {
        $this->forge->dropTable('siswa', true);
    }
}
