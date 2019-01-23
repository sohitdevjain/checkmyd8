<?php include('header.php');?>
<div class="main-panel">
      <!-- Navbar -->
      <?php include('navbar.php');?>
      <!-- End Navbar -->
 <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header" id="scrollffffffd">
                <h5 class="title">About us</h5>
              </div>
              <div class="card-body">
                <?php echo validation_errors(); ?>
                <form id="aboutfrm" method="post" >
                <span id="error" class="text-danger"></span>
                <span id="success" class="text-success"></span>
                  <div class="row">
                    <?php
                    if(!empty($about))
                    {
                      foreach ($about as $row)
                       {
                      

                    ?>
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About</label>
                           <textarea name="about" class="form-control" id="about"><?php echo $row['about']?></textarea> 
                      </div>
                    </div>
                   
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>How we are different</label>
                        <textarea name="different" class="form-control" id="different"><?php echo $row['how_we_are_different']?></textarea> 
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="">
                        <label>Mission</label>
                         <textarea name="mission" class="form-control" id="mission"><?php echo $row['mission']?></textarea> 
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="">
                        <label>Contact information</label>
                         <textarea name="contact" class="form-control" id="contact"><?php echo $row['contact']?></textarea> 
                      </div>
                    </div>
                  </div>
                 <div class="row">
                    <div class="col-md-12">
                      <div class="">
                        <button type="button" class="btn btn-primary" id="editabout">Edit</button>
                      </div>
                    </div>
                  </div>
                  <?php

                }
                   } 
                   ?>
                </form>
              </div>
            </div>
          </div>
        
        </div>
      </div>
  </div>

<?php include('footer.php');?>
<script>
CKEDITOR.replace( 'about' );
CKEDITOR.replace( 'different' );
CKEDITOR.replace( 'mission' );
CKEDITOR.replace( 'contact' );
</script>