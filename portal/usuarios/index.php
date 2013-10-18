<?php 

$opc = (int)(@$_GET['opcion']);
	
	 $inc = 'portal/'.$modulo.'frm/';
	
	switch ($opc) {
		
		case 0 : // 
			
			include $inc.'tbl_usuarios.php';
		
	break;
		
	}
	

?>