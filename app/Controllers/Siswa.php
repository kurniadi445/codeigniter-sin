<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function indeks(): string
    {
        return view('tampilan/siswa/indeks');
    }
}
