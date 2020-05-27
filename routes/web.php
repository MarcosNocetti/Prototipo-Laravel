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
Route::get('/Home', function () {
    return view('Home');
});
Route::get('/Login', function () {
    return view('Login');
});
Route::get('/Produtos', function () {
    return view('Produtos');
});
Route::get('/Options', function () {
    return view('Options');
});
Route::get('/Perfil', function () {
    return view('Perfil');
});
Route::get('/Contato', function () {
    return view('Contato');
});
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

