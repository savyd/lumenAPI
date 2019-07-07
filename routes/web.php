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

$router->get('/get', function () {
    return 'GET';
});
$router->post('/post', function () {
    return 'POST';
});
$router->put('/put', function () {
    return 'PUT';
});
$router->patch('/patch', function () {
    return 'PATCH';
});
$router->delete('/delete', function () {
    return 'DELETE';
});
$router->options('/options', function () {
    return 'OPTIONS';
});


// Basic Router Parameter
$router->get('/user/{id}', function ($id) {
    return 'User id ='. $id;
});

// Optional Route Parameter
$router->get('optional[/{param}]', function ($param = null) {
    return $param;
});

// As Route Name
$router->get('profile/sayid', ['as' => 'route.profile', function () {
    return "Route Sayid = ". route('route.profile');
}]);

$router->get('profile', function () {
    return redirect()->route('route.profile');
});
