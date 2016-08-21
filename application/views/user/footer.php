<div id="k-footer"><!-- footer -->

    <div class="container"><!-- container -->

        <div class="row no-gutter"><!-- row -->

            <div class="col-lg-6 col-md-6"><!-- widgets column left -->

                <div class="col-padded col-naked">

                    <ul class="list-unstyled clear-margins"><!-- widgets -->

                        <li class="widget-container widget_nav_menu"><!-- widgets list -->

                            <h1 class="title-widget">Info Penting</h1>
                            <ul>
                                <?php
                                $show_info= $this->m_artikel->get_limit(array('tbl_artikel.kd_kategori'=>2),4);
                                foreach ($show_info->result() as $r){ ?>
                                    <li><a href="<?=site_url('info/'.$r->slug)?>" title="<?=$r->judul?>"><?=$r->judul?></a></li>
                                <?php } ?>
                            </ul>

                        </li>

                    </ul>

                </div>

            </div><!-- widgets column left end -->

            <div class="col-lg-6 col-md-6"><!-- widgets column center -->

                <div class="col-padded col-naked">

                    <ul class="list-unstyled clear-margins"><!-- widgets -->

                        <li class="widget-container widget_recent_news"><!-- widgets list -->

                            <h1 class="title-widget">Kontak Sekolah</h1>

                            <div>

                                <?php
                                $sekolah = $this->m_sekolah->get()->row();
                                ?>
                                <h2 class="title-median m-contact-subject" itemprop="name"><?=$sekolah->nama_sekolah?></h2>

                                <div class="m-contact-address" itemprop="address" itemscope="" itemtype="http://data-vocabulary.org/Address">
                                    <span class="m-contact-street" itemprop="street-address"><?=$sekolah->alamat?> <?=$sekolah->kecamatan?></span>
                                    <span class="m-contact-city-region"><span class="m-contact-city" itemprop="locality"><?=$sekolah->kabupaten?></span>, <span class="m-contact-region" itemprop="region"><?=$sekolah->provinsi?></span></span>
                                    <span class="m-contact-zip-country"><span class="m-contact-zip" itemprop="postal-code"><?=$sekolah->kode_pos?></span> <span class="m-contact-country" itemprop="country-name"><?=$sekolah->negara?></span></span>
                                </div>

                                <div class="m-contact-tel-fax">
                                    <span class="m-contact-tel">Tel: <span itemprop="tel"><?=$sekolah->telp?></span></span>
                                    <span class="m-contact-fax">Fax: <span itemprop="fax"><?=$sekolah->fax?></span></span>
                                </div>

                            </div>

                            <div class="social-icons">

                                <ul class="list-unstyled list-inline">

                                    <li><a href="mailto:<?=$sekolah->email?>" title="Contact us"><i class="fa fa-envelope"></i></a></li>
                                    <li><a href="<?=$sekolah->twitter?>" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?=$sekolah->facebook?>" title="Facebook"><i class="fa fa-facebook"></i></a></li>

                                </ul>

                            </div>

                        </li>

                    </ul>

                </div>

            </div><!-- widgets column center end -->

        </div><!-- row end -->

    </div><!-- container end -->

</div>

<div id="k-subfooter"><!-- subfooter -->

    <div class="container"><!-- container -->

        <div class="row"><!-- row -->

            <div class="col-lg-12">

                <p class="copy-text text-inverse">
                    &copy; <?=date('Y')?> ProItDev. All rights reserved.
                </p>

            </div>

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- subfooter end -->