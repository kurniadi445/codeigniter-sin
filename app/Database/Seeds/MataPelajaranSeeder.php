<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MataPelajaranSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('mata_pelajaran')->insertBatch([
            [
                'nama_mata_pelajaran' => 'Pendidikan Agama Islam dan Budi Pekerti',
                'deskripsi' => 'Memiliki penguasaan sebagian keterampilan, terutama dalam menyajikan contoh perilaku meneladani al-Asmau al-Husna',
                'kkm' => 74,
                'kelompok' => 'A'
            ],
            [
                'nama_mata_pelajaran' => 'Pendidikan Pancasila dan Kewarganegaraan',
                'deskripsi' => 'Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan analisis perumusan dan penetapan Pancasila',
                'kkm' => 74,
                'kelompok' => 'A'
            ],
            [
                'nama_mata_pelajaran' => 'Bahasa Indonesia',
                'deskripsi' => 'Memiliki penguasaan keterampilan cukup baik, terutama dalam menjelaskan isi teks deskripsi',
                'kkm' => 73,
                'kelompok' => 'A'
            ],
            [
                'nama_mata_pelajaran' => 'Bahasa Inggris',
                'deskripsi' => 'Memiliki penguasaan keterampilan cukup baik, bahkan terampil dalam menyusun teks menyapa, pamitan',
                'kkm' => 70,
                'kelompok' => 'A'
            ],
            [
                'nama_mata_pelajaran' => 'Matematika (Umum)',
                'deskripsi' => 'Memiliki penguasaan keterampilan cukup baik, terutama dalam menyelesaikan masalah operasi hitung bilangan bulat & pecahan',
                'kkm' => 70,
                'kelompok' => 'A'
            ],
            [
                'nama_mata_pelajaran' => 'Ilmu Pengetahuan Alam (IPA)',
                'deskripsi' => 'Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan karya larutan, perubahan zat, pemisahan campuran',
                'kkm' => 70,
                'kelompok' => 'A'
            ],
            [
                'nama_mata_pelajaran' => 'Ilmu Pengetahuan Sosial (IPS)',
                'deskripsi' => 'Memiliki penguasaan keterampilan cukup baik, terutama dalam menjelaskan konsep ruang',
                'kkm' => 75,
                'kelompok' => 'A'
            ],
            [
                'nama_mata_pelajaran' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
                'deskripsi' => 'Memiliki penguasaan keterampilan cukup baik, terutama dalam mempraktikkan gerak spesifik permainan bola besar',
                'kkm' => 75,
                'kelompok' => 'B'
            ],
            [
                'nama_mata_pelajaran' => 'Seni dan Budaya',
                'deskripsi' => 'Memiliki penguasaan keterampilan cukup baik, terutama dalam menggambar flora, fauna, dan alam benda',
                'kkm' => 75,
                'kelompok' => 'B'
            ],
            [
                'nama_mata_pelajaran' => 'Prakarya',
                'deskripsi' => 'Memiliki penguasaan keterampilan baik, terutama dalam mempraktikkan tahapan budidaya tanaman sayuran',
                'kkm' => 75,
                'kelompok' => 'B'
            ]
        ]);
    }
}
