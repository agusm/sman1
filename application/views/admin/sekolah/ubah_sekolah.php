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
            Profil Sekolah
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('operator')?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Profil Sekolah</li>
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
                    <?php foreach ($show_sekolah->result() as $r): ?>
                        <form action="<?=site_url("operator/proses_ubah_sekolah")?>" enctype="multipart/form-data" method="post" role="form">
                            <input type="hidden" name="kd_pengguna" value="<?=$r->kd_sekolah?>">
                            <div class="box-body">
                                <div class="form-group col-md-6">
                                    <label for="input_Judul">Nama Sekolah (<i>tidak bisa diubah</i>)</label>
                                    <input type="text" name="nama_pengguna" value="<?=$r->nama_sekolah?>" readonly minlength="5" required maxlength="100" class="form-control" id="input_Judul" placeholder="Nama Sekolah">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input_Judul">Alamat</label>
                                    <input type="text" name="alamat" value="<?=$r->alamat?>" maxlength="15" class="form-control" id="input_Judul" placeholder="Alamat Sekolah">
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group col-md-6">
                                    <label for="input_Judul">Kecamatan</label>
                                    <input type="text" name="kecamatan" value="<?=$r->kecamatan?>" minlength="5" required maxlength="100" class="form-control" id="input_Judul" placeholder="Kecamatan">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input_Judul">Kabupaten</label>
                                    <input type="text" name="kabupaten" value="<?=$r->kabupaten?>" maxlength="15" class="form-control" id="input_Judul" placeholder="Kabupaten">
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group col-md-6">
                                    <label for="input_Judul">Provinsi (<i>tidak bisa diubah</i>)</label>
                                    <input type="text" name="provinsi" value="<?=$r->provinsi?>" required readonly maxlength="100" class="form-control" id="input_Judul" placeholder="Provinsi">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input_Judul">Negara (<i>tidak bisa diubah</i>)</label>
                                    <input type="text" name="negara" value="<?=$r->negara?>" readonly minlength="5" maxlength="100" class="form-control" id="input_Judul" placeholder="Negara">
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group col-md-6">
                                    <label for="input_Judul">Kode Pos</label>
                                    <input type="number" name="kode_pos" value="<?=$r->kode_pos?>" maxlength="100" class="form-control" id="input_Judul" placeholder="Kode Pos">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input_Judul">Email </label>
                                    <input type="email" name="email" value="<?=$r->email?>" minlength="5" maxlength="100" class="form-control" id="input_Judul" placeholder="user@email.com">
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group col-md-6">
                                    <label for="input_Judul">Telepon</label>
                                    <input type="text" name="telp" value="<?=$r->telp?>" maxlength="100" class="form-control" id="input_Judul" placeholder="Telepon">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input_Judul">Email </label>
                                    <input type="text" name="fax" value="<?=$r->fax?>" minlength="5" maxlength="100" class="form-control" id="input_Judul" placeholder="FAX">
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group col-md-6">
                                    <label for="input_Judul">Twitter</label>
                                    <input type="text" name="twitter" value="<?=$r->twitter?>" maxlength="100" class="form-control" id="input_Judul" placeholder="http://twitter.com/username">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input_Judul">Facebook </label>
                                    <input type="text" name="facebook" value="<?=$r->facebook?>" minlength="5" maxlength="100" class="form-control" id="input_Judul" placeholder="http://facebook.com/username">
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

