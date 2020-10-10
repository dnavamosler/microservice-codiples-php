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

$app->post('/', function (){
    return response()->json([
        'notas' => [
            'laboratorio_1' => 5.0,
            'laboratorio_2' => 5.0,
            'laboratorio_3' => 5.0,
            'blog' => 5.0,
        ]
    ]);
});
