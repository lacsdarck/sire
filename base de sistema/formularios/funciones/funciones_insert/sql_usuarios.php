<?php
include("conexion.php");
$nodecontrol=$_POST["nodecontrol"];
$contra=$_POST["contra"];
$tipo=$_POST["tipo"];

	$q1="INSERT INTO usuarios (nodecontrol,contra,tipo) VALUE ('$nodecontrol','$contra','$tipo')";
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
