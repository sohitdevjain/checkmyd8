<table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Partner Name
                      </th>
                      <th>
                        Image
                      </th>
                      <th>
                        Link
                      </th>
                      <th>
                        date
                      </th>
                      <th>
                        Action
                      </th>
                     
                    </thead>
                    <tbody>
                      <?php
                      if(!empty($partner))
                      {
                        foreach ($partner as $test)
                         {
                        

                      ?>
                      <tr>
                        <td>
                         <?php echo $test['partner_name'];?>
                        </td>
                       
                        <td>
                        <?php
                        if(!empty($test['image'])){
                        ?>
                        <img src="<?php echo base_url('uploads/').$test['image']?>" width="50px" height="50px">
                      <?php }else{ ?>
                         <img src="<?php echo base_url('images/images.png');?>" width="50px" height="50px">
                      <?php } ?> 
                        </td>
                         <td>
                         <?php echo $test['link'];?>
                        </td>
                        <td>
                         <?php echo $test['createdate'];?>
                        </td>
                        <td>
                         <a href="<?php echo site_url('AdminManager/delete/').$test['id'];?>/our_partners" class="delete"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
                         <a href="<?php echo site_url('AdminManager/editpartners/'.encode_id($test['id'],'id'))?>"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                         
                      </td>

                      </tr>
                      
                      <?php
                     }
                        }
                      ?>
                    </tbody>
                  </table>
                  <div class="pull-right"><?php echo $this->ajax_pagination->create_links();?></div>
                  <style>

                .pagination a {
                    background: #f96332;
                    color: white;
                    float: left;
                    padding: 8px 16px;
                    text-decoration: none;
                    transition: background-color .3s;
                    border: 1px solid #ddd;
                    font-size: 22px;
                }

                .pagination a.active {
                    background-color: #4CAF50;
                    color: white;
                    border: 1px solid #4CAF50;
                }

                .pagination a:hover:not(.active) {background-color: #ddd;}
                </style>
<script type="text/javascript">
$(document).ready(function(){

 $(".delete").click(function(event){
     //alert("Are you sure you want to delete this record?");
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