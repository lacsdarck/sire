
</head>
<body>
<form action="formularios/funciones/funciones_insert/sql_alumnos.php" method="post">
  <h1 class="title1" align="center"><font color="blue">SOLICITUD DE INSCRIPCION</font></h1>
  <h2 class="title2" align="center"><font color="blue">CICLO ESCOLAR 2011-2012</font></h2>
  <hr size=4, color="purple">
  <table width="100%" border="0">    
    <tr>
      <td><label>Fecha:</label></td>
      <td><input type="date"  name="mifecha" id="mifecha" required="required" size="22"/></td>
    </tr>
    <tr>
    <td><label>Grado:</label></td>
     <td colspan="3">
                    <select name="grado" id="grado">
                    <option value='primero'>primero</option>       
                    <option value='segundo'>segundo</option>      
                    <option value='tercero'>tercero</option>       	
                    </select>   
     Grupo: 
     <input name="grupo" type="radio"id="grupo" value="A" checked="checked">
      A
      <input name="grupo" type="radio" value="B"id="grupo">
      B
       <input name="grupo" type="radio" value="C" id="grupo">
      C </td>
    </tr>
<tr>
    <td width="139"><label>Nombre:</label></td>
    <td width="781"><input type="text" name="nombre" id="nombre" required="required" /></td>
</tr>
<tr>
   <td><label> apellido paterno:</label></td>
   <td><input type="text" name="apellido_paterno" id="app" required="required"> 
      apellido materno:<input type="text" name="apellido_materno" id="apm" required="required"></td>
</tr>
    <tr>
      <td><label>curp:</label></td>
      <td><input type="text" name="curp" id="curp" required="required"> </td>
    </tr>
    <tr>
      <td><label>sexo:</label></td>
      <td colspan="2">
                     <select name="sexo" id="sexo" />                  
                     <option value="femenino">femenino</option>       
                     <option value="masculino">maculino</option>             	
                     </select>              
      </td>
    </tr>
    <tr>
      <td><label>domicilio:</label></td>
      <td><input type="text" name="domicilio" id="dom"></td>
    </tr>
    <tr>
      <td><label>localidad:</label></td>
      <td><input type="text" name="localidad" id="loc">
      colonia: <input type="text" name="colonia" id="col"></td>
    </tr>
    <tr>
      <td><label>municipio:</label></td>
      <td><input type="text" name="municipio" id="municipio">
      codigo postal: <input type="text" name="codigop" id="codigo"> </td>
    </tr>   
  </table>  
      <input type="submit" name="aceptar" id="aceptar" value="Guardar Cambios" />
      </form>
