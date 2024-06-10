<?php

namespace App\Controllers;

use Config\Database;

class Kelas extends BaseController
{
    public function indeks(): string
    {
        $db = Database::connect();

        $kelas = $db->table('kelas');
        $kelas = $kelas->orderBy('nama_kelas');
        $kelas = $kelas->get();
        $kelas = $kelas->getResult();

        return view('tampilan/kelas/indeks', [
            'kelas' => $kelas
        ]);
    }

    public function tambah(): string
    {
        return view('tampilan/kelas/tambah');
    }
}
