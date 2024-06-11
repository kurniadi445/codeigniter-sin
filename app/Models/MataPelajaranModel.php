<?php

namespace App\Models;

use CodeIgniter\Model;

class MataPelajaranModel extends Model
{
    protected $table            = 'mata_pelajaran';
    protected $primaryKey       = 'id_mata_pelajaran';

    protected $allowedFields = [
        'nama_mata_pelajaran',
        'deskripsi',
        'kkm'
    ];
}
