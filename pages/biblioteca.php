<!doctype html>
<html manifest="urepublicana.appcache">
<head>
	<?php require_once('../plantilla/head.php'); ?>
</head>
<body id="body_urep">
	<?php require_once('../plantilla/menu.php'); ?>
	<div class="breadcrumb"><a href="<?= URL_MASTER ?>/pages/index.php"> Inicio </a> > <a href="<?= URL_MASTER ?>/pages/biblioteca.php"> Biblioteca </a></div>
	<div class="container">
		<div class="row center">
			<div class="col s12">
				<h2>Biblioteca</h2>
				<img src="<?= URL_MASTER ?>/images/web/biblioteca/banner_biblioteca.jpg" width="100%">
			</div>
		</div>
		<div class="row lnk_first">
			<div class="col s2 m1"><br></div>
			<div class="col s4 m2">
				<span class="enlace_urep" name="#biblio_general">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/biblioteca/bibilo_general_1.png" src="<?= URL_MASTER ?>/images/web/biblioteca/bibilo_general.png">
					<p>Información General</p>
				</span>
			</div>
			<div class="col s4 m2">
				<a target="_blank" href="http://republicana.redbiblio.net/">
					<span>
						<img class="atajo" name="<?= URL_MASTER ?>/images/web/biblioteca/biblio_catalogo_1.png" src="<?= URL_MASTER ?>/images/web/biblioteca/biblio_catalogo.png">
						<p>Catálogo en Línea</p>
					</span>
				</a>
			</div>
			<div class="col s4 m2">
				<span class="enlace_urep" name="#biblio_servicios">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/biblioteca/biblio_servicios_1.png" src="<?= URL_MASTER ?>/images/web/biblioteca/biblio_servicios.png">
					<p>Servicios</p>
				</span>
			</div>
			<div class="col s4 m2">
				<span class="enlace_urep" name="#biblio_recursos">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/biblioteca/biblio_recursos_1.png" src="<?= URL_MASTER ?>/images/web/biblioteca/biblio_recursos.png">
					<p>Recursos Electronicos</p>
				</span>
			</div>
			<div class="col s4 m2">
				<span class="enlace_urep" name="#biblio_nuevas">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/biblioteca/biblio_adquiciciones_1.png" src="<?= URL_MASTER ?>/images/web/biblioteca/biblio_adquiciciones.png">
					<p>Nuevas Adquisiciones</p>
				</span>
			</div>
		</div>
		<div class="row">
			<!-- GENERAL -->
			<div id="biblio_general" class="col s12 content_urep ocultar">
				<p>	
					<h5>Misión</h5>
					La Biblioteca de la Corporación Universitaria Republicana tiene como misión ofrecer a la comunidad Republicana recursos bibliográficos pertinentes  y servicios de alta calidad para apoyar  los programas de docencia, investigación y extensión que desarrolla la Institución.
					<h5>Vision</h5>
					Constituirnos en un referente en el entorno como biblioteca universitaria, en cuanto a sus buenas prácticas y gestión de la calidad de los servicios y productos ofrecidos.
					<h5>Objetivos</h5>
					<ul>
						<li><b> * </b> Brindar a los miembros de la comunidad universitaria el acceso y difusión de la información apropiada y actualizada acorde a los programas académicos de la Corporación.</li>
						<li><b> * </b> Suministrar servicios de información que respondan a las necesidades de la comunidad universitaria.</li>
						<li><b> * </b> Cooperar en el desarrollo de planes de extensión universitaria. Establecer los nexos correspondientes para la vinculación a redes bibliotecarias locales, nacionales e internacionales.</li>
					</ul>
					<h5>Ubicación</h5>
					Calle 20 No. 5 – 67 Primer piso.
					<h5>Horario</h5>
					<ul>
						<li>Lunes a viernes de 7:00 a.m.  a  10:00 p.m.</li>
						<li>Sábados de 7:00 a.m.  a  1:00 p.m.</li>
					</ul>
				</p>
			</div>
			<!-- SERVICIOS -->
			<div id="biblio_servicios" class="col s12 content_urep ocultar">
				<p>
					Para acceder a cualquiera de los servicios de la Biblioteca, todos los usuarios deben presentar el carné actualizado, el cual es personal e intransferible.
					<br>Toda la comunidad republicana tiene acceso a los siguientes servicios:
				</p>
				<div class="row">
					<div class="col s12 m3">
						<ul>
							<li name="#serv_prestamo" class="enlace_inter"> Prestamo de Material</li>
							<li name="#serv_renovacion" class="enlace_inter"> Renovación y reserva de material</li>
							<li name="#serv_otros" class="enlace_inter"> Otros Servicios </li>
						</ul>
					</div>
					<div class="col s12 m9">
						<!-- PRESTAMOS -->
						<div id="serv_prestamo" class="content_inter ocultar">
							<p>
								<h4>Prestamo de Material</h4>
								<h5>Tutorial - Busqueda de material en el Catalogo</h5>
								<iframe width="100%" height="315" src="https://www.youtube.com/embed/cQrlLWd0nHM?rel=0" frameborder="0" allowfullscreen></iframe>
								<h5>Préstamo externo o a domicilio</h5>
								Es el servicio mediante el cual los usuarios de Comunidad Republicana pueden llevar dos materiales (libros, revistas, videos, etc.) de la colección general, por dos días hábiles; este préstamo puede ser renovado por el mismo tiempo, siempre y cuando el material no haya sido reservado por otro usuario.
								<br>El material de la colección de reserva y de referencia, se presta para domicilio después de las 9:30 p.m., para su devolución al día siguiente antes de las 9:00 a.m.; si el préstamo se solicita el día sábado, éste se debe realizar después de las 12:30 p.m. y tendrá que ser devuelto el siguiente día hábil, antes de las 9:00 a.m. El préstamo de este material no puede ser renovado.
								<h5> Préstamo interno </h5> 
								Mediante este servicio los usuarios pueden consultar todas las colecciones de la Biblioteca durante el horario de servicio de la misma, dentro o fuera de las salas de lectura; se exceptúan las tesis de grado, las cuales solamente se pueden consultar dentro de las instalaciones de la Biblioteca.
								<h5> Préstamo interbibliotecario </h5> 
								A través de este servicio, los miembros de la comunidad republicana pueden tener acceso al préstamo externo del material bibliográfico de otras bibliotecas universitarias y de entidades públicas y privadas, con las cuales la Biblioteca de la Corporación ha establecido convenio. Ingrese aquí para conocer la lista y los catálogos en línea  de las instituciones con las cuales se tiene convenio de préstamo interbibliotecario.
								<br>El servicio puede solicitarse en la biblioteca o diligenciando el formato que encontrará en el sistema académico en la sección de Biblioteca, <a target="_blank" href="https://academiaurepublicana.org/ArKa/test/new_login.php"> aquí.</a>
							</p>
						</div>
						<!-- RENOVACION -->
						<div id="serv_renovacion" class="content_inter ocultar">
							<p>
								<h4>Renovación y reserva de material</h4>
								Los usuarios pueden ampliar la fecha de devolución del material bibliográfico e igualmente pueden reservar el material que se encuentra prestado. La renovación del préstamo solamente se puede hacer el día de vencimiento del mismo.
								<br>La renovación y la reserva se pueden realizar presencialmente en la Biblioteca o el línea ingresando al catálogo con su usuario y contraseña.
								<h5>Tutorial - Renovación de Material</h5>
								<iframe width="100%" height="315" src="https://www.youtube.com/embed/Hv2wC1XmW6k?rel=0" frameborder="0" allowfullscreen></iframe>
								<h5>Tutorial - Reserva de Material</h5>
								<iframe width="100%" height="315" src="https://www.youtube.com/embed/VqFN04oZtqo?rel=0" frameborder="0" allowfullscreen></iframe>
							</p>
						</div>
						<!-- OTROS -->
						<div id="serv_otros" class="content_inter ocultar">
							<p>	
								<h4>Otros Servicios</h4>
								<h5> Cartas de Presentación</h5>
								Las cartas de presentación permiten a la comunidad republicana el acceso a otras bibliotecas de la ciudad.
								<br>El servicio puede solicitarse en la biblioteca o diligenciando el formato que encontrará en el sistema académico en la sección de Biblioteca, <a target="_blank" href="https://academiaurepublicana.org/ArKa/test/new_login.php">aquí</a>
								<h5> Elaboración de Bibliografías</h5>
								Recopilación de las reseñas bibliográficas sobre un tema específico, a solicitud del usuario, a partir de las colecciones de la Biblioteca de la Corporación.
								<br>El servicio puede solicitarse en la biblioteca o diligenciando el formato que encontrará en el sistema académico en la sección de Biblioteca, <a target="_blank" href="https://academiaurepublicana.org/ArKa/test/new_login.php">aquí</a>
								<h5> Formación de Usuarios</h5>
								Inducciones y capacitaciones sobre el uso y el manejo de los servicios y recursos de la Biblioteca.
								<br>Las inducciones están dirigidas a los docentes y los estudiantes nuevos y consiste en una revisión general de los servicios presenciales y en línea que ofrece la Biblioteca.
								<br>Mediante las capacitaciones se ofrece a estudiantes y docentes la posibilidad de aprender a utilizar el Catálogo en línea y las bases de datos. Las capacitaciones se pueden solicitar personalmente en la Biblioteca.
								<h5> Servicio de Referencia</h5>
								Es el servicio de asesoría que el personal de la Biblioteca presta de forma individualizada a un usuario, para la búsqueda y recuperación de información.
								<h5> Préstamo de equipos audiovisuales</h5>
								La Biblioteca cuenta con herramientas como video beam y computadores portátiles, disponibles para apoyar las actividades académicas de la comunidad republicana. La reserva de estos equipos debe hacerse directamente en la Biblioteca, con mínimo 3 días de anticipación a la actividad.
								<h5> Red Inalámbrica</h5>
								Contamos con red inalámbrica en todos los espacios de la Biblioteca para la conexión de equipos móviles.
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- RECURSOS -->
			<div id="biblio_recursos" class="col s12 content_urep ocultar">
				<div class="row">
					<h5>Bases de datos por suscripción</h5>
					<table class="striped">
						<thead>
							<tr>
								<th width="150">Base de datos</th>
								<th>Descripción </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<a href="https://academiaurepublicana.org/ArKa/test/new_login.php" target="_blank">
										<img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/notinet.jpg" width="100%">
									</a>
								</td>
								<td>
									<h6>NOTINET</h6>
									Ofrece información clasificada en diferentes áreas a saber: Administración pública, Comercio exterior, Servicios Públicos, Derecho penal, Laboral, Financiero y Tributario. Incluye los siguientes servicios: ediciones diarias, ediciones históricas, colecciones de legislación, normatividad y jurisprudencia, códigos, estatutos, regímenes actualizados y concordados, minutas o formas legales, impuestos municipales, diccionarios jurídicos y financieros, además de noticias diarias.
								</td>
							</tr>
							<tr>
								<td>
									<a href="https://academiaurepublicana.org/ArKa/test/new_login.php" target="_blank">
										<img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/virtual.jpg" width="100%">
									</a>
								</td>
								<td>
									<h6>VIRTUAL PRO</h6>
									Se publican trabajos de investigación, artículos, manuales, libros (todo full text), software, tutoriales, herramientas complementarias, noticias, eventos, becas, documentos de gerencia y empresa, y además ejemplos de vida y documentos de liderazgo y crecimiento personal
								</td>
							</tr>
							<tr>
								<td>
									<a href="https://academiaurepublicana.org/ArKa/test/new_login.php" target="_blank">
										<img src="http://urepublicana.edu.co/wp-content/uploads/2016/02/prisma.jpg" width="100%">
									</a>
								</td>
								<td>
									<h6>PRISMA</h6>
									Publicaciones y Revistas Sociales y Humanísticas. es un servicio integral de referencia que pone a disposición de los usuarios revistas científicas de texto completo sobre ciencias sociales y humanidades destinadas al estudio académico e interdisciplinario de América Latina e Hispanoamérica, y la Cuenca del Caribe.
								</td>
							</tr>
							<tr>
								<td>
									<a href="https://academiaurepublicana.org/ArKa/test/new_login.php" target="_blank">
										<img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/rsz_mcgrew.png" width="100%">
									</a>
								</td>
								<td>
									<h6>McGrawnGil Digital</h6>
									Plataforma que permite fácil acceso en línea a una colección de más de 200 títulos de libros electrónicos en las áreas de ciencias básicas, ingeniería aplicada, negocios y ciencias sociales
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="row">
					<h5>Bases de datos Libres</h5>
					<table class="striped">
						<thead>
							<tr>
								<th width="150">Base de datos</th>
								<th>Descripción </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<a target="_blank" href="http://www.scielo.cl/"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/sci.png"></a>
								</td>
								<td><h6>SCIENTIFIC ELECTRONIC LIBRARY ONLINE</h6> Bases de Datos de acceso a texto Completo de Revistas Científicas especializada en Ciencias de la Salud, organizadas por materias.</td>
							</tr>
							<tr>
								<td><a target="_blank" href="http://www.doaj.org/"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/im3.jpg"></a></td>
								<td><h6>DIRECTORY OF OPEN ACCESS JOURNAL</h6> Directorio de Revistas Científicas de Acceso Abierto, gratuito y de texto completo, cubre Revistas cientificas y de Calidad de todos los temas e idiomas.</td>
							</tr>
							<tr>
								<td><a target="_blank" href="http://arxiv.org/"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/arx.png"></a></td>
								<td><h6>ARXIV </h6> Es una plataforma que incluye artículos de las disciplinas de la Física, Matemáticas, Computación y Biología cuantitativa.</td>
							</tr>
							<tr>
								<td><a target="_blank" href="http://www.physmathcentral.com/"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/phys.png"></a></td>
								<td><h6>PHYSMATHCENTRAL </h6> Plataforma de publicaciones independientes, manejada por el comité de Biomed Central para proveer el acceso abierto a investigaciones en los campos de la Física y las Matemáticas.</td>
							</tr>
							<tr>
								<td><a target="_blank" href="http://www.bdcol.org/"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/im81.png"></a></td>
								<td><h6>BIBLIOTECA DIGITAL COLOMBIANA</h6> Repositorios Universitarios de Colombia</td>
							</tr>
							<tr>
								<td><a target="_blank" href="http://www.comunidadandina.org/bda/"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/im9.jpg"></a></td>
								<td><h6>BIBLIOTECA DIGITAL ANDINA</h6> Informacion en todas las áreas del conocimiento</td>
							</tr>
							<tr>
								<td><a target="_blank" href="http://www.uic.es/es/catalogo-tesis"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/im10.png"></a></td>
								<td><h6>TRABAJOS DOCTORALES EN LA RED</h6> Acceso a texto completo de tesis doctorales de universidades españolas, en todas las áreas del conocimiento.</td>
							</tr>
							<tr>
								<td width="38%">
									<p align="center"><h6><a target="_blank" href="http://eumed.net"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/im11.jpg"></a></h6> </p>
								</td>
								<td><h6>EUMED.NET</h6> Libros digitales en texto completo en temas de ciencias sociales</td>
							</tr>
							<tr>
								<td><a target="_blank" href="http://www.wdl.org/es/"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/im12.jpg"></a></td>
								<td><h6>BIBLIOTECA DIGITAL MUNDIAL</h6> Información en todas las áreas del conocimiento</td>
							</tr>
							<tr>
								<td><a target="_blank" href="http://www.humanindex.unam.mx/humanindex/consultas/parametros.html"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/im13.jpg"></a></td>
								<td><h6>HUMANINDEX </h6> Proporciona información sobre los productos científicos generados por los investigadores de los 10 institutos, 7 centros y 3 programas del Subsistema de Humanidades de la Universidad Nacional Autónoma de México</td>
							</tr>
							<tr>
								<td><a target="_blank" href="http://scholar.google.es/"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/im14.jpg"></a></td>
								<td><h6>GOOGLE ACADÉMICO </h6> Buscador de producción científica en diferentes formatos como artículos, libros, trabajos de grado, tesis, entre otros</td>
							</tr>
							<tr>
								<td><a target="_blank" href="https://openknowledge.worldbank.org/"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/im15.png"></a></td>
								<td><h6>OPEN KNOWLEDGE REPOSITORY</h6> Repositorio de acceso libre del Banco Mundial que contiene sus informes de investigación y demás productos de conocimiento.</td>
							</tr>
							<tr>
								<td><a target="_blank" href="http://www.cervantesvirtual.com/"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/im161.png"></a></td>
								<td><h6>BIBLIOTECA VITUAL MIGUEL DE CERVANTES</h6> Información en todas las áreas del conocimiento.</td>
							</tr>
							<tr>
								<td><a target="_blank" href="http://biblioteca.clacso.edu.ar/"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/im17.jpg"></a></td>
								<td><h6>CLACSO</h6> Red de Bibliotecas Virtuales de Ciencias Sociales de América Latina y el Caribe con información en todas las áreas del conocimiento</td>
							</tr>
							<tr>
								<td><a target="_blank" href="http://www.cybertesis.info/"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/cyb.png"></a></td>
								<td><h6>CYBERTESIS.NET</h6>  Base de datos de tesis de diferentes universidades con acceso abierto en texto completo</td>
							</tr>
							<tr>
								<td><a target="_blank" href="http://dialnet.unirioja.es/"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/dial.png" "></a></td>
								<td><h6>DIALNET </h6> Es una base de datos de artículos de revistas españolas e hispanoamericanas que ofrece el acceso a más 730.000 artículos de unas 2.850 revistas de todas las disciplinas científicas. No todos los accesos a los artículos de texto completo son<em> gratuitos</em>.</td>
							</tr>
							<tr>
								<td><a target="_blank" href="http://www.metabase.net/"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/meta.png"></a></td>
								<td><h6>METABASE</h6>  Repositorios Universitarios de Centroamerica</td>
							</tr>
							<tr>
								<td><a target="_blank" href="http://www.eumed.net/"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/eu.png"></a></td>
								<td><h6>EUMED</h6>  Diccionarios, libros, revistas, tesis doctorales, cursos gratis, vídeos y presentaciones multimedia sobre <a target="_blank" href="http://es.wikipedia.org/wiki/Ciencias_Econ%C3%B3micas">Economía</a>, <a target="_blank" href="http://es.wikipedia.org/wiki/Derecho">Derecho</a> y otras <a target="_blank" href="http://es.wikipedia.org/wiki/Ciencias_sociales">Ciencias Sociales</a>.</td>
							</tr>
							<tr>
								<td><a target="_blank" href="http://books.google.com/?hl=es"><img src="http://urepublicana.edu.co/wp-content/uploads/2013/10/gb.png"></a></td>
								<td><h6>GOOGLE BOOKS</h6>  Google Books ofrece <a target="_blank" href="http://es.wikipedia.org/wiki/Libro_electr%C3%B3nico">libros digitales</a> completos de <a target="_blank" href="http://es.wikipedia.org/wiki/Dominio_p%C3%BAblico">dominio público</a> de diversa temática y libros que no poseen una visión total de su contenido, por encontrarse aún en venta</td>
							</tr>
							<!-- NUEVAS -->
							<tr>
								<td>
									<a target="_blank" href="#!">
										<img src="<?= URL_MASTER ?>/images/web/biblioteca/bd_libres/repeg.jpg">
									</a>
								</td>
								<td><h6>RePEc. -Research Papers in Economics</h6>  
									es un esfuerzo de colaboración de cientos de voluntarios en 93 países para mejorar la difusión de la investigación en Economía y ciencias relacionadas
								</td>
							</tr>
							<tr>
								<td>
									<a target="_blank" href="#!">
										<img src="<?= URL_MASTER ?>/images/web/biblioteca/bd_libres/erevistas.jpg">
									</a>
								</td>
								<td><h6>E- REVISTAS</h6> 
									La Plataforma Open Access de Revistas Científicas Electrónicas Españolas y Latinoamericanas e-Revistas es un proyecto impulsado por el Consejo Superior de Investigaciones Científicas (CSIC) con el fin de contribuir a la difusión y visibilidad de las revistas científicas publicadas en América Latina, Caribe, España y Portugal.
								</td>
							</tr>
							<tr>
								<td>
									<a target="_blank" href="http://portal.pepsic.bvsalud.org/php/index.php">
										<img src="<?= URL_MASTER ?>/images/web/biblioteca/bd_libres/pepsic.jpg">
									</a>
								</td>
								<td><h6>PEPSIC</h6> 
									Este portal tiene como objetivo principal contribuir a la visibilidad del conocimiento psicológico y científico generado en los países de América Latina, a partir de la publicación de revistas científicas en acceso abierto.
								</td>
							</tr>
							<tr>
								<td>
									<a target="_blank" href="http://www.oapen.org/home">
										<img src="<?= URL_MASTER ?>/images/web/biblioteca/bd_libres/oapen.jpg">
									</a>
								</td>
								<td><h6>OAPEN</h6> 
									Contiene libros académicos de acceso libre, principalmente en el área de Humanidades y Ciencias Sociales.
								</td>
							</tr>
							<tr>
								<td>
									<a target="_blank" href="#!">
										<img src="<?= URL_MASTER ?>/images/web/biblioteca/bd_libres/world_wide_science.jpg">
									</a>
								</td>
								<td><h6>Wiley Open Access</h6> 
									Es un programa de revistas de acceso abierto. Todos los artículos de investigación publicados disponibles de forma gratuita para leer, descargar y compartir
								</td>
							</tr>
							<tr>
								<td>
									<a target="_blank" href="https://www.chemweb.com/">
										<img src="<?= URL_MASTER ?>/images/web/biblioteca/bd_libres/chemweb.jpg">
									</a>
								</td>
								<td><h6>CHEMWEB</h6> 
									acceso a artículos seleccionados de texto completo de editores de Química como Wiley, Elsevier y Springer. Los miembros pueden descargar una selección de artículos que abarcan una amplia gama de temas directamente desde las páginas de algunas de las revistas más respetadas en química.
								</td>
							</tr>
							<tr>
								<td>
									<a target="_blank" href="http://www.suin-juriscol.gov.co/">
										<img src="<?= URL_MASTER ?>/images/web/biblioteca/bd_libres/suin_juriscol.jpg">
									</a>
								</td>
								<td><h6>SUIN-JURISCOL</h6> 
									Permite ubicar de forma rápida y gratuita, normas de carácter general y abstracto como las constituciones de 1886 y de 1991, actos legislativos, leyes, decretos, directivas presidenciales, resoluciones, circulares, entre otros, a partir de 1886, con sus respectivas concordancias y afectaciones normativas y jurisprudenciales.
								</td>
							</tr>
							<tr>
								<td>
									<a target="_blank" href="https://www.osti.gov/scitech/">
										<img src="<?= URL_MASTER ?>/images/web/biblioteca/bd_libres/scitech_connect.jpg">
									</a>
								</td>
								<td><h6>SCITECH CONNECT</h6> 
									conexión a la información de investigación científica, tecnológica y de ingeniería del Departamento de Energía de EE. UU. 
								</td>
							</tr>
							<tr>
								<td>
									<a target="_blank" href="http://eur-lex.europa.eu/homepage.html">
										<img src="<?= URL_MASTER ?>/images/web/biblioteca/bd_libres/eur_lex.jpg">
									</a>
								</td>
								<td><h6>EUR-LEX</h6> 
									El acceso al Derecho de la Unión Europea 
								</td>
							</tr>
							<tr>
								<td>
									<a target="_blank" href="https://worldwidescience.org/">
										<img src="<?= URL_MASTER ?>/images/web/biblioteca/bd_libres/world_wide_science.jpg">
									</a>
								</td>
								<td><h6>WORLD WIDE SCIENCE ALLIANCE</h6> 
									Es una puerta de acceso científica mundial compuesta por bases de datos y portales científicos nacionales e internacionales
								</td>
							</tr>
							<tr>
								<td>
									<a target="_blank" href="http://www.artehistoria.com/">
										<img src="<?= URL_MASTER ?>/images/web/biblioteca/bd_libres/arte_historia.jpg">
									</a>
								</td>
								<td><h6>ARTE HISTORIA</h6> 
									Contiene información de consulta libre sobre acontecimientos mundiales historia del arte, historia universal e historia de España
								</td>
							</tr>
							<tr>
								<td>
									<a target="_blank" href="http://www.wipo.int/reference/es/">
										<img src="<?= URL_MASTER ?>/images/web/biblioteca/bd_libres/ompi.jpg">
									</a>
								</td>
								<td><h6>OMPI</h6> 
									Es la principal fuente de datos en el mundo sobre el sistema de propiedad intelectual (P.I.), así como sobre estudios empíricos, informes y datos sobre P.I. Todas las publicaciones y las colecciones de datos de la OMPI están disponibles en Internet sin cargo
								</td>
							</tr>
							<tr>
								<td>
									<a target="_blank" href="http://www.sic.gov.co/node/11443">
										<img src="<?= URL_MASTER ?>/images/web/biblioteca/bd_libres/cigepi.jpg">
									</a>
								</td>
								<td><h6>CIGEPI</h6> 
									El Centro de Información Tecnológica y Apoyo a la Gestión de la Propiedad Industrial (CIGEPI) es el encargado de proporcionar servicios de información tecnológica y orientación especializada en temas de Propiedad Industrial en Colombia
								</td>
							</tr>
							<tr>
								<td>
									<a target="_blank" href="https://www.redib.org/">
										<img src="<?= URL_MASTER ?>/images/web/biblioteca/bd_libres/redib.jpg">
									</a>
								</td>
								<td><h6>REDIB </h6> 
									es una plataforma de agregación de contenidos científicos y académicos en formato electrónico producidos en el ámbito iberoamericano
								</td>
							</tr>
							<tr>
								<td>
									<a target="_blank" href="http://oaji.net/">
										<img src="<?= URL_MASTER ?>/images/web/biblioteca/bd_libres/oaji.jpg">
									</a>
								</td>
								<td><h6>OPEN ACADEMIC JOURNALS INDEX (OAJI)</h6> 
									es una base de datos de texto completo de revistas científicas de acceso abierto. Fundador - Centro de redes internacionales para investigación fundamental y aplicada, Federación de Rusia.  Nuestra misión es desarrollar una plataforma internacional para indexar las revistas científicas de acceso abierto.
								</td>
							</tr>
							<tr>
								<td>
									<a target="_blank" href="https://scholar.google.es/">
										<img src="<?= URL_MASTER ?>/images/web/biblioteca/bd_libres/google_academic.jpg">
									</a>
								</td>
								<td><h6>GOOGLE ACADÉMICO </h6> 
									es un buscador que te permite localizar documentos académicos como artículos, tesis, libros y resúmenes de fuentes diversas como editoriales universitarias, asociaciones profesionales, repositorios de preprints, universidades y otras organizaciones académicas
								</td>
							</tr>
							<tr>
								<td>
									<a target="_blank" href="http://www.dotec-colombia.org/">
										<img src="<?= URL_MASTER ?>/images/web/biblioteca/bd_libres/dotec.jpg">
									</a>
								</td>
								<td><h6>DOTEC-COLOMBIA </h6> 
									es un proyecto virtual que busca centralizar y divulgar la investigación económica en Colombia
								</td>
							</tr>
							<tr>
								<td>
									<a target="_blank" href="http://www.citrevistas.cl/b2.htm">
										<img src="<?= URL_MASTER ?>/images/web/biblioteca/bd_libres/actualidad_iberoamericana.jpg">
									</a>
								</td>
								<td><h6>ACTUALIDAD IBEROAMERICANA </h6> 
									es un Índice Internacional de revistas publicadas en idioma Castellano, en diversos países iberoamericanos.  Actualidad Iberoamericana provee información básica sobre revistas en idioma castellano en diversas áreas de las ciencias, las ingenierías y las humanidades, y las cataloga por áreas del conocimiento.
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<h5>Revistas Electrónicas de Acceso Libre </h5>
				<div class="row center">
					<a target="_blank" href="<?= URL_MASTER ?>/images/web/biblioteca/revistasDerecho.pdf" class="waves-effect waves-light btn-large red darken-4" >Derecho</a>
					<a target="_blank" href="<?= URL_MASTER ?>/images/web/biblioteca/revistasTrabajoSocial.pdf" class="waves-effect waves-light btn-large red darken-4" >Trabajo Social</a>
					<a target="_blank" href="<?= URL_MASTER ?>/images/web/biblioteca/revistasFinanzasyContadura.pdf" class="waves-effect waves-light btn-large red darken-4" >Contaduria y finanzas</a>
					<a target="_blank" href="<?= URL_MASTER ?>/images/web/biblioteca/revistasIngenieriaMatematica.pdf" class="waves-effect waves-light btn-large red darken-4" >Ingenieria y Matematicas</a>
				</div>
			</div>
			<!-- NUEVAS ADQUISICIONES -->
			<div id="biblio_nuevas" class="col s12 content_urep ocultar">
				<h5>Nuevas Adquisiciones</h5>
				<div class="row center">
					<a href="<?= URL_MASTER ?>/images/web/biblioteca/Nuevas-Adquisiciones-Libros.pdf" class="waves-effect waves-light btn-large red darken-4" target="_blank" >Libros</a>
					<a href="<?= URL_MASTER ?>/images/web/biblioteca/Nuevas-Adquisiciones-Revistas.pdf" class="waves-effect waves-light btn-large red darken-4" target="_blank" >Revistas</a>
					<a href="<?= URL_MASTER ?>/images/web/biblioteca/Nuevas-Adquisiciones-Tesis.pdf" class="waves-effect waves-light btn-large red darken-4" target="_blank" >Trabajos de Grado</a>
				</div>	
			</div>
		</div>
	</div>
	<?php require_once('../plantilla/footer.php'); ?>
</body>
</html>