<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SISTEMA  DE INFORMACION</title>
<link href="css/login.css" rel="stylesheet" type="text/css">
<script src="js/jquery/js/jquery-1.7.2.min.js"></script>
<script src="js/obj/obj_main.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('#mensaje').hide();   
        $('#frm_login').submit(function () {
            
                obj_main.login($(this));
                
                
                return false;
        });
        
    });

</script>
</head>

<body>
<div id="header"> 

 <img src="img/jardin.png" style="float:left;margin-left:50px;" />
  <p style="text-align:center;font-size:22px;">SISTEMA DE INFORMACION Y RENDIMIENTO ESCOLAR</p>
  
  <ul class="l_menu">
    <li><a href="#">Ayuda</a></li>
    <li><a href="#">Principal</a></li>
  </ul>
</div>


<div id="main">

<div id="image">

 <img src="img/sire.png"/>
 
 </div>
 
  <div id="login">
   <div class="panel">
    
<form id="frm_login" method="post" action="login.html">
            
            <h1 style="text-align:center;">ACESO AL SISTEMA</h1>
            <p id="mensaje"></p>
                <table>
                    <tr>
                        <td><input type="text" name="usuario" id="usuario" placeholder="usuario" required /></td>
                    </tr>
                    
                    <tr>
                        <td><input type="password" name="password" id="password" placeholder="password" required /></td>
                    </tr>
                    
                    
                </table>
                <input type="submit" value="Entrar al Sistema" />
                
                <input type="hidden" name="envio" value="TRUE" />
      </form>
    </div><!--panel-->
  </div><!--login-->
  
    <!--<ul class="submenu">
        <li><a href="#">Recuperar Password</a></li>
        <li><a href="#">Soporte Tecnico</a></li>
        <li><a href="#">Ayuda</a></li>
    </ul>-->
 
    
</div><!--main-->  
 
<footer>
   <div class="content">
    <div id="contacto_empresa">
<p><b>Contáctanos</b>: lacsdarck@gmail.com  Teléfono Oficina : ( 753 ) 53 2 15 20, Calle paracho #9 col. 600 casas. </p>
    </div>
    
    <div id="firma">
    
      <center>
      
        <img src="img/xrom.png">
        
        <div>
          <p>Desarrollando Sistemas para tu Negocio</p>
         </div>
        
      </center>
 
</div>
</div>
</footer>
</body>
</html>
