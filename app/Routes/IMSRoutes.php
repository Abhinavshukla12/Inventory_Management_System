<?php

namespace Config;

$routes = Services::routes();

//routes start
$routes->group('IMS/', ['namespace' => 'App\Controllers\IMSControllers'], static function ($routes) {
    
    //for home page
    $routes->get('home', 'DashboardController::index');
    $routes->get('feature', 'DashboardController::feature');
    $routes->get('pricing', 'DashboardController::pricing');
    $routes->get('about', 'DashboardController::about');
    $routes->get('profile', 'DashboardController::profile');
    $routes->get('login', 'DashboardController::login');
    $routes->get('change_password', 'DashboardController::change_password');
    $routes->get('logout', 'DashboardController::logout');
});
//routes end 