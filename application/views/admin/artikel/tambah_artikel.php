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
            Tambah Artikel
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('operator')?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Artikel</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary col-md-12">
                    <div class="box-header with-border">
                        <div class="label-warning"><?php if($this->session->flashdata('error')){echo $this->session->flashdata('error');} ?></div>
                    </div>
                    <form action="<?=site_url("operator/proses_tambah_artikel")?>" enctype="multipart/form-data" method="post" role="form">
                        <input type="hidden" name="kd_kategori" value="1">
                        <div class="box-body">
                            <div class="form-group col-md-6">
                                <label for="input_Judul">Judul</label>
                                <input type="text" name="judul" minlength="10" required maxlength="100" class="form-control" id="input_Judul" placeholder="Konservasi Untuk Derawan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gambar">Gambar Utama</label>
                                <input type="file" name="gambar" id="gambar" required accept="image/*">
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group col-md-12">
                                <textarea class="form-control" id="editor1" name="isi" rows="10" cols="80"></textarea>
                            </div>
                        </div>

                        <!-- /.box-body -->
                        <div class="col-md-6">
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" >Publish</button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>

        </div>


    </section>
</div>

