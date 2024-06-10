<?php

namespace App\Controllers;

use App\Models\KelasModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\RedirectResponse;
use Config\Database;
use ReflectionException;

class Kelas extends BaseController
{
    public function indeks(): string
    {
        $db = Database::connect();

        $kelas = $db->table('kelas');
        $kelas = $kelas->orderBy('nama_kelas');
        $kelas = $kelas->get();
        $kelas = $kelas->getResult();

        return view('tampilan/kelas/indeks', [
            'kelas' => $kelas
        ]);
    }

    public function tambah(): string
    {
        return view('tampilan/kelas/tambah');
    }

    /**
     * @throws ReflectionException
     */
    public function prosesTambah(): RedirectResponse
    {
        $kelas = new KelasModel();

        $kelas->insert([
            'nama_kelas' => $this->request->getPost('kelas')
        ]);

        return redirect('kelas');
    }

    public function edit(int $idKelas): string
    {
        $db = Database::connect();

        $kelas = $db->table('kelas');
        $kelas = $kelas->where('id_kelas', $idKelas);

        if ($kelas->countAllResults()) {
            $kelas = $kelas->get();
            $kelas = $kelas->getRow();

            return view('tampilan/kelas/edit', [
                'kelas' => $kelas
            ]);
        }

        throw PageNotFoundException::forPageNotFound();
    }

    public function hapus(int $idKelas): RedirectResponse
    {
        $db = Database::connect();

        $kelas = $db->table('kelas');

        $kelas->delete([
            'id_kelas' => $idKelas
        ]);

        return redirect('kelas');
    }
}
