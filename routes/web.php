<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/biodata', function (){
    return 'Nama : Ryan Gatutkaca Qalbi Ramadhan || NIM : 185150700111020';
});

$router->get('/products', 'ProductController@index');
$router->get('/products/{id}', 'ProductController@show');