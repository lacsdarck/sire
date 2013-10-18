<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SIRE</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/table.css" rel="stylesheet" type="text/css" />
<link href="css/forms.css" rel="stylesheet" type="text/css" />

<link href="js/jquery/css/Aristo/Aristo.css" rel="stylesheet" type="text/css" />
<link href="js/plugins/timepicker/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css" />
 <?php load_css(@$css_lib); ?> 
<script src="js/jquery/js/jquery-1.7.2.min.js"></script>
<script src="js/jquery/js/jquery-ui-1.8.21.custom.min.js"></script>
<script src="js/plugins/timepicker/jquery-ui-timepicker-addon.js"></script>
<script src="js/plugins/timepicker/jquery-ui-sliderAccess.js"></script>
<script src="js/plugins/timepicker/localization/jquery-ui-timepicker-es.js"></script>

<script src="js/modernizr.js"></script>
<script src="js/html5.js"></script>
<script src="js/forms.js"></script>


<script src="js/obj/obj_usuario.js" type="text/javascript"></script>

<?php load_js(@$js_lib); ?> 
<script>
	$(function () {
		
		
		// eventos programas ... 
		
			$('#app_chat').click(function () {
					
				obj_usuario.online();
				
				return false;
			});
		
		
		
		// --------------------------
		
		$('#login_menu')
			.css('opacity','0.9')
			.hide();


		
		
		$(document).ready(function(){ 
			$('#menu_principal ul.principal li a.op:eq(<?php echo $op; ?>)').addClass('alt');
		});
		
		
		$('ul.principal li a.op').click(function () {
			
			if (!$(this).hasClass('select')) {
			$('#menu_principal ul.submenu')
				.slideUp('slow')
			$('#menu_principal ul.principal li a.op').removeClass('select');
			
			$(this)
			.addClass('select')
			.parent().find('ul.submenu').slideToggle('slow');
			}
			
			return false;	
		});
		
		
		
	
		
		$('#link_menu_login').click(function () {
			
			$('ul#login_menu').slideToggle();
			
			return false;	
		});
	
	});
	
</script>
</head>

<body>
<header>
  <div class="content">
  <!-- <img src="img/xromcloud.png" style="position:absolute; left:30px; top:5px;" /> -->
	<div id="frm_timeline">
    <form>
    	<a href="#" id="btn_search">alumno</a><input type="text" id="buscar" name="buscar" placeholder="buscar en el sistema" />
        <ul id="menu">
        	<li><a href="#">Agenda</a></li>
            <li><a href="#">Clientes</a></li>
            <li><a href="#">Empresas</a></li>
        </ul>
        
    </form>
    </div>
    <div id="usuario">
    <ul class="list_icons">
    	
    	<li><a href="#" id="app_chat"><img src="img/icons/set4/message.png" /></a></li>
    	<li><a href="#"><img src="img/icons/set4/tool.png" /></a></li>
        
        
    </ul>
   
    <a href="#" id="link_menu_login"> <?= $_SESSION['nombre']; ?></a>
    
    <ul id="login_menu">
    	<li><a href="configuracion.html"><span class="icon config">Configuracion</span></a></li>
        <li><a href="ayuda.html"><span class="icon help">Ayuda</span></a></li>
        <li><a href="logout.html"><span class="icon logout">Cerar Sesion</span></a></li>
    </ul>
    </div>
    
    
  </div>
</header>
<div id="main">
<div id="menu_principal">
 <ul class="principal">
 
 
 
  <li><a href="#" class="op"><span class="nomina icon">Usuarios</span></a>
   <ul class="submenu">
        <li><a href="usuario-consulta.html">Consulta Usuarios</a></li>
      </ul>
  </li>
  
   <!--  <li><a href="#" class="op"><span class="orden icon">Ordenes</span></a>
      <ul class="submenu">
        <li><a href="orden-cliente-nuevo.html">Orden Cliente</a></li>
        <li><a href="orden-aseguradora-nuevo.html">Orden Aseguradora</a></li>
        <li><a href="orden-consulta.html">Todas las ordenes</a></li>
        <li><a href="orden-calendario.html">Calendario</a></li>

      </ul>
    </li>
    <li><a href="#" class="op"><span class="nomina icon">Nomina</span></a>
      <ul class="submenu">
        <li><a href="empleado-consulta.html">consulta empleados</a></li>
        <li><a href="caja-ahorro.html">Caja de Ahorro</a></li>
         <li><a href="prestamos.html">prestamos</a></li>
         <li><a href="acumulados.html">acumulados</a></li>
        <li><a href="nomina-nueva.html">crear nomina</a></li>
        <li><a href="empleado-nomina.html">consulta nominas</a></li>
      </ul>
    </li>
    <li><a href="#" class="op"><span class="almacen icon">Almacen</span></a>
    	<ul class="submenu">
        	
            <li><a href="material-consulta.html">consulta material</a></li> 
            
            <li><a href="refaccion-consulta.html">consulta refacciones</a></li>
             
             <li><a href="pintura-consulta.html">consulta pinturas</a></li> 
           
            <li><a href="proveedor-consulta.html">consulta proveedor</a></li>         
        </ul></li>
    <li><a href="#" class="op"><span class="clientes icon">Clientes</span></a>
    	<ul class="submenu">
        	    
            <li><a href="cliente-consulta.html">consulta cliente</a></li>
            
             <li><a href="aseguradora-consulta.html">consulta Aseguradora</a></li>
             
            
            <li><a href="auto-consulta.html">consulta auto</a></li>
        
        </ul></li>
    <li><a href="#" class="op">
    <span class="reportes icon">Reportes</span></a>
    <ul class="submenu">
        	    
            <li><a href="reporte-prueba.html" target="_blank">Imprimir Reporte</a></li>
            
        
        
        </ul>
    
     -->
    
  </ul>
</div>
<div id="panel_principal">
<div class="panel">
