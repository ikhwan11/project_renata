<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-ticket"></i> Data Tiket</h3>
                <?php echo $this->session->flashdata('pesan') ?>
            </div>
        </div>
        <!-- search -->
        <div class="row">
            <div class="col-md-4">
                <label for="">Cari data tiket :</label>

                <form action="<?= base_url('admin/data_tiket'); ?>" method="POST">
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
                            <th>Nama pemesan</th>
                            <th>Jumlah anggota</th>
                            <th>Tanggal Kunjungan</th>
                            <th>Total Pembayaran</th>
                            <th>Jenis tiket</th>
                        </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($tiket as $tm) : ?>
                        <tbody>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $tm['nama']; ?></td>
                                <td><?= $tm['jumlah_anggota']; ?></td>
                                <td><?= $tm['tanggal']; ?></td>
                                <td><?= $tm['total_pembayaran']; ?></td>
                                <td><?= $tm['jenis_tiket']; ?></td>
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