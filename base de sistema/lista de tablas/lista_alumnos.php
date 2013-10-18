<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>                    
  <head>                                             
    <title> lista de alumnos </title>                    
  </head>                    
  <body>
 <script type= "text/javascript">
      function checkFormulario()
      {
         if (document.forms.form2.nombre.value == "")
         {
            alert ('debe introducir un texto');
            return (false);
         }
         else
            return (true);
      }
    </script>  
 <?php
#Conexion a  la base de datos.
$host="localhost";
$username="root";
$password="root";
$db_name="guarderia";

  mysql_connect("$host", "$username", "$password")or die("cannot connect server "); 
  mysql_select_db("$db_name")or die("cannot select DB");

       $sql="SELECT DISTINCT nombre,apellido_paterno,apellido_materno,fecha_nacimiento,curp,sexo,domicilio,colonia,codigop,
	   localidad,municipio,grado,grupo FROM  alumnos,grupo";
      $result=mysql_query($sql);
  ?>   
   <div><center>ESTOS SON LOS ALUMNOS REGUISTRADOS HASTA EL MOMENTO</center></div><br><br>
  <table width="1170" border="2" cellspacing="0" cellpadding="0">
  <tr align="center">
    <td width="80" bgcolor="#99FFCC"><div>nombre</div></td>
    <td width="128" bgcolor="#99FFCC"><div>apellido paterno</div></td>
    <td width="128" bgcolor="#99FFCC"><div>apellido materno</div></td>
    <td width="132" bgcolor="#99FFCC"><div>fecha de nacimiento</div></td>
     <td width="65" bgcolor="#99FFCC"><div>curp</div></td>
     <td width="67"bgcolor="#99FFCC"><div>sexo</div></td>
     <td width="72"bgcolor="#99FFCC"><div>domicilio</div></td>
     <td width="81"bgcolor="#99FFCC"><div>colonia</div></td>
     <td width="86"bgcolor="#99FFCC"><div>codigo postal</div></td>
     <td width="75"bgcolor="#99FFCC"><div>localidad</div></td>
     <td width="87"bgcolor="#99FFCC"><div>municipio</div></td>
     <td width="90"bgcolor="#99FFCC"><div>grado</div></td>
      <td width="74"bgcolor="#99FFCC"><div>grupo</div></td>
  </tr>
  <? while ($rows = mysql_fetch_array($result)){?>
  <tr>
    <td>
      <?=$rows['nombre']?>
    </td>
    <td>
      <?=$rows['apellido_paterno']?>
  </td>
    <td>
      <?=$rows['apellido_materno']?>
   </td>
   <td>
      <?=$rows['fecha_nacimiento']?>
   </td>
    <td>
      <?=$rows['curp']?>
   </td>
    <td>
      <?=$rows['sexo']?>
   </td>
    <td>
      <?=$rows['domicilio']?>
   </td>
   <td>
      <?=$rows['colonia']?>
   </td>
    <td>
      <?=$rows['codigop']?>
   </td>
     <td>
      <?=$rows['localidad']?>
   </td>
     <td>
      <?=$rows['municipio']?>
   </td>
     <td>
      <?=$rows['grado']?>
   </td>
    <td>
      <?=$rows['grupo']?>
   </td>
  </tr>
  <? }?>
</table>