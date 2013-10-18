<?php 
  include("conexion.php");
  $num=$_POST['numero'];
   $grupo=$_POST['grupo'];
    $tutor=$_POST['tutor'];
  
   $sql="DELETE FROM jardinexp.alumnos WHERE alumnos.idalumno='$num' and alumnos.idgrup='$grupo' and alumnos.tutor_idtutor='$tutor'";
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