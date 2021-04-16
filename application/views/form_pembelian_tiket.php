<main id="main">
    <section id="contact">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Harga Tiket</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Hari biasa = Rp. 10.000/org</li>
                            <li class="list-group-item">Weekend = Rp. 15.000/org</li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form">
                        <form action="<?= base_url('home/beli_tiket_aksi'); ?>" method="post" role="form" class="gaya-email-form">
                            <h1>Beli tiket</h1>
                            <div class="form-group">
                                <span>Nama Pemesan:</span>
                                <input type="hidden" name="id_user" class="form-control" id="id_user" value="<?= $this->session->userdata('id_user'); ?>" />

                                <input type="text" name="nama" class="form-control" id="nama" placeholder="tulis disini.." value="<?= $this->session->userdata('nama'); ?>" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <span>No whatsapp/hp:</span>
                                <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="tulis disini.." autocomplete="off" />
                            </div>

                            <div class="form-group">
                                <span>Jumlah Anggota:</span>
                                <input type="number" class="form-control" name="jumlah_anggota" id="jumlah_anggota" placeholder="tulis disini.." onkeyup="sum()" />
                            </div>

                            <div class="form-group">
                                <span>Tanggal Kunjungan:</span>
                                <input type="date" class="form-control" name="tanggal" id="tanggal" />
                            </div>

                            <div class="form-group">
                                <span> Total Pembayaran :</span>
                                <input type="number" class="form-control" name="total_pembayaran" id="total_pembayaran" />

                            </div>

                            <div><button type="submit" class="btn btn-info btn-block">Beli</button></div>
                        </form>
                    </div>
                </div>
            </div>

    </section>
</main>
<script>
    function sum() {

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