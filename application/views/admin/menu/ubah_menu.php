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
            Ubah Menu
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('operator')?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Ubah Menu</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary col-md-12">
                    <div class="box-header with-border">
                        <div class="label-warning"><?php echo validation_errors(); ?></div>
                    </div>
                    <?php foreach ($show_menu->result() as $r):?>
                    <form action="<?=site_url("operator/proses_ubah_menu")?>" enctype="multipart/form-data" method="post" role="form">
                        <input type="hidden" name="kd_menu" value="<?=$r->kd_menu?>">
                        <div class="box-body">
                            <div class="form-group col-md-6">
                                <label for="input_Judul">Nama Menu</label>
                                <input type="text" name="nama_menu" value="<?=$r->nama_menu?>" class="form-control" id="input_Judul" placeholder="Nama Menu">
                            </div>

                        </div>
                        <div class="box-body">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary" >Simpan</button>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </form>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>
</div>

