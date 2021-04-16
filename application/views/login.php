<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login pengguna</title>

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/admin'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?= base_url('assets/admin'); ?>/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?= base_url('assets/admin'); ?>/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?= base_url('assets/admin'); ?>/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?= base_url('assets/admin'); ?>/css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/admin'); ?>/css/style-responsive.css" rel="stylesheet" />
    <link href="<?= base_url('assets/admin'); ?>/gaya.css" rel="stylesheet" />

</head>

<body class="signin-img3-body">

    <div class="container">

        <form class="signin-form" action="<?= base_url('home/login'); ?>" method="POST">
            <div class="signin-wrap">
                <p class="signin-img"><i class="icon_lock_alt"></i></p>
                <span class="m2"><?php echo $this->session->flashdata('pesan') ?></span>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" autocomplete="off" autofocus>
                    <?php echo form_error('username', '<div class="text-danger text-small">', '</div>') ?>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <?php echo form_error('password', '<div class="text-danger text-small">', '</div>') ?>
                </div>
                <label class="checkbox">
                    <span class="pull-right"> <a href="<?= base_url('home/pendaftaran_akun'); ?>"> belum punya akun?</a></span>
                </label>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

            </div>
        </form>
    </div>


</body>

</html>