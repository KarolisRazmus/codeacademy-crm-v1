<?php namespace App\Http\Controllers;

use App\Models\CRMProjectLoginTypes;
use Illuminate\Routing\Controller;

class CRMProjectLoginTypesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /crmprojectlogintypes
	 *
	 * @return Response
	 */
	public function index()
	{
        return CRMProjectLoginTypes::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /crmprojectlogintypes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /crmprojectlogintypes
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /crmprojectlogintypes/{id}
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
	 * GET /crmprojectlogintypes/{id}/edit
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
	 * PUT /crmprojectlogintypes/{id}
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
	 * DELETE /crmprojectlogintypes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}