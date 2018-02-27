<!doctype html>
<html>
<head>
	<?php include('../plantilla/head.php');

	$id1 = 0;
	if ( isset($_GET['id']) ) {
		$noticia_evento = $get_xml->reg_detail_xml("id" ,$_GET['id'] ,"noticias_eventos.xml", 1);
		$id1 = intval($noticia_evento[0]->id);
		$noticia_evento_galeria = $get_xml->reg_detail_xml("id_noticia_evento",$id1,"noticias_eventos_galeria.xml", null);
		$item_noticias_eventos = $get_xml->reg_detail_xml("id_noticias_eventos", $id1, "item_noticias_eventos.xml", null);
	}

	$items = $get_xml->registros_all_xml("item.xml");
	?>
</head>
<body>
	
	<?php include('plantilla_admin/menu_admin.php'); ?>

	<div class="container">
		<h4><?php if (isset($noticia_evento)){ echo "Editar"; }else{ echo "Agregar"; } ?> una Noticia / Evento</h4>
		<div class="row">
			<form action="control/control_noticias_eventos.php" method="POST" class="col s12 off-s1" enctype="multipart/form-data">
				
				<input type="hidden" name="id" value="<?php if (isset($noticia_evento)){ echo $noticia_evento[0]->id; } ?>">
				<input type="hidden" name="accion" value="<?php if (isset($noticia_evento)){ echo "editar"; }else{ echo "agregar"; } ?>">

				<div class="row">
					<div class="input-field col s12">
						<input placeholder="Nombre del Evento o Noticia" name="titular" id="titular" type="text" autocomplete="off" class="validate mayus" required="" value="<?php if (isset($noticia_evento)){ echo $noticia_evento[0]->titular; } ?>">
						<label for="titular">Titular / Nombre</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s6">
						<p>Tipo de publicación:</p>
						<p>
							<input name="tipo" type="radio" id="tipo_noticia" value="noticia" 
							<?php if ( isset($noticia_evento) && $noticia_evento[0]->tipo == "noticia" ){ echo "checked"; } ?> />
							<label for="tipo_noticia">Noticia</label>
						</p>
						<p>
							<input name="tipo" type="radio" id="tipo_evento" value="evento" 
							<?php if ( isset($noticia_evento) && $noticia_evento[0]->tipo == "evento" ){ echo "checked"; } ?> />
							<label for="tipo_evento">Evento</label>
						</p>
						<p>
							<input name="tipo" type="radio" id="tipo_banner" value="banner" 
							<?php if ( isset($noticia_evento) && $noticia_evento[0]->tipo == "banner" ){ echo "checked"; } ?> />
							<label for="tipo_banner">Banner Slider</label>
						</p>
						<p>
							<input name="tipo" type="radio" id="tipo_popup" value="popup" 
							<?php if ( isset($noticia_evento) && $noticia_evento[0]->tipo == "popup" ){ echo "checked"; } ?> />
							<label for="tipo_popup">Pop Up</label>
						</p>
					</div>
					<div class="input-field col s6">
						<p>
							<input type="checkbox" name="importancia" id="importancia" value="1" 
							<?php if ( isset($noticia_evento) && $noticia_evento[0]->importancia == "1" ){ echo "checked"; } ?> />
							<label for="importancia">Debe estar en el Slider Principal</label>
						</p>
						<br><br>
						<p>
							<input placeholder="Enlace" name="enlace" id="enlace" type="url" autocomplete="off" class="validate" 
							value="<?php if (isset($noticia_evento)){ echo $noticia_evento[0]->enlace; } ?>">
							<label for="enlace">Titular / Nombre</label>
						</p>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<textarea id="resumen" name="resumen" class="materialize-textarea" data-length="200" required=""><?php if (isset($noticia_evento)){ echo $noticia_evento[0]->resumen; } ?></textarea>
						<label for="resumen">Resumen de la Noticia / Evento</label>
					</div>
				</div>

				<div class="row">
					<h5>Galeria</h5>

					<div <?php if ( !isset($noticia_evento) ) { echo "class='ocultar'"; } ?> >
						Reemplazar esta Imagen<br>
						<img width="50%" src="../images/noticias_eventos/<?php if (isset($noticia_evento)){ echo $noticia_evento[0]->imagen; } ?>">
						<input id="imagen_old" name="imagen_old" type="hidden" value="<?php if (isset($noticia_evento)){ echo $noticia_evento[0]->imagen; } ?>" >
					</div>

					
					<div class="input-field col s6">
						<p>Imagen Principal (1350 * 600)</p>
						<input id="imagen" name="imagen" type="file" placeholder="Cargar una sola imagen (.PNG .JPG)" accept="image/*">
					</div>

					<!-- ITEMS -->
					<div class="input-field col s6">
						<h5>Publicar en</h5>
						<div class="input-field">
							<?php
							foreach ($items as $item) {
								$check = "";
								if ($id1 != 0) {
									foreach ($item_noticias_eventos as $value) {
										$a1 = intval($value->id_item);
										$a2 = intval($item->id);
										if ($a1 == $a2) {
											$check = "checked";
										}
									}
								}
								?>
								<div>
									<input type="checkbox" name="item[<?= $item->id ?>]" id="<?= $item->id ?>" value="<?= $item->id ?>" <?= $check ?>/>
									<label for="<?= $item->id ?>"><?= $item->nombre ?></label>
								</div>
								<?php 
							}
							?>
						</div>
					</div>
					
				</div>

				<div class="row">
					<div class="input-field col s12">
						<p>Texto de la Noticia / Evento</p>
						<textarea name="noticia" id="noticia" style="width: 100%; height: 200px;"><?php if (isset($noticia_evento)){ echo $noticia_evento[0]->noticia; } ?></textarea>						
					</div>
				</div>

				<div class="row">
					<h5>Galeria de Imagenes</h5>
					<div class="field_wrapper">
						<div>
							<input name="galeria[]" type="file" placeholder="Cargar una sola imagen (.PNG .JPG)" accept="image/*">
							<a href="javascript:void(0);" class="add_button" title="Add field"><img src="../images/web/menu/add_icon.png" width="30" /></a><br><br>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="input-field col s12 center">
						<button class="btn-large waves-effect waves-light" type="submit" name="action">Guardar
							<i class="material-icons right">send</i>
						</button>
					</div>
				</div>

			</form>

			<div class="row">
				<div class="input-field col s12">
					<h5>Documentos Adicionales</h5>
					<form enctype="multipart/form-data" id="formuploadajax" method="post">
						<input  type="hidden" id="ruta" name="ruta" value="../../images/noticias_eventos/galeria/">
						<input  type="file" id="archivo_add" name="archivo_add"/>
						<input type="submit" value="Subir archivos"/>
					</form>
					<div id="mensaje"></div>
				</div>
			</div>

		</div>
	</div>

	<?php include('../plantilla/footer.php'); ?>

</body>
<script type="text/javascript">
	$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><select name="tipo_galeria[]" class="browser-default"><option>Imagen</option></select><input name="galeria[]" type="file" placeholder="Cargar una sola imagen (.PNG .JPG)" accept="image/*"><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="../images/web/menu/remove_icon.png" width="20"/></a><br><br></div>'; //New input field html

    var x = 1; //Initial field counter is 1

    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });

    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
    	e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});


	$(function(){
		$("#formuploadajax").on("submit", function(e){
			e.preventDefault();
			var f = $(this);
			var formData = new FormData(document.getElementById("formuploadajax"));
			formData.append("dato", "valor");
			$.ajax({
				url: "../admin/control/control_docs_add.php",
				type: "post",
				dataType: "html",
				data: formData,
				cache: false,
				contentType: false,
				processData: false
			})
			.done(function(res){
				$("#mensaje").html("<br>Enlace: <b>" + res +"</b>");
			});
		});
	});
</script>
</html>