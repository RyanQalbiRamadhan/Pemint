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

// Menampilkan data diri berupa nama dan NIM
$router->get('/biodata', function (){
    return 'Nama : Ryan Gatutkaca Qalbi Ramadhan || NIM : 185150700111020';
});

// Menggenerate 32 alphanumeric secara random untuk app key
$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});

// Menampilkan seluruh isi tabel
$router->get('/products', 'ProductController@index');

// Menampilkan data berdasarkan id dari tabel
$router->get('/products/{id}', 'ProductController@show');

// Menambahkan data baru ke dalam tabel
$router->post('/products', 'ProductController@store');

// Menghapus data berdasarkan id dari tabel
$router->delete('/products/{id}', 'ProductController@destroy');

// Mengupdate data berdasarkan id dari tabel
$router->put('/products/{id}', 'ProductController@update');