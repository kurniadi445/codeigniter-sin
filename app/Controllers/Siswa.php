<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function indeks(): string
    {
        return view('tampilan/siswa/indeks');
    }

    public function tambah(): string
    {
        return view('tampilan/siswa/tambah');
    }
}
