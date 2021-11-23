<!DOCTYPE html>
<html lang="es">
<head>
    <title>Villa Grow</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    
</head>
<body>
<header>
    <div class="navbar navbar-light">
      <div class="container">
        <a href="index.php" class="navbar-brand d-flex align-items-center">
        <img src="img/icono.jpg" width="30" height="30" alt="">
          <strong>Villa Grow</strong>
        </a>
        <a href="vercarrito.php" class="text-white align-items-center"><img src="img/icarro.jpg" width="35" height="25" alt=""></a>
      </div>
    </div>
  </header>

  <main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Mi carrito</h1>
          <p class="lead text-muted">    
    <?php
        session_start();

        echo "<h2>Lo que tienes en el carro</h2>";
        if(empty($_SESSION)){
            echo "<p>Esta vacio</p>";
        }
        echo "<table>";
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nombre</th>";
            echo "<th>Precio</th>";
        echo "</tr>";
        
        foreach ($_SESSION as $result){
          echo "<tr>";
          if($result[0] != "a"){
              echo "<td>".$result[0]."</td>";
              echo "<td>".$result[1]."</td>";
              echo "<td>".$result[2]."</td>";
            echo "</tr>";}         
        }
        echo "</table>";
        $TOTAL=0;
        foreach ($_SESSION as $result){
          if(is_numeric($result[2]))  {
           $TOTAL=$TOTAL + $result[2];
          }
        }
        echo "<p style='margin-left:5%;'><b>TOTAL: </b>".$TOTAL." €<p>";
        echo '<p><a href="vaciarcarrito.php">Vaciar carrito</a></p>'
        //if($_SESSION.size)
    ?></p>
        </div>
      </div>
    </section>
    
  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="mb-1">Esta pagina es un proyecto del modulo de Implantación de Aplicaciones Web.</p>
    </div>
  </footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
<p><a class='btn btn-danger my-2 my-sm-0' href="vaciarcarrito.php" style='margin-left:5%;'>CANCELAR</a></p>
    <form class="form-inline" action="confirmar.php" method="post">
      <input name="email" class="form-control mr-sm-2" type="text" placeholder="Introduce tu e-mail" style="margin-left:5%;">
    </form>
    <br/>
    <p><a class='btn btn-success' href="confirmar.php" style='margin-left:5%;'>CONFIRMAR</a></p>
</html>