<main id="main">
    <section id="contact">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <h1>Daftar anggota</h1>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <div class="form">
                        <form action="<?= base_url('home/pendaftaran_aksi'); ?>" method="post" role="form" class="gaya-email-form">
                            <div class="form-group">
                                <span>ID User:</span>
                                <input type="text" name="id_user" class="form-control" id="id_user" value="<?= $this->session->userdata('id_user'); ?>" readonly />
                                <?php echo form_error('id_user', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>

                            <div class="form-group">
                                <span>Nama:</span>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="tulis disini.." value="<?= $this->session->userdata('nama'); ?>" autocomplete="off" />
                                <?php echo form_error('nama', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>

                            <div class="form-group">
                                <span>No Hp:</span>
                                <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="tulis disini.." value="<?= set_value('no_hp'); ?>" autocomplete="off" />
                                <?php echo form_error('no_hp', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>

                            <div class="form-group">
                                <span>tangal lahir:</span>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>" autocomplete="off" />
                                <?php echo form_error('tanggal_lahir', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                            <div class="form-group">
                                <span>E-mail:</span>
                                <input type="email" class="form-control" name="email" id="email" placeholder="tulis disini.." value="<?= set_value('email'); ?>" autocomplete="off" />
                                <?php echo form_error('email', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>

                            <div class="form-group">
                                <span>jenis Kelamin:</span>
                                <select type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="">pilih..</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <?php echo form_error('jenis_kelamin', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>

                            <div class="form-group">
                                <span>Alamat:</span>
                                <textarea class="form-control" id="alamat" name="alamat" rows="5" placeholder="tulis disini.."><?= set_value('alamat'); ?></textarea>
                                <?php echo form_error('alamat', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>

                            <div class="text-center"><button type="submit" class="btn btn-info">Daftar</button></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->
</main>