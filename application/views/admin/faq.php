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
                <h4 class="card-title">Contact Us</h4>
                 <a href="<?php echo site_url('AdminManager/addfaq')?>"><button type="button" class="btn btn-primary pull-right">Add Faq</button></a>
              </div>
              <div id="mydivs">
                <?php echo $this->session->flashdata('sucess');?>
                   <?php echo $this->session->flashdata('sucessUpdatetest');?>
                   <?php echo $this->session->flashdata('successdelete');?>
                 </div>  
                <span id="error_change_contact" class="text-danger"></span>
                <span id="success_change_contact" class="text-success"></span>
              <div class="card-body">
                <div class="table-responsive">
                            <input type="hidden" name="urllink" id="urllink" value="<?php echo site_url('AdminManager/faqestion_details');?>">
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

