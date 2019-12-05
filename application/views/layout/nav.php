    <nav class="navbar navbar-expand-sm fixed-top">
        <div class="container">
                    <a href="<?php echo site_url()?>" class="navbar-brand">
                        <img src="<?php echo site_url().'assets/fr/img/logo-kemakom.png'?>" alt="">
                        Kemakom
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseMenu">
                        <span class="fa fa-bars"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="collapseMenu">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url().'berita'?>">BERITA</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"aria-expanded="false">BEM DAN DPM</a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                                <a class="dropdown-item" href="<?php echo site_url().'divisi/divkomtekinfo' ?>">DIVKOMTEKINFO</a>
                                <a class="dropdown-item" href="<?php echo site_url().'divisi/divroh' ?>">DIVROH</a>
                                <a class="dropdown-item" href="<?php echo site_url().'divisi/divadsospol' ?>">DIVADSOSPOL</a>
                                <a class="dropdown-item" href="<?php echo site_url().'divisi/dpo' ?>">DPO</a>
                                <a class="dropdown-item" href="<?php echo site_url().'divisi/dpmb' ?>">DPMB</a>
                                <a class="dropdown-item" href="<?php echo site_url().'divisi/divdiklat' ?>">DIVDIKLAT</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">DPM</a>
                              </div>
                            </li >
                            <li class="nav-item">
                                <a class="nav-link" href="#">ABOUT KEMAKOM</a>
                            </li>
                        </ul>
                    </div>
                </div>
    </nav>