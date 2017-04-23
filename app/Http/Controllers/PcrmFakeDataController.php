<?php

namespace App\Http\Controllers;

use App\models\PcrmClients;
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

    public function generateClients(int $count = 20)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            PcrmClients::create(
                [
                    'name' => $faker->name,
                    'type' => $faker->randomElement(['F', 'J']),
               ]
            );
        }
    }
}
