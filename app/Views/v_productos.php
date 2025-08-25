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
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>quienes_somos">¿Quienes somos?</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>productos">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>noticias">Noticias</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>unete">Unete</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>contactanos">Contactanos</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse dropdown-menu-custom" id="navbarDesplegable">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>quienes_somos">¿Quiénes somos?</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>productos">Productos</a></li>
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
            <h2 class="display-6 fw-bold mb-4 text-white">Productos</h2>
            <p class="text-white mb-5">
                ¿Tienes alguna pregunta o necesitas más información? ¡Estamos aquí para ayudarte! Completa el formulario
                o utiliza los datos de contacto que se muestran abajo.
            </p>
        </div>
    </div>
</div>

<section class="py-5" style="background-color: #f9f9f9;">
  <div class="container">
    <h2 class="text-center fw-bold mb-4" style="color: #3a7d33;">Nuestros Productos y Servicios</h2>
    <p class="text-center text-muted mb-5">Ofrecemos soluciones agrícolas de calidad, comprometidas con el desarrollo sostenible y la satisfacción de nuestros clientes.</p>
    <div class="row g-4">
      <!-- Producto: Maracuyá -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow rounded">
          <img src="https://www.lahora.com.ec/wp-content/uploads/2022/12/Maracuya.jpg" 
               class="card-img-top rounded-top" 
               alt="Maracuyá fresco">
          <div class="card-body text-center">
            <i class="bi bi-basket-fill fs-3 text-success mb-3"></i>
            <h5 class="card-title fw-bold" style="color: #3a7d33;">Venta de Maracuyá</h5>
            <p class="text-muted">Maracuyá fresco y de la más alta calidad, producido de manera sostenible para satisfacer las necesidades de nuestros clientes.</p>
          </div>
        </div>
      </div>

      <!-- Servicio: Capacitación -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow rounded">
          <img src="https://www.silosdelcinca.com/wp-content/uploads/IMG_1122-1.jpg" 
               class="card-img-top rounded-top" 
               alt="Capacitación agrícola">
          <div class="card-body text-center">
            <i class="bi bi-person-lines-fill fs-3 text-success mb-3"></i>
            <h5 class="card-title fw-bold" style="color: #3a7d33;">Capacitación a Agricultores</h5>
            <p class="text-muted">Programas diseñados para mejorar las técnicas de cultivo y optimizar la producción de manera sostenible.</p>
          </div>
        </div>
      </div>

      <!-- Servicio: Visitas a Campos>
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow rounded">
          <video class="w-100 rounded-top" autoplay loop muted playsinline>
            <source src="https://www.example.com/sample-field-visit.mp4" type="video/mp4">
            Tu navegador no soporta videos.
          </video>
          <div class="card-body text-center">
            <i class="bi bi-tree-fill fs-3 text-success mb-3"></i>
            <h5 class="card-title fw-bold" style="color: #3a7d33;">Visitas a Campos</h5>
            <p class="text-muted">Experiencias guiadas para conocer nuestras prácticas sostenibles y el impacto positivo en la comunidad agrícola.</p>
          </div>
        </div>
      </div-->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow rounded">
          <img src="https://img.freepik.com/fotos-premium/ingeniero-agricola-analizando-arroz-salud-campo-dia-verano-ingeniero-agricola-salud-arroza_818261-54186.jpg" 
               class="card-img-top rounded-top" 
               alt="Capacitación agrícola">
          <div class="card-body text-center">
            <i class="bi bi-tree-fill fs-3 text-success mb-3"></i>
            <h5 class="card-title fw-bold" style="color: #3a7d33;">Visitas a Campos</h5>
            <p class="text-muted">Experiencias guiadas para conocer nuestras prácticas sostenibles y el impacto positivo en la comunidad agrícola.</p>
          </div>
        </div>
      </div>
    </div>
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
