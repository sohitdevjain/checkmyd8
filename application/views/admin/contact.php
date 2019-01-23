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
                
              </div>
                <?php echo $this->session->flashdata('sucess');?>
                   <?php echo $this->session->flashdata('sucessUpdatetest');?>
                   <?php echo $this->session->flashdata('successdelete');?>
                   
                <span id="error_change_contact" class="text-danger"></span>
                <span id="success_change_contact" class="text-success"></span>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Email
                      </th>
                      <th>
                        Mobile
                      </th>
                      <th>
                        Address
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
                      if(!empty($contact))
                      {
                        foreach ($contact as $test)
                         {
                        

                      ?>
                      <tr>
                        <td>
                         <?php echo $test['email'];?>
                        </td>
                        <td>
                         <?php echo $test['mobile'];?>
                        </td>
                        <td>
                         <?php echo $test['address'];?>
                        </td>
                        <td>
                         <?php echo $test['createdate'];?>
                        </td>
                        <td>
                         <a href="<?php echo site_url('AdminManager/addcontact/'.encode_id($test['id'],'id'))?>"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                         
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



