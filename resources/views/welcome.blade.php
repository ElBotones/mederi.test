<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/fav_icon.png') }}">
    <title>Mederi</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css
    html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe
    UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color
    Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid
    #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0
    1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0
    rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media
    (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media
    (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media
    (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media
    (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}*/

    </style>
    <!-- whatsapp CSS 
        -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Own CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

</head>

<body>
    <!-- Bboton whats app -->
    <a href="https://api.whatsapp.com/send?phone=5217711304965&text=Hola%21%20Mederi%20necesito%20una%20asesoría"
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!-- Botonera -->
    <header>
        <a href="{{route("login")}}">
            <button id="btnGroupDrop1" type="button">
                <b>Reservar Cita</b>
            </button>
        </a>
        <div>
            <img src="img/logo_header.png" class="logo_header" id="logo_mobile">
            <ul id="botonera">
                <li class="nav-item">
                    <a href="#"><img src="img/logo_header.png" class="logo_header"></a>
                </li>
                <li class="nav-item" class="boton_principal">
                    <a class="nav-link" aria-current="page" href="#Seccion_one">
                        <div class="botonera_header">Quienes somos</div>
                    </a>
                </li>
                <li class="nav-item" class="boton_principal">
                    <a class="nav-link" href="#tercera_header" class="botonera_header">
                        <div class="botonera_header">Nuestros servicios</div>
                    </a>
                </li>
                <li class="nav-item" class="boton_principal">
                    <a class="nav-link" href="#planes_precios" class="botonera_header">
                        <div class="botonera_header">Planes y precios</div>
                    </a>
                </li>
                <li class="nav-item" class="boton_principal">
                    <a class="nav-link" href="#preguntas_frecuentes" class="botonera_header">
                        <div class="botonera_header">Preguntas frecuentes</div>
                    </a>
                </li>
                <li class="nav-item" class="boton_principal">
                    <a class="nav-link" href="#contactanos" class="botonera_header">
                        <div class="botonera_header">Contáctanos</div>
                    </a>
                </li>
                <!-- <li class="nav-item" style="float:right; margin: 20px;">
                  <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Reservar Cita
                </button>
            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <li><a class="dropdown-item" href="pages/medic.html">Cita Médica</a></li>
                  <li><a class="dropdown-item" href="pages/nutriology.html">Cita Nutricional</a></li>
                  <li><a class="dropdown-item" href="pages/psicology.html">Cita Psicológica</a></li>
            </ul>
              </div>
              </li> -->
            </ul>
        </div>
        </div>
    </header>

    <!-- Primera Sección -->
    <div id="principal">
        <img src="img/principal.png" alt="vidalia" style="width:100%;">
        <div id="pleca_principal">
            <div id="pleca_principal_outline">
                Cuidamos de tú salud sin que tengas que salir de casa
            </div>
        </div>
    </div>

    <!-- Segunda sección -->
    <div class="pleca_verde" id="Seccion_one">
        <div id="pleca_verde_info">
            <h2>
                <b>Quienes somos</b>
            </h2>
            <p>
                <br>Somos un conjunto de médicos, nutriólogos y psicólogos con la misión de <b>facilitar asesoría y
                    seguimiento de calidad</b> en beneficio de tu salud por medio de video consultas y plataformas de
                mensajería
            </p>
        </div>
    </div>

    <!-- Tercera sección -->
    <div id="tercera_header">
        <h2>
            <b>Nuestros Servicios</b>
        </h2>
    </div>
    <div class="características caracteristicasdesktop ">
        <div class="caracteristicas_cont">
            <img src="img/qs_01.png">
            <p>Cada vez que lo requieras, sin límite de consultas, siempre tendrás un doctor los 365 días del año para
                atenderte.</p>
        </div>
        <div class="caracteristicas_cont">
            <img src="img/qs_02.png">
            <p> Te apoyaremos para que tú y tu familia tengan un cuidado correcto en enfermedades crónicas que puedan
                padecer.</p>
        </div>
        <div class="caracteristicas_cont">
            <img src="img/qs_03.png">
            <p>Nos interesa tu salud por eso ponemos a tu servicio asesoría nutricional sin costo extra dentro de tu
                paquete.</p>
        </div>
    </div>
    <div class="características caracteristicasdesktop">
        <div class="caracteristicas_cont">
            <img src="img/qs_04.png">
            <p>Lo sabemos, tener un control familiar es agotador, por eso nosotros nos encargamos del seguimiento
                mientras tú disfrutas de tu familia.</p>
        </div>
        <div class="caracteristicas_cont">
            <img src="img/qs_05.png">
            <p>La ilusión de un nuevo integrante en la familia es inmensa, por eso te asesoramos en los pasos que debes
                seguir en cuidados y revisiones.</p>
        </div>
        <div class="caracteristicas_cont">
            <img src="img/qs_06.png">
            <p>Todo nuestro servicio, seguimiento y asesorías lo facilitamos por medio de tecnologías de comunicación
                <br>que faciliten la atención desde cualquier ubicación del cliente.
            </p>
        </div>
    </div>

    <!-- Versión tablet -->
    <div class="características caracteristicastablet ">
        <div class="caracteristicas_cont">
            <img src="img/qs_01.png">
            <p>Cada vez que lo requieras, sin límite de consultas, siempre tendrás un doctor los 365 días del año para
                atenderte.</p>
        </div>
        <div class="caracteristicas_cont">
            <img src="img/qs_02.png">
            <p> Te apoyaremos para que tú y tu familia tengan un cuidado correcto en enfermedades crónicas que puedan
                padecer.</p>
        </div>
    </div>
    <div class="características caracteristicastablet ">
        <div class="caracteristicas_cont">
            <img src="img/qs_03.png">
            <p>Nos interesa tu salud por eso ponemos a tu servicio asesoría nutricional sin costo extra dentro de tu
                paquete.</p>
        </div>
        <div class="caracteristicas_cont">
            <img src="img/qs_04.png">
            <p>Lo sabemos, tener un control familiar es agotador, por eso nosotros nos encargamos del seguimiento
                mientras tú disfrutas de tu familia.</p>
        </div>
    </div>
    </div>
    <div class="características caracteristicastablet ">
        <div class="caracteristicas_cont">
            <img src="img/qs_05.png">
            <p>La ilusión de un nuevo integrante en la familia es inmensa, por eso te asesoramos en los pasos que debes
                seguir en cuidados y revisiones.</p>
        </div>
        <div class="caracteristicas_cont">
            <img src="img/qs_06.png">
            <p>Todo nuestro servicio, seguimiento y asesorías lo facilitamos por medio de tecnologías de comunicación
                <br>que faciliten la atención desde cualquier ubicación del cliente.
            </p>
        </div>
    </div>

    <!-- Cuarta sección -->
    <div class="pleca_verde_02" id="planes_precios">
        <div class="cuarta_header">
            <h2>
                <b>Planes y Precios</b>
            </h2>
        </div>
        <div class="características_02">
            <div class="caracteristicas_cont_02">
                <div class="paquete_header">
                    <h3>
                        <b>
                            Paquete Individual
                        </b>
                    </h3>
                </div>
                <div class="paquete_prec">
                    <b>$499</b><span class="paquete_prec_span"> / mes</span>
                </div>
                <div class="paquete_secc">
                    Videollamadas médicas ilimitadas
                </div>
                <div class="paquete_secc">
                    Videollamadas nutricionales ilimitadas
                </div>
                <div class="paquete_secc">
                    Videollamadas psicológicas ilimitadas
                </div>
                <div class="paquete_secc">
                    Asistente de salúd por whatsapp
                </div>
                <div class="paquete_bottom">
                    <button class="paquete_boton">
                        <a mp-mode="dftl"
                            href="https://www.mercadopago.com.mx/subscriptions/checkout?preapproval_plan_id=2c9380847d343c2e017d35689545008a"
                            name="MP-payButton" class='blue-ar-l-rn-none'>Suscribirme</a>
                        <script type="text/javascript">
                            (function() {
                                function $MPC_load() {
                                    window.$MPC_loaded !== true && (function() {
                                        var s = document.createElement("script");
                                        s.type = "text/javascript";
                                        s.async = true;
                                        s.src = document.location.protocol + "//secure.mlstatic.com/mptools/render.js";
                                        var x = document.getElementsByTagName('script')[0];
                                        x.parentNode.insertBefore(s, x);
                                        window.$MPC_loaded = true;
                                    })();
                                }
                                window.$MPC_loaded !== true ? (window.attachEvent ? window.attachEvent('onload', $MPC_load) : window
                                    .addEventListener('load', $MPC_load, false)) : null;
                            })();
                        </script>


                    </button>
                </div>
            </div>
            <div class="caracteristicas_cont_02">
                <div class="paquete_header">
                    <h3>
                        <b>
                            Paquete Familiar
                        </b>
                    </h3>
                </div>
                <div class="paquete_prec">
                    <b>$999</b><span class="paquete_prec_span"> / mes</span>
                </div>
                <div class="paquete_secc">
                    Servicio completo ilimitado para hasta 4 integrantes de tu familia
                </div>
                <div class="paquete_secc">
                    Videollamadas médicas ilimitadas
                </div>
                <div class="paquete_secc">
                    Videollamadas nutricionales ilimitadas
                </div>
                <div class="paquete_secc">
                    Videollamadas psicológicas ilimitadas
                </div>
                <div class="paquete_secc">
                    Asistente de salúd por whatsapp
                </div>
                <div class="paquete_bottom">
                    <button class="paquete_boton">
                        <a mp-mode="dftl"
                            href="https://www.mercadopago.com.mx/subscriptions/checkout?preapproval_plan_id=2c9380847d343c16017d356ec686008d"
                            name="MP-payButton" class='blue-ar-l-rn-none'>Suscribirme</a>
                        <script type="text/javascript">
                            (function() {
                                function $MPC_load() {
                                    window.$MPC_loaded !== true && (function() {
                                        var s = document.createElement("script");
                                        s.type = "text/javascript";
                                        s.async = true;
                                        s.src = document.location.protocol + "//secure.mlstatic.com/mptools/render.js";
                                        var x = document.getElementsByTagName('script')[0];
                                        x.parentNode.insertBefore(s, x);
                                        window.$MPC_loaded = true;
                                    })();
                                }
                                window.$MPC_loaded !== true ? (window.attachEvent ? window.attachEvent('onload', $MPC_load) : window
                                    .addEventListener('load', $MPC_load, false)) : null;
                            })();
                        </script>


                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tercera sección -->
    <div id="preguntas_frecuentes"></div>
    <div id="tercera_header">
        <h2>
            <b>Preguntas frecuentes</b>
        </h2>
    </div>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    ¿Qué es Mederi?
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Es una empresa 100% mexicana creada con el fin de cuidar y velar por la
                    salud de nuestros pacientes de forma integral (medicina, nutrición y psicología) aprovechando la
                    tecnología para la atención a distancia.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    ¿Qué servicios ofrecemos?
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Ofrecemos el cuidado y seguimiento de tu salud de primer contacto por medio
                    de asesorías ilimitadas de medicina, nutrición y psicología de manera interconectadas para
                    garantizar un bienestar integral en la salud de nuestros pacientes.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    ¿Cómo funciona?
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">De acuerdo al plan que elijas estarás recibiendo un seguimiento constante de
                    tu salud por medio de orientación medica, nutricional y psicológica de acuerdo a la evaluación y
                    evolución de tu salud, además, tendrás asesoría y acompañamiento constante a través de WhatsApp y
                    correo.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    ¿Cómo puedo tomar una videoconsulta?
                </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Sencillo, solo necesitas acceso a un dispositivo móvil, tablet o computadora
                    con acceso a internet y seguir los siguientes pasos:
                    <ol>
                        <li>
                            Elige el plan que mejor se adecué a tus necesidades
                        </li>
                        <li>
                            Entra al calendario desde tu usuario y agenda tu consulta (médica, nutricional o
                            psicológica) en la fecha y hora que mejor se adapte a ti.
                        </li>
                        <li>
                            Cercana a tu fecha y hora de consulta te brindaremos vía sms y correo un acceso a meet o
                            zoom de acuerdo a tus preferencias seleccionadas.
                        </li>
                        <li>
                            Accede a tu consulta con la liga brindada y disfruta de mantener una vida saludable de la
                            mano de Mederi.
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    ¿Cómo los contacto?
                </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Muy fácil, simplemente escríbenos por medio de <a
                        href="https://api.whatsapp.com/send?phone=5217711304965&text=Hola%21%20Mederi%20necesito%20una%20asesoría"
                        target="_blank">WhatsApp al número 771 130 4965</a> o escríbenos a través de nuestra <a
                        href="#contactanos">plataforma de contacto.</a></div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    ¿Hasta donde llega la cobertura de Vidalia?
                </button>
            </h2>
            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingsix"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Al ser una empresa mexicana solo nos pueden contratar residentes de este
                    país, sin embargo, la cobertura y seguimiento de la salud que ofrecemos una vez contratado el
                    servicio es global los 365 días del año.</div>
            </div>
        </div>
    </div>

    <div class="pleca_verde_03" id="contactanos">
        <div class="cuarta_header">
            <h2>
                <b>Contáctanos</b>
            </h2>
        </div>
        <div class="container">
            <form method="POST" action="php/sendEmail.php">
                <label for="name">Nombre completo</label>
                <input type="text" id="name" name="name" placeholder="Escribe tu nombre">

                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Escribe tu correo electrónico">

                <label for="phone">Teléfono celular</label>
                <input type="text" id="phone" name="phone" placeholder="Escribe tu número de teléfono celular">

                <label for="message">¿Como podemos ayudarte?</label>
                <textarea id="message" name="message" placeholder="Explicanos como te podemos ayudar"
                    style="height:200px"></textarea>
                <input type="submit" value="Contactar">
            </form>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
                integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>
        -->
</body>
<footer>
    <div>
        <b>
            <p>Cuidamos de tu salud sin que tengas que salir de casa!</p>
        </b>
        <p>Teléfono: +52 1 771 130 4965 | email: vidalia.mexico@gmail.com</p>
    </div>
    <div>
        <img src="img/fav_icon.png">
    </div>
</footer>

</html>
