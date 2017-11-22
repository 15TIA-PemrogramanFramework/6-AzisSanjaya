<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Dream</title>
    <!-- Bootstrap Styles-->
    <link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="<?php echo base_url();?>/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="<?php echo base_url();?>/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="<?php echo base_url();?>/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('home');?>"><img src="<?php echo base_url();?>/assets/img/logo.png"></a>
            </div>
            <ul>
                <!-- /.dropdown -->
                <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('login/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="<?php echo site_url('home');?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <?php $a = $this->session->userdata('Jabatan');
                    if($a == 'bos'){ ?>
                     <li>
                        <a href="<?php echo site_url('user');?>"><i class="fa fa-user"></i> Data Admin</a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="<?php echo site_url('pemilik');?>"><i class="fa fa-edit"></i> Data Customer </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('mobil');?>"><i class="fa fa-desktop"></i> Table Mobil</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('sparepart');?>"><i class="fa fa-qrcode"></i>SparePart Mobil</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('service');?>"><i class="fa fa-wrench"></i> Service </a>
                    </li>
                    <!--
                    <li>
                        <a href="ui-elements.html"><i class="fa fa-wrench"></i> Service</a>
                    </li>
                    <li>
                        <a href="table.html"><i class="fa fa-table"></i> List Service</a>
                    </li>
                    <li>
                        <a href="chart.html"><i class="fa fa-bar-chart-o"></i> Charts</a>
                    </li>

                    
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="empty.html"><i class="fa fa-fw fa-file"></i> Empty Page</a>
                    </li>
                    -->
                </ul>

            </div>

        </nav> 