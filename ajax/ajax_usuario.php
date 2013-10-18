<?php

	
	// registro de empleado ...
	require_once '../fn/db_conexion.php';
	
	$op = (int)(@$_GET['opcion']);
	$n_page = 10;
	
	switch ($op) {
	
		case 1 : // listar usuarios .. 
		
		
	$usuario = $db->real_escape_string(trim($_POST['usu']));
	$pass = $db->real_escape_string(trim($_POST['pass']));
	$nombre = $db->real_escape_string(trim($_POST['nombre']));
	$estado = $db->real_escape_string(trim($_POST['estado']));
	$perfil = $db->real_escape_string(trim($_POST['perfil']));
	
	
$q="INSERT INTO usuarios(id_usuario,usuario, password, nombre, estado, perfil) VALUES (NULL,'$usuario', SHA1('$pass'), '$nombre', '$estado', '$perfil')";



			if($db->query($q)) {
			
		
				
				$response = array (
					
					'estado' => '1'  , 
					'mensaje' => 'el cliente fue registrado'  , 
					 
					
				); 
			
			} else {
					
					$response = array (
					'estado' => '0'  , 
					'mensaje' => 'el cliente no pudo ser registrado'  
			
					
				); 
				
				
			}
		
	break;
	
	
	case 2 : // clientes
	
	
		$page = (int)(@$_GET['page']);
		
			$page = abs($page - 1) * $n_page;
			
		
			$q = "SELECT * FROM usuarios ORDER BY id_usuario DESC LIMIT  $page , $n_page ";
			
			
			$result = $db->query($q);
			
			$registros = array ();
			while ($cliente = $result->fetch_object()) {
			
				
				$registros[] = array (
					'id_usuario' => $cliente->id_usuario , 
					'pass' => $cliente->password , 
					'usuario' =>$cliente->usuario , 
					'nombre' =>$cliente->nombre , 
				
					
					
				);	
			}
			
			
			// total de registros ... 
			
			$q = "SELECT count(id_usuario) as total FROM usuarios";
			$result = $db->query($q);
			$row = $result->fetch_object();
			
			$paginado = ceil($row->total / $n_page);
			$response = array(
					
					'total' => $row->total,
					'n_page' => $n_page,
					'paginado' => $paginado ,
					'registros' => $registros
				
				);
			 
	
	
	break;
	
	case 3 : // actualizar datos 


    $id_usuario = $db->real_escape_string(trim($_POST['id_usuario']));
    $usuario = $db->real_escape_string(trim($_POST['usu']));
	$pass = $db->real_escape_string(trim($_POST['pass']));
	$nombre = $db->real_escape_string(trim($_POST['nombre']));
	$estado = $db->real_escape_string(trim($_POST['estado']));
	$perfil = $db->real_escape_string(trim($_POST['perfil']));
		
			$q = "UPDATE usuarios set  usuario='$usuario', password=SHA1('$pass'), nombre='$nombre', estado='$estado', perfil='$perfil' WHERE id_usuario='$id_usuario'";
			
			if($db->query($q)) {
			
		
				
				$response = array (
					
					'estado' => '1'  , 
					'mensaje' => 'datos del cliente actualizados correctamente'  , 
					 
					
				); 
			
			} else {
					
					$response = array (
					'estado' => '0'  , 
					'mensaje' => 'no se pudiero acutualizar los datos del cliente'  
			
					
				); 
				
				
			}
			
			
			
	
	break;
		
		
		case 4:

$id_usuario = $db->real_escape_string(trim($_GET['id']));
		
			$q = "SELECT * FROM usuarios where id_usuario = '$id_usuario'";
			
			$result = $db->query($q);
			$cliente = $result->fetch_object();
			
			
				$response = array (
				    'id_usuario' => $cliente->id_usuario , 
					'usuario' => $cliente->usuario , 
					'pass' =>$cliente->password , 	
					'nombre' =>$cliente->nombre , 	
					'perfil'  =>$cliente->perfil , 
					'estado' =>	$cliente->estado , 
					
					
					
				);	
				
				
	
	break;
		
		
		case 5:
		
		$id_usuario= $db->real_escape_string(trim($_GET['id_usuario']));
		
		$q="DELETE  from usuarios  WHERE id_usuario='$id_usuario'";

		
		
			if($db->query($q)) {
			
		
				
				$response = array (
					
					'estado' => '1'  , 
					'mensaje' => 'el usuario fue eliminado'  , 
					 
					
				); 
			
			} else {
					
					$response = array (
					'estado' => '0'  , 
					'mensaje' => 'el cliente no pudo ser registrado'  
			
					
				); 
				
				
			}
		
	break;
		
	
		
	}
	
	
	echo json_encode($response);

?>