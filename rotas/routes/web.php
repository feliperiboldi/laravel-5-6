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

use Illuminate\Http\Request;

Route::get('/', function () {
	return view('welcome');
});

Route::get('/ola', function() {
	return "<h1>Olá Mundo!</h1>";
});

Route::get('/nome/{nome}', function($nome) {
	return "<h1>Olá, meu nome é: ".ucfirst($nome)."</h1>";
});

Route::get('/tabuada/{n}', function($numero) {
	if(is_integer($numero)) {
		for($i = 0; $i <= 10; $i++) {
			echo $numero * $i."<br/>";
		}
		return "O número escolhido para a taboada foi ".$numero;
	} else {
		return "Você precisa digitar um número Inteiro!";
	}
})->where('n', '[0-9]+');

Route::get('/nome/restrito/{name?}', function($name = null) {

	if(isset($name)) {
		return "Olá, ".ucfirst($name)."!";
		var_dump($name);
	}

	return "Olá, não há nome na URL";
})->where('name', '[A-Za-z]+');

Route::prefix("app")->group(function() {
	Route::get("/", function() {
		return "Página Principal do App";
	});

	Route::get("/profile", function() {
		return "Página de Perfil";
	});

	Route::get("/about", function() {
		return "Página de Sobre";
	});
});

// Redirecionamento de Rotas

Route::redirect('/aqui', '/ola', 301);

Route::view('/hello', 'hello');

Route::view('/viewnome', 'hellonome', 
	['nome' => 'Felipe', 'sobrenome' => 'Riboldi']);

Route::get('/hellonome/{nome}/{sobrenome}', function($nome, $sobrenome) {
	return view('hellonome', ['nome' => $nome, 'sobrenome' => $sobrenome]);
});

// Métodos HTTP

Route::get('/rest/get', function() {
	return "Hello {GET}";
});

Route::post('/rest/post', function() {
	return "Hello {POST}";
});

Route::delete('/rest/delete', function() {
	return "Hello {DELETE}";
});

Route::put('/rest/put', function() {
	return "Hello {PUT}";
});

Route::patch('/rest/patch', function() {
	return "Hello {PATCH}";
});

Route::options('/rest/options', function() {
	return "Hello {OPTIONS}";
});

Route::post('/rest/imprimir', function(Request $requisicao) {
	$nome = $requisicao->input('nome');
	$idade = $requisicao->input('idade');
	return "Hello".$nome." Sua idade é: ".$idade;
});

Route::match(['get', 'post'], '/rest/match', function() {
	return "Hello";
});

Route::any('/rest/any', function() {
	return "Hello All";
});