<?php namespace App\Http\Controllers;

use App\models\PcrmProjectsLoginsConnections;
use Illuminate\Routing\Controller;

class PcrmProjectsLoginsConnectionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pcrmprojectsloginsconnections
	 *
	 * @return Response
	 */
	public function index()
	{
		return PcrmProjectsLoginsConnections::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pcrmprojectsloginsconnections/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pcrmprojectsloginsconnections
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pcrmprojectsloginsconnections/{id}
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
	 * GET /pcrmprojectsloginsconnections/{id}/edit
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
	 * PUT /pcrmprojectsloginsconnections/{id}
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
	 * DELETE /pcrmprojectsloginsconnections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}