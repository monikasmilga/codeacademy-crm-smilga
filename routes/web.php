<?php

use App\models\PcrmPersons;

Route::get('/', function () {

    return PcrmPersons::get();
});

Route::get('/new-person', function () {

    return PcrmPersons::create([
        'id' => Ramsey\Uuid\Uuid::uuid4(),
        'name' => 'Monika',
        'email' => 'emailas monikos',
        'phone' => '556633'
    ]);
});