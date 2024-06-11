<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';

    protected $allowedFields = [
        'id_kelas',
        'id_tempat_lahir',
        'nisn',
        'no_kk',
        'nama_siswa',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'agama',
        'no_telepon',
        'nama_ayah',
        'nama_ibu'
    ];
}
