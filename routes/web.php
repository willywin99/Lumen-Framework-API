<?php

use Illuminate\Support\Str;

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
$router->get('/key', function() {
    return Str::random(32);
});

$router->get('/foo', function() {
    return 'Hello, Get Method!';
});

$router->post('/bar', function() {
    return 'Hello, POST Method!';
});

// The router allows you to register routes that respon to any HTTP verb:
$router->get('/get', function() {
    return 'GET';
});

$router->get('/post', function() {
    return 'POST';
});

$router->get('/put', function() {
    return 'PUT';
});

$router->get('/patch', function() {
    return 'PATCH';
});

$router->get('/delete', function() {
    return 'DELETE';
});

$router->get('/options', function() {
    return 'OPTIONS';
});

// Basic Route Parameter
$router->get('/user/{id}', function($id) {
    return 'User id = ' . $id;
});

$router->get('/post/{postId}/comments/{commentId}', function ($postId, $commentId) {
    return "Post ID =  {$postId} <br> Comment ID = {$commentId}";
});

// Optional Route Parameter
$router->get('/optional[/{param}]', function ($param = null) {
    return $param;
});

$router->get('profile/willywin', ['as' => 'route.profile', function () {
    return 'Route willywin';
}]);

$router->get('profile', function () {
    return redirect()->route('route.profile');
});

$router->group(['prefix' => 'admin'], function() use ($router) {
    $router->get('home', function() {
        return 'Home Admin';
    });

    $router->get('profile', function() {
        return 'Profile Admin';
    });
});
