<?php namespace App\Http\Controllers;

use App\models\PcrmProjects;
use Illuminate\Routing\Controller;

class PcrmProjectsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pcrmprojects
	 *
	 * @return Response
	 */
	public function index()
	{
	    $configuration = [];

	    $configuration ['projects'] = PcrmProjects::with(['client', 'persons'])->get()->toArray();

	    //dd($configuration);

        return view('content.projects', $configuration);

//		return PcrmProjects::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pcrmprojects/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pcrmprojects
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pcrmprojects/{id}
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
	 * GET /pcrmprojects/{id}/edit
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
	 * PUT /pcrmprojects/{id}
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
	 * DELETE /pcrmprojects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}