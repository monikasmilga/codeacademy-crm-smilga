<?php namespace App\Http\Controllers;

use App\models\PcrmProjectsPersonsTypesConnections;
use Illuminate\Routing\Controller;

class PcrmProjectsPersonsTypesConnectionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pcrmprojectspersonstypesconnections
	 *
	 * @return Response
	 */
	public function index()
	{
		return PcrmProjectsPersonsTypesConnections::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pcrmprojectspersonstypesconnections/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pcrmprojectspersonstypesconnections
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pcrmprojectspersonstypesconnections/{id}
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
	 * GET /pcrmprojectspersonstypesconnections/{id}/edit
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
	 * PUT /pcrmprojectspersonstypesconnections/{id}
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
	 * DELETE /pcrmprojectspersonstypesconnections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}