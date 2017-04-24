<?php namespace App\Http\Controllers;

use App\Models\CRMClients;
use App\Models\CRMProjects;
use Illuminate\Routing\Controller;
use Ramsey\Uuid\Uuid;
use Faker\Factory;

class CRMProjectsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /crmprojects
	 *
	 * @return Response
	 */
	public function index()
	{
        return CRMProjects::get();

        //dd(CRMClients::select('id')->get()->toArray());

        //dd(CRMClients::select('id')->first()->toArray());

        //dd(CRMClients::pluck('id'));

        //return CRMClients::pluck('id')->toArray();


        //$faker = Factory::create();
        //return $faker->randomElement(CRMClients::pluck('id')->toArray());

        //return CRMClients::all()->random()->id;

        //return array_rand((CRMClients::pluck('id')->toArray()), 1);

        //(CRMClients::pluck('id')->toArray()));



	}

	/**
	 * Show the form for creating a new resource.
	 * GET /crmprojects/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /crmprojects
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /crmprojects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /crmprojects/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /crmprojects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /crmprojects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}