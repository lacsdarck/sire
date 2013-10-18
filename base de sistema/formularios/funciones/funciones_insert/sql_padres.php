<?php
include("conexion.php");
$nombre=$_POST["nomtutor"];
$escolaridad=$_POST["escolar"];
$fecha=$_POST["fecha_nac"];
$correo=$_POST["e_mail"];
$numtelefono=$_POST["telefono"];
$celular=$_POST["cel"];

	$q1="INSERT INTO padres(nombre,escolaridad,fechanacimiento,e-mail,numtelefono,celular) VALUE 
	('$nombre','$escolaridad','$fecha','$correo','$numtelefono','$celular')";
	$result=mysql_query($q1) or die(mysql_error());

    if($q1)
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

