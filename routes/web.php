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
$router->get('/key', function () {
    return str_random(32);
});


// Router middleware
$router->get('/admin/home', ['middleware' => 'age', function () {
    return 'Old Enough';
}]);

$router->get('/fail', function () {
    return 'Not Yet Mature';
});
