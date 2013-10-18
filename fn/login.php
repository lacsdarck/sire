<?php 
if (isset($_POST['p_usuario']) && isset($_POST['p_password']) && isset($_POST['envio'])  ) {	
		require_once '../fn/conexion.php';

		$usuario = $db->real_escape_string(trim($_POST['p_usuario']));
		
		$password = sha1($db->real_escape_string(trim($_POST['p_password'])));
		
				// buscar en base de datos ... 
				
				$q = "SELECT * FROM usuarios WHERE usuario = '$usuario' 
						AND password = '$password'
						AND estado = '1'";
				
					$result = $db->query($q);
					
				if ($result->num_rows == 1) {
					
					$usuario = $result->fetch_object();
					// sessiones de acceso ...  
					
					session_start();
					
					$_SESSION['id_usuario'] = $usuario->id_usuario;
					$_SESSION['usuario'] = $usuario->usuario;
					$_SESSION['email'] = $usuario->email;		
					$_SESSION['perfil'] = $usuario->perfil;			
					$_SESSION['imagen'] = $usuario->imagen;					
					$_SESSION['agent'] = md5($_SERVER['HTTP_USER_AGENT']);

					// ---------------------------------------------------
					
					
					$response = array (
				
						'access' => true ,
						'url' => 'index.html' , 
						'mensaje' => 'acceso correcto , entrando al sistema', 
					);
					
					
					// ---------------------------------------------------
					
				} else { // no se encontro el usuario 
					
				
					
					
					$response = array (
				
						'access' => false , 
						'url' => 'login.html', 
						'mensaje' => 'acceso denegado , intente nuevamente', 
					);
					
				
					
				}
			

$db->close();
echo json_encode($response);
				
}
?>