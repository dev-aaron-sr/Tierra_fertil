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
                <li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>noticias">Noticias</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>unete">Unete</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>contactanos">Contactanos</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse dropdown-menu-custom" id="navbarDesplegable">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>quienes_somos">¿Quiénes somos?</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>productos">Productos</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>noticias">Noticias</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>unete">Unete</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>contactanos">Contáctanos</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid bg_degradado">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center mt-4">
            <h2 class="display-6 fw-bold mb-4 text-white">Noticias</h2>
            <p class="text-white mb-5">
                ¿Tienes alguna pregunta o necesitas más información? ¡Estamos aquí para ayudarte! Completa el formulario
                o utiliza los datos de contacto que se muestran abajo.
            </p>
        </div>
    </div>
</div>


<section class="py-5">
  <div class="container">
    <div class="row">
      <!-- Noticias Principales -->
      <div class="col-md-8">
        <h2 class="text-center fw-bold mb-4" style="color: #3a7d33;">Últimas Noticias</h2>
        
        <!-- Noticia 1 -->
        <div class="mb-4">
          <div class="img-container">
            <img src="https://www.lahora.com.ec/wp-content/uploads/2022/12/Maracuya.jpg" 
                 alt="Noticia 1" class="img-fluid mb-3">
          </div>
          <h5 class="fw-bold mt-3" style="color: #3a7d33;">Nuevo Proyecto de Sostenibilidad</h5>
          <p class="text-muted">Iniciamos un nuevo proyecto para mejorar la eficiencia en la producción de maracuyá, enfocándonos en prácticas más sostenibles.</p>
          <a href="#" class="btn btn-success mt-3">Seguir leyendo</a>
        </div>

        <!-- Noticia 2 -->
        <div class="mb-4">
          <div class="img-container">
            <img src="https://images.unsplash.com/photo-1573497491208-6b1acb260507?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080" 
                 alt="Noticia 2" class="img-fluid mb-3">
          </div>
          <h5 class="fw-bold mt-3" style="color: #3a7d33;">Capacitación Gratuita para Agricultores</h5>
          <p class="text-muted">Lanzamos un programa de capacitación para agricultores locales con el fin de mejorar sus técnicas de cultivo.</p>
          <a href="#" class="btn btn-success mt-3">Seguir leyendo</a>
        </div>

        <!-- Noticia 3 -->
        <div class="mb-4">
          <div class="img-container">
            <img src="https://img.freepik.com/fotos-premium/ingeniero-agricola-analizando-arroz-salud-campo-dia-verano-ingeniero-agricola-salud-arroza_818261-54186.jpg" 
                 alt="Noticia 3" class="img-fluid mb-3">
          </div>
          <h5 class="fw-bold mt-3" style="color: #3a7d33;">Visitas Guiadas a Campos</h5>
          <p class="text-muted">Conoce nuestras prácticas sostenibles a través de nuestras visitas guiadas a los campos de cultivo.</p>
          <a href="#" class="btn btn-success mt-3">Seguir leyendo</a>
        </div>
      </div>

      <!-- Noticias Recientes -->
      <div class="col-md-4">
  <div class="bg-light p-4 rounded shadow-sm">
    <h5 class="fw-bold" style="color: #3a7d33;">Noticias Recientes</h5>
    <div style="max-height: 300px; overflow-y: auto;">
      <ul class="list-unstyled">
        <li class="mb-3 d-flex align-items-center">
          <img src="https://www.lahora.com.ec/wp-content/uploads/2022/12/Maracuya.jpg" alt="Imagen 1" class="me-3" style="width: 60px; height: 60px; object-fit: cover;">
          <a href="#" class="text-muted">Nuevo Proyecto en Agricultura Sostenible</a>
        </li>
        <li class="mb-3 d-flex align-items-center">
          <img src="https://www.lahora.com.ec/wp-content/uploads/2022/12/Maracuya.jpg" alt="Imagen 2" class="me-3" style="width: 60px; height: 60px; object-fit: cover;">
          <a href="#" class="text-muted">Lanzamos Programa de Capacitación para Agricultores</a>
        </li>
        <li class="mb-3 d-flex align-items-center">
          <img src="https://www.lahora.com.ec/wp-content/uploads/2022/12/Maracuya.jpg" alt="Imagen 3" class="me-3" style="width: 60px; height: 60px; object-fit: cover;">
          <a href="#" class="text-muted">Visitas Guiadas a los Campos de Cultivo</a>
        </li>
        <li class="mb-3 d-flex align-items-center">
          <img src="https://www.lahora.com.ec/wp-content/uploads/2022/12/Maracuya.jpg" alt="Imagen 4" class="me-3" style="width: 60px; height: 60px; object-fit: cover;">
          <a href="#" class="text-muted">Iniciativa de Sostenibilidad para el Futuro</a>
        </li>
        <li class="mb-3 d-flex align-items-center">
          <img src="https://www.lahora.com.ec/wp-content/uploads/2022/12/Maracuya.jpg" alt="Imagen 5" class="me-3" style="width: 60px; height: 60px; object-fit: cover;">
          <a href="#" class="text-muted">Colaboración con Nuevos Socios en el Sector Agrícola</a>
        </li>
      </ul>
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

<style>
  .img-container {
    width: 100%;
    max-height: 600px; /* Altura máxima para el contenedor */
    height: auto;
    overflow: hidden; /* Evitar que el contenedor exceda el límite de altura */
  }

  .img-container img {
    width: 100%; /* La imagen ocupa todo el ancho del contenedor */
    height: 100%; /* Ajusta la altura al 100% */
    object-fit: cover; /* Hace que la imagen se ajuste y cubra todo el contenedor */
  }
</style>



