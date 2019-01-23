<?php include('header.php');?>
<div class="main-panel">
      <!-- Navbar -->
      <?php include('navbar.php');?>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Testimonial</h4>
                <a href="<?php echo site_url('AdminManager/addtestimonial')?>"><button type="button" class="btn btn-primary pull-right">Add Testimonial</button></a>
              </div>
             <div id="mydivs">   
              <?php echo $this->session->flashdata('sucessUpdatetest');?>
            </div>
              <div class="card-body">
            
              
          
                <div class="table-responsive">

                   <input type="hidden" name="urllink" id="urllink" value="<?php echo site_url('AdminManager/testimonial_page');?>">
            <?php /*-----Table Content div--------*/?>
            <div id="showrecord"></div>
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
      
    </div>
	 <?php include('footer.php');?>
    <script type="text/javascript">
  $(document).ready(function(){
    allpagination();
  });
</script>
<script> 
        setTimeout(function() {
            $('#mydivs').hide(5000);
        });

    </script>


