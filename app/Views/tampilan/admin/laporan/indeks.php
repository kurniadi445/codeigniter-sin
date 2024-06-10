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
    <h1>Data Siswa <small>Data</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('admin/laporan'); ?>"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    </ol>
</section>
<!-- header konten -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List Data Siswa</h3>
                </div>
                <div class="box-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-2">
                                <label style="width: 100%">
                                    <select class="form-control input-sm" name="nisn">
                                        <option selected>Pilih NISN</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-sm-10"></div>
                        </div>
                    </form>
                    <table class="display table table-bordered table-hover" id="tabel-laporan">
                        <thead>
                        <tr>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Tahun Ajaran</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
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
        $('#tabel-laporan').DataTable({
            columnDefs: [
                {
                    orderable: false,
                    searchable: false,
                    targets: 4
                }
            ],
            order: []
        });
    });
</script>
<?= $this->endSection(); ?>
