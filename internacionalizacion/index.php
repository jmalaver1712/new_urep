<!doctype html>
<html manifest="urepublicana.appcache">
<head>
	<?php require_once('../plantilla/head.php'); 
	$todos_programas = $get_xml->registros_all_xml('programas.xml');
	?>
</head>
<body id="body_urep">
	<?php require_once('../plantilla/menu.php'); ?>
	<div class="breadcrumb"> <a href="../pages/"> Inicio </a> > <a href="internacionalizacion.php"> Internacionalización </a></div>


	<!-- ENLACES RAPIDOS - ATAJOS -->
	<div class="container">
		<div class="row center">
			<h4>OFICINA DE RELACIONES INTERNACIONALES</h4>
			<img src="../images/web/ori/banner_ori.jpg" width="100%">
		</div>

		<div class="row lnk_first">
			<div class="col s12 m2"><br></div>

			<div class="col s3 m2">
				<span class="enlace_urep" name="#quienes_somos">
					<img class="atajo" name="../images/web/ori/inter_somos_1.png" src="../images/web/ori/inter_somos.png">
					<p>Quiénes Somos</p>
				</span>
			</div>

			<div class="col s3 m2">
				<span class="enlace_urep" name="#estudiantes_urep">
					<img class="atajo" name="../images/web/ori/inter_student_1.png" src="../images/web/ori/inter_student.png">
					<p>Estudiantes Republicanos</p>
				</span>
			</div>

			<div class="col s3 m2">
				<span class="enlace_urep" name="#estudiantes_ext">
					<img class="atajo" name="../images/web/ori/inter_student_ext_1.png" src="../images/web/ori/inter_student_ext.png">
					<p>Estudiantes Externos</p>
				</span>
			</div>

			<div class="col s3 m2">
				<span class="enlace_urep" name="#becas">
					<img class="atajo" name="../images/web/ori/inter_becas_1.png" src="../images/web/ori/inter_becas.png">
					<p>Becas</p>
				</span>
			</div>

		</div>

		<div class="row">

			<!-- QUIENES SOMOS -->
			<div id="quienes_somos" class="col s12 content_urep ocultar">
				<p>	
					<h5>QUE ES LA OFICINA DE RELACIONES INTERNACIONALES – ORI</h5>
					<p>
						La ORI tiene como objetivo principal liderar, impulsar e implementar las estrategias que permitan incorporar de manera transversal la dimensión internacional, intercultural e interdisciplinaria en las funciones misionales de la Corporación, consolidando el proceso de internacionalización de la institución de manera coordinada con las diferentes instancias internas.
					</p>
					<br>
					<b>EQUIPO ORI</b><br>
					TATIANA TÉLLEZ DURÁN
					<br>
					Directora de la Oficina de Relaciones Internacionales
					<br>
					+ 57 286 23 84 Ext. 116
					<br>
					relacionesinternacionales@urepublicana.edu.co
				</p>
			</div>
			
			<!-- ESTUDIANTES UREPUBLICANOS -->
			<div id="estudiantes_urep" class="col s12 content_urep ocultar">
				<div class="row">
					<h4 class="center"> Estudiantes Republicanos </h4>
					<ul class="tabs tabs-fixed-width">
						<li class="tab"><a class="active" href="#intercambio">Intercambio</a></li>
						<li class="tab"><a href="#idioma_ext">Idiomas</a></li>
					</ul>
					
					<!-- INTERCAMBIO -->
					<div id="intercambio" class="col s12">

						<div class="row">
							<div class="col s12 m3">
								<h5 class="center">INTERCAMBIO</h5>
								<ul>
									<li name="#general_urep" class="enlace_inter"> Descripción</li></a>
									<li name="#convenios_urep" class="enlace_inter"> Convenios</li></a>
									<li name="#requisitos_urep" class="enlace_inter"> Requisitos para participar</li></a>
									<li name="#como_aplicar_urep" class="enlace_inter"> Cómo debes aplicar</li></a>
									<li name="#homologacion_urep" class="enlace_inter"> Proceso de homologación asignaturas</li></a>
									<li name="#visas_urep" class="enlace_inter"> Visas </li></a>
									<li name="#regreso_urep" class="enlace_inter"> Cuando regresas a la CORPORACIÓN  </li></a>
								</ul>
							</div>
							<div class="col s12 m9">


								<!-- INFORMACION GENERAL -->
								<div id="general_urep" class="content_inter">
									<p>
										Uno de los aspectos más importantes para realizar una movilidad preparada y con una economía mejor planeada, es conocer y evaluar el costo de vida del país al que decidas viajar. Esta planeación te permitirá conocer y ampliar el panorama con respecto a los recursos suficientes (manutención, alojamiento, gastos personales etc.) que requieres para permanecer en tu movilidad.<br>
										Para ello, puedes consultar los siguientes enlaces en los cuales podrás calcular el costo de vida del país y/o región donde realizarás tu estancia académica:
										<br>

										<ul>
											<li><b>1. </b><a target="_blank" href="https://www.numbeo.com/cost-of-living/"> Numbeo </a> </li>
											<li><b>2. </b><a target="_blank" href="http://www.eardex.com/"> Eardex </a> </li>
											<li><b>3. </b><a target="_blank" href="http://www.costedelavida.com/"> Coste de la Vida </a> </li>
										</ul>
										Si luego de este ejercicio consideras que puedes participar en un programa de movilidad de la Corporación Universitaria Republicana, te invitamos a seguir los siguientes pasos:
										<ul>
											<li><b>1. </b>Elige el país al que quieres irte </li>
											<li><b>2. </b>Escoge la Universidad</li>
											<li><b>3. </b>Define el plan de estudios junto con tu Coordinador de programa </li>
										</ul>
										Y listo, que tengas buen viaje!
									</p>
								</div>
								<!-- CONVENIOS UREP -->
								<div id="convenios_urep" class="content_inter ocultar">

									<iframe src="https://www.google.com/maps/d/embed?mid=19bYJ793T71IXAcjxWa4SdB_ahbM&ll=70.428037905912461%2C-99.88245810289459&z=2" width="640" height="480"></iframe>
								</div>

								<!-- REQUISITOS UREP -->
								<div id="requisitos_urep" class="content_inter ocultar">
									<p>
										<ul>
											<li><b>1. </b>Promedio mínimo acumulado de 3.5 o el que solicite la Universidad de destino.</li>
											<li><b>2. </b>Haber cursado y aprobado entre el Segundo y Septimo semestre.</li>
											<li><b>3. </b>Conocimiento del idioma de la Universidad de destino, se debe demostrar mediante un examen internacional</li>
											<li><b>4. </b>No tener ni haber tenido sanciones disciplinarias durante toda la carrera.</li>
											<li><b>5. </b>Estar matriculado en el programa académico respectivo en la Corporación</li>
											<li><b>6. </b>Ser mayor de edad</li>
										</ul>
										<center>
											<a class="waves-effect waves-light btn red darken-3" href="../images/web/ori/MANUAL_MOVILIDAD_ESTUDIANTES_UREP.pdf" target="_blank">
												<i class="material-icons left">cloud_download</i>DESCARGA EL MANUAL DE ESTUDIANTES
											</a>
										</center>
									</p>
								</div>

								<!-- COMO DEBES APLICAR -->
								<div id="como_aplicar_urep" class="content_inter ocultar">
									<p>
										<ul>
											<li> <b>1 </b> Diligenciar el <a href="../images/web/ori/formatos/Formato Estudiantes Republicana.xlsx"> Formato para solicitar movilidad académica de estudiantes de la Corporación Universitaria Republicana</a> o el <a href="../images/web/ori/formatos/Formato Estancia Investigación.xlsx">Formato de aplicación de estudiantes para estancias de investigación </a>, dependiendo del tipo de movilidad al que vayas aplicar.
											<li> <b>2 </b>Fotocopia de la Cédula de Ciudadanía</li>
											<li> <b>3 </b>Fotocopia del pasaporte</li>
											<li> <b>4 </b>Hoja de vida académica (debe incluir información como matrícula de honor, becas, investigaciones, etc) y laboral (información si ha trabajado y/o trabaja actualmente). La hoja de vida debe incluir foto reciente.</li>
											<li> <b>5 </b>Carta dirigida a la Universidad Anfitriona explicando el motivo de realizar el intercambio académico.</li>
											<li> <b>6 </b>Carta de recomendación de un docente de la Corporación dirigida a la Universidad Anfitriona.</li>
											<li> <b>7 </b>Certificado de notas hasta el semestre anterior de la postulación. Este certificado debe solicitarse en la Oficina de Registro y Control.</li>
											<li> <b>8 </b>Formulario de inscripción a la Universidad Anfitriona (diligenciado) – si aplica-.</li>
											<li> <b>9 </b>Certificado de idioma -si aplica-.</li>
											<li> <b>10 </b>	Traducción de todos los documentos al idioma de la Universidad Anfitriona (el certificado de notas es el único documento que debe ir traducido por un traductor oficial) -si aplica-.</li>
											<li> <b>11 </b>	Cualquier otro documento que se requiera al momento de la movilidad.</li>	
											</li>
										</ul>

										<center>
											<a class="waves-effect waves-light btn red darken-3" href="../images/web/ori/MANUAL_MOVILIDAD_ESTUDIANTES_UREP.pdf" target="_blank">
												<i class="material-icons left">cloud_download</i>DESCARGA EL MANUAL DE ESTUDIANTES
											</a>
										</center>
									</p>
								</div>

								<div id="homologacion_urep" class="content_inter ocultar">
									<p>
										Para que la homologación de asignaturas en la Corporación sea todo un éxito, debes seguir al pie de la letra los siguientes pasos:
										<ul>
											<li> <b>1.</b>	<span style="font-weight: bold;"> Documentos:</span> </li>
											<li> <i> a.</i>	<a href="#!">Formato de homologación</a> debidamente diligenciado.</li>
											<li> <i>b.</i>	Contenidos de la (s) asignatura (s) a cursar en la otra institución (si no se encuentran en la página de la Universidad Anfitriona, debes solicitárselos vía mail)</li>
											<br>
											<li> <b>2.</b> <span style="font-weight: bold;"> Tiempo:</span> 15 días hábiles antes de presentar los documentos para aplicar a la movilidad deseada, el estudiante debe diligenciar el formato de homologación con el Coordinador del Programa respectivo.</li>
											<br>
											<li> <b>3.</b> <span style="font-weight: bold;">Persona encargada de validar las asignaturas a homologar:</span> Decano y/o Coordinador del Programa respectivo.</li>
										</ul>

										<center>
											<a class="waves-effect waves-light btn red darken-3" href="../images/web/ori/MANUAL_MOVILIDAD_ESTUDIANTES_UREP.pdf" target="_blank">
												<i class="material-icons left">cloud_download</i>DESCARGA EL MANUAL DE ESTUDIANTES
											</a>
										</center>
									</p>
								</div>

								<div id="visas_urep" class="content_inter ocultar">
									<p>
										La Corporación Universitaria Republicana no cuenta con convenios con Embajadas y/o Consulados para realizar el trámite de visas de estudiantes, docentes y funcionarios ni tampoco puede interceder para solicitar citas.
										<br>
										Sin embargo, la ORI puede otorgar a la comunidad de la Corporación que vaya realizar una actividad académica en el exterior, una carta presentándolos al respectivo Consulado y/o Embajada.

										<table class="striped">
											<thead>
												<tr>
													<th width="100"></th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="../images/web/ori/argentina.jpg" width="100%"></td>
													<td><a target="_blank" href="http://visaestudiantil.gob.ar/"> Argentina </a></td>
												</tr>

												<tr>
													<td><img src="../images/web/ori/peru.jpg" width="100%"></td>
													<td><a target="_blank" href="http://www.embajadadelperu.org.co/index.html">Perú </a></td>
												</tr>

												<tr>
													<td><img src="../images/web/ori/espana.jpg" width="100%"></td>
													<td><a target="_blank" href="http://www.exteriores.gob.es/Consulados/BOGOTA/es/InformacionParaExtranjeros/Paginas/RequisitosDeEntrada.aspx">España </a></td>
												</tr>

												<tr>
													<td><img src="../images/web/ori/eeuu.jpg" width="100%"></td>
													<td><a target="_blank" href="https://travel.state.gov/content/visas/en/study-exchange/student.html">Estados Unidos</a></td>
												</tr>
											</tbody>
										</table>
									</p>
								</div>


								<div id="regreso_urep" class="content_inter ocultar">
									<p>
										La ORI notifica a la Oficina de registro y control para que genere tu recibo de pago de matrícula. Si cuentas con una beca debes comunicarte con el Departamento encargado.
										<ul>
											<li><b>1.</b> Recibirás información por parte de tu Facultad de cuando inscribir materias.</li>
											<li><b>2.</b> La Universidad Anfitriona debe enviar a la ORI el certificado de notas vistas por el estudiante de la Corporación.</li>
											<li><b>4.</b> Si luego del intercambio deseas realizar una práctica internacional, debes comunicarlo a tu Facultad por medio escrito en las fechas establecidas, con el fin de hacer la evaluación respectiva y brinden su concepto en cuanto a la pertinencia con los estudios realizados.</li>
										</ul>

										<center>
											<a class="waves-effect waves-light btn red darken-3" href="../images/web/ori/MANUAL_MOVILIDAD_ESTUDIANTES_UREP.pdf" target="_blank">
												<i class="material-icons left">cloud_download</i>DESCARGA EL MANUAL DE ESTUDIANTES
											</a>
										</center>

									</p>
								</div>

							</div>
						</div>
					</div>


					<!-- Idioma Exterior -->
					<div id="idioma_ext" class="col s12">

						<div class="row">
							<div class="col s12 m3">
								<h5 class="center">IDIOMA EXTERIOR</h5>
								<ul>
									<li name="#cursos_idext" class="enlace_inter"> Cursos en el exterior </li></a>
									<li name="#examen_idext" class="enlace_inter"> Exámenes internacionales </li></a>
								</ul>
							</div>
							<div class="col s12 m9">


								<!-- INFORMACION GENERAL -->
								<div id="cursos_idext" class="content_inter">
									<img src="../images/web/ori/ccls.png" style="float: left; margin: 10px; width: 150px">
									<p>
										El Centro Cultural de Estudios de Idiomas – CCLS–  es una escuela de idiomas en Miami que ofrece programas intensivos y semi intensivos de inglés y desde el año 2013 está comprometida con la Corporación Universitaria Republicana para ser puente de oportunidades y facilitar el perfeccionamiento del idioma por parte de los estudiantes, docentes, egresados y personal administrativo de la Corporación.<br><br>
										En una agencia fundada en 1993, ha enseñado inglés, portugués y español a cientos de miles de estudiantes en su sede de Miami, así como en instituciones educativas de otros países. CCLS cuenta con más de 700 escuelas afiliadas en todo el mundo.<br><br>
										Los estudiantes, docentes, egresados y personal administrativo de la Corporación Universitaria Republicana que deseen estudiar inglés en esta escuela recibirán un 20% de descuento en su matricula virtual o presencial.<br><br>
										Si quieres participar de los beneficios de esta alianza, debes seguir los siguientes pasos para aplicar como estudiante internacional:
										<a href="http://www.cclscorp.com/es/language-programs/english/intensive-english-course/" target="_blank"> aqui </a><br>
										o si lo prefieres, visita la opción de Preguntas frecuentes: Spanish FAQ:  
										<a target="_blank" href="http://www.cclscorp.com/intensive_english/faq_spa/index.html"> aqui </a>
									</p>
								</div>

								<!-- REQUISITOS UREP -->
								<div id="examen_idext" class="content_inter ocultar">
									<p>
										Si te encuentras listo para presentar una prueba internacional en inglés o francés, acá te brindamos la información de los lugares certificados donde puedes hacerlo:
										<div class="row">
											<div class="col s12 m12">

												<table class="striped">
													<thead>
														<tr>
															<th width="100"></th>
															<th width="100"></th>
															<th></th>
														</tr>
													</thead>
													<tbody>

														<tr>
															<td>
																<img src="../images/web/ori/BRITISH_COUNCIL.png" width="100%">
																<b>BRITISH COUNCIL</b>
															</td>
															<td></td>
															<td>
																<br> PET
																<br> IELTS
																<br> FCE
																<br> CAE
															</td>
														</tr>

														<tr>
															<td>
																<img src="../images/web/ori/COLOMBO_AMERICANO.png" width="100%">
																<b>COLOMBO AMERICANO</b>
															</td>
															<td></td>
															<td>
																<br> MET
																<br> IELTS
																<br> TOEIC
																<br> TOEIC BRIDGE
															</td>
														</tr>

														<tr>
															<td>
																<img src="../images/web/ori/INSTITUTO_SMART.png" width="100%">
																<b>INSTITUTO SMART</b>
															</td>
															<td></td>
															<td>
																<br> MET
															</td>
														</tr>

														<tr>
															<td>
																<img src="../images/web/ori/INSTITUTO_MULTILINGUA.PNG" width="100%">
																<b>INSTITUTO MULTILINGUA</b>
															</td>
															<td></td>
															<td>
																<br> MET
															</td>
														</tr>

														<tr>
															<td>
																<img src="../images/web/ori/ETS.png" width="100%">
																<b>ETS</b>
															</td>
															<td></td>
															<td>
																<br> TOEFL
															</td>
														</tr>

														<tr>
															<td>
																<img src="../images/web/ori/ALIANZA_FRANCESA.png" width="100%">
																<b>ALIANZA FRANCESA</b>
															</td>
															<td></td>
															<td>
																<br> DELF
																<br> DALF
															</td>
														</tr>

													</tbody>
												</table>


											</div>
											
										</div>
									</p>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>

			<!-- ESTUDIANTES EXTERNOS -->
			<div id="estudiantes_ext" class="col s12 content_urep ocultar">
				<div class="row">
					<h4 class="center"> Estudiantes Externos </h4>
					<div class="col s12">
						<ul class="tabs tabs-fixed-width">
							<li class="tab col s2"><a class="active" href="#intercambio_externos">Intercambio</a></li>
							<li class="tab col s2"><a href="#programas_externos">Programas Académicos</a></li>
							<li class="tab col s2"><a href="#guia_externos">Guía para estudiantes</a></li>
						</ul>
					</div>

					<!-- INTERCAMBIO EXTERNOS-->
					<div id="intercambio_externos" class="col s12">

						<div class="row">
							<div class="col s12 m3">
								<h5 class="center">INTERCAMBIO</h5>
								<ul>
									<li name="#general_urep_ext" class="enlace_inter"> Descripción</li></a>
									<li name="#convenios_urep_ext" class="enlace_inter"> Convenios</li></a>
									<li name="#requisitos_urep_ext" class="enlace_inter"> Requisitos para participar</li></a>
									<li name="#luego_aplicar_urep_ext" class="enlace_inter"> Luego de aplicar </li></a>
								</ul>
							</div>
							<div class="col s12 m9">


								<!-- INFORMACION GENERAL -->
								<div id="general_urep_ext" class="content_inter">
									<p>
										La Corporación Universitaria Republicana da la bienvenida a estudiantes visitantes que desean vivir una experiencia académica y cultural en la Corporación. A través de Alianzas Estratégicas de cooperación y redes para la movilidad estudiantil, el estudiante visitante tendrá una serie de oportunidades desarrolladas bajo un amplio portafolio en el cual podrá acceder a la riqueza académica y cultural que ofrece la Corporación Universitaria Republicana.
									</p>
								</div>
								<!-- CONVENIOS UREP -->
								<div id="convenios_urep_ext" class="content_inter ocultar">
									<iframe src="https://www.google.com/maps/d/embed?mid=19bYJ793T71IXAcjxWa4SdB_ahbM&ll=70.428037905912461%2C-99.88245810289459&z=2" width="640" height="480"></iframe>
								</div>

								<!-- REQUISITOS UREP EXTERNOS -->
								<div id="requisitos_urep_ext" class="content_inter ocultar">
									<p>
										<ul>
											<li><b>1.</b> Diligencia el <a href="../images/web/ori/formatos/Formato Estudiantes Externos.xlsx">Formato de aplicación para estudiantes visitantes</a> o el <a href="../images/web/ori/formatos/Formato Estancia Investigación.xlsx">Formato de aplicación de estudiantes para estancias de investigación</a>, dependiendo del tipo de movilidad al que vayas aplicar.</li>
											<li><b>2.</b> La ORI de tu Universidad debe enviarnos una carta de tu candidatura como estudiante que desea hacer un intercambio en la Corporación. </li>
											<li><b>3.</b> Debes elaborar una carta explicando las razones por las cuales deseas realizar el intercambio académico en la Corporación, esta carta debes entregarla a la ORI de tu Universidad y ella debe hacérnosla llegar junto con los demás documentos.</li>
										</ul>
										<h5 class="center"> Si quieres conocer la información completa, consulta el Manual para estudiantes visitantes</h5>

										<center>
											<a target="_blank" href="../images/web/ori/MANUAL_MOVILIDAD_ESTUDIANTES_VISITANTES.pdf" class="waves-effect waves-light btn red darken-3">
												<i class="material-icons left">cloud_download</i>DESCARGA EL MANUAL DE ESTUDIANTES VISITANTES
											</a>
										</center>
									</p>
								</div>

								<!-- LUEGO APLICAR UREP EXTERNOS -->
								<div id="luego_aplicar_urep_ext" class="content_inter ocultar">
									<p>
										<ul>
											<li><b>1.</b> La Facultad a la que aplicaste aprobará las asignaturas que propusiste en la aplicación.</li>
											<li><b>2.</b> Se enviará a la ORI de tu Universidad, una carta de aceptación del intercambio.</li>
											<li><b>3.</b> Se enviará a la ORI de tu Universidad, una carta de presentación ante migración de Colombia para facilitar el ingreso al país -si aplica-.</li>
										</ul>

										<h5 class="center"> Si quieres conocer la información completa, consulta el Manual para estudiantes visitantes</h5>
										<center>
											<a target="_blank" href="../images/web/ori/MANUAL_MOVILIDAD_ESTUDIANTES_VISITANTES.pdf" class="waves-effect waves-light btn red darken-3">
												<i class="material-icons left">cloud_download</i>DESCARGA EL MANUAL DE ESTUDIANTES VISITANTES
											</a>
										</center>

									</p>
								</div>

							</div>
						</div>
					</div>

					<!-- PROGRAMAS EXTERNOS-->
					<div id="programas_externos" class="col s12">
						<div class="row">
							<?php
							foreach ($todos_programas as $programa) {
								?>
								<div class="col s12 m6">
									<div class="card horizontal">
										<div class="card-image">
											<img src="../images/programas/<?= $programa->snies ?>.jpg" class="img_card">
										</div>
										<div class="card-stacked">
											<div class="card-content">
												<b><?= $programa->nombre_programa ?></b><br><br>
												<p class="autor_card"><b>Nivel Académico: </b><?= $programa->nivel_academico ?></p><br>
											</div>
											<div class="card-action">
												<a href="detalle_programa.php?id=<?= $programa->snies ?>" class="enlace">Mas información</a>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
							?>
						</div>
					</div>


					<!-- GUIA EXTERNOS-->
					<div id="guia_externos" class="col s12">
						<div class="row">
							<div class="col s12 m3">
								<h5 class="center">GUIA PARA ESTUDIANTES</h5>
								<ul>
									<li name="#sedes_guia" class="enlace_inter"> Sedes Corporación Universitaria Republicana </li></a>
									<li name="#sistema_aca_guia" class="enlace_inter"> Sistema Académico </li></a>
									<li name="#vida_guia" class="enlace_inter"> Vida Estudiantil </li></a>
									<li name="#bogota_guia" class="enlace_inter"> Vivir en Bogotá </li></a>
									<li name="#migracion_guia" class="enlace_inter"> Migración para estudiantes extranjeros </li></a>
									<li name="#alojamiento_guia" class="enlace_inter"> Alojamiento </li></a>
								</ul>
							</div>
							<div class="col s12 m9">


								<!-- SEDES GUIA -->
								<div id="sedes_guia" class="content_inter">
									<p>
										FOTOS
									</p>
								</div>

								<!-- SISTEMA ACADEMICO GUIA -->
								<div id="sistema_aca_guia" class="content_inter ocultar">
									<p>
										Un semestre se divide en 3 cortes. Los dos primeros cortes tienen una evaluación parcial de los temas tratados durante este periodo, en el último corte se realiza una evaluación final. La escala de calificación en la Corporación Universitaria Republicana es de 0 a 5.
									</p>
								</div>

								<!-- SEDES GUIA -->
								<div id="vida_guia" class="content_inter ocultar">
									<p>
										La Corporación Universitaria Republicana, por medio de la Oficina de Bienestar Universitario, ofrece a los estudiantes internacionales diferentes actividades que complementen su experiencia en la Universidad:
										<ul>
											<li><b>*</b> Área cultural</li>
											<li><b>*</b> Área de deportes</li>
											<li><b>*</b> Área de desarrollo humano</li>
											<li><b>*</b> Área de salud</li>
										</ul>

										Para más información sobre estas actividades, te invitamos a ingresar al siguiente <a target="_blank" href="http://localhost/WEB/new_urep/images/web/bienestar/actividades_2017_2.pdf"> enlace </a>

									</p>
								</div>


								<!-- BOGOTA UREP -->
								<div id="bogota_guia" class="content_inter ocultar">
									<p>
										<h5>Transporte:</h5>
										<ul>
											<li><b> Transmilenio: </b> Es el sistema masivo de transporte que conecta a casi todo Bogotá. Cuenta con diferentes estaciones en la ciudad y el costo del pasaje es de $2.200 pesos.</li>
											<li><b> Taxis: </b> Existen alrededor de 45.000 taxis. El costo del viaje depende del número de unidades que marque el taxímetro. El costo mínimo de un viaje en taxi es $4.100 pesos. Los recorridos al aeropuerto tienen un costo adicional de $3.900 pesos sobre el valor marcado en el taxímetro.</li>
											<li><b> Ciclorutas: </b> Bogotá cuenta con una extensa red de ciclorutas que conecta diferentes sectores de la ciudad. Por ello, es posible llegar a la Corporación en bicicleta. La universidad cuenta con un espacio que guardes tu bicicleta.</li>
										</ul>

										<h5> Alimentación </h5>
										<ul>
											<li> Mientras tu organismo se acostumbra a la comida colombiana, te sugerimos consumir cantidades moderadas y tomar agua embotellada sobre todo cuando estés fuera de Bogotá.</li>
											<li> En Bogotá encontraras pequeñas tiendas y grandes almacenes de cadena como: Éxito, Jumbo, Carulla, Alkosto entre otros. En ellos podrás encontrar objetos y alimentos que puedas necesitar.</li>
											<li> Te sugerimos disfrutar de la gran variedad de verduras y frutas que encontrarás en nuestro país. Si quieres conocer un poco más de la gastronomia, consulta este enlace</li>
										</ul>

										<h5> Lugares de Interés </h5>
										Bogotá ofrece una variedad de sitios de interés que van desde museos, parques, centros históricos, teatros, entre otros. Puedes consultarlos aquí: http://www.colombia.com/turismo/sitios-turisticos/bogota/ 

										<h5 class="center"> Si quieres conocer la información completa, consulta el Manual para estudiantes visitantes</h5>
										<center>
											<a target="_blank" href="../images/web/ori/MANUAL_MOVILIDAD_ESTUDIANTES_VISITANTES.pdf" class="waves-effect waves-light btn red darken-3">
												<i class="material-icons left">cloud_download</i>DESCARGA EL MANUAL DE ESTUDIANTES VISITANTES
											</a>
										</center>

									</p>
								</div>

								<!-- BOGOTA UREP -->
								<div id="migracion_guia" class="content_inter ocultar">
									<p>
										Todo estudiante internacional de intercambio deberá tramitar la visa de estudiante obligatoriamente. Para ello debe acercarse al Consulado Colombiano o Embajada de Colombia más cercana a su lugar de residencia.
										
										<h5 class="center"> Si quieres conocer la información completa, consulta el Manual para estudiantes visitantes</h5>
										<center>
											<a target="_blank" href="../images/web/ori/MANUAL_MOVILIDAD_ESTUDIANTES_VISITANTES.pdf" class="waves-effect waves-light btn red darken-3">
												<i class="material-icons left">cloud_download</i>DESCARGA EL MANUAL DE ESTUDIANTES VISITANTES
											</a>
										</center>
									</p>
								</div>



								<div id="visatp3_guia" class="content_inter ocultar">
									<p>
										Al extranjero que desee ingresar al territorio nacional en desarrollo de un programa académico, con beca o sin ella, impartido por un centro educativo o de formación del país debidamente certificado para tal fin, o en virtud de un convenio académico de intercambio y de realización de prácticas estudiantiles. Así mismo, cuando el extranjero desee ingresar al territorio nacional para ser entrenado en un arte u oficio. 
										<h5>Requisitos:</h5>
										<ul> 
											<li><b> * </b> Copia de la página principal del pasaporte vigente donde aparecen registrados los datos personales del titular.</li>
											<li><b> * </b> Copia de la página del pasaporte donde haya sido estampado el último sello de ingreso o salida de Colombia, según el caso. </li>
											<li><b> * </b> Para visas anteriores otorgadas sin el OCR o código de lectura rápida, anexar copia de la página que contenga la última visa colombiana. En caso de que ésta hubiere sido otorgada con el OCR este requisito no será necesario.</li>
											<li><b> * </b> Si el trámite va a ser finalizado por un apoderado adjuntar poder debidamente otorgado.</li>
											<li><b> * </b> Carta del solicitante o de quien responda económicamente por el extranjero acompañada de certificación bancaria donde se indique que el promedio de los últimos 6 meses es superior a diez (10) salarios mínimos legales mensuales vigentes.</li>
											<li><b> * </b> Anexar los documentos descritos en los primeros cinco puntos y fotocopia del certificado de admisión o de matrícula expedido por el establecimiento educativo, o </li>
											<li><b> * </b> Anexar los documentos descritos en los primeros cinco puntos y carta de aceptación en la que se haga referencia al convenio celebrado entre la entidad patrocinante y el establecimiento educativo, cuando se trate de estudiante de intercambio, o </li>
											<li><b> * </b> Anexar los documentos descritos en los primeros cinco puntos y documento con el cual se acredite que dentro del programa de estudios se requiere de práctica laboral, pasantía o investigación como requisito académico, cuando se trate de estudiante-practicante, o </li>
											<li><b> * </b> Anexar los documentos descritos en los primeros cinco puntos y en los casos de estudios diferentes a primaria, secundaria, técnicos, tecnólogos, o de nivel superior ya sea estudios universitarios de pregrado, postgrado, maestría, doctorado, diplomado o cursos universitarios, se deberá aportar certificación o documento del establecimiento correspondiente donde se indique que la intensidad horaria es de mínimo de diez (10) horas semanales, o </li>
											<li><b> * </b> Anexar los documentos descritos en los primeros cinco puntos y certificación o constancia del organismo internacional, entidad pública o privada que otorga la beca, en los casos de estudiantes becados y </li>
											<li><b> * </b> Cuando se trate de menores de edad, allegar poder de los padres designando al responsable o tutor del estudiante durante su permanencia en el país, apostillado o legalizado, según el caso. A falta de los padres, firmará quien tenga la custodia o cuidado personal del menor.</li>
											<li><b> * </b> Diligenciar la solicitud de visa por medio electrónico a través del siguiente enlace: Formulario Visas o personalmente en la oficina expedidora. En el caso de grupos artísticos, deportivos y culturales la solicitud de visa se podrá diligenciar por su representante, especificando los datos de cada uno de los integrantes del grupo.</li>
										</ul>

										<div class="nota_add">
											<b>Nota:</b>
											<ul> 
												<li><b> * </b> Para efectuar el trámite ya sea en línea o presencial deberá presentar su pasaporte con vigencia mayor a 180 días y dos páginas en blanco. </li>
												<li><b> * </b> Para que su visa sea estampada en su pasaporte, deberá presentarlo en el consulado donde concluyó su trámite o en las oficinas de Bogotá. Usted podrá ingresar a Colombia presentando la visa electrónica que le llega a su correo electrónico. </li>
												<li><b> * </b> Si usted hace su solicitud de manera presencial, no requerirá llevar fotografías. Las mismas le serán tomadas en la oficina expedidora.</li>
											</ul>
										</div>
										Para mayor información por favor consultar el siguiente link, sección VISA TP-3:
										<br>
										<a href="https://tramitesmre.cancilleria.gov.co/tramites/enlinea/solicitarVisa.xhtml" target="_blank"> Solicitar VISA</a>
										<br>
										<a href="http://www.cancilleria.gov.co/tramites_servicios/visas/clases" target="_blank"> Clases de VISA</a>

										<h5>Notificación de llegada y trámite de cédula de extranjería</h5>
										A partir del ingreso a Colombia el estudiante tiene 15 días calendario para el registro de visa de extranjeros en la oficina de Migración Colombia (Calle 100 No. 11B - 27 Bogotá Tel. 6017269 -6017200) y solicitar la cédula de extranjería como el documento de identidad del extranjero durante su permanencia en Colombia si su duración en superior a tres (3) meses. El incumplimiento de este registro personal tiene sanciones económicas para el extranjero según la Resolución DAS No. 078 de 2005
									</p>
								</div>

								<div id="alojamiento_guia" class="content_inter ocultar">
									<p>
										Estas opciones de alojamiento no son ofrecidas directamente por la Corporación, sino que se tratan de lugares recomendados, ya que cumplen con altos estándares y se encuentran cerca a las instalaciones de la Universidad:
										<br>
										
										<h5>RESIDENCIA UNIVERSITARIA CASA ESCOBAR</h5>
										<img src="../images/web/ori/CASA ESCOBAR.jpg" style="float: left; margin: 10px;" width="200">
										<b> Responsable: </b> James Stewart Escobar Saenz <br>
										<b> Teléfono: </b> (57 -1) 342 81 02 <br>
										<b> Celular: </b> (+57) 3102342032 Dirección: </b> Calle 7 # 5 74 <br>
										<b> Zona: </b> Candelaria <br>
										<b> Correo Electrónico: </b> casaescobar574@yahoo.com,  www.facebook.com/pages/Casaescobar/ <br>
										<b> Servicios Ofrecidos: </b> Las habitaciones cuentan con cama, mesa de noche y closet. <br>
										<b> Valor Promedio Mensual: </b> Desde $700.000 (COP) hasta 800.000 (COP), el precio incluye los servicios de agua, luz, gas en la ducha, servicio de lavandería una vez a la semana, direct TV y WIFI. El aseo a la habitación se realiza una vez a la semana. Las zonas comunes se limpian diariamente. Baño compartido con tres personas.<br>
										<br>

										<h5>RESIDENCIAS UNIVERSITARIAS RESIDENCIAL 10</h5>
										<img src="../images/web/ori/R10.jpg" style="float: left; margin: 10px;" width="200">
										<b> Responsable: </b> Alejandro Rueda / Juan Sebastián Pescador <br>
										<b> Celular: </b> (+57) 3125442582 / (+57) 3132864655 <br>
										<b> Dirección: </b> Calle 12d # 4 10 / Calle 12c # 3 64 <br>
										<b> Zona: </b> Candelaria <br>
										<b> Correo Electrónico: </b> residencial10bogota@gmail.com/ Facebook.com/residencial10<br>
										<b> Servicios Ofrecidos: </b> Cuenta con 20 habitaciones, de las cuales 10 cuentan con baño privado y diez no. Otra sede de la residencia cuenta con 30 habitaciones, de las cuales 6 cuentan con baño privado. Todas las habitaciones cuentan con cama sencilla o semidoble, ropa de cama, clóset, mesa de noche, escritorio y silla. <br>
										<b> Valor Promedio Mensual: </b> Entre $525.000 (COP) y $825.000 (COP) en precio incluye los servicios de agua, luz, Tv cable, Netflix e internet WIFI, servicio de limpieza y seguridad. No hay servicio de lavandería tiene convenio con una empresa de lavado.<br>
										<br>
										<h5>RESIDENCIA UNIVERSITARIA ESSTUDIA</h5>
										<img src="../images/web/ori/ESSTUDIA.jpg" style="float: left; margin: 10px;" width="200">
										<b> Responsable: </b> Claudia Torres <br>
										<b> Teléfono: </b> (57 1) 432-3944 <br>
										<b> Celular: </b> (+57) 3103053475 <br>
										<b> Dirección: </b> Calle 17 # 4 -88<br>
										<b> Zona: </b> Candelaria <br>
										<b> Correo Electrónico: </b> www.esstudia.com <br>
										<b> Servicios Ofrecidos: </b> Conserje 24/7, manual de convivencia, accesos controlados con tarjeta electrónica, cajilla de seguridad en cada habitación, circuito cerrado de TV, escaleras de emergencia, red contra incendios y detectores de humo en habitaciones y zonas comunes. Servicio de citófono, planta eléctrica y servicio médico de emergencia. Se incluye desayuno y cena, acceso a lavandería comunal, incluye servicios públicos (agua y energía), aseo a la habitación una vez por semana. Acompañamiento integral (contacto entre padres, estudiantes y universidades). Gimnasio, zonas comunes de estudio, parqueadero de bicicletas, espacios de entretenimiento e integración.<br>
										<br>
										<h5>RESIDENCIA UNIVERSITARIA SC HOUSE</h5>
										<img src="../images/web/ori/SC HOUSE.jpg" style="float: left; margin: 10px;" width="200">
										<b> Responsable: </b> Daniel Chavarro <br>
										<b> Teléfono: </b> (57 1) 4755056 <br>
										<b> Dirección: </b> Carrera 3 #11 32<br>
										<b> Zona: </b> Candelaria <br>
										<b> Correo Electrónico: </b> schouseco@gmail.com <br>
										<b> Servicios Ofrecidos: </b> Cuenta con 20 habitaciones. La casa tiene comedor y cocina autoservicio el desayuno adicional tiene un costo de $ 7.500. Los baños son compartidos. Las zonas comunes tienen aseo todos los días. <br>
										<b> Valor Promedio Mensual: </b> Valor de habitación individual $800.000 (COP) incluido lavado y alimentación.<br>

										Las opciones presentadas tienen límites de cupos, por lo cual es importante que los estudiantes reserven su estadía al momento de inscribirse en alguno de nuestros cursos.
									</p>
								</div>


							</div>
						</div>
					</div>

				</div>
			</div>

			<!-- BECAS -->
			<div id="becas" class="col s12 content_urep ocultar">
				<h4 class="center"> Becas </h4>
				<p>
					La ORI busca dar a conocer a la comunidad de la Corporación becas que ofrecen distintas entidades e instituciones alrededor del mundo para estudios de postgrado, cursos cortos y estancias de Investigación. Con esto, se impulsa a estudiantes, docentes e investigadores y administrativos a que participen y aprovechen las oportunidades de financiación. Esta oportunidad permite que los beneficiarios fortalezcan su nivel académico y asimismo utilicen su experiencia como herramienta de aprendizaje

					<div class="row">

						<div class="col s12 m3">
							<div class="card">
								<div class="card-image" style="height: 150px;" >
									<img src="../images/web/ori/becas/DAAD.jpg" class="img_card">
								</div>
								<div class="card-action">
									<a target="_blank" style="color: #A2121C;" href="http://www.daad.co/es/12365/index.html">DAAD</a>
								</div>
							</div>
						</div>

						<div class="col s12 m3">
							<div class="card">
								<div class="card-image" style="height: 150px;" >
									<img src="../images/web/ori/becas/FUN_CAROLINA.jpg" class="img_card">
								</div>
								<div class="card-action">
									<a target="_blank" style="color: #A2121C;" href="http://www.fundacioncarolina.es/formacion/presentacion/">Fundación Carolina</a>
								</div>
							</div>
						</div>

						<div class="col s12 m3">
							<div class="card">
								<div class="card-image" style="height: 150px;" >
									<img src="../images/web/ori/becas/FULBRIGHT.jpg" class="img_card">
								</div>
								<div class="card-action">
									<a target="_blank" style="color: #A2121C;" href="http://www.fulbright.edu.co/"> Fullbrigth </a>
								</div>
							</div>
						</div>

						<div class="col s12 m3">
							<div class="card">
								<div class="card-image" style="height: 150px;" >
									<img src="../images/web/ori/becas/ICETEX.jpg" class="img_card">
								</div>
								<div class="card-action">
									<a target="_blank" style="color: #A2121C;" href="https://www.icetex.gov.co/dnnpro5/es-co/becas/becasenelexterior/becasvigentes.aspx"> ICETEX </a>
								</div>
							</div>
						</div>

						<div class="col s12 m3">
							<div class="card">
								<div class="card-image" style="height: 150px;" >
									<img src="../images/web/ori/becas/CAMPUS_FRANCE.jpg" class="img_card">
								</div>
								<div class="card-action">
									<a target="_blank" style="color: #A2121C;" href="http://www.colombie.campusfrance.org/"> Campus France </a>
								</div>
							</div>
						</div>

						<div class="col s12 m3">
							<div class="card">
								<div class="card-image" style="height: 150px;" >
									<img src="../images/web/ori/becas/COLFUTURO.jpg" class="img_card">
								</div>
								<div class="card-action">
									<a target="_blank" style="color: #A2121C;" href="https://www.colfuturo.org/"> Colfuturo </a>
								</div>
							</div>
						</div>

						<div class="col s12 m3">
							<div class="card">
								<div class="card-image" style="height: 150px;" >
									<img src="../images/web/ori/becas/COLCIENCIAS.jpg" class="img_card">
								</div>
								<div class="card-action">
									<a target="_blank" style="color: #A2121C;" href="http://www.colciencias.gov.co/"> Colciencias </a>
								</div>
							</div>
						</div>

						<div class="col s12 m3">
							<div class="card">
								<div class="card-image" style="height: 150px;" >
									<img src="../images/web/ori/becas/AUALCPI.jpg" class="img_card">
								</div>
								<div class="card-action">
									<a target="_blank" style="color: #A2121C;" href="http://www.aualcpi.net/"> Aualcpi </a>
								</div>
							</div>
						</div>
					</div>
					
				</p>
			</div>

		</div>
	</div>
</div>

<?php require_once('../plantilla/footer.php'); ?>
</body>
</html>


