<!-- Hero Section (Carousel) -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
  <div class="container texto_navbar">
    <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
    <img src="<?= base_url() ?>/resources/assets/logo_tierraFertil.svg" width="100" height="100" alt="Logo Tierra Fértil" class="me-2">
    <div>
        <span class="text-green-yellow d-block">Cooperativa agraria</span>
        <span class="text-green-yellow d-block">de usuarios</span>
        <span class="text-success d-block">Tierra Fértil</span>
    </div>
    </a>
    <button class="navbar-toggler btn_desplega_navbar" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDesplegable" aria-controls="navbarDesplegable" aria-expanded="false" aria-label="Toggle navigation">
      <span class="btn_desplega_navbar_icon"><i class="bi bi-list"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarFija">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>quienes_somos">¿Quienes somos?</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>productos">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>noticias">Noticias</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>unete">Unete</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>contactanos">Contactanos</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse dropdown-menu-custom" id="navbarDesplegable">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>quienes_somos">¿Quiénes somos?</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>productos">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>noticias">Noticias</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>unete">Unete</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>contactanos">Contáctanos</a></li>
            </ul>
        </div>
  </div>
</nav>
<section class="hero">
  <div id="carouselBanner" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicadores -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Imágenes del carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url() ?>/resources/assets/fondo_banner.png" class="d-block w-100" alt="Fondo de Tierra Fértil 1" style="object-fit: cover; height: 100%;">
        <div class="carousel-caption d-none d-md-block">
          <h1>Bienvenidos a Tierra Fértil</h1>
          <p>Impulsando el crecimiento sostenible de nuestras comunidades agrícolas.</p>
          <!--a href="#services" class="btn btn-success btn-lg mt-3">Descubre más</a-->
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url() ?>/resources/assets/fondo_banner.png" class="d-block w-100" alt="Fondo de Tierra Fértil 2" style="object-fit: cover; height: 100%;">
        <div class="carousel-caption d-none d-md-block">
          <h1>Juntos por un futuro más verde</h1>
          <p>Apoyando a los agricultores para alcanzar nuevas metas.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url() ?>/resources/assets/fondo_banner.png" class="d-block w-100" alt="Fondo de Tierra Fértil 3" style="object-fit: cover; height: 100%;">
        <div class="carousel-caption d-none d-md-block">
          <h1>Cosechando el éxito juntos</h1>
          <p>Brindando recursos y capacitación para mejorar la producción.</p>
        </div>
      </div>
    </div>

    <!-- Controles del carousel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>
</section>


<!-- About Section -->
<section id="about" class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Texto -->
      <div class="col-md-6 text-center text-md-start">
        <h2 class="fw-bold text-success">¿Quiénes somos?</h2>
        <p class="lead mt-3">En Tierra Fértil, somos una cooperativa agraria comprometida con el desarrollo sostenible, apoyando a agricultores locales con recursos, capacitación y acceso a mercados.</p>
      </div>
      <!-- Video de YouTube -->
      <div class="col-md-6 text-center">
        <div class="ratio ratio-16x9">
          <iframe 
            src="https://www.youtube.com/embed/bn5kqlO3DKY?si=QoGXY6zbj83xlCkq" 
            title="Video sobre Tierra Fértil"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
          </iframe>
          <!--iframe width="560" height="315" src="https://www.youtube.com/embed/bn5kqlO3DKY?si=QoGXY6zbj83xlCkq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe-->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Servicios -->
<section id="services" class="py-5 position-relative text-white" style="background: url('http://localhost:82/tierrafertil/resources/assets/46614.jpg') center/cover no-repeat fixed;">
  <!-- Superposición oscura para mejorar la legibilidad -->
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.5);"></div>
  
  <!-- Contenido de la sección -->
  <div class="container position-relative z-index-1">
    <h2 class="fw-bold text-center text-white mb-5">Nuestros Servicios</h2>
    <div class="row justify-content-center">
      <!-- Servicio 1 -->
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
        <div class="icon-box d-flex flex-column align-items-center text-center p-4 bg-white bg-opacity-75 rounded shadow h-100">
          <i class="service-icon bi bi-capslock-fill fs-1 text-danger mb-3"></i>
          <h4 class="text-dark">Asesoramiento Técnico</h4>
          <p class="text-dark">Ofrecemos orientación especializada para mejorar la producción agrícola de nuestros socios.</p>
        </div>
      </div>
      <!-- Servicio 2 -->
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
        <div class="icon-box d-flex flex-column align-items-center text-center p-4 bg-white bg-opacity-75 rounded shadow h-100">
          <i class="service-icon bi bi-basket fs-1 text-success mb-3"></i>
          <h4 class="text-dark">Comercialización</h4>
          <p class="text-dark">Facilitamos el acceso a mercados para maximizar el valor de los productos agrícolas.</p>
        </div>
      </div>
      <!-- Servicio 3 -->
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
        <div class="icon-box d-flex flex-column align-items-center text-center p-4 bg-white bg-opacity-75 rounded shadow h-100">
          <i class="service-icon bi bi-people fs-1 text-primary mb-3"></i>
          <h4 class="text-dark">Capacitación</h4>
          <p class="text-dark">Organizamos talleres y cursos para empoderar a nuestros agricultores con conocimientos modernos.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
