<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title><?= $tittle; ?></title>

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/admin'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?= base_url('assets/admin'); ?>/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?= base_url('assets/admin'); ?>/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?= base_url('assets/admin'); ?>/css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="<?= base_url('assets/admin'); ?>/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="<?= base_url('assets/admin'); ?>/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?= base_url('assets/admin'); ?>/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?= base_url('assets/admin'); ?>/css/owl.carousel.css" type="text/css">
    <link href="<?= base_url('assets/admin'); ?>/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?= base_url('assets/admin'); ?>/css/fullcalendar.css">
    <link href="<?= base_url('assets/admin'); ?>/css/widgets.css" rel="stylesheet">
    <link href="<?= base_url('assets/admin'); ?>/css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/admin'); ?>/css/style-responsive.css" rel="stylesheet" />
    <link href="<?= base_url('assets/admin'); ?>/css/xcharts.min.css" rel=" stylesheet">
    <link href="<?= base_url('assets/admin'); ?>/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

</head>

<body>
    <!-- container section start -->
    <section id="container" class="">


        <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Sistem Pengelolaan Tiket <span class="lite">Kolam renang yonif batam</span></a>
            <!--logo end-->

            <div class="top-nav notification-row">
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username"><?= $this->session->userdata('nama'); ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a onclick="return confirm('Apakah anda ingin logout?')" href="<?= base_url('home/logout'); ?>"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
        </header>
        <!--header end-->