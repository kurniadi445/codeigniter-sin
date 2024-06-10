<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    protected $table = 'guru';
    protected $primaryKey = 'id_guru';

    protected $allowedFields = [
        'id_kelas',
        'nip',
        'nama_guru',
        'jenis_kelamin',
        'alamat',
        'no_telepon'
    ];
}