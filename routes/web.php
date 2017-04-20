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

use App\Models\CRMPersons;

Route::get('/', function () {

    return CRMPersons::get();

});

Route::get('/new-person', function () {

    return CRMPersons::create([
        'id' => Ramsey\Uuid\Uuid::uuid4(),
        'name' => 'Karolis',
        'email' =>'karolis@gmail.com',
        'phone' => '861855444'
    ]);

});