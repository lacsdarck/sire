<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>                    
  <head>                                             
    <title> eliminar </title>                    
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
$db_name="jardinexp";

  mysql_connect("$host", "$username", "$password")or die("cannot connect server "); 
  mysql_select_db("$db_name")or die("cannot select DB");

       $sql="SELECT * FROM  docentes";
      $result=mysql_query($sql);
  ?>   
  <table width="852" border="2" cellspacing="0" cellpadding="0">
  <tr align="center">
    <td width="94" bgcolor="#99FFCC"><div>id docente</div></td>
    <td width="66" bgcolor="#99FFCC"><div>Nombre</div></td>
    <td width="108" bgcolor="#99FFCC"><div>apellido paterno</div></td>
    <td width="116" bgcolor="#99FFCC"><div>apellido materno</div></td>
     <td width="60" bgcolor="#99FFCC"><div>rfc</div></td>
      <td width="106"bgcolor="#99FFCC"><div>preparacion </div></td>
       <td width="107"bgcolor="#99FFCC"><div>colonia</div></td>
        <td width="175b"bgcolor="#99FFCC"><div>idgrupo</div></td>
  </tr>
  <? while ($rows = mysql_fetch_array($result)){?>
  <tr>
    <td>
      <?=$rows['iddocente']?>
    </td>
    <td>
      <?=$rows['nombre']?>
  </td>
    <td>
      <?=$rows['apellido_materno']?>
   </td>
   <td>
      <?=$rows['apellido_paterno']?>
   </td>
    <td>
      <?=$rows['rfc']?>
   </td>
    <td>
      <?=$rows['preparacion']?>
   </td>
    <td>
      <?=$rows['colonia']?>
   </td>
   <td>
      <?=$rows['idgrup']?>
   </td>
  </tr>
  <? }?>
</table>
  <br><br>
    <strong>ELIMINA DOCENTES</strong><br>
                                           
    <form id="form2" name="form2" method="post" action="../../funciones/funciones_delete/del_docentes.php" onSubmit="return(checkFormulario())">
    
       dame el iddocente: <input name="numero" type="text" id="numero" size="40" /><br>
       dame el idgrupo: <input name="grupo" type="text" id="numero" size="40" /><br>
                                 
      <input type="Submit" name="Submit" value="eliminar" />
                                                                
      <input type="reset" name="Submit2" value="Reiniciar" />                                      
    </form>    
    <p><br>                                     
    </p>                                
     </body
   ></html>