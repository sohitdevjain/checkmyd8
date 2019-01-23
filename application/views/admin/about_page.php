<table class="table">
                    <thead class=" text-primary">
                      <th>
                        Id
                      </th>
                      <th>
                       Heading
                      </th>
                      <th>
                        Description
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
                      if(!empty($about))
                      {
                        $i=0;
                        foreach ($about as $test)
                         {
                          $i++;

                      ?>
                      <tr>
                         <td>
                         <?php echo $i;?>
                        </td>
                        <td>
                         <?php echo $test['heading'];?>
                        </td>
                       
                         <td>
                         <?php echo $test['description'];?>
                        </td>
                        <td>
                         <?php echo $test['createdate'];?>
                        </td>
                        <td>
                         <a href="<?php echo site_url('AdminManager/delete/').$test['id'];?>/aboutcoin" class="delete"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
                         <a href="#" data-toggle="modal" data-target="#work" onClick="work(<?php echo $test['id']?>)"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                         
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
<!-- Modal -->
<div id="work" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">About Coin</h4>
</div>
<div class="modal-body" id="works">

</div>

</div>

</div>
</div>
<script type="text/javascript">
function work(id)
{

$.ajax({
type: 'POST',
url: '<?php echo site_url('AdminManager/editAboutCoins')?>',
data:{id: id},
dataType: "json",
success: function(data) {
// alert(data.page);
$('#works').html(data.page);
$('#work').modal('show');
},
error:function(err){
//alert("error"+JSON.stringify(err));
}
});
}
</script>
<style type="text/css">
  #work .modal-dialog {
    max-width: 700px;
}
</style>