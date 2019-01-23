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
                <h5 class="title">Add About Coin</h5>
              </div>
              <div class="card-body">
                 <?php echo $this->session->flashdata('sucessUpdatetest');?>
             <form action="#"  method="POST" id="aboutfrm">
               	<span id="error" class="text-danger"></span>
                <span id="success" class="text-success"></span>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Heading</label>
                        <input type="text" class="form-control" placeholder="Heading" value="" name="heading" id="heading">
                      </div>
                    </div>
                   
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" rows="10" cols="30" id="description" placeholder="Description" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>
                  
                 <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      	<button type="button" class="btn btn-primary" id="submitabout">Add</button>
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
