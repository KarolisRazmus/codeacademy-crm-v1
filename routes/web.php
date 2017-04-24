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

Route::group ( [ 'prefix' => '/persons' ] , function () {

    Route::get ( '/' , [
        'uses' => 'CRMPersonsController@index' ,
    ] );

    Route::get ( '/types' , [
        'uses' => 'CRMPersonTypesController@index' ,
    ] );

    Route::get ( '/connections' , [
        'uses' => 'CRMPersonConnectionsController@index' ,
    ] );
} );


Route::group ( [ 'prefix' => '/clients' ] , function () {

    Route::get ( '/' , [
        'uses' => 'CRMClientsController@index' ,
    ] );

    Route::get ( '/connections' , [
        'uses' => 'CRMClientConnectionsController@index' ,
    ] );

    Route::get ( '/connection_types' , [
        'uses' => 'CRMClientConnectionsTypesController@index' ,
    ] );
} );


Route::group ( [ 'prefix' => '/projects' ] , function () {

    Route::get ( '/' , [
        'uses' => 'CRMProjectsController@index' ,
    ] );

    Route::get ( '/types' , [
        'uses' => 'CRMProjectTypesController@index' ,
    ] );

    Route::group ( [ 'prefix' => '/logins' ] , function () {

        Route::get ( '/' , [
            'uses' => 'CRMProjectLoginsController@index' ,
        ] );

        Route::get ( '/types' , [
            'uses' => 'CRMProjectLoginTypesController@index' ,
        ] );

        Route::get ( '/connections' , [
            'uses' => 'CRMProjectLoginsConnectionsController@index' ,
        ] );
    } );
} );


Route::group ( [ 'prefix' => '/generate-fake-data' ] , function () {

    Route::group ( [ 'prefix' => '/persons' ] , function () {

        Route::get ( '/types/{count?}' , [
            'uses' => 'CRMFakeDataController@generatePersonTypes' ,
        ] );

        Route::get ( '/connections/{count?}' , [
            'uses' => 'CRMFakeDataController@generatePersonConnections' ,
        ] );

        Route::get ( '/{count?}' , [
            'uses' => 'CRMFakeDataController@generatePersons' ,
        ] );
    } );

    Route::group ( [ 'prefix' => '/clients' ] , function () {

        Route::get ( '/connection_types/{count?}' , [
            'uses' => 'CRMFakeDataController@generateClientConnectionTypes' ,
        ] );

        Route::get ( '/connections/{count?}' , [
            'uses' => 'CRMFakeDataController@generateClientConnections' ,
        ] );

        Route::get ( '/{count?}' , [
            'uses' => 'CRMFakeDataController@generateClients' ,
        ] );
    } );

    Route::group ( [ 'prefix' => '/projects' ] , function () {

        Route::get ( '/types{count?}' , [
            'uses' => 'CRMFakeDataController@generateProjectTypes' ,
        ] );

        Route::group ( [ 'prefix' => '/logins' ] , function () {

            Route::get ( '/types/{count?}' , [
                'uses' => 'CRMFakeDataController@generateProjectLoginTypes' ,
            ] );

            Route::get ( '/connections/{count?}' , [
                'uses' => 'CRMFakeDataController@generateProjectLoginsConnections' ,
            ] );

            Route::get ( '/{count?}' , [
                'uses' => 'CRMFakeDataController@generateProjectLogins' ,
            ] );
        } );

        Route::get ( '/{count?}' , [
            'uses' => 'CRMFakeDataController@generateProjects' ,
        ] );

    } );

} );


Route::group ( [ 'prefix' => 'gyvunu_prieglauda' ] , function () {

    Route::get ( '/' , function () {
        echo 'Welcome to Gyvunu prieglauda';
    } );

    Route::get ( '/gyvunai' , function () {
        echo 'Welcome to GYVUNAI!';
    } );

    Route::get ( '/zuvys' , function () {
        echo 'Welcome to ZUVYS!';
    } );

    Route::get ( '/pauksciai' , function () {
        echo 'Welcome to PAUKSCIAI!';
    } );


} );











