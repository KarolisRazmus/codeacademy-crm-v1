<?php namespace App\Http\Controllers;

use App\Models\CRMPersonConnections;
use Illuminate\Routing\Controller;

class CRMPersonConnectionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /crmpersonconnections
	 *
	 * @return Response
	 */
	public function index()
	{
		return CRMPersonConnections::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /crmpersonconnections/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /crmpersonconnections
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /crmpersonconnections/{id}
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
	 * GET /crmpersonconnections/{id}/edit
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
	 * PUT /crmpersonconnections/{id}
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
	 * DELETE /crmpersonconnections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}