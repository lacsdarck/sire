obj_usuario = {
registrar : function (form) {
		
		$.ajax({
				
			type : 'POST' , 
			cache : false ,
			data : form.serialize(),
			url: form.attr('action') ,  
			success : function (response) {
					
					
				var obj = $.parseJSON(response);
					
				$('#mensaje').text(obj.mensaje);
				obj_usuario.listar($('#tbl_usuarios'),1);
				
				
			}
					
				
		});
		
		
	},

listar : function (table , page) {
			
		table.find('tbody').html('');
		$.ajax({
				
				url : 'ajax/ajax_usuario.php?opcion=2' , 
				type : 'GET' , 
				data : 'page='+page ,
				cache : false ,
				beforeSend : function () {
					
					table.fadeTo('slow',0.33);
					
					
				} , 
				success : function (response) {
					var json = $.parseJSON(response);
					$('.num_boletines').text(json.total);
				
					
					for (i = 0 ; i < json.registros.length ; i++ ) {
						
						
						var alink = $('<a></a>')
							.attr('href','#')
							.attr('rel',json.registros[i].id_usuario)
							.text('ver detalles')
							.addClass('profile btn1')
						.click(function () {
							
							
							obj_usuario.consultar($('#frm_usuario') , $(this).attr('rel'));
								$('#dialog').dialog('open');
								
								return false;	
						});
						
						var alinks = $('<a></a>')
							.attr('href','#')
							.attr('rel',json.registros[i].id_usuario)
							.text('eliminar')
						    .addClass('delete btn1')
							.click(function () {
								
								if (confirm('Esta seguro que desea eliminar este registro ?') ) {
									
									var usuario = $(this).attr('rel');
									
									$.ajax ({
										url : 'eliminar-usuario-'+usuario+'.html' ,
										cache : false , 
										success : function (response) {
											var obj = $.parseJSON(response);
					
											alert(obj.mensaje);
											
											obj_usuario.listar($('#tbl_usuarios'),1);
											
											
										}
										
									});
									
									
									
								}
								
								return false;	
								
							});
					
					
						var tr = $('<tr></tr>');
							
					
							tr.append('<td>'+json.registros[i].id_usuario+' </td>');	
							
							tr.append('<td>'+json.registros[i].usuario+'</td>');
							tr.append('<td>'+json.registros[i].nombre+'</td>');
				
							tr.append($('<td></td>').append(alink));
							tr.append($('<td></td>').append(alinks));
						
						table.append(tr);
						
					}
					// formato de tabla 
					table.fadeTo('slow',1);
					
					table.find('tbody tr').filter(function (index) {
						
						return index % 2 == 0;
						
					}).addClass('alt');
					
					// paginado ... 
				
					var table_page = $('ul.table_page');
						
					table_page.html('');
					xi = 1;
					if (json.paginado > 1) {
						table_page.show();
						
							
							while (json.paginado >= xi) {
									
									var a_link = $('<a>'+xi+'</a>')
										.attr('rel' , xi)
										.attr('href' , '#')
										.text(xi)
										.click(function () {
											
											obj_boletines.listar(table , $(this).attr('rel'));
											
											return false;	
										});
									
									table_page.append($('<li></li>').append(a_link));
									
								
								xi++;
							}
							page = page - 1;
							table_page.find('li a:eq('+page+')').addClass('alt');
					
					} else {
						
						table_page.hide();
						
					}
							
				
				} // fin de ajax 
				
				
			});
			
			
		
	} ,
	
		consultar : function (form, id) {
		
		$.ajax({
				
			url : 'ajax/ajax_usuario.php?opcion=4' , 
			type : 'GET' , 
			data :'id='+id ,
			cache:false ,
			success : function (response) {
					var json = $.parseJSON(response);
					
					form.find('#id_usuario').val(json.id_usuario);
					form.find('#usu').val(json.usuario);
					form.find('#pass').val(json.pass);
					form.find('#nombre').val(json.nombre);
					form.find('#perfil').val(json.perfil);
					form.find('#estado').val(json.estado);
					
					
			}
					
				
		});
		
		
	}	,
	
	
	
	
}
	