body{
  font-family: Montserrat, sans-serif;
}
  #services {
  position: relative;
  color: white;
}

#services .icon-box {
  transition: transform 0.3s, box-shadow 0.3s;
}

#services .icon-box:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
}

.icon-box {
  transition: transform 0.3s, box-shadow 0.3s;
}

.icon-box:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

.service-icon {
  transition: color 0.3s;
}

.service-icon:hover {
  color: #ffffff;
}


</style>


<!-- Noticias Destacadas Section -->
<section id="news" class="py-5">
  <div class="container">
    <h2 class="fw-bold text-center text-success mb-5">Noticias Destacadas</h2>
    
    <!-- Noticias Grid -->
    <div class="row g-4">
      <!-- Noticia 1 -->
      <div class="col-md-6 col-lg-3">
        <div class="card border-0 shadow h-100">
          <img 
            src="https://www.lahora.com.ec/wp-content/uploads/2022/12/Maracuya.jpg" 
            alt="Noticia 1" 
            class="card-img-top">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Título de la Noticia 1</h5>
            <p class="card-text text-muted">
              Breve descripción de la noticia destacada que invita al lector a saber más.
            </p>
          </div>
          <div class="card-footer bg-transparent border-0 text-center pb-3">
            <a href="#" class="btn btn-warning btn-sm">Leer más</a>
          </div>
        </div>
      </div>
      <!-- Noticia 2 -->
      <div class="col-md-6 col-lg-3">
        <div class="card border-0 shadow h-100">
          <img 
            src="https://www.lahora.com.ec/wp-content/uploads/2022/12/Maracuya.jpg" 
            alt="Noticia 2" 
            class="card-img-top">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Título de la Noticia 2</h5>
            <p class="card-text text-muted">
              Un breve resumen que capta la atención y motiva a continuar leyendo.
            </p>
          </div>
          <div class="card-footer bg-transparent border-0 text-center pb-3">
            <a href="#" class="btn btn-warning btn-sm">Leer más</a>
          </div>
        </div>
      </div>
      <!-- Noticia 3 -->
      <div class="col-md-6 col-lg-3">
        <div class="card border-0 shadow h-100">
          <img 
            src="https://www.lahora.com.ec/wp-content/uploads/2022/12/Maracuya.jpg" 
            alt="Noticia 3" 
            class="card-img-top">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Título de la Noticia 3</h5>
            <p class="card-text text-muted">
              Una descripción breve que informe y a la vez genere curiosidad.
            </p>
          </div>
          <div class="card-footer bg-transparent border-0 text-center pb-3">
            <a href="#" class="btn btn-warning btn-sm">Leer más</a>
          </div>
        </div>
      </div>
      <!-- Noticia 4 -->
      <div class="col-md-6 col-lg-3">
        <div class="card border-0 shadow h-100">
          <img 
            src="https://www.lahora.com.ec/wp-content/uploads/2022/12/Maracuya.jpg" 
            alt="Noticia 4" 
            class="card-img-top">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Título de la Noticia 4</h5>
            <p class="card-text text-muted">
              Un resumen breve pero interesante que motive al usuario a saber más.
            </p>
          </div>
          <div class="card-footer bg-transparent border-0 text-center pb-3">
            <a href="#" class="btn btn-warning btn-sm">Leer más</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Botón Ver Más -->
    <div class="text-center mt-4">
      <a href="#" class="btn btn-outline-success">Ver más noticias</a>
    </div>
  </div>
</section>

<!-- Contacto -->
<section id="contacto" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-success fw-bold text-center mb-4">¿Quieres contactarnos o unirte?</h2>
    <p class="text-center text-muted mb-4">Estamos aquí para ayudarte. Llámanos o envíanos un mensaje.</p>
    <div class="text-center">
      <a href="tel:+1234567890" class="btn btn-success me-3"><i class="bi bi-telephone"></i> Llamar</a>
      <a href="mailto:info@cooperativa.com" class="btn btn-outline-success"><i class="bi bi-envelope"></i> Enviar Correo</a>
    </div>
  </div>
</section>