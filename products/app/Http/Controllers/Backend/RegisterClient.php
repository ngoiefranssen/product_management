<?php

namespace App\Http\Controllers\Backend;

use App\Models\Agent;
use App\Models\Client;
use App\Models\Register_client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class RegisterClient extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register_clients = Register_Client::all();
        return view('register_clients.index', compact('register_clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients_create = Client::all();
        $agents_create = Agent::all();

        return view('register_clients.create', compact('clients_create','agents_create'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data_now = Carbon::now();
        // $data_now->toDateTimeString();

        $validation = $request->validate(
            [
                'client_id' => 'required',
                'agent_id' => 'required',
                'data_now' => 'required',
            ],
            [
                'client_id.required' => '',
                'agent_id.required' => '',
                'data_now.required' => '',
            ]);

        Register_Client::create($validation);

        return redirect()->route('register_clients.index')->with('message => registration was successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('register_clients.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients_edit = Client::all();
        $agents_edit = Agent::all();
        $register_client_edit = Register_client::find($id);

        return view('register_clients.edit', compact('clients_edit', 'agents_edit', 'register_client_edit'));
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
        $UpdateValidation = $request->validate(
            [
                'client_id' => 'required',
                'agent_id' => 'required',
                'data_now' => 'required|size:30',
            ],
            [
                'client_id.required' => '',
                'agent_id.required' => '',
                'data_now.required' => '',
            ]);

        Register_client::find($id)->update(
            [
                'client_id' => $request->client_id,
                'agent_id' => $request->agent_id,
                'data_now' => $request->data_now,
                'created_at' => Carbon::now(),
            ]);

        return redirect()->route('register_clients.index')->with('success => ');
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

    public function register_client_delete($id)
    {
        $deleteRegisterClient = Register_client::fin($id);
        $deleteRegisterClient->delete();

        return back()->with('success => ');
    }
}
