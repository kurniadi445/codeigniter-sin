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
        $aturan = [
            'nisn' => 'required|exact_length[10]|is_unique[siswa.nisn]',
            'nama-siswa' => 'required|min_length[3]|max_length[60]',
            'alamat' => 'required|max_length[100]',
            'agama' => 'required|in_list[Buddha,Hindu,Islam,Kristen,Khonghucu,Protestan]',
            'tanggal-lahir' => 'required|valid_date[Y-m-d]',
            'jenis-kelamin' => 'required|in_list[Laki-laki,Perempuan]',
            'nomor-telepon' => 'required|min_length[10]|max_length[13]|is_unique[siswa.no_telepon]',
            'no-kk' => 'required|exact_length[16]|is_unique[siswa.no_kk]'
        ];

        $data = $this->request->getPost(array_keys($aturan));

        if ($this->validateData($data, $aturan)) {
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

        $kesalahan = $this->validator->getErrors();

        session()->setFlashdata('kesalahan', $kesalahan);

        return redirect()->back();
    }

    public function hapus(int $idSiswa): RedirectResponse
    {
        $db = Database::connect();

        $siswa = $db->table('siswa');

        $siswa->delete([
            'id_siswa' => $idSiswa
        ]);

        return redirect('admin/siswa');
    }
}
