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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('files',  ['uses' => 'FileController@index']);
    $router->get('files/total', ['uses' => 'FileController@total']);
    $router->get('files/download/{id}', ['uses' => 'FileController@download']);
    $router->get('files/{id}', ['uses' => 'FileController@show']);
    $router->post('files', ['uses' => 'FileController@store']);
    $router->delete('files/{id}', ['uses' => 'FileController@destroy']);
});
