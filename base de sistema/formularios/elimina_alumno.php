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
  <table width="852" border="2" cellspacing="0" cellpadding="0">
  <tr align="center">
    <td width="110" bgcolor="#99FFCC"><div>id alumno</div></td>
    <td width="70" bgcolor="#99FFCC"><div>nombre</div></td>
    <td width="83" bgcolor="#99FFCC"><div>apellido paterno</div></td>
    <td width="114" bgcolor="#99FFCC"><div>apellido materno</div></td>
    <td width="105" bgcolor="#99FFCC"><div>fecha de nacimiento</div></td>
    <td width="152"bgcolor="#99FFCC"><div>curp</div></td>
    <td width="110"bgcolor="#99FFCC"><div>id grupo</div></td>
    <td width="88"bgcolor="#99FFCC"><div>tutor_idtutor</div></td>
  </tr>
  <? while ($rows = mysql_fetch_array($result)){?>
  <tr>
    <td>
      <?=$rows['idalumno']?>
    </td>
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
      <?=$rows['idgrup']?>
   </td>
   <td>
      <?=$rows['tutor_idtutor']?>
   </td>
  </tr>
  <? }?>
</table>
  <br><br>
    <strong>ELIMINA PADRES</strong><br>
                                           
    <form id="form2" name="form2" method="post" action="del_alumnos.php" onSubmit="return(checkFormulario())">
    
      dame el id: <input name="numero" type="text" id="numero" size="40" /><br>
      id grupo: <input name="grupo" type="text" id="numero" size="40" /><br>
      id tutor: <input name="tutor" type="text" id="numero" size="40" /><br>
      
      <input type="Submit" name="Submit" value="eliminar" />                                                      
      <input type="reset" name="Submit2" value="Reiniciar" />                                      
    </form>    
    <p><br>                                     
    </p>                                
     </body
   ></html>