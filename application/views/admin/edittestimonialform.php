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
              <div class="card-header">
                <h5 class="title">Testimonial</h5>
              </div>
              <div class="card-body">
                <?php echo validation_errors(); ?>
                <form id="edittestimonial" method="post" enctype="multipart/form-data" >
                <span id="error" class="text-danger"></span>
                <span id="success" class="text-success"></span>
                  <div class="row">
                    <?php
                    if(!empty($test))
                    {
                      foreach ($test as $row)
                       {
                      

                    ?>
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Client Name</label>
                        <input type="text" class="form-control" placeholder="Clent Name" value="<?php echo $row['client_name']?>" name="client_name" id="client_name">
                      </div>
                    </div>
                   
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                       <!--  <input type="text" class="form-control" placeholder="Description" name="   description" id="description"> -->
                        <textarea name="description" class="form-control" id="description" placeholder="Description"><?php echo $row['description']?></textarea> 
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="">
                        <label>Image</label>
                        <input type="file"  name="image" id="image" class="form-control" value="<?php echo $row['image']?>">
                        <img src="<?php echo base_url('uploads/'.$row['image']);?>" width="50px" height="50px">
                      </div>
                    </div>
                  </div>
                 <div class="row">
                    <div class="col-md-12">
                      <div class="">
                        <button type="button" class="btn btn-primary" id="edittesti">Add</button>
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