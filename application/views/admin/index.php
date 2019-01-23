<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
      <link rel="icon" type="image/png" href="assets/img/favicon.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>Login</title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <!--     Fonts and icons     -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
      <link href="<?php echo site_url('assets/use.fontawesome.com/releases/v5.0.6/css/all.css');?>" rel="stylesheet">
      <!-- CSS Files -->
      <link href="<?php echo site_url('assets/assets/css/bootstrap.min.css');?>" rel="stylesheet" />
      <link href="<?php echo site_url('assets/assets/css/now-ui-dashboard.minf700.css?v=1.0.1');?>" rel="stylesheet" />
      
   </head>
   <body class=" sidebar-mini">
      <!-- Navbar -->
      <div class="wrapper wrapper-full-page ">
         <div class="full-page login-page section-image" filter-color="black" style="background:url(<?php echo site_url('assets/assets/img/bg14.jpg');?>);background-size: cover;">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
               <div class="container">
                  <div class="col-md-4 ml-auto mr-auto">
					<?php echo alert();?>
                     <form class="form" method="post" action="<?php echo site_url('AdminManager');?>">
                        <div class="card card-login card-plain">
                           <div class="card-header ">
                              <div class="logo-container">
                                 <img src="<?php echo site_url('img/logo.svg');?>" alt="">
                              </div>
                           </div>
                           <div class="card-body ">
                              <div class="input-group no-border form-control-lg">
                                 <span class="input-group-addon">
                                 <i class="now-ui-icons users_circle-08"></i>
                                 </span>
                                 <input type="text" name="username" class="form-control" placeholder="Enter Username...">
                              </div>
                              <div class="input-group no-border form-control-lg">
                                 <span class="input-group-addon">
                                 <i class="now-ui-icons text_caps-small"></i>
                                 </span>
                                 <input type="password" name="password" placeholder="Enter Password..." class="form-control">
                              </div>
                           </div>
                           <div class="card-footer ">
                              <button type="submit" class="btn btn-primary btn-round btn-lg btn-block mb-3">Login</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
   <!--   Core JS Files   -->
   <script src="<?php echo site_url('assets/assets/js/core/jquery.min.js');?>" ></script>
   <script src="<?php echo site_url('assets/assets/js/core/popper.min.js');?>" ></script>
   <script src="<?php echo site_url('assets/assets/js/core/bootstrap.min.js');?>" ></script>
   <script src="<?php echo site_url('assets/assets/js/plugins/perfect-scrollbar.jquery.min.js');?>" ></script>
   <script src="<?php echo site_url('assets/assets/js/plugins/moment.min.js');?>"></script>
   <!--  Plugin for Sweet Alert -->
   <script src="<?php echo site_url('assets/assets/js/plugins/sweetalert2.min.js');?>"></script>
   <!-- Forms Validations Plugin -->
   <script src="<?php echo site_url('assets/assets/js/plugins/jquery.validate.min.js');?>"></script>
   <script>
      $(document).ready(function(){
        demo.checkFullPageBackgroundImage();
      });
   </script>
</html>