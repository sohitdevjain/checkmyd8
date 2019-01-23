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
                <h4 class="card-title">Details</h4>
                  <button  class="btn btn-primary pull-right" data-toggle="modal" data-target="#user" onClick="user(<?php echo $id;?>)">Change Password</button>
              </div>
              <div class="card-body">
               
                  <table class="table">
                    <?php
                    if(!empty($user)){
                      foreach ($user as $rowses) {
              
                    ?>
                    <tr>
                      <td>Name</td>
                      <td><?php echo $rowses['fname'].''.$rowses['lname'];?></td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td><?php echo $rowses['email']?></td>
                    </tr>
                    <tr>
                      <td>Mobile</td>
                      <td><?php echo $rowses['mobile']?></td>
                    </tr>
                  
                    <tr>
                      <td>Profile Image</td>
                      <?php
                      if(!empty($rowses['image'])){
                      ?>
                      <td><img src="<?php echo site_url('uploads/'.$rowses['image'])?>" width="50px" height="50px">
                      </td>  <?php }else{ ?>
                         <td><img src="<?php echo site_url('images/images.png')?>" width="50px" height="50px">
                      </td>
                      <?php } ?>  
                    </tr>
                  
                  <?php } } ?>
                  </table>
               
              </div>
            </div>
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
               
                  <table class="table">
                    <?php
                    if(!empty($stre)){
                      foreach ($stre as $row) {
                      $a=$this->generalmodel->get_record('register',array('id'=>$row['user_id']));
                      if(!empty($a)){
                    ?>
                    <tr>
                      <td>Price</td>
                      <td><?php echo $row['price'];?></td>
                    </tr>
                    <tr>
                      <td>Name</td>
                      <td><?php echo $a[0]['fname'].'&nbsp;'.$a[0]['lname'];?></td>
                    </tr>
                    <tr>
                      <td>Payment method:</td>
                      <td><?php echo $a[0]['bankname']?></td>
                    </tr>
                    <tr>
                      <td>Trade limits:</td>
                      <td><?php echo $row['min_transaction_limit'].'-'.$row['max_transaction_limit'];?></td>
                    </tr>
                    <tr>
                      <td>Location:</td>
                      <td><?php echo $row['location'];?></td>
                    </tr>
                  
                  <?php } } }?>
                  </table>
               
              </div>
            </div>
              <div class="card">
              <div class="card-header">
                <h4 class="card-title">Request Trade</h4>
                
              </div>
              <div class="card-body">
               
                  <table class="table">
                    <?php
                    if(!empty($request)){
                      foreach ($request as $rows) {
                        if($rows['trade_status']==0){
                          $b="Open";
                        }elseif($rows['trade_status']==1){
                          $b="Close";
                        }elseif ($rows['trade_status']==2) {
                         $b="Complete Payment";
                        }elseif($rows['trade_status']==3){
                          $b="Completed";
                        }elseif ($rows['trade_status']==4) {
                          $b="Cancelled";
                        }
                      $a=$this->generalmodel->get_record('register',array('id'=>$rows['uid']));
                      if(!empty($a)){
                    ?>
                    <tr>
                      <td>Price</td>
                      <td><?php echo $rows['amount_inr'];?></td>
                    </tr>
                    <tr>
                      <td>Name</td>
                      <td><?php echo $a[0]['fname'].'&nbsp;'.$a[0]['lname'];?></td>
                    </tr>
                    <tr>
                      <td>Payment method:</td>
                      <td><?php echo $a[0]['bankname']?></td>
                    </tr>
                  
                    <tr>
                      <td>Trade Status:</td>
                      <td><?php echo $b;?></td>
                    </tr>
                  
                  <?php } } }?>
                  </table>
               
              </div>
            </div>
               <div class="card">
              <div class="card-header">
                <h4 class="card-title">Complete Payment</h4>
                
              </div>
              <div class="card-body">
               
                  <table class="table">
                    <?php
                    if(!empty($payment)){
                      foreach ($payment as $rowss) {
                    
                      $a=$this->generalmodel->get_record('register',array('id'=>$rowss['uid']));
                      if(!empty($a)){
                    ?>
                    <tr>
                      <td>Price</td>
                      <td><?php echo $rows['amount_inr'];?></td>
                    </tr>
                    <tr>
                      <td>Name</td>
                      <td><?php echo $a[0]['fname'].'&nbsp;'.$a[0]['lname'];?></td>
                    </tr>
                    <tr>
                      <td>Payment method:</td>
                      <td><?php echo $rowss['payment_method']?></td>
                    </tr>
                  
                    <tr>
                      <td>Reference</td>
                      <td><?php echo $rowss['reference'];?></td>
                    </tr>
                    <tr>
                      <td>Description</td>
                      <td><?php echo $rowss['des']?></td>
                    </tr>
                  
                  <?php } } }?>
                  </table>
               
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Transaction</h4>
                
              </div>
                <?php
                    if(!empty($details)){
                      foreach ($details as $dell) {
                    
                    ?>
              <div class="card-body">
               
                  <table class="table">
                  
                    <tr>
                      <td>Address</td>
                      <td><?php echo $dell['address'];?></td>
                    </tr>
                    <tr>
                      <td>Amount</td>
                      <td><?php echo $dell['amount'];?></td>
                    </tr>
                    <tr>
                      <td>Description:</td>
                      <td><?php echo $dell['description']?></td>
                    </tr>
                  
                    <tr>
                      <td>Fees</td>
                      <td><?php echo $dell['txt_fee'];?></td>
                    </tr>
                    <tr>
                      <td>Transaction</td>
                      <td><?php echo $dell['transaction']?></td>
                    </tr>
                  
             
                  </table>
               
              </div>
                   <?php } } ?>
            </div>
          </div>
         
        </div>
      </div>

      
    </div>
   <?php include('footer.php');?>
    <!-- Modal -->
<div id="user" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Change Password</h4>
</div>
<div class="modal-body" id="users">

</div>

</div>

</div>
</div>
<script type="text/javascript">
function user(id)
{

$.ajax({
type: 'POST',
url: '<?php echo site_url('AdminManager/changeuserpassword')?>',
data:{id: id},
dataType: "json",
success: function(data) {
// alert(data.page);
$('#users').html(data.page);
$('#user').modal('show');
},
error:function(err){
//alert("error"+JSON.stringify(err));
}
});
}
</script>



