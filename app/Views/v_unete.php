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
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>productos">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>noticias">Noticias</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>unete">Unete</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>contactanos">Contactanos</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse dropdown-menu-custom" id="navbarDesplegable">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>quienes_somos">¿Quiénes somos?</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>productos">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>noticias">Noticias</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>unete">Unete</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>contactanos">Contáctanos</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid bg_degradado">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center mt-4">
            <h2 class="display-6 fw-bold mb-4 text-white">Unete</h2>
            <p class="text-white mb-5">
                ¿Tienes alguna pregunta o necesitas más información? ¡Estamos aquí para ayudarte! Completa el formulario
                o utiliza los datos de contacto que se muestran abajo.
            </p>
        </div>
    </div>
</div>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Content: Image -->
      <div class="col-lg-6 mb-4 mb-lg-0 text-center text-lg-start">
        <img src="https://img.freepik.com/fotos-premium/agricultor-sonriente-pie-campo-mostrando-pulgar-arriba-ai-generative_154515-11241.jpg" alt="Únete a la cooperativa" class="img-fluid rounded shadow">
      </div>
      
      <!-- Right Content: Title, Description, and Benefits -->
      <div class="col-lg-6">
        <h2 class="fw-bold text-success">Únete a Nuestra Cooperativa</h2>
        <p class="text-muted mb-4">
          Disfruta de precios justos y el respaldo de la cooperativa 
        </p>
        
        <div class="card border-0 shadow-sm">
          <div class="card-body">
            <h5 class="fw-bold text-success">Beneficios de Unirse</h5>
            <ul class="list-unstyled text-muted">
              <li class="mb-3">
                <i class="bi bi-check-circle text-success me-2"></i> Acceso a capacitaciones y asesorías especializadas.
              </li>
              <li class="mb-3">
                <i class="bi bi-check-circle text-success me-2"></i> Apoyo financiero para tus proyectos.
              </li>
              <li class="mb-3">
                <i class="bi bi-check-circle text-success me-2"></i> Formar parte de una comunidad comprometida con el desarrollo sostenible.
              </li>
              <li class="mb-3">
                <i class="bi bi-check-circle text-success me-2"></i> Descuentos en productos y servicios de la cooperativa.
              </li>
            </ul>
            <p class="text-muted small">
              Si necesitas más información, no dudes en contactarnos. Estamos aquí para guiarte en el proceso.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Línea de tiempo para Reglas y Procedimientos -->
    <div class="row mt-5">
        <div class="col-lg-12">
        <h3 class="fw-bold text-success">¿Que debo tener en cuenta?</h3>
        <p class="text-muted mb-4">
          Deberas tener en cuenta que asi como disfrutaras de beneficios por ser miembro, tambien quedaras sujeto a las obligaciones
          que cumplen nuestros socios para lograr los objetivos de la cooperativa. 
          A continuación, encontrarás nuestros estatutos, y los pasos que debes seguir para unirte.
        </p>
        <a href="ruta_al_pdf/estatutos.pdf" class="btn btn-success shadow mb-4" download>
          <i class="bi bi-file-earmark-pdf me-2"></i> Descargar Estatutos
        </a>
        </div>
      <div class="col-lg-12 ps-5 pe-3">
        <h3 class="text-success fw-bold text-center mb-5">Reglas y Procedimientos para Unirse</h3>
        <div class="timeline">
          <!-- Paso 1 -->
          <div class="timeline-item">
            <div class="timeline-icon bg-success text-white">
              <i class="bi bi-1-circle"></i>
            </div>
            <div class="timeline-content">
              <h5 class="fw-bold text-success">Cumplir con los requisitos</h5>
              <p class="text-muted">Revisa los estatutos y asegúrate de cumplir con los requisitos establecidos.</p>
            </div>
          </div>

          <!-- Paso 2 -->
          <div class="timeline-item">
            <div class="timeline-icon bg-success text-white">
              <i class="bi bi-2-circle"></i>
            </div>
            <div class="timeline-content">
              <h5 class="fw-bold text-success">Presentar documentación</h5>
              <p class="text-muted">Entrega los documentos requeridos en nuestras oficinas o vía correo electrónico.</p>
            </div>
          </div>

          <!-- Paso 3 -->
          <div class="timeline-item">
            <div class="timeline-icon bg-success text-white">
              <i class="bi bi-3-circle"></i>
            </div>
            <div class="timeline-content">
              <h5 class="fw-bold text-success">Asistir a reunión introductoria</h5>
              <p class="text-muted">Participa en una sesión informativa para conocer más sobre los beneficios y compromisos.</p>
            </div>
          </div>

          <!-- Paso 4 -->
          <div class="timeline-item">
            <div class="timeline-icon bg-success text-white">
              <i class="bi bi-4-circle"></i>
            </div>
            <div class="timeline-content">
              <h5 class="fw-bold text-success">Firmar acuerdo</h5>
              <p class="text-muted">Formaliza tu membresía firmando el acuerdo correspondiente.</p>
            </div>
          </div>
        </div>
        <p class="text-muted small">
              Si necesitas más información, no dudes en contactarnos. Estamos aquí para guiarte en el proceso, escribenos al <a href="https://web.whatsapp">990921662</a>
            </p>
      </div>
    </div>
  </div>

  <!-- Redes Sociales -->
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
  <style>
    .timeline {
  position: relative;
  padding-left: 30px;
  border-left: 3px solid #139f0f;
}

.timeline-item {
  position: relative;
  margin-bottom: 30px;
}

.timeline-icon {
  position: absolute;
  left: -50px;
  top: 0;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  font-size: 1.5rem;
}

.timeline-content {
  margin-left: 20px;
}

  </style>
</section>
