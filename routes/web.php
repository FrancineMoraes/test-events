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

Route::get('/', 'Site\HomeController@index')->name('home');
Route::get('/evento/{id}/{slug}', 'Site\EventController@show')->name('site.event.event');
Route::post('/carrinho/evento/{id}', 'Site\EventController@addCart')->name('site.add.cart');
Route::post('/carrinho/alterar-quantidade/', 'Site\EventController@changeQuantity')->name('site.cart.change.quantity');
