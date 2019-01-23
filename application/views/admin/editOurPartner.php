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
             <form action="#" enctype="multipart/form-data"  method="POST" id="partnerfrm">
               	<span id="error" class="text-danger"></span>
                <span id="success" class="text-success"></span>
                <?php
                if(!empty($partner)){
                  foreach ($partner as $row) {
               

                ?>
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name"  name="name" id="name" value="<?php echo $row['partner_name'];?>">
                      </div>
                    </div>
                   
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Link</label>
                       <input type="text" class="form-control" placeholder="Link" name="link" id="link" value="<?php echo $row['link'];?>"> 
                    
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                 
                      <input type="file" name="image" value="image" style="opacity: 1"></br>
                     <?php
                        if(!empty($row['image'])){
                        ?>
                        <img src="<?php echo base_url('uploads/').$row['image']?>" width="50px" height="50px">
                      <?php }else{ ?>
                         <img src="<?php echo base_url('images/images.png');?>" width="50px" height="50px">
                      <?php } ?>
                    </div>
                </div>
              </div>
                 <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      	<button type="button" class="btn btn-primary" id="editparter">Add</button>
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
