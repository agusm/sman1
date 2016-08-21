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
            Ubah Gambar
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('operator')?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Ubah Gambar</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary col-md-12">
                    <div class="box-header with-border">
                        <div><?php if($this->session->flashdata('error')){echo $this->session->flashdata('error');} ?></div>
                    </div>
                    <?php foreach ($show_gallery->result() as $r): ?>
                    <form action="<?=site_url("operator/proses_tambah_gambar")?>" enctype="multipart/form-data" method="post" role="form">
                        <input type="hidden" name="kd_gambar" value="<?=$r->kd_gambar?>">
                        <div class="box-body">
                            <div class="form-group col-md-6">
                                <label for="input_Judul">Judul</label>
                                <input type="text" name="judul" value="<?=$r->judul?>" minlength="10" required maxlength="100" class="form-control" id="input_Judul" placeholder="Piagam Penghargaan">
                            </div>
                            <div class="form-group col-md-9">
                                <label for="input_Judul">Gambar</label>
                                <img width="150px" class="img-responsive" src="<?=base_url('uploads/gallery/'.$r->gambar)?>">
                            </div>
                        </div>

                        <!-- /.box-body -->
                        <div class="col-md-6">
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" >Publish</button>
                            </div>
                        </div>
                    </form>
                    <?php endforeach;?>
                </div>

            </div>

        </div>


    </section>
</div>

