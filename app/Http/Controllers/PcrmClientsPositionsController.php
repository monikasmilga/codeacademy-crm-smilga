<?php namespace App\Http\Controllers;

use App\models\PcrmClientsPositions;
use Illuminate\Routing\Controller;

class PcrmClientsPositionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pcrmclientspositions
	 *
	 * @return Response
	 */
	public function index()
	{
		return PcrmClientsPositions::get();
        //return PcrmClientsPositions::get()->toArray();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pcrmclientspositions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pcrmclientspositions
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pcrmclientspositions/{id}
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
	 * GET /pcrmclientspositions/{id}/edit
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
	 * PUT /pcrmclientspositions/{id}
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
	 * DELETE /pcrmclientspositions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}