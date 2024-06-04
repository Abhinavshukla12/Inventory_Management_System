<?php

namespace Config;

$routes = Services::routes();

//routes start
$routes->group('IMS/', ['namespace' => 'App\Controllers\IMSControllers'], static function ($routes) {
    
    //for home page
    $routes->get('home', 'DashboardController::index');
    //for feature page
    $routes->get('feature', 'FeatureController::index');
    $routes->get('product_information', 'FeatureController::product_information');
    $routes->get('order', 'FeatureController::order');
    $routes->get('supplier', 'FeatureController::supplier');
    $routes->get('purchase_order', 'FeatureController::purchase_order');
    $routes->get('sales_order', 'FeatureController::sales_order');
    $routes->get('warehouse', 'FeatureController::warehouse');
    $routes->get('return_and_refund', 'FeatureController::return_and_refund');

    
    $routes->get('pricing', 'DashboardController::pricing');
    $routes->get('about', 'DashboardController::about');
    $routes->get('profile', 'DashboardController::profile');
    $routes->get('login', 'DashboardController::login');
    $routes->get('change_password', 'DashboardController::change_password');
    $routes->get('logout', 'DashboardController::logout');
});
//routes end 