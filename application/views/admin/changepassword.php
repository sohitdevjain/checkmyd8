<form action="#" id="chanepas">
  <div id="error"></div>
  <div id="success"></div>
    <?php
    if(!empty($user)){
      foreach ($user as $row) {
      
    ?>
  <input type="hidden" name="id" value="<?php echo $row['id']?>">
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="button" class="btn btn-default" id="changepass">Submit</button>
<?php } } ?>
</form>
<script type="text/javascript">
    $(document).ready(function(){
    $("#changepass").click(function(){
        var password=$('#password').val();
        if(password == "")
        {
          $('#error_fees').fadeIn().html("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Please Enter Password!!</strong>.</div>");
          setTimeout(function(){
              $('#error').fadeOut('slow');
            },2000);
        }else{
          $('#error').html('');
          $.ajax({
            url:"<?php echo site_url('AdminManager/changepasswordfrm')?>",
            data:$('#chanepas').serialize(),
            type:'POST',
            success:function(data){
              $('form').trigger('reset');
              $('#success').fadeIn().html(data);
            setTimeout(function(){
              $('#success').fadeOut('slow');
            },2000);
          $('#user').hide(2000);  
          window.location.href ='userdetail';
            }
          })
        }
      })
    })
  </script>