<!DOCTYPE html>
<html lang="id">
<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="x-ua-compatible">
    <meta content="initial-scale=1, width=device-width" name="viewport">
    <!-- meta -->
    <title>Sistem Informasi Nilai</title>
    <!-- css -->
    <link
        href="<?= base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>"
        rel="stylesheet"
    >
    <link
        href="<?= base_url('assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>"
        rel="stylesheet"
    >
    <link href="<?= base_url('assets/bower_components/Ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/dist/css/AdminLTE.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/dist/css/skins/_all-skins.min.css'); ?>" rel="stylesheet">
    <?= $this->renderSection('css'); ?>
    <!-- css -->
    <!-- js -->
    <script src="<?= base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bower_components/jquery-ui/jquery-ui.min.js'); ?>"></script>
    <!-- js -->
    <!-- font -->
    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"
        rel="stylesheet"
    >
    <!-- font -->
    <script>
        const site_url = window.location.origin;
    </script>
</head>
<body class="hold-transition sidebar-collapse sidebar-mini skin-purple-light">
<div class="wrapper">
    <!-- header -->
    <?= $this->include('struktur/guru/komponen/header'); ?>
    <!-- header -->
    <!-- aside -->
    <?= $this->include('struktur/guru/komponen/aside'); ?>
    <!-- aside -->
    <!-- pembungkus konten -->
    <div class="content-wrapper">
        <?= $this->renderSection('konten'); ?>
    </div>
    <!-- pembungkus konten -->
</div>
<!-- js -->
<script src="<?= base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/dist/js/adminlte.min.js'); ?>"></script>
<?= $this->renderSection('js'); ?>
<!-- js -->
</body>
