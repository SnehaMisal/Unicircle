<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about_us', 'PageController::about_us');
$routes->get('blog', 'PageController::blog');
$routes->get('blog_1', 'PageController::blog_1');
$routes->get('blog_2', 'PageController::blog_2');
$routes->get('blog_3', 'PageController::blog_3');
$routes->get('get_in_touch', 'PageController::get_in_touch');
$routes->get('get_started', 'PageController::book_demo');
$routes->get('terms_of_use', 'PageController::terms_of_use');
$routes->get('cookie_policy', 'PageController::cookie_policy');
$routes->get('anti_bullying_policy', 'PageController::anti_bullying_policy');
$routes->get('privacy_policy', 'PageController::privacy_policy');
$routes->get('community_guidlines', 'PageController::community_guidlines');
$routes->get('features', 'PageController::features');