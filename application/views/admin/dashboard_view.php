<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-ticket"></i> Menu Kelola E-Tiket</h3>
            </div>
        </div>
        <?php

        function hariIndo($hariInggris)
        {
            switch ($hariInggris) {
                case 'Sunday':
                    return 'minggu';
                case 'Monday':
                    return 'senin';
                case 'Tuesday':
                    return 'selasa';
                case 'Wednesday':
                    return 'rabu';
                case 'Thursday':
                    return 'kamis';
                case 'Friday':
                    return 'jum\'at';
                case 'Saturday':
                    return 'sabtu';
                default:
                    return 'hari tidak valid';
            }
        }
        $hariInggris = date('l');
        $hariIndo = hariIndo($hariInggris); ?>

        <div class="row">
            <div class="container">
                <span>
                    <h3>Data tiket masuk <b><?= $hariIndo; ?> <?= date('d-m-Y'); ?></b></h3>
                </span>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama pemesan</th>
                            <th>Jumlah anggota</th>
                            <th>No Hp</th>
                            <th>Total Pembayaran</th>
                            <th>Tanggal Kunjungan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <?php foreach ($tiket_masuk as $tm) : ?>
                        <tbody>
                            <tr>
                                <td><?= $tm->nama; ?></td>
                                <td><?= $tm->jumlah_anggota; ?></td>
                                <td><?= $tm->no_hp; ?></td>
                                <td><?= $tm->total_pembayaran; ?></td>
                                <td><?= $tm->tanggal; ?></td>
                                <td>
                                    <?php if ($tm->status_pembayaran == 'Sudah Upload') { ?>
                                        <a href="<?= base_url('admin/konfirmasi_pembayaran/') . $tm->no_transaksi; ?>" class="btn btn-warning">Konfirmasi</a>
                                    <?php } else { ?>
                                        <a href="#" class="btn btn-success"><i class="fa fa-check"></i> Sudah Di Konfirmasi</a>
                                    <?php } ?>
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