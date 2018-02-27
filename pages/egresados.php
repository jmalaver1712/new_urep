<!doctype html>
<html manifest="urepublicana.appcache">
<head>
	<?php require_once('../plantilla/head.php'); 
	$name_xml = "egresados";
	$todos_noticias = $get_xml->reg_detail_xml("tipo", "noticia", $name_xml.'.xml', 9);
	$todos_evento = $get_xml->reg_detail_xml("tipo", "evento", $name_xml.'.xml', 9);
	?>
</head>
<body id="body_urep">
	<?php require_once('../plantilla/menu.php'); ?>
	<div class="breadcrumb"><a href="<?= URL_MASTER ?>/pages/index.php"> Inicio </a> > <a href="<?= URL_MASTER ?>/pages/egresados/"> Egresados </a></div>
	<div class="container">
		<div class="row center">
			<div class="col s12">
				<h2>Egresados</h2>
				<img src="<?= URL_MASTER ?>/images/web/egresados/banner_egresados.jpg" width="100%">
			</div>
		</div>
		<div class="row lnk_first">
			<div class="col s12 m2"><br></div>
			<div class="col s3 m2">
				<span class="enlace_urep" name="#egresados_general">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/egresados/quienesomos1.png" src="<?= URL_MASTER ?>/images/web/egresados/quienesomos.png">
					<p>Quiénes Somos</p>
				</span>
			</div>
			<div class="col s3 m2">
				<span class="enlace_urep" name="#egresados_servicios">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/egresados/servicios1.png" src="<?= URL_MASTER ?>/images/web/egresados/servicios.png">
					<p>Servicios</p>
				</span>
			</div>
			<div class="col s3 m2">
				<span class="enlace_urep" name="#egresados_enlaces">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/egresados/enlaces1.png" src="<?= URL_MASTER ?>/images/web/egresados/enlaces.png">
					<p>Enlaces de Interés para Egresados</p>
				</span>
			</div>
			<div class="col s3 m2">
				<span class="enlace_urep" name="#actualizacion">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/egresados/actualiza-datos1.png" src="<?= URL_MASTER ?>/images/web/egresados/actualiza-datos.png">
					<p>Actualización de datos - Egresados</p>
				</span>
			</div>
		</div>
		<div class="row">
			<!-- GENERAL -->
			<div id="egresados_general" class="col s12 content_urep content_inter ocultar">
				<p>
					<h4>Objetivo</h4>
					Establecer un vínculo con los egresados y mantener un constante seguimiento, generando una permanencia y continuidad de los diferentes programas académicos ofertados por la institución; que nos permita establecer el seguimiento laboral, académico y social de nuestros profesionales Republicanos.  
					<br><br>
					<br><b>EQUIPO EGRESADOS</b>
					<br>DIANA MARCELA BERGAÑO
					<br>Abogada especialista en Derecho Público
					<br>Jefe Oficina de  Egresados
					<br>Corporación Universitaria Republicana
					<br>Tel. 2862384 Ext. 147
					<br>egresados@urepublicana.edu.co
					<br>Cra. 7 No. 19 - 38  P. 2 
				</p>
			</div>
			<!-- SERVICIOS -->
			<div id="egresados_servicios" class="col s12 content_urep ocultar">
				<div class="row">
					<div class="col s12 m3 left-align">
						<ul>
							<h5>Servicios y Beneficios</h5>
							<li name="#serv_descripcion" class="enlace_inter"> Descripción </li>
							<li name="#serv_descuentos" class="enlace_inter">Descuentos </li>
							<li name="#serv_servicios" class="enlace_inter">Servicios </li>
							<li name="#serv_carnet" class="enlace_inter">Carnetización de Egresados </li>
							<li name="#serv_laboral" class="enlace_inter">Intermediación laboral </li>
						</ul>
					</div>
					<div class="col s12 m9">
						<!-- DESCRIPCION -->
						<div id="serv_descripcion" class="content_urep content_inter ocultar">
							<p>
								<h5>BIENVENIDO(A) A LA FAMILIA DE EGRESADOS REPUBLICANOS</h5>
								Usted ha empezado a conformar la familia de egresados de los programas de pregrado y postgrado, que se viene conformando desde la fundación de la universidad en 1999.
								<br><br>
								La Corporación Universitaria Republicana busca la preparación integral y actualizada de sus educandos, mediante estrategias de formación y capacitación profesional que permitan el crecimiento académico individual y aseguren el papel de cada educando en el sector productivo nacional. Esta misión institucional es ejecutada mediante el fomento administrativo del aprendizaje – en los distintos campos del saber- que estimule el libre intercambio de las ideas, el pensamiento crítico y la reformulación de estrategias productivas, y el respeto de los valores democráticos-constitucionales del Estado Social de Derecho; el cumplimiento de tal misión, demanda acciones para el seguimiento y contacto permanente con los egresados “para conservar vivo el sentimiento con la Corporación, que haga eficaz la colaboración y el beneficio mutuo.”
								<br><br>
								Por tal razón el Departamento de Egresados trabaja con todos los programas, formulando estrategias de participación de los egresados en el desarrollo curricular de las facultades, buscando beneficios para todos ellos y sus familias.
							</p>
						</div>
						<!-- Descuentos -->
						<div id="serv_descuentos" class="content_urep content_inter ocultar">
							<p>
								<h5>Descuentos</h5>
								<ul>
									<li><b>*</b> Para cursar Postgrados: Descuentos en la matrícula de cualquiera de los postgrados, además de la posibilidad de crédito financiero para cancelar la diferencia. Igualmente se aplicarán descuentos para miembros del grupo familiar de un egresado o egresada republicano (a)</li>
									<li><b>*</b> Para cursar Diplomados, Seminarios y otros programas de formación continuada se aplicará igualmente un descuento sobre el valor de la matricula</li>
								</ul>
							</p>
						</div>
						<!-- Servicios -->
						<div id="serv_servicios" class="content_urep content_inter ocultar">
							<p>
								<h5>Servicios</h5>
								<b>Biblioteca:</b> Acceso a todos los servicios de esta, sin costo
								<br><br>
								<b>Comunidad de egresados:</b> Un espacio en el portal de la universidad que le permite tener acceso a:
								<ul>
									<li><b>* </b>Oferta laboral: Allí se registran, semanalmente, las solicitudes de empresas que requieren egresados de la universidad</li>
									<li><b>* </b>Servicios: -Mi actividad académica: Podrá consultar e imprimir su registro de notas</li>
									<li><b>* </b>Enlaces de interés:  Direcciones de portales académicos, cultural y de recreación.</li>
									<li><b>* </b>Participación en los eventos de la Emisora Republicana</li>
									<li><b>* </b>Tu opinión: Donde podrá dar sugerencias de actividades de interés para los egresados</li>
									<li><b>* </b>Oportunidades de estudio en el exterior: la dirección de extensión también ofrece, a quienes así lo requieran, apoyo en la búsqueda de información sobre oportunidades académicas de estudio en el exterior, como resultado de los convenios o alianzas con otras instituciones de educación superior</li>
									<li><b>* </b>Participación en actividades de bienestar: Los grupos culturales y deportivos, coordinados por bienestar universitario, tienen permanentemente abiertas las posibilidades para que los egresados puedan participar: Informes en bienestar@urepublicana.edu.co</li>
									<li><b>* </b>Servicio de Psicología y Medicina General. El servicio en el consultorio psicológico así mismo como el de medicina general están al servicio de los egresados; agendando cita en cada uno de ellos. </li>
								</ul>
							</p>
						</div>
						<!-- Carnetizacion -->
						<div id="serv_carnet" class="content_urep content_inter ocultar">
							<p>
								<h5>Carnetización de egresados</h5>
								Para acceder a los descuentos y servicios aquí enumerados, los egresados deben tener su propio carnet, de lo contrario no se puede garantizar la efectividad de los servicios.
								<br><br>
								El carnet se entregará el día del grado con el diploma y el acta. Si no le fue entregado el día del grado, por favor acercarse a la oficina de Admisiones, Registro y Control (Cra. 7 No. 19-38, Piso 2).
								<br><br>
								La Corporación comunicara los nuevos servicios y beneficios que ustedes pueden obtener. Para esto es muy importante que informe los cambios en sus registros telefónicos y de correo electrónico a la dirección de egresados <b>egresados@republicana.edu.co</b>
							</p>
						</div>
						<!-- Laboral -->
						<div id="serv_laboral" class="content_urep content_inter ocultar">
							<p>
								<h5>Intermediación laboral</h5>
								Egresados Republicanos pueden enviar sus hojas de vida a <b>egresados@urepublicana.edu.co</b> para ser referidas a los diferentes empleadores que soliciten de nuestros servicios de intermediación laboral.
								<br><br>
								Empresas pueden registrarse gratuitamente para solicitar egresados y acceder a nuestro paquete de beneficios y convenios académicos y financieros.
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- SERVICIOS -->
			<div id="egresados_servicios" class="col s12 content_urep content_inter ocultar">
				<p>
					<h4>Servicios</h4>					
					Usted ha empezado a conformar la familia de egresados de los programas de pregrado y postgrado, que se viene conformando desde la fundación de la universidad en 1999.  
					<br><br>
					La Corporación Universitaria Republicana busca la preparación integral y actualizada de sus educandos, mediante estrategias de formación y capacitación profesional que permitan el crecimiento académico individual y aseguren el papel de cada educando en el sector productivo nacional. Esta misión institucional es ejecutada mediante el fomento administrativo del aprendizaje – en los distintos campos del saber- que estimule el libre intercambio de las ideas, el pensamiento crítico y la reformulación de estrategias productivas, y el respeto de los valores democráticos-constitucionales del Estado Social de Derecho; el cumplimiento de tal misión, demanda acciones para el seguimiento y contacto permanente con los egresados “para conservar vivo el sentimiento con la Corporación, que haga eficaz la colaboración y el beneficio mutuo.”
					<br><br>
					Por tal razón el Departamento de Egresados trabaja con todos los programas, formulando estrategias de participación de los egresados en el desarrollo curricular de las facultades, buscando beneficios para todos ellos y sus familias.
				</p>
			</div>
			<!-- ENLACES -->
			<div id="egresados_enlaces" class="col s12 content_urep content_inter ocultar">
				<p>
					<h4>Enlaces de Interes</h4>
					<ul>
						<li><b>*</b> <a href="<?= URL_MASTER ?>/images/web/egresados/port_servicios.pdf" download="Portafolio.pdf">Portafolio de beneficios</a></li>
						<li><b>*</b> <a href="<?= URL_MASTER ?>/images/web/egresados/expedicion_tarjeta_profesional.pdf" download="Tarjeta_profesional.pdf">Como expedir su tarjeta profesional</a></li>
						<li><b>*</b> <a href="<?= URL_MASTER ?>/images/web/egresados/registro_empresa.pdf" download="registro_empresa.pdf">Registro empresarial</a></li>
					</ul>
				</p>
			</div>
			<!-- ENLACES -->
			<div id="actualizacion" class="col s12 content_urep content_inter ocultar">
				<p>
					<h4>Actualización de datos - Egresados</h4>
					<div id="form_egresado">
						<form class="col s9" action="#" method="POST">
							<input id="accion" name="accion" type="hidden" value="sesion">
							<div class="input-field col s9">
								<input name="user" id="user" type="number" class="validate" autocomplete="off" required>
								<label for="user">Usuario</label>
							</div>
							<div class="input-field col s9">
								<input name="pass" id="pass" type="password" class="validate" autocomplete="off" required>
								<label for="pass">Contraseña</label>
							</div>
							<div class="input-field col s9">
								<input type="button" id="btn_egresado" class="btn boton_urep" value="Enviar">
							</div>
						</form>
					</div>
					<div id="data_egresado"></div>
				</p>
			</div>
		</div>
		<?php
		$n_noticias = count($todos_noticias);
		if ($n_noticias > 0) {
			?>
			<div class="row urep_divide">
				<h3 class="center-align" >Noticias</h3>
				<div id="cont_noticias" class="owl-carousel owl-theme">
					<?php
					$cont = 0;
					foreach ($todos_noticias as $noticia) {
						if ($cont < 9) {
							$cont++;
							?>
							<div class="item noticia">
								<img src="<?= URL_MASTER ?>/images/noticias_eventos/<?= $noticia->imagen; ?>">
								<h5>
									<a href="<?= URL_MASTER ?>/pages/publicaciones/<?= $noticia->tipo ?>/<?= $name_xml ?>/<?= $noticia->name ?>"><?= $noticia->titular; ?></a>
								</h5>
								<p>
									<?= $noticia->resumen; ?>
								</p>
								<a class="btn_leer" href="<?= URL_MASTER ?>/pages/publicaciones/<?= $noticia->tipo ?>/<?= $name_xml ?>/<?= $noticia->name ?>">Leer mas...</a>
							</div>
							<?php
						}
					}
					?>
				</div>
				<center><a href="<?= URL_MASTER ?>/pages/publicaciones/<?= $name_xml ?>/noticia" ><h5 class="more_info"> <i class="material-icons">add_circle_outline</i> Ver todas las Noticias</h5></a></center>
			</div>
			<?php
		}
		?>
		<?php
		$n_eventos = count($todos_evento);
		if ($n_eventos > 0) {
			?>
			<div class="row urep_divide">
				<h3 class="center-align" >Eventos</h3>
				<div id="cont_eventos" class="owl-carousel owl-theme">
					<?php
					$cont = 0;
					foreach ($todos_evento as $evento) {
						if ($cont < 9) {
							$cont++;
							?>
							<div class="item noticia">
								<img src="<?= URL_MASTER ?>/images/noticias_eventos/<?= $evento->imagen; ?>">
								<h5>
									<a href="<?= URL_MASTER ?>/pages/publicaciones/<?= $evento->tipo ?>/<?= $name_xml ?>/<?= $evento->name ?>"><?= $evento->titular; ?></a>
								</h5>
								<p>
									<?= $evento->resumen; ?>
								</p>
								<a class="btn_leer" href="<?= URL_MASTER ?>/pages/publicaciones/<?= $evento->tipo ?>/<?= $name_xml ?>/<?= $evento->name ?>">Leer mas...</a>
							</div>
							<?php
						}
					}
					?>
				</div>
				<center><a href="<?= URL_MASTER ?>/pages/publicaciones/<?= $name_xml ?>/evento" ><h5 class="more_info"> <i class="material-icons">add_circle_outline</i> Ver todos los Eventos </h5></a></center>
			</div>
			<?php
		}
		?>
	</div>
	<?php require_once('../plantilla/footer.php'); ?>
</body>
<script type="text/javascript">
	$(document).ready(function() {
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			autoplayHoverPause: true,
			autoplay:true,
			autoplayTimeout:5000,
			autoplaySpeed: 2000,
			navSpeed: 2000,
			margin: 15,
			nav: true,
			loop: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2
				},
				1000: {
					items: 3
				}
			}
		})
	})
	// ORDENAR
	$("#btn_egresado").click(function() {
		$("#form_egresado").addClass("ocultar");
		var user = $("#user").val();
		var pass = $("#pass").val();
		var accion = $("#accion").val();
		var formData = {user:user,pass:pass,accion:accion};
		var url = "../admin/control/control_egresados_urep.php"; // El script a dónde se realizará la petición.
		$.ajax({
			type: "POST",
			url: url,
			data: formData,
			success: function(data){
				$("#data_egresado").html(data)
			}
		});
	});
</script>
</html>