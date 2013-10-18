<?php 
include("conexion.php");
  
  $id=$_POST['id'];
  
  $nombre=$_POST['nombre'];
  $escolaridad=$_POST['escolaridad'];
  $fecha=$_POST['fecha'];
  $telefono=$_POST['telefono'];
  $celular=$_POST['celular'];
  
  $sql="UPDATE jardinexp.padres set nombre='$nombre', escolaridad='$escolaridad', fechanacimiento='$fecha',numtelefono='$telefono',celular='$celular' WHERE  padres.idpadres='$id'";
  $result=mysql_query($sql);
  
	if($_POST["id"]!="")
	{
	  if($result)
	  {
		
		echo "<h1><center>Operacion realizada exitosamente</center></h1>";
		echo "<BR>";
		echo "<a href='../../lista de tablas/lista_padres.php'>lista de alumnos</a> </strong>";   
	  }
	  else 
	  {
		echo "ERROR";
	  }
	}

  mysql_close();
?>