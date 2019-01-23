jQuery(document).ready(function($) {
$('.changeStatus').click(function() {
	 var statusVal=$(this).attr("data-apr");
	  var statusVal_v=$(this).attr("data-v");
	  $.post(baseurl+"AdminManager/changeUserStatus",
    {
        newststus: statusVal
       },
    function(data, status){
		if(data=='SUCCESS'){
			
			if(statusVal_v=='0'){
				alert('Member un-Approve Succcessfully !');
				$(this).attr("class",'btn btn-warning changeStatus');
				$(this).attr("data-apr",'1');
				$(this).html("Un-Approve");
			}else{
				$(this).attr("class",'btn btn-success changeStatus');
				$(this).html("Approve");
				$(this).attr("data-apr",'0');
				alert('Member Approve Succcessfully !');
			}
			location.reload();
		}else{
			alert("Please Try Again");	
		}
        
    });
});
});