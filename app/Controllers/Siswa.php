<?php

namespace App\Controllers;

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

        return view('tampilan/siswa/indeks', [
            'siswa' => $siswa
        ]);
    }

    public function tambah(): string
    {
        return view('tampilan/siswa/tambah');
    }

    /**
     * @throws ReflectionException
     */
    public function prosesTambah(): RedirectResponse
    {
        $nisn = $this->request->getPost('nisn');
        $namaSiswa = $this->request->getPost('nama-siswa');
        $alamat = $this->request->getPost('alamat');
        $agama = $this->request->getPost('agama');
        $tanggalLahir = $this->request->getPost('tanggal-lahir');
        $jenisKelamin = $this->request->getPost('jenis-kelamin');
        $nomorTelepon = $this->request->getPost('nomor-telepon');
        $noKK = $this->request->getPost('no-kk');

        $siswa = new SiswaModel();

        $siswa->insert([
            'nisn' => $nisn,
            'no_kk' => $noKK,
            'nama_siswa' => $namaSiswa,
            'tanggal_lahir' => $tanggalLahir,
            'jenis_kelamin' => $jenisKelamin,
            'alamat' => $alamat,
            'agama' => $agama,
            'no_telepon' => $nomorTelepon
        ]);

        return redirect('siswa');
    }
}
