<!doctype html>
<html>
<head>
  <?php require_once('../plantilla/head.php'); ?>
</head>
<body id="body_urep">
  <?php require_once('../plantilla/menu.php'); ?>
  <div class="breadcrumb"><a href="index.php"> Inicio </a> > <a href="admisiones.php"> Admisiones </a></div>



  <div class="parque">


    <!-- Titulo -->
    <div class="container">
      <div class="row">
        <div class="col s12 m12">
          <img src="../images/web/expo_est/banner.png" width="100%">
        </div>
      </div>
    </div>

    <!-- Video e Info del Evento -->
    <div class="container">
      <div class="row">
        <div class="col s12 m6">
          <iframe width="100%" class="video" src="https://www.youtube.com/embed/NX6qsD7aGP4" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="col s12 m6 formulario">

          <div class="icon-block">
            <form class="col s12" action="//academiaurepublicana.org/cur5/inscripcion/enviar.php" method="POST">

              <div class="input-field col s6">
                <input name="nombres" id="nombres" type="text" class="validate" autocomplete="off" required="">
                <label for="nombres">* Nombres</label>
              </div>

              <div class="input-field col s6">
                <input name="apellidos" id="apellidos" type="text" class="validate" autocomplete="off" required="">
                <label for="apellidos">* Apellidos</label>
              </div>

              <!--                 
              <div class="input-field col s12">
                <input name="n_identidad" id="n_identidad" type="number" class="validate" autocomplete="off" required="">
                <label for="n_identidad">* Numero de Identificación</label>
              </div> 
            -->

            <div class="input-field col s6">
              <input name="celular" id="celular" type="number" class="validate" autocomplete="off" required="">
              <label for="celular">* Celular</label>
            </div>

            <div class="input-field col s6">
              <input name="email" id="email" type="email" class="validate" autocomplete="off" required="">
              <label for="email">* Email</label>
            </div>

            <div class="input-field col s12">
              <select name="programa" id="programa" required>
                <option value="" disabled selected>Seleccione una...</option>
                <option value="Contaduría pública">Contaduría pública</option>
                <option value="Matemáticas">Matemáticas</option>
                <option value="Ingeniería de sistemas">Ingeniería de sistemas</option>
                <option value="Derecho">Derecho</option>
                <option value="Trabajo social">Trabajo social</option>
                <option value="Finanzas y comercio internacional">Finanzas y comercio internacional</option>
              </select>
              <label>Programa de Interes</label>
            </div>

            <div class="input-field col s12">
              <input type="checkbox" id="terminos" name="terminos" required="" /><label for="terminos">He leido y acepto los terminos y condiciones.
                <a href="#">Términos y condiciones (Habeas Data)</a></label>
                <br><br>
                <input type="checkbox" id="informacion" name="informacion" value="si"/><label for="informacion">Acepto recibir más información del programa de interés</label>
              </div>
              <div >
                <div class="input-field col s5">
                  <i class="info_add">** Solo aplica para estudiantes de grado 11</i>
                </div>
                <div class="input-field col s7">
                  <button class="btn waves-effect red lighten-1 right" type="submit" name="action">INSCRIBIRME
                    <i class="material-icons right">send</i>
                  </button>
                  <br><br>
                </div>
              </div>

              
            </form>
          </div>

        </div>

      </div>
    </div>

    <div class="row">
      <div class="col s12 m6 info_expo">
        <img src="../images/web/expo_est/expo_estudiantes.png" class="expo_estudiantes">
        <b>Visítanos en Expo-estudiante</b>
        <br><br>
        Del 24 al 27 de Octubre / Stand 232 pabellón 8, nivel 2.<br>
        Obtén un 40% de descuento en el primer semestre
        <br><br>
      </div>
    </div>

    <div class="div_chica">
      <img src="../images/web/expo_est/chica.png" class="chica">   
    </div>

  </div>

  
  <div class="container carreras">
    <div class="collection">

      <ul class="collapsible" data-collapsible="accordion">

        <li>
          <div class="collapsible-header collection-item center">
            <h5>CONTADURÍA PÚBLICA</h5>
            <p class="info_add">
              Contaduría Publica (Registro calificado Código SNIES 10969 Resolucion Nº 13802 - Vigencia 07 de Octubre 2020
            </p>
          </div>
          <div class="collapsible-body"><span>El contador público es el profesional encargado de liderar todos los procesos contables propios de las empresas públicas y privadas, gracias al conocimiento de las normas vigentes en Colombia, es un elemento crucial para el desarrollo de las empresas. ¿Te interesa? Estudia Contaduría Pública en la Corporación Universitaria Republicana </span></div>
        </li>

        <li>
          <div class="collapsible-header collection-item center">
            <h5>MATEMÁTICAS</h5>
            <p class="info_add">
              Matemáticas (Registro calificado Código SNIES 102130 Resolucion Nº 16800 - Vigencia 20 de Diciembre 2019)
            </p>
          </div>
          <div class="collapsible-body"><span>El profesional en matemáticas aplica la magia de los números y los procesos lógicos a la solución de problemas reales que permitan el desarrollo del país. Comunica su conocimiento a diferentes generaciones mediante la docencia. ¿Te interesa? Estudia matemáticas en la Corporación Universitaria Republicana. </span></div>
        </li>

        <li>
          <div class="collapsible-header collection-item center">
            <h5>INGENIERÍA DE SISTEMAS</h5>
            <p class="info_add">
              Ingeniería de sistemas (Registro calificado Código SNIES 17487 Resolucion Nº 3084 - Vigencia 26 de Marzo 2019)
            </p>
          </div>
          <div class="collapsible-body"><span>El Ingeniero de Sistemas está capacitado para dar soluciones reales y eficaces a las diferentes necesidades empresariales e institucionales que plantea el mercado actual, gracias al conocimiento de; sistemas de información y comunicación, desarrollo de software, dispositivos y aplicaciones móviles, redes e inteligencia artificial, etc. ¿Te interesa? Estudia Ingeniería de sistemas en la Corporación Universitaria Republicana </span></div>
        </li>

        <li>
          <div class="collapsible-header collection-item center">
            <h5>DERECHO</h5>
            <p class="info_add">
              Derecho (Registro calificado Código SNIES 53077 Resolucion Nº 2375 - Vigencia 24 de febrero 2021)
            </p>
          </div>
          <div class="collapsible-body"><span>El Profesional en Derecho tiene como objetivo principal colaborar eficazmente en la construcción de las condiciones necesarias para una sociedad más justa, amparado en el conocimiento de las normas y leyes que rigen nuestro país. Tiene en la solución pacífica de los conflictos una herramienta para la consecución de un orden social. ¿Te interesa? Estudia Derecho en la Corporación Universitaria Republicana </span></div>
        </li>

        <li>
          <div class="collapsible-header collection-item center">
            <h5>TRABAJO SOCIAL</h5>
            <p class="info_add">
              Trabajo Social (Registro calificado Código SNIES 11911 Resolucion Nº 2373 - Vigencia 24 de Febrero 2021)
            </p>
          </div>
          <div class="collapsible-body"><span>El profesional en Trabajo Social aporta en el mejoramiento de las condiciones sociales de la comunidad y las organizaciones. ¿Te interesa? Estudia Trabajo Social en la Corporación Universitaria Republicana. </span></div>
        </li>

        <li>
          <div class="collapsible-header collection-item center">
            <h5>FINANZAS Y COMERCIO INTERNACIONAL</h5>
            <p class="info_add">
              Finanzas y comercio internacional (Registro calificado Código SNIES 13768 Resolucion Nº 13801 - Vigencia 07 de Octubre 2020)
            </p>
          </div>
          <div class="collapsible-body"><span>El profesional en Finanzas y Comercio Internacional participa e interviene de manera eficiente en los procesos económicos y comerciales que se desarrollen al interior del país y en el exterior. ¿Te interesa? Estudia Finanzas y Comercio Internacional en la Corporación Universitaria Republicana. </span></div>
        </li>


      </ul>

    </div>
  </div> 

  <?php require_once('../plantilla/footer.php'); ?>

</body>
</html>