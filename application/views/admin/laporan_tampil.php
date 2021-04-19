<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="<?php echo base_url('assets/admin') ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets/admin') ?>/css/bootstrap-theme.css" rel="stylesheet">
        <title>Laporan Akhir Periode</title>
    </head>

    <body>
        <section>
            <div class="container">

                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                <span>
                                    <p>Kolam renang Yonif Batam</p>
                                    <p>Tembesi, Kec. Sagulung, Kota Batam, Kepulauan Riau 29424</p>
                                </span>
                            </th>
                            <th>
                                <h3 class="text-right">Laporan penjualan tiket Bulan <?= date('M Y'); ?></h3>
                            </th>
                        </tr>
                    </thead>
                </table><br>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pembeli</th>
                            <th>Tanggal Kunjungan</th>
                            <th>Jumlah Anggota</th>
                            <th>Total Pembayaran</th>
                        </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($laporan as $lp) : ?>
                        <tbody>
                            <tr>
                                <th><?= $no++; ?></th>
                                <th><?= $lp->nama; ?></th>
                                <th><?= $lp->tanggal; ?></th>
                                <th><?= $lp->jumlah_anggota; ?></th>
                                <th><?= $lp->total_pembayaran; ?></th>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>


            </div>
        </section>

        <script type="text/javascript">
            window.print();
        </script>
    </body>

    </html>
</body>

</html>