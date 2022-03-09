<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Supplier;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::get();
        $categories = Category::get();

        return view('products.create', compact('suppliers', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation_prodcuts = $request->validate(
            [
                'category_id' => 'required',
                'supplier_id' => 'required',
                'name_product' => 'required|max:30',
                'description_prod' => 'required|max:254',
                'quantity' => 'required',
            ],
            [
                'category_id.required' => 'mesage Error',
                'supplier_id.required' => 'mesage Error',
                'name_product.required' => 'mesage Error',
                'description_prod.required' => 'mesage Error',
                'quantity.required' => 'Error message',
            ]);

        Product::create($validation_prodcuts);

        return redirect()->route('products.index')->with('message', 'Bravo ! For register');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $supplier = Supplier::get();
        $categorie = Category::get();

        return view('products.show', compact('product', 'supplier', 'category'));
;    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::get();
        $suppliers = Supplier::get();

        return view('products.edit', compact('product', 'categories', 'suppliers'));
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
        $validatedUpdate_prodcuts = $request->validate(
            [
                'category_id' => 'required',
                'supplier_id' => 'required',
                'name_product' => 'required|max:30',
                'description_prod' => 'required|max:254',
                'quantity' => 'required',
            ],
            [
                'category_id.required' => 'mesage Error',
                'supplier_id.required' => 'mesage Error',
                'name_product.required' => 'mesage Error',
                'description_prod.required' => 'mesage Error',
                'quantity.required' => 'Error message',
            ]);

        Product::find($id)->update(
            [
                'category_id' => $request->category_id,
                'supplier_id' => $request->supplier_id,
                'name_product' => $request->name_product,
                'description_prod' => $request->description_prod,
                'quantity' => $request->quantity,
            ]);

        return redirect()->route('products.index')->with('message', 'Felicite for modify !');
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

    public function deleteproduct($id)
    {
        $delete_product = Product::find($id);
        $delete_product->delete();

        return back()->with('message', 'Feliciti !');
    }
}
