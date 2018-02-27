<!doctype html>
<html>
<head>
	<?php 
	require_once('../plantilla/head.php');
	$name_xml = "principal";
	$todos_noticias = $get_xml->reg_detail_xml("tipo", "noticia", $name_xml.'.xml', 9);
	$todos_evento = $get_xml->reg_detail_xml("tipo", "evento", $name_xml.'.xml', 9);
	$todos_slide = $get_xml->reg_detail_xml("importancia", "1", $name_xml.'.xml', 8);
	$todos_popup = $get_xml->reg_detail_xml("tipo", "popup", $name_xml.'.xml', 1);
	?>
</head>
<body id="body_urep">
	<?php require_once('../plantilla/menu.php'); ?>
	<?php 
	foreach ($todos_popup as $popup) {
		$id_popup = intval($popup[0]->importancia);
		if ($id_popup == 1) {
			$url = URL_MASTER."/pages/publicaciones/".$popup->tipo."/".$name_xml."/".$popup->name;
			if ($popup->enlace != "") {
				$url = $popup->enlace;
			}
			?>
			<div id="banner_intro" class="modal">
				<div class="modal-content center">
					<h3><?= $popup->titular ?></h3>
					<a href="<?= $url ?>"><img src="<?= URL_MASTER ?>/images/noticias_eventos/<?= $popup->imagen; ?>" width="100%"></a>
				</div>
			</div>
			<?php 
		}
	}
	?>
	<!-- Modal Structure -->
	<!-- FINAL MODAL -->
	<!-- CONTENIDO -->
	<div>
		<!-- SLIDER PRINCIPAL -->
		<div class="row">
			<div id="slider_main" class="largemargin" style="width: 1350px; height: 600px;">
				<?php
				$cont = 0;
				foreach ($todos_slide as $slide) {
					$url = URL_MASTER."/pages/publicaciones/".$slide->tipo."/".$name_xml."/".$slide->name;
					if ($slide->enlace != "") {
						$url = $slide->enlace;
					}
					?>
					<div class="ls-slide" data-ls="duration:5000;transitionorigami:true;overflow:true;kenburnsscale:1.2;">
						<img src="<?= URL_MASTER ?>/images/noticias_eventos/<?= $slide->imagen; ?>" class="ls-bg">
						<a href="<?= $url ?>">
							<div class="ls-l div_info"></div>
						</a>
					</div>
					<?php
				}
				?>
				<!-- MENSAJE NAVIDAD
				<div class="ls-slide" data-ls="duration:3000;transitionorigami:true;overflow:true;kenburnsscale:1.2;">
					<img src="../images/noticias_eventos/navidad.jpg" class="ls-bg">
					<div class="ls-l" style="margin-top: 20%; margin-left: 25%;">
						<iframe width="50%" class="video" src="//www.youtube.com/embed/_sYnU-BmSQs" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				FIN MENSAJE NAVIDAD -->
			</div>
		</div>
		<!-- ENLACES RAPIDOS - ATAJOS -->
		<div class="row lnk_first">
			<div class="col m2 atajos_espacio"><br></div>
			<div class="col s3 m1">
				<a href="<?= URL_MASTER ?>/pages/admisiones/">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/admisiones_1.png" src="<?= URL_MASTER ?>/images/web/atajos/admisiones.png">
					<p>Admisiones</p>
				</a>
			</div>
			<div class="col s3 m1">
				<a href="<?= URL_MASTER ?>/pages/financiacion.php">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/financiacion_1.png" src="<?= URL_MASTER ?>/images/web/atajos/financiacion.png">
					<p>Pagos y Financiación</p>
				</a>
			</div>
			<div class="col s3 m1">
				<a href="<?= URL_MASTER ?>/pages/biblioteca.php">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/biblioteca_1.png" src="<?= URL_MASTER ?>/images/web/atajos/biblioteca.png">
					<p>Biblioteca</p>
				</a>
			</div>
			<div class="col s3 m1">
				<a href="<?= URL_MASTER ?>/pages/centro_idiomas.php">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/centro_idiomas_1.png" src="<?= URL_MASTER ?>/images/web/atajos/centro_idiomas.png">
					<p>Centro de Idiomas</p>
				</a>
			</div> 
			<div class="col s3 m1">
				<a href="http://campusvirtualurepublicana.edu.co/">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/campus_1.png" src="<?= URL_MASTER ?>/images/web/atajos/campus.png">
					<p>Campus Virtual</p>
				</a>
			</div>
			<div class="col s3 m1">
				<a href="<?= URL_MASTER ?>/pages/eae/">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/eae_1.png" src="<?= URL_MASTER ?>/images/web/atajos/eae.png">
					<p>Escuela de Altos Estudios</p>
				</a>
			</div> 
			<div class="col s3 m1">
				<a target="_blank" href="<?= URL_MASTER ?>/images/web/menu/convenio_sena.pdf">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/convenio_sena_1.png" src="<?= URL_MASTER ?>/images/web/atajos/convenio_sena.png">
					<p>Convenio SENA</p>
				</a>
			</div>
			<div class="col s3 m1">
				<a href="<?= URL_MASTER ?>/pages/publicaciones_urepublicana/">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/publicaciones_1.png" src="<?= URL_MASTER ?>/images/web/atajos/publicaciones.png">
					<p>Publicaciones</p>
				</a>
			</div>
<!--       <div class="col s3 m1">
        <a target="_blank" href="http://ojs.urepublicana.edu.co/index.php/">
          <img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/revista_1.png" src="<?= URL_MASTER ?>/images/web/atajos/revista.png">
          <p>Revistas Republicana</p>
        </a>
      </div>
      <div class="col s3 m1">
        <a href="<?= URL_MASTER ?>/pages/gaceta.php">
          <img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/gaceta_1.png" src="<?= URL_MASTER ?>/images/web/atajos/gaceta.png">
          <p>Gaceta</p>
        </a>
      </div>
      <div class="col s3 m1">
        <a href="<?= URL_MASTER ?>/pages/libros.php">
          <img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/libro_1.png" src="<?= URL_MASTER ?>/images/web/atajos/libro.png">
          <p>Libros Electrónicos</p>
        </a>
    </div> -->
</div>
<!-- CONTENIDO -->
<div class="container">
	<!-- NOTICIAS -->
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
	<!-- EVENTOS -->
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
</div>
<?php require_once('../plantilla/footer.php'); ?>
<script>
	$(document).ready(function() {
		$("#banner_intro").modal('open');
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
