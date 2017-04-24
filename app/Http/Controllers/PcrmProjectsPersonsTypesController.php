<?php namespace App\Http\Controllers;

use App\models\PcrmProjectsPersonsTypes;
use Illuminate\Routing\Controller;

class PcrmProjectsPersonsTypesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pcrmprojectspersonstypes
	 *
	 * @return Response
	 */
	public function index()
	{
        return PcrmProjectsPersonsTypes::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pcrmprojectspersonstypes/create
	 *
	 * @return Response
	 */
	public function create()
	{
        //
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pcrmprojectspersonstypes
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pcrmprojectspersonstypes/{id}
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
	 * GET /pcrmprojectspersonstypes/{id}/edit
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
	 * PUT /pcrmprojectspersonstypes/{id}
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
	 * DELETE /pcrmprojectspersonstypes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}