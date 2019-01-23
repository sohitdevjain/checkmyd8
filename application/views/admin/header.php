<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dating | <?php echo $pageTitle;?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?php echo site_url('assets/assets/css/bootstrap.min.css');?>" rel="stylesheet" />
  <link href="<?php echo site_url('assets/assets/css/now-ui-dashboard.minf700.css?v=1.0.1');?>" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="<?php echo site_url('AdminManager/dashboard');?>" class="simple-text logo-mini">
          d8
        </a>
        <a href="<?php echo site_url('AdminManager/dashboard');?>" class="simple-text logo-normal">
          checkmyd8
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="<?php echo @$dashboard;?>">
            <a href="<?php echo site_url('AdminManager/dashboard');?>">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="<?php echo @$users;?>">
            <a href="<?php echo site_url('AdminManager/users');?>">
              <i class="now-ui-icons design_app"></i>
              <p>Users</p>
            </a>
          </li>
		     
        </ul>
      </div>
    </div>

