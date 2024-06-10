<?= $this->extend('struktur/dasar'); ?>
<?= $this->section('css'); ?>
<link
    href="<?= base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>"
    rel="stylesheet"
>
<?= $this->endSection(); ?>
<?= $this->section('konten'); ?>
<!-- header konten -->
<section class="content-header">
    <h1>Master Kelas</h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('kelas'); ?>"><i class="fa fa-dashboard"></i> Master Kelas</a></li>
    </ol>
</section>
<!-- header konten -->
<section class="content">
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">List Semua Kelas</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered" id="tabel-master-kelas">
                <thead>
                <tr>
                    <th>Kelas</th>
                    <th>Jumlah Siswa</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <?php if ($kelas) { ?>
                    <tbody>
                    <?php foreach ($kelas as $k) { ?>
                        <tr>
                            <td><?= $k->nama_kelas; ?></td>
                            <td></td>
                            <td>
                                <a
                                    class="btn btn-warning"
                                    href="<?= site_url(['kelas', 'edit', $k->id_kelas]); ?>"
                                ><i class="fa fa-pencil"></i></a>
                                <a
                                    class="btn btn-danger"
                                    href="<?= site_url(['kelas', 'hapus', $k->id_kelas]); ?>"
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
        $('#tabel-master-kelas').DataTable({
            bFilter: false,
            columnDefs: [
                {
                    orderable: false,
                    searchable: false,
                    targets: 2
                }
            ],
            order: []
        });
    });
</script>
<?= $this->endSection(); ?>
