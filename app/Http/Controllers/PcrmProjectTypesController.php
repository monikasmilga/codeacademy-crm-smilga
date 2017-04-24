<?php namespace App\Http\Controllers;

use App\models\PcrmProjectTypes;
use Illuminate\Routing\Controller;

class PcrmProjectTypesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pcrmprojecttypes
	 *
	 * @return Response
	 */
	public function index()
	{
	    return PcrmProjectTypes::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pcrmprojecttypes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pcrmprojecttypes
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pcrmprojecttypes/{id}
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
	 * GET /pcrmprojecttypes/{id}/edit
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
	 * PUT /pcrmprojecttypes/{id}
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
	 * DELETE /pcrmprojecttypes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}