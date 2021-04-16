<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-ticket"></i> Form Input Tiket Manual</h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="<?= base_url('admin/input_tiket_aksi'); ?>" method="POST">
                        <div class="form-group">
                            <span class="form-group-addon" id="basic-addon3">No tiket :</span>
                            <input type="text" class="form-control" autocomplete="off" autofocus name="no_tiket" id="no_tiket" value="<?= set_value('no_tiket'); ?>">
                            <?php echo form_error('no_tiket', '<span class=" text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <span class="form-group-addon" id="basic-addon3">Nama :</span>
                            <input type="text" class="form-control" autocomplete="off" name="nama" id="nama" value="<?= set_value('nama'); ?>">
                            <?php echo form_error('nama', '<span class=" text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <span class="form-group-addon" id="basic-addon3">Jumlah anggota :</span>
                            <input type="number" name="jumlah_anggota" id="jumlah_anggota" class="form-control" onkeyup="total()" value="<?= set_value('jumlah_anggota'); ?>">
                            <?php echo form_error('jumlah_anggota', '<span class=" text-small text-danger">', '</span>') ?>
                        </div>
                        <div class=" form-group">
                            <span class="form-group-addon" id="basic-addon3">Tanggal :</span>
                            <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= set_value('tanggal'); ?>">
                            <?php echo form_error('tanggal', '<span class=" text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <span class="form-group-addon" id="basic-addon3">Total Pembayaran :</span>
                            <input type="number" name="total_pembayaran" id="total_pembayaran" class="form-control" autocomplete="off" value="<?= set_value('total_pembayaran'); ?>">
                            <?php echo form_error('total_pembayaran', '<span class=" text-small text-danger">', '</span>') ?>
                        </div>

                        <button type="submit" class="btn btn-info">Submit tiket</button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function total() {

                var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
                namahari = namahari.split(" ");

                var tgl = new Date();
                var hari = tgl.getDay();

                var anggota = document.getElementById('jumlah_anggota').value;

                if (namahari[hari] == 'Sabtu') {
                    var harga = 15000;
                } else if (namahari[hari] == 'Minggu') {
                    var harga = 15000;
                } else {
                    var harga = 10000;
                }

                var jumlah = harga * parseInt(anggota);

                if (!isNaN(jumlah)) {
                    document.getElementById('total_pembayaran').value = jumlah;
                }
            }
        </script>
    </section>
</section>