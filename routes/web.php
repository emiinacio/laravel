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

/*Route::get('/', function () {
   //return view('welcome');
   return 'Bem vindo á primeira app Laravel';
});*/

Route::get('/', 'homeController@home')->name('site.index');
Route::get('/aboutus', 'aboutusController@aboutus')->name('site.aboutus');
Route::get('/contacts', 'contactsController@contacts')->name('site.contacts');

Route::get('/contacts/{nome}/{assunto}/{mensagem?}', function (string $nome,string $assunto,string $mensagem="sem mensagem") {
    // return view('welcome');
    //return 'About us';
    echo "Nome: $nome<br>Assunto: $assunto<br>Mensagem: $mensagem";
 });

 Route::get('/login',function() {return 'Login'; })->name('site.login');

Route::get('/clientes',function() {return 'Clientes'; });

Route::get('/fornecedores',function() {return 'Fornecedores'; });
Route::prefix('/app')->group(function() {
    Route::get('/clientes',function() {return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores',function() {return 'Fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos',function() {return 'Produtos'; })->name('app.produtos');
});
