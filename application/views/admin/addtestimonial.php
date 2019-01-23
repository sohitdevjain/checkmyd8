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
                <form id="testimonial" method="post" enctype="multipart/form-data" >
               	<span id="error" class="text-danger"></span>
                <span id="success" class="text-success"></span>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Client Name</label>
                        <input type="text" class="form-control" placeholder="Clent Name" value="" name="client_name" id="client_name">
                      </div>
                    </div>
                   
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                       <!--  <input type="text" class="form-control" placeholder="Description" name=" 	description" id="description"> -->
                        <textarea name="description" class="form-control" id="description" placeholder="Description"></textarea> 
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="">
                        <label>Image</label>
                        <input type="file"  name="image" id="image" class="form-control">
                      </div>
                    </div>
                  </div>
                 <div class="row">
                    <div class="col-md-12">
                      <div class="">
                      	<button type="button" class="btn btn-primary" id="addtesti">Add</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        
        </div>
      </div>
  </div>

       <?php include('footer.php');?>