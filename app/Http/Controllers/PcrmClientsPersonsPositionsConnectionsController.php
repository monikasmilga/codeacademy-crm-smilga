<?php namespace App\Http\Controllers;

use App\models\PrcmClientsPersonsPositionsConnections;
use Illuminate\Routing\Controller;

class PcrmClientsPersonsPositionsConnectionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /prcmclientspersonspositionsconnections
	 *
	 * @return Response
	 */
	public function index()
	{
		return PrcmClientsPersonsPositionsConnections::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /prcmclientspersonspositionsconnections/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /prcmclientspersonspositionsconnections
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /prcmclientspersonspositionsconnections/{id}
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
	 * GET /prcmclientspersonspositionsconnections/{id}/edit
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
	 * PUT /prcmclientspersonspositionsconnections/{id}
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
	 * DELETE /prcmclientspersonspositionsconnections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}