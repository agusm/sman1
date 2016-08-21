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
            Tambah Menu
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('operator')?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Menu</li>
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
                    <form action="<?=site_url("operator/proses_tambah_sub")?>" enctype="multipart/form-data" method="post" role="form">
                        <div class="box-body">
                            <div class="form-group col-md-4">
                                <label for="input_Judul">Menu</label>
                                <select name="kd_parent" class="form-control">
                                    <?php foreach ($show_menu->result() as $m):?>
                                    <option value="<?=$m->kd_menu?>"><?=$m->nama_menu?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="input_Judul">Nama Sub Menu</label>
                                <input type="text" name="nama_sub_menu" value="" class="form-control" id="input_Judul" placeholder="Nama Menu">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="input_Judul">URL</label>
                                <input type="text" name="slug" value="" class="form-control" id="input_Judul" placeholder="<?=site_url('halaman')?>">
                            </div>

                        </div>
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary" >Simpan</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->

                    </form>
                </div>

            </div>

        </div>


    </section>
</div>

