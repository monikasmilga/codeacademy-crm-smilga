<?php

namespace App\Http\Controllers;

use App\models\PcrmPersons;
use Faker\Factory;

class PcrmFakeDataController extends Controller
{
    public function generatePersons(int $count = 20)
    {
        $faker = Factory::create();


        for ($i = 0; $i < $count; $i++) {
            PcrmPersons::create(
                [
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'phone' => $faker->phoneNumber,
                ]);
        }
    }
}
