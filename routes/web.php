<?php

Route::get('/persons', [

    'uses'=> 'PcrmPersonsController@index'

]);

Route::get('/generate-fake-data/persons/{count?}', [

    'uses' => 'PcrmFakeDataController@generatePersons'

]);

Route::get('/clients', [

    'uses'=> 'PcrmClientsController@index'

]);

Route::get('/generate-fake-data/clients/{count?}', [

    'uses' => 'PcrmFakeDataController@generateClients'

]);