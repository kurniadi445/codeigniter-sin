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
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-user"></i>
                    <span>Siswa</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?= site_url('siswa/tambah'); ?>">
                            <i class="fa fa-circle-o text-red"></i>
                            <span>Pendaftaran Siswa</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('siswa'); ?>">
                            <i class="fa fa-circle-o text-red"></i>
                            <span>Master Siswa</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- menu sidebar -->
    </section>
    <!-- sidebar -->
</aside>
