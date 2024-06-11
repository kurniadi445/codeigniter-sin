<?= $this->extend('struktur/admin/dasar'); ?>
<?= $this->section('css'); ?>
<link href="<?= base_url('assets/bower_components/select2/dist/css/select2.min.css'); ?>" rel="stylesheet">
<?= $this->endSection(); ?>
<?= $this->section('konten'); ?>
<!-- header konten -->
<section class="content-header">
    <h1>Pendaftaran Siswa</h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('admin/siswa/tambah'); ?>"><i class="fa fa-dashboard"></i> Pendaftaran Siswa</a>
        </li>
    </ol>
</section>
<!-- header konten -->
<section class="content">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Input Data Siswa</h3>
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
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="masukan-nisn">NISN</label>
                        <input class="form-control" id="masukan-nisn" name="nisn" type="text">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="masukan-nama-siswa">Nama Siswa</label>
                        <input class="form-control" id="masukan-nama-siswa" name="nama-siswa" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="pemilih-kelas">Kelas</label>
                        <select class="form-control" id="pemilih-kelas" name="kelas">
                            <option selected>Pilih kelas</option>
                            <?php foreach ($kelas as $k) { ?>
                                <option value="<?= $k->id_kelas; ?>"><?= $k->nama_kelas; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="area-teks-alamat">Alamat</label>
                        <textarea class="form-control" id="area-teks-alamat" name="alamat" rows="4"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="pemilih-agama">Agama</label>
                        <select class="form-control" id="pemilih-agama" name="agama">
                            <option selected>Pilih agama</option>
                            <option>Buddha</option>
                            <option>Hindu</option>
                            <option>Islam</option>
                            <option>Katolik</option>
                            <option>Khonghucu</option>
                            <option>Protestan</option>
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
                            >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Jenis Kelamin</label>
                        <div class="radio">
                            <label>
                                <input name="jenis-kelamin" type="radio" value="Laki-laki">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input name="jenis-kelamin" type="radio" value="Perempuan">
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
                            <input class="form-control" id="masukan-nomor-telepon" name="nomor-telepon" type="text">
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
                                <option value="<?= $t->id_tempat_lahir; ?>"><?= $t->nama_tempat_lahir; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="masukan-no-kk">No. KK</label>
                        <input class="form-control" id="masukan-no-kk" name="no-kk" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="masukan-nama-ayah">Nama Ayah</label>
                        <input class="form-control" id="masukan-nama-ayah" name="nama-ayah" type="text">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="masukan-nama-ibu">Nama Ibu</label>
                        <input class="form-control" id="masukan-nama-ibu" name="nama-ibu" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="masukan-tahun-ajaran">Tahun Ajaran</label>
                        <input class="form-control" id="masukan-tahun-ajaran" name="tahun-ajaran" type="text">
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
<script>
    'use strict';

    $(function () {
        $('#pemilih-tempat-lahir').select2({
            placeholder: 'Pilih tempat lahir',
            tags: true
        });
    });
</script>
<?= $this->endSection('js'); ?>
