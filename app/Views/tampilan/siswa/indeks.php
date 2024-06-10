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
    <h1>Master Siswa</h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('siswa'); ?>"><i class="fa fa-dashboard"></i> Master Siswa</a></li>
    </ol>
</section>
<!-- header konten -->
<section class="content">
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">Data Siswa</h3>
        </div>
        <div class="box-body">
            <form>
                <div class="row">
                    <div class="col-sm-2">
                        <label style="width: 100%">
                            <select class="form-control input-sm" name="kelas">
                                <option selected>Pilih kelas</option>
                            </select>
                        </label>
                    </div>
                </div>
            </form>
            <table class="table table-bordered" id="tabel-master-siswa">
                <thead>
                <tr>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Nomor Telepon</th>
                    <th>Tempat Lahir</th>
                    <th>No. KK</th>
                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Tahun Ajaran</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <?php if ($siswa) { ?>
                    <tbody>
                    <?php foreach ($siswa as $s) { ?>
                        <tr>
                            <td><?= $s->nisn; ?></td>
                            <td><?= $s->nama_siswa; ?></td>
                            <td></td>
                            <td><?= $s->tanggal_lahir; ?></td>
                            <td><?= $s->agama; ?></td>
                            <td><?= $s->alamat; ?></td>
                            <td><?= $s->jenis_kelamin; ?></td>
                            <td><?= $s->no_telepon; ?></td>
                            <td></td>
                            <td><?= $s->no_kk; ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a class="btn btn-warning" href="#"><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-danger" href="#"><i class="fa fa-times"></i></a>
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
        $('#tabel-master-siswa').DataTable({
            columnDefs: [
                {
                    orderable: false,
                    searchable: false,
                    targets: 13
                }
            ],
            dom: '<lf<t>ip>',
            oLanguage: {
                sLengthMenu: '_MENU_',
            },
            order: [],
            processing: true,
            responsive: true,
            searching: false
        });
    });
</script>
<?= $this->endSection(); ?>
