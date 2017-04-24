<?php

namespace App\Http\Controllers;

use App\Models\CRMClientConnections;
use App\Models\CRMClientConnectionsTypes;
use App\Models\CRMClients;
use App\Models\CRMPersonConnections;
use App\Models\CRMPersons;
use App\Models\CRMPersonTypes;
use App\Models\CRMProjectLogins;
use App\Models\CRMProjectLoginsConnections;
use App\Models\CRMProjectLoginTypes;
use App\Models\CRMProjects;
use App\Models\CRMProjectTypes;
use Illuminate\Http\Request;
use Faker\Factory;
use Ramsey\Uuid\Uuid;

class CRMFakeDataController extends Controller
{
    public function generatePersons ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0 ; $i < $count ; $i ++ ) {
            CRMPersons::create ( [
                'id' => $faker->uuid ,
                'name' => $faker->name ,
                'email' => $faker->email ,
                'phone' => $faker->phoneNumber
            ] );
        }
    }

    public function generateClients ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0 ; $i < $count ; $i ++ ) {
            CRMClients::create ( [
                'id' => $faker->uuid ,
                'name' => $faker->name ,
                'client_type' => $faker->randomElement ( [ 'J' , 'F' ] )
            ] );
        }
    }

    public function generateProjects ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0 ; $i < $count ; $i ++ ) {
            CRMProjects::create ( [
                'id' => $faker->uuid ,
                'name' => $faker->company ,
                'client_id' => CRMClients::all ()->random ()->id ,
                'project_type_id' => CRMProjectTypes::all ()->random ()->id ,
                'description' => $faker->paragraph
            ] );
        }
    }

    public function generateProjectTypes ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0 ; $i < $count ; $i ++ ) {
            CRMProjectTypes::create ( [
                'id' => $faker->uuid ,
                'name' => $faker->randomElement ( [ 'telecommunications' , 'ecology' , 'logistics' , 'army' ] ) ,
                'description' => $faker->paragraph
            ] );
        }
    }

    public function generateProjectLogins ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0 ; $i < $count ; $i ++ ) {
            CRMProjectLogins::create ( [
                'id' => $faker->uuid ,
                'user' => $faker->userName ,
                'password' => $faker->password ,
                'login_url' => $faker->url
            ] );
        }
    }

    public function generateClientConnectionTypes ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0 ; $i < $count ; $i ++ ) {
            CRMClientConnectionsTypes::create ( [
                'id' => $faker->uuid ,
                'name' => $faker->randomElement ( [ 'SEO' , 'CEO' , 'CFO' ] ) ,
                'description' => $faker->paragraph
            ] );
        }
    }

    public function generatePersonTypes ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0 ; $i < $count ; $i ++ ) {
            CRMPersonTypes::create ( [
                'id' => $faker->uuid ,
                'name' => $faker->randomElement ( [ 'programmer' , 'designer' , 'project_manager' ] ) ,
                'description' => $faker->paragraph
            ] );
        }
    }

    public function generateProjectLoginTypes ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0 ; $i < $count ; $i ++ ) {
            CRMProjectLoginTypes::create ( [
                'id' => $faker->uuid ,
                'login_id' => CRMProjectLogins::all ()->random ()->id ,
                'name' => $faker->randomElement ( [ 'FB' , 'Youtube' , 'Gmail' ] ) ,
                'description' => $faker->paragraph
            ] );
        }
    }

    public function generateProjectLoginsConnections ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0 ; $i < $count ; $i ++ ) {
            CRMProjectLoginsConnections::create ( [
                'id' => $faker->uuid ,
                'project_id' => CRMProjects::all ()->random ()->id ,
                'logins_id' => CRMProjectLogins::all ()->random ()->id
            ] );
        }
    }

    public function generatePersonConnections ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0 ; $i < $count ; $i ++ ) {
            CRMPersonConnections::create ( [
                'id' => $faker->uuid ,
                'project_id' => CRMProjects::all ()->random ()->id ,
                'person_id' => CRMPersons::all ()->random ()->id ,
                'person_type_id' => CRMPersonTypes::all ()->random ()->id ,
                'description' => $faker->paragraph
            ] );
        }
    }

    public function generateClientConnections ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0 ; $i < $count ; $i ++ ) {
            CRMClientConnections::create ( [
                'id' => $faker->uuid ,
                'client_id' => CRMClients::all ()->random ()->id ,
                'person_id' => CRMPersons::all ()->random ()->id ,
                'contact_type_id' => CRMClientConnectionsTypes::all ()->random ()->id ,
                'description' => $faker->paragraph
            ] );
        }
    }

}

