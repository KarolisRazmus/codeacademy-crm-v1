<?php namespace App\Http\Controllers;

use App\Models\CRMPersonTypes;
use Illuminate\Routing\Controller;

class CRMPersonTypesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /crmpersontypes
	 *
	 * @return Response
	 */
	public function index()
	{
		return CRMPersonTypes::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /crmpersontypes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /crmpersontypes
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /crmpersontypes/{id}
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
	 * GET /crmpersontypes/{id}/edit
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
	 * PUT /crmpersontypes/{id}
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
	 * DELETE /crmpersontypes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}