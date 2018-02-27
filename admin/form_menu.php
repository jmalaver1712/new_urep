<!doctype html>
<html>
<head>
	<?php 
	include('../plantilla/head.php');
	$todos_menu = $get_xml->registros_all_xml("menu.xml");
	// $todos_menu = $get_xml->reg_detail_xml("nivel", "1", "menu.xml", null);
	?>
</head>
<body>
	<?php include('plantilla_admin/menu_admin.php'); ?>

	<div class="container">
		<div class="row">
			<?php
			$menu_padre = array();
			$menu_hijo = array();
			foreach ($todos_menu as $menu) {
				if (is_numeric("$menu->url")){
					$menu_padre[] = $menu;
				}
				else{
					$menu_hijo[] = $menu;	
				}
			}
			?>
		</div>

		<!-- AGREGAR MENU -->
		<div class="row form_accion" id="agregar_menu">
			<form action="control/control_menu.php" method="post" accept-charset="utf-8">
				<div class="row">
					<input type="hidden" name="accion" value="agregar">
					<div class="input-field col s12">
						<h5>Agregar</h5>
						<p>
							<input class="nivel" name="nivel" type="radio" id="nivel_1" value="1"/>
							<label for="nivel_1">Menu Principal</label>
						</p>
						<p>
							<input class="nivel" name="nivel" type="radio" id="nivel_2" value="2"/>
							<label for="nivel_2">Sub menu</label>
						</p>
						<p>
							<input class="nivel" name="nivel" type="radio" id="nivel_3" value="3"/>
							<label for="nivel_3">Menu Auxiliar</label>
						</p>
					</div>
				</div>
				<div class="row">
					<br>
					<div id="id_menu" class="input-field col s6 ocultar">
						<select id="id" name="id">
							<option value="" disabled selected>Seleccione una opcion..</option>
							<?php 
							foreach ($menu_padre as $padre) {
								$padre->url = str_replace("URL_MASTER", URL_MASTER, $padre->url);
								?>
								<option value="<?= $padre->url ?>"><?= $padre->texto ?></option>
								<?php	
							}
							?>
						</select>
						<label for="id">Menu Principal</label>
					</div>
					<div id="clase_menu" class="input-field col s6">
						<select id="submenu" name="submenu">
							<option value="" disabled selected>Seleccione una opcion..</option>
							<option value="1">Si</option>
							<option value="0">No</option>
						</select>
						<label for="id">Tendra Submenu ?</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s6 center">
						<p>Texto</p>
						<input type="text" id="texto" name="texto" placeholder="" required>
					</div>

					<div class="input-field col s6 center">
						<p>URL</p>
						<input type="text" id="url" name="url" placeholder="">
					</div>

					<div class="input-field col s12 center">
						<button class="btn-large waves-effect waves-light" type="submit">Guardar
							<i class="material-icons right">send</i>
						</button>
					</div>
				</div>

			</form>
		</div>

		<div class="row">
			<div class="input-field col s12">
				<h5>Documentos Adicionales</h5>
				<form enctype="multipart/form-data" id="formuploadajax" method="post">
					<input  type="hidden" id="ruta" name="ruta" value="../../images/documentos/">
					<input  type="file" id="archivo_add" name="archivo_add"/>
					<input type="submit" value="Subir archivos"/>
				</form>
				<div id="mensaje"></div>
			</div>
		</div>

	</div>
	<?php include('../plantilla/footer.php'); ?>
</body>
<script type="text/javascript">
	$(document).ready(function () { 

		$(".nivel").change(function () {
			var x = $(this).val();
			if (x == 2){
				$("#id_menu").removeClass("ocultar");
				$("#clase_menu").addClass("ocultar");
			}
			else{
				$("#id_menu").addClass("ocultar");
				$("#clase_menu").removeClass("ocultar");	
			}
		});

		$("#submenu").change(function () {
			var x = $(this).val();
			if (x == 1){
				$("#url").attr("disabled", "disabled");
				$("#url").attr(value, "0");
			}
			else{
				$("#url").removeAttr('disabled');
			}
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
				$("#url").attr('value',res);
			});
		});
	});
</script>
</html>