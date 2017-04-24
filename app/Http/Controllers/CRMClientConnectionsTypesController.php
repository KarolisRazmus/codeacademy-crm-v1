<?php namespace App\Http\Controllers;

use App\Models\CRMClientConnectionsTypes;
use Illuminate\Routing\Controller;

class CRMClientConnectionsTypesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /crmclientconnectiontypes
	 *
	 * @return Response
	 */
	public function index()
	{
		return CRMClientConnectionsTypes::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /crmclientconnectiontypes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /crmclientconnectiontypes
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /crmclientconnectiontypes/{id}
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
	 * GET /crmclientconnectiontypes/{id}/edit
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
	 * PUT /crmclientconnectiontypes/{id}
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
	 * DELETE /crmclientconnectiontypes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}