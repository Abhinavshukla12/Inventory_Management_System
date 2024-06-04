<?php

namespace Config;

$routes = Services::routes();

//routes start
$routes->group('IMS/', ['namespace' => 'App\Controllers\IMSControllers'], static function ($routes) {
    
    //for home page
    $routes->get('home', 'DashboardController::index');
});
//routes end 