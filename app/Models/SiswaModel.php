<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';

    protected $allowedFields = [
        'nisn',
        'no_kk',
        'nama_siswa',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'agama',
        'no_telepon'
    ];
}
