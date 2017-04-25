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
    /**
     * function takes:
     * @param int $count
     *
     * creates person with id, name, email, phone in crm_persons table
     */
    public function generatePersons ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0; $i < $count; $i ++ ) {
            CRMPersons::create ( [
                'id' => $faker->uuid,
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber
            ] );
        }
    }

    /**
     * function takes:
     * @param int $count
     *
     * creates client with id, name, client_type in crm_clients table
     */
    public function generateClients ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0; $i < $count; $i ++ ) {
            CRMClients::create ( [
                'id' => $faker->uuid,
                'name' => $faker->name,
                'client_type' => $faker->randomElement ( [ 'J', 'F' ] )
            ] );
        }
    }

    /**
     * function takes:
     * @param int $count
     *
     * creates project with id, name, client_id, project_type_id, description phone in crm_projects table
     */
    public function generateProjects ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0; $i < $count; $i ++ ) {
            CRMProjects::create ( [
                'id' => $faker->uuid,
                'name' => $faker->company,
                'client_id' => CRMClients::all ()->random ()->id,
                'project_type_id' => CRMProjectTypes::all ()->random ()->id,
                'description' => $faker->paragraph
            ] );
        }
    }

    /**
     * function takes:
     * @param int $count
     *
     * creates project type with id, name, description in crm_project_types table
     */
    public function generateProjectTypes ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0; $i < $count; $i ++ ) {
            CRMProjectTypes::create ( [
                'id' => $faker->uuid,
                'name' => $faker->randomElement ( [ 'telecommunications', 'ecology', 'logistics', 'army' ] ),
                'description' => $faker->paragraph
            ] );
        }
    }

    /**
     * function takes:
     * @param int $count
     *
     * creates project login with id, user, password, login_url in crm_project_logins table
     */
    public function generateProjectLogins ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0; $i < $count; $i ++ ) {
            CRMProjectLogins::create ( [
                'id' => $faker->uuid,
                'user' => $faker->userName,
                'password' => $faker->password,
                'login_url' => $faker->url
            ] );
        }
    }

    /**
     * function takes:
     * @param int $count
     *
     * creates client connection type with id, name, description in crm_client_connections_types table
     */
    public function generateClientConnectionTypes ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0; $i < $count; $i ++ ) {
            CRMClientConnectionsTypes::create ( [
                'id' => $faker->uuid,
                'name' => $faker->randomElement ( [ 'SEO', 'CEO', 'CFO' ] ),
                'description' => $faker->paragraph
            ] );
        }
    }

    /**
     * function takes:
     * @param int $count
     *
     * creates person type with id, name, description in crm_person_types table
     */
    public function generatePersonTypes ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0; $i < $count; $i ++ ) {
            CRMPersonTypes::create ( [
                'id' => $faker->uuid,
                'name' => $faker->randomElement ( [ 'programmer', 'designer', 'project_manager' ] ),
                'description' => $faker->paragraph
            ] );
        }
    }

    /**
     * function takes:
     * @param int $count
     *
     * creates project login type with id, login_id, name, description in crm_project_login_types table
     */
    public function generateProjectLoginTypes ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0; $i < $count; $i ++ ) {
            CRMProjectLoginTypes::create ( [
                'id' => $faker->uuid,
                'login_id' => CRMProjectLogins::all ()->random ()->id,
                'name' => $faker->randomElement ( [ 'FB', 'Youtube', 'Gmail' ] ),
                'description' => $faker->paragraph
            ] );
        }
    }

    /**
     * function takes:
     * @param int $count
     *
     * creates project login connection with id, project_id, logins_id in crm_project_logins_connections table
     */
    public function generateProjectLoginsConnections ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0; $i < $count; $i ++ ) {
            CRMProjectLoginsConnections::create ( [
                'id' => $faker->uuid,
                'project_id' => CRMProjects::all ()->random ()->id,
                'logins_id' => CRMProjectLogins::all ()->random ()->id
            ] );
        }
    }

    /**
     * function takes:
     * @param int $count
     *
     * creates person connection with id, project_id, person_id, person_type_id, description in crm_person_connections table
     */
    public function generatePersonConnections ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0; $i < $count; $i ++ ) {
            CRMPersonConnections::create ( [
                'id' => $faker->uuid,
                'project_id' => CRMProjects::all ()->random ()->id,
                'person_id' => CRMPersons::all ()->random ()->id,
                'person_type_id' => CRMPersonTypes::all ()->random ()->id,
                'description' => $faker->paragraph
            ] );
        }
    }

    /**
     * function takes:
     * @param int $count
     *
     * creates client connection with id, client_id, person_id, contact_type_id, description in crm_client_connections table
     */
    public function generateClientConnections ( int $count = 1 )
    {
        $faker = Factory::create ();

        for ( $i = 0; $i < $count; $i ++ ) {
            CRMClientConnections::create ( [
                'id' => $faker->uuid,
                'client_id' => CRMClients::all ()->random ()->id,
                'person_id' => CRMPersons::all ()->random ()->id,
                'contact_type_id' => CRMClientConnectionsTypes::all ()->random ()->id,
                'description' => $faker->paragraph
            ] );
        }
    }

}

