<main id="main">
    <section id="contact">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <h1>Buat akun</h1>

                    <div class="form">
                        <form action="<?= base_url('home/pendaftaran_akun_aksi'); ?>" method="post" role="form" class="gaya-email-form">
                            <div class="form-group">
                                <span>Nama:</span>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="tulis disini.." value="<?= set_value('nama'); ?>" autocomplete="off" />
                                <?php echo form_error('nama', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>

                            <div class="form-group">
                                <span>Username:</span>
                                <input type="text" class="form-control" name="username" id="username" placeholder="tulis disini.." value="<?= set_value('username'); ?>" autocomplete="off" />
                                <?php echo form_error('username', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>

                            <div class="form-group">
                                <span>Password:</span>
                                <input type="password" class="form-control" name="password" id="password" placeholder="tulis disini.." />
                                <?php echo form_error('password', '<span class=" text-small text-danger">', '</span>') ?>

                            </div>

                            <div class="text-center"><button type="submit" class="btn btn-info">Daftar</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
</main>