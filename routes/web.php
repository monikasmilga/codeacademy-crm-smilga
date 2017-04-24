<?php

/**
 * PERSONS
 */
Route::get('/persons', [

    'uses'=> 'PcrmPersonsController@index'

]);

Route::get('/generate-fake-data/persons/{count?}', [

    'uses' => 'PcrmFakeDataController@generatePersons'

]);

/**
 * CLIENTS
 */
Route::get('/clients', [

    'uses'=> 'PcrmClientsController@index'

]);

Route::get('/generate-fake-data/clients/{count?}', [

    'uses' => 'PcrmFakeDataController@generateClients'

]);

/**
 * CLIENTS POSITIONS
 */
Route::get('/clients-positions', [

    'uses'=> 'PcrmClientsPositionsController@index'

]);

Route::get('/generate-fake-data/clients-positions/{count?}', [

    'uses'=> 'PcrmFakeDataController@generateClientsPositions'
]);

/**
 * PROJECTS LOGINS TYPES
 */

Route::get('/projects-logins-types', [

    'uses'=> 'PcrmProjectsLoginsTypesController@index'

]);

Route::get('/generate-fake-data/projects-logins-types/{count?}', [

    'uses'=> 'PcrmFakeDataController@generateProjectsLoginsTypes'

]);

/**
 * PROJECTS PERSONS TYPES
 */

Route::get('/projects-persons-types', [

    'uses'=> 'PcrmProjectsPersonsTypesController@index'

]);

Route::get('/generate-fake-data/projects-persons-types/{count?}', [

    'uses'=> 'PcrmFakeDataController@generateProjectsPersonsTypes'

]);

Route::get('/project-types', [

    'uses'=>'PcrmProjectTypesController@index'
]);

Route::get('/generate-fake-data/project-types/{count?}', [

    'uses'=> 'PcrmFakeDataController@generateProjectTypes'

]);

/**
 * PROJECTS
 */

Route::get('/projects', [

    'uses'=>'PcrmProjectsController@index'
]);

Route::get('/generate-fake-data/projects/{count?}', [

    'uses'=>'PcrmFakeDataController@generateProjects'
]);

/**
 * CLIENTS PERSONS POSITIONS CONNECTIONS
 */

Route::get('/clients-persons-positions-connections', [

    'uses'=>'PrcmClientsPersonsPositionsConnectionsController@index'
]);

Route::get('/generate-fake-data/clients-persons-positions-connections', [

    'uses'=>'PcrmFakeDataController@generateClientsPersonsPositionsConnections'
]);

/**
 * PROJECTS LOGINS
 */
Route::get('/projects-logins', [

    'uses'=>'PcrmProjectsLoginsController@index'

]);

Route::get('/generate-fake-data/projects-logins/{count?}', [

    'uses'=>'PcrmFakeDataController@generateProjectsLogins'

]);

/**
 * PROJECTS LOGINS CONNECTIONS
 */
Route::get('projects-logins-connections', [

    'uses'=>'PcrmProjectsLoginsConnectionsController@index'

]);

Route::get('/generate-fake-data/projects-logins-connections/{count?}', [

    'uses'=>'PcrmFakeDataController@generateProjectsLoginsConnections'

]);

/**
 * PROJECTS PERSONS TYPES CONNECTIONS
 */
Route::get('/projects-persons-types-connections', [

    'uses'=>'PcrmProjectsPersonsTypesConnectionsController@index'

]);

Route::get('/generate-fake-data/projects-persons-types-connections/{count?}', [

    'uses'=>'PcrmFakeDataController@generateProjectsPersonsTypesConnections'

]);
