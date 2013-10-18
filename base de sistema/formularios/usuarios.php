<h1 align="center"><font color="blue">REGISTRO DE USUARIOS AL SISTEMA</font></h1>
<hr size=4, color="purple"> 
<form action="../../funciones/funciones_insert/sql_usuarios.php" id="1" name="usuarios" method="post">
   <p>usuario:<input  type="text" name="nodecontrol" id="usu" /></p>  
   <p>password:<input type="password" name="contra" id="contra" /></p>
    <td><label>elija tipo de usuario:</label></td>
     <td colspan="3">
                    <select name="tipo" id="tipo">
                    <option value='1'>padre</option>       
                    <option value='2'>docente</option>           	
                    </select>  
   <p><input type="submit" name="aceptar" id="aceptar" value="Guardar Cambios" /></p>
</form>
<p align="right"><img src="../images/logosire.png"></p>