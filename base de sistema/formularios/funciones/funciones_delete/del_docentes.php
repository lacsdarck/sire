<?php 
  include("conexion.php");
  $num=$_POST['numero'];
  $grupo=$_POST['grupo'];  
  $sql="DELETE from jardinexp.docentes where  docentes.iddocente='$num' and docentes.idgrup='$grupo'";
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