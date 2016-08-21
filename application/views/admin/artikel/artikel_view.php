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
            Data Artikel
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('operator')?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Artikel</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box panel panel-default">
                    <!-- /.panel-heading -->
                    <div class="panel-body">
<!--                            <div class="box-header">-->
<!--                                <h3 class="box-title">Data Artikel</h3>-->
<!--                            </div>-->
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="dataTables-example" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>URL / Slug</th>
                                        <th>Tanggal</th>
                                        <th>Penulis</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($show_artikel->result() as $r):
                                        ?>
                                        <tr>
                                            <td><?=$r->judul?></td>
                                            <td><a target="_blank" href="<?=site_url('artikel')?>/<?=$r->slug?>"><?=site_url('artikel')?>/<?=$r->slug?></a></td>
                                            <td><?=date('d/m/Y H:i:s',strtotime($r->create_at))?></td>
                                            <td><?=$r->nama_pengguna?></td>
                                            <td>
                                                <div class="text-center">
                                                    <a href="<?=site_url()?>operator/ubah_artikel/<?=$r->kd_artikel; ?>/<?=$r->slug?>"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                                                    <a href="<?=site_url()?>operator/hapus_artikel/<?=$r->kd_artikel; ?>/<?=$r->slug?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
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