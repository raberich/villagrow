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
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
            <circle cx="12" cy="13" r="4" />
          </svg>
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
          <h1 class="fw-light">Villa Grow</h1>
          <p class="lead text-muted">Os ofrecemos el mejor cannabis y marihuana CBD de nuestra granja hasta la puerta de
            su hogar con tan solo hacer un click. No te lo pienses más y revisa nuestra variedad.</p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <!-- Inicio tarjeta -->

          <?php
            $mysqli = new mysqli("localhost", "root", "", "tienda");
            $sql = "SELECT * FROM productos";
            $result = $mysqli->query($sql);
            while($row = $result->fetch_assoc()) {

              echo "  <div class='col'>";
              echo "  <div class='card shadow-sm'>";
              echo "      <img src='".$row["Imagen"]."' width='280' height='250' >";
    
              echo "    <div class='card-body'>";
              echo "      <p class='card-text'>".$row["Nombre"]."</p>";
              echo "      <p class='card-text'>".$row["Descripcion"]."</p>";
              echo "      <p class='card-text'>".$row["Precio"]."</p>";
              echo "      <div class='d-flex justify-content-between align-items-center'>";
              echo "        <div class='btn-group'>";
              echo "          <a href='carrito.php?id=".$row["ID"]."&nombre=".$row["Nombre"]."&precio=".$row["Precio"]."'>";
              echo "          <button type='button' class='btn btn-sm btn-outline-secondary'>Comprar</button>";
              echo "          </a>";
              echo "        </div>";
              echo "      </div>";
              echo "    </div>";
              echo "  </div>";
              echo "</div>";


                /*echo "<ul>";
                echo "<li><img src='".$row["Imagen"]."'></li>";
                echo "<li>ID: ".$row["ID"]."</li>";
                echo "<li>Nombre: ".$row["Nombre"]."</li>";
                echo "<li>Descripcion: ".$row["Descripcion"]."</li>";
                echo "<li>Precio: ".$row["Precio"]."</li>";
                echo "<li><button><a href='carrito.php?id=".$row["ID"]."&nombre=".$row["Nombre"]."&precio=".$row["Precio"]."'>Comprar</a></button></li>";
                echo "</ul>";*/
            }
            $mysqli->close();
        ?>
          <!-- Fin de tarjeta -->
          
        </div>
  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Volver arriba</a>
      </p>
      <p class="mb-1">Esta pagina es un proyecto del modulo de Implantación de Aplicaciones Web.</p>
    </div>
  </footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>