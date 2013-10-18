<?php 
  include("conexion.php");
  $num=$_POST['numero'];
   $sql="DELETE FROM jardinexp.padres WHERE padres.idpadres='$num'";
  $result=mysql_query($sql);
  
    if($result)
  {
    echo "DATOS ELIMINADOS CORRECTAMENTE";
    echo "<BR>";
  }
  else 
  {
    echo "ERROR";
  }
  
  mysql_close();
?>