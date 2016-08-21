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
            Ubah Password
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('operator')?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Ubah Password</li>
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
                        <form action="<?=site_url("operator/proses_ubah_password")?>" enctype="multipart/form-data" method="post" role="form">
                            <input type="hidden" name="kd_pengguna" value="<?=$r->kd_pengguna?>">
                            <div class="box-body">
                                <div class="form-group col-md-6">
                                    <label for="input_Judul">Email (<i>tidak bisa diubah</i>)</label>
                                    <input type="text" name="email" value="<?=$r->email?>" readonly minlength="5" required maxlength="100" class="form-control" id="input_Judul" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input_Judul">Password Baru </label>
                                    <input type="password" name="new_password" value="" required maxlength="100" class="form-control" id="input_Judul" placeholder="******">
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group col-md-6">
                                    <label for="input_Judul">Password Lama</label>
                                    <input type="password" name="old_password" value="" maxlength="15" class="form-control" id="input_Judul" placeholder="******">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input_Judul">Konfirmasi Password Baru</label>
                                    <input type="password" name="pass_conf" value="" minlength="5" maxlength="100" class="form-control" id="input_Judul" placeholder="******">
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

