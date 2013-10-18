<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>padres</title>
</head>

<body>
  <h1 class="title1" align="center"><font color="blue">REGISTRO DE PADRES AL SISTEMA</font></h1>
  <hr size="4," color="purple" />
  
  <form action="../../funciones/funciones_insert/sql_padres.php" method="post">
<table>
<tr>
      <td width="201"><label>nombre  del padre :</label></td>
        <td width="916"><input type="text" name="nomtutor" id="nomtutor" required="required" size="34"/>
      fecha de nacimiento: <input  name="fecha_nac" id="fecha_nac"type="date"   required="required" /> 
      escolaridad: <input type="text"  name="escolar"id="escolar" required="required" />
edad: 
<input type="text"  name="edad" id="edad" required="required" /></td>
    </tr>
    <tr>
    <td><label>nombre de la madre:</label></td>
    <td> <input type="text" name="nomadre"id="nomadre" required="required" size="34"/>
        fecha de nacimiento: <input  name="fecha_nac1" id="fecha_nac1" type="date"   required="required" /> 
      escolaridad: <input type="text"  name="escolar1" id="escolar1" required="required" />
edad:
<input type="text"  name="edad2" id="edad2" required="required" /></td>
    </tr>

   <tr>
    <td>Cuenta de usuario para:</td>
    <td>
      <input name="cuenta" type="radio" id="cuenta" value="padre">
      padre
      <input name="cuenta" type="radio" id="cuenta" value="madre">
      madre  </td>
    </tr>
    
 <tr>
   <td><label>Correo electronico:</label></td>
   <td><input type="email" name="e_mail" id="e_mail"placeholder="Campo opcional"/>
     celular: <input type="text" name="cel" id="cel"placeholder="numero completo"required="required"/> 
     telefono de casa: <input type="text" name="telefono" id="telefono" placeholder="numero completo" required="required"/></td>
 </tr>
 </table>
 <input type="submit" name="aceptar" id="aceptar" value="guardar cambios" />
</form>
</body>
</html>