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
                       Seller
                      </th>
                      <th>
                       Payment method
                      </th>
                      <th>
                      Price / BTC
                      </th>
                      <th>
                        Action
                      </th>
                       
                    </thead>
                    <tbody>
                      <?php
                     
                      if(!empty($post))
                      {
                        $i=0;
                        foreach ($post as $test)
                         {
                        $i++;
                        $buy=$test['buy'];
                        if($buy==0){
                          $a="Buy";
                        }else{
                          $a="Sell";
                        }
                      ?>
                      <tr>
                        <td>
                         <?php echo  $i;?>
                        </td>
                       <?php
                       $str=$this->generalmodel->get_record('register',array('id'=>$test['user_id']));
                       if(!empty($str)){
                        ?>
                        <td>
                         <?php echo $str[0]['fname'].'&nbsp;'.$test['trade_type'];?>
                        </td>
                     
                        <td>
                         <?php echo $str[0]['bankname'].':'.$test['location'];?>
                        </td>
                      <?php } ?>
                      
                        <td>
                         <?php echo $test['price'];?>
                        </td>
                       
                        <td>
                            <a href="<?php echo site_url('AdminManager/view/'.encode_id($test['id'],'id'))?>"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                          <a href="<?php echo site_url('AdminManager/delete/').$test['id'];?>/post_trade" class="delete"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
                         
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

