<?php

namespace App\Controllers;

class Laporan extends BaseController
{
    public function indeks(): string
    {
        return view('tampilan/laporan/indeks');
    }
}
