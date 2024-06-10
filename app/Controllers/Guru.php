<?php

namespace App\Controllers;

class Guru extends BaseController
{
    public function indeks(): string
    {
        return view('tampilan/guru/indeks');
    }

    public function tambah(): string
    {
        return view('tampilan/guru/tambah');
    }
}
