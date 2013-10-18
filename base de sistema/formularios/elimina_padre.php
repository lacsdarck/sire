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

       $sql="SELECT * FROM  padres";
      $result=mysql_query($sql);
  ?>   
  <table width="852" border="2" cellspacing="0" cellpadding="0">
  <tr align="center">
    <td width="110" bgcolor="#99FFCC"><div>id padres</div></td>
    <td width="70" bgcolor="#99FFCC"><div>tutor</div></td>
    <td width="83" bgcolor="#99FFCC"><div>madre</div></td>
    <td width="114" bgcolor="#99FFCC"><div>nombre</div></td>
     <td width="105" bgcolor="#99FFCC"><div>escolaridad</div></td>
      <td width="152"bgcolor="#99FFCC"><div>fecha de nacimiento</div></td>
       <td width="110"bgcolor="#99FFCC"><div>correo</div></td>
        <td width="88"bgcolor="#99FFCC"><div>celular</div></td>
  </tr>
  <? while ($rows = mysql_fetch_array($result)){?>
  <tr>
    <td>
      <?=$rows['idpadres']?>
    </td>
    <td>
      <?=$rows['tutor']?>
  </td>
    <td>
      <?=$rows['madre']?>
   </td>
   <td>
      <?=$rows['nombre']?>
   </td>
    <td>
      <?=$rows['escolaridad']?>
   </td>
    <td>
      <?=$rows['fechanacimiento']?>
   </td>
    <td>
      <?=$rows['e-mail']?>
   </td>
   <td>
      <?=$rows['celular']?>
   </td>
  </tr>
  <? }?>
</table>
  <br><br>
    <strong>ELIMINA PADRES</strong><br>
                                           
    <form id="form2" name="form2" method="post" action="../../funciones/funciones_delete/del_padres.php" onSubmit="return(checkFormulario())">
    
      dame el id: <input name="numero" type="text" id="numero" size="40" /><br>
      <input type="Submit" name="Submit" value="eliminar" />                                                      
      <input type="reset" name="Submit2" value="Reiniciar" />                                      
    </form>    
    <p><br>                                     
    </p>                                
     </body
   ></html>