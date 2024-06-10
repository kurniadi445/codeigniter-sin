<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/siswa', 'Siswa::indeks');
$routes->get('/siswa/tambah', 'Siswa::tambah');
