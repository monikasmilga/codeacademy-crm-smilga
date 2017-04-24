<?php namespace App\Http\Controllers;

use App\models\PcrmProjectsLogins;
use Illuminate\Routing\Controller;

class PcrmProjectsLoginsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pcrmprojectslogins
	 *
	 * @return Response
	 */
	public function index()
	{
		return PcrmProjectsLogins::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pcrmprojectslogins/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pcrmprojectslogins
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pcrmprojectslogins/{id}
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
	 * GET /pcrmprojectslogins/{id}/edit
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
	 * PUT /pcrmprojectslogins/{id}
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
	 * DELETE /pcrmprojectslogins/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}