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
    <div class="text-center">
        <img src="https://lalicorera.com/img/banners/banner-tequila.jpg" class="img-fluid" alt="Descripción de la imagen">

    </div>







<!-- Section: Promotions -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Tequila</h2>

        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://vaquitaexpress.com.co/media/catalog/product/cache/e89ece728e3939ca368b457071d3c0be/7/5/7501035010109_31.jpg" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                        <h5 class="card-title">JOSE CUERVO ESPECIAL X750</h5>
                        <p class="card-text">Tequila.</p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">Precio: $71.900</span>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://minuman.com/cdn/shop/products/JOSE-CUERVO-ESPECIAL-SILVER_89578ecb-a547-4526-8aca-0f02755f7418.jpg?v=1642151318" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">JOSE CUERVO SILVER X750</h5>
                        <p class="card-text">Tequila.</p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">Precio: $95.300</span>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://bevgo.com.co/wp-content/uploads/2021/05/325.jpg" class="card-img-top" alt="Producto 3">
                    <div class="card-body">
                        <h5 class="card-title">JIMADOR REPOSADO X750</h5>
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
                    <img src="https://www.vinosylicores.com.co/image/cache/catalog/Licores/Tequila/1800-silver-800x800.jpg" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                        <h5 class="card-title">1800 REPOSADO X750</h5>
                        <p class="card-text">Tequila.</p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">Precio: $190.000</span>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://www.huertacajica.com/wp-content/uploads/2023/11/Tequila-1800-Reposado-jpg.webp" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">1800 SILVER X750</h5>
                        <p class="card-text">Tequila.</p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">Precio: $240.000</span>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://pdcvinosylicores.vteximg.com.br/arquivos/ids/185905-1000-1000/TEQUILA-DON-JULIO-BLANCO.jpg?v=638245302908900000" class="card-img-top" alt="Producto 3">
                    <div class="card-body">
                        <h5 class="card-title">DON JULIO BLANCO X750</h5>
                        <p class="card-text">Tequila.</p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">Precio: $230.000</span>

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
