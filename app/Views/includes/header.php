<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title><?= $title ?? 'Hotels Planet' ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&amp;family=Montserrat:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="<?= base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>css/style.css" rel="stylesheet">
    <link href="<?= base_url()?>css/vendors.min.css" rel="stylesheet">
    <link href="<?= base_url()?>css/custom.css" rel="stylesheet">
</head>

<body class="datepicker_mobile_full">

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>

    <div class="layer"></div>

    <header class="reveal_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <a href="<?=base_url()?>" class="logo_normal"><img src="<?= base_url()?>images/logo33.png" alt=""></a>
                    <a href="<?=base_url()?>" class="logo_sticky"><img src="<?= base_url()?>images/logo22.png" alt=""></a>
                </div>
                <div class="col-6">
                    <nav>
                        <ul>
                            <?php if(session('loggedin')!==null): ?>
                                <li><a href="<?=base_url()?>dashboard" class="btn_1 btn_scrollto">Dashboard</a></li>

                            <?php else : ?>
                                <li><a href="<?=base_url()?>login" class="btn_1 btn_scrollto"> Login</a></li>

                            <?php endif; ?>
                            <li>
                                <div class="hamburger_2 open_close_nav_panel">
                                    <div class="hamburger__box">
                                        <div class="hamburger__inner"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- /container -->
    </header>
    <!-- /Header -->

    <div class="nav_panel">
        <a href="#" class="closebt open_close_nav_panel"><i class="bi bi-x"></i></a>
        <div class="logo_panel"><img src="<?= base_url()?>images/logo22.png" alt=""></div>
        <div class="sidebar-navigation">
            <nav>
                <ul class="level-1">
                    <li><a href="<?= base_url()?>">Home</a></li>
                    
                    <li><a href="<?= base_url()?>missing-list">Missing List</a></li>
                    <!-- <li><a href="<?= base_url()?>job-lists">Find Jobs</a></li> -->
                    <li><a href="<?= base_url()?>found-list">Found List</a></li>
                    <li><a href="<?= base_url()?>tandc">Terms and Condition</a></li>
                    <li><a href="<?= base_url()?>about">About</a></li>

                </ul>
                <div class="panel_footer">
                    <div class="phone_element"><a href="tel:+9876543210"><i class="bi bi-telephone"></i><span> +9876543210</span></a>
                        <a href="#"><i class="bi bi-envelope"></i><span> info@found&missing.com</span></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>