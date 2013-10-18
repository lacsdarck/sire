
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>docentes</title>
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.7.2.custom.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript">
jQuery(function($){
	$.datepicker.regional['es'] = {
		closeText: 'Cerrar',
		prevText: 'Antterior',
		nextText: 'Siguiente;',
		currentText: 'Hoy',
		monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
		'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
		'Jul','Ago','Sep','Oct','Nov','Dic'],
		dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
		dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
		dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
		weekHeader: 'Sm',
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['es']);
});
 
$(document).ready(function() {
   $("#fecha_docent").datepicker();
 });
</script>
</head>
<body>

<h2 class="title1" align="center">&nbsp;</h2>
<h2 class="title1" align="center"><font color="blue">REGISTRO DE DOCENTES AL SISTEMA</font></h2>
  <hr size=4, color="purple"><hr/>
  
<form action="formularios/funciones/funciones_insert/sql_docentes.php" method="post">
<table width="84%" border="0">   
        	<tr>
            	<td width="19%"><label>Nombre:</label></td>
                <td width="16%"><input type="text" name="nombre" id="nomdocente" />  </td>
               <td width="29%"> <label>                 Apellido Paterno:</label>
                <input type="text" name="appdocente" id="appdocente" /></td>
                <td width="36%"><label>Apellido Materno:</label>
                <input type="text" name="apmdocente" id="apmdocente" /></td>
              
            </tr>
             <tr>
            	<td height="26" ><label>Curp:</label></td>
               <td><input type="text" name="curp" id="curpd" /></td>
            </tr>  
             
            <tr>
            	<td ><label>RFC:</label></td>
                <td><input type="text" name="rfc" id="rfcd" /></td>
            </tr>  
              
            <tr>   
            <td ><label>Clave presupuestal:</label></td>
             <td><input type="text" name="clave" id="cvdocent" /></td>
             </tr>
             
             <tr>   
            <td ><label>Fecha de ingreso al sistema:</label></td>
             <td><input type="date" name="fecha" id="fecha_docent" /></td>
             </tr>
             
             <tr>   
            <td ><label>Preparacion academica:</label></td>
             <td><input type="text" name="preparacion" id="prepa_docen" /></td>
             </tr>
             
              <tr>   
            <td ><label>Domicilio:</label></td>
             <td><input type="text" name="domicilio" id="dom_docen" /></td>
             </tr>
             
              <tr>   
            <td ><label>Colonia:</label></td>
             <td><input type="v" name="colonia" id="col_docen" /></td>
             </tr>
             
              <tr>   
            <td ><label>Localidad:</label></td>
             <td><input type="text" name="localidad" id="loc_docen" /></td>
             </tr>
              
               <tr>   
            <td ><label>Municipio:</label></td>
             <td><input type="text" name="municipio" id="mun_docen" /></td>
             </tr>
             
                <tr>   
            <td ><label>Codigo postal:</label></td>
             <td><input type="text" name="codigo" id="cpdocente" /></td>
             </tr>
             
                <tr>   
            <td ><label>Telefono de casa:</label></td>
             <td><input type="text" name="telefono" id="teld"required="required" /></td>
             </tr>
             
                <tr>   
            <td ><label>Funcion a desempeñar:</label></td>
             <td><input type="text" name="funcion" id="funciond" /></td>
             </tr>
     
        </table>
         <input type="submit" value="Guardar Cambios" />
  
</form>
</body>
</html>