<!DOCTYPE html>
<html lang="en">

  <head>
    <?php session_start() ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Turistearaucania - Registro de proveedores</title>

    <!-- Bootstrap core CSS -->
    <link href="../SCRIPTS/bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../SCRIPTS/CSS/modern-business.css" rel="stylesheet">

    

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar  navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <form class="form-inline" action="/PHP/search.php" method="post">
          <input class="form-control mr-sm-2" type="search" placeholder="Encuentra lo que buscas" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../PHP/search.php">Buscar</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categorias
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="../PHP/search.php">Gastronomia</a>
                <a class="dropdown-item" href="../PHP/search.php">Servicios de guia</a>
                <a class="dropdown-item" href="../PHP/search.php">Alojamiento</a>
                <a class="dropdown-item" href="../PHP/search.php">Arriendo de equipacion</a>
                <a class="dropdown-item" href="../PHP/search.php">Single Portfolio Item</a>
              </div>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ubicacion
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="../PHP/search.php">Costa</a>
                <a class="dropdown-item" href="../PHP/search.php">Centro</a>
                <a class="dropdown-item" href="../PHP/search.php">Andino</a>
              </div>
            </li>
            

            <li class="nav-item">
              <a class="nav-link" href="../PHP/about.php">Acerca de</a>
            </li>
            
            <li class="nav-item  ">
              <a class="nav-link  one" href="../HTML/login.html" id="navbarDropdownMenuLink" >
                <img src="../IMAGE/icons/user.png" class="login">
              </a>
                   
            </li>
        
          </ul>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container principal">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Restablecer
        <small>Contraseña</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item">
          <a href="../HTML/login.html">Ingresar</a>
        </li>
        <li class="breadcrumb-item active">Restablecer contraseña</li>
      </ol>

      <div class="row" style="padding-top: 100px; padding-bottom: 100px;">
	      <div class="col-sm-2"></div>
	      <div class="col-sm-8" style="border: 1px solid #e9ebee; padding-top: 80px; padding-bottom: 80px; padding-right: 30px;padding-left: 30px;">
		      <h3 align="center">Recuperación de la cuenta</h3>
		      <p>Para poder recuperar el acceso a tu cuenta, es necesario que nos de un poco de informacion.</p>
		      <form  action="../PHP/sendcode.php" method="post" id="formularioregistro" autocomplete="off">
				 <div class="control-group form-group">
				  	<label for="exampleInputEmail1">Correo electronico</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@example.cl">
				    <small id="emailHelp" class="form-text text-muted">Ingrese el correo electronico que utilizo para su inscripcion.</small>
				  </div>
				  <div class="control-group form-group">
				  	<button type="submit" class="btn btn-dark mb-2">Registrarse</button>
				  </div>
				</form>
				¿Te perdiste? Regresa al <a href="../HTML/login.html">inicio de sesion</a>, o bien al <a href="../index.php">inicio</a>.
		  </div>
		  <div class="col-sm-2"></div>

	  </div>

   


    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../SCRIPTS/bootstrap/jquery/jquery.min.js"></script>
    <script src="../SCRIPTS/bootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../SCRIPTS/JS/validarformularios.js"></script>


  </body>

</html>
