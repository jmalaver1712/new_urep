  <form method="POST" id="redireccion_urep" action="#">
      <input type="hidden" name="id" id="variable_urep">
  </form>
  <?php 
  $todos_programas_menu = $get_xml->registros_all_xml('programas.xml');
  ?>
  <div class="row" id="main_menu">
    <div class="col s4 m2 l2 right-align menu_nav">
      <a href="../pages/"> <img src="../images/web/logo.png" class="logo_urep"> </a>
    </div>

    <div class="col s6 m9 l4 left-align menu_nav">
      <h1 class="tipo_urep">Corporación Universitaria Republicana</h1>
      <i class="legal_urep">Resolución No. 3061 del 02 de Diciembre de 1999 Min. Educación</i>
    </div>

    <div class="col s2 m1 l6">
      <div class="nav-wrapper">
        <a href="#" id="btn_menu" data-activates="menu_mobile" class="button-collapse"><i class="material-icons">menu</i></a>


        <div class="row">
          <ul class="right nav_urep">
            <li class="nav_main"><a class="enlace_menu" href="#!" name="#bienestar">Bienestar Universitario</a></li>
            <li class="nav_main"><a class="enlace_menu" href="#!" name="#estudiantes">Estudiantes</a></li>
            <li class="nav_main"><a class="enlace_menu" href="#!" name="#programas">Programas</a></li>
            <li class="nav_main"><a class="enlace_menu" href="#!" name="#nuestra_institucion">Nuestra Institución</a></li>
          </ul>
          <ul class="right nav_urep nav_aux">
            <li><a class="enlace_menu" href="#!" name="#servicios">Servicios</a></li>
            <li><a href="../internacionalizacion/">Internacionalización</a></li>
            <li><a href="../pages/investigacion.php">Investigación</a></li>
            <li><a target="_blank" href="http://republicanaradio.com/">Republicana Radio</a></li>
          </ul>
        </div>


        <!-- MOBILE MENU -->
        <ul id="menu_mobile" class="side-nav center-align">
          <a href="../pages/"><img src="../images/web/menu/logo.png" width="30%"></a>

          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header waves-effect">Nuestra Institución</a>
                <div class="collapsible-body nivel_2">
                  <ul>
                    <li><a href="../pages/nosotros.php">Nosotros</a></li>
                    <li><a target="_blank" href="../images/documentos/nuestra_institucion/Estructura-Organizacional.pdf">Organigrama</a></li>
                    <li><a target="_blank" href="../images/documentos/nuestra_institucion/PEI.pdf">PEI</a></li>
                    <li><a target="_blank" href="../images/documentos/nuestra_institucion/planDesarrollo.pdf">Plan de Desarrollo Institucional</a></li>
                    <li><a target="_blank" href="../images/documentos/nuestra_institucion/Estatutos.pdf">Estatutos Generales</a></li>
                    <li><a target="_blank" href="../images/documentos/nuestra_institucion/Reglamento-Estudiantil-Ajustado-Mz-19-de-2015.pdf">Reglamento Estudiantil</a></li>
                    <li><a target="_blank" href="../images/documentos/nuestra_institucion/Reglamento-Estudiantil-Semestralizado.pdf">Reglamento Estudiantil Semestralizado</a></li>
                    <li><a target="_blank" href="../images/documentos/nuestra_institucion/Reglamento-Docente-Ajustado-Marzo-19-2015.pdf">Reglamento Docente</a></li>
                    <li><a target="_blank" href="http://urepublicana.edu.co/convocatoria-docente/">Convocatoria Docente</a></li>
                    <li><a target="_blank" href="../images/documentos/nuestra_institucion/pecuniarios2017.pdf">Valores y Servicios Académicos 2017</a></li>
                    <li><a target="_blank" href="../images/documentos/nuestra_institucion/PersoneriaJuridica.pdf">Personeria Jurídica</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>

          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header waves-effect">Estudiantes</a>
                <div class="collapsible-body nivel_2">
                  <ul>
                    <!-- <li><a target="_blank" href="http://urepublicana.edu.co/wp-content/uploads/2017/07/calendarioAcademico.pdf">Calendario Académico</a></li> -->
                    <li><a target="_blank" href="http://urepublicana.edu.co/images/noticias_eventos/calendario%20Academico%20(modificacion%202017-2).pdf">Calendario Académico</a></li>
                    <li><a target="_blank" href="../images/documentos/estudiantes/MANUAL%20DE%20PROCEDIMIENTO.pdf">Manual de procedimientos para matrícula</a></li>
                    <li><a target="_blank" href="http://academiaurepublicana.org/ArKa/test/actualiza1.php">Actualización de datos - Formulario Financiero</a></li>
                    <li><a target="_blank" href="http://urepublicana.edu.co/estudiantes/egresados/">Egresados</a></li>
                    <li><a target="_blank" href="http://urepublicana.edu.co/flexibilidad-academica/">Flexibilidad Académica</a></li>
                    <li><a target="_blank" href="../images/documentos/estudiantes/Requisitos_Trabajo_de_Profundización-2017.pdf">Lineamientos Trabajo de Profundización</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>

          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header waves-effect">Programas</a>
                <div class="collapsible-body nivel_2">
                  <ul>


                    <li class="no-padding">
                      <ul class="collapsible collapsible-accordion">
                        <li>
                          <a class="collapsible-header waves-effect">Pregrado</a>
                          <div class="collapsible-body nivel_3">
                            <ul>
                              <?php
                              foreach ($todos_programas_menu as $programa_menu) {
                                if($programa_menu->nivel_academico == "Profesional"){
                                  ?>
                                  <li>
                                    <!-- <a href="../pages/detalle_programa.php?id=<?= $programa_menu->snies ?>"> <?= $programa_menu->nombre_programa ?> </a> -->
                                    <a class="post_variable" title="../programas/" name="<?= $programa_menu->snies ?>" href="#!"> <?= $programa_menu->nombre_programa ?> </a>
                                  </li>
                                  <?php
                                }
                              }
                              ?>

                              <!-- 
                              <li><a target="_blank" href="http://urepublicana.edu.co/pregrado/derecho-2015/">Derecho</a></li>
                              <li><a target="_blank" href="http://urepublicana.edu.co/contaduria-publica-2015/">Contaduría Pública</a></li>
                              <li><a target="_blank" href="http://urepublicana.edu.co/finanzas-y-comercio-internacional-2015/">Finanzas y Comercio Internacional</a></li>
                              <li><a target="_blank" href="http://urepublicana.edu.co/trabajo-social-2015/">Trabajo Social</a></li>
                              <li><a target="_blank" href="http://urepublicana.edu.co/matematicas/">Matemáticas</a></li>
                              <li><a target="_blank" href="http://urepublicana.edu.co/landingSistemas.html">Ingeniería de Sistemas</a></li> 
                            -->
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </li>


                  <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                      <li>
                        <a class="collapsible-header waves-effect">Posgrado</a>
                        <div class="collapsible-body nivel_3">
                          <ul>
                            <?php
                            foreach ($todos_programas_menu as $programa_menu) {
                              if($programa_menu->nivel_academico == "Posgrado"){
                                ?>
                                <li>
                                  <!-- <a href="../pages/detalle_programa.php?id=<?= $programa_menu->snies ?>"> <?= $programa_menu->nombre_programa ?> </a> -->
                                  <a class="post_variable" title="../programas/" name="<?= $programa_menu->snies ?>" href="#!"> <?= $programa_menu->nombre_programa ?> </a>
                                </li>
                                <?php
                              }
                            }
                            ?>
                              <!-- 
                              <li><a target="_blank" href="http://urepublicana.edu.co/derecho-publico/">Especialización en Derecho Público</a></li>
                              <li><a target="_blank" href="http://urepublicana.edu.co/derecho-notarial-y-de-registro/">Especialización en Derecho Notarial y  de Registro</a></li>
                              <li><a target="_blank" href="http://urepublicana.edu.co/derecho-procesal-constitucional/">Especialización en Derecho Procesal Constitucional</a></li>
                              <li><a target="_blank" href="http://urepublicana.edu.co/derecho-laboral/">Especialización en Derecho Laboral y Seguridad Social</a></li>
                              <li><a target="_blank" href="http://urepublicana.edu.co/especializacion-en-la-responsabilidad-penal-del-servidor-publico-y-los-delitos-contra-la-administracion-publica/">Especialización en Responsabilidad Penal del Servidor Público y los Delitos contra la Administración Pública</a></li>
                              <li><a target="_blank" href="http://urepublicana.edu.co/derecho-de-familia/">Especialización en Derecho de Familia</a></li>
                              <li><a target="_blank" href="http://urepublicana.edu.co/derecho-comercial/">Especialización en Derecho Comercial</a></li>
                              <li><a target="_blank" href="http://urepublicana.edu.co/especializacion-en-revisoria-fiscal/">Especialización en Revisoría Fiscal</a></li>
                              <li><a target="_blank" href="http://urepublicana.edu.co/especializacion-en-investigacion-intervencion-y-gerencia-social/">Especialización en Intervención y Gerencia Social </a></li> 
                            -->
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </li>

                  <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                      <li>
                        <a class="collapsible-header waves-effect">Educacion Continuada</a>
                        <div class="collapsible-body nivel_3">
                          <ul>
                            <li><a target="_blank" href="http://urepublicana.edu.co/contratacion-estatal/">Contratación Estatal</a></li>
                            <li><a target="_blank" href="http://urepublicana.edu.co/educacion-continuada/derecho-disciplinario-colombiano/">Derecho Disciplinario Colombiano</a></li>
                            <li><a target="_blank" href="http://urepublicana.edu.co/educacion-continuada/regimen-disciplinario-de-las-fuerzas-militares/">Regimen Disciplinario de las Fuerzas Militares</a></li>
                            <li><a target="_blank" href="http://urepublicana.edu.co/educacion-continuada/diplomado-en-formacion-y-capacitacion-de-conciliadores/">Diplomado en Formación y Capacitación de Conciliadores</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </li>

                </ul>
              </div>
            </li>
          </ul>
        </li>

        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header waves-effect">Bienestar Universitario</a>
              <div class="collapsible-body nivel_2">
                <ul>
                  <li><a target="_blank" href="../images/web/bienestar/actividades_2017_2.pdf">Actividades 2017</a></li>
                  <li><a target="_blank" href="../images/documentos/bienestar/Reglamento-Bienestar.pdf">Reglamento Bienestar Universitario</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>

        <li><a target="_blank" href="http://republicanaradio.com/">Republicana Radio</a></li>
        <li><a href="../pages/investigacion.php">Investigación</a></li>
        <li><a href="../internacionalizacion/">Internacionalización</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header waves-effect">Servicios</a>
              <div class="collapsible-body nivel_2">
                <ul>
                  <li><a target="_blank" href="http://outlook.com/urepublicana.edu.co">Correo Electrónico</a></li>
                  <li><a target="_blank" href="http://academiaurepublicana.org/ArKa/test/new_login.php">Consulta de Notas</a></li>
                  <li><a target="_blank" href="http://academiaurepublicana.org/ArKaIn/logx.php">Registro de Notas (Docente)</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li><a href="#"><br></a></li>
        <li><a href="#"><br></a></li>
      </ul>

    </div>
  </div>


  <!-- Nuestra Institucion -->
  <div id="nuestra_institucion" class="menu_det ocultar">
    <div class="menu_all">
      <div class="container">
        <div class="row">
          <h3 class="center-align" >Nuestra Institución</h3>
          <div class="col m3">
            <ul>
              <li><a href="../pages/nosotros.php">Nosotros</a></li>
              <li><a target="_blank" href="../images/documentos/nuestra_institucion/Estructura-Organizacional.pdf">Organigrama</a></li>
              <li><a target="_blank" href="../images/documentos/nuestra_institucion/PEI.pdf">PEI</a></li>
              <li><a target="_blank" href="../images/documentos/nuestra_institucion/planDesarrollo.pdf">Plan de Desarrollo Institucional</a></li>
            </ul>
          </div>
          <div class="col m3">
            <ul>
              <li><a target="_blank" href="../images/documentos/nuestra_institucion/Estatutos.pdf">Estatutos Generales</a></li>
              <li><a target="_blank" href="../images/documentos/nuestra_institucion/Reglamento-Estudiantil-Ajustado-Mz-19-de-2015.pdf">Reglamento Estudiantil</a></li>
              <li><a target="_blank" href="../images/documentos/nuestra_institucion/Reglamento-Estudiantil-Semestralizado.pdf">Reglamento Estudiantil Semestralizado</a></li>
              <li><a target="_blank" href="../images/documentos/nuestra_institucion/Reglamento-Docente-Ajustado-Marzo-19-2015.pdf">Reglamento Docente</a></li>
            </ul>
          </div>
          <div class="col m3">
            <ul>
              <li><a target="_blank" href="http://urepublicana.edu.co/convocatoria-docente/">Convocatoria Docente</a></li>
              <li><a target="_blank" href="../images/documentos/nuestra_institucion/pecuniarios2017.pdf">Valores y Servicios Académicos 2017</a></li>
              <li><a target="_blank" href="../images/documentos/nuestra_institucion/PersoneriaJuridica.pdf">Personeria Jurídica</a></li>
            </ul>
          </div>
          <div class="col m3">
            <img src="../images/web/menu/logo.png" width="60%">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Estudiantes -->
  <div id="estudiantes" class="menu_det ocultar">
    <div class="menu_all">
      <div class="container">
        <div class="row">
          <h3 class="center-align" >Estudiantes</h3>
          <div class="col m4">
            <ul>
              <!-- <li><a target="_blank" href="http://urepublicana.edu.co/wp-content/uploads/2017/07/calendarioAcademico.pdf">Calendario Académico</a></li> -->
              <li><a target="_blank" href="http://urepublicana.edu.co/images/noticias_eventos/calendario%20Academico%20(modificacion%202017-2).pdf">Calendario Académico</a></li>
              <li><a target="_blank" href="../images/documentos/estudiantes/MANUAL%20DE%20PROCEDIMIENTO.pdf">Manual de procedimientos para matrícula</a></li>
              <li><a target="_blank" href="http://academiaurepublicana.org/ArKa/test/actualiza1.php">Actualización de datos - Formulario Financiero</a></li>
            </ul>

          </div>
          <div class="col m4">
            <ul>
              <li><a target="_blank" href="http://urepublicana.edu.co/estudiantes/egresados/">Egresados</a></li>
              <li><a target="_blank" href="http://urepublicana.edu.co/flexibilidad-academica/">Flexibilidad Académica</a></li>
              <li><a target="_blank" href="../images/documentos/estudiantes/Requisitos_Trabajo_de_Profundización-2017.pdf">Lineamientos Trabajo de Profundización</a></li>
            </ul>
          </div>
          <div class="col m4">
            <img src="../images/web/menu/estudiante.png" width="60%">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Programas -->
  <div id="programas" class="menu_det ocultar">
    <div class="menu_all">
      <div class="container">
        <div class="row">
          <h3 class="center-align" >Programas</h3>
          <div class="col m1"></div>
          <div class="col m3">

            <ul>
              <li><a class="enlace_menu_2" name="#prom_pregrado" href="#">Pregrado</a></li>
              <li><a class="enlace_menu_2" name="#prom_posgrado" href="#">Posgrado</a></li>
              <li><a class="enlace_menu_2" name="#prom_edcontinua" href="#">Educación Continuada</a></li>
            </ul>

          </div>
          <div class="col m6">

            <ul id="prom_pregrado" class="programas ocultar">
              <?php
              foreach ($todos_programas_menu as $programa_menu) {
                if($programa_menu->nivel_academico == "Profesional"){
                  ?>
                  <li>
                    <!-- <a href="../pages/detalle_programa.php?id=<?= $programa_menu->snies ?>"> <?= $programa_menu->nombre_programa ?> </a> -->

                    <a class="post_variable" title="../programas/" name="<?= $programa_menu->snies ?>" href="#!"> <?= $programa_menu->nombre_programa ?> </a>

                  </li>
                  <?php
                }
              }
              ?>
                <!--                 
                <li><a target="_blank" href="http://urepublicana.edu.co/pregrado/derecho-2015/">Derecho</a></li>
                <li><a target="_blank" href="http://urepublicana.edu.co/contaduria-publica-2015/">Contaduría Pública</a></li>
                <li><a target="_blank" href="http://urepublicana.edu.co/finanzas-y-comercio-internacional-2015/">Finanzas y Comercio Internacional</a></li>
                <li><a target="_blank" href="http://urepublicana.edu.co/trabajo-social-2015/">Trabajo Social</a></li>
                <li><a target="_blank" href="http://urepublicana.edu.co/matematicas/">Matemáticas</a></li>
                <li><a target="_blank" href="http://urepublicana.edu.co/landingSistemas.html">Ingeniería de Sistemas</a></li> 
              -->
            </ul>

            <ul id="prom_posgrado" class="programas ocultar" >
              <?php
              foreach ($todos_programas_menu as $programa_menu) {
                if($programa_menu->nivel_academico == "Posgrado"){
                  ?>
                  <li>
                  <a class="post_variable" title="../programas/" name="<?= $programa_menu->snies ?>" href="#!"> <?= $programa_menu->nombre_programa ?> </a>
                    <!-- <a href="../pages/detalle_programa.php?id=<?= $programa_menu->snies ?>"> <?= $programa_menu->nombre_programa ?> </a> -->
                  </li>
                  <?php
                }
              }
              ?>
                <!-- 
                <li><a target="_blank" href="http://urepublicana.edu.co/derecho-publico/">Especialización en Derecho Público</a></li>
                <li><a target="_blank" href="http://urepublicana.edu.co/derecho-notarial-y-de-registro/">Especialización en Derecho Notarial y  de Registro</a></li>
                <li><a target="_blank" href="http://urepublicana.edu.co/derecho-procesal-constitucional/">Especialización en Derecho Procesal Constitucional</a></li>
                <li><a target="_blank" href="http://urepublicana.edu.co/derecho-laboral/">Especialización en Derecho Laboral y Seguridad Social</a></li>
                <li><a target="_blank" href="http://urepublicana.edu.co/especializacion-en-la-responsabilidad-penal-del-servidor-publico-y-los-delitos-contra-la-administracion-publica/">Especialización en Responsabilidad Penal del Servidor Público y los Delitos contra la Administración Pública</a></li>
                <li><a target="_blank" href="http://urepublicana.edu.co/derecho-de-familia/">Especialización en Derecho de Familia</a></li>
                <li><a target="_blank" href="http://urepublicana.edu.co/derecho-comercial/">Especialización en Derecho Comercial</a></li>
                <li><a target="_blank" href="http://urepublicana.edu.co/especializacion-en-revisoria-fiscal/">Especialización en Revisoría Fiscal</a></li>
                <li><a target="_blank" href="http://urepublicana.edu.co/especializacion-en-investigacion-intervencion-y-gerencia-social/">Especialización en Intervención y Gerencia Social </a></li>
              </ul>

              <ul id="prom_edcontinua" class="programas ocultar" >
                <li><a target="_blank" href="http://urepublicana.edu.co/contratacion-estatal/">Contratación Estatal</a></li>
                <li><a target="_blank" href="http://urepublicana.edu.co/educacion-continuada/derecho-disciplinario-colombiano/">Derecho Disciplinario Colombiano</a></li>
                <li><a target="_blank" href="http://urepublicana.edu.co/educacion-continuada/regimen-disciplinario-de-las-fuerzas-militares/">Regimen Disciplinario de las Fuerzas Militares</a></li>
                <li><a target="_blank" href="http://urepublicana.edu.co/educacion-continuada/diplomado-en-formacion-y-capacitacion-de-conciliadores/">Diplomado en Formación y Capacitación de Conciliadores</a></li> 
              -->
            </ul>

            <ul id="prom_edcontinua" class="programas ocultar" >

              <li><a target="_blank" href="http://urepublicana.edu.co/contratacion-estatal/">Contratación Estatal</a></li>
              <li><a target="_blank" href="http://urepublicana.edu.co/educacion-continuada/derecho-disciplinario-colombiano/">Derecho Disciplinario Colombiano</a></li>
              <li><a target="_blank" href="http://urepublicana.edu.co/educacion-continuada/regimen-disciplinario-de-las-fuerzas-militares/">Regimen Disciplinario de las Fuerzas Militares</a></li>
              <li><a target="_blank" href="http://urepublicana.edu.co/educacion-continuada/diplomado-en-formacion-y-capacitacion-de-conciliadores/">Diplomado en Formación y Capacitación de Conciliadores</a></li>

            </ul>


          </div>
          <div class="col m2">
            <img src="../images/web/menu/programas.png" width="100%">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bienestar Universitario -->
  <div id="bienestar" class="menu_det ocultar">
    <div class="menu_all">
      <div class="container">
        <div class="row">
          <h3 class="center-align" >Bienestar Universitario</h3>
          <div class="col m5">
            <ul>
              <li><a target="_blank" href="../images/web/bienestar/actividades_2017_2.pdf">Actividades 2017</a></li>
            </ul>

          </div>
          <div class="col m4">
            <ul>
              <li><a target="_blank" href="../images/documentos/bienestar/Reglamento-Bienestar.pdf">Reglamento Bienestar Universitario</a></li>
            </ul>
          </div>
          <div class="col m3">
            <img src="../images/web/menu/bienestar.png" width="100%">
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Servicios -->
  <div id="servicios" class="menu_det ocultar">
    <div class="menu_all">
      <div class="container">
        <div class="row">
          <h3 class="center-align" >Servicios</h3>
          <div class="col m2"></div>
          <div class="col m5">
            <ul>
              <li><a target="_blank" href="http://outlook.com/urepublicana.edu.co">Correo Electrónico</a></li>
              <li><a target="_blank" href="http://academiaurepublicana.org/ArKa/test/new_login.php">Consulta de Notas</a></li>
              <li><a target="_blank" href="http://academiaurepublicana.org/ArKaIn/logx.php">Registro de Notas (Docente)</a></li>
            </ul>
          </div>
          <div class="col m3">
            <img src="../images/web/menu/bienestar.png" width="100%">
          </div>
          <div class="col m2"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- FORMULARIO DE INFORMACION -->
  <div id="solicita_info" class="activa_form">

        
    <div id="btn_informacion" class="pulse">
      <a class="tooltipped" data-position="right" data-delay="50" data-tooltip="¿Necesita información?">
        <i class="material-icons">info_outline</i>
        <p class="center">¿Necesita información?</p>
      </a>
      <i id="cerrar_info" class="material-icons tooltipped" data-position="right" data-delay="50" data-tooltip="Ocultar">close</i>
    </div>
        
