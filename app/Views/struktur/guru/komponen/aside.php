<aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
        <!-- sidebar panel pengguna -->
        <div class="user-panel">
            <div class="image pull-left">
                <img alt="Foto" class="img-circle" src="<?= base_url('assets/dist/img/nophoto.png'); ?>">
            </div>
            <div class="info pull-left">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar panel pengguna -->
        <!-- menu sidebar -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header text-uppercase">Menu Utama</li>
            <li>
                <a href="<?= site_url('guru/siswa'); ?>">
                    <i class="fa fa-archive"></i>
                    <span>Data Siswa</span>
                </a>
            </li>
        </ul>
        <!-- menu sidebar -->
    </section>
    <!-- sidebar -->
</aside>
