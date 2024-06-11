<?= $this->extend('struktur/admin/dasar'); ?>
<?= $this->section('konten'); ?>
<!-- header konten -->
<section class="content-header">
    <h1>Mata Pelajaran</h1>
    <ol class="breadcrumb">
        <li>
            <a
                href="<?= site_url('admin/mata-pelajaran') ?>"
            ><i class="fa fa-dashboard"></i> Mata Pelajaran</a>
        </li>
    </ol>
</section>
<!-- header konten -->
<section class="content">
    <?php if (session()->has('berhasil')) { ?>
        <div class="alert alert-success"><?= session('berhasil'); ?></div>
    <?php } elseif (session()->has('kesalahan')) { ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session('kesalahan') as $k) { ?>
                    <li><?= $k; ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Input Mata Pelajaran</h3>
        </div>
        <div class="box-body">
            <form method="post">
                <div class="form-group">
                    <label for="masukan-nama-mata-pelajaran">Nama Mata Pelajaran</label>
                    <input class="form-control" id="masukan-nama-mata-pelajaran" name="nama-mata-pelajaran" type="text">
                </div>
                <div class="form-group">
                    <label for="masukan-kkm">KKM</label>
                    <input class="form-control" id="masukan-kkm" name="kkm" type="number">
                </div>
                <div class="form-group">
                    <label class="form-label" for="area-teks-deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="area-teks-deskripsi" name="deskripsi"></textarea>
                </div>
                <div class="form-group pull-right">
                    <button class="btn btn-primary" type="submit">Simpan <i class="fa fa-send-o"></i></button>
                </div>
            </form>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>
