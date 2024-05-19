<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?? "Hotlair Dashboard"?></title>
    <link href="<?= base_url()."hotlair-admin/"?>css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?= base_url()."hotlair-admin/"?>css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url()."hotlair-admin/"?>css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>adminmaster/css/zebra_datepicker.css" rel="stylesheet">
    <style>
        .job_div{
            text-align: start;
        }


    </style>

</head>

<body>

    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <div id="main-wrapper">
        <div class="nav-header">
            <a href="<?= base_url()?>" class="brand-logo">
                <img src="<?= base_url()."hotlair-admin/"?>img/logo22.png" alt="#">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                <?= $nav_heading ?? "Hotlair Dashbord"?>
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="<?= base_url()."hotlair/"?>" role="button" data-bs-toggle="dropdown">
                                    <!-- <img src="<?= base_url()?><?= session("h_image_url")??"hotlair-admin/img/pic1.jpg"?>" width="20" alt=""> -->
                                    <img src="<?= base_url()."hotlair-admin/img/hotel-icon.png"?>" width="20" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="<?= base_url()."hotlair/profile-overview"?>" class="dropdown-item ai-icon">
                                        <svg id="icon-user2" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="<?= base_url()."hotlair/logout"?>" class="dropdown-item ai-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">

                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <div class="dropdown header-profile2 ">

                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="app-profile.html" class="dropdown-item ai-icon ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            <span class="ms-2">Profile </span>
                        </a>
                        <a href="email-inbox.html" class="dropdown-item ai-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            <span class="ms-2">Inbox </span>
                        </a>
                        <a href="page-register.html" class="dropdown-item ai-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                            <span class="ms-2">Logout </span>
                        </a>
                    </div>
                </div>
                <ul class="metismenu" id="menu">
                    <li>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url()."hotlair/"?>">Dashboard</a></li>
                            <!-- <li><a href="<?= base_url()."hotlair/add-job"?>">Add Jobs</a></li> -->
                            <li><a href="<?= base_url()."hotlair/job-list"?>">List Jobs</a></li>
                            <li><a href="<?= base_url()."hotlair/profile-overview"?>">Profile</a></li>
                            <li><a href="<?= base_url()."hotlair/subscription"?>">Subscription</a></li>
                            <!-- <li><a href="<?= base_url()."hotlair/profile"?>">Edit Profile</a></li> -->
                            <li><a href="<?= base_url()."hotlair/logout"?>">Log Out</a></li>
                        </ul>
                    </li>

                </ul>
                </li>
                </ul>
            </div>
        </div>