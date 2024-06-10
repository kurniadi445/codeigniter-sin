<?= $this->extend('struktur/admin/dasar'); ?>
<?= $this->section('css'); ?>
<link
    href="<?= base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>"
    rel="stylesheet"
>
<?= $this->endSection(); ?>
<?= $this->section('konten'); ?>
<!-- header konten -->
<section class="content-header">
    <h1>Master Guru</h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('admin/guru'); ?>"><i class="fa fa-dashboard"></i> Master Guru</a></li>
    </ol>
</section>
<!-- header konten -->
<section class="content">
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">List Data Guru</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered" id="tabel-master-guru">
                <thead>
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Jenis Kelamin</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <?php if ($guru) { ?>
                    <tbody>
                    <?php foreach ($guru as $g) { ?>
                        <tr>
                            <td><?= $g->nip; ?></td>
                            <td><?= $g->nama_guru; ?></td>
                            <td><?= $g->alamat; ?></td>
                            <td></td>
                            <td><?= $g->jenis_kelamin; ?></td>
                            <td><?= $g->no_telepon; ?></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a class="btn btn-warning" href="#"><i class="fa fa-pencil"></i></a>
                                <a
                                    class="btn btn-danger"
                                    href="<?= site_url(['admin', 'guru', 'hapus', $g->id_guru]); ?>"
                                ><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>
<?= $this->section('js'); ?>
<script src="<?= base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
<script>
    'use strict';

    $(function () {
        $('#tabel-master-guru').DataTable({
            columnDefs: [
                {
                    orderable: false,
                    targets: [2, 5]
                },
                {
                    orderable: false,
                    searchable: false,
                    targets: 8
                }
            ],
            order: []
        });
    });
</script>
<?= $this->endSection(); ?>
