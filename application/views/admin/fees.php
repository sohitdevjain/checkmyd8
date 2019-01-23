  <form action="#" id="feesbtn" method="post">
   <?php echo $this->session->flashdata('sucessUpdatetest');?>
   <span id="error_fees" class="text-danger"></span>
   <span id="success_fees" class="text-success"></span>
                   
  	<?php
  	if(!empty($feess)){
  		foreach ($feess as $row) {
  		
  	?>
  	<input type="hidden" name="id" value="<?php echo $row['id'];?>">
    <div class="form-group">
      <label for="email">Fees:</label>
      <input type="text" class="form-control" id="feesid"  name="fees" value="<?php echo $row['fees']?>">
    </div>
    <button type="button" class="btn btn-info" id="btnsubmit">Submit</button>
    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
   <?php } } ?>
  </form>
  <script type="text/javascript">
  	$(document).ready(function(){
    $("#btnsubmit").click(function(){
  		  var feesid=$('#feesid').val();
  		  if(feesid == "")
  		  {
  		  	$('#error_fees').fadeIn().html("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Please Enter Fees!!</strong>.</div>");
			    setTimeout(function(){
							$('#error').fadeOut('slow');
						},2000);
  		  }else{
  		  	$('#error_fees').html('');
  		  	$.ajax({
  		  		url:"<?php echo site_url('AdminManager/editfeesfrm')?>",
  		  		data:$('#feesbtn').serialize(),
  		  		type:'POST',
  		  		success:function(data){
  		  			$('form').trigger('reset');
  		  			$('#success_fees').fadeIn().html(data);
						setTimeout(function(){
							$('#success_fees').fadeOut('slow');
						},2000);
					$('#fees').hide(2000);	
					window.location.href ='transactionfee';
  		  		}
  		  	})
  		  }
  		})
  	})
  </script>