<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-ticket"></i> Form Edit Pelanggan</h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php foreach ($pelanggan as $pl) : ?>
                        <form action="<?= base_url('pelanggan/pelanggan_edit_aksi'); ?>" method="POST">
                            <div class="form-group">
                                <span class="form-group-addon" id="basic-addon3">Nama :</span>
                                <input type="hidden" class="form-control" name="no_anggota" id="no_anggota" value="<?= $pl->no_anggota; ?>">
                                <input type="hidden" class="form-control" name="id_user" id="id_user" value="<?= $pl->id_user; ?>">
                                <input type="text" class="form-control" autocomplete="off" name="nama" id="nama" value="<?= $pl->nama; ?>">
                                <?php echo form_error('nama', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                            <div class="form-group">
                                <span class="form-group-addon" id="basic-addon3">No hp :</span>
                                <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?= $pl->no_hp; ?>">
                                <?php echo form_error('no_hp', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                            <div class=" form-group">
                                <span class="form-group-addon" id="basic-addon3">E-mail :</span>
                                <input type="email" class="form-control" name="email" id="email" value="<?= $pl->email; ?>">
                                <?php echo form_error('email', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                            <div class=" form-group">
                                <span class="form-group-addon" id="basic-addon3">Username :</span>
                                <input type="text" class="form-control" name="username" id="username" value="<?= $pl->username; ?>">
                                <?php echo form_error('username', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                            <div class=" form-group">
                                <span class="form-group-addon" id="basic-addon3">Password :</span>
                                <input type="text" class="form-control" name="password" id="password" value="<?= $pl->password; ?>">
                                <?php echo form_error('password', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                            <div class="form-group">
                                <span class="form-group-addon" id="basic-addon3">Jenis Kelamin :</span>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                    <option value="<?= $pl->jenis_kelamin; ?>"><?= $pl->jenis_kelamin; ?></option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <?php echo form_error('jenis_kelamin', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                            <div class="form-group">
                                <span class="form-group-addon" id="basic-addon3">Tanggal Lahir :</span>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="<?= $pl->tanggal_lahir; ?>">
                                <?php echo form_error('tanggal_lahir', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                            <div class="form-group">
                                <span class="form-group-addon" id="basic-addon3">Alamat :</span>
                                <textarea type="date" name="alamat" id="alamat" class="form-control"><?= $pl->alamat; ?></textarea>
                                <?php echo form_error('alamat', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>

                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</section>