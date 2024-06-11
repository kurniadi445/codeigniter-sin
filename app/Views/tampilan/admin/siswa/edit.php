<?= $this->extend('struktur/admin/dasar'); ?>
<?= $this->section('css'); ?>
<link href="<?= base_url('assets/bower_components/select2/dist/css/select2.min.css'); ?>" rel="stylesheet">
<link
    href="<?= base_url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>"
    rel="stylesheet"
>
<?= $this->endSection(); ?>
<?= $this->section('konten'); ?>
<!-- header konten -->
<section class="content-header">
    <h1>Edit Siswa</h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('admin/siswa/edit'); ?>"><i class="fa fa-dashboard"></i> Edit Siswa</a>
        </li>
    </ol>
</section>
<!-- header konten -->
<section class="content">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Data Siswa</h3>
        </div>
        <div class="box-body">
            <form method="post">
                <?php if (session()->has('kesalahan')) { ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php foreach (session('kesalahan') as $k) { ?>
                                <li><?= $k; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
                <input name="_method" type="hidden" value="PUT">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="masukan-nisn">NISN</label>
                        <input
                            class="form-control"
                            id="masukan-nisn"
                            name="nisn"
                            readonly
                            type="text"
                            value="<?= $siswa->nisn; ?>"
                        >
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="masukan-nama-siswa">Nama Siswa</label>
                        <input
                            class="form-control"
                            id="masukan-nama-siswa"
                            name="nama-siswa"
                            type="text"
                            value="<?= $siswa->nama_siswa ?>"
                        >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="pemilih-kelas">Kelas</label>
                        <select class="form-control" id="pemilih-kelas" name="kelas">
                            <option selected>Pilih kelas</option>
                            <?php foreach ($kelas as $k) { ?>
                                <?php if ($siswa->id_kelas === $k->id_kelas) { ?>
                                    <option selected value="<?= $k->id_kelas; ?>"><?= $k->nama_kelas; ?></option>
                                <?php } else { ?>
                                    <option value="<?= $k->id_kelas; ?>"><?= $k->nama_kelas; ?></option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="area-teks-alamat">Alamat</label>
                        <textarea
                            class="form-control"
                            id="area-teks-alamat"
                            name="alamat"
                            rows="4"
                        ><?= $siswa->alamat; ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="pemilih-agama">Agama</label>
                        <select class="form-control" id="pemilih-agama" name="agama">
                            <option>Pilih agama</option>
                            <option <?= $siswa->agama === 'Buddha' ? 'selected' : ''; ?>>Buddha</option>
                            <option <?= $siswa->agama === 'Hindu' ? 'selected' : ''; ?>>Hindu</option>
                            <option <?= $siswa->agama === 'Islam' ? 'selected' : ''; ?>>Islam</option>
                            <option <?= $siswa->agama === 'Katolik' ? 'selected' : ''; ?>>Katolik</option>
                            <option <?= $siswa->agama === 'Khonghucu' ? 'selected' : ''; ?>>Khonghucu</option>
                            <option <?= $siswa->agama === 'Protestan' ? 'selected' : ''; ?>>Protestan</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="masukan-tanggal-lahir">Tanggal Lahir</label>
                        <div class="date input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input
                                class="form-control pull-right"
                                data-date-format="yyyy-mm-dd"
                                id="masukan-tanggal-lahir"
                                name="tanggal-lahir"
                                type="text"
                                value="<?= $siswa->tanggal_lahir; ?>"
                            >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Jenis Kelamin</label>
                        <div class="radio">
                            <label>
                                <input
                                    <?= $siswa->jenis_kelamin === 'Laki-laki' ? 'checked' : ''; ?>
                                    name="jenis-kelamin"
                                    type="radio"
                                    value="Laki-laki"
                                >
                                Laki-Laki
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input
                                    <?= $siswa->jenis_kelamin === 'Perempuan' ? 'checked' : ''; ?>
                                    name="jenis-kelamin"
                                    type="radio"
                                    value="Perempuan"
                                >
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="masukan-nomor-telepon">Nomor Telepon</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <input
                                class="form-control"
                                id="masukan-nomor-telepon"
                                name="nomor-telepon"
                                type="text"
                                value="<?= $siswa->no_telepon; ?>"
                            >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="pemilih-tempat-lahir">Tempat Lahir</label>
                        <select
                            class="form-control select2"
                            id="pemilih-tempat-lahir"
                            name="tempat-lahir"
                            style="width: 100%"
                        >
                            <?php foreach ($tempat_lahir as $t) { ?>
                                <?php if ($siswa->id_tempat_lahir === $t->id_tempat_lahir) { ?>
                                    <option
                                        selected
                                        value="<?= $t->id_tempat_lahir; ?>"
                                    ><?= $t->nama_tempat_lahir; ?></option>
                                <?php } else { ?>
                                    <option value="<?= $t->id_tempat_lahir; ?>"><?= $t->nama_tempat_lahir; ?></option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="masukan-no-kk">No. KK</label>
                        <input
                            class="form-control"
                            id="masukan-no-kk"
                            name="no-kk"
                            type="text"
                            value="<?= $siswa->no_kk ?>"
                        >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="masukan-nama-ayah">Nama Ayah</label>
                        <input
                            class="form-control"
                            id="masukan-nama-ayah"
                            name="nama-ayah"
                            type="text"
                            value="<?= $siswa->nama_ayah; ?>"
                        >
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="masukan-nama-ibu">Nama Ibu</label>
                        <input
                            class="form-control"
                            id="masukan-nama-ibu"
                            name="nama-ibu"
                            type="text"
                            value="<?= $siswa->nama_ibu; ?>"
                        >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="masukan-tahun-ajaran">Tahun Ajaran</label>
                        <input
                            class="form-control"
                            id="masukan-tahun-ajaran"
                            name="ajaran"
                            type="number"
                            value="<?= $siswa->tahun_ajaran; ?>"
                        >
                    </div>
                    <div class="form-group col-sm-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="pull-right">
                            <button class="btn btn-success" type="submit">Simpan <i class="fa fa-send"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>
<?= $this->section('js'); ?>
<script src="<?= base_url('assets/bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>
<script src="<?= base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
<script>
    'use strict';

    $(function () {
        $('#pemilih-tempat-lahir').select2({
            placeholder: 'Pilih tempat lahir',
            tags: true
        });

        $('#masukan-tanggal-lahir').datepicker({
            autoclose: true
        })
    });
</script>
<?= $this->endSection('js'); ?>
