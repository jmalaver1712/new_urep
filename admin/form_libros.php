<!doctype html>
<html>
<head>
	<?php include('../plantilla/head.php');

	if ( isset($_GET['id']) ) {
		$libro = $get_xml->reg_detail_xml("id" ,$_GET['id'] ,"libros.xml", 1);
	} 

	?>
</head>
<body>
	
	<?php include('plantilla_admin/menu_admin.php'); ?>

	<div class="container">
		<h4>Agregar un Libro</h4>
		<div class="row">
			<form action="control/control_gaceta.php" method="POST" class="col s12 off-s1" enctype="multipart/form-data">

				<input type="hidden" name="id" value="<?php if (isset($libro)){ echo $libro[0]->id; } ?>">
				<input type="hidden" name="accion" value="<?php if (isset($libro)){ echo "editar"; }else{ echo "agregar"; } ?>">

				<div class="row">
					<div class="input-field col s12">
						<input placeholder="Nombre" name="nombre" id="nombre" type="text" class="validate" required="" value="<?php if (isset($libro)){ echo $libro[0]->nombre; } ?>">
						<label for="nombre">Nombre</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<input placeholder="Autores" name="autores" id="autores" type="text" class="validate" required="" value="<?php if (isset($libro)){ echo $libro[0]->autores; } ?>">
						<label for="autores">Autores</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s6">
						<input placeholder="ISBN Impresa" name="isbn_impresa" id="isbn_impresa" type="text" class="validate" required="" value="<?php if (isset($libro)){ echo $libro[0]->isbn_impresa; } ?>">
						<label for="isbn_impresa">ISBN Impreso</label>
					</div>

					<div class="input-field col s6">
						<input placeholder="Año Impresa" name="ano_impresa" id="ano_impresa" type="number" class="validate" required="" value="<?php if (isset($libro)){ echo $libro[0]->ano_impresa; } ?>">
						<label for="ano_impresa">Año de impresion</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s6">
						<input placeholder="ISBN Digital" name="isbn_digital" id="isbn_digital" type="text" class="validate" required="" value="<?php if (isset($libro)){ echo $libro[0]->isbn_digital; } ?>">
						<label for="isbn_digital">ISBN Digital</label>
					</div>

					<div class="input-field col s6">
						<input placeholder="Año Digital" name="ano_digital" id="ano_digital" type="number" class="validate" required="" value="<?php if (isset($libro)){ echo $libro[0]->ano_digital; } ?>">
						<label for="ano_digital">Año de Publicación</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<textarea id="abstract" name="abstract" class="materialize-textarea"><?php if (isset($libro)){ echo $libro[0]->abstract; } ?></textarea>
						<label for="abstract">Abstract</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<input placeholder="Programa Académico" name="programa_academico" id="programa_academico" type="text" class="validate" required="" value="<?php if (isset($libro)){ echo $libro[0]->programa_academico; } ?>">
						<label for="programa_academico">Programa Académico</label>
					</div>
				</div>

				<div class="row">
					<h5>Citas</h5>
					<div class="input-field col s6">
						<textarea id="APA" name="APA" class="materialize-textarea"><?php if (isset($libro)){ echo $libro[0]->APA; } ?></textarea>
						<label for="APA">Formato APA</label>
					</div>

					<div class="input-field col s6">
						<textarea id="IEEE" name="IEEE" class="materialize-textarea"><?php if (isset($libro)){ echo $libro[0]->IEEE; } ?></textarea>
						<label for="IEEE">Formato IEEE</label>
					</div>
				</div>

				<div class="row">
					<div <?php if ( !isset($libro) ) { echo "class='ocultar'"; } ?> >
						Reemplazar esta Imagen<br>
						<img width="20%" src="../images/libros/<?php if (isset($libro)){ echo $libro[0]->imagen; } ?>">
						<input id="imagen_old" name="imagen_old" type="hidden" value="<?php if (isset($libro)){ echo $libro[0]->imagen; } ?>" >
					</div>

					<div class="input-field col s12">
						<p>Portada</p>
						<input id="imagen" name="imagen" type="file" placeholder="Cargar una sola imagen (.PNG .JPG)" accept="image/*">
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