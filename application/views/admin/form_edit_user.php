<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-ticket"></i> Form Edit User</h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php foreach ($user as $u) : ?>
                        <form action="<?= base_url('user/edit_user_aksi'); ?>" method="POST">
                            <div class="form-group">
                                <span class="form-group-addon" id="basic-addon3">Nama :</span>
                                <input type="hidden" class="form-control" autocomplete="off" autofocus name="id_user" id="id_user" value="<?= $u->id_user; ?>">
                                <input type="text" class="form-control" autocomplete="off" autofocus name="nama" id="nama" value="<?= $u->nama; ?>">
                                <?php echo form_error('nama', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                            <div class="form-group">
                                <span class="form-group-addon" id="basic-addon3">Username :</span>
                                <input type="text" class="form-control" autocomplete="off" autofocus name="username" id="username" value="<?= $u->username; ?>">
                                <?php echo form_error('username', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                            <div class="form-group">
                                <span class="form-group-addon" id="basic-addon3">Password :</span>
                                <input type="text" class="form-control" autocomplete="off" autofocus name="password" id="password" value="<?= $u->password; ?>">
                                <?php echo form_error('password', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>

                            <button type="submit" class="btn btn-info">Edit User</button>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</section>