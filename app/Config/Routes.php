<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/siswa', 'Siswa::indeks');
$routes->get('/siswa/tambah', 'Siswa::tambah');
$routes->post('/siswa/tambah', 'Siswa::prosesTambah');

$routes->get('/kelas', 'Kelas::indeks');
$routes->get('/kelas/tambah', 'Kelas::tambah');
$routes->post('/kelas/tambah', 'Kelas::prosesTambah');
$routes->get('/kelas/hapus/(:num)', 'Kelas::hapus/$1');
