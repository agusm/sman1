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
            Tambah Pengguna
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('operator')?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Pengguna</li>
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
                    <?php foreach ($show_pengguna->result() as $r): ?>
                    <form action="<?=site_url("operator/proses_ubah_pengguna")?>" enctype="multipart/form-data" method="post" role="form">
                        <input type="hidden" name="kd_pengguna" value="<?=$r->kd_pengguna?>">
                        <div class="box-body">
                            <div class="form-group col-md-6">
                                <label for="input_Judul">Nama Pengguna</label>
                                <input type="text" name="nama_pengguna" value="<?=$r->nama_pengguna?>" minlength="5" required maxlength="100" class="form-control" id="input_Judul" placeholder="Nama Pengguna">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="input_Judul">Nomor Telepon</label>
                                <input type="text" name="no_hp" value="<?=$r->no_hp?>" maxlength="15" class="form-control" id="input_Judul" placeholder="08XXX">
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group col-md-6">
                                <label for="input_Judul">Email </label>
                                <input type="email" name="email" value="<?=$r->email?>" required maxlength="100" class="form-control" id="input_Judul" placeholder="Email Pengguna">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="input_Judul">Password (<i>kosongkan jika tidak ingin diubah</i>)</label>
                                <input type="password" name="password" value="" minlength="5" maxlength="100" class="form-control" id="input_Judul" placeholder="Password">
                            </div>
                        </div>

                        <!-- /.box-body -->
                        <div class="col-md-6">
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" >Simpan</button>
                            </div>
                        </div>
                    </form>
                    <?php endforeach;?>
                </div>

            </div>

        </div>


    </section>
</div>

