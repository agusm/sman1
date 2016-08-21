<?php
/**
 * Created by PhpStorm.
 * User: Agus Miswanto
 * Date: 27/12/2015
 * Time: 22.29
 */ ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Gallery
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('operator')?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Daftar Gambar</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box panel panel-default">
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="box-body">
                            <table id="dataTables-example" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th width="15%">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($show_gallery->result() as $r):
                                    ?>
                                    <tr>
                                        <td>
                                            <a href="<?=base_url('uploads/gallery/').$r->gambar?>">
                                            <img src="<?=base_url('uploads/gallery/').$r->gambar?>" width="100px" class="img img-responsive"/>
                                            </a>
                                        </td>
                                        <td><?=$r->judul?></td>
                                        <td><?=date('d/m/Y H:i:s',strtotime($r->create_at))?></td>
                                        <td>
                                            <div class="text-center">
                                                <a href="<?=site_url()?>operator/ubah_gambar/<?=$r->kd_gambar; ?>/<?=$r->slug?>"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                                                <a href="<?=site_url()?>operator/hapus_gambar/<?=$r->kd_gambar; ?>/<?=$r->slug?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.panel-body -->
                </div></div><!-- /.col-->
        </div><!-- ./row -->
    </section><!-- /.content -->
</div>