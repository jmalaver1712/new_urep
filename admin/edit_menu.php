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
			$menu_subs = array();
			foreach ($todos_menu as $menu) {
				if ("$menu->nivel" == 1){
					$menu_padre[] = $menu;
				}
				elseif("$menu->nivel" == 2){
					$menu_hijo[] = $menu;
				}
				else{
					$menu_padre[] = $menu;	
				}

				if (is_numeric("$menu->url")) {
					$menu_subs[] = $menu;
				}
			}
			?>
		</div>

		<!-- EDITAR -->
		<div class="row">
			<form action="control/control_menu.php" method="post" accept-charset="utf-8">
				<input type="hidden" name="accion" value="editar">

				<div class="input-field col s12 center">
					<select id="id_menu" name="id_menu">
						<option value="" disabled selected>Seleccione una opcion..</option>
						<?php 
						foreach ($menu_padre as $padre) {
							$padre->url = str_replace("URL_MASTER", URL_MASTER, $padre->url);
							?>
							<option label="<?= $padre->id ?>" title="<?= $padre->nivel ?>" name="<?= $padre->url ?>" alt="<?= $padre->texto ?>" value="<?= $padre->id_menu ?>"><?= $padre->texto ?></option>
							<?php
							foreach ($menu_hijo as $hijo) {
								if ("$hijo->id" === "$padre->url") {
									$hijo->url = str_replace("URL_MASTER", URL_MASTER, $hijo->url);
									?>
									<option label="<?= $hijo->id ?>" title="<?= $hijo->nivel ?>" name="<?= $hijo->url ?>" alt="<?= $hijo->texto ?>" value="<?= $hijo->id_menu ?>">&nbsp;&nbsp;&nbsp;<?= $hijo->texto ?></option>
									<?php
								}
							} 	
						}
						?>
					</select>
					<label for="id_menu">Seleccione un Menú</label>
				</div>

				<!-- EDITANDO INFO -->
				<div class="row">
					<div class="input-field col s6">
						<h5>Editar</h5>
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
					<br><br>
					<div id="id_cont" class="input-field col s6 ocultar">
						<?php 
						foreach ($menu_subs as $subs) {
							$subs->url = str_replace("URL_MASTER", URL_MASTER, $subs->url);
							?>
							<p>
								<input class="id" name="id" type="radio" id="id_<?= $subs->url ?>" value="<?= $subs->url ?>"/>
								<label for="id_<?= $subs->url ?>"><?= $subs->texto ?></label>
							</p>
							<?php	
						}
						?>
					</div>

					<div id="sub_cont" class="input-field col s6 ocultar">
						<h6>Tiene Submenus</h6>
						<p>
							<input id="submenu_si" class="submenu" name="submenu" type="radio" value="1"/>
							<label for="submenu_si">Si</label>
						</p>
						<p>
							<input id="submenu_no" class="submenu" name="submenu" type="radio" value="0"/>
							<label for="submenu_no">No</label>
						</p>
					</div>

				</div>

				<div class="input-field col s6 center">
					<p>Texto</p>
					<input type="text" id="texto" name="texto" placeholder="" required>
				</div>

				<div class="input-field col s6 center">
					<p>URL</p>
					<input type="text" id="url" name="url" placeholder="">
				</div>

				<div class="input-field col s6 center">
					<button class="btn-large waves-effect waves-light" type="submit">Editar
						<i class="material-icons right">edit</i>
					</button>
				</div>

				<div class="input-field col s6 center">
					<a href="#!" id="eliminar_menu" class="btn-large waves-effect waves-light red darken-1 confirmar_url">Eliminar
						<i class="material-icons right">delete</i>
					</a>
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

		$("#id_menu").change(function () {
			var url = $(this).find('option:selected').attr('name');
			var text = $(this).find('option:selected').attr('alt');
			var nivel = $(this).find('option:selected').attr('title');
			var id = $(this).find('option:selected').attr('label');
			var id_menu = $(this).val();

			var url_del = "control/control_menu.php?accion=eliminar&id="+id_menu;
			$("#eliminar_menu").attr('href', url_del); 
			$("#texto").attr('value', text);
			$("#url").attr('value', url);

			$("#nivel_"+nivel).attr('checked', true);

			// NIVEL
			if (nivel == 2) {
				$("#id_cont").removeClass("ocultar");
				$("#id_"+id).attr('checked', true);
			}else{
				$("#id_cont").addClass("ocultar");
			}

			if ($.isNumeric(url)){
				$("#url").attr('disabled', 'disabled');
			}
			else{
				$("#url").removeAttr('disabled');
			}
		});


		$(".nivel").change(function () {
			var nivel = $(this).val();
			$("#nivel_"+nivel).attr('checked', true);
			// NIVEL
			if (nivel == 2) {
				$("#id_cont").removeClass("ocultar");
				$("#sub_cont").addClass("ocultar");
			}else{
				$("#id_cont").addClass("ocultar");
				$("#sub_cont").removeClass("ocultar");
				$("#url").removeAttr('disabled');
			}
		});

		$(".submenu").change(function () {
			var subs = $(this).val();
			// SUBMENU
			if (subs == 1) {
				$("#url").attr('disabled','disabled');
			}else{
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