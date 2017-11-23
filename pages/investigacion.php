<!doctype html>
<html manifest="urepublicana.appcache">
<head>
	<?php require_once('../plantilla/head.php'); 
	$todos_programas = $get_xml->registros_all_xml('programas.xml');
	?>
</head>
<body id="body_urep">
	<?php require_once('../plantilla/menu.php'); ?>
	<div class="breadcrumb"> <a href="<?= URL_MASTER ?>/pages/index.php"> Inicio </a> > <a href="<?= URL_MASTER ?>/pages/investigacion.php"> Centro de Investigación </a></div>


	<!-- ENLACES RAPIDOS - ATAJOS -->
	<div class="container">
		<div class="row center">
			<h4>Centro de Investigación</h4>
			<img src="<?= URL_MASTER ?>/images/web/investigacion/banner_investigacion.jpg" width="100%">
		</div>

		<div class="row lnk_first">
			<div class="col s2 m1"><br></div>

			<div class="col s4 m2">
				<span class="enlace_urep" name="#inves_estruc">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/investigacion/inves_estruc_1.png" src="<?= URL_MASTER ?>/images/web/investigacion/inves_estruc.png">
					<p>Estructura de Investigación</p>
				</span>
			</div>

			<div class="col s4 m2">
				<span class="enlace_urep" name="#inves_grupos">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/investigacion/inves_grupos_1.png" src="<?= URL_MASTER ?>/images/web/investigacion/inves_grupos.png">
					<p>Grupos de Investigación</p>
				</span>
			</div>

			<div class="col s4 m2">
				<span class="enlace_urep" name="#inves_docs">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/investigacion/inves_docs_1.png" src="<?= URL_MASTER ?>/images/web/investigacion/inves_docs.png">
					<p>Documentos de Interes</p>
				</span>
			</div>

			<div class="col s4 m2">
				<a target="_blank" href="http://ojs.urepublicana.edu.co/index.php/">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/revista_1.png" src="<?= URL_MASTER ?>/images/web/atajos/revista.png">
					<p>Revistas Republicana</p>
				</a>
			</div>

			<div class="col s4 m2">
				<a href="libros.php">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/libro_1.png" src="<?= URL_MASTER ?>/images/web/atajos/libro.png">
					<p>Libros Electrónicos</p>
				</a>
			</div>

		</div>

		<div class="row">

			<!-- Estructura de Investigación -->
			<div id="inves_estruc" class="col s12 content_urep ocultar">
				<img class="center" src="<?= URL_MASTER ?>/images/web/investigacion/inves_estructura.jpg" width="100%">
			</div>

			<!-- GRUPOS -->
			<div id="inves_grupos" class="col s12 content_urep ocultar">
				<p>	
					<h5>Grupos de Investigación</h5>
					<p>
						Un Grupo de Investigación es un conjunto de personas,que se reúnen para realizar investigación en una temática dada, formulan uno o varios problemas de su interés, trazan un plan estratégico de largo o mediano plazo para trabajar en él y producir unos resultados de conocimiento sobre el tema cuestión.
					</p>
					<div class="row center">
						<img src="<?= URL_MASTER ?>/images/web/investigacion/inves_grupos.jpg" width="100%">
					</div>
					<div class="row">

						<table class="bordered striped responsive-table">
							<tr>
								<th colspan="2"><h5 class="center">Grupo de Análisis Contable, Económico y Financiero GACEF</h5></th>
							</tr>
							<tr>
								<th colspan="2"><i>CONTADURIA PÚBLICA & FINANZAS Y COMERCIO INTERNACIONAL</i></th>
							</tr>
							<tr>
								<td><b>Investigador</b></td>
								<td><b>Linea de Investigación</b></td>
							</tr>
							<tr>
								<td>JOSE OBDULIO CURVELO HASSAN</td>
								<td>Organizaciones, innovación, competitividad y control de gestión<br />
								</td>
							</tr>
							<tr>
								<td>MAURICIO GARCIA GARZON</td>
								<td>Control, aseguramiento y sostenibilidad organizacional</td>
							</tr>
							<tr>
								<td>CLAUDIA VALDERRAMA SERRANO</td>
								<td>Sociedad, ambiente, ética aplicada y desarrollo sostenible</td>
							</tr>
							<tr>
								<td>GUILLERMO FINO SERRANO </td>
								<td>Contabilidad, finanzas, comercio internacional y geopolítica</td>
							</tr>
							<tr>
								<td>FERNANDO  COCA</td>
								<td>Sociedad, ambiente, ética aplicada y desarrollo sostenible</td>
							</tr>
							<tr>
								<td>JORGE RICARDO PUENTES GONZALEZ </td>
								<td>Control, aseguramiento y sostenibilidad organizacional</td>
							</tr>
						</table>
						<br><br>
						<table class="bordered striped responsive-table">
							<tr>
								<th colspan="2"><h5 class="center">Derecho Laboral, Económico & Estado</h5></th>
							</tr>
							<tr>
								<th colspan="2"><i>DERECHO</i></th>
							</tr>
							<tr>
								<td><b>Investigador</b></td>
								<td><b>Linea de Investigación</b></td>
							</tr>

							<tr >
								<td>RONALD RALF BECERRA RODRIGUEZ </td>
								<td>Derecho Comercial, Financiero e Internacionalización Económica </td>
							</tr>
							<tr >
								<td>HENRY BOCANEGRA ACOSTA</td>
								<td>Derecho, Educación y Desarrollo</td>
							</tr>
							<tr >
								<td>DORIS PARRA</td>
								<td>Pensamiento Político y Económico</td>
							</tr>
							<tr>
								<td>MARIA ELENA GRUESO RODRIGUEZ</td>
								<td>Derecho Comercial, Financiero e Internacionalización Económica </td>
							</tr>
							<tr>
								<td>SINDY VIVIANA MEDINA VELANDIA</td>
								<td>Pensamiento Político y Económico</td>
							</tr>
							<tr>
								<td>NESTOR RAUL RAMIREZ MORENO </td>
								<td>Derechos Constitucionales Fundamentales, Colectivos, Civiles y Políticos</td>
							</tr>
							<tr>
								<td>JHON FREDY BUSTOS </td>
								<td>Derecho Comercial, Financiero e Internacionalización Económica </td>
							</tr>
							<tr>
								<td>JUAN CARLOS TRUJILLO CABRERA</td>
								<td>Pensamiento Político y Económico</td>
							</tr>
							<tr>
								<td>LEIDY ANGELA NIÑO CHAVARRO</td>
								<td>Derecho Laboral y Seguridad social</td>
							</tr>
							<tr>
								<td>YAZMIN GOMEZ</td>
								<td>Derecho, Familia y Movimientos sociales</td>
							</tr>
							<tr>
								<td>FRANCISCO RAFAEL  OSTAU DE LAFONT DE LEON </td>
								<td>Derecho Laboral y Seguridad social</td>
							</tr>
						</table>
						<br><br>
						<table class="bordered striped responsive-table">
							<tr>
								<th colspan="2"><h5 class="center">Derecho Público & Sociedad</h5></th>
							</tr>
							<tr>
								<th colspan="2"><i>DERECHO</i></th>
							</tr>
							<tr>
								<td><b>Investigador</b></td>
								<td><b>Linea de Investigación</b></td>
							</tr>
							<tr>
								<td>EDUARDO MATYAS CAMARGO</td>
								<td>Derecho Penal y Política Criminal</td>
							</tr>
							<tr>
								<td>RICARDO MOTTA VARGAS</td>
								<td>Política Territorial y Medio Ambiente</td>
							</tr>
							<tr>
								<td>JOSE DAVID TELEKI AYALA</td>
								<td>Derecho Penal y Política Criminal</td>
							</tr>
							<tr>
								<td>ANTHONY ALFONSO CASTELLANOS CARREÑO</td>
								<td>Derecho Procesal Constitucional y análisis Jurisprudencial</td>
							</tr>
							<tr>
								<td>RODOLFO ALFONSO TORREGROSA JIMENEZ  </td>
								<td>Derecho Penal y Política Criminal</td>
							</tr>
							<tr>
								<td>AGUSTIN COLMENARES</td>
								<td>Análisis del Derecho Notarial y de Registro</td>
							</tr>
							<tr>
								<td>RENE MORENO ALFONSO</td>
								<td>Derecho Procesal Constitucional y análisis Jurisprudencial</td>
							</tr>
							<tr>
								<td>RODRIGO HERNAN TORREJANO VARGAS </td>
								<td>Derecho, Educación y Desarrollo</td>
							</tr>
							<tr>
								<td>FERNANDO  MOTTA CARDENAS</td>
								<td>Derecho, Educación y Desarrollo</td>
							</tr>
						</table>
						<br><br>

						<table class="bordered striped responsive-table">
							<tr>
								<th colspan="2"><h5 class="center">Grupo de Investigación, Desarrollo e Innovación sostenible G.I.D.I.S   </h5></th>
							</tr>
							<tr>
								<th colspan="2"><i>INGENIERIA DE SISTEMAS & MÁTEMÁTICAS</i></th>
							</tr>
							<tr>
								<td><b>Investigador</b></td>
								<td><b>Linea de Investigación</b></td>
							</tr>
							<tr>
								<td>JOSE ALEJANDRO FRANCO CALDERON </td>
								<td>Tecnologías de la Información y la Comunicación</td>
							</tr>
							<tr>
								<td>EVELYN GARNICA ESTRADA</td>
								<td>Robótica Aplicada</td>
							</tr>
							<tr>
								<td>DARIO GARCIA</td>
								<td>Matemáticas y Ciencias de la Información</td>
							</tr>
							<tr>
								<td>MAGDALENA PRADILLA</td>
								<td>Matemáticas y Ciencias de la Información</td>
							</tr>
							<tr>
								<td>SANDRA NARANJO</td>
								<td>Gestión del conocimiento </td>
							</tr>
							<tr>
								<td>RODRIGO LOMBANA</td>
								<td>Gestión del conocimiento </td>
							</tr>
							<tr>
								<td>AARON RAMIREZ</td>
								<td>Tecnologías de la Información y la Comunicación</td>
							</tr>
							<tr>
								<td>JORGE  VERA</td>
								<td>Tecnologías de la Información y la Comunicación</td>
							</tr>
						</table>
						<br><br>

						<table class="bordered striped responsive-table">
							<tr>
								<th colspan="2"><h5 class="center">Grupo Operaciones, Calidad y Administración O.C.A.</h5></th>
							</tr>
							<tr>
								<th colspan="2"><i>INGENIERIA INDUSTRIAL </i></th>
							</tr>
							<tr>
								<td><b>Investigador</b></td>
								<td><b>Linea de Investigación</b></td>
							</tr>
							<tr>
								<td>ALDO EDUARDO PIÑEDA GERALDO</td>
								<td>Factor humano en la Ingeniería Industrial</td>
							</tr>
							<tr>
								<td>RUTH MILENA SUAREZ</td>
								<td>Factor humano en la Ingeniería Industrial</td>
							</tr>
							<tr>
								<td>MAURICIO HERNANDEZ</td>
								<td>Factor humano en la Ingeniería Industrial</td>
							</tr>
							<tr>
								<td>ALEXANDER  LOMBANA</td>
								<td>Factor humano en la Ingeniería Industrial</td>
							</tr>
							<tr>
								<td>RICARDO ANDRES VILLALBA RIVERA</td>
								<td>Diseño y gestión de la cadena de suministro</td>
							</tr>
							<tr>
								<td>RAMÓN CUBAQUE</td>
								<td>Diseño y gestión de la cadena de suministro</td>
							</tr>
							<tr>
								<td>DAVID SOTO</td>
								<td>Diseño y gestión de la cadena de suministro</td>
							</tr>
							<tr>
								<td>HENRY  FAJARDO</td>
								<td>Gestión de las operaciones en manufacturas y servicios</td>
							</tr>
							<tr>
								<td>CESAR PINEDA</td>
								<td>Gestión de las operaciones en manufacturas y servicios</td>
							</tr>
							<tr>
								<td>WILSON CASTRO</td>
								<td>Gestión de las operaciones en manufacturas y servicios</td>
							</tr>
						</table>
						<br><br>

						<table class="bordered striped responsive-table">
							<tr>
								<th colspan="2"><h5 class="center">Gestión Social y Dinámicas Sociales Contemporáneas</h5></th>
							</tr>
							<tr>
								<th colspan="2"><i>TRABAJO SOCIAL</i></th>
							</tr>
							<tr>
								<td><b>Investigador</b></td>
								<td><b>Linea de Investigación</b></td>
							</tr>
							<tr>
								<td>DIANA MARCELA CAHO RODRIGUEZ </td>
								<td>Trabajo Social y Sociedad</td>
							</tr>
							<tr>
								<td>RICARDO  BRICEÑO AYALA</td>
								<td>Gerencia de Proyectos Sociales</td>
							</tr>
							<tr>
								<td>MARTHA SANDOVAL</td>
								<td>Conflictos y Problemas Sociales </td>
							</tr>
							<tr>
								<td>JUAN DIEGO DEMERA</td>
								<td>Conflictos y Problemas Sociales </td>
							</tr>
							<tr>
								<td>DORY LUZ GONZALEZ HERNANDEZ </td>
								<td>Dinámicas Socio – Políticas Culturales </td>
							</tr>
							<tr>
								<td>MANUEL ALONSO PARADA FORERO</td>
								<td>Dinámicas Socio – Políticas Culturales </td>
							</tr>
							<tr>
								<td>DAVID  BRICEÑO ARANGO</td>
								<td>Dinámicas Socio – Políticas Culturales </td>
							</tr>
							<tr>
								<td>ALEJANDRO  DUQUE</td>
								<td>Dinámicas Socio – Políticas Culturales </td>
							</tr>
							<tr>
								<td>JAZMIN ALVARADO </td>
								<td>Trabajo Social y Sociedad</td>
							</tr>
						</table>
						<br><br>

					</div>
				</p>
			</div>

			<!-- Documentos -->
			<div id="inves_docs" class="col s12 content_urep content_inter ocultar">
				<p>
					<h4>Documentos Generales</h4>
					<ul>
						<li class="down_pdf" ><a target="_blank" href="http://urepublicana.edu.co/wp-content/uploads/2012/08/Reglamento-Fondo-Publicaciones-2012.pdf">
							<i class="material-icons">picture_as_pdf</i>  Reglamento </a></li>
						</ul>

						<h4>Marco legal de la Investigación en Colombia</h4>
						<ul>
							<li class="down_pdf" ><a target="_blank" href="http://investigacion.urepublicana.edu.co/wp-content/uploads/2014/02/Acuerdo-029-2010.-Regalías-para-CTI.pdf"> 
								<i class="material-icons">picture_as_pdf</i> Acuerdo 029-2010. Regalías para CTI</a>
							</li>
							<li class="down_pdf" ><a target="_blank" href="http://investigacion.urepublicana.edu.co/wp-content/uploads/2014/02/Colciencias.-Compilacion-Normativa-CTI.pdf"> 
								<i class="material-icons">picture_as_pdf</i> Colciencias. Compilacion Normativa CTI</a>
							</li>
							<li class="down_pdf" ><a target="_blank" href="http://investigacion.urepublicana.edu.co/wp-content/uploads/2014/02/Conpes-3582.-Política-Nacional-de-Ciencia-Tecnología-e-Innovación.pdf"> 
								<i class="material-icons">picture_as_pdf</i> Conpes 3582. Política Nacional de Ciencia, Tecnología e Innovación</a>
							</li>
							<li class="down_pdf" ><a target="_blank" href="http://investigacion.urepublicana.edu.co/wp-content/uploads/2014/02/Decreto-1904de-2009.Estructura-DACTI-Colciencias.pdf"> 
								<i class="material-icons">picture_as_pdf</i> Decreto 1904de 2009.Estructura DACTI Colciencias</a>
							</li>
							<li class="down_pdf" ><a target="_blank" href="http://investigacion.urepublicana.edu.co/wp-content/uploads/2014/02/Estrategia-Nacional-de-Apropiación-Social-de-CTI.pdf"> 
								<i class="material-icons">picture_as_pdf</i> Estrategia Nacional de Apropiación Social de CTI</a>
							</li>
							<li class="down_pdf" ><a target="_blank" href="http://investigacion.urepublicana.edu.co/wp-content/uploads/2014/02/Ley-1286-de-2009.-Ley-de-Ciencia-y-Tecnología.pdf"> 
								<i class="material-icons">picture_as_pdf</i> Ley 1286 de 2009. Ley de Ciencia y Tecnología</a>
							</li>
							<li class="down_pdf" ><a target="_blank" href="http://investigacion.urepublicana.edu.co/wp-content/uploads/2014/02/Política-Nacional-de-Fomento-a-la-Investigación.-Colombia-Construye-y-Siembra-Futuro.pdf"> 
								<i class="material-icons">picture_as_pdf</i> Política Nacional de Fomento a la Investigación. Colombia Construye y Siembra Futuro</a>
							</li>
							<li class="down_pdf" ><a target="_blank" href="http://investigacion.urepublicana.edu.co/wp-content/uploads/2014/02/Vision-2019-CTI.pdf"> 
								<i class="material-icons">picture_as_pdf</i> Vision 2019 CTI</a>
							</li>
						</ul>


					</p>
				</div>


			</div>
		</div>
	</div>

	<?php require_once('../plantilla/footer.php'); ?>
</body>
</html>


