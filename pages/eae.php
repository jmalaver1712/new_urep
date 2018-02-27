<!doctype html>
<html manifest="urepublicana.appcache">
<head>
	<?php require_once('../plantilla/head.php'); 
	$name_xml = "eae";
	$todos_noticias = $get_xml->reg_detail_xml("tipo", "noticia", $name_xml.'.xml', 9);
	$todos_evento = $get_xml->reg_detail_xml("tipo", "evento", $name_xml.'.xml', 9);
	?>
</head>
<body id="body_urep">
	<?php require_once('../plantilla/menu.php'); ?>
	<div class="breadcrumb"><a href="<?= URL_MASTER ?>/pages/index.php"> Inicio </a> > <a href="<?= URL_MASTER ?>/pages/eae/"> EAE </a></div>
	<div class="container">
		<div class="row center">
			<div class="col s12">
				<h2>Escuela de Altos Estudios</h2>
				<img src="<?= URL_MASTER ?>/images/web/eae/banner_eae.jpg" width="100%">
			</div>
		</div>
		<div class="row lnk_first">
			<div class="col s12 m3"><br></div>
			<div class="col s4 m2">
				<span class="enlace_urep" name="#eae_general">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/eae/eae_quienes_1.png" src="<?= URL_MASTER ?>/images/web/eae/eae_quienes.png">
					<p>Quienes Somos</p>
				</span>
			</div>
			<div class="col s4 m2">
				<span class="enlace_urep" name="#eae_docentes">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/eae/eae_docentes_1.png" src="<?= URL_MASTER ?>/images/web/eae/eae_docentes.png">
					<p>Formación Docente</p>
				</span>
			</div>
			<div class="col s4 m2">
				<span class="enlace_urep" name="#eae_saber_pro">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/eae/eae_saber_pro_1.png" src="<?= URL_MASTER ?>/images/web/eae/eae_saber_pro.png">
					<p>Saber PRO</p>
				</span>
			</div>
		</div>
		<div class="row">
			<!-- GENERAL -->
			<div id="eae_general" class="col s12 content_urep content_inter ocultar">
				<p>
					La <i>Escuela de Altos Estudios</i> para la formación de docentes universitarios, nace por disposición del Consejo Superior en el año 2005 mediante el acuerdo 70 del 12 de diciembre. 
					<br>
					Somos una instancia que trabaja de la mano de vicerrectoría académica para apoyar las decanaturas y otras dependencias académicas. 
					La misión de la E.A.E consiste en centrar esfuerzos en la cualificación docente a través de programas de formación interdisciplinaria y de actualización en el campo de la pedagogía y la docencia universitaria.
					<br>
					Tenemos como visión el reconocimiento como instancia líder en la formación docente mediante pedagogías activas acordes a los programas académicos universitarios y contextos de la realidad de la comunidad educativa.
					<br><br>
					<b>Principios:</b> formación permanente, reflexión e innovación pedagógica.<br>
					<b>Fines:</b> Excelencia académica, intercambio de experiencias pedagógicas, cualificar los procesos de enseñanza aprendizaje, fortalecer y mejorar los resultados de las pruebas saber pro.
					<br><br>
					<b>Equipo E.A.E</b>
					<br><br>
					Adriana Hurtado Sabayet<br>
					Directora<br>
					(+571) 2862384 Ext 142 <br>
					eae@urepublicana.edu.co<br>
					<br><br>
					Abelardo Monroy Ríos<br>
					Coordinador<br>
					(+571) 2862384 Ext 142 <br>
					eae@urepublicana.edu.co <br>
				</p>
			</div>
			<!-- DOCENTES -->
			<div id="eae_docentes" class="col s12 content_urep ocultar">
				<div class="row">
					<div class="col s12 m3 left-align">
						<ul>
							<li name="#eae_docente_descripcion" class="enlace_inter"> Descripción </li>
							<li name="#diplomado_docente_evaluacion" class="enlace_inter"> Diplomado en Docencia Universitaria con Énfasis en Evaluación </li>
							<li name="#diplomado_docente_TIC" class="enlace_inter"> Diplomado en Docencia Universitaria con Énfasis en TIC </li>
							<li name="#diplomado_docente_participacion" class="enlace_inter"> Diplomado en Gestión Educativa en el Contexto de la Participación </li>
						</ul>
					</div>
					<div class="col s12 m9">
						<!-- DESCRIPCION -->
						<div id="eae_docente_descripcion" class="content_urep content_inter ocultar">
							<p>
								Esta formación se orienta en aspectos relacionados con pedagogía, metodología, investigación,  planeación y evaluación por competencias. En este marco de actuación, la Escuela de Altos Estudios para la Formación de Docentes, en años anteriores ha desarrollado acciones de formación   relacionadas con temáticas como: Plataforma Moodle, programación Neurolingüísticas; y un espacio denominado diálogo universitario en el que se desarrollaron una variedad de conferencias sobre diversos temas de interés académico.
								<br>
								En la actualidad las acciones programadas se orientan al desarrollo y fortalecimiento de conocimientos respecto al aprendizaje significativo; la planeación, enseñanza y evaluación por competencias, así como al conocimiento y profundización sobre las metodologías activas en la enseñanza universitaria. En este orden de ideas, se cuenta con el Diplomado en Docencia Universitaria con Énfasis en Evaluación, en la modalidad presencial, con el Diplomado en Docencia Universitaria con Énfasis en TIC en la modalidad presencial y virtual y el Diplomado en Gestión Educativa en el Contexto de la participación. 
							</p>
						</div>
						<!-- diplomado_docente_evaluacion -->
						<div id="diplomado_docente_evaluacion" class="content_urep content_inter ocultar">
							<h5 class="admision_proceso"><span>*</span> Presentación </h5>
							La formación en docencia universitaria se presenta como un espacio de reflexión , documentación y práctica sobre los métodos de enseñanza – aprendizaje , el manejo de las TIC y la evaluación, sin desconocer las dinámicas del mercado globalizado y su inserción en la educación, pero también, bajo la óptica de la educación y la pedagogía como prácticas que conducen a la preservación de la cultura, la construcción del conocimiento y ante todo, como el camino para construir sociedades más justas con el ser humano, la vida y el planeta. 
							<h5 class="admision_proceso"><span>*</span> Objetivo</h5>
							Capacitar a los docentes en el manejo de tecnologías y didácticas encaminadas a mejorar los procesos de enseñanza- aprendizaje, la evaluación, las competencias en TIC y la investigación, lo anterior dentro de las concepciones del PEI y el modelo pedagógico de la institución. 
							<h5 class="admision_proceso"><span>*</span> Dirigido a</h5>
							Docentes, decanos y coordinadores de las distintas facultades de la Corporación Universitaria Republicana. 
							Modalidad
							<br>
							120 horas presenciales
							<br>
							Fecha próxima de inicio:
							<h5 class="admision_proceso"><span>*</span> Módulos </h5>
							<ul>
								<li><b> * </b> Evaluación por competencias (Saber Pro)</li>
								<li><b> * </b> Pedagogía y docencia universitaria</li>
								<li><b> * </b> Buenas prácticas docentes en el uso de las TIC</li>
							</ul>
						</div>
						<!-- diplomado_docente_TIC -->
						<div id="diplomado_docente_TIC" class="content_urep content_inter ocultar">
							<h5 class="admision_proceso"><span>*</span> Presentación </h5>
							Las T.I.C han permeado las representaciones, acciones, competencias y técnicas de trabajo en todas las disciplinas; la educación no es ajena a esto, hoy se requiere de la exploración y el manejo de las tecnologías para crear ambientes, entornos, metodologías y didácticas de aprendizaje. El Diplomado en Docencia Universitaria con Énfasis en T.I.C tiene como fin proporcionar experiencias y conocimientos a los docentes para mejorar sus desempeños y facilitar los aprendizajes de los estudiantes universitarios. 
							<h5 class="admision_proceso"><span>*</span> Objetivo</h5>
							Fortalecer las prácticas pedagógicas de los docentes universitarios mediante didácticas y metodologías dinamizadas en ambientes virtuales de aprendizaje diseñados mediante el buen uso de las T.I.C.
							<h5 class="admision_proceso"><span>*</span> Dirigido a</h5>
							Docentes de la Corporación Universitaria Republicana, egresados, estudiantes y externos interesados en adquirir conocimientos y desarrollar competencias en el manejo de las T.I.C como herramienta pedagógica.     
							<br>
							80 horas virtuales     
							<br>
							Fecha próxima de inicio: <b>febrero 3 de 2018 </b>
							<h5 class="admision_proceso"><span>*</span> Módulos </h5>
							<ul>
								<li><b> * </b> Pedagogía y/o Andragogía, el quehacer del docente universitario.</li>
								<li><b> * </b> T.I.C Herramientas didácticas en los procesos de enseñanza aprendizaje.</li>
								<li><b> * </b> T.I.C En los procesos de evaluación formativa.</li>
							</ul>
						</div>
						<!-- diplomado_docente_participacion -->
						<div id="diplomado_docente_participacion" class="content_urep content_inter ocultar">
							<h5 class="admision_proceso"><span>*</span> Presentación </h5>
							El Diplomado en Gestión Educativa en el Contexto de la Participación surge como una alternativa de formación que brinda fundamentos conceptuales, teóricos y legales que los directivos, docentes y personal administrativo de las instituciones educativas de primaria, básica y media requieren para dar cumplimiento a los objetivos, metas, planes y proyectos institucionales. Asimismo, podrán adquirir los conocimientos pertinentes para hacer un buen manejo de los recursos, todo en busca de la calidad de la educación, siendo esta un derecho fundamental vinculado al libre desarrollo de la personalidad y la participación como principio democrático.
							<h5 class="admision_proceso"><span>*</span> Objetivo</h5>
							Capacitar directivos, docentes y personal administrativo de colegios de enseñanza primaria, básica y media en el campo de la gestión educativa, brindando fundamentos teóricos, conceptuales y legales que optimicen sus acciones de gestión.
							<h5 class="admision_proceso"><span>*</span> Dirigido a</h5>
							Docentes, directivos y personal administrativo de instituciones educativas de enseñanza básica y secundaria.
							<br>
							110 horas virtuales     
							<br>
							Fecha próxima de inicio: <b>febrero 3 de 2018 </b>
							<h5 class="admision_proceso"><span>*</span> Módulos </h5>
							<ul>
								<li><b> * </b>Gestión y pedagogía: marco Epistemológico y conceptual</li>
								<li><b> * </b>La gestión educativa, una mirada desde el marco jurídico</li>
								<li><b> * </b>Gobierno escolar, deber ser, logros y retos</li>
								<li><b> * </b>Educación sostenible y educación para la vida</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- SABER PRO -->
			<div id="eae_saber_pro" class="col s12 content_urep ocultar">
				<div class="row">
					<div class="col s12 m3 left-align">
						<ul>
							<li name="#eae_saberpro_descripcion" class="enlace_inter"> Descripcion </li>
							<li name="#taller_saberpro_RC" class="enlace_inter"> Seminario- taller en Razonamiento Cuantitativo  </li>
							<li name="#taller_saberpro_CC" class="enlace_inter"> Seminario- taller en Competencias Ciudadanas </li>
							<li name="#taller_saberpro_LC" class="enlace_inter"> Seminario- taller en producción textual  y lectura crítica </li>
							<li name="#taller_saberpro_ingles" class="enlace_inter"> Seminario- taller en Inglés </li>
							<li name="#campamento_saberpro" class="enlace_inter"> Campamento saberpro </li>
						</ul>
					</div>
					<div class="col s12 m9">
						<!-- DESCRIPCION -->
						<div id="eae_saberpro_descripcion" class="content_urep content_inter ocultar">
							<p>
								La implementación de la prueba Saber Pro como requisito de grado en la educación superior y su asunción de ésta como un indicador de calidad para el Ministerio de Educación Nacional, ha llevado a las instituciones educativas de educación superior a implementar estrategias que mejoren los resultados de sus estudiantes. <br><br>
								Por ello, la Corporación Universitaria Republicana a través de la Escuela de Altos Estudios para la Formación de Docentes Universitarios, desarrolla en cada  semestre  un ciclo de capacitación con los estudiantes inscritos ante el ICFES para presentar la prueba, el cual consiste en una serie de talleres que permiten identificar falencias de los estudiantes, tanto en competencias genéricas, como específicas.  Con base en ello, reforzar conocimientos y profundizar en los contenidos y metodologías de la prueba, con lo cual se propicia un mayor nivel de concientización sobre la importancia de esta prueba  como indicador de calidad de los programas y en la vida laboral de los  egresados.
							</p>
						</div>
						<!-- taller_saberpro_RC -->
						<div id="taller_saberpro_RC" class="content_urep content_inter ocultar">
							<h5 class="admision_proceso"><span>*</span> Objetivo</h5>
							Recordar y poner en práctica conceptos y elementos de las matemáticas que intervienen en los procesos del razonamiento cuantitativo.
							<h5 class="admision_proceso"><span>*</span> Dirigido a</h5>
							Estudiantes candidatos a presentar la prueba saber pro.
							<br>
							<b>Modalidad:</b> Presencial y virtual
							<br>
							<b>Duración:</b> 20 horas
							<h5 class="admision_proceso"><span>*</span> Competencias a desarrollar </h5>
							<ul>
								<li><b> * </b>Comprender y manipular datos cuantitativos.</li>
								<li><b> * </b>Leer e interpretar gráficas.</li>
								<li><b> * </b>Resolver problemas involucrando información cuantitativa y objetos matemáticos.</li>
								<li><b> * </b>Seleccionar y ejecutar procedimientos matemáticos.</li>
								<li><b> * </b>Justificar afirmaciones o juicios que involucran información cuantitativa. </li>
								<li><b> * </b>Utilizar adecuadamente ejemplos y contraejemplos con el fin de distinguir supuestos y reconocer falacias. </li>
								<li><b> * </b>Proyectar posibles soluciones a partir de diferentes fuentes de información.</li>
							</ul>
						</div>
						<!-- taller_saberpro_CC -->
						<div id="taller_saberpro_CC" class="content_urep content_inter ocultar">
							<h5 class="admision_proceso"><span>*</span> Objetivo</h5>
							<ul>
								<li><b> * </b> Fortalecer los conocimientos y valores que hacen de las competencias ciudadanas una práctica social.</li>
								<li><b> * </b> Identificar las competencias básicas que favorecen el ejercicio de la ciudadanía. </li>
								<li><b> * </b> Contextualizar ambientes que promueven el ejercicio de la convivencia ciudadana.</li>
								<li><b> * </b> Resolver situaciones problema que exigen la aplicación de las competencias y prácticas de la convivencia ciudadana.</li>
							</ul>
							<h5 class="admision_proceso"><span>*</span> Dirigido a</h5>
							Estudiantes candidatos a presentar la prueba saber pro.
							<br>
							<b>Modalidad:</b> Presencial y virtual
							<br>
							<b>Duración:</b> 20 horas
							<h5 class="admision_proceso"><span>*</span> Competencias a desarrollar </h5>
							<ul>
								<li><b> * </b> Apropiar y aplicar adecuadamente los conocimientos y valores requeridos para la práctica ciudadana.</li>
								<li><b> * </b> Conocer desde la constitución y el marco jurídico el ejercicio de la ciudadanía.</li>
								<li><b> * </b> Identificar los contextos que favorecen las buenas prácticas ciudadanas y los que las impiden.</li>
								<li><b> * </b> Resolver situaciones problema en los que el ejercicio de la ciudadanía se requiera. </li>
								<li><b> * </b> Producir documentos argumentativos que sustenten su postura frente a situaciones problema o de conflicto. </li>
								<li><b> * </b> Participar en las actividades programadas en el seminario.</li>
								<li><b> * </b> Afianzar competencias en comprensión, interpretación lectora y producción textual.</li>
							</ul>
						</div>
						<!-- taller_saberpro_LC -->
						<div id="taller_saberpro_LC" class="content_urep content_inter ocultar">
							<h5 class="admision_proceso"><span>*</span> Objetivo</h5>
							<ul>
								<li><b> * </b>Preparar a los estudiantes en las competencias lectoras que exige el ICFES: “entender, interpretar y evaluar textos”. (continuos discontinuos).</li>
								<li><b> * </b>Proporcionar a los estudiantes las herramientas necesarias para producir textos escritos de calidad académica, de manera legible, organizada y acorde con las necesidades y rol del interlocutor.</li>
							</ul>
							<h5 class="admision_proceso"><span>*</span> Dirigido a</h5>
							Estudiantes candidatos a presentar la prueba saber pro.
							<br>
							<b>Modalidad:</b> Presencial y virtual
							<br>
							<b>Duración:</b> 20 horas
							<h5 class="admision_proceso"><span>*</span> Competencias a desarrollar </h5>
							<ul>
								<li><b> * </b>Identificar y comprender eventos, ideas, afirmaciones y elementos locales de un texto.</li>
								<li><b> * </b>Comprender la forma como se relacionan semántica y formalmente un texto para que cobre sentido.</li>
								<li><b> * </b>Enfrentar un texto con sentido crítico evaluando argumentos, supuestos, implicaciones reconociendo estrategias argumentativas y retoricas relacionadas con los contenidos.</li>
								<li><b> * </b>Usar adecuadamente la caligrafía, la redacción, la unidad y la coherencia en la producción de textos escritos.</li>
								<li><b> * </b>Presentar ordenadamente textos escritos utilizando los recursos de cohesión y secuencialidad, signos de puntuación y conectores para expresar de manera clara las ideas.</li>
								<li><b> * </b>Seleccionar el lenguaje apropiado al rol social del interlocutor en procura que el texto cumpla su función comunicativa.</li>
							</ul>
						</div>
						<!-- taller_saberpro_ingles -->
						<div id="taller_saberpro_ingles" class="content_urep content_inter ocultar">
							<h5 class="admision_proceso"><span>*</span> Objetivo</h5>
							Proporcionar a los estudiantes las herramientas necesarias para adquirir competencias comunicativas en la lengua inglesa, conforme a lo expresado en el Marco Común Europeo. 
							<h5 class="admision_proceso"><span>*</span> Dirigido a</h5>
							Estudiantes candidatos a presentar la prueba saber pro.
							<br>
							<b>Modalidad:</b> Presencial y virtual
							<br>
							<b>Duración:</b> 20 horas
							<h5 class="admision_proceso"><span>*</span> Competencias a desarrollar </h5>
							<ul>
								<li><b> * </b>Fortalecer los conocimientos gramaticales a través de la producción de textos cortos en lengua inglesa. </li>
								<li><b> * </b>Comprender la forma como se relacionan semántica y formalmente un texto en lengua inglesa  para que cobre sentido.</li>
								<li><b> * </b>Fortalecer el léxico en lengua inglesa.</li>
							</ul>
						</div>
						<div id="campamento_saberpro" class="content_urep content_inter ocultar">
							<center>
								<img width="70%" src="<?= URL_MASTER ?>/images/web/eae/curso_saber_pro.JPG"><br><br>
							</center>
							Apreciado estudiante, <br> 
							Bienvenido a este espacio en el que tendrá la oportunidad de identificar las dinámicas y características de las Pruebas Saber Pro, de igual forma, podrá reforzar sus conocimientos en las competencias genéricas: Razonamiento Cuantitativo, Lectura Crítica, Competencias Ciudadanas, Inglés y Comunicación Escrita. 
							Asimismo podrá realizar el simulacro tanto en competencias genéricas como en competencias específicas. 
							<br><br>
							<center>
								<a class="waves-effect waves-light btn red darken-3" href="http://saberpro.campusvirtualurepublicana.edu.co/course/view.php?id=2" target="_blank">
									<i class="material-icons left">cloud_download</i>CONOCE EL CURSO
								</a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content_urep">

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