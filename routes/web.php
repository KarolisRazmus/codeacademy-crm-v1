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

use App\Models\CRMClientConnections;

Route::get('/', function(){
    return CRMClientConnections::with(['clientId_ClientConnections', 'personId_ClientConnections', 'ContactType_ClientConnections'])->get();
   //return view ('welcome');
});

Route::group(['prefix' => '/persons'], function () {

    Route::get('/', [
        'uses' => 'CRMPersonsController@index',
    ]);

    Route::get('/types',[
        'uses' => 'CRMPersonTypesController@index',
    ]);

    Route::get('/connections',[
        'uses' => 'CRMPersonConnectionsController@index',
    ]);
});


Route::group(['prefix' => '/clients'], function () {

    Route::get('/',[
        'uses' => 'CRMClientsController@index',
    ]);

    Route::get('/connections',[
        'uses' => 'CRMClientConnectionsController@index',
    ]);

    Route::get('/connection_types',[
        'uses' => 'CRMClientConnectionsTypesController@index',
    ]);
});


Route::group(['prefix' => '/projects'], function () {

    Route::get('/',[
        'uses' => 'CRMProjectsController@index',
    ]);

    Route::get('/types',[
        'uses' => 'CRMProjectTypesController@index',
    ]);

    Route::group(['prefix' => '/logins'], function () {

        Route::get('/',[
            'uses' => 'CRMProjectLoginsController@index',
        ]);

        Route::get('/types',[
            'uses' => 'CRMProjectLoginTypesController@index',
        ]);

        Route::get('/connections',[
            'uses' => 'CRMProjectLoginsConnectionsController@index',
        ]);
    });
});


Route::group(['prefix' => '/generate-fake-data'], function () {

    Route::group(['prefix' => '/persons'], function () {

        Route::get('/types/{count?}',[
            'uses' => 'CRMFakeDataController@generatePersonTypes',
        ]);

        Route::get('/connections/{count?}',[
            'uses' => 'CRMFakeDataController@generatePersonConnections',
        ]);

        Route::get('/{count?}',[
            'uses' => 'CRMFakeDataController@generatePersons',
        ]);
    });

    Route::group(['prefix' => '/clients'], function () {

        Route::get('/connection_types/{count?}',[
            'uses' => 'CRMFakeDataController@generateClientConnectionTypes',
        ]);

        Route::get('/connections/{count?}',[
            'uses' => 'CRMFakeDataController@generateClientConnections',
        ]);

        Route::get('/{count?}',[
            'uses' => 'CRMFakeDataController@generateClients',
        ]);
    });

    Route::group(['prefix' => '/projects'], function () {

        Route::get('/types/{count?}',[
            'uses' => 'CRMFakeDataController@generateProjectTypes',
        ]);

        Route::group(['prefix' => '/logins'], function () {

            Route::get('/types/{count?}',[
                'uses' => 'CRMFakeDataController@generateProjectLoginTypes',
            ]);

            Route::get('/connections/{count?}',[
                'uses' => 'CRMFakeDataController@generateProjectLoginsConnections',
            ]);

            Route::get('/{count?}',[
                'uses' => 'CRMFakeDataController@generateProjectLogins',
            ]);
        });

        Route::get('/{count?}',[
            'uses' => 'CRMFakeDataController@generateProjects',
        ]);

    });

});




Route::group(['prefix' => 'gyvunu-prieglauda'], function () {

    Route::get('/gyvunai/{id}', function ($id) {

            echo 'Welcome to gyvunai!</br></br>';
            switch ($id) {
                case 1:
                    echo "kiaule";
                    break;
                case 2:
                    echo "voras";
                    break;
                case 3:
                    echo "karve";
                    break;
            }
        });
    });

    Route::group(['prefix' => '/gyvunai/{id}'], function () {

        Route::get('/', function ($id)    {
            echo 'Welcome to zuvys!</br></br>';
            switch ($id) {
                case 1:
                    echo "karpis";
                    break;
                case 2:
                    echo "karosas";
                    break;
                case 3:
                    echo "lynas";
                    break;
            }
        });
    });

    Route::group(['prefix' => '/gyvunai/{id}'], function () {

        Route::get('/', function ($id)    {
            echo 'Welcome to pauksciai!</br></br>';
            switch ($id) {
                case 1:
                    echo "vista";
                    break;
                case 2:
                    echo "papuga";
                    break;
                case 3:
                    echo "genys";
                    break;
            }
        });
    });











