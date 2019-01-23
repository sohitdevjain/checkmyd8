<?php    
	
	include "qrlib.php";    
    $filename = time().'.png';
	$errorCorrectionLevel = 'M';
    $matrixPointSize = min(max((int)8, 1), 10);
	QRcode::png($_REQUEST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
     //display generated file
    echo '<img src="'.$filename.'" /><hr/>';  
?>	
  
    