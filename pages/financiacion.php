<!doctype html>
<html manifest="urepublicana.appcache">
<head>
	<?php require_once('../plantilla/head.php'); ?>
</head>
<body id="body_urep">
	<?php require_once('../plantilla/menu.php'); ?>
	<div class="breadcrumb"><a href="index.php"> Inicio </a> > <a href="financiacion.php"> Pagos y Financiación </a></div>

	<div class="container">
		<div class="row center">
			<div class="col s12">
				<h2>Pagos y Financiación</h2>
				<img src="<?= URL_MASTER ?>/images/web/financiacion/banner_financiacion.jpg" width="100%">
			</div>
		</div>

		<div class="row lnk_first">
			<div class="col s2 m4"><br></div>

			<div class="col s4 m2">
				<span class="enlace_urep" name="#finan_pagos">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/financiacion/pagos_1.png" src="<?= URL_MASTER ?>/images/web/financiacion/pagos.png">
					<p>Formas de Pago</p>
				</span>
			</div>

			<div class="col s4 m2">
				<span class="enlace_urep" name="#finan_finaciacion">
					<img class="atajo" name="<?= URL_MASTER ?>/images/web/financiacion/fianciamiento_1.png" src="<?= URL_MASTER ?>/images/web/financiacion/fianciamiento.png">
					<p>Financiación</p>
				</span>
			</div>
		</div>

		<!-- PAGOS -->
		<div id="finan_pagos" class="col s12 content_urep ocultar">	
			<div class="row center">
				<div class="col s12">

					<div class="col s12 m6">
						<div class="card horizontal">
							<div class="card-image">
								<img src="<?= URL_MASTER ?>/images/web/financiacion/finan_codensa.jpg" class="img_card activator">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5>Crédito fácil Codensa</h5>
								</div>
								<div class="card-action">
									<a class="activator" href="#!">Conoce mas</a>
								</div>
							</div>

							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Crédito Fácil Codensa<i class="material-icons right">close</i></span>
								<p class="justificado">
									En la oficina de tesorería de la institución se pueden realizar pagos con la tarjeta de <b>CRÉDITO FÁCIL CODENSA</b>, para lo cual debe estar presente el titular de la tarjeta y presentar su cedula de ciudadanía al momento de hacer la transacción.
								</p>
							</div>

						</div>
					</div>


					<div class="col s12 m6">
						<div class="card horizontal">
							<div class="card-image">
								<img src="<?= URL_MASTER ?>/images/web/financiacion/finan_tarjeta.jpg" class="img_card activator">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5>Tarjeta de Credito - Debito</h5>
								</div>
								<div class="card-action">
									<a class="activator" href="#!">Conoce mas</a>
								</div>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Tarjeta de Credito - Debito<i class="material-icons right">close</i></span>
								<p class="justificado">
									En la oficina de tesorería de la institución se pueden realizar pagos con cualquier <b>TARJETA DÉBITO O CRÉDITO</b>, para lo cual debe estar presente el titular de la tarjeta y presentar su cedula de ciudadanía al momento de hacer la transacción.
								</p>
							</div>
						</div>
					</div>

					<div class="col s12 m6">
						<div class="card horizontal">
							<div class="card-image">
								<img src="<?= URL_MASTER ?>/images/web/financiacion/finan_cesantias.jpg" class="img_card activator">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5>Cesantias</h5>
								</div>
								<div class="card-action">
									<a class="activator" href="#!">Conoce mas</a>
								</div>
							</div>

							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Cesantias<i class="material-icons right">close</i></span>
								<p class="justificado">
									Los aspirantes pueden realizar su pago del semestre mediante cesantías, para lo cual debe presentar el recibo de matrícula entregado por la Corporación Universitaria Republicana al fondo donde tengan sus cesantías e iniciar el proceso que requiera cada entidad (consultar directamente con la entidad los requisitos exigidos para tramite de retiro de cesantías para educación). Una vez sea aprobado el desembolso de las cesantías el aspirante debe hacer lo siguiente:
									<br><br><b>Fondos particulares:</b> consignar el cheque entregado por la entidad en los números de cuenta que se mencionan en el proceso de pago con consignación bancaria, una vez realizado el pago debe dirigirse a la oficina de tesorería y presentar la consignación para legalizar matricula.
									<br><br><b>Fondo nacional del ahorro (FNA):</b> El FNA hace la transferencia directamente a la Corporación Universitaria Republicana, para legalizar matricula el aspirante debe entregar en la oficina de tesorería el <b> COMPROBANTE DE LA TRANSFERENCIA </b> documento entregado por el FNA.
								</p>
							</div>

						</div>
					</div>

					<div class="col s12 m6">
						<div class="card horizontal">
							<div class="card-image">
								<img src="<?= URL_MASTER ?>/images/web/financiacion/finan_efectivo.jpg" class="img_card activator">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5>Consignaciones bancarias</h5>
								</div>
								<div class="card-action">
									<a class="activator" href="#!">Conoce mas</a>
								</div>
							</div>

							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Consignaciones bancarias<i class="material-icons right">close</i></span>
								<p class="justificado">
									En la oficina de tesorería no se recibe dinero en efectivo, todo pago que se haga en efectivo debe realizarse mediante consignación bancaria en los siguientes números de cuenta:
									<br><br>
									Banco Av. Villas Cuenta Corriente <b>N° 00836689-0</b>
									<br><br>
									Banco Davivienda Cuenta de ahorros <b>N° 470100405955</b>
									<br><br>
									Para realizar las consignaciones bancarias se deben usar las siguientes dos referencias:
									<br>
									<b>Ref#1:</b> Numero de cedula del aspirante y/o estudiante
									<br>
									<b>Ref#2:</b> Usar el código que corresponda al pago a realizar, para revisar los códigos de referencia # 2 haga clic <a href="http://urepublicana.edu.co/images/web/financiacion/listado_codigos_consignaciones.pdf" target="_blank">aquí</a>. 
								</p>
							</div>

						</div>
					</div>

				</div>
			</div>

		</div>

		<!-- FINANCIACION -->
		<div id="finan_finaciacion" class="col s12 content_urep ocultar">	
			<div class="row center">
				<div class="col s12">

					<div class="col s12 m6">
						<div class="card horizontal">
							<div class="card-image">
								<img src="<?= URL_MASTER ?>/images/web/financiacion/finan_fincomercio.jpg" class="img_card activator">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5>Fincomercio</h5>
								</div>
								<div class="card-action">
									<a class="activator" href="#!">Conoce mas</a>
								</div>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Fincomercio<i class="material-icons right">close</i></span>
								<p class="justificado">
									El aspirante y/o estudiante puede financiar el valor de su semestre con la entidad financiera FINCOMERCIO, para lo cual es importante tener en cuenta la siguiente información:
									<ul style="text-align: left;">
									<li><b>*</b> El crédito se realiza con cheques posfechados o pagaré.<br></li>
									<li><b>*</b> La persona que tramite el crédito no debe estar reportado en centrales de riesgo y debe tener capacidad de endeudamiento.<br></li>
									<li><b>*</b> Tener como mínimo una continuidad laboral de 6 meses.<br></li>
									<li><b>*</b> Puede requerir codeudor. (no requiere codeudor si el solicitante cumple con los requisitos específicos de edad, antigüedad laboral y capacidad de pago)<br></li>
									<li><b>*</b> Financiación de 2 hasta 24 meses (según la duración del programa a cursar).<br></li>
									<li><b>*</b> Presentar cédula original y fotocopia de la cédula del estudiante y girador ampliada al 150% (y codeudor si aplica)<br></li>
									<li><b>*</b> Original y fotocopia de Orden de matrícula vigente.<br></li>
									<li><b>*</b> Respuesta de solicitud de crédito inmediata.<br></li>
									</ul>
									Para más información consulte: <a href="https://www.fincomercio.com/credito-libre-vehiculo-educativo/credito-educativo" target="_blank"> AQUÍ </a>
								</p>
							</div>
						</div>
					</div>

					<div class="col s12 m6">
						<div class="card horizontal">
							<div class="card-image">
								<img src="<?= URL_MASTER ?>/images/web/financiacion/finan_pichincha.jpg" class="img_card activator">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5>Banco Pichincha</h5>
								</div>
								<div class="card-action">
									<a class="activator" href="#!">Conoce mas</a>
								</div>
							</div>

							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Banco Pichincha<i class="material-icons right">close</i></span>
								<p class="justificado">
									El aspirante y/o estudiante puede financiar el valor de su semestre con el BANCO PICHINCHA, para lo cual es importante tener en cuenta la siguiente información:
									<ul style="text-align: left;">	
									<li><b>*</b> La persona que solicite el crédito no debe estar reportado en centrales de riesgo y debe tener capacidad de endeudamiento.<br></li>
									<li><b>*</b> Debe ser mayor de 22 años<br></li>
									<li><b>*</b> Presentar cédula original y fotocopia ampliada al 150%<br></li>
									<li><b>*</b> Formulario diligenciado expedido por el banco pichincha<br></li>
									<li><b>*</b> Aprobación inmediata y desembolso en 24 horas<br></li>
									</ul>
									Para más información consulte: <a href="https://www.bancopichincha.com.co/web/personas/credito-educativo" target="_blank"> AQUÍ </a>
								</p>
							</div>
						</div>
					</div>

					<div class="col s12 m6">
						<div class="card horizontal">
							<div class="card-image">
								<img src="<?= URL_MASTER ?>/images/web/financiacion/finan_itau.jpg" class="img_card activator">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5>Banco Itaú</h5>
								</div>
								<div class="card-action">
									<a class="activator" href="#!">Conoce mas</a>
								</div>
							</div>

							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Banco Itaú<i class="material-icons right">close</i></span>
								<p class="justificado">
									El aspirante y/o estudiante puede financiar el valor de su semestre con el BANCO ITAÚ, para lo cual es importante tener en cuenta la siguiente información:
									<ul style="text-align: left;">	
									<li><b>*</b> El crédito se realiza con cheques de gerencia a favor de la institución educativa<br></li>
									<li><b>*</b> Plazo de 6 ó 12 meses dependiendo la duración del programa académico.<br></li>
									<li><b>*</b> Presentar cédula original y fotocopia ampliada al 150%<br></li>
									<li><b>*</b> Presentar la documentación soporte de ingresos de acuerdo con la ocupación del cliente.<br></li>
									<li><b>*</b> Presentar copia de la orden de matrícula vigente.<br></li>
									<li><b> Para empleados adjuntar </b></li>
									<li><b>*</b> Certificado Laboral original con vigencia no mayor a 30 días, indicando cargo, salario básico, tiempo de servicio y tipo de contrato.<br></li>
									<li><b>*</b> Fotocopia certificada de ingresos y retenciones año anterior o declaración de renta.<br></li>
									</ul>
									Para más información consulte: <a href="https://www.itau.co/personal/financiacion/rotativo-educativo" target="_blank"> AQUÍ</a> 
								</p>
							</div>
						</div>
					</div>

					<div class="col s12 m6">
						<div class="card horizontal">
							<div class="card-image">
								<img src="<?= URL_MASTER ?>/images/web/financiacion/finan_icetex.jpg" class="img_card activator">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5>Icetex</h5>
								</div>
								<div class="card-action">
									<a class="activator" href="#!">Conoce mas</a>
								</div>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Icetex<i class="material-icons right">close</i></span>
								<p class="justificado">
									Para solicitar crédito con el ICETEX, el aspirante y/o estudiante debe presentar la orden de matrícula vigente, la cual es expedida por la Corporación Universitaria Republicana y cumplir con los registros exigido por el ICETEX, para más información de los requisitos y modalidades de crédito ofrecidas consultar:  
									<a href="https://www.icetex.gov.co/dnnpro5/es-co/cr%C3%A9ditoeducativo/pregrado.aspx" target="_blank"> AQUÍ </a>
								</p>
							</div>
						</div>
					</div>

					<div class="col s12 m6">
						<div class="card horizontal">
							<div class="card-image">
								<img src="<?= URL_MASTER ?>/images/web/financiacion/finan_urep.jpg" class="img_card activator">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5>Financiación Directa</h5>
								</div>
								<div class="card-action">
									<a class="activator" href="#!">Conoce mas</a>
								</div>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Financiación Directa<i class="material-icons right">close</i></span>
								<p class="justificado">
								La Corporación Universitaria Republicana ofrece una forma de financiación directa, con el objetivo de brindar una opción aquellas personas que no pueden cancelar su semestre de contado y no pueden acceder a créditos con entidades financieras.
								<br>Si desea realizar crédito directo con la institución es importante tener en cuenta la siguiente información:
								<ul style="text-align: left;">	
								<li><b>*</b> El crédito se realiza con la firma de pagares.<br></li>
								<li><b>*</b> No se consultan centrales de riesgo.<br></li>
								<li><b>*</b> No se cobra interés alguno por la financiación<br></li>
								<li><b>*</b> Se realiza con un pago mínimo de $600.000 y el excedente financiado en tres cuotas mensuales.<br></li>
								</ul>
								Para más información comunicarse al: <b>2862384 ext. 124 </b>
								</p>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>




	</div>

	<?php require_once('../plantilla/footer.php'); ?>

</body>
</html>