<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get("/", "Home::index");

// Pages
$routes->get("about", "Page::about");
$routes->get("contact", "Page::contact");
