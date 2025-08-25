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
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>unete">Unete</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>contactanos">Contactanos</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse dropdown-menu-custom" id="navbarDesplegable">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>quienes_somos">¿Quiénes somos?</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>productos">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>noticias">Noticias</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>unete">Unete</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>contactanos">Contáctanos</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid bg_degradado">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center mt-4">
            <h2 class="display-6 fw-bold mb-4 text-white">Contáctanos</h2>
            <p class="text-white mb-5">
                ¿Tienes alguna pregunta o necesitas más información? ¡Estamos aquí para ayudarte! Completa el formulario
                o utiliza los datos de contacto que se muestran abajo.
            </p>
        </div>
    </div>
</div>

<section class="contact-section mx-2 pt-5 pb-4" id="contacto">
    <div class="container mb-5">
    <h3 class="fw-bold text-center text-success mb-3">Tierra fertil te escucha</h3>
        <!--probando un nuevo efecto-->
        <div class="row g-4">
            <!-- Contact Details -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body d-flex align-items-center" style="background: linear-gradient(to bottom right, #e8f5e9, #ffffff); border-radius: 8px;">
                        <div class="me-3 d-flex justify-content-center align-items-center" style="height: 60px; width: 60px; background: rgba(58, 125, 51, 0.1); border-radius: 50%;">
                            <i class="bi bi-geo-alt fs-4 text-success"></i>
                        </div>
                        <div>
                            <h5 class="card-title fw-bold mb-1">Nuestra Ubicación</h5>
                            <p class="card-text text-muted mb-0">
                                Calle Principal 123, Sector Agrario<br> Ciudad, País
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body d-flex align-items-center" style="background: linear-gradient(to bottom right, #e8f5e9, #ffffff); border-radius: 8px;">
                        <div class="me-3 d-flex justify-content-center align-items-center" style="height: 60px; width: 60px; background: rgba(58, 125, 51, 0.1); border-radius: 50%;">
                            <i class="bi bi-envelope fs-4 text-success"></i>
                        </div>
                        <div>
                            <h5 class="card-title fw-bold mb-1">Correo Electrónico</h5>
                            <p class="card-text text-muted mb-0">
                                <a href="mailto:info@tierrafertil.com.pe" class="text-decoration-none text-success">info@tierrafertil.com.pe</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body d-flex align-items-center" style="background: linear-gradient(to bottom right, #e8f5e9, #ffffff); border-radius: 8px;">
                        <div class="me-3 d-flex justify-content-center align-items-center" style="height: 60px; width: 60px; background: rgba(58, 125, 51, 0.1); border-radius: 50%;">
                            <i class="bi bi-telephone fs-4 text-success"></i>
                        </div>
                        <div>
                            <h5 class="card-title fw-bold mb-1">Teléfono</h5>
                            <p class="card-text text-muted mb-0">
                                <a href="tel:+1234567890" class="text-decoration-none text-success">+12 345 678 90</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="container shadow p-4 rounded" style="/*background: #ebffde7a;*/ border: solid 1px #0080004d;">
        
        <div class="row mt-3 mb-3">
            <div class="col-lg-4 mx-auto mt-3">
                <!-- Viñeta con diálogo -->
                <div class="alert alert-success d-flex align-items-center shadow-sm p-3 mb-4 rounded-3">
                    <i class="bi bi-chat-left-text fs-3 me-3 text-success"></i>
                    <div>
                        <strong>Deja tu mensaje o consulta:</strong><br>
                        En menos de 24 horas te responderemos. ¡Gracias por su preferencia!
                    </div>
                </div>
                <div class="text-center">
                    <img src="<?= base_url() ?>/resources/assets/logo_atencion_cliente.png" alt="Atención al cliente"
                        class="img-fluid logo-atencion" style="max-height: 350px;">
                </div>
            </div>
            <!-- Contact Form -->
            <div class="col-lg-8 mx-auto">
                <form>
                    <div class="col-md-12 mb-3">
                        <label for="dni_empleado" class="form-label">Nombres</label>
                        <div class="input-group shadow-sm rounded">
                            <span class="input-group-text"><i class="bi bi-person-vcard"></i></span>
                            <input type="text" name="dni_empleado" id="dni_empleado" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="correo_electronico_empleado" class="form-label">Correo</label>
                        <div class="input-group shadow-sm rounded">
                            <span class="input-group-text"><i class="bi bi-envelope-at"></i></span>
                            <input type="text" name="correo_electronico_empleado" id="correo_electronico_empleado"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="celular_empleado" class="form-label">Telefono</label>
                        <div class="input-group shadow-sm rounded">
                            <span class="input-group-text"><i class="bi bi-phone-fill"></i></span>
                            <input type="text" name="celular_empleado" id="celular_empleado" class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje o consulta</label>
                        <textarea class="shadow-sm rounded form-control" id="message" rows="4"
                            placeholder="Escribe tu mensaje" required></textarea>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-lg">Enviar mensaje o consulta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    

</section>

<section class="pt-0 pb-5">
<div class="container-fluid mt-3 position-relative" style="padding: 0;">
    <!-- Imagen de fondo con efecto blur -->
        <img src="<?= base_url() ?>/resources/assets/fondo_mapa.jpg" alt="Fondo" 
            class="img-fluid position-absolute top-0 start-0 w-100 h-100" 
            style="object-fit: cover; filter: blur(6px); padding-top: 15px;">
        <!-- indicaciones del mapa -->
        <div class="container-fluid position-relative text-center bg_degradado_reves pb-4 pt-4" style="z-index: 2; margin-top: 35px">
        <div style="filter: blur(16px);"></div>
        <div class="container">
        <h3 class="text-success fw-bold pb-2">¿Como llegar?</h3>
            <h6 class="text-dark">Desde el punto de partida en Las Lomas, 
                siga la carretera principal en dirección al Valle Chipillico. Al llegar al cruce,
                 tome la vía que conduce al caserío Monte de los Olivos. 
                 Continúe el trayecto siguiendo la señalización hasta llegar a su destino en el mencionado caserío.</h6>
        </div>
            
        </div>
        <!-- Contenedor del mapa -->
        <div class="col-lg-8 mx-auto position-relative" style="z-index: 1;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d248.53250467840687!2d-80.08097178527554!3d-4.679279034577197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-4.679359566802348!2d-80.08093222269498!5e0!3m2!1ses-419!2spe!4v1736451488215!5m2!1ses-419!2spe" width="100%" height="450" style="border:0; margin-bottom: -6px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!--div class="ratio ratio-16x9 shadow-sm rounded-3 bg-white">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d557.9364416931938!2d-80.08080119132002!3d-4.679584763411783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-4.67933796055198!2d-80.08094269318867!5e0!3m2!1ses-419!2spe!4v1735669256956!5m2!1ses-419!2spe"
                    style="border:0; width: 100%; height: 100%;" 
                    allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe></div-->
        </div>
        <div class="container-fluid position-relative bg-secondary-subtle pt-0 pb-1" style="z-index: 2;">            
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
