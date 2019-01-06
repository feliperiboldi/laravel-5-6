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

Route::get('/primeiraview/', function() {
	return view('minhaview');
});

// Passando parâmetros para View
Route::get('/nomes/', function() {
	return view('minhaview')
	->with('nome', 'Felipe')
	->with('sobrenome', 'Riboldi');
});

Route::get('/nomes2/{nome}/{sobrenome}', function($nome, $sobrenome) {
	// return view('minhaview')
	// ->with('nome', $nome)
	// ->with('sobrenome', $sobrenome);

	// $params = array(
	// 	'nome' => $nome,
	// 	'sobrenome' => $sobrenome
	// );

	return view('minhaview', compact('nome', 'sobrenome'));
});