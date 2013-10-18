<script>
	$(function () {
		
		obj_usuario.listar($('#tbl_usuarios'),1);
	
			
			
	var info = $('#dialog').find('#info');
		
		$('a#btn_nuevo').click(function () {
			
			$('#frm_usuario').attr('action' , 'ajax/ajax_usuario.php?opcion=1');
			info.text('Ingrese los datos del usuario');
			$('#dialog').dialog('open');
			obj_usuario.consultar($('#frm_usuario') , $(this).attr('rel'));
			
			
			return false;	
		});
		
		$('#dialog').dialog({
				autoOpen: false,
				height: 550,
				width:720 , 
				modal: true,
				draggable : false , 
				resizable: false,
				close : function (event , ui ) {
					$('#frm_usuario').attr('action' , 'ajax/ajax_usuario.php?opcion=3');
						info.text('Modifica los datos del cliente');
					
						clear($(this));
				} ,
				show: "clip",
				hide: "clip" ,
				buttons: {
					
					'Guardar': function() {
						$(this).dialog('close');
						// Submit Rating
						obj_usuario.registrar($('#frm_usuario'));
						
						
						
					},
					
						
				
					'Cancelar': function() {
						$(this).dialog('close');
					// Update Rating
					}
		}
		});

	});
</script>

<div class="titulo"><img src="img/icons/set2/clientes2.png" />
  <h1>Consulta de Usuarios</h1>
</div>
<hr />

<table id="tbl_usuarios" class="tbl_listado">
  <thead>
    <tr>
      <th>ID</th>
      <th>Usuario</th>
       <th>Nombre</th>

      <th></th>
      <th></th>
     
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
<ul class="table_page">
</ul>

<div id="opciones"> <a href="#" id="btn_nuevo">Agregar nuevo</a> </div>

<div id="dialog" title="Detalle de Cliente">
  <p id="info">Modifica los datos del cliente</p>


<form   class="style1" id="frm_usuario" action="ajax/ajax_usuario.php?opcion=4">

<input type="hidden" name="id_usuario"  id="id_usuario" />

<table>
<tr>
<td><label for="usuario" >Usuario</label></td>
<td><input type="text"   id="usu"   name="usu"  /></td>
</tr>
<tr>
<td><label label="pass" >Password</label></td>
<td><input type="text" id="pass" name="pass"  /></td>
</tr>

<tr>
<td><label for="nombre">Nombre</label></td>
<td><input type="text" id="nombre" name="nombre"  /></td>
</tr>

<tr>
<td><label for="estado">Estado</label></td>
<td><input type="text" id="estado" name="estado" value="1"   /></td>
</tr>

<tr>
<td><label for="perfil">Perfil</label></td>
<td><input type="text" id="perfil" name="perfil" value="1"     /></td>
</tr>
</table>
</form>
</div>