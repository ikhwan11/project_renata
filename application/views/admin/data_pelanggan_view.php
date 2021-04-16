<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-ticket"></i> Data Pelanggan</h3>
                <?php echo $this->session->flashdata('pesan') ?>
            </div>
        </div>
        <!-- search -->
        <div class="row">
            <div class="col-md-4">
                <label for="">Cari data pelanggan :</label>

                <form action="<?= base_url('pelanggan/'); ?>" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for..." name="keyword" autocomplete="off" autofocus>
                        <span class="input-group-btn">
                            <input type="submit" class="btn btn-info" value="Cari" name="submit">
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <!-- search end -->

        <div class="row ">
            <div class="container ">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Tanggal lahir</th>
                            <th>No hp</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($pelanggan as $pl) : ?>
                        <tbody>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $pl['nama']; ?></td>
                                <td><?= $pl['username']; ?></td>
                                <td><?= $pl['password']; ?></td>
                                <td><?= $pl['jenis_kelamin']; ?></td>
                                <td><?= $pl['alamat']; ?></td>
                                <td><?= $pl['tanggal_lahir']; ?></td>
                                <td><?= $pl['no_hp']; ?></td>
                                <td>
                                    <a href="<?= base_url('pelanggan/pelanggan_edit/') . $pl['no_anggota']; ?>" class="btn btn-success"><i class="fa fa-pencil-square-o"></i></a>
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