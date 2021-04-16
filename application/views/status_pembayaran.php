<main id="main">
    <section id="contact">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-body">
                        <table class="table">
                            <?php foreach ($transaksi as $tr) : ?>
                                <?php if ($tr->status_pembayaran == 'Selesai') { ?>
                                    <tr>
                                        <th>No Tiket</th>
                                        <td>:</td>
                                        <td><?php echo $tr->no_transaksi ?></td>
                                    </tr>
                                <?php } else { ?>
                                    <tr>
                                        <th>No Tiket</th>
                                        <td>:</td>
                                        <td>Lakukan pembayaran untuk melihat no tiket</td>
                                    </tr>
                                <?php } ?>

                                <tr>
                                    <th>Nama pemesan tiket</th>
                                    <td>:</td>
                                    <td><?php echo $tr->nama ?></td>
                                </tr>

                                <tr>
                                    <th>Tanggal Kunjungan</th>
                                    <td>:</td>
                                    <td><?php echo $tr->tanggal ?></td>
                                </tr>

                                <tr>
                                    <th>Jumlah Anggota</th>
                                    <td>:</td>
                                    <td><?php echo $tr->jumlah_anggota ?></td>
                                </tr>

                                <tr>
                                    <th>Total Pembayaran</th>
                                    <td>:</td>
                                    <td><?php echo number_format($tr->total_pembayaran, 0, ',', '.')  ?></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <?php if ($tr->status_pembayaran == 'Selesai') { ?>
                                            <span style="color: red;">download E-ticket sebagai bukti</span><br>
                                            <a href="<?php echo base_url('home/download_tiket/' . $tr->no_transaksi) ?>" class="btn btn-secondary"><i class="fa fa-download"></i> Download E-Tiket</a>
                                            <a href="<?php echo base_url('home/pembayaran') ?>" class="btn  btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                                        <?php } else { ?>
                                            <a href="<?php echo base_url('home/pembayaran') ?>" class="btn  btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                                        <?php } ?>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card " style="margin-top: 70px">
                        <div class="card-header alert alert-primary">
                            Informasi Pembayaran
                        </div>
                        <div class="card-body text-success">
                            <p>Silakan Melakukan Pembayaran ke No. rekening di bawah ini atas nama Renata Hutasoit</p><br>
                            <p>43243144 --- BNI</p>
                            <p>43243144 --- Mandiri</p>
                            <p>43243144 --- BCA</p>
                            <p>43243144 --- BRI</p>
                            <p>selain dari no rekening di atas maka penipuan</p>

                            <?php
                            if (empty($tr->bukti_pembayaran)) {
                            ?>
                                <button style="width:100%" type="button" class="btn btn-danger btn-sm mt-3" data-toggle="modal" data-target="#exampleModal">
                                    Upload Bukti Pembayaran
                                </button>
                            <?php } elseif ($tr->status_pembayaran == "Sudah Upload") { ?>
                                <button style="width:100%" class="btn btn-sm btn-warning mt-3"><i class="fa fa-clock-o"></i> Menunggu Konfirmasi</button>

                            <?php } else { ?>
                                <button style="width:100%" class="btn btn-sm btn-success mt-3"><i class="fa fa-check"></i> Pembayaran Selesai </button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal upload bukti pembayaran -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="<?php echo base_url('home/pembayaran_upload') ?>" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Upload Bukti Pemnbayaran</label>
                                    <input type="hidden" name="no_transaksi" class="form-control" value="<?php echo $tr->no_transaksi ?>">
                                    <input type="file" name="bukti_pembayaran" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success btn-sm">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</main>