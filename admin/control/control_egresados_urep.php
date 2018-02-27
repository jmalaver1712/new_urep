<?php 
require_once('../class/class_egresados_urep.php');
require_once('../class/class_egresados.php');



// $cod_new = $egresados_urep->nuevoCodigo("1413217");
// echo $cod_new;

// SESION 
if ($_POST['accion'] == "sesion"){
	if (strlen($_POST['user']) <= 7) {
		$cod_new = $egresados_urep->nuevoCodigo($_POST['user']);
	}else{
		$cod_new = $_POST['user'];
	}
	$pass = $_POST['pass'];
	$sesion = $egresados_urep->sesion($cod_new, $pass);

	if ($sesion == 1) {
		$seleccionar = $egresados->seleccionar($cod_new);
		if (count($seleccionar) == 1) {
			$class = "active";
		}
		?>

		<form class="col s9" method="post" action="../admin/control/control_egresados.php">

			<input id="accion" name="accion" type="hidden" value="update">
			<div class="input-field col s12">
				<h5>Información personal</h5>
			</div>

			<?php
			$select = $egresados_urep->select($cod_new);
			foreach ($select as $row) {
				foreach ($row as $key => $value) {
					?>
					<div class="input-field col s6">
						<input type="text" placeholder="<?= $key ?>" id="<?= $key ?>" name="<?= $key ?>" value="<?= $value ?>" class="validate" disabled>
						<label class="active" for="<?= $key ?>"><?= $key ?></label>
						
					</div>
					<?php
				}
			}
			?>
			<input type="hidden" name="Id_Nuevo" value="<?= $cod_new ?>">

			<div class="input-field col s6">
				<input type="date" placeholder="Fecha de Nacimiento" id="fecha_nacimiento" name="fecha_nacimiento" class="validate" required="" 
				value="<?php if (count($seleccionar) == 1){ echo $seleccionar['0']['fecha_nacimiento']; } ?>">
				<label class="active" for="fecha_nacimiento">* Fecha de Nacimiento</label>
			</div>

			<div class="input-field col s6">
				<input type="text" placeholder="Lugar de Nacimiento" id="lugar_nacimiento" name="lugar_nacimiento" class="validate" 
				value="<?php if (count($seleccionar) == 1){ echo $seleccionar['0']['lugar_nacimiento']; } ?>">
				<label class="<?= $class ?>" for="lugar_nacimiento">Lugar de Nacimiento</label>
			</div>


			<div class="input-field col s6">
				<input type="email" placeholder="Email" id="email" name="email" class="validate" required=""
				value="<?php if (count($seleccionar) == 1){ echo $seleccionar['0']['email']; } ?>" >
				<label class="<?= $class ?>" for="email">* Email</label>
			</div>

			<div class="input-field col s6">
				<input type="text" placeholder="Dirección de Domicilio" id="dir_domicilio" name="dir_domicilio" class="validate" required=""
				value="<?php if (count($seleccionar) == 1){ echo $seleccionar['0']['dir_domicilio']; } ?>">
				<label class="<?= $class ?>" for="dir_domicilio">* Dirección de Domicilio</label>
			</div>

			<div class="input-field col s6">
				<input type="number" placeholder="Telefóno fijo" id="telefono" name="telefono" class="validate"
				value="<?php if (count($seleccionar) == 1){ echo $seleccionar['0']['telefono']; } ?>" >
				<label class="<?= $class ?>" for="telefono">Telefóno fijo</label>
			</div>

			<div class="input-field col s6">
				<input type="number" placeholder="Celular" id="celular" name="celular" class="validate" required=""
				value="<?php if (count($seleccionar) == 1){ echo $seleccionar['0']['celular']; } ?>" >
				<label class="<?= $class ?>" for="celular">* Celular</label>
			</div>

			<div class="input-field col s6">

				<label class="active">Estado Civil</label>
				<select id="estado_civil" name="estado_civil">
					<option value="" disabled selected>Seleccione una</option>
					<option value="Soltero(a)">Soltero(a)</option>
					<option value="Casado(a)">Casado(a)</option>
					<?php if (count($seleccionar) == 1){ ?>
						<option selected value="<?= $seleccionar['0']['estado_civil']; ?>"> <?= $seleccionar['0']['estado_civil']; ?> </option>
					<?php } ?>
				</select>
			</div>

			<div class="input-field col s6">
				<input type="number" placeholder="Numero de hijos" id="n_hijos" name="n_hijos" class="validate" 
				value="<?php if (count($seleccionar) == 1){ echo $seleccionar['0']['n_hijos']; } ?>" >
				<label class="<?= $class ?>" for="n_hijos">Numero de hijos</label>
			</div>



			<div class="input-field col s12">
				<h5>Información profesional</h5>
			</div>

			<div class="input-field col s6">
				<input type="text" placeholder="Entidad donde labora" id="entidad_labora" name="entidad_labora" class="validate"
				value="<?php if (count($seleccionar) == 1){ echo $seleccionar['0']['entidad_labora']; } ?>" >
				<label class="<?= $class ?>" for="entidad_labora">Entidad donde labora</label>
			</div>

			<div class="input-field col s6">
				<input type="text" placeholder="Dirección donde labora" id="dir_labora" name="dir_labora" class="validate"
				value="<?php if (count($seleccionar) == 1){ echo $seleccionar['0']['dir_labora']; } ?>" >
				<label class="<?= $class ?>" for="dir_labora">Dirección donde labora</label>
			</div>

			<div class="input-field col s6">
				<input type="email" placeholder="Email laboral" id="email_labora" name="email_labora" class="validate"
				value="<?php if (count($seleccionar) == 1){ echo $seleccionar['0']['email_labora']; } ?>" >
				<label class="<?= $class ?>" for="email_labora">Email laboral</label>
			</div>

			<div class="input-field col s6">
				<input type="number" placeholder="Telefóno laboral" id="tel_labora" name="tel_labora" class="validate"
				value="<?php if (count($seleccionar) == 1){ echo $seleccionar['0']['tel_labora']; } ?>" >
				<label class="<?= $class ?>" for="tel_labora">Telefóno laboral</label>
			</div>


			<div class="input-field col s12">
				<h5>Impacto laboral</h5>
			</div>

			<div class="input-field col s12">
				<label class="active">¿Qué tan relacionado esta su trabajo con su profesión?</label>
				<select id="relacion_laboral" name="relacion_laboral">
					<option value="" disabled selected>Seleccione una</option>
					<option value="1">1 - Nada Relacionado</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6 - Totalmente Relacionado</option>
					<?php if (count($seleccionar) == 1){ ?>
						<option selected value="<?= $seleccionar['0']['relacion_laboral']; ?>"> <?= $seleccionar['0']['relacion_laboral']; ?> </option>
					<?php } ?>
				</select>
			</div>

			<div class="input-field col s12">
				<label class="active">La entidad donde labora actualmente pertenece al sector:</label>
				<select id="sector_laboral" name="sector_laboral">
					<option value="" disabled selected>Seleccione una</option>
					<option value="Publico">Público</option>
					<option value="Privado">Privado</option>
					<option value="Salud">Salud</option>
					<option value="Independiente">Independiente</option>
					<option value="Financiero">Financiero</option>
					<option value="Otro">Otro</option>
					<?php if (count($seleccionar) == 1){ ?>
						<option selected value="<?= $seleccionar['0']['sector_laboral']; ?>"> <?= $seleccionar['0']['sector_laboral']; ?> </option>
					<?php } ?>
				</select>
			</div>

			<div class="input-field col s12">
				<label class="active">¿Ha logrado Ascensos en la entidad donde labora?</label>
				<select id="ascensos_laborales" name="ascensos_laborales">
					<option value="" disabled selected>Seleccione una</option>
					<option value="Si">Si</option>
					<option value="No">No</option>
					<option value="En Progreso">En Progreso</option>
					<?php if (count($seleccionar) == 1){ ?>
						<option selected value="<?= $seleccionar['0']['ascensos_laborales']; ?>"> <?= $seleccionar['0']['ascensos_laborales']; ?> </option>
					<?php } ?>
				</select>
			</div>

			<div class="input-field col s12">
				<label class="active">¿Considera que las especializaciones realizadas han contribuido en mejora de su nivel profesional y laboral?</label>
				<select id="especializacion_mejora" name="especializacion_mejora">
					<option value="" disabled selected>Seleccione una</option>
					<option value="Si">Si</option>
					<option value="No">No</option>
					<?php if (count($seleccionar) == 1){ ?>
						<option selected value="<?= $seleccionar['0']['especializacion_mejora']; ?>"> <?= $seleccionar['0']['especializacion_mejora']; ?> </option>
					<?php } ?>
				</select>
			</div>

			<div class="input-field col s12">
				<label class="active">¿Cuál es el área laboral en la cual se desempeña?</label>
				<select id="area_laboral" name="area_laboral">
					<option value="" disabled selected>Seleccione una</option>
					<option value="Juridica">Jurídica</option>
					<option value="Comercial">Comercial</option>
					<option value="Administrativa">Administrativa</option>
					<option value="Calidad">Calidad</option>
					<option value="Operativa">Operativa</option>
					<option value="Educación">Educación</option>
					<option value="Talento Humano">Talento Humano</option>
					<option value="Asistencial">Asistencial</option>
					<?php if (count($seleccionar) == 1){ ?>
						<option selected value="<?= $seleccionar['0']['area_laboral']; ?>"> <?= $seleccionar['0']['area_laboral']; ?> </option>
					<?php } ?>
				</select>
			</div>

			<div class="input-field col s12">
				<label class="active">¿El rango salarial al cual oscila esta entre?</label>
				<select id="rango_salarial" name="rango_salarial">
					<option value="" disabled selected>Seleccione una</option>
					<option value="$ 1,000,000 a 1,500,000">$ 1,000,000 a 1,500,000 </option>
					<option value="$ 1,500,000 a 2,000,000">$ 1,500,000 a 2,000,000 </option>
					<option value="$ 2,000,000 a 2,500,000">$ 2,000,000 a 2,500,000 </option>
					<option value="$ 2,500,000 a 3,000.000">$ 2,500,000 a 3,000.000 </option>
					<option value="$ 3,000,000 a 3,500,000">$ 3,000,000 a 3,500,000 </option>
					<option value="$ 3,500,000 a 4,000,000">$ 3,500,000 a 4,000,000 </option>
					<option value="$ 4,000,000 a 4,500,000">$ 4,000,000 a 4,500,000 </option>
					<option value="$ 4,500,000 a 5,000,000">$ 4,500,000 a 5,000,000 </option>
					<option value="$ 5,000,000  o más">$ 5,000,000  o más </option>
					<?php if (count($seleccionar) == 1){ ?>
						<option selected value="<?= $seleccionar['0']['rango_salarial']; ?>"> <?= $seleccionar['0']['rango_salarial']; ?> </option>
					<?php } ?>
				</select>
			</div>


			<div class="input-field col s12">
				<h5>Formación Académica</h5>
			</div>

			<div class="input-field col s12">
				<label class="active">¿Realizaría otros estudios en la Corporación Universitaria Republicana?</label>
				<select id="otros_estudios" name="otros_estudios">
					<option value="" disabled selected>Seleccione una</option>
					<option value="Muy probablemente">Muy probablemente</option>
					<option value="Probablemente">Probablemente</option>
					<option value="Es poco probable">Es poco probable</option>
					<option value="No es nada probable">No es nada probable</option>
					<option value="No lo se">No lo sé</option>
					<?php if (count($seleccionar) == 1){ ?>
						<option selected value="<?= $seleccionar['0']['otros_estudios']; ?>"> <?= $seleccionar['0']['otros_estudios']; ?> </option>
					<?php } ?>
				</select>
			</div>


			<div class="input-field col s12">
				<label class="active">¿Qué programas académicos les gustaría realizar?</label>
				<select id="tipo_estudios" name="tipo_estudios">
					<option value="" disabled selected>Seleccione una</option>
					<option value="Pregrados">Pregrados</option>
					<option value="Posgrados">Posgrados</option>
					<option value="Diplomados">Diplomados</option>
					<option value="Seminarios de Actualizacion">Seminarios de Actualización </option>
					<option value="Ninguno">Ninguno</option>
					<?php if (count($seleccionar) == 1){ ?>
						<option selected value="<?= $seleccionar['0']['tipo_estudios']; ?>"> <?= $seleccionar['0']['tipo_estudios']; ?> </option>
					<?php } ?>
				</select>
			</div>


			<div class="input-field col s12">
				<textarea id="temas" name="temas" class="materialize-textarea"><?php if (count($seleccionar) == 1){ echo $seleccionar['0']['temas']; } ?></textarea>
				<label class="<?= $class ?>" for="temas">¿En que temas?</label>
			</div>


			<div class="input-field col s12">
				<textarea id="logros_laborales" name="logros_laborales" class="materialize-textarea"><?php if (count($seleccionar) == 1){ echo $seleccionar['0']['logros_laborales']; } ?></textarea>
				<label class="<?= $class ?>" for="logros_laborales">Logros o Reconocimientos Obtenidos en su vida laboral y/o profesional</label>
			</div>

			<div class="input-field col s9">
				<input type="submit" class="btn boton_urep" value="Actualizar">
			</div>

		</form>
		<?php
	}
}


?>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('select').material_select();
	});

</script>