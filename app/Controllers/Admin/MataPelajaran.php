<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class MataPelajaran extends BaseController
{
    public function indeks(): string
    {
        return view('tampilan/admin/mata-pelajaran');
    }
}
