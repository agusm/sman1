<div id="k-body"><!-- content wrapper -->

    <div class="container"><!-- container -->

        <div class="row"><!-- row -->

            <div id="k-top-search" class="col-lg-12 clearfix"><!-- top search -->

                <form action="#" id="top-searchform" method="get" role="search">
                    <div class="input-group">
                        <input type="text" name="s" id="sitesearch" class="form-control" autocomplete="off" placeholder="Type in keyword(s) then hit Enter on keyboard" />
                    </div>
                </form>

                <div id="bt-toggle-search" class="search-icon text-center"><i class="s-open fa fa-search"></i><i class="s-close fa fa-times"></i></div><!-- toggle search button -->

            </div><!-- top search end -->

            <div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->

                <ol class="breadcrumb">
                    <li><a href="<?=site_url()?>">Home</a></li>
                    <li><a href="<?=site_url('gallery')?>">Gallery</a></li>
                    <li class="active">Album</li>
                </ol>

            </div><!-- breadcrumbs end -->

        </div><!-- row end -->

        <div class="row no-gutter fullwidth"><!-- row -->

            <div class="col-lg-12 col-md-12"><!-- doc body wrapper -->

                <div class="col-padded"><!-- inner custom column -->

                    <h1 class="page-title">Gallery <span class="label label-info"><?=$show_gallery->num_rows()?> gambar</span></h1>

                    <div class="news-body">

                        <div class="row gutter k-equal-height"><!-- row -->

                            <?php foreach ($show_gallery->result() as $r){ ?>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <figure class="gallery-photo-thumb">
                                    <a href="<?=base_url()?>uploads/gallery/<?=$r->gambar?>" title="<?=$r->judul?>" data-fancybox-group="gallery-bssb" class="fancybox"><img src="<?=base_url()?>uploads/gallery/<?=$r->gambar?>" alt="Gallery" /></a>
                                </figure>
                                <div class="gallery-photo-description">
                                    <?=$r->judul?>
                                </div>
                            </div>
                            <?php } ?>

                        </div><!-- row end -->

                    </div>

                </div><!-- inner custom column end -->

            </div><!-- doc body wrapper end -->

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- content wrapper end -->