<!--     <div id="btn_informacion">Solicita Información 
      <span id="flecha_up" class="ocultar" >&#9668;</span> 
      <span id="flecha_down">&#9658;</span>
    </div> --> 
   

    <div id="form_informacion" class="ocultar">
      <div class="icon-block">
        <form class="col s12" action="#" method="POST" id="form_info">
          <label class="center" style="color: black;">
            <h6>¿Necesita más información sobre su programa de interés?</h6>
            <p class="center">Ingrese sus datos, un asesor se comunicará con usted.</p>
          </label>
          <div class="input-field col s12">
            <input name="nom" id="nombres_apellidos" type="text" class="validate" autocomplete="off" required>
            <label for="nombres_apellidos">* Nombres y Apellidos</label>
          </div>

          <div class="input-field col s6">
            <input name="cel" id="celular" type="number" class="validate" autocomplete="off" required>
            <label for="celular">* Celular</label>
          </div>

          <div class="input-field col s6">
            <input name="ema" id="email" type="email" class="validate" autocomplete="off" required>
            <label for="email">* Email</label>
          </div>

          <div class="input-field col s12">
            <select name="pro" id="programa" required>
            <option value="" disabled selected>Seleccione una...</option>
              <optgroup label="Pregrado">
              <?php
                foreach ($todos_programas_menu as $programa_menu) {
                  if($programa_menu->nivel_academico == "Profesional"){
                    ?>
                    <option value="<?= $programa_menu->id_mercadeo ?>"><?= $programa_menu->nombre_programa ?></option>
                    <?php
                  }
                }
              ?>
              </optgroup>

              <optgroup label="Posgrado">
              <?php
                foreach ($todos_programas_menu as $programa_menu) {
                  if($programa_menu->nivel_academico == "Posgrado"){
                    ?>
                    <option value="<?= $programa_menu->id_mercadeo ?>"><?= $programa_menu->nombre_programa ?></option>
                    <?php
                  }
                }
              ?>
              </optgroup>
            </select>
            <label>Programa de Interes</label>
          </div>

          <div class="input-field col s12">
            <div class="g-recaptcha" data-sitekey="6LdpHhMTAAAAAEdufQp1hh8N02SrSedKBS5ZRqul" data-callback="correctCaptcha"></div>
          </div>

          <div class="input-field col s12">
            <input type="checkbox" id="terminos" name="terminos" required /><label  id="terminos" for="terminos">
            Si autorizo el uso de los datos por parte de la Corporación Universitaria Republicana</label>
            <br><br>
          </div>                  

          <div class="input-field col s12">
            <input id="btn_form_info" type="submit" class="btn boton_urep" value="Enviar" disabled="">
            <br><br>
          </div>

        </form>
      </div>
    </div>
  </div>


</div>