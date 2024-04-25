<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

<!-- Section: Design Block -->
<section class="">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="https://api.lalicorera.com/img/logo.png" class="img-fluid" alt="Imagen">
          </div>

          <div class="col-lg-6 mb-lg-0">
            <div class="card">
                <div class="card-body py-5 px-md-5 mb-0">
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <!-- 2 column grid layout with text inputs for the first and last names -->

                        <!-- Email input -->
                        <!-- Agrega este div donde desees mostrar la alerta -->
                        <div id="alertContainer"></div>

                        <div class="form-outline mb-4">
                            <h1 class="my-5 display-3 fw-bold ls-tight text-center">Iniciar Sesión</h1>
                            <input type="email" name="email" id="form3Example3" class="form-control" />
                            <label class="form-label" for="form3Example3">Correo Electrónico</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form3Example4" class="form-control" />
                            <label class="form-label" for="form3Example4">Contraseña</label>
                        </div>

                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-center mb-4">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                            <label class="form-check-label" for="form2Example33">
                                Recordar mi usuario
                            </label>
                        </div>

                        <!-- Submit button -->
                        <div class="text-center pt-1 mb-5 pb-1">
                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-1" type="submit">Iniciar Sesión</button>
                          </div>

                        <div class="form-check d-flex justify-content-center mb-4">
                            <label class="form-check-label" for="form2Example33">
                                ¿No tiene cuenta?
                            </label>
                        </div>

                        <!-- Submit button -->
                        <div class="text-center pt-1 mb-0 pb-1"> <!-- Ajustado el margen inferior aquí -->
                            <a href="{{ route('register') }}" class="btn btn-primary btn-block mb-4" style="margin: 0 auto;">
                                Cree una <!-- Cambiado el texto del botón -->
                            </a>
                        </div>

                    </form>
                    <!-- Mensaje de alerta -->
                    <div id="errorMessage" class="alert alert-danger" style="display: none;">Usuario o contraseña incorrectos. Intente nuevamente.</div>
                </div>
            </div>
        </div>

        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->

  <!-- Footer -->
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
              <a href="#!" class="text-reset">Aguardiente</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Cerveza</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vino</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Ron</a>
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
              <a href="#!" class="text-reset">Tequila</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Whisky</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Ginebra</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Promociones</a>
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
  <!-- Footer -->

        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <!-- Script adicional para mostrar la alerta -->
        <script>
                        // Función para mostrar la alerta
            function showAlert(message, type) {
                // Seleccionar el elemento del contenedor de alerta
                var alertContainer = document.getElementById('alertContainer');

                // Crear el elemento de la alerta
                var alertElement = document.createElement('div');
                alertElement.className = 'alert alert-' + type + ' alert-dismissible fade show';
                alertElement.role = 'alert';
                alertElement.innerHTML = '<strong>' + message + '</strong>' +
                                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';

                // Agregar la alerta al contenedor
                alertContainer.appendChild(alertElement);

                // Después de 3 segundos, ocultar la alerta
                setTimeout(function(){
                    alertElement.style.display = 'none';
                }, 3000);
            }

        </script>

</body>
</html>
