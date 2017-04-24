<?php namespace App\Http\Controllers;

use App\Models\CRMClientConnections;
use Illuminate\Routing\Controller;

class CRMClientConnectionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /crmclientconnections
	 *
	 * @return Response
	 */
	public function index()
	{
		return CRMClientConnections::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /crmclientconnections/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /crmclientconnections
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /crmclientconnections/{id}
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
	 * GET /crmclientconnections/{id}/edit
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
	 * PUT /crmclientconnections/{id}
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
	 * DELETE /crmclientconnections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}