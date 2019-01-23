  <form action="#" id="workbtn" method="post">
   <?php echo $this->session->flashdata('sucessUpdatetest');?>
   <span id="error_work" class="text-danger"></span>
   <span id="success_work" class="text-success"></span>
                   
  	<?php
  	if(!empty($works)){
  		foreach ($works as $row) {
  		
  	?>
  	<input type="hidden" name="id" value="<?php echo $row['id'];?>">
    <div class="form-group">
      <label>Heading</label>
      <input type="text" class="form-control" placeholder="Heading" name="heading" id="heading" value="<?php echo $row['heading'];?>">
    </div>
      <div class="form-group">
       <label>Description</label>
                       
       <textarea name="description" rows="10" cols="30" id="description" placeholder="Description" class="form-control"><?php echo $row['description'];?></textarea>
    </div>
    <button type="button" class="btn btn-primary" id="btnsubmit">Submit</button>
    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
   <?php } } ?>
  </form>
  <script type="text/javascript">
  	$(document).ready(function(){
    $("#btnsubmit").click(function(){
  		  var heading=$('#heading').val();
        var description=$('#description').val();

  		  if(heading == "" || description == "" )
  		  {
  		  	$('#error_work').fadeIn().html("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Please Enter All Fields!!</strong>.</div>");
			    setTimeout(function(){
							$('#error').fadeOut('slow');
						},2000);
  		  }else{
  		  	$('#error_work').html('');
          CKEDITOR.instances.description.updateElement();
  		  	$.ajax({
  		  		url:"<?php echo site_url('AdminManager/editHowItWorkFrm')?>",
  		  		data:$('#workbtn').serialize(),
  		  		type:'POST',
  		  		success:function(data){
  		  			$('form').trigger('reset');
  		  			$('#success_work').fadeIn().html(data);
						setTimeout(function(){
							$('#success_work').fadeOut('slow');
						},2000);
					$('#work').hide(2000);	
					window.location.href ='work';
  		  		}
  		  	})
  		  }
  		})
  	})
  </script>
  <script>
      CKEDITOR.replace( 'description' );
    
 </script>