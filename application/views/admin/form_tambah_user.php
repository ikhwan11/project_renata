<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-ticket"></i> Form Tambah User</h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="<?= base_url('user/tambah_user_aksi'); ?>" method="POST">
                        <div class="form-group">
                            <span class="form-group-addon" id="basic-addon3">Nama :</span>
                            <input type="text" class="form-control" autocomplete="off" autofocus name="nama" id="nama" value="<?= set_value('nama'); ?>">
                            <?php echo form_error('nama', '<span class=" text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <span class="form-group-addon" id="basic-addon3">Username :</span>
                            <input type="text" class="form-control" autocomplete="off" autofocus name="username" id="username" value="<?= set_value('username'); ?>">
                            <?php echo form_error('username', '<span class=" text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <span class="form-group-addon" id="basic-addon3">Password :</span>
                            <input type="text" class="form-control" autocomplete="off" autofocus name="password" id="password" value="<?= set_value('password'); ?>">
                            <?php echo form_error('password', '<span class=" text-small text-danger">', '</span>') ?>
                        </div>

                        <button type="submit" class="btn btn-info">Tambah User</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>