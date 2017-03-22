<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/sobre', function()
{
	return View::make('pages.sobre'); // laravel 5 return View('pages.home');
});
Route::get('/biblioteca', function()
{
	return View::make('pages.biblioteca'); // laravel 5 return View('pages.home');
});
Route::get('/creditos', function()
{
	return View::make('pages.creditos'); // laravel 5 return View('pages.home');
});
Route::get('/desemprego', function()
{
	return View::make('pages.outro-site-content'); // laravel 5 return View('pages.home');
});
Route::get('/diretoria-servicos', function()
{
	return View::make('pages.diretoria-servicos'); // laravel 5 return View('pages.home');
});
Route::get('/comissao-implantacao', function()
{
	return View::make('pages.comissao-implantacao'); // laravel 5 return View('pages.home');
});
Route::get('/fale-conosco', function()
{
	return View::make('pages.fale-conosco'); // laravel 5 return View('pages.about');
});
Route::get('/calendario', function()
{
	return View::make('pages.calendario'); // laravel 5 return View('pages.about');
});

Route::post('/enviarEmail', 'EmailController@enviar');
Route::get('/', 'HomeController@getIndex'); 
Route::controller('/home', 'HomeController');
Route::controller('/curso', 'CursoController');
Route::controller('/noticia', 'NoticiaController');
Route::controller('/docente', 'DocenteController');
Route::controller('/empregos', 'EmpregoController');

/*
Route::get('contato', function(){

    return "Opa";
});

Route::get('produtos', function(){

    return "Boa empresa top";
});

Route::get('produto/adicionar/{id?}', function($id = "chocolate"){

    return "teste = {$id}";
});
Route::group(["prefix"=>"painel", "middleware"=>"my-middleware"] , function(){

     Route::get('/', function(){

    return view("painel.index");
    });

    Route::get('usuarios', function(){

    return "usuarios do painel";
    });

    Route::get('noticias', function(){

    return "noticias do painel";
    });
});
    Route::get('/login', function(){

    return "Voce nao tem permissão seu lixo, logue aqui <input type='text'>";
    }); */
