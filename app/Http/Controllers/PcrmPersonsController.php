<?php namespace App\Http\Controllers;

use App\models\PcrmPersons;
use Illuminate\Routing\Controller;

class PcrmPersonsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pcrmpersons
	 *
	 * @return Response
	 */

	public function index()

    {
        return PcrmPersons::get()->toArray();
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /pcrmpersons/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pcrmpersons
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pcrmpersons/{id}
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
	 * GET /pcrmpersons/{id}/edit
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
	 * PUT /pcrmpersons/{id}
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
	 * DELETE /pcrmpersons/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}