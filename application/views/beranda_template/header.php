<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $tittle; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/beranda'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/beranda'); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/beranda'); ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/beranda'); ?>/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/beranda'); ?>/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url('assets/beranda'); ?>/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/beranda'); ?>/css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/beranda'); ?>/css/gaya.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header-transparent">
        <div class="container">

            <div id="logo" class="pull-left">
                <a href="<?= base_url('home/'); ?>">KOLAM RENANG YONIF</a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="<?= base_url('home/'); ?>">Home</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#kontak">Lokasi</a></li>

                    <?php if ($this->session->userdata('nama')) { ?>
                        <li><a href="<?= base_url('home/beli_tiket'); ?>">Tiket</a></li>
                        <li><a href="<?= base_url('home/Pembayaran'); ?>">Pembayaran</a></li>
                        <li><a href="<?= base_url('home/pendaftaran'); ?>">Jadi Anggota</a></li>
                        <li><a onclick="return confirm('Apakah anda ingin logout?')" href="<?php echo base_url('home/logout') ?>"><?php echo $this->session->userdata('nama') ?><span> | Logout</span></a> </li>
                    <?php } else { ?>
                        <li><a href="<?= base_url('home/login'); ?>">Login</a></li>
                    <?php } ?>

                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- End Header -->