<?= $this->extend('struktur/admin/dasar'); ?>
<?= $this->section('konten'); ?>
<!-- header konten -->
<section class="content-header">
    <h1>Tambah Guru</h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('admin/guru/tambah'); ?>"><i class="fa fa-dashboard"></i> Tambah Guru</a>
        </li>
    </ol>
</section>
<!-- header konten -->
<section class="content">
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Input Data Guru</h3>
        </div>
        <div class="box-body">
            <form method="post">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="masukan-nip">NIP</label>
                        <input class="form-control" id="masukan-nip" name="nip" type="text">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="masukan-nama-guru">Nama Guru</label>
                        <input class="form-control" id="masukan-nama-guru" name="nama-guru" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="pemilih-kelas">Kelas</label>
                        <select class="form-control" id="pemilih-kelas" name="kelas">
                            <option selected>Pilih kelas</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="area-teks-alamat">Alamat</label>
                        <textarea class="form-control" id="area-teks-alamat" name="alamat" rows="4"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="masukan-status">Status</label>
                        <input class="form-control" id="masukan-status" name="status" type="text">
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
                        <label for="masukan-email">Email</label>
                        <input class="form-control" id="masukan-email" name="email" type="email">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="masukan-jabatan">Jabatan</label>
                        <input class="form-control" id="masukan-jabatan" name="jabatan" type="text">
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
