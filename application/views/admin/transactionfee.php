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
                <h4 class="card-title">Transaction Fee</h4>
                
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
                        S.No
                      </th>
                      <th>
                        Fess
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

                      if(!empty($fees))
                      {
                        $i=0;
                        foreach ($fees as $test)
                         {
                          $i++;
                      ?>
                      <tr>
                        <td>
                          <?php echo $i;?>
                        </td>
                        <td>
                         <?php echo $test['fees'];?>
                        </td>
                        <td>
                         <?php echo $test['createdate'];?>
                        </td>
                        <td>
                         <a href="#" data-toggle="modal" data-target="#fees" onClick="fees(<?php echo $test['id']?>)"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                         
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
   <!-- Modal -->
<div id="fees" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Fees</h4>
</div>
<div class="modal-body" id="feess">

</div>

</div>

</div>
</div>
<script type="text/javascript">
function fees(id)
{

$.ajax({
type: 'POST',
url: '<?php echo site_url('AdminManager/editfees')?>',
data:{id: id},
dataType: "json",
success: function(data) {
// alert(data.page);
$('#feess').html(data.page);
$('#fees').modal('show');
},
error:function(err){
//alert("error"+JSON.stringify(err));
}
});
}
</script>


