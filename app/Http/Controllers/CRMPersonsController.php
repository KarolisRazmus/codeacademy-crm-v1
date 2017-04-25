<?php namespace App\Http\Controllers;

use App\Models\CRMPersons;
use Illuminate\Routing\Controller;

class CRMPersonsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /crmpersons
	 *
	 * @return Response
	 */
	public function index()
	{
        $persons = CRMPersons::all();

        foreach($persons as $person)
        {
            echo $person->name."</br>";
        }


//      return CRMPersons::paginate(2);

//      return CRMPersons::orderBy('created_at','dsc')->get();

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /crmpersons/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /crmpersons
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /crmpersons/{id}
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
	 * GET /crmpersons/{id}/edit
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
	 * PUT /crmpersons/{id}
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
	 * DELETE /crmpersons/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}