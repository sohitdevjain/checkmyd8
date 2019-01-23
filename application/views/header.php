<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">

    <!--- Fonts --->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <title>Checkmyd8</title>
</head>

<body class="checkmyd8">
    <header>
        <div class="top-bar signed-out">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-4">
                        <ul class="sign-process">
						<?php 
							$listed_border='';
							$expanded='false';
							$show='';
							if($this->session->flashdata('signin_menu')){
							$listed_border='listed-border';
							$expanded='true';
							$show='show';
							}
							?>
                            <li class="signin-collapse <?php echo $listed_border;?>"><a class="signin-link" data-toggle="collapse" href="#sign-in-window" role="button" aria-expanded="<?php echo $expanded;?>" aria-controls="sign-in-window">Sign in</a>

                                <div class="collapse popup-design <?php echo $show;?>" id="sign-in-window">
                                    <div class="padding-wrap">
                                        <h2>Sign in</h2>
										<?php echo alert(); ?>
                                        <div class="row">
                                            <div class="col-6 offset-md-3">
                                                <form name="sign-in" action="<?php echo site_url('sign-in');?>" method="post" class="sign-in-form">

                                                    <div class="row">
                                                        <div class="col-6 has-input v-icn v-icn1">
                                                            <input type="text" name="username" class="check-input" placeholder="Your username or email" required="required">
                                                        </div>

                                                        <div class="col-6 has-input v-icn v-icn2">
                                                            <!--span class="user-icn"></span-->
                                                            <input type="password" name="password" class="check-input" placeholder="Your password" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <div class="col-6 has-input">
                                                            <a href="#">I've forgotten my username/password</a>
                                                        </div>

                                                        <div class="col-6 has-input">
                                                            <button type="submit" class="btn-white btn-cc">Sign in <i class="fas fa-angle-right"></i></button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <?php 
							$listed_border='';
							$expanded='false';
							$show='';
							if($this->session->flashdata('signup_menu')){
							$listed_border='listed-border';
							$expanded='true';
							$show='show';
							}
							?>
                            <li class="signup-collapse <?php echo $listed_border;?>"><a class="signin-link" data-toggle="collapse" href="#sign-up-window" role="button" aria-expanded="<?php echo $expanded; ?>" aria-controls="sign-up-window">Sign up Free</a>

                                <div class="collapse popup-design <?php echo $show;?>" id="sign-up-window">
                                    <div class="padding-wrap">
										<h2>Sign up for free</h2>
                                        <p>Take control of your dating record</p>
										<?php 
										echo alert();
										?>
                                        <div class="row">
                                            <div class="col-6 offset-md-3">
                                                <form name="sign-up" action="<?php echo site_url('set-profile');?>" method="post" class="sign-in-form">

                                                    <div class="row">
                                                        <div class="col-6 has-input v-icn v-icn1">
                                                            <input type="text" name="your_name" class="check-input" placeholder="Your name" required="required">
                                                        </div>

                                                        <div class="col-6 has-input v-icn v-icn3">
                                                            <input type="date" name="date_of_birth" class="check-input" placeholder="Date of birth" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6 has-input v-icn v-icn4">
                                                            <input type="email" name="your_email" class="check-input" placeholder="Your email address" required="required">
                                                        </div>

                                                        <div class="col-6 has-input v-icn v-icn5">
                                                            <input type="password" name="create_password" class="check-input" placeholder="Create a password" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <div class="col-6 has-input">
                                                            <a href="#">You agree to our Terms & Conditions and confirm you have read our Privacy Policy.</a>
                                                        </div>

                                                        <div class="col-6 has-input">
                                                             <button type="submit" class="btn-white btn-cc" name="sign-up">Complete sign up <i class="fas fa-angle-right"></i></button> 
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>

                    <div class="col-4 text-center">
                        <div class="main-logo">
                            <a href="index.html"><img src="img/logo.svg" alt="checkmyd8 logo"></a>
                        </div>
                    </div>

                    <div class="col-4 text-right">
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
                    </div>

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
                                    
                                </ul>
                            </nav>
                    </div>


                </div>
            </div>
        </div>

        <!--- Search Bar --->
        <?php include('simple-searchbar.php'); ?>

    </header>