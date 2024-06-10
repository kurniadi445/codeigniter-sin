<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;

class Siswa extends BaseController
{
    public function indeks(): string
    {
        return view('tampilan/guru/siswa/indeks');
    }
}
