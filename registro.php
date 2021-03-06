<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Link de tipografia-->
    <link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet">
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
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">

          <div class="caja">
            <h2>Registrarse</h2>
            <form class="formulario" action="#" method="post">
                <input type="text" name="nombre" placeholder="Nombres"><br>
                <input type="text" name="apellido" placeholder="Apellido"><br>
                <input type="email" name="email" placeholder="Ej: fulatino@hotmail.com"><br>
                <input type="password" name="pass" placeholder="Contraseña"><br>
                <input type="password" name="confir" placeholder="Confirmar contraseña"><br>
                <button type="submit" class="boton">Registrarse</button>
            </form>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
        <div class="categ">
            <div class="cajita">
              <img src="compu.png">
            </div>
            <div class="categoria">
                  <h4>Pc's Pre Armadas</h4>
                  <ul>
                    <li><a href="#">- Prueba</a></li>
                    <li><a href="#">- Prueba</a></li>
                    <li><a href="#">- Prueba</a></li>
                  </ul>
            </div>
        </div>

        <div class="categ">
           <div class="cajita">
              <img src="net.png">
           </div>
           <div class="categoria">
                <h4>Notebooks/Netbooks</h4>
                <ul class="lista">
                  <li><a href="#">- Prueba</a></li>
                  <li><a href="#">- Prueba</a></li>
                  <li><a href="#">- Prueba</a></li>
                </ul>
           </div>
        </div>
        <div class="categ">
            <div class="cajita">
                <img src="hard.png">
            </div>
            <div class="categoria">
                 <h4>Hardware</h4>
                 <ul>
                   <li><a href="#">- Prueba</a></li>
                   <li><a href="#">- Prueba</a></li>
                   <li><a href="#">- Prueba</a></li>
                 </ul>
            </div>
        </div>
        <div class="categ">
            <div class="cajita">
                <img src="joy.png">
            </div>
            <div class="categoria">
                 <h4>Xbox / Playstation</h4>
                 <ul>
                   <li><a href="#">- Prueba</a></li>
                   <li><a href="#">- Prueba</a></li>
                   <li><a href="#">- Prueba</a></li>
                 </ul>
            </div>
        </div>
      </div>
      </div>
    </div>
        <div class="backgr">

        </div>

        <script src="js/jquery.js"  crossorigin="anonymous"></script>
        <script src="js/popper.min.js" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
      </body>
</html>
