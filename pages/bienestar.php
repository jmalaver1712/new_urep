<!doctype html>
<html manifest="urepublicana.appcache">
<head>
	<?php require_once('../plantilla/head.php');
	$name_xml = "bienestar";
	$todos_noticias = $get_xml->reg_detail_xml("tipo", "noticia", $name_xml.'.xml', 9);
	$todos_evento = $get_xml->reg_detail_xml("tipo", "evento", $name_xml.'.xml', 9);
	?>
</head>
<body id="body_urep">
	<?php require_once('../plantilla/menu.php'); ?>
	<div class="breadcrumb"><a href="<?= URL_MASTER ?>/pages/index.php"> Inicio </a> > <a href="<?= URL_MASTER ?>/pages/bienestar/"> Bienestar </a></div>
	<div class="container">
		<div class="row center">
			<div class="col s12">
				<h2>Bienestar Universitario</h2>
				<img src="<?= URL_MASTER ?>/images/web/bienestar/banner_bienestar.jpg" width="100%">
			</div>
		</div>
		<div class="row lnk_first">
			<div class="col s12 m2"><br></div>
			<div class="col s3 m2">
				<span class="enlace_urep" name="#bienestar_general">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/bienestar/quienessomos1.png" src="<?= URL_MASTER ?>/images/web/bienestar/quienessomos.png">
					<p>Quiénes Somos</p>
				</span>
			</div>
			<div class="col s3 m2">
				<span class="enlace_urep" name="#bienestar_areas">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/bienestar/areas1.png" src="<?= URL_MASTER ?>/images/web/bienestar/areas.png">
					<p>Áreas de bienestar</p>
				</span>
			</div>
			<div class="col s3 m2">
				<a class="enlace_urep" href="<?= URL_MASTER ?>/images/web/bienestar/Reglamento-Bienestar.pdf" target="_blank">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/bienestar/reglamento1.png" src="<?= URL_MASTER ?>/images/web/bienestar/reglamento.png">
					<p>Reglamento</p>
				</a>
			</div>
			<div class="col s3 m2">
				<a class="enlace_urep" href="<?= URL_MASTER ?>/images/web/bienestar/actividades_2018_1.pdf" target="_blank">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/bienestar/actividades1.png" src="<?= URL_MASTER ?>/images/web/bienestar/actividades.png">
					<p>Calendario de Actividades</p>
				</a>
			</div>
		</div>
		<div class="row">
			<!-- GENERAL -->
			<div id="bienestar_general" class="col s12 content_urep content_inter ocultar">
				<p>
					<center>
					<iframe src="https://player.vimeo.com/video/256604232" class="video" width="90%" frameborder="0"></iframe>
					</center>
					<center> 
						<h4>Nuestro actuar</h4>
						<h5>Mejorar la calidad  de vida de los integrantes de la institución por medio del  desarrollo humano integral físico, social , espiritual y psicoafectivo.</h5>
					</center>
					<h4>Misión</h4>
					Contribuir en la formación integral de los estudiantes, docentes y personal administrativo, a través de programas y proyectos que nos permitan reconocer y potencializar las capacidades y habilidades de nuestros integrantes, generar identidad con la institución, facilitar la realización personal y colectiva de todos los miembros de la comunidad universitaria.  
					<h4>Propósito</h4>
					Bienestar Universitario busca generar planes de acción a partir de programas, proyectos y acciones que contribuyan a la consolidación de una cultura de bien estar en la comunidad de la Corporación Universitaria Republicana, coherentes con sus políticas institucionales.
					<h4>Visión</h4> 
					Ser una unidad organizacional dinámica que se fortalezca con la participación activa de toda la comunidad universitaria, implementando continuamente acciones que promuevan su desarrollo humano y la formación integral. 
					<h4>Objetivos</h4>
					<ul>
						<li><b>*</b> Crear las condiciones favorables para permitir a los miembros de la comunidad universitaria un clima adecuado al trabajo académico, a la integración humana y al desarrollo personal, para la formación de ciudadanos conscientes de su participación en una sociedad pluralista y democrática.</li>
						<li><b>*</b> Favorecer y proporcionar los medios adecuados para la expresión artística, la actividad deportiva y las distintas manifestaciones culturales que coadyuven a la formación integral de los diferentes estamentos que conforman la comunidad universitaria.</li>
						<li><b>*</b> Contribuir al mantenimiento de la salud y la seguridad de la comunidad universitaria como apoyo al mejoramiento de la calidad de vida y la actividad productiva de sus integrantes, a través del desarrollo de acciones como  campañas educativas, promoción y prevención de la  salud.</li>
					</ul>
				</p>
			</div>
			<!-- SERVICIOS -->
			<div id="bienestar_areas" class="col s12 content_urep ocultar">
				<div class="row">
					<div class="col s12 m3 left-align">
						<ul>
							<h5>Áreas de bienestar</h5>
							<li name="#area_desarrollo" class="enlace_inter"> Desarrollo humano </li>
							<li name="#area_salud" class="enlace_inter">Salud </li>
							<li name="#area_cultura" class="enlace_inter">Cultura </li>
							<li name="#area_deportes" class="enlace_inter"> Deportes </li>
							<li name="#area_economica" class="enlace_inter"> Promoción socioeconómica </li>
						</ul>
					</div>
					<div class="col s12 m9">
						<!-- DESCRIPCION -->
						<div id="area_desarrollo" class="content_urep content_inter ocultar">
							<p>
								<h5>DESARROLLO HUMANO</h5>
								<ul>
									<li><b>*</b> Asesoría psicológica.</li>
									<li><b>*</b> Talleres en:  comprensión de lectura y redacción de textos.</li>
									<li><b>*</b> técnicas de radio.</li>
									<li><b>*</b> Conversatorios de bienestar</li>
									<li><b>*</b> Refuerzo de inglés.</li>
									<li><b>*</b> Celebraciones y conmemoraciones.</li>
								</ul>
								<img src="<?= URL_MASTER ?>/images/web/bienestar/desarrollohumano.jpg" alt="" width="100%"><br>
							</p>
						</div>
						<!-- Descuentos -->
						<div id="area_salud" class="content_urep content_inter ocultar">
							<p>
								<h5>SALUD</h5>
								<ul>
									<li><b>*</b> Servicio de atención médica.</li>
									<li><b>*</b> Talleres de promoción y prevención (planificación, ETS, SPA).</li>
									<li><b>*</b> Jornada de salud (Donación sangre, vacunación).</li>
								</ul>
								<img src="<?= URL_MASTER ?>/images/web/bienestar/salud.jpg" alt="" width="100%"><br>
							</p>
						</div>
						<!-- Servicios -->
						<div id="area_cultura" class="content_urep content_inter ocultar">
							<p>
								<h5>CULTURA </h5>
								<ul>
									<li><b>*</b> Jornada cultural.</li>
									<li><b>*</b> Cine club, Capoeira.</li>
									<li><b>*</b> Talleres de dibujo,  pintura, fotografía y expresión oral.</li>
									<li><b>*</b> Interpretación de instrumentos (guitarra,  piano, batería, bajo).</li>
									<li><b>*</b> Clases de música (técnica vocal, grupo de rock).</li>
									<li><b>*</b> Grupos representativos (teatro, danza y música).</li>
								</ul>
								<img src="<?= URL_MASTER ?>/images/web/bienestar/areacultural.jpg" alt="" width="100%"><br>
							</p>
						</div>
						<!-- Carnetizacion -->
						<div id="area_deportes" class="content_urep content_inter ocultar">
							<p>
								<h5>DEPORTES</h5>
								<ul>
									<li><b>*</b> Participación  activa en diferentes modalidades deportivas a nivel universitario.</li>
									<li><b>*</b> Deporte recreativo: Rumba,  aeróbicos y tonificación.</li>
									<li><b>*</b> Deporte formativo: Desarrollo de actividades (ajedrez, tenis de mesa, taekwondo)</li>
									<li><b>*</b> Deporte competitivo: interno (sana competencia e integración) y externo (gestiona, coordina y promueve).</li>
								</ul>
								<img src="<?= URL_MASTER ?>/images/web/bienestar/deportes.jpg" alt="" width="100%"><br>
								<img src="<?= URL_MASTER ?>/images/web/bienestar/acondicionamiento_fisico.jpg" alt="" width="100%"><br>
							</p>
						</div>
						<!-- Laboral -->
						<div id="area_economica" class="content_urep content_inter ocultar">
							<p>
								<h5>PROMOCIÓN SOCIO ECONÓMICA</h5>
								Se trabaja articuladamente con la Rectoría y la Dirección administrativa, otorgando  estímulos (becas, descuentos y monitorias).
							</p>
						</div>
					</div>
				</div>
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
	<script>
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
	</script>
</body>
</html>