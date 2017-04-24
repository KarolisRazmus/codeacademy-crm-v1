<?php namespace App\Http\Controllers;

use App\Models\CRMProjectTypes;
use Illuminate\Routing\Controller;

class CRMProjectTypesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /crmprojecttypes
	 *
	 * @return Response
	 */
	public function index()
	{
        return CRMProjectTypes::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /crmprojecttypes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /crmprojecttypes
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /crmprojecttypes/{id}
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
	 * GET /crmprojecttypes/{id}/edit
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
	 * PUT /crmprojecttypes/{id}
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
	 * DELETE /crmprojecttypes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}