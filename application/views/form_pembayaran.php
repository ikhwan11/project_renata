<main id="main">
    <section id="contact">
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <?php echo $this->session->flashdata('pesan') ?>
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th>Nama pemesan</th>
                                <th>Jumlah Anggota</th>
                                <th>Total Pembayaran</th>
                                <th>Tanggal Kunjungan</th>
                                <th>Cek status</th>
                                <th>Batal</th>
                            </tr>
                        </thead>
                        <?php foreach ($transaksi as $tr) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $tr->nama; ?></td>
                                    <td><?= $tr->jumlah_anggota; ?></td>
                                    <td><?= $tr->total_pembayaran; ?></td>
                                    <td><?= $tr->tanggal; ?></td>
                                    <td>
                                        <?php
                                        if ($tr->status_pembayaran == "Selesai") { ?>
                                            <span>klik untuk download E-ticket</span>
                                            <a class="btn btn-success" href="<?php echo base_url('home/cek_pembayaran/' . $tr->no_transaksi) ?>"><i class="fa fa-check"></i> Sudah di konfirmasi</a>
                                        <?php } else { ?>
                                            <a href="<?php echo base_url('home/cek_pembayaran/' . $tr->no_transaksi) ?>" class="btn btn-warning"><i class="fa fa-list-alt"></i> Cek</a>

                                        <?php } ?>
                                    </td>

                                    <td>
                                        <?php
                                        if ($tr->status_pembayaran == "Belum Selesai") { ?>
                                            <a onclick="return confirm('Apakah anda ingin membatalkan transaksi?')" class="btn btn-danger" href="<?php echo base_url('home/batal_pembayaran/') . $tr->no_transaksi ?>"><i class="fa fa-times"></i> Batal</a>
                                        <?php } else { ?>
                                            <button type="button" class="btn btn-danger btn_block" data-toggle="modal" data-target="#modalBatal">
                                                <i class="fa fa-times"></i> Batal
                                            </button>
                                        <?php } ?>
                                    </td>

                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>

            <!-- Modal batal-->
            <div class="modal fade" id="modalBatal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Maaf, transaksi ini telah selesai
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Ok</button>
                        </div>
                    </div>
                </div>
            </div>

    </section>
</main>