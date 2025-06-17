<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Landing::index');

// Features Route
$routes->get('features', 'Features::index');

// Solutions Routes
$routes->group('solutions', function ($routes) {
    $routes->get('/', 'Solutions::index');
    $routes->get('enterprise', 'Solutions::enterprise');
    $routes->get('individual', 'Solutions::individual');
    $routes->get('industry', 'Solutions::industry');
});

// Products Routes
$routes->get('products', 'Products::index');
$routes->get('products/(:segment)', 'Products::$1');

// About and Contact Routes
$routes->get('about', 'About::index');
$routes->get('contact', 'Contact::index');
$routes->post('contact/submit', 'Contact::submit');
