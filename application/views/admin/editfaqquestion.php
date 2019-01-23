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
                <h5 class="title">Faq</h5>
              </div>
              <div class="card-body">
                <?php
                if(!empty($faq)){
                  foreach ($faq as $row) {
              

                ?>
                <form id="editfaqq" method="post" >
               
               	<span id="error_change_faqq" class="text-danger"></span>
                <span id="success_change_faqq" class="text-success"></span>
                  <div class="row">
                   
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        <label>Question</label>
                        <textarea type="text" class="form-control"  name="question" id="questions"><?php echo $row['question'];?></textarea>
                      </div>
                    </div>
                   
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Answer</label>
                           <textarea type="text" class="form-control" name="answer" id="answers"><?php echo $row['answer'];?></textarea>
                     
                      </div>
                    </div>
                  </div>
                 
                 <div class="row">
                    <div class="col-md-12">
                      <div class="">
                      	<button type="button" class="btn btn-primary" id="editfaq">Edit</button>
                      </div>
                    </div>
                  </div>
              
                </form>
              <?php } } ?>
              </div>
            </div>
          </div>
        
        </div>
      </div>
  </div>

       <?php include('footer.php');?>