<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // variaveis
    $nome = "Matheus";
    $idade = 29;

    // Arrays
    $arr = [1,2,3,4,5];
    $peoples = 
    [
        "Matheus",
        "Thomas",
        "Felizardo", 
        "Juka"
    ];
    return view('welcome', 
    [
        'nome' => $nome,
        'idade' => $idade,
        'arr' => $arr,
        'peoples' => $peoples
    ]);
});
Route::get('/contato', function () {
    return view('contato');
});
Route::get('/login', function () {
    return view('login');
});