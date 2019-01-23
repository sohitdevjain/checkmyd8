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
                <h5 class="title">Contact us</h5>
              </div>
              <div class="card-body">
                <form id="contactusf" method="post" >
               
               	<span id="error_change_contact" class="text-danger"></span>
                <span id="success_change_contact" class="text-success"></span>
                  <div class="row">
                    <?php
                    if(!empty($contact))
                    {
                      foreach ($contact as $cont) {
                      

                    ?>
                    <input type="hidden" name="id" value="<?php echo $cont['id'];?>">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control"  value="<?php echo $cont['email']?>" name="email" id="email">
                      </div>
                    </div>
                   
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $cont['mobile'];?>">
                     
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="">
                        <label>Address</label>
                        <input type="text"  name="address" id="address" class="form-control" value="<?php echo $cont['address'];?>">
                      </div>
                    </div>
                  </div>
                 <div class="row">
                    <div class="col-md-12">
                      <div class="">
                      	<button type="button" class="btn btn-primary" id="editcontact">Add</button>
                      </div>
                    </div>
                  </div>
                <?php } } ?>
                </form>
              </div>
            </div>
          </div>
        
        </div>
      </div>
  </div>

       <?php include('footer.php');?>