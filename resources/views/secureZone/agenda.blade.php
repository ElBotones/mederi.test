<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vidalia | Cita nutricional</title>
    <link rel="icon" type="image/x-icon" href="../img/fav_icon.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- whatsapp CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Own CSS -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title></title>
</head>

<body>
    <!-- Bboton whats app -->
    <a href="https://api.whatsapp.com/send?phone=5217711304965&text=Hola%21%20Vidalia%20necesito%20una%20asesoría"
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!-- Botonera -->
    <header>
        <a href="#">
            <button id="btnGroupDrop1" type="button">
                <b>Reservar Cita</b>
            </button>
        </a>
        <a class="nav-item" id="btnGroupDrop1" type="button" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
            <b> {{ __('Logout') }} </b>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <a href="{{ route('welcome') }}"><img src="../img/logo_header.png" class="logo_header" id="logo_mobile"></a>
        <ul id="botonera">
            <li class="nav-item">
                <a href="{{ route('welcome') }}"><img src="../img/logo_header.png" class="logo_header"></a>
            </li>
            <li class="nav-item" class="boton_principal">
                <a class="nav-link" aria-current="page" href="{{ route('welcome') }}#Seccion_one">
                    <div class="botonera_header">Quienes somos</div>
                </a>
            </li>
            <li class="nav-item" class="boton_principal">
                <a class="nav-link" href="{{ route('welcome') }}#tercera_header" class="botonera_header">
                    <div class="botonera_header">Nuestros servicios</div>
                </a>
            </li>
            <li class="nav-item" class="boton_principal">
                <a class="nav-link" href="{{ route('welcome') }}#planes_precios" class="botonera_header">
                    <div class="botonera_header">Planes y precios</div>
                </a>
            </li>
            <li class="nav-item" class="boton_principal">
                <a class="nav-link" href="{{ route('welcome') }}#preguntas_frecuentes" class="botonera_header">
                    <div class="botonera_header">Preguntas frecuentes</div>
                </a>
            </li>
            <li class="nav-item" class="boton_principal">
                <a class="nav-link" href="{{ route('welcome') }}#contactanos" class="botonera_header">
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

    <!-- Principio del widget integrado de Calendly -->
    <div class="calendly-inline-widget" data-url="https://calendly.com/mederi?text_color=333333&primary_color=5dbfc3"
        style="min-width:320px;height:1000px; padding-top: 150px;"></div>
    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
    <!-- Final del widget integrado de Calendly -->


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
        <img src="../img/fav_icon.png">
    </div>
</footer>

</html>
