<?php

namespace App\Http\Controllers\Backend;

use App\Models\Agent;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::all();
        return view('agents.index', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('agents.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agent_validation = $request->validate(
            [
                'client_id' => 'required',
                'name_agent' => 'required|max:25',
                'fisrt_name_agent' => 'required|max:25',
                'kind_agent' => 'required|max:2',
                'age_agent' => 'required',
                'country_agent' => 'required|max:50',
                'common_agent' => 'required|max:30',
                'avenue_agent' => 'required|max:10',
                'number_agent' => 'required',
            ],
            [
                'client_id.required' => 'please complete the field in front of you for registration',
                'name_agent.required' => 'please complete the field name in front of you for registration',
                'fisrt_name_agent.required' => 'please complete the field fisrt_name in front of you for registration',
                'kind_agent.required' => 'please complete the field kind in front of you for registration',
                'age_agent.required' => 'please complete the field age in front of you for registration',
                'country_agent.required' => 'please complete the field country in front of you for registration',
                'common_agent.required' => 'please complete the field common in front of you for registration',
                'avenue_agent.required' => 'please complete the field avenue in front of you for registration',
                'number_agent.required' => 'please complete the field number in front of you for registration',
            ]);

            // dd($agent_validation);

        Agent::create($agent_validation);
        return redirect()->route('agents.index')->with('success', 'please complete the field name in front of you for registration');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agent = Agent::find($id);
        return view('agents.show', compact('agent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agent = Agent::find($id);
        $clients = Client::all();

        return view('agents.edit', compact('agent', 'clients'));
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
        $agent_validation = $request->validate(
            [
                'client_id' => 'required',
                'name_agent' => 'required|max:25',
                'fisrt_name_agent' => 'required|max:25',
                'kind_agent' => 'required|max:2',
                'age_agent' => 'required',
                'country_agent' => 'required|max:50',
                'common_agent' => 'required|max:30',
                'avenue_agent' => 'required|max:10',
                'number_agent' => 'required',
            ],
            [
                'client_id.required' => 'please complete the field in front of you for registration',
                'name_agent.required' => 'please complete the field name in front of you for registration',
                'fisrt_name_agent.required' => 'please complete the field fisrt_name in front of you for registration',
                'kind_agent.required' => 'please complete the field kind in front of you for registration',
                'age_agent.required' => 'please complete the field age in front of you for registration',
                'country_agent.required' => 'please complete the field country in front of you for registration',
                'common_agent.required' => 'please complete the field common in front of you for registration',
                'avenue_agent.required' => 'please complete the field avenue in front of you for registration',
                'number_agent.required' => 'please complete the field number in front of you for registration',
            ]);

        Agent::find($id)->update(
            [
                'client_id' => $request->client_id,
                'name_agent' => $request->name_agent,
                'fisrt_name_agent' => $request->fisrt_name_agent,
                'kind_agent' => $request->kind_agent,
                'age_agent' => $request->age_agent,
                'country_agent' => $request->country_agent,
                'common_agent' => $request->common_agent,
                'avenue_agent' => $request->avenue_agent,
                'number_agent' => $request->number_agent,
                'created_at' => Carbon::now(),

            ]);

        return redirect()->route('agents.index')->with('message', 'filiciti');
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

    public function agentDelete($id)
    {
        $agentDelete = Agent::find($id);
        $agentDelete->delete();

        return back()->with('success', 'bravo !');
    }
}
