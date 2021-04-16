<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-ticket"></i> Konfirmasi Pembayaran </h3>
            </div>
        </div>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form method="POST" action="<?php echo base_url('admin/cek_pembayaran') ?>" enctype="multipart/form-data">
                        <?php foreach ($konfirmasi as $konfirm) : ?>

                            <a class="btn btn-success" href="<?php echo base_url('admin/download_pembayaran/' . $konfirm->no_transaksi) ?>"><i class="fa fa-download"></i> Download Bukti Pembayaran</a>
                            <hr>

                            <div class="input-group">
                                <label>Upload E-ticket :</label>
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-ticket"></i></span>
                                <input type="file" class="form-control" aria-describedby="basic-addon1" id="tiket" name="tiket">
                            </div>
                            <hr>

                            <div class="custom-control custom-switch ml-5">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1" value="Selesai" name="status_pembayaran">
                                <input type="hidden" class="custom-control-input" value="<?php echo $konfirm->no_transaksi ?>" name="no_transaksi">
                                <label class="custom-control-label" for="customSwitch1"> Konfirmasi Pembayaran</label>
                            </div>

                            <br>
                            <button type="submit" class="btn btn-block btn-info">Simpan</button>

                        <?php endforeach; ?>
                    </form>
                </div>
            </div>
        </div>

    </section>
</section>