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
                <h5 class="title">Our Partners</h5>
              </div>
              <div class="card-body">
                 <?php echo $this->session->flashdata('sucessUpdatetest');?>
             <form  enctype="multipart/form-data"  method="POST"  id="branddet" name="branddet">
               	<span id="error" class="text-danger"></span>
                <span id="success" class="text-success"></span>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" value="" name="name" id="name">
                      </div>
                    </div>
                   
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Link</label>
                       <input type="text" class="form-control" placeholder="Link" name="link" id="link"> 
                    
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                 
                      <input type="file" name="image" value="image" style="opacity: 1">
                     
                    </div>
                </div>
              </div>
                 <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      	<button type="button" class="btn btn-primary" id="addparter">Add</button>
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
