<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title><?php echo $pageTitle;?> | Hexamine</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/font.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/app.v2.css');?>" type="text/css" />
      <!--[if lt IE 9]> <script src="js/ie/respond.min.js"></script> <script src="js/ie/html5.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
   </head>
   <body>
      <!-- header -->
      <header id="header" class="navbar">
         <ul class="nav navbar-nav navbar-avatar pull-right">
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="hidden-xs-only">Mika Sokeil</span> <span class="thumb-small avatar inline"><img src="<?php echo site_url('assets/images/avatar.jpg');?>" alt="Mika Sokeil" class="img-circle"></span> <b class="caret hidden-xs-only"></b> </a> 
               <ul class="dropdown-menu pull-right">
					<li><a href="<?php echo site_url('Hexamine/logout');?>">Logout</a></li>
               </ul>
            </li>
         </ul>
         <a class="navbar-brand" href="#">HXM</a> <button type="button" class="btn btn-link pull-left nav-toggle visible-xs" data-toggle="class:slide-nav slide-nav-left" data-target="body"> <i class="fa fa-bars fa-lg text-default"></i> </button> 
         <ul class="nav navbar-nav hidden-xs">
            <li>
               <div class="m-t m-b-small" id="panel-notifications">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-comment-o fa-fw fa-lg text-default"></i><b class="badge badge-notes bg-danger count-n">2</b></a> 
                  <section class="dropdown-menu m-l-small m-t-mini">
                     <section class="panel panel-large arrow arrow-top">
                        <header class="panel-heading bg-white"><span class="h5"><strong>You have <span class="count-n">2</span> notifications</strong></span></header>
                        <div class="list-group"> <a href="#" class="media list-group-item"> <span class="pull-left thumb-small"><img src="<?php echo site_url('assets/images/avatar.jpg');?>" alt="John said" class="img-circle"></span> <span class="media-body block m-b-none"> Moved to Bootstrap 3.0<br> <small class="text-muted">23 June 13</small> </span> </a> <a href="#" class="media list-group-item"> <span class="media-body block m-b-none"> first v.1 (Bootstrap 2.3 based) released<br> <small class="text-muted">19 June 13</small> </span> </a> </div>
                        <footer class="panel-footer text-small"> <a href="#" class="pull-right"><i class="fa fa-cog"></i></a> <a href="#">See all the notifications</a> </footer>
                     </section>
                  </section>
               </div>
            </li>
           
         </ul>
         <form class="navbar-form pull-left shift" action="#" data-toggle="shift:appendTo" data-target=".nav-primary"> <i class="fa fa-search text-muted"></i> <input type="text" class="input-sm form-control" placeholder="Search"> </form>
      </header>
      <!-- / header --> 
	  <nav id="nav" class="nav-primary hidden-xs nav-vertical">
         <ul class="nav" data-spy="affix" data-offset-top="50">
            <li <?php if($pageTitle=='dashboard'){ ?> class="active" <?php } ?> ><a href="<?php echo site_url('Hexamine/dashboard');?>"><i class="fa fa-dashboard fa-lg"></i><span>Dashboard</span></a></li>
            <li  <?php if($pageTitle=='dashboard'){ ?> class="dropdown-submenu active" <?php }else{ ?>class="dropdown-submenu"<?php } ?>  >
               <a href="#"><i class="fa fa-th fa-lg"></i><span>Accounts</span></a> 
               <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url('Hexamine/users');?>">Users</a></li>
                  <li><a href="<?php echo site_url('Hexamine/transactions');?>">Transactions</a></li>
				 
               </ul>
            </li>
			 <li <?php if($pageTitle=='settransactionfee'){ ?> class="active" <?php } ?> ><a href="<?php echo site_url('Hexamine/setTransactionFee');?>"><i class="fa fa-dashboard fa-lg"></i><span>Set TXT Fee</span></a></li>
			  <li <?php if($pageTitle=='setCurrentValue'){ ?> class="active" <?php } ?> ><a href="<?php echo site_url('Hexamine/setCurrentValue');?>"><i class="fa fa-dashboard fa-lg"></i><span>Current Coin Value</span></a></li>
			   <li <?php if($pageTitle=='icoRound'){ ?> class="active" <?php } ?> ><a href="<?php echo site_url('Hexamine/icoRound');?>"><i class="fa fa-dashboard fa-lg"></i><span>ICO Rounds</span></a></li>
		<li <?php if($pageTitle=='affiliateLevel'){ ?> class="active" <?php } ?> ><a href="<?php echo site_url('Hexamine/affiliateLevel');?>"><i class="fa fa-dashboard fa-lg"></i><span>Affiliate Level</span></a></li>
			   
            
         </ul>
      </nav>
	  <!-- nav 
      <nav id="nav" class="nav-primary hidden-xs nav-vertical">
         <ul class="nav" data-spy="affix" data-offset-top="50">
            <li class="active"><a href="index.html"><i class="fa fa-dashboard fa-lg"></i><span>Dashboard</span></a></li>
            <li class="dropdown-submenu">
               <a href="#"><i class="fa fa-th fa-lg"></i><span>Elements</span></a> 
               <ul class="dropdown-menu">
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="icons.html"><b class="badge pull-right">302</b>Icons</a></li>
                  <li><a href="grid.html">Grid</a></li>
                  <li><a href="widgets.html"><b class="badge bg-primary pull-right">8</b>Widgets</a></li>
                  <li><a href="components.html"><b class="badge pull-right">18</b>Components</a></li>
                  <li><a href="portlet.html">Portlet</a></li>
               </ul>
            </li>
            <li class="dropdown-submenu">
               <a href="#"><i class="fa fa-list fa-lg"></i><span>Lists</span></a> 
               <ul class="dropdown-menu">
                  <li><a href="list.html">List groups</a></li>
                  <li><a href="table.html">Table</a></li>
               </ul>
            </li>
            <li><a href="form.html"><i class="fa fa-edit fa-lg"></i><span>Form</span></a></li>
            <li><a href="chart.html"><i class="fa fa-signal fa-lg"></i><span>Chart</span></a></li>
            <li class="dropdown-submenu">
               <a href="#"><i class="fa fa-link fa-lg"></i><span>Others</span></a> 
               <ul class="dropdown-menu">
                  <li><a href="mail.html">Mail</a></li>
                  <li><a href="calendar.html">Fullcalendar</a></li>
                  <li><a href="timeline.html">Timeline</a></li>
                  <li><a href="profile.html">Profile</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                  <li><a href="maps.html">Maps</a></li>
                  <li><a href="invoice.html">Invoice</a></li>
                  <li><a href="signin.html">Signin page</a></li>
                  <li><a href="signup.html">Signup page</a></li>
                  <li><a href="404.html">404 page</a></li>
               </ul>
            </li>
         </ul>
      </nav>
       / nav -->