<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Touch 3.0 &mdash; Citas y más</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/master.css">
  </head>

  <style media="screen">
  body {
    background-image:url('images/fondo.jpg');
    background-size:contain;
    }

  .user_card {
    height: 400px;
    width: 350px;
    margin-top: auto;
    margin-bottom: auto;
    background: LightCyan;
    position: relative;
    display: flex;
    justify-content: center;
    flex-direction: column;
    padding: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 5px;

  }
  .brand_logo_container {
    position: absolute;
    height: 170px;
    width: 170px;
    top: -75px;
    border-radius: 50%;
    background: white;
    padding: 10px;
    text-align: center;
  }
  .brand_logo {
    height: 150px;
    width: 150px;
    border-radius: 50%;
    border: 2px solid white;
  }
  .form_container {
    margin-top: 100px;
  }
  .login_btn {
    width: 100%;
    background: #c0392b !important;
    color: white !important;
  }
  .login_btn:focus {
    box-shadow: none !important;
    outline: 0px !important;
  }
  .login_container {
    padding: 0 2rem;
  }
  .input-group-text {
    background: #c0392b !important;
    color: white !important;
    border: 0 !important;
    border-radius: 0.25rem 0 0 0.25rem !important;
  }
  .input_user,
  .input_pass:focus {
    box-shadow: none !important;
    outline: 0px !important;
  }
  .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
    background-color: #c0392b !important;
  }
  </style>
  <body>
