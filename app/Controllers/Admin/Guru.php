<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Guru extends BaseController
{
    public function indeks(): string
    {
        return view('tampilan/admin/guru/indeks');
    }

    public function tambah(): string
    {
        return view('tampilan/admin/guru/tambah');
    }
}
