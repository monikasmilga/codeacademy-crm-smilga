<?php


use App\models\PcrmProjectsLoginsConnections;
use App\models\PrcmClientsPersonsPositionsConnections;

Route::get('/', function () {

    return view('main');

    // return PcrmProjectsLoginsConnections::with(['projectData', 'loginData'])->get();
});


/**
 * All routes that GENERATE FAKE DATA
 */

Route::group(['prefix' => 'generate-fake-data'], function () {

    Route::group(['prefix' => 'clients'], function ()
    {
        Route::get('/persons-positions-connections/{count?}', ['uses' => 'PcrmFakeDataController@generateClientsPersonsPositionsConnections']);

        Route::get('/positions/{count?}', ['uses' => 'PcrmFakeDataController@generateClientsPositions']);

        Route::get('/{count?}', ['uses' => 'PcrmFakeDataController@generateClients']);

    });

    Route::group(['prefix' => 'projects'], function ()
    {
        Route::get('/logins-types/{count?}', ['uses' => 'PcrmFakeDataController@generateProjectsLoginsTypes']);

        Route::get('/logins-connections/{count?}', ['uses' => 'PcrmFakeDataController@generateProjectsLoginsConnections']);

        Route::get('/logins/{count?}', ['uses' => 'PcrmFakeDataController@generateProjectsLogins']);

        Route::get('/persons-types-connections/{count?}', ['uses' => 'PcrmFakeDataController@generateProjectsPersonsTypesConnections']);

        Route::get('/persons-types/{count?}', ['uses' => 'PcrmFakeDataController@generateProjectsPersonsTypes']);

        Route::get('/types/{count?}', ['uses' => 'PcrmFakeDataController@generateProjectTypes']);

        Route::get('/{count?}', ['uses' => 'PcrmFakeDataController@generateProjects']);

    });

    Route::get('persons/{count?}', [

        'uses' => 'PcrmFakeDataController@generatePersons'

    ]);

});


////////////////////////////////////////////////////////////////////////////////////////////////

/**
 * PERSONS
 */
Route::get('/persons', [

    'uses' => 'PcrmPersonsController@index'

]);


////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * CLIENTS
 */
Route::get('/clients', [

    'uses' => 'PcrmClientsController@index'

]);


/**
 * CLIENTS POSITIONS
 */
Route::get('/clients-positions', [

    'uses' => 'PcrmClientsPositionsController@index'

]);


/**
 * CLIENTS PERSONS POSITIONS CONNECTIONS
 */

Route::get('/clients-persons-positions-connections', [

    'uses' => 'PcrmClientsPersonsPositionsConnectionsController@index'
]);


////////////////////////////////////////////////////////////////////////////////////////////////


/**
 * PROJECTS
 */

Route::get('/projects', [

    'uses' => 'PcrmProjectsController@index'
]);


/**
 * PROJECTS LOGINS TYPES
 */

Route::get('/projects-logins-types', [

    'uses' => 'PcrmProjectsLoginsTypesController@index'

]);


/**
 * PROJECTS PERSONS TYPES
 */

Route::get('/projects-persons-types', [

    'uses' => 'PcrmProjectsPersonsTypesController@index'

]);


Route::get('/project-types', [

    'uses' => 'PcrmProjectTypesController@index'
]);



/**
 * PROJECTS LOGINS
 */
Route::get('/projects-logins', [

    'uses' => 'PcrmProjectsLoginsController@index'

]);


/**
 * PROJECTS LOGINS CONNECTIONS
 */
Route::get('projects-logins-connections', [

    'uses' => 'PcrmProjectsLoginsConnectionsController@index'

]);


/**
 * PROJECTS PERSONS TYPES CONNECTIONS
 */
Route::get('/projects-persons-types-connections', [

    'uses' => 'PcrmProjectsPersonsTypesConnectionsController@index'

]);



