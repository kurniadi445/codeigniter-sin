<?= $this->extend('struktur/dasar'); ?>
<?= $this->section('konten'); ?>
<!-- header konten -->
<section class="content-header">
    <h1>Tambah Kelas</h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?= site_url('kelas/tambah'); ?>"><i class="fa fa-dashboard"></i> Tambah Kelas</a>
        </li>
    </ol>
</section>
<!-- header konten -->
<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Input Kelas</h3>
        </div>
        <div class="box-body">
            <form method="post">
                <div class="form-group">
                    <label for="masukan-kelas">Kelas</label>
                    <input class="form-control" id="masukan-kelas" name="kelas" type="text">
                </div>
                <div class="form-group pull-right">
                    <button class="btn btn-primary" type="submit">Simpan <i class="fa fa-send-o"></i></button>
                </div>
            </form>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>