<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Laporan Tiket</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="<?php echo base_url('admin/laporan_tampil') ?>">
                    <div class="form-group">
                        <label>Dari Tanggal</label>
                        <input type="date" name="dari" class="form-control">
                        <?php echo form_error('dari', '<span class=" text-small text-danger">', '</span>') ?>
                    </div>

                    <div class="form-group">
                        <label>Sampai Tanggal</label>
                        <input type="date" name="sampai" class="form-control">
                        <?php echo form_error('sampai', '<span class=" text-small text-danger">', '</span>') ?>
                    </div>
                    <button type="submit" class="btn tn-sm btn-info"><i class="fa fa-print"></i> Proses Laporan</button>
                </form>
            </div>
        </div>
    </section>
</section>