<!doctype html>
<html>
<head>
	<?php include('../plantilla/head.php');

	$id_header = 1;
	$header = $get_xml->reg_detail_xml("id" ,$id_header ,"header.xml", 1);
	?>
</head>
<body>
	
	<?php include('plantilla_admin/menu_admin.php'); ?>

	<div class="container">
		<h4><?php if (isset($header)){ echo "Editar"; }else{ echo "Agregar"; } ?> una Noticia / Evento</h4>
		<div class="row">
			<form action="control/control_header.php" method="POST" class="col s12 off-s1" enctype="multipart/form-data">
				
				<input type="hidden" name="id" value="<?php if (isset($header)){ echo $header[0]->id; } ?>">
				<input type="hidden" name="accion" value="<?php if (isset($header)){ echo "editar"; }else{ echo "agregar"; } ?>">

				<div class="row">
					<div class="input-field col s12">
						<input placeholder="Titulo" name="titulo" id="titulo" type="text" autocomplete="off" class="validate mayus" required="" value="<?php if (isset($header)){ echo $header[0]->titulo; } ?>">
						<label for="titulo">Titulo</label>
					</div>
				</div>


				<div class="row">
					<h5>Logo</h5>

					<div <?php if ( !isset($header) ) { echo "class='ocultar'"; } ?> >
						Reemplazar esta logo<br>
						<img width="50%" src="<?= URL_MASTER ?>/images/web/<?php if (isset($header)){ echo $header[0]->logo; } ?>">
						<input id="logo_old" name="logo_old" type="hidden" value="<?php if (isset($header)){ echo $header[0]->logo; } ?>" >
					</div>

					
					<div class="input-field col s6">
						<p>logo Principal (300 * 300)</p>
						<input id="logo" name="logo" type="file" placeholder="Cargar un solo logo (.PNG .JPG)" accept="image/*">
					</div>

				</div>

				<div class="row">
					<div class="input-field col s12">
						<p>Texto de la Noticia / Evento</p>
						<textarea name="descripcion" id="noticia" style="width: 100%; height: 200px;"><?php if (isset($header)){ echo $header[0]->descripcion; } ?></textarea>
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