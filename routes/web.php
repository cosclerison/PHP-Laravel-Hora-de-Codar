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
// Rota da pagina
Route::get('/', function () {

    $nome       = "clerison";
    $idade      = 40;
    $profissao  = "Developer";
    $arr        = [10,20,30,40,50];
    $nomes      = [
                    "Clerison",
                    "Juliana",
                    "Bianca",
                    "Maggie",
                ];

    // nome do arquivo da view
    return view('welcome', 
    [
        'nome'      => $nome, 
        'idade'     => $idade,
        'profissao' => $profissao,
        'arr'       => $arr,
        'nomes'     => $nomes
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/product/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});