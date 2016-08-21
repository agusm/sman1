<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?=$total_artikel?></h3>

                        <p>Artikel</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-newspaper-o"></i>
                    </div>
                    <a href="<?=site_url('operator/artikel')?>" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?=$total_kegiatan?></h3>

                        <p>Kegiatan Sekolah</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-file-text-o"></i>
                    </div>
                    <a href="<?=site_url('operator/kegiatan')?>" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?=$total_info?></h3>

                        <p>Info Penting</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-exclamation-circle"></i>
                    </div>
                    <a href="<?=site_url('operator/info')?>" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?=$total_gallery?></h3>

                        <p>Gallery</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-image"></i>
                    </div>
                    <a href="<?=site_url('operator/gallery')?>" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>