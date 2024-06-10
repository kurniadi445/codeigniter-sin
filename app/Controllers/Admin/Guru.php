<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\GuruModel;
use CodeIgniter\HTTP\RedirectResponse;
use Config\Database;
use ReflectionException;

class Guru extends BaseController
{
    public function indeks(): string
    {
        return view('tampilan/admin/guru/indeks');
    }

    public function tambah(): string
    {
        $db = Database::connect();

        $kelas = $db->table('kelas');
        $kelas = $kelas->orderBy('nama_kelas');
        $kelas = $kelas->get();
        $kelas = $kelas->getResult();

        return view('tampilan/admin/guru/tambah', [
            'kelas' => $kelas
        ]);
    }

    /**
     * @throws ReflectionException
     */
    public function prosesTambah(): RedirectResponse
    {
        $nip = $this->request->getPost('nip');
        $namaGuru = $this->request->getPost('nama-guru');
        $kelas = $this->request->getPost('kelas');
        $alamat = $this->request->getPost('alamat');
        $nomorTelepon = $this->request->getPost('nomor-telepon');
        $jenisKelamin = $this->request->getPost('jenis-kelamin');

        $guru = new GuruModel();

        $guru->insert([
            'id_kelas' => $kelas,
            'nip' => $nip,
            'nama_guru' => $namaGuru,
            'jenis_kelamin' => $jenisKelamin,
            'alamat' => $alamat,
            'no_telepon' => $nomorTelepon
        ]);

        return redirect('admin/guru');
    }
}
