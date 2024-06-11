<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;

class Dasbor extends BaseController
{
    public function indeks(): string
    {
        return view('tampilan/siswa/dasbor');
    }
}
