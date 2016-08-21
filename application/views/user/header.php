<div id="k-head" class="container"><!-- container + head wrapper -->

    <div class="row"><!-- row -->


        <div class="col-lg-12">

            <div id="k-site-logo" class="pull-left"><!-- site logo -->

                <h1 class="k-logo">
                    <a href="<?=site_url()?>" title="Home Page">
                        <img src="<?=base_url()?>assets/user/img/site-logo.png" alt="Site Logo" class="img-responsive" />
                    </a>
                </h1>

                <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"></span></a><!-- alternative menu button -->

            </div><!-- site logo end -->

            <nav id="k-menu" class="k-main-navig"><!-- main navig -->

                <ul id="drop-down-left" class="k-dropdown-menu">
                    <?php
                    $show_menu = $this->m_menu->get_all();
                    foreach ($show_menu->result() as $m): ?>
                    <li>
                        <a href="#" title="<?=$m->nama_menu?>"><?=$m->nama_menu?></a>
                        <ul class="sub-menu">
                            <?php
                            $sub_menu = $this->m_menu->get_one_sub(array('tbl_sub_menu.kd_parent'=>$m->kd_menu));
                            foreach ($sub_menu->result() as $sub){
                            ?>
                            <li><a href="<?=$sub->slug?>"><?=$sub->nama_sub_menu?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php endforeach;?>
                    <li>
                        <a href="<?=site_url()?>contact-us" title="Kontak Sekolah">Kontak Kami</a>
                    </li>
                    <li>
                        <a href="<?=site_url('login')?>" title="Login">Login</a>
                    </li>
                </ul>

            </nav><!-- main navig end -->

        </div>

    </div><!-- row end -->

</div><!-- container + head wrapper end -->