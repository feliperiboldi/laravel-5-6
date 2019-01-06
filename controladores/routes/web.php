<?php

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
    return view('welcome');
});

Route::get('/nome', 'MeuControlador@getNome');

// Passando Parâmetros pela Rota

Route::get('/nome/{id}', 'MeuControlador@getNomeById');

// Requisições HTTP

Route::resource('/cliente', 'ClienteConrolador');

Route::post('/cliente/requisitar', 'ClienteConrolador@requisitar');