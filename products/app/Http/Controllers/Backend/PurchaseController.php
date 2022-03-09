<?php

namespace App\Http\Controllers\Backend;

use DateTime;
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
        $date_purchase = Date::now();
        //$date_exepedition = Date::now();
        $store_purchase = $request->validate(
            [
                'product_id' => 'required',
                'client_id' => 'required',
                'agent_id' => 'required',
                'quantity_pur' => 'required',
                'date_purchase' => 'required',
                'date_exepedition' => 'required',
                'ref_sender' => 'required',
            ],
            [
                'product_id.required' => '',
                'client_id.required' => '',
                'agent_id.required' => '',
                'quantity_pur.required' => '',
                'date_purchase.required' => '',
                'date_exepedition.required' => '',
                'ref_sender.required' => '',
            ]);

        Purchase::create($store_purchase);

        return redirect()->route('purchases.index')->with('success', 'bravo !');
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

    }
}
