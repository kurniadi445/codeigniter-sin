<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;
use Config\Database;

class Siswa extends BaseController
{
    public function indeks(): string
    {
        $db = Database::connect();

        $siswa = $db->table('siswa');
        $siswa = $siswa->join('kelas', 'siswa.id_kelas = kelas.id_kelas');
        $siswa = $siswa->join('guru', 'kelas.id_kelas = guru.id_kelas');
        $siswa = $siswa->get();
        $siswa = $siswa->getResult();

        return view('tampilan/guru/siswa/indeks', [
            'siswa' => $siswa
        ]);
    }
}
