<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tierra Fértil - Cooperativa Agraria</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="<?=base_url()?>/resources/css/home.css"> 
</head>
<body>

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
        <li class="nav-item">
          <a class="nav-link active" href="#hero">Inicio</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="#about">¿Quienes somos?</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">Noticias</a></li>
        <li class="nav-item"><a class="nav-link" href="#testimonials">Proyectos</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contactanos</a></li>
      </ul>
    </div>
    <div class="collapse navbar-collapse dropdown-menu-custom" id="navbarDesplegable">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#hero">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">¿Quiénes somos?</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">Noticias</a></li>
        <li class="nav-item"><a class="nav-link" href="#testimonials">Proyectos</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contáctanos</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section (Carousel) -->
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
          <a href="#services" class="btn btn-success btn-lg mt-3">Descubre más</a>
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
  <div class="container text-center">
    <h2 class="fw-bold">¿Quiénes somos?</h2>
    <p class="lead mt-3">En Tierra Fértil, somos una cooperativa agraria comprometida con el desarrollo sostenible, apoyando a agricultores locales con recursos, capacitación y acceso a mercados.</p>
  </div>
</section>

<!-- Services Section -->
<section id="services" class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center">Nuestros Servicios</h2>
    <div class="row mt-4">
      <div class="col-md-4 text-center">
        <i class="service-icon bi bi-capslock-fill"></i>
        <h4 class="mt-3">Asesoramiento Técnico</h4>
        <p>Ofrecemos orientación especializada para mejorar la producción agrícola de nuestros socios.</p>
      </div>
      <div class="col-md-4 text-center">
        <i class="service-icon bi bi-basket"></i>
        <h4 class="mt-3">Comercialización</h4>
        <p>Facilitamos el acceso a mercados para maximizar el valor de los productos agrícolas.</p>
      </div>
      <div class="col-md-4 text-center">
        <i class="service-icon bi bi-people"></i>
        <h4 class="mt-3">Capacitación</h4>
        <p>Organizamos talleres y cursos para empoderar a nuestros agricultores con conocimientos modernos.</p>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-5">
  <div class="container">
    <h2 class="fw-bold text-center">Testimonios</h2>
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="testimonial-card">
          <p>"Gracias a Tierra Fértil, he duplicado mi producción y he aprendido nuevas técnicas agrícolas."</p>
          <h5 class="text-success mt-3">- Juan Pérez</h5>
        </div>
      </div>
      <div class="col-md-6">
        <div class="testimonial-card">
          <p>"La cooperativa me ayudó a encontrar mercados para mi cosecha, lo que mejoró mi economía."</p>
          <h5 class="text-success mt-3">- María López</h5>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="text-center">
  <div class="container">
    <p class="mb-0">&copy; 2024 Tierra Fértil. Todos los derechos reservados.</p>
    <p>Diseñado con ❤️ por nuestra cooperativa.</p>
  </div>
</footer>
<a href="https://wa.me/1234567890" target="_blank" class="btn-whatsapp">
  <i class="bi bi-whatsapp"></i>
</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");

    window.addEventListener("scroll", function () {
      if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    });


    const toggler = document.querySelector(".navbar-toggler");
    const dropdownMenu = document.querySelector(".dropdown-menu-custom");

    // Estado del menú desplegable
    let isMenuOpen = false;

    // Alternar el menú al hacer clic en el botón
    toggler.addEventListener("click", function (e) {
      e.stopPropagation(); // Evitar que el evento se propague
      isMenuOpen = !isMenuOpen; // Cambiar el estado del menú
      dropdownMenu.classList.toggle("show", isMenuOpen); // Mostrar/ocultar basado en el estado
    });

    // Cerrar el menú al hacer clic fuera de él
    document.addEventListener("click", function (e) {
      if (isMenuOpen && !dropdownMenu.contains(e.target)) {
        isMenuOpen = false; // Cambiar el estado a cerrado
        dropdownMenu.classList.remove("show");
      }
    });

    // Evitar que un clic dentro del menú cierre el menú
    dropdownMenu.addEventListener("click", function (e) {
      e.stopPropagation(); // Evitar que el clic cierre el menú
    });
  });
</script>

</html>