<!-- menu de navegacion -->
    <header class="p-2" style="background-color:rgba(0,0,0,0.8);">
      <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="col-lg-4">
          <a class="marca navbar-brand" href="#"><h1>Touch 3.0</h1></a>
          <div class="d-flex justify-content-end">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </div>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">

          <ul class="navbar-nav mr-auto">
            <li class="nav-item h5">
              <a class="nav-link active" href="#">Nosotros</a>
            </li>
            <li class="nav-item h5">
              <a class="nav-link active" href="#">Preguntas frecuentes</a>
            </li>
            <li class="nav-item h5">
              <a class="nav-link active" href="#">Testimonios</a>
            </li>
          </ul>
          <div class="p-2">
            <button class="btn btn-outline-light my-2 my-sm-0" type="button">Registrarse</button>
          </div>

        </div>
      </nav>
    </header>
    <!-- login -->
    <section class="p-2" style="background-color:rgba(0,0,0,0.8);">
      <div class="container h-100 mt-">
    		<div class="d-flex justify-content-center h-100">
    			<div class="user_card mt-5 mb-5">
    				<div class="d-flex justify-content-center">
    					<div class="brand_logo_container">
    						<img src="images/logo.jpg" class="brand_logo" alt="Logo">
    					</div>
    				</div>
    				<div class="d-flex justify-content-center form_container">
    					<form>
    						<div class="input-group mb-3">
    							<div class="input-group-append">
    								<span class="input-group-text"><i class="fas fa-user"></i></span>
    							</div>
    							<input type="text" name="" class="form-control input_user" value="" placeholder="username">
    						</div>
    						<div class="input-group mb-2">
    							<div class="input-group-append">
    								<span class="input-group-text"><i class="fas fa-key"></i></span>
    							</div>
    							<input type="password" name="" class="form-control input_pass" value="" placeholder="password">
    						</div>
    						<div class="form-group">
    							<div class="custom-control custom-checkbox">
    								<input type="checkbox" class="custom-control-input" id="customControlInline">
    								<label class="custom-control-label" for="customControlInline">Recuerdame</label>
    							</div>
    						</div>
    							<div class="d-flex justify-content-center mt-3 login_container">
    				 	<button type="button" name="button" class="btn login_btn">Inicar Sesion</button>
    				   </div>
    					</form>
    				</div>

    				<div class="mt-4">
    					<div class="d-flex justify-content-center links">
    						¿No tenés cuenta? <a href="#" class="ml-2">Registrate</a>
    					</div>
    					<div class="d-flex justify-content-center links">
    						<a href="#">¿Olvidaste tu contraseña?</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- Testimonios -->
    <section class="" style="background-color:LightSteelBlue">
      <style media="screen">



        @font-face {
        font-family: PermanentMarker-Regular;
        src: url(fonts/PermanentMarker-Regular.ttf);
        }
        h4{
          font-family: PermanentMarker-Regular;
          font-weight: bold;
        }
      </style>
      <div class="container-fluid row">
        <div class="col-sm-12 col-md-6 col-lg-3 text-center p-3">
            <img class="rounded-circle mt-5" src="images/angelina.jpg" width="180">
            <h4 class="mt-4">Angelina Jolie</h4>

            <p class= "text-dark p-2 m-3">
               “En Touch 3.0 hay muchas personas en la misma que yo. Soy de EEUU y ahora me encuentro estudiando en Buenos Aires, gracias a esta aplicacion pude hacer  amigos y amigas para no aburrirme y salir a divertirme los fines de semana...y no descarto conocer al amor de mi vida!!”.
            </p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 text-center p-3">
            <img class="rounded-circle mt-5" src="images/susana.jpeg" width="180">
            <h4 class="mt-4">Susana Gimenez</h4>

            <p class= "text-dark p-2 m-3">
               "Al principio tenia mis prejuicios con este tipo de aplicaciones, luego una amiga me la recomendo y ahora no puedo parar ...me encanta!! Es una app que me permite conocer personas con mucha seguridad,sin tener que recibir correos fuera de lugar o malintencionados, en fin, la super recomiendo!!"
            </p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 text-center p-3">
          <img class="rounded-circle mt-5" src="images/mirtha.jpg" width="180">
          <h4 class="mt-4">Mirtha Legrand</h4>

          <p class= "text-dark p-2 m-3">
             “Cuando dije que me retiraba pensé... tengo cuerda para rato. Así que me registré en Touch 3.0 y me reencontré con gente de mi target: Tutankamon, Pedro Picapiedra, entre otros”
          </p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 text-center p-3">
          <img class="rounded-circle mt-5" src="images/guillermo.png" width="180">
          <h4 class="mt-4">Guillermo Andino</h4>

          <p class= "text-dark p-2 m-3">
             “Encontré amistades, algo que hacia mucho tiempo no encontraba, debido a mi  exigente trabajo, tambien me permitio lograr una compañía virtual a cada lado que voy, y también algo de romance, jaja.”
          </p>
        </div>
      </div>

    </section>
    <section class="pb-5" style="background-color:MidnightBlue">
      <div class="row container-fluid">
        <style media="screen">
        @font-face {
        font-family: DancingScript-Bold;
        src: url(fonts/DancingScript-Bold.ttf);
        }
        @font-face {
        font-family: Pacifico-Regular;
        src: url(fonts/Pacifico-Regular.ttf);
        }
        @font-face {
        font-family: IndieFlower-Regular;
        src: url(fonts/IndieFlower-Regular.ttf);
        }
        @font-face {
        font-family: ShadowsIntoLight-Regular;
        src: url(fonts/ShadowsIntoLight-Regular.ttf);
        }
        @font-face {
        font-family: GentiumBookBasic-Bold;
        src: url(fonts/GentiumBookBasic-Bold.ttf);
        }

        .marca{
          font-family: DancingScript-Bold;
        }
        .seguinos{
          font-family: Pacifico-Regular;
        }
        .actualiza{
          font-family: GentiumBookBasic-Bold;
        }
        </style>
        <div class="col-lg-4 text-light text-justify">
          <h1 class="marca p-2">Touch 3.0</h1>
              <p class="p-2">Probá conocer hombre y mujeres solos y solas en Touch 3.0, el mayor sitio de citas para buscar pareja y encuentros online de Argentina. En Touch 3.0 estás a un clic de encontrar solos y solas en tu ciudad para iniciar una relación seria o para vivir una aventura romántica. Touch 3.0 cuenta con un servicio de chat y buscador que te permitirán encontrar pareja y concretar citas online de acuerdo a tus intereses y gustos. Miles de mujeres y hombres de Latinoamérica han buscado pareja e iniciaron una relación a partir de nuestro sitio de citas online. Empezá ahora a conocer gente y descubrí la diversión del online dating!.</p>
        </div>
        <div class="col-lg-4 text-light text-justify">
          <h2 class="seguinos p-2 mt-5 text-center">Seguinos</h2>
            <p class="p-2">No pierdas la oportunidad de estar conectado a Touch 3.0 desde cualquier red social. Segui a todos tus contactos desde cualquier plataforma,para que ellos tambien puedan estar comunicados con vos!!
            Podes armar grupos en Facebook, Twitter, Linkedin y Pinterest!! Tambien es una manera de dar seguridad en ambas partes en el momento de una "cita a ciegas".</p>

            <div class="redes text-center">
              <a href="https://es-la.facebook.com"><i class="fab fa-facebook-square h1 p-2"></i></a>
              <a href="https://twitter.com/login?lang=es"><i class="fab fa-twitter h1 p-2"></i></a>
              <a href="https://www.linkedin.com"><i class="fab fa-linkedin h1 p-2"></i></a>
              <a href="https://ar.pinterest.com"><i class="fab fa-pinterest h1 p-2"></i></a>
            </div>

        </div>
        <div class="col-lg-4 text-light text-justify">
          <h2 class="actualiza p-2 mt-5 text-center">Actualización permanente</h2>
            <p class="p-2">Touch 3.0 es un equipo de profesionales que actualiza su informacion constantemente y notifica a todos sus usuarios para que puedan estar al tanto de ellas y poder disfrutar de todo lo que brinda la app. Siempre a la vanguardia en lo que respecta a las citas on line, para que puedas navegar, chatear, compartir y conocer con la maxima seguridad posible a esa persona que te espera del otro lado.</p>
            <div class="text-center">
              <form class="" action="#" method="post">
                <input type="text" name="letter" value="" size="20"><br>
                <button class="btn btn-danger mt-2" type="submit" name="button">Suscribete</button>
              </form>
            </div>
        </div>
      </div>
    </section>
    <footer class="container-fluid text-center pb-1 pt-3" style="background-color:black">
        <a class="text-white pt-3 m-3" href="">Nosotros</a>
        <a class="text-white pt-3 m-3" href="">Testimonios</a>
        <a class="text-white pt-3 m-3" href="">Seguridad</a>
        <a class="text-white pt-3 m-3" href="">Sugerencias</a>
        <a class="text-white pt-3 m-3" href="">Datos</a>
        <p class="footer-bottom-text mt-2">Todos los derechos reservados por ©Touch3.0</p>
    </footer>
    <script type="text/javascript">

    </script>
    <script src="js/jquery.js"type="text/javascript"></script>
    <script src="js/bootstrap.js"type="text/javascript"></script>
    <script src="js/bs-custom-file-input.js"type="text/javascript"></script>
    <script src="js/sweetalert2.all.min.js"></script>
  </body>
</html>
