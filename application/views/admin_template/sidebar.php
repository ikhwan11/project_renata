<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="fa fa-ticket"></i>
                    <span>Kelola Tiket</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="<?= base_url('admin/e_tiket'); ?>">E-tiket</a></li>
                    <li><a class="" href="<?= base_url('admin/input_tiket'); ?>">Tiket</a></li>
                    <li><a class="" href="<?= base_url('admin/data_tiket'); ?>">Data tiket</a></li>
                </ul>
            </li>
            <li class="active">
                <a class="" href="<?= base_url('pelanggan/'); ?>">
                    <i class="fa fa-users"></i>
                    <span>Data pelanggan</span>
                </a>
            </li>
            <li class="active">
                <a class="" href="<?= base_url('user/'); ?>">
                    <i class="fa fa-user"></i>
                    <span>Kelola User</span>
                </a>
            </li>
            <li class="active">
                <a class="" href="<?= base_url('admin/laporan'); ?>">
                    <i class="fa fa-file-text"></i>
                    <span>Buat laporan</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->