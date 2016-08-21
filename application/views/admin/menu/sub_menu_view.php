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
            Sub Menu
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('operator')?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Daftar Sub Menu</li>
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
                                    <th>Nama Sub Menu</th>
                                    <th>Menu</th>
                                    <th>URL</th>
                                    <th width="15%">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($show_sub_menu->result() as $r):
                                    ?>
                                    <tr>
                                        <td><?=$r->nama_sub_menu?></td>
                                        <td><?=$r->nama_menu?></td>
                                        <td><?=$r->slug?></td>
                                        <td>
                                            <div class="text-center">
                                                <a href="<?=site_url()?>operator/ubah_sub/<?=$r->kd_sub_menu; ?>"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                                                <a href="<?=site_url()?>operator/hapus_sub/<?=$r->kd_sub_menu; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
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