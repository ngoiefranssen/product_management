<?php

namespace App\Http\Controllers\Backend;

use App\Models\People;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::get();
        return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $peoples = People::get();
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validetedSuppliers = $request->validate(
            [
                'name_supplier' => 'required|max:25',
                'fisrt_name_supplier' => 'required|max:25',
                'kind_supplier' => 'required|max:5',
                'age_supplier' => 'required',
                'country_supplier' => 'required',
                'common_supplier' => 'required',
                'avenue_supplier' => 'required',
                'number_supplier' => 'required',
            ],
            [
                'name_supplier.required' => '',
                'fisrt_name_supplier.required' => '',
                'kind_supplier.required' => '',
                'age_supplier.required' => '',
                'country_supplier.required' => '',
                'common_supplier.required' => '',
                'avenue_supplier.required' => '',
                'number_supplier.required' => '',
            ]);

        Supplier::create($validetedSuppliers);

        return redirect()->route('suppliers.index')->with('success => felicti !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplier = Supplier::find($id);
        // $people = People::find($id);
        return view('suppliers.show', compact('supplier', 'people'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('suppliers.edit', compact('supplier'));
    }

    /* *
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validetedUpdate_supplier = $request->validate(
            [

                'name_supplier' => 'required',
                'fisrt_name_supplier' => 'required',
                'kind_supplier' => 'required',
                'age_supplier' => 'required',
                'country_supplier' => 'required',
                'common_supplier' => 'required',
                'avenue_supplier' => 'required',
                'number_supplier' => 'required',
            ],
            // [
            //     'name_supplier.required' => 'error max 3 ',
            //     'fisrt_name_supplier.required' => '',
            //     'kind_supplier.required' => '',
            //     'age_supplier.required' => '',
            //     'country_supplier.required' => '',
            //     'common_supplier.required' => '',
            //     'avenue_supplier.required' => '',
            //     'number_supplier.required' => '',
            // ]
        );

       // dd($validetedUpdate_supplier);

        Supplier::find($id)->update(
            [
                'name_supplier' => $request->name_supplier,
                'fisrt_name_supplier' => $request->fisrt_name_supplier,
                'kind_supplier' => $request->kind_supplier,
                'age_supplier' => $request->age_supplier,
                'country_supplier' => $request->country_supplier,
                'common_supplier' => $request->common_supplier,
                'avenue_supplier' => $request->avenue_supplier,
                'number_supplier' => $request->number_supplier,
                'created_at' => Carbon::now(),
            ]);

    return redirect()->route('suppliers.index')->with('message', 'Feliciti !');

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

    public function deleteSupplier($id)
    {
        $deleteSupplier = Supplier::find($id);
        $deleteSupplier->delete();

        return back()->with('message => bravo !');
    }
}
