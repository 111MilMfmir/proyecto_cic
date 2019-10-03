<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Link de tipografia-->
    <link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet">

  </head>
  <body>


    <header class="container">

          <label for="show-menu" class="show-menu">Menu</label>
    <input type="checkbox" id="show-menu" role="button">

    <ul id="menu">
        <li><a href="index.html">Pagina principal</a></li>
        <li><a href="login.php">Ingresar</a></li>
        <li><a href="registro.php">Registrarse</a></li>
        <li><a href="#">Productos</a>
          <ul class="hidden">
            <li><a href="#">Notbooks</a></li>
            <li><a href="#">Netbooks</a></li>
            <li><a href="#">Pc's PreArmadas</a></li>
            <li><a href="#">Xbox</a></li>
            <li><a href="#">PlayStation</a></li>
            <li><a href="#">HardWare</a>
              <ul class="hidden">
                  <li><a href="#">Placa Madre</a></li>
                  <li><a href="#">Placa de video</a></li>
                  <li><a href="#">Procesador(CPU)</a></li>
                  <li><a href="#">Memorais RAM</a></li>
                  <li><a href="#">Fuente</a></li>
              </ul>
          </li>
          </ul>
        </li>
        <li><a href="pregunta.html">FAQ</a></li>
        <li class="buscar">
            <input type="text" name="buscarr">
            <button type="submit">Buscar</button>
        </li>
    </ul>

    </header>


    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <center>
          <div class="caja">
            <h2>Inicio de Sesion</h2>
            <form class="formulario" action="#" method="post"><br>
              <input type="mail" name="correo" class="form" placeholder="Correo electronico"><br>
              <input type="password" name="contrasenia" class="form" placeholder="Contraseña"><br><br><br>
              <label><input type="checkbox">Recuerdame</label>  <a href="#">Olvido Contraseña?</a><br><br>
              <button type="submit" class="boton">Iniciar Sesion</button><br>



            </form>
          </div>
        </center>
        </div>

      </div>

    </div>


  <script src="js/jquery.js"  crossorigin="anonymous"></script>
  <script src="js/popper.min.js" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>
