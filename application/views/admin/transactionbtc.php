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
                <h4 class="card-title">Post Trade</h4>
                
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
                        Id
                      </th>
                      <th>
                       Address
                      </th>
                      <th>
                      	Amount
                      </th>
                      <th>
                      Description	
                      </th>
                      <th>
                      Fees
                      </th>
                      <th>
                      Transaction
                      </th>
                       
                    </thead>
                    <tbody>
                      <?php
                     
                      if(!empty($btctransaction))
                      {
                        $i=0;
                        foreach ($btctransaction as $test)
                         {
                        $i++;
                      
                      ?>
                      <tr>
                        <td>
                         <?php echo  $i;?>
                        </td>
                    
                        <td>
                         <?php echo $test->address;?>
                        </td>
                     
                        <td>
                         <?php echo $test->amount;?>
                        </td>
                        <td>
                         <?php echo $test->description;?>
                        </td>
                        <td>
                         <?php echo $test->txt_fee;?>
                        </td>
                         <td>
                         <?php echo $test->transaction;?>
                        </td>
                        <td>
                          <?php echo $test->date;?>
                        </td>
                        <td>
        
                          <a href="<?php echo site_url('AdminManager/delete/').$test->id;?>/bitcointrnasaction" class="delete"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
                         
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
<script type="text/javascript">
$(document).ready(function(){

 $(".delete").click(function(event){
     if(confirm("Are you sure you want to delete this Record?")){
     var href = $(this).attr("href")
     var btn = this;

      $.ajax({
        type: "GET",
        url: href,
        success: function(response) {

          if (response == "Success")
          {
            $(btn).closest('tr').fadeOut("slow");
          }
          else
          {
            alert("Error");
          }

        }
      });
     event.preventDefault();
   }
      return false;
  })

});
</script>

