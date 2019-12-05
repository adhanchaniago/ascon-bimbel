<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard | OASSE - Bimbel Online</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('kiaalap/img/favicon.ico') ?>">
    <!-- Google Fonts
        ============================================ -->
    <link href="<?php echo base_url('kiaalap/https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900') ?>" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/bootstrap.min.css') ?>">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/font-awesome.min.css') ?>">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/owl.theme.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/owl.transitions.css') ?>">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/animate.css') ?>">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/normalize.css') ?>">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/meanmenu.min.css') ?>">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/main.css') ?>">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/educate-custon-icon.css') ?>">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/morrisjs/morris.css') ?>">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/scrollbar/jquery.mCustomScrollbar.min.css') ?>">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/metisMenu/metisMenu.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/metisMenu/metisMenu-vertical.css') ?>">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/calendar/fullcalendar.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/calendar/fullcalendar.print.min.css') ?>">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/data-table/bootstrap-table.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/data-table/bootstrap-editable.css') ?>">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/style.css') ?>">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('kiaalap/css/responsive.css') ?>">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Header menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header" style="background-color: #006DF0; padding: 5px">
                <a href="<?php echo base_url('pengajar/Kelas') ?>"><img style="height: 50px;" class="main-logo" src="img/logo/logo-oasse-putih.png" alt="" /></a>
                <strong><a href="<?php echo base_url('pengajar/Kelas') ?>"><img style="height: 50px;" src="img/logo/logo-image.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a title="Landing Page" href="<?php echo base_url('pengajar/Kelas') ?>" aria-expanded="false"><span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Kelas</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="<?php echo base_url('pengajar/Modul') ?>">
                                   <span class="educate-icon educate-apps icon-wrap"></span>
                                   <span class="mini-click-non">Modul</span>
                                </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="<?php echo base_url('pengajar/Modul
                                /345-modul.html') ?>"><span class="mini-sub-pro">Semua Modul</span></a></li>
                                <li><a title="Dashboard v.2" href="<?php echo base_url('pengajar/Modul
                                /345-latihansoal.html') ?>"><span class="mini-sub-pro">Semua Latihan Soal</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="<?php echo base_url('pengajar/Siswa') ?>" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Siswa</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Semua Siswa" href="<?php echo base_url('pengajar/Siswa/345-siswa.html') ?>"><span class="mini-sub-pro">Semua Siswa</span></a></li>
                                <li><a title="Nilai" href="<?php echo base_url('pengajar/Siswa/345-nilai.html') ?>"><span class="mini-sub-pro">Nilai</span></a></li>
                            </ul>
                        </li>
                         <li class="active">
                            <a title="Landing Page" href="<?php echo base_url('pengajar/Diskusi') ?>" aria-expanded="false"><span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Diskusi</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Header menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro" style="padding: 5px">
                        <a href="<?php echo base_url('pengajar/Kelas') ?>"><img style="height: 50px" class="main-logo" src="img/logo/logo-image.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="<?php echo base_url('Frontend/index') ?>" class="nav-link">Home</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/4.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/3.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/2.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <img src="img/product/pro4.jpg" alt="" />
                                                            <span class="admin-name">Prof.Anderson</span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a href="<?php echo base_url('pengajar/Kelas') ?>">Kelas</a></li>
                                        <li><a data-toggle="collapse" data-target="#Charts" href="<?php echo base_url('pengajar/Modul') ?>">Modul<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url('pengajar/Modul/345-modul.html') ?>">Semua Modul</a></li>
                                                <li><a href="<?php echo base_url('pengajar/Modul/345-latihansoal.html') ?>">Semua Latihan Soal</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Charts" href="<?php echo base_url('pengajar/Siswa') ?>">Siswa<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url('pengajar/Siswa/345-siswa.html') ?>">Semua Siswa</a></li>
                                                <li><a href="<?php echo base_url('pengajar/Siswa/345-nilai.html') ?>">Nilai</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url('pengajar/Diskusi') ?>">Diskusi</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><span class="bread-blod">Isi Materi</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>