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
        $db = Database::connect();

        $guru = $db->table('guru');
        $guru = $guru->orderBy('id_guru', 'desc');
        $guru = $guru->get();
        $guru = $guru->getResult();

        return view('tampilan/admin/guru/indeks', [
            'guru' => $guru
        ]);
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

    public function hapus(int $idGuru): RedirectResponse
    {
        $db = Database::connect();

        $guru = $db->table('guru');

        $guru->delete([
            'id_guru' => $idGuru
        ]);

        return redirect('admin/guru');
    }
}
