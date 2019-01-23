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
                <form id="faq" method="post" >
               
               	<span id="error_change_faq" class="text-danger"></span>
                <span id="success_change_faq" class="text-success"></span>
                  <div class="row">
                   
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Question</label>
                        <textarea type="text" class="form-control"  name="question" id="question"></textarea>
                      </div>
                    </div>
                   
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Answer</label>
                           <textarea type="text" class="form-control" name="answer" id="answer"></textarea>
                     
                      </div>
                    </div>
                  </div>
                 
                 <div class="row">
                    <div class="col-md-12">
                      <div class="">
                      	<button type="button" class="btn btn-primary" id="addfaq">Add</button>
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