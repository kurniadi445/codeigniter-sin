<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Laporan extends BaseController
{
    public function indeks(): string
    {
        return view('tampilan/admin/laporan/indeks');
    }
}
