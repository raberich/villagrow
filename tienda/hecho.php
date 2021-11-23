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
        <a href="#" class="navbar-brand d-flex align-items-center">
        <img src="img/icono.jpg" width="30" height="30" alt="">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
            <circle cx="12" cy="13" r="4" />
          </svg>
          <strong>Villa Grow</strong>
        </a>
        <form class="form-inline" action="admin/login.php" style="margin-left:1%;">
    <button class="btn btn-sm btn-outline-secondary" type="submit">Iniciar sesión</button>
        <a href="vercarrito.php" class="text-white align-items-center"><img src="img/icarro.jpg" width="35" height="25" alt=""></a>
      </div>
    </div>
  </header>

  <main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Villa Grow</h1>
          <p class="lead text-muted"><h3>Pedido realizado correctamente :)</h3></p>
        </div>
      </div>
    </section>
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