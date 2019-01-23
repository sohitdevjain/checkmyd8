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
                <h4 class="card-title">About Us</h4>
                
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
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Id
                      </th>
                     
                      <th>
                        About
                      </th>
                      <th>
                       How we are different
                      </th>
                      <th>
                        Mission
                      </th>
                     <th>
                       Contact information
                     </th>
                     <th>
                       Date
                     </th>
                     <th>
                       Action
                     </th>
                    </thead>
                    <tbody>
                      <?php
                      if(!empty($about))
                      {
                        $i=0;
                        foreach ($about as $test)
                         {
                          $i++;

                      ?>
                      <tr>
                        <td>
                          <?php echo $i;?>
                        </td>
                        <td>
                         <?php echo $test->about;?>
                        </td>
                        <td>
                         <?php echo $test->how_we_are_different;?>
                        </td>
                        <td>
                         <?php echo $test->mission;?>
                        </td>
                        <td>
                          <?php echo $test->contact;?>
                        </td>
                        <td>
                         <?php echo $test->createdate;?>
                        </td>
                         <td>
                         <a href="<?php echo site_url('AdminManager/editAboutview/'.encode_id($test->id,'id'))?>"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                         
                      </td>

                      </tr>
                      
                      <?php
                     }
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
      
    </div>
	 <?php include('footer.php');?>
 <script> 
        setTimeout(function() {
            $('#mydivs').hide(5000);
        });

    </script>


