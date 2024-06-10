<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use Config\Database;

class Guru extends BaseController
{
    public function indeks(): string
    {
        return view('tampilan/admin/guru/indeks');
    }

    public function tambah(): string
    {
        $db = Database::connect();

        $kelas = $db->table('kelas');
        $kelas = $kelas->orderBy('nama_kelas');
        $kelas = $kelas->get();
        $kelas = $kelas->getResult();

        return view('tampilan/admin/guru/tambah', [
            'kelas' => $kelas
        ]);
    }
}
