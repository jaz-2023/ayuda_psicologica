<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Ayuda Psicológica para Personas con Depresión</title>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>

</head>

<body>



  <!--========================================================== -->
  <!-- Menu -->
  <!--========================================================== -->
  <nav class="navbar  fixed-top navbar-expand-lg  navbar-light" style="background-color: #054c7f;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <img src="images/icons/logo.png" alt="" class="d-inline-block align-text-top">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white h5" href="#">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white h5" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Sobre la depresion
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#Que_es">¿Que es la depresion?</a></li>
              <li><a class="dropdown-item" href="#Sintomas">Sintomas</a></li>
              <li><a class="dropdown-item" href="#Tipos">Tipos</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white h5" href="#provoca">Que lo provoca</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white h5" href="#riesgo">Factores de riesgo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white h5" href="#consejos">Consejos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white h5" href="#telefonos">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--========================================================== -->
  <!-- CARRUCEL DE IMAGENES-->
  <!--========================================================== -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="images/carrusel/slide1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="images/carrusel/slide2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="images/carrusel/slide3.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>


  <main>
    <!--========================================================== -->
    <!-- Que es la depresion -->
    <!--========================================================== -->
    <section id="Que_es">
      <div class="card text-dark bg-light mb-3" style="max-width: 100rem;">
        <div class="card-body">
          <h5 class="card-title">¿Qué es la depresión?</h5>
          <p class="card-text">La depresión es una enfermedad que afecta a casi una quinta parte de la población
            mundial, tiende a la
            cronicidad, genera una importante discapacidad, empeora el pronóstico de otras enfermedades y está
            relacionada con un número significativo de suicidios. Por todos estos motivos, es muy importante
            realizar un correcto diagnóstico de la depresión y ofrecer tratamientos eficaces. Si además de eficaz, el
            tratamiento se inicia con prontitud el pronóstico de la depresión va a ser mejor.</p>
          <p class="card-text">Es un trastorno mental caracterizado fundamentalmente por un bajo estado de ánimo y
            sentimientos de
            tristeza, asociados a alteraciones del comportamiento, del grado de actividad y del pensamiento.</p>
          <p class="card-text">Supone una de las patologías más frecuentes en Atención Primaria y es la primera causa de
            atención
            psiquiátrica y de discapacidad derivada de problemas mentales.</p>
          <p class="card-text">Aparece con más frecuencia en mujeres y en personas menores de 45 años.</p>
          <p class="card-text">El tratamiento con psicofármacos y/o psicoterapia, consiguen, en la mayoría de los casos,
            aliviar
            parcialmente o en su totalidad los síntomas. Una vez se han superado los síntomas de la depresión,
            convendrá seguir bajo tratamiento antidepresivo el tiempo necesario para evitar posibles recaídas. En
            algunos casos, el tratamiento deberá prolongarse de por vida.</p>
        </div>
      </div>
    </section>

    <!--========================================================== -->
    <!-- Sintomas de la depresion -->
    <!--========================================================== -->

    <section id="Sintomas">
      <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/imagen1.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">¿Cuáles son los síntomas de la depresión?</h5>
              <p class="card-text">Los síntomas más habituales son:</p>
              <p class="card-text">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Sentimiento persistente de tristeza, ansiedad, vacío, desesperanza y
                  pesimismo.</li>
                <li class="list-group-item">Sentimiento de culpa, inutilidad o impotencia.</li>
                <li class="list-group-item">Irritabilidad o inquietud.</li>
                <li class="list-group-item">Pérdida de confianza en uno mismo y/o en los demás.</li>
                <li class="list-group-item">Pérdida de interés en las actividades o pasatiempos habituales de los que
                  antes disfrutaba,
                  incluso de las relaciones sexuales.</li>
                <li class="list-group-item">Pérdida de la libido y del interés en las relaciones sexuales.</li>
                <li class="list-group-item">Pérdida de la capacidad de disfrutar.</li>
                <li class="list-group-item">Cansancio exagerado, incluso después de pequeños esfuerzos, y falta de
                  energía.</li>
                <li class="list-group-item">Disminución de la capacidad para concentrarse, recordar detalles y tomar
                  decisiones.</li>
                <li class="list-group-item">Insomnio, despertar muy temprano, o dormir demasiado.</li>
                <li class="list-group-item">Pérdida de apetito o comer de manera excesiva.</li>
                <li class="list-group-item">Ideas de muerte o intentos de suicidio.</li>
                <li class="list-group-item">Dolores y malestares persistentes: dolores de cabeza, cólicos o problemas
                  digestivos que no se
                  alivian incluso con tratamiento.</li>
              </ul>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--========================================================== -->
    <!-- tipos de depresion -->
    <!--========================================================== -->
    <section id="Tipos">
      <h3>¿Qué tipos de depresión existen?</h3>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              Trastorno depresivo grave o depresión grave
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              se caracteriza por una combinación de síntomas que
              interfieren con la capacidad para trabajar, dormir, estudiar, comer, y disfrutar de las actividades que
              antes resultaban placenteras. La depresión grave incapacita a la persona y le impide desenvolverse con
              normalidad. Puede suceder una sola vez, pero normalmente se repite a lo largo de la vida.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Trastorno distímico o distimia
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              sus síntomas duran dos o más años y, aunque no incapacitan
              necesariamente a la persona, sí le impiden desarrollar una vida normal o sentirse bien. Las personas con
              distimia también pueden padecer uno o más episodios de depresión grave a lo largo de sus vidas. Se
              trata también una de las formas más comunes de depresión.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Depresión psicótica
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              cuando una enfermedad depresiva grave está acompañada por alguna forma de
              psicosis, como ruptura con la realidad, alucinaciones o delirios.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
              Depresión postparto
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              nos referimos a esta tipología cuando mujer sufre un episodio de depresión grave
              dentro del primer mes después del parto. Se trata de una patología frecuente, puesto que afecta a entre
              al 10% y el 15% de las madres.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
              Trastorno afectivo estacional
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              aparece durante el invierno, cuando disminuyen las horas de luz solar, y
              suele desaparecer en primavera y verano.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
              Trastorno bipolar o enfermedad maníaco-depresiva:
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              se caracteriza por cambios cíclicos en el estado de
              ánimo, que puede oscilar de momentos de alegría extrema o máxima energía (por ejemplo, manía) a
              estados de ánimo muy bajos (por ejemplo, depresión) y viceversa. No es tan común como la distimia y la
              depresión grave.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--========================================================== -->
    <!-- Que provoca la depresion -->
    <!--========================================================== -->
    <section id="provoca">
      <div class="card text-dark bg-light mb-3" style="max-width: 100rem;">
        <div class="row g-0">
          <div class="col-md-9">
            <div class="card-body">
              <h5 class="card-title">¿Qué provoca la depresión?</h5>
              <p class="card-text">Las razones por las que uno se deprime pueden ser obvias o todo lo contrario.
                Igualmente,
                puede existir
                un solo motivo o varios. En realidad, no existe una causa única conocida de la depresión. Más bien, esta
                parece ser el resultado de una combinación de factores genéticos, bioquímicos, y psicológicos.</p>
              <p class="card-text">Por ejemplo, sufrir un episodio traumático, la pérdida de un ser querido, atravesar
                por
                una relación
                dificultosa, o cualquier situación estresante puede provocar un episodio de depresión, y también
                pueden darse episodios de depresión subsiguientes sin una provocación evidente.</p>
              <p class="card-text">Según la Clínica Universidad de Navarra, este trastorno se produce generalmente por
                la
                interacción de
                factores biológicos (cambios hormonales, alteraciones en los neurotransmisores cerebrales como la
                serotonina, la noradrenalina y la dopamina, componentes genéticos, etc.) con factores psicosociales
                (circunstancias estresantes en la vida afectiva, laboral o de relación) y de personalidad
                (especialmente,
                sus mecanismos de defensa psicológicos)</p>
            </div>
          </div>
          <div class="col-md-3">
            <img src="images/imagen2.jpeg" class="img-fluid rounded-start" alt="...">
          </div>
        </div>
      </div>
    </section>

    <!--========================================================== -->
    <!-- ¿Cuáles son sus factores de riesgo? -->
    <!--========================================================== -->

    <section class="w-100" id="riesgo">
      <h3>¿Cuáles son sus factores de riesgo?</h3>
      <div class="row w-75 mx-auto" id="servicios-fila-1">
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
          <img src="images/riesgos/genero.png" alt="desarrollo" width="180" height="160">
          <div>
            <h3 class="fs-5 mt-4 px-4 pb-1">Género</h3>
            <p class="px-4">estadísticamente, la depresión es dos veces más frecuente en mujeres que en
              hombres. Esta circunstancia puede deberse a diferencias genéticas u hormonales, o a que ellas sufren en
              general más
              estrés emocional o a que los hombres tienden a no admitir o a reprimir sus sentimientos.</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
          <img src="images/riesgos/familia.png" alt="concepto" width="180" height="160">
          <div>
            <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Antecedentes familiares</h3>
            <p class="px-4">según la Mental Health America, los antecedentes familiares duplican el riesgo
              de sufrir depresión severa, por lo que parece existir un componente genético en la aparición de este
              trastorno. No obstante, puede padecerse depresión sin tener parientes con esta enfermedad.</p>
          </div>
        </div>
      </div>

      <div class="row w-75 mx-auto mb-5" id="servicios-fila-2">
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
          <img src="images/riesgos/problemasvida.png" alt="comunicaciones" width="180" height="160">

          <div>
            <h3 class="fs-5 mt-4 px-4 pb-1">Problemas de la vida</h3>
            <p class="px-4">por ejemplo, la pérdida de algo o alguien y el duelo que ello provoca, e incluso un
              divorcio o un despido aumentan el riesgo de padecer depresión. Cambios como la jubilación, el
              incremento en la pobreza, un nuevo país o ciudad o el nacimiento de un hijo pueden provocarla.</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
          <img src="images/riesgos/prohibido.png" alt="seo" width="180" height="160">

          <div>
            <h3 class="fs-5 mt-4 px-4 pb-1">Abuso del alcohol o drogas</h3>
            <p class="px-4">los problemas o excesos con estas sustancias aumentan el riesgo de
              padecer depresión, pero también puede ocurrir que una persona haya llegado a ser adicta al alcohol o
              las drogas como consecuencia de una depresión subyacente.</p>
          </div>
        </div>

      </div>

      <div class="row w-75 mx-auto mb-5" id="servicios-fila-2">
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
          <img src="images/riesgos/enfermedad.png" alt="comunicaciones" width="180" height="160">

          <div>
            <h3 class="fs-5 mt-4 px-4 pb-1">Enfermedades físicas</h3>
            <p class="px-4">por ejemplo, el Alzheimer, el cáncer, la diabetes, afecciones del corazón,
              desórdenes hormonales, mal de Parkinson o trombosis, al igual que otros trastornos mentales como la
              ansiedad o trastornos de la alimentación.</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
          <img src="images/riesgos/circustancias.png" alt="seo" width="180" height="160">

          <div>
            <h3 class="fs-5 mt-4 px-4 pb-1">Las circunstancias</h3>
            <p class="px-4">el cansancio físico o la soledad influyen también en este trastorno.</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
          <img src="images/riesgos/drogas.png" alt="seo" width="180" height="160">

          <div>
            <h3 class="fs-5 mt-4 px-4 pb-1">Determinados medicamentos</h3>
            <p class="px-4">algunas medicinas pueden provocar depresión clínica como efecto secundario.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--========================================================== -->
    <!-- ¿Consejos para afrontar una depresión? -->
    <!--========================================================== -->
    <div class="card" id="consejos">
      <img src="images/imagen3.png" class="img-fluid" alt="...">
    </div>

    <br />

    <section>
      <div class="card">
        <h3>Consejos para afrontar una depresión</h3>
        <p>Para afrontar una depresión es necesario cuidar la mente, pero también el cuerpo. Algunas de las siguientes
          recomendaciones pueden ser útiles a la hora de superar esta enfermedad:
        </p>
        <div class="container">
          <div class="row">


            <div class="col">

              <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header" style="font-weight: bold;">1. Habla y desahógate</div>
                <div class="card-body">
                  <p class="card-text">Elige a un amigo/a o familiar de confianza como confidente, y cuéntale cómo te
                    sientes. Pero ten en cuenta que ellos sufren por ti, por lo que es importante que busques a un
                    profesional sanitario o psicólogo para que intente ayudarte.
                  </p>
                </div>
              </div>

              <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header" style="font-weight: bold;">4. Piensa en positivo</div>
                <div class="card-body">
                  <p class="card-text">Mantén la esperanza, muchísimas personas han superado este problema. Plantéate
                    metas realistas y no seas impaciente: la depresión no desaparecerá de manera súbita, sino que, poco
                    a poco, los pensamientos positivos irán reemplazando a los negativos.
                  </p>
                </div>
              </div>

              <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header" style="font-weight: bold;">7. Come y duerme bien</div>
                <div class="card-body">
                  <p class="card-text">Aunque no sientas apetito, no descuides lo que comes. Una dieta variada y
                    equilibrada, rica en frutas y verduras, te hará sentirte más fuerte. Así mismo, mantener unos
                    horarios regulares de sueño te ayudará a sentirte más reposado. Si no logras conciliar el sueño,
                    acuéstate igualmente y escucha la radio o ve la televisión, al menos tu cuerpo descansará.
                    Frecuentemente, durante el tratamiento de la depresión, el sueño y el apetito comenzarán a mejorar
                    antes de que su estado de ánimo deprimido desaparezca.
                  </p>
                </div>
              </div>

              <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header" style="font-weight: bold;">10.Sé tolerante contigo</div>
                <div class="card-body">
                  <p class="card-text">No te sientas culpable por estar deprimido, ni vivas recriminándote a ti mismo
                    por las consecuencias de tus actos o tus decisiones. Enfoca tu atención en los éxitos que has
                    cultivado y en el aprendizaje que has adquirido como producto de tus fracasos.
                  </p>
                </div>
              </div>
            </div>

            <div class="col">

              <div class="card mb-3" style="max-width: 18rem;">
                <img src="images/consejos/hablar.png" alt="...">
              </div>

              <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header" style="font-weight: bold;">5. No te encierres en ti mismo</div>
                <div class="card-body">
                  <p class="card-text">No te aísles. Aunque no tengas muchas ganas, intenta seguir relacionándote con
                    tus amigos o familiares, pasa tiempo con ellos y mantén tus actividades de ocio habituales siempre
                    que sea posible. Seguir activo te ayudará a conservar una actitud positiva.
                  </p>
                </div>
              </div>

              <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header" style="font-weight: bold;">8. Intenta evitar el estrés</div>
                <div class="card-body">
                  <p class="card-text">En el día a día, clasifica las tareas en grandes y pequeñas y establece
                    prioridades para cometer lo que tienes que hacer sin agobiarte. Recuerda que no pasa nada si no
                    llegas a todo.
                  </p>
                </div>
              </div>

              <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header" style="font-weight: bold;">11. No obedezcas esa “voz de la depresión”</div>
                <div class="card-body">
                  <p class="card-text">La voz negativa e irracional en tu cabeza puede fácilmente disuadirte de hacer
                    cualquier cosa que suba tu estado de ánimo. Por ello, uno de nuestros mejores consejos para superar
                    una depresión es aprender a reconocer que este trastorno te está tentando a sufrir una recaída y la
                    solución es hacer todo lo contrario a lo que te diga.
                  </p>
                </div>
              </div>

            </div>

            <div class="col">

              <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header" style="font-weight: bold;">2. No tomes decisiones precipitadas</div>
                <div class="card-body">
                  <p class="card-text">Aplaza las decisiones importantes, como puede ser un divorcio, un cambio de
                    empleo o contraer matrimonio, hasta que te sientas mejor. Y de nuevo, habla sobre ellas con otras
                    personas que conozcan y tengan una visión objetiva de la situación. Otra opción es escribir en un
                    papel cómo te sientes o qué te preocupa: expresarlo en palabras te ayudará reflexionar sobre ello y
                    a ponerlo en perspectiva.
                  </p>
                </div>
              </div>

              <!--
              <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header" style="font-weight: bold;">3. Sé sincero</div>
                <div class="card-body">
                  <p class="card-text">Tanto contigo mismo como con el profesional que te ayude a afrontar tu depresión.
                    No temas contarle tus preocupaciones y miedos ni preguntarle todo lo que necesites. Exprésale de
                    manera franca todo lo que sientes, porque así podrá ayudarte mejor.
                  </p>
                </div>
              </div>
            -->

              <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header" style="font-weight: bold;">6. Muévete</div>
                <div class="card-body">
                  <p class="card-text">Haz deporte, da un paseo o practica otro tipo de actividades de ocio -como ir al
                    cine o participar en eventos sociales- con las que antes disfrutaras. Respirar aire puro y el
                    movimiento te ayudarán a sentirte mejor física y emocionalmente. También es muy aconsejable que
                    alguna de estas actividades sea en compañía.
                  </p>
                </div>
              </div>

              <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header" style="font-weight: bold;">9. No abuses del alcohol u otras drogas</div>
                <div class="card-body">
                  <p class="card-text">No caigas en la tentación de recurrir al alcohol o a otras drogas para sentirte
                    mejor, pues, una vez se haya disipado el efecto de relajación o euforia que provocan estas
                    sustancias, los sentimientos de tristeza y desesperanza se volverán más intensos.
                  </p>
                </div>
              </div>

              <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header" style="font-weight: bold;">12. Establece metas alcanzables</div>
                <div class="card-body">
                  <p class="card-text">Hacer una lista de tareas por hacer puede ser muy tedioso y seguramente
                    terminarás optando por no hacer nada. Entonces ¿por qué no fijar uno o dos objetivos pequeños? El
                    efecto será mucho mejor.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </section>

    <!--========================================================== -->
    <!-- Lineas de ayuda telefonica -->
    <!--========================================================== -->
    <section id="telefonos" class="w-100">

      <div class="container">
        <div class="row">

          <div class="col">

            <div class="card" style="max-width: 540px;">
              <div class="row g-0" style="height: 396px;">
                <div class="col-md-2">
                  <img src="images/lineasAtencion.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-10">
                  <div class="card-body">
                    <h5><b>Líneas de ayuda Telefónica
                        En Bogotá:</b></h5>
                    <ul>
                      <li>Línea 106 y su chat 300 754 8933</li>
                      <li>Línea Psicoactiva 01 8000 112 439</li>
                      <li>Línea Calma 01 8000 423 614</li>
                    </ul>
                    <h5><b>A nivel Nacional</b></h5>
                    <ul>
                      <li>Línea: 192, opción 4</li>
                    </ul>
                    Descargar PDF para más información en diferentes ciudades
                    <a href="files/directorio-salud-mental.pdf" download="DirecorioSaludMental">
                      Descargar Archivo
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">

            <div class="card" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                <h2><i class="bi  bi-person-lines-fill"></i> Contáctanos</h2>
                <p>Si requieres ayuda o asesoria frente a tu estado de salud mental, contáctanos.</p>
                <form action="" method="POST">
                  <?php 
                  include("bd/conexionbd.php");
                  include("form/contacto.php")
                ?>
                  <input type="text" id="nombre" name="nombre" placeholder="nombre" required>
                  <input type="email" id="correo" name="correo" placeholder="correo" required>
                  <input type="number" id="celular" name="celular" placeholder="numero de celular"
                    required>
                  <label for="mensaje">Mensaje:</label>
                  <textarea id="mensaje" name="mensaje" required></textarea>

                  <input type="submit" value="Enviar" name="Enviar">
                </form>
              </div>
            </div>
            </div>
          </div>

        </div>
      </div>



      <!--========================================================== -->
      <!-- contactanos -->
      <!--========================================================== -->

    </section>

    <section>
      Recursos y Programas de ayuda en Bogotá y a nivel nacional.
    </section>


  </main>

  <footer>
    <p>Derechos de autor &copy; 2023 Ayuda Psicológica para Personas con Depresión</p>
  </footer>
</body>

</html>