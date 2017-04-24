<?php namespace App\Http\Controllers;

use App\models\PcrmProjectsLoginsTypes;
use Illuminate\Routing\Controller;

class PcrmProjectsLoginsTypesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pcrmprojectsloginstypes
	 *
	 * @return Response
	 */
	public function index()
	{
		return PcrmProjectsLoginsTypes::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pcrmprojectsloginstypes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pcrmprojectsloginstypes
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pcrmprojectsloginstypes/{id}
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
	 * GET /pcrmprojectsloginstypes/{id}/edit
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
	 * PUT /pcrmprojectsloginstypes/{id}
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
	 * DELETE /pcrmprojectsloginstypes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}