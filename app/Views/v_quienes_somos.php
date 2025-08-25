<!-- Navbar -->
<link rel="stylesheet" href="<?= base_url() ?>/resources/css/contactanos.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
    <div class="container texto_navbar">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
            <img src="<?= base_url() ?>/resources/assets/logo_tierraFertil.svg" width="100" height="100"
                alt="Logo Tierra Fértil" class="me-2">
            <div>
                <span class="text-green-yellow d-block">Cooperativa agraria</span>
                <span class="text-green-yellow d-block">de usuarios</span>
                <span class="text-success d-block">Tierra Fértil</span>
            </div>
        </a>
        <button class="navbar-toggler btn_desplega_navbar" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarDesplegable" aria-controls="navbarDesplegable" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="btn_desplega_navbar_icon"><i class="bi bi-list"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarFija">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Inicio</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>quienes_somos">¿Quienes somos?</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>productos">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>noticias">Noticias</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>unete">Unete</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>contactanos">Contactanos</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse dropdown-menu-custom" id="navbarDesplegable">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Inicio</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>quienes_somos">¿Quiénes somos?</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>productos">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>noticias">Noticias</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>unete">Unete</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>contactanos">Contáctanos</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid bg_degradado">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center mt-4">
            <h2 class="display-6 fw-bold mb-4 text-white">¿Quienes somos?</h2>
            <p class="text-white mb-5">
            En <span class="text-warning fw-semibold">Tierra Fértil</span>, somos una cooperativa agraria comprometida con la sostenibilidad, la innovación, y el crecimiento de nuestras comunidades rurales. Trabajamos juntos para cultivar un futuro más verde y próspero.
            </p>
        </div>
    </div>
</div>

