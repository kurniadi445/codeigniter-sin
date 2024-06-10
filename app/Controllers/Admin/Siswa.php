<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use CodeIgniter\HTTP\RedirectResponse;
use Config\Database;
use ReflectionException;

class Siswa extends BaseController
{
    public function indeks(): string
    {
        $db = Database::connect();

        $siswa = $db->table('siswa');
        $siswa = $siswa->orderBy('id_siswa', 'desc');
        $siswa = $siswa->get();
        $siswa = $siswa->getResult();

        return view('tampilan/admin/siswa/indeks', [
            'siswa' => $siswa
        ]);
    }

    public function tambah(): string
    {
        $db = Database::connect();

        $kelas = $db->table('kelas');
        $kelas = $kelas->orderBy('nama_kelas');
        $kelas = $kelas->get();
        $kelas = $kelas->getResult();

        return view('tampilan/admin/siswa/tambah', [
            'kelas' => $kelas
        ]);
    }

    /**
     * @throws ReflectionException
     */
    public function prosesTambah(): RedirectResponse
    {
        $nisn = $this->request->getPost('nisn');
        $namaSiswa = $this->request->getPost('nama-siswa');
        $kelas = $this->request->getPost('kelas');
        $alamat = $this->request->getPost('alamat');
        $agama = $this->request->getPost('agama');
        $tanggalLahir = $this->request->getPost('tanggal-lahir');
        $jenisKelamin = $this->request->getPost('jenis-kelamin');
        $nomorTelepon = $this->request->getPost('nomor-telepon');
        $noKK = $this->request->getPost('no-kk');

        $siswa = new SiswaModel();

        $siswa->insert([
            'id_kelas' => $kelas,
            'nisn' => $nisn,
            'no_kk' => $noKK,
            'nama_siswa' => $namaSiswa,
            'tanggal_lahir' => $tanggalLahir,
            'jenis_kelamin' => $jenisKelamin,
            'alamat' => $alamat,
            'agama' => $agama,
            'no_telepon' => $nomorTelepon
        ]);

        return redirect('admin/siswa');
    }
}
