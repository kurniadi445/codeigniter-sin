<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use CodeIgniter\Exceptions\PageNotFoundException;
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

        $tempatLahir = $db->table('tempat_lahir');
        $tempatLahir = $tempatLahir->orderBy('nama_tempat_lahir');
        $tempatLahir = $tempatLahir->get();
        $tempatLahir = $tempatLahir->getResult();

        return view('tampilan/admin/siswa/tambah', [
            'kelas' => $kelas,
            'tempat_lahir' => $tempatLahir
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
            $tempatLahir = $this->request->getPost('tempat-lahir');
            $noKK = $this->request->getPost('no-kk');

            $db = Database::connect();

            $db->transBegin();

            $idTempatLahir = $db->table('tempat_lahir');
            $idTempatLahir = $idTempatLahir->where('id_tempat_lahir', $tempatLahir);

            if ($idTempatLahir->countAllResults()) {
                $idTempatLahir = $idTempatLahir->get();
                $idTempatLahir = $idTempatLahir->getRow();

                $idTempatLahir = $idTempatLahir->id_tempat_lahir;
            } else {
                $idTempatLahir->insert([
                    'nama_tempat_lahir' => $tempatLahir
                ]);

                $idTempatLahir = $db->insertID();
            }

            $siswa = new SiswaModel();

            $siswa->insert([
                'id_kelas' => $kelas,
                'id_tempat_lahir' => $idTempatLahir,
                'nisn' => $nisn,
                'no_kk' => $noKK,
                'nama_siswa' => $namaSiswa,
                'tanggal_lahir' => $tanggalLahir,
                'jenis_kelamin' => $jenisKelamin,
                'alamat' => $alamat,
                'agama' => $agama,
                'no_telepon' => $nomorTelepon
            ]);

            $db->transCommit();

            session()->setFlashdata('berhasil', 'Siswa berhasil ditambah');

            return redirect('admin/siswa');
        }

        $kesalahan = $this->validator->getErrors();

        session()->setFlashdata('kesalahan', $kesalahan);

        return redirect()->back();
    }

    public function edit(int $idSiswa): string
    {
        $db = Database::connect();

        $siswa = $db->table('siswa');
        $siswa = $siswa->where('id_siswa', $idSiswa);

        if ($siswa->countAllResults()) {
            $siswa = $siswa->get();
            $siswa = $siswa->getRow();

            $kelas = $db->table('kelas');
            $kelas = $kelas->orderBy('nama_kelas');
            $kelas = $kelas->get();
            $kelas = $kelas->getResult();

            return view('tampilan/admin/siswa/edit', [
                'siswa' => $siswa,
                'kelas' => $kelas
            ]);
        }

        throw PageNotFoundException::forPageNotFound();
    }

    public function prosesEdit(int $idSiswa)
    {
        $db = Database::connect();

        $siswa = $db->table('siswa');
        $siswa = $siswa->where('id_siswa', $idSiswa);

        if ($siswa->countAllResults()) {
            $aturan = [
                'nama-siswa' => 'required|min_length[3]|max_length[60]',
                'alamat' => 'required|max_length[100]',
                'agama' => 'required|in_list[Buddha,Hindu,Islam,Kristen,Khonghucu,Protestan]',
                'tanggal-lahir' => 'required|valid_date[Y-m-d]',
                'jenis-kelamin' => 'required|in_list[Laki-laki,Perempuan]',
                'nomor-telepon' => "required|min_length[10]|max_length[13]|is_unique[siswa.no_telepon,id_siswa,{$idSiswa}]",
                'no-kk' => "required|exact_length[16]|is_unique[siswa.no_kk,id_siswa,{$idSiswa}]"
            ];

            $data = $this->request->getPost(array_keys($aturan));

            if ($this->validateData($data, $aturan)) {
                $namaSiswa = $this->request->getPost('nama-siswa');
                $kelas = $this->request->getPost('kelas');
                $alamat = $this->request->getPost('alamat');
                $agama = $this->request->getPost('agama');
                $tanggalLahir = $this->request->getPost('tanggal-lahir');
                $jenisKelamin = $this->request->getPost('jenis-kelamin');
                $nomorTelepon = $this->request->getPost('nomor-telepon');
                $tempatLahir = $this->request->getPost('tempat-lahir');
                $noKK = $this->request->getPost('no-kk');

                $db->transBegin();

                $idTempatLahir = $db->table('tempat_lahir');
                $idTempatLahir = $idTempatLahir->where('id_tempat_lahir', $tempatLahir);

                if ($idTempatLahir->countAllResults()) {
                    $idTempatLahir = $idTempatLahir->get();
                    $idTempatLahir = $idTempatLahir->getRow();

                    $idTempatLahir = $idTempatLahir->id_tempat_lahir;
                } else {
                    $idTempatLahir->insert([
                        'nama_tempat_lahir' => $tempatLahir
                    ]);

                    $idTempatLahir = $db->insertID();
                }

                $siswa->update([
                    'id_kelas' => $kelas,
                    'id_tempat_lahir' => $idTempatLahir,
                    'no_kk' => $noKK,
                    'nama_siswa' => $namaSiswa,
                    'tanggal_lahir' => $tanggalLahir,
                    'jenis_kelamin' => $jenisKelamin,
                    'alamat' => $alamat,
                    'agama' => $agama,
                    'no_telepon' => $nomorTelepon
                ]);

                $db->transCommit();

                session()->setFlashdata('berhasil', 'Siswa berhasil diedit');

                return redirect('admin/siswa');
            }

            $kesalahan = $this->validator->getErrors();

            session()->setFlashdata('kesalahan', $kesalahan);

            return redirect()->back();
        }

        throw PageNotFoundException::forPageNotFound();
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
