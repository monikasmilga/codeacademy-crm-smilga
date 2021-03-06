<?php namespace App\Http\Controllers;

use App\models\PcrmClients;
use Illuminate\Routing\Controller;

class PcrmClientsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pcrmclients
	 *
	 * @return Response
	 */
	public function index()
    {
        $configuration = [];

        $configuration ['clients'] = PcrmClients::with(['projects',])->get();
        $configuration['totalCount'] = sizeof($configuration['clients']);

        //return $configuration ['clients'];

        return view('content.clients', $configuration);


        /*
        return PcrmClients::with(['projects', 'personal'])->get();

        PcrmClients::all();
        $configuration = [
            'example' => 'Example data',
            'client' => PcrmClients::with(['projects', 'personal'])->get(),
        ];
        return view('data', $configuration); */
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pcrmclients/create
	 *
	 * @return Response
	 */
	public function create()
    {
        //
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /pcrmclients
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pcrmclients/{id}
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
	 * GET /pcrmclients/{id}/edit
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
	 * PUT /pcrmclients/{id}
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
	 * DELETE /pcrmclients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}