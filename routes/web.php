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
/*    return view('welcome');
*/
    return view('index');
});

Route::post('/redirect.php', function () {
    return view('redirect');
});

Route::post('/cadastroCliente.php', function () {
    return view('cadastroCliente');
});

Route::post('/cadastroCliente2.php', function () {
    return view('cadastroCliente2');
});

Route::get('/getCliente.php', function () {
    return view('getCliente');
});

Route::get('/getInfo.php', function () {
    return view('getInfo');
});

Route::get('/getConstr.php', function () {
    return view('getConstr');
});

Route::get('/getAuto.php', function () {
    return view('getAuto');
});

Route::get('/getEletrodom.php', function () {
    return view('getEletrodom');
});

Route::get('/getEletropor.php', function () {
    return view('getEletropor');
});

Route::get('/getTrans.php', function () {
    return view('getTrans');
});

Route::get('/getOthers.php', function () {
    return view('getOthers');
});

Route::get('/atualiza.php', function () {
    return view('atualiza');
});


Route::get('/listaClientes.php', function () {
    return view('listaClientes');
});


Route::get('/listaPrestadores.php', function () {
    return view('listaPrestadores');
});

Route::post('/cadastroPrestador.php', function () {
    return view('cadastroPrestador');
});

Route::post('/cadastroPrestador2.php', function () {
    return view('cadastroPrestador2');
});

Route::get('/apaga.php', function () {
    return view('apaga');
});

