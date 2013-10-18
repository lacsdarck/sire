<?php
include("../conexion.php");
$nombre=$_POST['nombre'];
$apellido_p=$_POST['apellido_paterno'];
$apellido_m=$_POST['apellido_materno'];
$fecha=$_POST['mifecha'];
$curp=$_POST['curp'];
$sexo=$_POST['sexo'];
$domicilio=$_POST['domicilio'];
$colonia=$_POST['colonia'];
$codigop=$_POST['codigop'];
$localidad=$_POST['localidad'];
$municipio=$_POST['municipio'];
$grado=$_POST['grado'];
$grupo=$_POST['grupo'];

	$q1= "INSERT INTO alumnos (nombre,apellido_paterno,apellido_materno,fecha_nacimiento,curp,sexo,domicilio,colonia,codigop,localidad,municipio) VALUES ('$nombre','$apellido_p','$apellido_m','$fecha','$curp','$sexo','$domicilio','$colonia','$codigop','$localidad','$municipio')";
	
	$q2="INSERT INTO grupo (grado,grupo) VALUE ('$grado','$grupo')";
	
	
	
	$result=mysql_query($q1) or die(mysql_error());
	$result2=mysql_query($q2) or die (mysql_error());
		
	if($q1&&$q2)
	{
		echo "<center>";
		echo "<strong>";
		echo "USUARIO REGISTRADO CORRECTAMENTE";
		echo "</strong>";
		echo "</center>";			
	}
	else
   	{
		echo "<center>";
		echo "<strong>";
	    echo "LOS DATOS NO SON LOS CORRECTOS";
		echo "</strong>";
		echo "</center>";		
   	 }
	 
?>
