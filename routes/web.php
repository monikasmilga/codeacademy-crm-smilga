<?php

Route::get('/persons', [

    'uses'=> 'PcrmPersonsController@index'

]);

Route::get('/generate-fake-data/persons/{count?}', [

    'uses' => 'PcrmFakeDataController@generatePersons'

]);