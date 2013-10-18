<?php 
session_start ();
date_default_timezone_set("Mexico/General");	
	if (isset($_SESSION['agent']) AND ($_SESSION['agent'] == md5($_SERVER['HTTP_USER_AGENT']) ) AND isset($_SESSION['usuario'])) {
	
	
	$op = (int)(@$_GET['app']);
	
	switch ($op) {
		
		default :
		
			$_GET['opcion'] = 1;
			$modulo = "nomina/";
			$js_lib = array('js/obj/obj_nomina.js' );
			
		
		break;
		
		
		
		case 0:
		
		$modulo = "usuarios/";
		
		$js_lib = array(
					'js/obj/obj_usuario.js', 					
				
					);
		
		break;
		
		
		case 1 : // ordenes

			
			$modulo = "ordenes/";
			$js_lib = array(
					'js/obj/obj_orden.js', 					
					'js/obj/obj_vehiculo.js',
					'js/obj/obj_cliente.js',
					'js/obj/obj_aseguradora.js',
					'js/obj/obj_material.js', 			
					'js/obj/obj_refaccion.js', 
					'js/obj/obj_calendar.js', 
					);
					
			$css_lib = array('css/calendar.css');		
			
			
		break;
			
		
		case 2 : // nomina
			$modulo = "nomina/";
			$js_lib = array('js/obj/obj_nomina.js' ,'js/obj/obj_prestamo.js','js/obj/obj_acumulados.js','js/obj/obj_caja.js' );
			
			
		break; 
		
		case 3 : // almacen 
			
			$modulo = "almacen/";
			$js_lib = array('js/obj/obj_material.js' , 'js/ext/ext_material.js','js/obj/obj_proveedor.js','js/ext/ext_proveedor.js','js/obj/obj_refaccion.js','js/ext/ext_refaccion.js','js/obj/obj_pintura.js'
			);
			
		break; 
		
		
		
		case 4 : // clientes
			
			$modulo = "clientes/";
			$js_lib = array('js/obj/obj_cliente.js' , 'js/ext/ext_cliente.js','js/obj/obj_vehiculo.js','js/ext/ext_vehiculo.js','js/obj/obj_aseguradora.js');
			
			
		
		break; 
		
		
		
		case 5 : // ayuda
			
			$modulo = "ayuda/";
			
		
		break; 
		
		
			
	}
	
	include_once 'fn/db_conexion.php';
	include_once 'fn/fn_functions.php';
	include_once 'inc/header.php';
	include_once 'portal/'.$modulo.'index.php';
	include_once 'inc/footer.php';
	

	} else {
		
		include_once 'portal/login.php';
	}

?>
