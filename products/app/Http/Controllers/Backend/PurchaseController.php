<?php

namespace App\Http\Controllers\Backend;

use App\Models\Agent;
use App\Models\Client;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Date;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = Purchase::all();
        return view('purchases.index', compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products_create = Product::all();
        $clients_create = Client::all();
        $agents_create = Agent::all();

        return view('purchases.create', compact('products_create', 'clients_create', 'agents_create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store_purchase = $request->validate(
            [
                'product_id' => 'required',
                'client_id' => 'required',
                'agent_id' => 'required',
                'quantity_pur' => 'required',
                'date_purchase' => 'required',
                'date_expedition' => 'required',
                'ref_sender' => 'required',
            ],
            [
                'product_id.required' => 'please complete the product field in front !',
                'client_id.required' => 'please complete the customer field in front !',
                'agent_id.required' => 'please complete the agent field in front !',
                'quantity_pur.required' => 'please complete the quantity field in front!',
                'date_purchase.required' =>'',
                'date_expedition.required' => '',
                'ref_sender.required' => 'Enter the field in front of you reference sender',
            ]);

        Purchase::create($store_purchase);

        return redirect()->route('purchases.index')->with('success', 'Well done ! your purchases have been made successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function delete_purchase($id)
    {
        $delete_purchase = Purchase::find($id);
        $delete_purchase->delete();

        return back()->with('delete', 'your purchase has been successfully deleted');
    }
}
