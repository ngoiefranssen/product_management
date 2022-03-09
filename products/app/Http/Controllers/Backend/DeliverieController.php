<?php

namespace App\Http\Controllers\Backend;

use App\Models\Delivery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Supplier;

class DeliverieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveries = Delivery::all();
        return view('deliveries.index', compact('deliveries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agents = Agent::get();
        $suppliers = Supplier::get();

        return view('deliveries.create', compact('agents', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store_deliveries = $request->validate(
            [
                'agent_id' => 'required',
                'supplier_id' => 'required',
                'description_deliv' => 'required|max:254'
            ],
            [
                'agent_id.required' => 'complete the fields for registration please!',
                'supplier_id.required' => 'complete the fields for registration please!',
                'description_deliv.required' => 'complete the fields for registration please!',
            ]);

        Delivery::create($store_deliveries);
        return redirect()->route('deliveries.index')->with('message => bravo !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $delivery = Delivery::find($id);
        $agents = Agent::get();
        $suppliers = Supplier::get();

        return view('deliveries.show', compact('delivery', 'agents', 'suppliers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $delivery = Delivery::find($id);
        $agents = Agent::get();
        $suppliers = Supplier::get();

        return view('deliveries.edit', compact('delivery', 'agents', 'suppliers'));
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
        $update_validated = $request->validate(
            [
                'agent_id' => 'required',
                'supplier_id' => 'required',
                'description_deliv' => 'required|max:254'
            ],
            [

                'agent_id.required' => 'modify without leaving this field empty',
                'supplier_id.required' => 'modify without leaving this field empty',
                'description_deliv.required' => 'modify without leaving this field empty',
            ]);

        Delivery::find($id)->update(
            [
                'agent_id' => $request->agent_id,
                'supplier_id' => $request->supplier_id,
                'description_deliv' => $request->description_deliv,
            ]);

        return redirect()->route('deliveries.index')->with('sucess', 'bravo modification avec succes');
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

    public function deleteDelivery($id)
    {
        $deleteDelivery = Delivery::find($id);
        $deleteDelivery->delete();

        return back()->with('message => bravo .....');
    }
}
