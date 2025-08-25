<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row align-items-start">

      <!-- Columna izquierda: "Logo y Contacto" -->
      <div class="col-md-4 mb-4 text-start">
        <div class="d-flex align-items-center mb-3">
          <img src="resources/assets/logo_tierraFertil.svg" alt="Logo Tierra Fértil" style="max-height:60px;" class="me-2">
          <h4 class="mb-0 text-white fw-bold">Tierra Fértil</h4>
        </div>
        <ul class="list-unstyled footer-list">
          <li><i class="bi bi-telephone"></i> +51 947 492 128</li>
          <li><i class="bi bi-envelope"></i> contacto@tierrraferitl.com</li>
          <li><i class="bi bi-geo-alt"></i> Piura - Perú</li>
          <li><i class="bi bi-clock"></i> Lun - Vie: 9:00am - 6:00pm</li>
        </ul>
      </div>

      <!-- Columna centro: "Enlaces útiles" -->
      <div class="col-md-4 mb-4 text-center">
        <h5 class="fw-bold mb-3 text-white">Enlaces útiles</h5>
        <ul class="list-unstyled footer-list">
          <li><a href="#quienes-somos">¿Quiénes somos?</a></li>
          <li><a href="#productos">Productos</a></li>
          <li><a href="#noticias">Noticias</a></li>
          <li><a href="#unete">Únete</a></li>
        </ul>
      </div>

      <!-- Columna derecha: "Mas informacion" -->
      <div class="col-md-4 mb-4 text-end">
        <h5 class="fw-bold mb-3 text-white">Más información</h5>
        <ul class="list-unstyled footer-list">
          <li>
            <a href="#libro-reclamaciones" class="d-flex align-items-center justify-content-end">
              <img src="resources/assets/libro_reclamaciones.png" alt="Libro de Reclamaciones" class="me-2 libro-logo">
              Libro de Reclamaciones
            </a>
          </li>
          <li>
            <a href="#faq" class="d-flex align-items-center justify-content-end">
              <i class="bi bi-question-circle me-2"></i> Preguntas frecuentes
            </a>
          </li>
        </ul>
        <p class="mb-2">Síguenos en:</p>
        <div class="social-icons">
          <a href="#" target="_blank" title="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" target="_blank" title="X"><i class="bi bi-x"></i></a>
        </div>
      </div>

    </div>

    <!-- Derechos -->
    <div class="text-center mt-4">
      <p class="mb-0">&copy; 2025 Tierra Fértil. Todos los derechos reservados.</p>
      <p>Designed by Intelisoft</p>
    </div>
  </div>
</footer>

<style>
  /* Estilos del footer */
  footer {
    background-color: #353a40;
    color: #f8f9fa;
    padding: 50px 0 30px;
  }

  footer .container {
    max-width: 1200px;
  }

  footer h4, footer h5 {
    color: #f8f9fa;
  }

  footer p {
    font-size: 14px;
    margin: 8px 0;
    color: #f8f9fa;
  }

  footer p:last-child {
    font-size: 13px;
    color: #ced4da;
  }

  .footer-list li {
    padding: 5px 0;
  }

  .footer-list a {
    color: #f8f9fa !important;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .footer-list a:hover {
    color: #007bff !important;
  }

  /* Logo del libro de reclamaciones */
  .libro-logo {
    max-height: 26px;
    width: auto;
  }

  /* Íconos sociales */
  footer .social-icons {
    margin-top: 10px;
  }

  footer .social-icons a {
    color: #f8f9fa;
    font-size: 18px;
    margin: 0 8px;
    transition: color 0.3s ease, transform 0.3s ease;
  }

  footer .social-icons a:hover {
    color: #007bff;
    transform: translateY(-3px);
  }
</style>


<!--a aria-label="Chat on WhatsApp" href="https://wa.me/51947492128"><img alt="Chat on WhatsApp" src="WhatsAppButtonGreenLarge.png" />
</a-->
<a href="https://wa.me/+51947492128" target="_blank" class="btn-whatsapp">
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

    function toggleSticky() {
      if (window.innerWidth < 576) { // Si la resolución es menor a 576px (Bootstrap sm)
        navbar.classList.remove("sticky-top");
      } else {
        navbar.classList.add("sticky-top");
      }
    }

    // Ejecutamos la función al cargar la página y al redimensionar la ventana
    toggleSticky();
    window.addEventListener("resize", toggleSticky);

    /*const navbar = document.querySelector(".navbar");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
            localStorage.setItem("navbarScrolled", "true");
        } else {
            navbar.classList.remove("scrolled");
            localStorage.setItem("navbarScrolled", "false");
        }
    });

    const isScrolled = localStorage.getItem("navbarScrolled") === "true";
    if (isScrolled) {
        navbar.classList.add("scrolled");
    }*/


    const toggler = document.querySelector(".navbar-toggler");
    const dropdownMenu = document.querySelector(".dropdown-menu-custom");

    // Inicializo esta variable que servira para ver si el menu esta abierto o cerrado
    // inicialmente se asume que esta cerrado
    let isMenuOpen = false;

    // Alterno el menu al hacer click
    toggler.addEventListener("click", function (e) {
      e.stopPropagation(); // Evito la propagacion del evento
      isMenuOpen = !isMenuOpen; // Cambia el estado
      dropdownMenu.classList.toggle("show", isMenuOpen); // Mostrar/ocultar basado en el estado
    });

    // Cerrando el menú si se hace clic fuera del elemento
    document.addEventListener("click", function (e) {
      if (isMenuOpen && !dropdownMenu.contains(e.target)) {
        isMenuOpen = false; // Cambiar el estado a cerrado
        dropdownMenu.classList.remove("show");
      }
    });

    // Evitar que un clic dentro del menú cierre el menú, pero es necesario tener en
    // cuenta que esto solo estara disponible en resoluciones md hacia abajo
    dropdownMenu.addEventListener("click", function (e) {
      e.stopPropagation(); // Evitar que el clic cierre el menú
    });
  });
</script>

</html>