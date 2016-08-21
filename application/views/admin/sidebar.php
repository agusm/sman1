<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?=base_url()?>assets/admin/dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?=$this->session->userdata('nama')?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="<?=site_url('operator')?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?=site_url('operator/sekolah')?>">
                    <i class="fa fa-university"></i> <span>Profil Sekolah</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o"></i>
                    <span>ARTIKEL</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=site_url('operator/artikel')?>"><i class="fa fa-list"></i> Lihat Artikel</a></li>
                    <li><a href="<?=site_url('operator/tambah_artikel')?>"><i class="fa fa-plus"></i> Tambah Artikel</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text-o"></i>
                    <span>KEGIATAN SEKOLAH</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=site_url('operator/kegiatan')?>"><i class="fa fa-list"></i> Lihat Kegiatan Sekolah</a></li>
                    <li><a href="<?=site_url('operator/tambah_kegiatan')?>"><i class="fa fa-plus"></i> Tambah Kegiatan Sekolah</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-exclamation-circle"></i>
                    <span>INFO PENTING</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=site_url('operator/info')?>"><i class="fa fa-list"></i> Lihat Info Penting</a></li>
                    <li><a href="<?=site_url('operator/tambah_info')?>"><i class="fa fa-plus"></i> Tambah Info Penting</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-image"></i>
                    <span>GALLERY</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=site_url('operator/gallery')?>"><i class="fa fa-list"></i> Lihat Daftar Gambar</a></li>
                    <li><a href="<?=site_url('operator/tambah_gallery')?>"><i class="fa fa-plus"></i> Tambah Gambar</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bars"></i>
                    <span>MENU</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=site_url('operator/menu')?>"><i class="fa fa-list"></i> Lihat Menu</a></li>
                    <li><a href="<?=site_url('operator/tambah_menu')?>"><i class="fa fa-plus"></i> Tambah Menu</a></li>
                    <li><a href="<?=site_url('operator/sub_menu')?>"><i class="fa fa-list"></i> Lihat Sub Menu</a></li>
                    <li><a href="<?=site_url('operator/tambah_sub')?>"><i class="fa fa-plus"></i> Tambah Sub Menu</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-sliders"></i>
                    <span>SLIDER</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=site_url('operator/slider')?>"><i class="fa fa-list"></i> Lihat Daftar Slider</a></li>
                    <li><a href="<?=site_url('operator/tambah_slider')?>"><i class="fa fa-plus"></i> Tambah Slider</a></li>
                </ul>
            </li>
            <?php if($this->session->userdata('logged_in')==true && $this->session->userdata('level')=='admin'):?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>PENGGUNA</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=site_url('operator/pengguna')?>"><i class="fa fa-list"></i> Lihat Daftar Pengguna</a></li>
                    <li><a href="<?=site_url('operator/tambah_pengguna')?>"><i class="fa fa-plus"></i> Tambah Pengguna</a></li>
                </ul>
            </li>
            <?php endif;?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>