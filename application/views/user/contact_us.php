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
                    <li class="active">Contact Us</li>
                </ol>

            </div><!-- breadcrumbs end -->

        </div><!-- row end -->

        <div class="row no-gutter"><!-- row -->

            <div class="col-lg-8 col-md-8"><!-- doc body wrapper -->

                <div class="col-padded"><!-- inner custom column -->

                    <div class="row gutter"><!-- row -->

                        <div class="col-lg-12 col-md-12">

                            <div id="k-contact-map" class="clearfix"><!-- map -->
                                <div
                                    id="g-map-1"
                                    class="map"
                                    data-gmaptitle="Contact"
                                    data-gmapzoom="15"
                                    data-gmaplon="-76.422377"
                                    data-gmaplat="43.314594"
                                    data-gmapmarker=""
                                    data-cname="Buntington Public Schools"
                                    data-caddress="115 W Broadway"
                                    data-ccity="Fulton"
                                    data-cstate="NY"
                                    data-czip="13069"
                                    data-ccountry="USA">
                                </div>
                            </div>

                            <h1 class="page-title">Hubungi Kami</h1>

                            <div class="news-body">

                                <p>
                                    Praesent id felis sagittis, suscipit ligula sed, condimentum nisi. In non commodo risus. Praesent fringilla ligula in orci consectetur pulvinar. Nunc facilisis metus pellentesque, vestibulum libero eget, varius elit. Aliquam sed gravida dui, a imperdiet eros. Cras dignissim libero id feugiat pharetra. Nullam ut bibendum est, sed tincidunt massa.
                                </p>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <h6 class="remove-margin-bottom">SMAN 1 Baserah</h6>
                                        <p class="small">Tel: 631 551 31 77   |   Fax: 631 551 31 78</p>
                                    </div>

                                </div>

                                <hr />

                                <h6>Drop us note!</h6>

                                <form id="contactform" method="post" action="#">
                                    <div class="row"><!-- starts row -->
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label for="contactName"><span class="required">*</span> Nama</label>
                                            <input type="text" aria-required="true" size="30" value="" name="contactName" id="contactName" class="form-control requiredField" />
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label for="email"><span class="required">*</span> E-mail</label>
                                            <input type="text" aria-required="true" size="30" value="" name="email" id="email" class="form-control requiredField" />
                                        </div>
                                    </div><!-- ends row -->



                                    <div class="row"><!-- starts row -->
                                        <div class="form-group col-lg-12">
                                            <label for="contactSubject">Judul Pesan</label>
                                            <input type="text" aria-required="true" size="30" value="" name="contactSubject" id="contactSubject" class="form-control" />
                                        </div>
                                    </div><!-- ends row -->

                                    <div class="row"><!-- starts row -->
                                        <div class="form-group clearfix col-lg-12">
                                            <label for="comments"><span class="required">*</span> Pesan</label>
                                            <textarea aria-required="true" rows="5" cols="45" name="comments" id="comments" class="form-control requiredField mezage"></textarea>
                                        </div>

                                        <div class="form-group clearfix col-lg-12 text-right remove-margin-bottom">
                                            <input type="hidden" name="submitted" id="submitted" value="true" />
                                            <input type="submit" value="Kirim Pesan" id="submit" name="submit" class="btn btn-default" />
                                        </div>
                                    </div><!-- ends row -->
                                </form>

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