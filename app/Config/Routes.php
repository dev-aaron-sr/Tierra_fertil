<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Vistas::v_inicio');
$routes->get('/quienes_somos', 'Vistas::v_quienes_somos');
$routes->get('/noticias', 'Vistas::v_noticias');
$routes->get('/contactanos', 'Vistas::v_contactanos');
$routes->get('/productos', 'Vistas::v_productos');
$routes->get('/unete','Vistas::v_unete');
$routes->get('/noticias/noticia1', 'Vistas::v_detalle_noticia');




