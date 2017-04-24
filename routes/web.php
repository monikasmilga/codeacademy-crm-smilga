<?php

/**
 * All routes that generate fake data for CLIENTS
 */

Route::group(['prefix' => 'generate-fake-data'], function () {

    Route::get('persons/{count?}', [

        'uses' => 'PcrmFakeDataController@generatePersons'

    ]);

    Route::get('/clients/{count?}', [

        'uses' => 'PcrmFakeDataController@generateClients'

    ]);

    Route::get('/clients-positions/{count?}', [

        'uses' => 'PcrmFakeDataController@generateClientsPositions'
    ]);

    Route::get('/projects-logins-types/{count?}', [

        'uses' => 'PcrmFakeDataController@generateProjectsLoginsTypes'

    ]);

    Route::get('/projects-persons-types/{count?}', [

        'uses' => 'PcrmFakeDataController@generateProjectsPersonsTypes'

    ]);

    Route::get('/project-types/{count?}', [

        'uses' => 'PcrmFakeDataController@generateProjectTypes'

    ]);

    Route::get('/projects/{count?}', [

        'uses' => 'PcrmFakeDataController@generateProjects'
    ]);

    Route::get('/clients-persons-positions-connections/{count?}', [

        'uses' => 'PcrmFakeDataController@generateClientsPersonsPositionsConnections'
    ]);

    Route::get('/projects-logins/{count?}', [

        'uses' => 'PcrmFakeDataController@generateProjectsLogins'

    ]);

    Route::get('/projects-logins-connections/{count?}', [

        'uses' => 'PcrmFakeDataController@generateProjectsLoginsConnections'

    ]);

    Route::get('/projects-persons-types-connections/{count?}', [

        'uses' => 'PcrmFakeDataController@generateProjectsPersonsTypesConnections'

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

    'uses' => 'PrcmClientsPersonsPositionsConnectionsController@index'
]);


////////////////////////////////////////////////////////////////////////////////////////////////

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
 * PROJECTS
 */

Route::get('/projects', [

    'uses' => 'PcrmProjectsController@index'
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


