<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('pengguna')->insert([
            'nama_pengguna' => 'admin',
            'kata_sandi' => password_hash('admin', PASSWORD_BCRYPT),
            'level' => 'Admin'
        ]);
    }
}
