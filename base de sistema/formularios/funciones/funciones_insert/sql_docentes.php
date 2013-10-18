<?php
include("../conexion.php");
$nombre=$_POST["nombre"];
$apellido_paterno=$_POST["appdocente"];
$apellido_materno=$_POST["apmdocente"];
$rfc=$_POST["rfc"];
$curp=$_POST["curp"];
$clavepresu=$_POST["clave"];
$fechaingreso=$_POST["fecha"];
$preparacion=$_POST["preparacion"];
$domicilio=$_POST["domicilio"];
$colonia=$_POST["colonia"];
$localidad=$_POST["localidad"];
$municipio=$_POST["municipio"];
$cpostal=$_POST["codigo"];
$telefono=$_POST["telefono"];
$funciondesempe=$_POST["funcion"];

	$q1="INSERT INTO docentes(nombre,apellido_paterno,apellido_materno,rfc,curp,clavepresu,fechaingreso,preparacion,domicilio,colonia,localidad,municipio,cpostal,telefono,funciondesempe) VALUE ('$nombre','$apellido_paterno','$apellido_materno','$rfc','$curp','$clavepresu','$fechaingreso','$preparacion','$domicilio','$colonia','$localidad','$municipio','$cpostal','$telefono','$funciondesempe')";
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
