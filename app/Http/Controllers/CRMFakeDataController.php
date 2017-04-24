<?php

namespace App\Http\Controllers;

use App\Models\CRMClients;
use App\Models\CRMPersons;
use Illuminate\Http\Request;
use Faker\Factory;
use Ramsey\Uuid\Uuid;

class CRMFakeDataController extends Controller
{
    public function generatePersons(int $count = 1)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            CRMPersons::create([
                'id' => $faker->uuid,
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber
            ]);
        }
    }

    public function generateClients(int $count = 1)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {
            CRMClients::create([
                'id' => $faker->uuid,
                'name' => $faker->name
            ]);
        }
    }
}


