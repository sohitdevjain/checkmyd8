<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <!--- Fonts --->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/pignose.calendar.min.css"/>
    <title>Checkmyd8</title>
</head>

<body class="checkmyd8">
    <header>
        <div class="top-bar signin-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-5">
                        <ul class="signin-headalign-items-center">
                            <li class="search-im">
                                <a class="">
                                    <img src="img/icons/search.svg">
                                </a>
                            </li>
                            <li class="notifi-im">
                                <a class="">
                                    <img src="img/icons/notification.svg">
                                </a>
                            </li>
                            <li class="addd-im">
                                <a class="">
                                    <img src="img/icons/add_light_dark.svg">
                                </a>
                            </li>
                            <li class="wish-im">
                                <a class="">
                                    <img src="img/icons/watchlist.svg">
                                </a>
                            </li>
                            <li class="user-im">
                                <a class="">
                                    <img src="<?php echo site_url('user-uploads/'.$userDetail->image);?>">
                                </a>
                            </li>
                        </ul>
                    </div> <!-- col-5 -->

                    <div class="col-2 text-center">
                        <div class="main-logo">
                            <a href="index.html"><img src="img/logo.svg" alt="checkmyd8 logo"></a>
                        </div>
                    </div> <!-- col-2 -->

                    <div class="col-5 text-right">
                        <ul class="sign-process">
                            <li><a href="#">Get Premium</a></li>
                            <li class="has-menu">
                                <a href="#"> 
                                    <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                                        <span class="hamb-top"></span>
                                        <span class="hamb-middle" style="height: 2px;margin: -1px 0 0 auto; right: 0;width: 60%;"></span>
                                        <span class="hamb-bottom"></span>
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </div> <!-- col-5 -->

            <!-- Sidebar -->

                    <div id="wrapper1" class="">
                        <div class="overlay" style="display: none;"></div>
                            <nav class="navbar navbar-inverse navbar-fixed-top pull-right" id="sidebar-wrapper1" role="navigation">
                                <ul class="nav sidebar-nav">
                                    <li>
                                        <a href="#" class="bigfont">
                                            Settings
                                            <img src="img/icons/settings_dark.svg"> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="bigfont">
                                            Go Premium
                                            <img src="img/icons/credit_card_dark.svg"> 
                                        </a>
                                    </li>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>

                                    <li>
                                        <a href="#" class="smallfont">
                                           Help                                   
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="smallfont">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="smallfont">
                                            Terms & Conditions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="smallfont">
                                            Privacy Policy
                                        </a>
                                    </li>
                                    <hr>
                                   <li>
                                        <a href="<?php echo site_url('Logout');?>" class="smallfont">
                                            Sign out
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                    </div> <!-- sidebar -->

                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- top-bar -->

        <!--- Search Bar --->
        <div class="search-bar signed-out-search">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-6 offset-md-3 text-center">
                        <div class="search-input">
                            <span class="search-icon"><img src="img/icons/search.svg" alt="checkmyd8 search"></span>
                            <input type="search" placeholder="search" name="search" class="search-top-input">
                            <span class="close-icon"><img src="img/icons/close_dark_btn.svg" alt="checkmyd8 cross" <="" span="">
                        </span></div>
                    </div>
                </div>
            </div>
        </div>

    </header>