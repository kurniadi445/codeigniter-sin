<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MataPelajaranModel;
use CodeIgniter\HTTP\RedirectResponse;
use ReflectionException;

class MataPelajaran extends BaseController
{
    public function indeks(): string
    {
        return view('tampilan/admin/mata-pelajaran');
    }

    /**
     * @throws ReflectionException
     */
    public function proses(): RedirectResponse
    {
        $aturan = [
            'nama-mata-pelajaran' => 'required|max_length[30]|is_unique[mata_pelajaran.nama_mata_pelajaran]',
            'kkm' => 'required|numeric|greater_than_equal_to[0]|less_than_equal_to[100]'
        ];

        $data = $this->request->getPost(array_keys($aturan));

        if ($this->validateData($data, $aturan)) {
            $namaMataPelajaran = $this->request->getPost('nama-mata-pelajaran');
            $kkm = $this->request->getPost('kkm');
            $deskripsi = $this->request->getPost('deskripsi');

            $mataPelajaran = new MataPelajaranModel();

            $mataPelajaran->insert([
                'nama_mata_pelajaran' => $namaMataPelajaran,
                'deskripsi' => $deskripsi,
                'kkm' => $kkm
            ]);

            session()->setFlashdata('berhasil', 'Mata pelajaran berhasil ditambah');

            return redirect('admin/mata-pelajaran');
        }

        $kesalahan = $this->validator->getErrors();

        session()->setFlashdata('kesalahan', $kesalahan);

        return redirect()->back();
    }
}
