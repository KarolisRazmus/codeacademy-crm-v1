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

Route::get('/persons',[
    'uses' => 'CRMPersonsController@index',
]);

Route::get('/clients',[
    'uses' => 'CRMClientsController@index',
]);

Route::get('/generate-fake-data/persons/{count?}',[
    'uses' => 'CRMFakeDataController@generatePersons',

]);

Route::get('/generate-fake-data/clients/{count?}',[
    'uses' => 'CRMFakeDataController@generateClients',

]);