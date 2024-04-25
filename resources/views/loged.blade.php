<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Virtual</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Menú desplegable en el lado izquierdo -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle menu">
                <span class="navbar-toggler-icon"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('guaro') }}">Aguardiente</a></li>
                            <li><a class="dropdown-item" href="{{ route('ron') }}">Ron</a></li>
                            <li><a class="dropdown-item" href="{{ route('cerveza') }}">Cerveza</a></li>
                            <li><a class="dropdown-item" href="{{ route('tequila') }}">Tequila</a></li>
                            <li><a class="dropdown-item" href="{{ route('whisky') }}">Whisky</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Logo de la marca -->
            <a class="navbar-brand" href="{{route('home')}}">
                <div class="text-center">
                    <img src="https://api.lalicorera.com/img/logo.png" alt="Logo de la marca" class="img-fluid" style="width: 230px; height: auto;">
                </div>
            </a>

            <!-- Contenedor para el usuario y su nombre -->
            <div class="d-flex align-items-center">
                <!-- Imagen del usuario -->
                <img src="https://img.freepik.com/vector-premium/icono-circulo-usuario-anonimo-ilustracion-vector-estilo-plano-sombra_520826-1931.jpg" alt="Imagen de usuario" class="rounded-circle me-2" style="width: 40px; height: 40px;">
                <!-- Nombre del usuario activo -->
                <div>{{ Auth::user()->name }}</div>
            </div>

            <!-- Opciones de autenticación en el lado derecho -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#authDropdown" aria-controls="authDropdown" aria-expanded="false" aria-label="Toggle authentication">
                <span class="navbar-toggler-icon"></span> Auth
            </button>
            <div class="collapse navbar-collapse" id="authDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            Cerrar Sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>






<!-- Carrusel de imágenes -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://www.dislicores.com/arquivos/category-banner-licores-mb.jpg" class="d-block w-100" alt="...">
        </div>

        <div class="carousel-item">
            <img src="https://ilcauca.com/admin_web/categorias/banner%20web%20america%20preventa%20BAJA.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://licoresdelgolfo.com/wp-content/uploads/2023/09/BANNERWEB.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://ilcauca.com/admin_web/categorias/banner%20web%20nueva%20imagen.jpg" class="d-block w-100" alt="...">
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Section: Promotions -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Promociones</h2>

        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://bevgo.com.co/wp-content/uploads/2020/12/678-1.jpg" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                        <h5 class="card-title">JOHNNIE WALKER BLUE LABEL X 750ML</h5>
                        <p class="card-text">Whisky.</p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">Precio: $1.099.990</span>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://bevgo.com.co/wp-content/uploads/2023/05/Diseno-sin-titulo-4-1.png" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">AGUARDIENTE AMARILLO DE MANZANARES SIN AZÚCAR X 750ML</h5>
                        <p class="card-text">Aguardiente.</p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">Precio: $74.990</span>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://licoresjunior.com/wp-content/uploads/2023/12/TEQUILA-JIMADOR-REPOSADO-750-ML-Web-1024x1024-1.jpg" class="card-img-top" alt="Producto 3">
                    <div class="card-body">
                        <h5 class="card-title">JIMADOR REPOSADO X 700ML</h5>
                        <p class="card-text">Tequila.</p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">Precio: $115.900</span>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://vaquitaexpress.com.co/media/catalog/product/cache/e89ece728e3939ca368b457071d3c0be/7/7/7702004007377_4.jpg" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                        <h5 class="card-title">PACK POKER X 6</h5>
                        <p class="card-text">Cerveza.</p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">Precio: $15.900</span>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://www.anchetascolombia.com/424-large_default/vino-casillero-del-diablo-merlot-x-750ml.jpg" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">CASILLERO CABERNET SAUVIGNON X750</h5>
                        <p class="card-text">Vino.</p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">Precio: $50.000</span>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://bevgo.com.co/wp-content/uploads/2020/12/699.jpg" class="card-img-top" alt="Producto 3">
                    <div class="card-body">
                        <h5 class="card-title">SMIRNOFF X 700ML</h5>
                        <p class="card-text">Vodka.</p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">Precio: $84.990</span>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Puedes agregar más productos según sea necesario -->
        </div>
    </div>
</section>
<!-- End Section: Promotions -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->


      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>LALICORERA.COM
            </h6>
            <p>
              Somos una empresa establecida desde 1999 con el unico objetivo de garantizar una alcoholizada segura al consumidor.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Productos
            </h6>
            <p>
              <a href="{{ route('guaro') }}" class="text-reset">Aguardiente</a>
            </p>
            <p>
              <a href="{{ route('cerveza') }}" class="text-reset">Cerveza</a>
            </p>
            <p>
              <a href="{{ route('whisky') }}" class="text-reset">Whisky</a>
            </p>
            <p>
              <a href="{{ route('ron') }}" class="text-reset">Ron</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              PRODUCTOS
            </h6>
            <p>
              <a href="{{ route('tequila') }}" class="text-reset">Tequila</a>
            </p>
            <p>
              <a href="{{ route('home') }}" class="text-reset">Home</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">NUESTRAS REDES</h6>
            <!-- Facebook -->
            <a href="enlace_de_facebook" target="_blank" class="text-reset me-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Facebook_icon.svg/1024px-Facebook_icon.svg.png" alt="Facebook" style="width: 30px; height: 30px;">
            </a>
            <!-- Instagram -->
            <a href="enlace_de_instagram" target="_blank" class="text-reset me-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png" alt="Instagram" style="width: 30px; height: 30px;">
            </a>
            <!-- YouTube -->
            <a href="enlace_de_youtube" target="_blank" class="text-reset me-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Logo_youtube_ios_%28cropped%29.jpg" alt="YouTube" style="width: 30px; height: 30px;">
            </a>
            <!-- Twitter -->
            <a href="enlace_de_twitter" target="_blank" class="text-reset me-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/X_logo.jpg/1200px-X_logo.jpg" alt="Twitter" style="width: 30px; height: 30px;">
            </a>
        </div>

          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">LaLicorera.com</a>
    </div>
    <!-- Copyright -->
  </footer>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
