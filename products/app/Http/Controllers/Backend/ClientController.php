<?php

namespace App\Http\Controllers\Backend;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Laravel\Jetstream\Actions\ValidateTeamDeletion;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_clients = $request->validate(

            [
                'name_client' =>'required|max:25',
                'fisrt_name_client' => 'required|max:25',
                'kind_client' => 'required|max:5',
                'age_client' => 'required',
                'country_client' => 'required|max:50',
                'common_client' => 'required|max:30',
                'avenue_client' => 'required|max:20',
                'number_client' => 'required',
            ],
            [
                'name_client' =>'',
                'fisrt_name_client' => '',
                'kind_client' => '',
                'age_client' => '',
                'country_client' => '',
                'common_client' => '',
                'avenue_client' => '',
            ]);

        Client::create($validated_clients);
        return redirect()->route('clients.index')->with('success', 'Bravo !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client_show = Client::find($id);
        return view('clients.show', compact('client_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client_edit = Client::find($id);
        return view('clients.edit', compact('client_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedUpdate_client = $request->validate(
            [
                'name_client' =>'required|max:25',
                'fisrt_name_client' => 'required|max:25',
                'kind_client' => 'required|max:5',
                'age_client' => 'required',
                'country_client' => 'required|max:50',
                'common_client' => 'required|max:30',
                'avenue_client' => 'required|max:20',
                'number_client' => 'required',
            ],
            [
                'name_client' =>'',
                'fisrt_name_client' => '',
                'kind_client' => '',
                'age_client' => '',
                'country_client' => '',
                'common_client' => '',
                'avenue_client' => '',
                'number_client' => '',
            ]);

        Client::find($id)->update(
            [
                'name_client' => $request->name_client,
                'fisrt_name_client' => $request->fisrt_name_client,
                'kind_client' => $request->kind_client,
                'age_client' => $request->age_client,
                'country_client' => $request->country_client,
                'common_client' => $request->common_client,
                'avenue_client' => $request->avenue_client,
                'number_client' => $request->number_client,
                'created_at' => Carbon::now(),
            ]);

        return redirect()->route('clients.index')->with('message', 'Feliciti !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteClient($id)
    {
        $delete_clients = Client::find($id);
        $delete_clients->delete();

        return back()->with('success', 'success delete');
    }
}
