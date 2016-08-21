<div id="k-body"><!-- content wrapper -->

    <div class="container"><!-- container -->

        <?php
        $artikel = $show_artikel->row();
        ?>
        <div class="row"><!-- row -->

            <div id="k-top-search" class="col-lg-12 clearfix"><!-- top search -->

                <form action="" id="top-searchform" method="get" role="search">
                    <div class="input-group">
                        <input type="text" name="s" id="sitesearch" class="form-control" autocomplete="off" placeholder="Type in keyword(s) then hit Enter on keyboard" />
                    </div>
                </form>

                <div id="bt-toggle-search" class="search-icon text-center"><i class="s-open fa fa-search"></i><i class="s-close fa fa-times"></i></div><!-- toggle search button -->

            </div><!-- top search end -->

            <div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->

                <ol class="breadcrumb">
                    <li><a href="<?=site_url()?>">Home</a></li>
                    <li><a href=""><?=$artikel->nama_kategori?></a></li>
                    <li class="active"><?=$artikel->judul?></li>
                </ol>

            </div><!-- breadcrumbs end -->

        </div><!-- row end -->

        <div class="row no-gutter"><!-- row -->

            <div class="col-lg-8 col-md-8"><!-- doc body wrapper -->

                <div class="col-padded"><!-- inner custom column -->

                    <div class="row gutter"><!-- row -->

                        <div class="col-lg-12 col-md-12">

                            <figure class="news-featured-image">
                                <img src="<?=base_url()?>uploads/gambar/<?=$artikel->gambar?>" alt="Featured image 4" class="img-responsive" />
                            </figure>

                            <div class="news-title-meta">
                                <h1 class="page-title"><?=$artikel->judul?></h1>
                                <div class="news-meta">
                                    <span class="news-meta-date"><?=date('d M Y',strtotime($artikel->create_at))?></span>
                                    <span class="news-meta-category"><a href="<?=site_url('artikel')?>" title="News"><?=$artikel->nama_kategori?></a></span>
<!--                                    <span class="news-meta-comments"><a href="#" title="3 comments">3 Komentar</a></span>-->
                                </div>
                            </div>

                            <div class="news-body">
                                <?=$artikel->isi?>
                            </div>

                            <div class="news-tags tagcloud">
                                <a href="#" rel="tag"><?=$artikel->nama_pengguna?></a>
                                <a href="#" rel="tag"><?=date('d M Y H:i:s',strtotime($artikel->create_at))?></a>
                            </div>

                        </div>

                    </div><!-- row end -->

                </div><!-- inner custom column end -->

            </div><!-- doc body wrapper end -->

            <div id="k-sidebar" class="col-lg-4 col-md-4"><!-- sidebar wrapper -->

                <div class="col-padded col-shaded"><!-- inner custom column -->

                    <ul class="list-unstyled clear-margins"><!-- widgets -->

                        <li class="widget-container widget_nav_menu"><!-- widget -->

                            <h1 class="title-widget">Info Penting</h1>
                            <ul>
                                <?php
                                $show_info= $this->m_artikel->get_limit(array('tbl_artikel.kd_kategori'=>2),4);
                                foreach ($show_info->result() as $r){ ?>
                                    <li><a href="<?=site_url('info/'.$r->slug)?>" title="<?=$r->judul?>"><?=$r->judul?></a></li>
                                <?php } ?>
                            </ul>

                        </li>

                        <li class="widget-container widget_up_events"><!-- widget -->

                            <h1 class="title-widget">Kegiatan Sekolah</h1>

                            <ul class="list-unstyled">

                                <?php
                                $show_kegiatan = $this->m_artikel->get_limit(array('tbl_artikel.kd_kategori'=>3),3);
                                foreach ($show_kegiatan->result() as $k){ ?>
                                    <li class="up-event-wrap">

                                        <h1 class="title-median"><a href="<?=site_url('kegiatan/'.$k->slug)?>" title="<?=$k->judul?>"><?=$k->judul?></a></h1>

                                        <div class="up-event-meta clearfix">
                                            <div class="up-event-date"><?=date('d M Y',strtotime($k->create_at))?></div><div class="up-event-time"><?=date('H:i',strtotime($k->create_at))?></div>
                                        </div>

                                        <p>
                                            <?php
                                            $kata = explode(" ",strip_tags($k->isi));
                                            $total = count($kata);
                                            if($total>10) {
                                                $total = 10;
                                            }
                                            for($i=0;$i<$total;$i++){
                                                echo $kata[$i]." ";
                                            }
                                            ?>... <a href="<?=site_url('kegiatan/'.$k->slug)?>" class="moretag" title="read more">Selengkapnya</a>
                                        </p>

                                    </li>
                                <?php } ?>

                            </ul>

                        </li>





                    </ul><!-- widgets end -->

                </div><!-- inner custom column end -->

            </div><!-- sidebar wrapper end -->

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- content wrapper end -->