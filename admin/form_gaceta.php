<!doctype html>
<html>
<head>
	<?php include('../plantilla/head.php');

	if ( isset($_GET['id']) ) {
		$gaceta = $get_xml->reg_detail_xml("id" ,$_GET['id'] ,"gaceta.xml", 1);
	} 

	?>
</head>
<body>
	
	<?php include('plantilla_admin/menu_admin.php'); ?>

	<div class="container">
		<h4>Agregar una Version del la Gaceta Republicana</h4>
		<div class="row">
			<form action="control/control_gaceta.php" method="POST" class="col s10 off-s1" enctype="multipart/form-data">

				<input type="hidden" name="id" value="<?php if (isset($gaceta)){ echo $gaceta[0]->id; } ?>">
				<input type="hidden" name="accion" value="<?php if (isset($gaceta)){ echo "editar"; }else{ echo "agregar"; } ?>">

				<div class="row">
					<div class="input-field col s12">
						<input placeholder="version" name="version" id="version" type="number" class="validate" required="" value="<?php if (isset($gaceta)){ echo $gaceta[0]->version; } ?>">
						<label for="version">Version</label>
					</div>
				</div>

				<div class="row">
					<p>Fecha de Publicación</p>
					<div class="input-field col s6">
						<select name="mes">
							<?php if (isset($gaceta)){ ?> 
							<option selected value="<?= $gaceta[0]->mes; ?>" ><?= $gaceta[0]->mes; ?></option>
							<?php } ?>
							<option value="Enero">Enero</option>
							<option value="Febrero">Febrero</option>
							<option value="Marzo">Marzo</option>
							<option value="Abril">Abril</option>
							<option value="Mayo">Mayo</option>
							<option value="Junio">Junio</option>
							<option value="Julio">Julio</option>
							<option value="Agosto">Agosto</option>
							<option value="Septiembre">Septiembre</option>
							<option value="Octubre">Octubre</option>
							<option value="Noviembre">Noviembre</option>
							<option value="Diciembre">Diciembre</option>
						</select>
					</div>
					<div class="input-field col s6">
						<select name="ano">
							<?php if (isset($gaceta)){ ?> 
								<option selected value="<?= $gaceta[0]->ano; ?>" ><?= $gaceta[0]->ano; ?></option>
							<?php } ?>

							<?php
							$year = date("Y");
							$year_old = date("Y")-2;
							$year_new = date("Y")+2;
							for ($i = $year_old; $i <= $year_new ; $i++) { 
								?><option value="<?= $i ?>"><?= $i ?></option><?php 
							}
							?>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<textarea id="descripcion" name="descripcion" class="materialize-textarea" data-length="200" required=""><?php if (isset($gaceta)){ echo $gaceta[0]->descripcion; } ?></textarea>
						<label for="descripcion">Descripcion</label>
					</div>
				</div>

				<div class="row">

					<div <?php if ( !isset($gaceta) ) { echo "class='ocultar'"; } ?> >
						Reemplazar este archivo: 
						<a target="_blank" href="../images/gaceta/<?php if (isset($gaceta)){ echo $gaceta[0]->archivo; } ?>">Ver archivo</a>
						<input id="imagen_old" name="imagen_old" type="hidden" value="<?php if (isset($gaceta)){ echo $gaceta[0]->archivo; } ?>" >
					</div>

					<div class="input-field col s12">
						<p>Archivo</p>
						<input id="imagen" name="imagen" type="file" accept="application/pdf" >
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
</html>