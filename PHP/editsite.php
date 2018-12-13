<!DOCTYPE html>
<html lang="en">

  <head>
    <?php session_start() ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Turistearaucania - Acerca de</title>

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
            
                <?php
                  if (isset($_SESSION['user'])){ 
                    echo '<li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle one" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="../IMAGE/icons/user.png" class="login">
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="left: -100px;">



                        <a class="dropdown-item" href="../PHP/editaccount.php">Mi perfil</a>
                            <a class="dropdown-item" href="../PHP/destroysession.php">Cerrar sesion</a>  
                          </div>';
                  }else{
                    echo ' <li class="nav-item  ">
                        <a class="nav-link  one" href="../HTML/login.html" id="navbarDropdownMenuLink" >
                        <img src="../IMAGE/icons/user.png" class="login">
                      </a>
                      
                      </div>
                    ';
                  }
                ?>           
            
        </li>
        
          </ul>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Modificacion de 
        <small>Perfil</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Modificacion perfil del local</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="http://placehold.it/750x450" alt="">
        </div>
        <div class="col-lg-6">
          <input type="text" class="col-lg-12" name="titulo" placeholder="Titulo">
          <textarea class="col-lg-12" rows="12" name="cuerpo" placeholder="Descripcion de su local"></textarea>
        </div>
      </div>
      <!-- /.row -->

      <!-- Team Members -->
      <h2>Our Team</h2>

      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="http://placehold.it/750x450" alt="">
            <div class="card-body">
              <h4 class="card-title">Team Member</h4>
              <h6 class="card-subtitle mb-2 text-muted">Position</h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class="card-footer">
              <a href="#">name@example.com</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="http://placehold.it/750x450" alt="">
            <div class="card-body">
              <h4 class="card-title">Team Member</h4>
              <h6 class="card-subtitle mb-2 text-muted">Position</h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class="card-footer">
              <a href="#">name@example.com</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="http://placehold.it/750x450" alt="">
            <div class="card-body">
              <h4 class="card-title">Team Member</h4>
              <h6 class="card-subtitle mb-2 text-muted">Position</h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class="card-footer">
              <a href="#">name@example.com</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Our Customers -->
      <h2>Our Customers</h2>
      <div class="row">
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </div>
      </div>
      <!-- /.row -->

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

  </body>

</html>
