<!-- Footer -->
<!--footer class="text-center">
  <div class="container">
    <p class="mb-0">&copy; 2024 Tierra Fértil. Todos los derechos reservados.</p>
    <p>Diseñado por TecnoPlus Piura.</p>
  </div>
</footer-->
<!-- Footer -->
<footer class="text-center">
  <div class="container">
    <p class="mb-0">&copy; 2024 Tierra Fértil. Todos los derechos reservados.</p>
    <p>Diseñado por TecnoPlus Piura.</p>

    <!-- Opcional: Redes sociales -->
    <div class="social-icons">
      <a href="#" target="_blank" title="Facebook">
        <i class="bi bi-facebook"></i></a>
      <a href="#" target="_blank" title="Twitter">
        <i class="bi bi-twitter"></i></a>
      <a href="#" target="_blank" title="Instagram">
        <i class="bi bi-instagram"></i></a>
      <a href="#" target="_blank" title="LinkedIn">
        <i class="bi bi-linkedin"></i></a>
    </div>
  </div>
</footer>



<style>
  /* Estilos del footer */

footer .container {
  max-width: 1200px; /* Ancho máximo para mejor alineación */
  margin: 0 auto;
  padding: 0 15px;
}

/* Títulos y texto en el footer */
footer p {
  font-size: 14px;
  margin: 10px 0;
}

footer p:last-child {
  font-size: 13px;
  color: #6c757d;
}

/* Íconos de redes sociales */
footer .social-icons {
  margin-top: 20px;
}

footer .social-icons a {
  color: #6c757d;
  font-size: 18px;
  margin: 0 10px;
  transition: color 0.3s ease, transform 0.3s ease;
}

footer .social-icons a:hover {
  color: #007bff;
  transform: translateY(-3px); /* Hover con efecto sutil */
}

footer .social-icons a i {
  transition: transform 0.3s ease;
}

footer .social-icons a:hover i {
  transform: scale(1.1); /* Aumenta el tamaño al hacer hover */
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