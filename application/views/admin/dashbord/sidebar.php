
<div class="page-container">
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="nav-item <?php echo ($this->uri->segment(1) == "dashbord")?"active":""; ?>">
                    <a href="<?php echo base_url('dashbord'); ?>" class="nav-link">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item start <?php echo ($this->uri->segment(1) == "Insurance_manage")?"":"" ?>">
                    <a href="<?php echo base_url('Insurance_manage/'); ?>" class="nav-link ">
                        <i class="fa fa-users"></i>
                        <span class="title">Insurance Request</span>
                    </a>
                </li>
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="nav-item start <?php echo ($this->uri->segment(2) == "send_mail")?"":"" ?>">
                    <a href="<?php echo base_url('Insurance_manage/send_mail'); ?>" class="nav-link ">
                        <i class="icon-envelope"></i>
                        <span class="title">Email Setting</span>
                    </a>
                </li>
                <li class="nav-item start <?php echo ($this->uri->segment(2) == "send_mail")?"":"" ?>">
                    <a href="<?php echo base_url('Insurance_manage/mail_history'); ?>" class="nav-link ">
                        <i class="icon-envelope-open"></i>
                        <span class="title">Email History</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

