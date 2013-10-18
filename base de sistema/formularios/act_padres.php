<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>                    
  <head>                                             
    <title> ACTUALIZAR </title>                    
  </head>                    
  <body>
  
    <script type= "text/javascript">
      function checkFormulario()
      {
         if (document.forms.form1.nombre.value == "")
         {
            alert ('Debe introducir el Nombre');
            return (false);
         }
         else
            return (true);
      }
    </script><br>
                                     
    <form id="form1" name="form1" method="post" action="../../funciones/funciones_actualizar/f_act_padre.php" onSubmit="return(checkFormulario())">
    
      <h3>INTRODUCIR EL ID PADRE DE LOS CAMPOS A MODIFICAR</h3>
      id padre: <input name="id" type="text" id="clave" size="40" /><br>
      
      <br>
      <br>
      
      <h3>Datos nuevos</h3>
      
      Nombre: <input name="nombre" type="text" id="edadn" size="40" /><br>
      Escolaridad: <input name="escolaridad" type="text" id="ciudadn" size="40" /><br>
      fecha de nacimiento: <input name="fecha" type="text" id="becan" size="40" /><br>
      telefono: <input name="telefono" type="text" id="becan" size="40" /><br>
      celular: <input name="celular" type="text" id="becan" size="40" /><br>
      
      
    <input type="Submit" name="Submit" value="Modificar" /> 
</form>                             
    <br>                                     
    <a href="../../lista de tablas/lista_padres.php">lista de alumnos</a> </strong>         
    <br>                     
  </body>
</html>