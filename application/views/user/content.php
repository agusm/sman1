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
                    <li><a href="#">Home</a></li>
                    <li class="active"></li>
                </ol>

            </div><!-- breadcrumbs end -->

        </div><!-- row end -->

        <div class="row no-gutter fullwidth"><!-- row -->

            <div class="col-lg-12 clearfix"><!-- featured posts slider -->

                <div id="carousel-featured" class="carousel slide" data-interval="4000" data-ride="carousel"><!-- featured posts slider wrapper; auto-slide -->

                    <ol class="carousel-indicators"><!-- Indicators -->
                        <?php
                        $i = 0;
                        foreach ($show_slider->result() as $s):
                        ?>
                        <li data-target="#carousel-featured" <?=($i==0)?'class="active"':''?> data-slide-to="<?=$i++?>" ></li>
                        <?php endforeach;?>
                    </ol><!-- Indicators end -->

                    <div class="carousel-inner"><!-- Wrapper for slides -->

                        <?php
                        $no = 0;
                        foreach ($show_slider->result() as $s):
                        ?>
                        <div class="item <?=($no==0)?'active':''?>">
                            <center><img src="<?=base_url()?>uploads/slider/<?=$s->gambar?>" alt="Image slide" /></center>
                            <div class="k-carousel-caption pos-c-2-3 scheme-dark">
                                <div class="caption-content">
                                    <h3 class="caption-title"><?=$s->judul?></h3>
                                    <p>
                                        <?=$s->isi?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                            $no++;
                            endforeach;
                        ?>

                    </div><!-- Wrapper for slides end -->

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-featured" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="right carousel-control" href="#carousel-featured" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                    <!-- Controls end -->

                </div><!-- featured posts slider wrapper end -->

            </div><!-- featured posts slider end -->

        </div><!-- row end -->

        <div class="row no-gutter"><!-- row -->

            <div class="col-lg-4 col-md-4"><!-- upcoming events wrapper -->

                <div class="col-padded col-shaded"><!-- inner custom column -->

                    <ul class="list-unstyled clear-margins"><!-- widgets -->

                        <li class="widget-container widget_up_events"><!-- widgets list -->

                            <h1 class="title-widget">Kegiatan Sekolah</h1>

                            <ul class="list-unstyled">

                                <?php foreach ($show_kegiatan->result() as $k){ ?>
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

                        </li><!-- widgets list end -->

                    </ul><!-- widgets end -->

                </div><!-- inner custom column end -->

            </div><!-- upcoming events wrapper end -->

            <div class="col-lg-4 col-md-4"><!-- recent news wrapper -->

                <div class="col-padded"><!-- inner custom column -->

                    <ul class="list-unstyled clear-margins"><!-- widgets -->

                        <li class="widget-container widget_recent_news"><!-- widgets list -->

                            <h1 class="title-widget">Artikel Terbaru</h1>

                            <ul class="list-unstyled">

                                <?php foreach ($show_artikel->result() as $a){ ?>

                                <li class="recent-news-wrap">

                                    <h1 class="title-median"><a href="<?=site_url('artikel/'.$a->slug)?>" title="<?=$a->judul?>"><?=$a->judul?></a></h1>

                                    <div class="recent-news-meta">
                                        <div class="recent-news-date"><?=date('d M Y',strtotime($a->create_at))?></div>
                                    </div>

                                    <div class="recent-news-content clearfix">
                                        <figure class="recent-news-thumb">
                                            <a href="<?=site_url('artikel/'.$a->slug)?>" title="<?=$a->judul?>"><img src="<?=base_url()?>uploads/gambar/<?=$a->gambar?>" class="attachment-thumbnail wp-post-image" alt="Thumbnail 1" /></a>
                                        </figure>
                                        <div class="recent-news-text">
                                            <p>
                                                <?php
                                                $kata = explode(" ",strip_tags($a->isi));
                                                $total = count($kata);
                                                if($total>10) {
                                                    $total = 10;
                                                }
                                                for($i=0;$i<$total;$i++){
                                                    echo $kata[$i]." ";
                                                }
                                                ?>... <a href="<?=site_url('artikel/'.$a->slug)?>" class="moretag" title="read more">Selengkapnya</a>
                                            </p>
                                        </div>
                                    </div>

                                </li>

                                <?php } ?>

                            </ul>

                        </li><!-- widgets list end -->

                    </ul><!-- widgets end -->

                </div><!-- inner custom column end -->

            </div><!-- recent news wrapper end -->

            <div class="col-lg-4 col-md-4"><!-- misc wrapper -->

                <div class="col-padded col-shaded"><!-- inner custom column -->

                    <ul class="list-unstyled clear-margins"><!-- widgets -->

                        <li class="widget-container widget_course_search"><!-- widget -->

                            <form role="search" method="get" id="course-finder" action="#">
                                <div class="input-group">
                                    <input type="text" placeholder="cari..." autocomplete="off" class="form-control" id="find-course" name="find-course" />
                                    <span class="input-group-btn"><button type="submit" class="btn btn-default">Cari!</button></span>
                                </div>
                            </form>

                        </li><!-- widget end -->

                        <li class="widget-container widget_nav_menu"><!-- widget -->

                            <h1 class="title-widget">Info Penting</h1>

                            <ul>
                                <?php foreach ($show_info->result() as $r){ ?>
                                <li><a href="<?=site_url('info/'.$r->slug)?>" title="<?=$r->judul?>"><?=$r->judul?></a></li>
                                <?php } ?>
                            </ul>

                        </li>

                        <li class="widget-container "><!-- widget -->

                            <h1 class="title-widget">Gallery Terbaru</h1>

                            <?php foreach ($show_gallery->result() as $g){ ?>
                                <figure class="gallery-last-photo clearfix">
                                    <a href="" title="<?=$g->judul?>"><img src="<?=base_url()?>uploads/gallery/<?=$g->gambar?>" alt="Gallery" /></a>
                                </figure>
                            <?php } ?>

                        </li><!-- widget end -->

                    </ul><!-- widgets end -->

                </div><!-- inner custom column end -->

            </div><!-- misc wrapper end -->

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- content wrapper end -->