<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/admin/siswa', 'Admin\Siswa::indeks');
$routes->get('/admin/siswa/tambah', 'Admin\Siswa::tambah');
$routes->post('/admin/siswa/tambah', 'Admin\Siswa::prosesTambah');

$routes->get('/admin/guru', 'Admin\Guru::indeks');
$routes->get('/admin/guru/tambah', 'Admin\Guru::tambah');
$routes->post('/admin/guru/tambah', 'Admin\Guru::prosesTambah');

$routes->get('/admin/kelas', 'Admin\Kelas::indeks');
$routes->get('/admin/kelas/tambah', 'Admin\Kelas::tambah');
$routes->post('/admin/kelas/tambah', 'Admin\Kelas::prosesTambah');
$routes->get('/admin/kelas/edit/(:num)', 'Admin\Kelas::edit/$1');
$routes->get('/admin/kelas/hapus/(:num)', 'Admin\Kelas::hapus/$1');

$routes->get('/admin/laporan', 'Admin\Laporan::indeks');

$routes->get('/guru/siswa', 'Guru\Siswa::indeks');
