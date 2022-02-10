<!DOCTYPE html>
<style type="text/css">
    .long-shadow {
        text-transform: uppercase;
        font-family: unset;
        font-weight: 500;
        background: linear-gradient(90deg, rgba(255, 255, 255, 1) 50%, rgba(255, 63, 63, 1) 51%, rgba(109, 214, 239, 1) 142%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: inherit;
        margin-top: 10px;
    }

    .page-header.navbar .menu-toggler.sidebar-toggler {
        float: left !important;
        margin: 0px !important;
    }

    @media (min-width: 992px) {
        .page-sidebar-closed.page-sidebar-closed-hide-logo .page-header.navbar .page-logo {
            width: auto !important;
        }
    }

    .border-inputtext {
        border: 3px solid red !important;
    }
</style>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Worker Comp</title>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" /> -->
    <link href="<?php echo base_url('assets/theme/') ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/theme/') ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/theme/') ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/theme/') ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?php echo base_url('assets/theme/') ?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?php echo base_url('assets/theme/') ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="<?php echo base_url('assets/theme/') ?>assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/theme/') ?>assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="<?php echo base_url('assets/theme/') ?>assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/theme/') ?>assets/layouts/layout/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <!-- date piker -->
    <link href="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <!-- date time picker -->
    <link href="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- date range picker -->
    <link href="<?php echo base_url('assets/theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- toast notification  -->
    <link href="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
    <!-- select 2 -->
    <link href="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
    <div class="page-wrapper">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="col-md-12 page-logo">
                    <div class="col-md-6">
                        <h1 class="long-shadow">Tender touch</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-toggler sidebar-toggler">
                            <span style="margin-top:30px"></span>
                        </div>
                    </div>
                </div>
                <!--  <div class="page-logo">
                        <a href="">
                            <img src="<?php echo base_url('assets/theme/') ?>assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
                    </div> -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="<?php echo base_url('assets/theme/') ?>assets/layouts/layout/img/noavatar.png" />
                                <!-- <i class="fa fa-user" aria-hidden="true" sizes="30x30"></i> -->
                                <span class="username username-hide-on-mobile"><?php echo @$_SESSION['first_name']; ?></span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="<?php echo base_url('Login/logout'); ?>">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>