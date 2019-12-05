        <div class="header-section">
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            &nbsp<?php echo $this->session->userdata('nama') ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                          <li> <a href="<?php echo base_url().'login/logout'?>"> <i class="fa fa-lock"></i> Logout </a> </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>