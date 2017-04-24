<?php namespace App\Http\Controllers;

use App\Models\CRMProjectLogins;
use Illuminate\Routing\Controller;

class CRMProjectLoginsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /crmprojectlogins
	 *
	 * @return Response
	 */
	public function index()
	{
		return CRMProjectLogins::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /crmprojectlogins/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /crmprojectlogins
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /crmprojectlogins/{id}
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
	 * GET /crmprojectlogins/{id}/edit
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
	 * PUT /crmprojectlogins/{id}
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
	 * DELETE /crmprojectlogins/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}