<?php

namespace App\Http\Controllers;

use App\models\PcrmClients;
use App\models\PcrmClientsPositions;
use App\models\PcrmPersons;
use App\models\PcrmProjects;
use App\models\PcrmProjectsLogins;
use App\models\PcrmProjectsLoginsConnections;
use App\models\PcrmProjectsLoginsTypes;
use App\models\PcrmProjectsPersonsTypes;
use App\models\PcrmProjectsPersonsTypesConnections;
use App\models\PcrmProjectTypes;
use App\models\PrcmClientsPersonsPositionsConnections;
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

    public function generateClientsPositions(int $count = 20)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            PcrmClientsPositions::create(
                [
                    'name' => $faker->name,
                    'description' => $faker->text,
                ]
            );
        }
    }

    public function generateProjectsLoginsTypes(int $count = 20)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            PcrmProjectsLoginsTypes::create(
                [
                    'name' => $faker->name,
                    'description' => $faker->text,
                ]
            );
        }
    }

    public function generateProjectsPersonsTypes(int $count = 20)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            PcrmProjectsPersonsTypes::create(
                [
                    'name' => $faker->name,
                    'description' => $faker->text,
                ]
            );
        }
    }

    public function generateProjectTypes(int $count = 20)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            PcrmProjectTypes::create(
                [
                    'name' => $faker->name,
                    'description' => $faker->text,
                ]
            );
        }
    }

    public function generateProjects(int $count = 20)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            PcrmProjects::create(
                [
                    'client_id'=> PcrmClients::all()->random()->id,
                    'type_id'=> PcrmProjectTypes::all()->random()->id,
                    'name'=> $faker->name,
                    'description'=> $faker->text,
                ]
            );
        }
    }

    public function generateClientsPersonsPositionsConnections(int $count = 20)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            PrcmClientsPersonsPositionsConnections::create(
                [
                    'client_id'=> PcrmClients::all()->random()->id,
                    'person_id'=> PcrmPersons::all()->random()->id,
                    'position_id'=> PcrmClientsPositions::all()->random()->id,
                    'description'=> $faker->text,
                ]
            );
        }
    }

    public function generateProjectsLogins(int $count = 20)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            PcrmProjectsLogins::create(
                [
                    'type_id'=> PcrmProjectsLoginsTypes::all()->random()->id,
                    'username'=> $faker->userName,
                    'password'=> $faker->password,
                    'login_url'=> $faker->url,
                ]
            );
        }
    }

    public function generateProjectsLoginsConnections(int $count = 20)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            PcrmProjectsLoginsConnections::create(
                [
                    'project_id'=> PcrmProjects::select('id')->get()->random()->id,
                    'login_id'=> PcrmProjectsLogins::select('id')->get()->random()->id,
                ]
            );
        }
    }

    public function generateProjectsPersonsTypesConnections(int $count = 20)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            PcrmProjectsPersonsTypesConnections::create(
                [
                    'project_id'=> PcrmProjects::all()->random()->id,
                    'person_id'=> PcrmPersons::all()->random()->id,
                    'type_id'=> PcrmProjectsPersonsTypes::all()->random()->id,
                ]
            );
        }
    }
}