<section id="quienes-somos" class="py-5 bg-light">
  <div class="container">
    <!-- Misión y Visión -->
    <div class="row align-items-center">
      <!-- Imagen -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img 
        src="https://plus.unsplash.com/premium_photo-1674624682232-c9ced5360a2e?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8dGllcnJhcyUyMGRlJTIwY3VsdGl2b3xlbnwwfHwwfHx8MA%3D%3D" 
        alt="Cultivo sostenible" 
        class="img-fluid rounded shadow"
        >
      </div>
      <!-- Contenido -->
      <div class="col-lg-6">
        <h3 class="fw-semibold text-success">Nuestra Misión</h3>
        <p class="text-muted mb-4">
          Promovemos el desarrollo sostenible mediante la producción responsable y la implementación de prácticas innovadoras que beneficien tanto a los agricultores como al medio ambiente.
        </p>
        <h3 class="fw-semibold text-success">Nuestra Visión</h3>
        <p class="text-muted mb-4">
          Ser líderes en agricultura sostenible, marcando la diferencia con prácticas responsables que impacten positivamente a las generaciones futuras, fortaleciendo la economía local y protegiendo nuestros recursos naturales.
        </p>
        <h3 class="fw-semibold text-success">Nuestros Valores</h3>
        <ul class="list-unstyled text-muted">
          <li class="d-flex align-items-start mb-3">
            <i class="bi bi-check-circle-fill text-success me-3"></i>
            <span>Trabajo en equipo y colaboración.</span>
          </li>
          <li class="d-flex align-items-start mb-3">
            <i class="bi bi-check-circle-fill text-success me-3"></i>
            <span>Compromiso con la sostenibilidad.</span>
          </li>
          <li class="d-flex align-items-start mb-3">
            <i class="bi bi-check-circle-fill text-success me-3"></i>
            <span>Innovación en cada paso que damos.</span>
          </li>
          <li class="d-flex align-items-start">
            <i class="bi bi-check-circle-fill text-success me-3"></i>
            <span>Transparencia y responsabilidad social.</span>
          </li>
        </ul>
      </div>
    </div>

    <!-- Impacto -->

    <div class="row text-center mt-5 g-4">
  <!-- Cifras de impacto -->
  <div class="col-md-4 d-flex align-items-stretch">
    <div class="p-3 w-100 shadow rounded position-relative" style="border: solid 1px lightgreen; background-color: #f6fff5; border-radius: 15px;">
      <i class="bi bi-people-fill position-absolute" style="font-size: 80px; color: rgba(0, 128, 0, 0.1); top: 10px; right: 10px;"></i>
      <h3 class="fw-bold text-success">+500</h3>
      <p class="text-muted">Familias beneficiadas</p>
    </div>
  </div>
  <div class="col-md-4 d-flex align-items-stretch">
    <div class="p-3 w-100 shadow rounded position-relative" style="border: solid 1px lightgreen; background-color: #f6fff5; border-radius: 15px;">
      <i class="bi bi-tree position-absolute" style="font-size: 80px; color: rgba(0, 128, 0, 0.1); top: 10px; right: 10px;"></i>
      <h3 class="fw-bold text-success">+2000</h3>
      <p class="text-muted">Hectáreas cultivadas</p>
    </div>
  </div>
  <div class="col-md-4 d-flex align-items-stretch">
    <div class="p-3 w-100 shadow rounded position-relative" style="border: solid 1px lightgreen; background-color: #f6fff5; border-radius: 15px;">
      <i class="bi bi-calendar3 position-absolute" style="font-size: 80px; color: rgba(0, 128, 0, 0.1); top: 10px; right: 10px;"></i>
      <h3 class="fw-bold text-success">+10 años</h3>
      <p class="text-muted">Trabajando por el futuro</p>
    </div>
  </div>
    </div>


    <!-- que hacemos y porque -->
    <div class="row mt-5 align-items-center">
  <!-- Contenido -->
  <div class="col-lg-6">
    <h3 class="fw-semibold text-success">¿Qué hacemos?</h3>
    <p class="text-muted mb-4">
      Nos dedicamos a fomentar el desarrollo sostenible en la agricultura mediante la implementación de prácticas responsables y el apoyo directo a los agricultores. Cultivamos con pasión para garantizar alimentos de calidad, cuidando el medio ambiente y fortaleciendo la economía local.
    </p>
    <h3 class="fw-semibold text-success">¿Por qué lo hacemos?</h3>
    <p class="text-muted mb-4">
      Creemos que la agricultura es clave para un futuro sostenible. Trabajamos para empoderar a las comunidades agrícolas, proteger nuestros recursos naturales y construir un mundo donde la producción responsable sea el estándar, no la excepción.
    </p>
    <h3 class="fw-semibold text-success">Nuestro enfoque</h3>
    <ul class="list-unstyled text-muted">
      <li class="d-flex align-items-start mb-3">
        <i class="bi bi-arrow-right-circle-fill text-primary me-3"></i>
        <span>Capacitación y apoyo a agricultores para mejorar prácticas agrícolas.</span>
      </li>
      <li class="d-flex align-items-start mb-3">
        <i class="bi bi-arrow-right-circle-fill text-primary me-3"></i>
        <span>Uso de tecnologías innovadoras para optimizar la producción.</span>
      </li>
      <li class="d-flex align-items-start mb-3">
        <i class="bi bi-arrow-right-circle-fill text-primary me-3"></i>
        <span>Conservación de la biodiversidad y recursos naturales.</span>
      </li>
      <li class="d-flex align-items-start">
        <i class="bi bi-arrow-right-circle-fill text-primary me-3"></i>
        <span>Fortalecimiento de la economía local a través del comercio justo.</span>
      </li>
    </ul>
  </div>
  <!-- Imagen -->
  <div class="col-lg-6 mb-4 mb-lg-0">
    <img 
      src="https://images.unsplash.com/photo-1567306226416-28f0efdc88ce?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080" 
      alt="Agricultura sostenible" 
      class="img-fluid rounded shadow"
    >
  </div>
</div>




    <!-- Llamado a la acción -->
    <!--div class="row justify-content-center text-center mt-5">
      <div class="col-md-8">
        <h3 class="fw-bold">Únete a Nuestra Causa</h3>
        <p class="text-muted">Sé parte de Tierra Fértil y ayúdanos a seguir construyendo un futuro sostenible para todos.</p>
        <a href="<?= base_url() ?>contactanos" class="btn btn-success btn-lg px-4">Contáctanos</a>
      </div>
    </div-->
  </div>
  <div class="container text-center" style="margin-top: 20px;">
    <h5 class="text-success fw-bold">Síguenos en</h5>
    <div class="d-flex justify-content-center align-items-center mt-3 gap-3">
        <!-- Facebook -->
        <a href="https://www.facebook.com" target="_blank" class="text-decoration-none">
            <div class="d-flex align-items-center justify-content-center rounded-circle bg-light shadow p-3" 
                 style="width: 60px; height: 60px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" 
                     alt="Facebook Logo" class="img-fluid" style="width: 30px;">
            </div>
            <small class="d-block mt-1 text-dark">Facebook</small>
        </a>
          
        <!-- Instagram -->
        <a href="https://www.instagram.com" target="_blank" class="text-decoration-none">
            <div class="d-flex align-items-center justify-content-center rounded-circle bg-light shadow p-3" 
                 style="width: 60px; height: 60px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" 
                     alt="Instagram Logo" class="img-fluid" style="width: 30px;">
            </div>
            <small class="d-block mt-1 text-dark">Instagram</small>
        </a>
    </div>
    </div>
</section>
