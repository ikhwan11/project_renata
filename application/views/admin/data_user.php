<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-ticket"></i> Data User</h3>
                <a href="<?= base_url('user/tambah_user'); ?>" class="btn btn-info btn-lg"><i class="fa fa-plus"></i> <b>Tambah User</b></a>
                <?php echo $this->session->flashdata('pesan') ?>
            </div>
        </div>

        <div class="row">
            <div class="container ">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama user</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($user as $u) : ?>
                        <tbody>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $u->nama; ?></td>
                                <td><?= $u->username; ?></td>
                                <td><?= $u->password; ?></td>
                                <td>
                                    <a href="<?= base_url('user/edit_user/') . $u->id_user; ?>" class="btn btn-success">Edit</a>
                                    <a onclick="confirm('Apakah anda ingin menghapus?')" href="<?= base_url('user/hapus_user/') . $u->id_user; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>

    </section>
    <!--main content end-->
</section>
<!-- container section start -->