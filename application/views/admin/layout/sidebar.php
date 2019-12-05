    <div class="left-side sticky-left-side">

        <!--logo-->
        <div class="logo">
            <a href="<?php echo site_url() ?>"><img src="<?php echo base_url().'assets/images/margana.png'?>" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="<?php echo site_url() ?>"><img src="<?php echo base_url().'assets/images/margana.png'?>" alt=""></a>
        </div>
        <!--logo-->

        <div class="left-side-inner">
            <!--Sidebar nav-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class=""><a href="#"><i class="icon-home"></i> <span>Dashboard</span></a>
                </li>
                <li class="menu-list"><a href="#"><i class="icon-note"></i> <span>Postingan</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="<?php echo site_url().'admin/berita'?>"> Data Postingan</a></li>
                        <li><a href="<?php echo site_url().'admin/berita/tambah'?>"> Tambah Postingan </a></li>
                    </ul>
                </li>
                <li class=""><a href="#"><i class="icon-user"></i> <span>User</span></a>
                </li>
                <li class=""><a href="#"><i class="icon-wrench"></i> <span>Settings</span></a>
                </li>
            </ul>
            <!--End sidebar nav-->

        </div>
    </div>