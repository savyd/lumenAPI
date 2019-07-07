<?php

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

// Generate Application Key
$router->get('/key', 'ExampleController@generateKey');

$router->get('/profile', ['as' => 'profile', 'uses' => 'ExampleController@getProfile']);


$router->get('/admin/home', function () {
    return 'Old Enough';
});

$router->get('/fail', function () {
    return 'Not Yet Mature';
});
