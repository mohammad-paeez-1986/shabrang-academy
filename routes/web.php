<?php

namespace App;

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

$router->get('/', 'MainController@index');

$router->get("/{name}", function ($name) {

    $name = urldecode($name);

    if (view()->exists($name)) {
        return view("$name");
    }

    return response(view('not-found'), 404);
});
