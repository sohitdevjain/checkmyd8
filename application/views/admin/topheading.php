<div id="error"></div>
<div id="success"></div>
<form action="#" id="changetitle" method="post">
 <?php
    if(!empty($head)){
      foreach ($head as $row) {
      
    ?>
  <input type="hidden" name="id" value="<?php echo $row['id']?>">
  <div class="form-group">
    <label for="pwd">Title:</label>
    <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title']?>">
  </div>
 
<?php } } ?>
 <button type="button" class="btn btn-default" id="headingdg">Submit</button>
</form>
<script type="text/javascript">
    $(document).ready(function(){
    $("#headingdg").click(function(){
      
          $.ajax({
            url:"<?php echo site_url('AdminManager/edittitle')?>",
            data:$('#changetitle').serialize(),
            type:'POST',
            success:function(data){
              $('form').trigger('reset');
              $('#success').fadeIn().html(data);
            setTimeout(function(){
              $('#success').fadeOut('slow');
            },2000); 
           window.location.href ='btcheading';
            }
          })
        
      })
    })
  </script>